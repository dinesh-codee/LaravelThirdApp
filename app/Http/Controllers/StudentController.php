<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Http\Requests\StudentStoreRequest;
use App\Http\Requests\StudentUpdateRequest;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // THE FIRST DATA ARE SENT HERE
    public function index()
    {
        $students = Student::get();
        return view("backend.students.index", compact('students'));
    }


    // FOR STORE
    public function store(StudentStoreRequest $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'address' => 'required',
        //     'contact' => 'required',
        //     'email' => 'required|email',
        //     'dob' => 'required|date',
        // ]);

        if ($request->hasFile('profile')) {
            $image = time() . '.' . $request['profile']->getClientOriginalExtension();
            $location = 'images/students';
            $request['profile']->move($location, $image);
        } else {
            $image = 'default.png';
        }
        $student = new Student();
        $student->name = $request['name'];
        $student->address = $request['address'];
        $student->email = $request['email'];
        $student->contact = $request['contact'];
        $student->dob = $request['dob'];
        $student->selected = $request['selected'];
        $student->profile = $image;
        $student->save();
        return back()->with('success', 'Student Created Successfully!');
    }

    // FOR EDIT THE EXISTING STUDENT
    public function edit($id)
    {
        $student = Student::find($id);
        if(!$student){
            abort(404);
        }
        return view('backend.students.edit', compact('student'));
    }

    // Update code
    public function update(StudentUpdateRequest $request)
    {
        // dd($request->all());    
        $student = Student::find($request['id']);
        // dd($student);
        if ($request->hasFile('profile')) {
            $image = time() . '.' . $request['profile']->getClientOriginalExtension();
            $location = 'images/students';
            $request['profile']->move($location, $image);
        } else {
            $image = $student['profile'];
        }

        $student->name = $request['name'];
        $student->address = $request['address'];
        $student->email = $request['email'];
        $student->contact = $request['contact'];
        $student->dob = $request['dob'];
        $student->selected = $request['selected'];
        $student->profile = $image;
        $student->save();
        return redirect()->route('students')->with('success', 'Student Updated Successfully!');
        // return redirect()->route('students');

    }


    // FOR DELETE THE STUDENT
    public function delete($id)
    {
        $student = Student::find($id);
        $student->delete();
        return back()->with('error', 'Student Deleted Successfully!');
    }

}