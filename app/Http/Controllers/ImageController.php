<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::get();
        return view('image', compact('images'));
    }

}
