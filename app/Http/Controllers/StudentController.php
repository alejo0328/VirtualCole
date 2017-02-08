<?php

namespace App\Http\Controllers;

use App\College;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(College $college){
        return 'index';
    }

    public function create(){
        return 'create';
    }

    public function store(){


    }
}
