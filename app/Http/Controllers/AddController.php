<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class AddController extends Controller
{
    //
    public function addStudent(Request $request){

        $student = new Student();
        $student->fullname = $request->input('fullname');
        $student->age = $request->input('age');
        $student->course = $request->input('course');
        $student->photo = $request->input('photo');
        $student->save();
        $response = array('response'=> 'Student Added','success'=>true);
        return $response;
    }
}
