<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class AddController extends Controller
{
    //
    public function addStudent(Request $request){


        header('Access-Control-Allow-Methods: GET, POST');
        header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token, x-xsrf-token, x_csrftoken, enctype, X-Requested-With');

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
