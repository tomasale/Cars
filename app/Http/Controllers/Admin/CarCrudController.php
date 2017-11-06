<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CarRequest as StoreRequest;
use App\Http\Requests\CarRequest as UpdateRequest;

class CarCrudController extends CrudController
{
    public function setup()
    {

    //     $this->crud->addField([
    //         // MANDATORY
    //        'name'  => 'address', // DB column name (will also be the name of the input)
    //        'label' => 'Street address', // the human-readable label for the input
    //        'type'  => 'text', // the field type (text, number, select, checkbox, etc)

        $this->crud->setModel('App\Car');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/car');
        $this->crud->setEntityNameStrings('car', 'cars');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        $this->crud->setFromDb();

        $this->crud->setColumns(['name']);
        $this->crud->addField([
        'name' => 'name',
        'label' => "Car name"
        ]);

        // ------ CRUD FIELDS laikinai komentuoju
        // $this->crud->addField($field_definition_array, 'update/create/both');
        // $this->crud->addField('db_column_name', 'update/create/both'); // a lazy way to add fields: let the CRUD decide what field type it is and set it automatically, along with the field label
        // $this->crud->addFields($array_of_fields_definition_arrays, 'update/create/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');

        // ------ CRUD COLUMNS laikinai komentuoju
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        // $this->crud->addColumns(); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']);
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);
        
        // $this->crud->setColumns(); // set the columns you want in the table view, either as array of column names, or multidimensional array with all columns detailed with their types
        

        // ------ CRUD BUTTONS
        // $this->crud->addButton($stack, $name, $type, $content, $position); // add a button; possible types are: view, model_function
        // $this->crud->addButtonFromModelFunction($stack, $name, $model_function_name, $position); // add a button whose HTML is returned by a method in the CRUD model
        // $this->crud->addButtonFromView($stack, $name, $view, $position); // add a button whose HTML is in a view placed at resources\views\vendor\backpack\crud\buttons
        // $this->crud->removeButton($name);
        // $this->crud->removeButtonFromStack($name, $stack);

        // ------ CRUD ACCESS
        // $this->crud->allowAccess('list');
        // $this->crud->allowAccess(['list', 'create', 'delete']);
        // $this->crud->denyAccess('list');
        // $this->crud->denyAccess(['list', 'create', 'delete']);
        
        // $this->crud->hasAccess('add'); // returns true/false
        // $this->crud->hasAccessOrFail('add'); // throws 403 error
        // $this->crud->hasAccessToAll(['create', 'update']); // returns true/false
        // $this->crud->hasAccessToAny(['create', 'update']); // returns true/false

        // ------ CRUD REORDER
        // $this->crud->addField()->beforeField('name'); // will show this before the given field
        // $this->crud->addField()->afterField('name'); // will show this after the given field

        // $this->crud->addColumn()->beforeColumn('name'); // will show this before the given column
        // $this->crud->addColumn()->afterColumn('name'); // will show this after the given column

        // $this->crud->enableReorder('label_name', MAX_TREE_LEVEL);
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('reorder');
        
        // $this->crud->disableReorder();
        // $this->crud->isReorderEnabled(); // return true/false

        // $this->crud->enableReorder('label_name', MAX_TREE_LEVEL);
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('reorder');

        // ------ CRUD DETAILS ROW
        // $this->crud->enableDetailsRow();
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('details_row');
        // NOTE: you also need to do overwrite the showDetailsRow($id) method in your EntityCrudController to show whatever you'd like in the details row OR overwrite the views/backpack/crud/details_row.blade.php
        
        // $this->crud->disableDetailsRow();

        // $this->crud->enableDetailsRow();
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('details_row');
        // NOTE: you also need to do overwrite the showDetailsRow($id) method in your EntityCrudController to show whatever you'd like in the details row OR overwrite the views/backpack/crud/details_row.blade.php

        // ------ REVISIONS
        // You also need to use \Venturecraft\Revisionable\RevisionableTrait;
        // Please check out: https://laravel-backpack.readme.io/docs/crud#revisions
        // $this->crud->allowAccess('revisions');

        // You also need to use \Venturecraft\Revisionable\RevisionableTrait;
        // Please check out: https://laravel-backpack.readme.io/docs/crud#revisions
        // $this->crud->allowAccess('revisions');

        // ------ AJAX TABLE VIEW
        // Please note the drawbacks of this though: 
        // - 1-n and n-n relationship columns won't be searched anymore;
        // - date and datetime columns won't be sortable anymore;
        // $this->crud->enableAjaxTable();

        // Please note the drawbacks of this though:
        // - 1-n and n-n columns are not searchable
        // - date and datetime columns won't be sortable anymore
        // $this->crud->enableAjaxTable();

        // ------ DATATABLE EXPORT BUTTONS
        // Show export to PDF, CSV, XLS and Print buttons on the table view.
        // Does not work well with AJAX datatables.
        // $this->crud->enableExportButtons();

        // Show export to PDF, CSV, XLS and Print buttons on the table view.
        // Does not work well with AJAX datatables.
        // $this->crud->enableExportButtons();

        // ------ ADVANCED QUERIES
        // $this->crud->addClause('active');
        // $this->crud->addClause('type', 'car');
        // $this->crud->addClause('where', 'name', '=', 'car');
        // $this->crud->addClause('whereName', 'car');
        // $this->crud->addClause('whereHas', 'posts', function($query) {
        //      $query->activePosts();
        //  });
        // $this->crud->orderBy();
        // $this->crud->groupBy();
        // $this->crud->limit();
    }

    public function store(StoreRequest $request)
    {
        return parent::storeCrud();
    }

    public function update(UpdateRequest $request)
    {
        return parent::updateCrud();
    }
}
