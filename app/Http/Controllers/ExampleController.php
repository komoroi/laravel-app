<?php

namespace App\Http\Controllers;

use App\Models\Example;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index()
    {
        return view(view :'welcome');
    }
    public function example()
    {
        $examples = Example::all();
        // $examples = Example::find(1);
        // $examples = Example::where('id',1)->get();
        // $examples = Example::wherein('id',[1,2])->get();

        return view('example',['examples' => $examples]);
    }
}
