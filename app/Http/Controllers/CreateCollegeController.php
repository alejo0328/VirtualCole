<?php

namespace App\Http\Controllers;

use App\College;
use Illuminate\Http\Request;

class CreateCollegeController extends Controller
{
    //

    public function create(){
        return view('college.create');
    }

    public function  store(Request $request){
        $college = new College($request->all());

        auth()->user()->colleges()->save($college);

        return $college->name;

    }
}
