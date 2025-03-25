<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index(){
        return view ("backend.students.index");
    }
    public function create(){
        return view("backend.students.create");
    }
}
