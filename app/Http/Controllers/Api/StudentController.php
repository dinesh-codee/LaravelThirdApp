<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
            if($students){
                return response()->json([
                    'code' => 200,
                    'message'=> $students,
                ]);
            }else{
                return response()->json([
                    'code' => 404,
                    'message'=> 'No students found',
                ]);
            }
    }
}
