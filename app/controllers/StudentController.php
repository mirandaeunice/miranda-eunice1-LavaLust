<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        $this->call->view('student_home');
    }

    public function profile()
    {
        $student = [
            'student_id' => 'MCC2024-00158',
            'name' => 'Eunice Miranda',
            'course' => 'BS Information Technology',
            'year' => '3rd Year',
            'section' => '3F4',
            'email' => 'eunicemiranda@gmail.com'
        ];

        $this->call->view('student_profile', $student);
    }
}