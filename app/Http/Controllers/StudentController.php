<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
	public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function Dashboard()
    {
    	return view ('student.dashboard');
    }
    public function listTabungan()
	{
		return view ('student.list-tabungan');
	}
  	
}
