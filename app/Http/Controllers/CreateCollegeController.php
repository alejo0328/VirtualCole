<?php

namespace App\Http\Controllers;

use App\College;
use Illuminate\Http\Request;

class CreateCollegeController extends Controller
{
    //
    public function  index(){

        $colleges = College::all();
        return view('college.index',compact('colleges'));
    }

    public function create(){
        return view('college.create');
    }

    public function  store(Request $request){
        $college = new College($request->all());

        auth()->user()->colleges()->save($college);

        return redirect('college');

    }
    public function show(College $college){
        return $college->name;
    }
}
