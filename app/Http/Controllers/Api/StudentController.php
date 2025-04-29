<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // LIST FUNCTION
    public function index()
    {
        $students = Student::latest()->get();
        if ($students) {
            return response()->json([
                'code' => 200,
                'message' => $students,
            ]);
        } else {
            return response()->json([
                'code' => 404,
                'message' => 'No students found',
            ]);
        }
    }

    // STORE FUNCTION
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);
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
        if ($student) {
            return response()->json([
                'code' => 200,
                'message' => 'Student Created Successfully!',
                'student' => $student,
            ]);
        } else {
            return response()->json([
                'code' => 501,
                'message' => 'Student not created',
                'student' => $student,
            ]);
        }
    }
    
    // UPDATE FUNCTION
    public function update(Request $request, $id){
        $student = Student::findOrFail($id);
        if ($request->hasFile('profile')) {
            $image = time() . '.' . $request['profile']->getClientOriginalExtension();
            $location = 'images/students';
            $request['profile']->move($location, $image);
        } else {
            $image = 'default.png';
        }
        $student->name = $request['name'];
        $student->address = $request['address'];
        $student->email = $request['email'];
        $student->contact = $request['contact'];
        $student->dob = $request['dob'];
        $student->selected = $request['selected'];
        $student->profile = $image;      
        $student->save();
        
        if ($student) {
            return response()->json([
                'code' => 200,
                'message' => 'Student Updated Successfully!',
                'student' => $student,
            ]);
        } else {
            return response()->json([
                'code' => 501,
                'message' => 'Student not updated',
                'student' => $student,
            ]);
        }

    }

    // THE DELETE FUNCTION
    public function delete($id)
    {
        $student = Student::findOrfail($id);
        if ($student) {
            $student->delete();
            return response()->json([
                'code' => 200,
                'message' => 'Student Deleted Successfully!',
            ]);
        } else {
            return response()->json([
                'code' => 404,
                'message' => 'Student not found',
            ]);
        }
    }
}