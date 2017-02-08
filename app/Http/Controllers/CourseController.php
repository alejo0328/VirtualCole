<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CourseController extends Controller
{
    public function index(){
        $courses=Course::all();

        return view('course.index',compact('courses'));
    }

    public function create(){

        return view('course.create');
    }

    public function store(Request $request){

        $course = new Course([
            'name'=>$request->get('name'),
            'credits'=>$request->get('credits')
        ]);

        $course->save();

        return Redirect('course');
    }

    public function delete(Course $course){
        $course->delete();

        return Redirect('course');
    }
}
