<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarList;

class FileController extends Controller
{
    public function index(Request $request)
    {
        $carlists = CarList::orderBy('id', 'ASC')->paginate(5);
        return view('files.index', compact('carlists'))
            ->with('i', ($request->input('page', 1) - 1 ) * 5 );
    }

    public function create()
    {
        return view('files.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg|max:2048',
        ]);

        $carlist = new CarList($request->input());

        if ($file = $request->hasFile('image'))
        {
            $file = $request->file('image');

            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path().'/images/';
            $file->move($destinationPath,$fileName);

            $carlist->image = $fileName;
        }

        $carlist->save();
        return redirect()->route('upload.index')
            ->with('Success', 'File is uploaded');
    }
        
}
