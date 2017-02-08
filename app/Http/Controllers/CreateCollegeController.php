<?php

namespace App\Http\Controllers;

use App\College;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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

        return view('college.show', compact('college'));
    }

    public function delete(College $college){
        $college->delete();

        return Redirect('college');
    }
}
