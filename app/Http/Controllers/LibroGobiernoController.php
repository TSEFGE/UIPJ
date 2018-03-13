<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibroGobiernoController extends Controller
{
    public function index(){
    	return view('librogobierno');
    }
}
