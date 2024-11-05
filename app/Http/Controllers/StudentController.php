<?php

// This file is part of the App\Http\Controllers namespace
namespace App\Http\Controllers;

// This is to import the Student Model so that we can access and manipulate the Student table
use App\Models\Student;

// This Class is responsible for the logic and operations for the API
class StudentController extends Controller
{
    /**
     * @todo: The show function returns a view responsible for displaying a single student it accepts the student-ID as a parameter
     */
    public function show($id) {
        /**
         * @todo: Responsible for rendering the view for a specific student and it accepts the student-ID as a parameter
         */
        return view('/studentprofile', array('student'=>Student::find($id)));
    }

    /**
     * @todo: The list function returns a view responsible for displaying all students it doesnt expect any parameter
     */
    public function list() {
        return view('/studentlisting', array('students'=>Student::all()));
    }
}
