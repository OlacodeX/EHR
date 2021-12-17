<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('Pages.landing');
    }
    public function details(){
        return view('Pages.details_form');
    }
    public function store(){
        
        $symptoms= $_POST['symptom']; 
        $gender=$_POST['gender']; 
        $yearOfBirth=$_POST['age'];
         $data = array(
        'yearOfBirth' => $yearOfBirth,
        'symptoms' => $symptoms,
        'gender' => $gender
    );
        return view('file')->with($data);
    }
}
