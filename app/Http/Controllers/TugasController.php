<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    //
    public function index(){
        return view('uts-form-validation');
    }

        public function tugas_php(){
        return view('polindrome_php1');
    }
        public function tugas_php2(){
        return view('polindrome_php2');
    }
}
