<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //
    public function index(){
        return view ("backend.teachers.index");
    }
    public function store(Request $request){
        if($request->hasFile('profile')){
            $image = time().'.'.$request['profile']->getClientOriginalExtension();
            $location = 'images/teachers';
            $request['profile']->move($location, $image);
        }
        $teacher = new Teacher();
        $teacher-> name = $request['name'];
        $teacher-> address = $request['address'];
        $teacher-> email = $request['email'];
        $teacher-> contact = $request['contact'];
        $teacher-> dob = $request['dob'];
        $teacher-> selected = $request['selected'];
        $teacher-> profile = $request['profile'];
        $teacher-> save();
    }
}
