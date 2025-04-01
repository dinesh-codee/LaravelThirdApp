<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index(){
        $students = Student::get();
        return view("backend.students.index", compact('students'));
    }
    public function create(){
        return view("backend.students.create");
    }

    public function store(Request $request){
        if($request->hasFile('profile')){
            $image = time().'.'.$request['profile']->getClientOriginalExtension();
            $location = 'images/students';
            $request['profile']->move($location, $image);
        }
        $student = new Student();
        $student-> name = $request['name'];
        $student-> address = $request['address'];
        $student-> email = $request['email'];
        $student-> contact = $request['contact'];
        $student-> dob = $request['dob'];
        $student-> selected = $request['selected'];
        $student-> profile = $image;
        $student-> save();
        return back();
    }
}
