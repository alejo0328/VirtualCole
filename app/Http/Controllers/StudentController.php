<?php

namespace App\Http\Controllers;

use App\College;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    public function index(){

    }

    public function create(College $college){
        return view('student.create',compact('college'));
    }

    public function store(College $college ,Request $request){
        $student = new Student([
            'college_id'=>$college->id,
            'dni'=>$request->get('dni'),
            'firstName'=>$request->get('firstName'),
            'lastName'=>$request->get('lastName'),
            'sex'=>$request->get('sex'),
            'birthday'=>$request->get('birthday'),
        ]);

        $student->save();

       return Redirect::route('college.show',$college->id);

    }
}
