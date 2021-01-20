<?php

namespace App\Http\Controllers;

use Session;

use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function dashboard()
	{
		return view ('admin.dashboard');
	}
	
	public function profile()
	{
		return view ('admin.profile');
	}

	public function listStudent()
	{
		return view ('admin.list-students');
	}

	public function listsClass()
	{
		return view ('admin.list-class');
	}

	public function listsTeacher()
	{
		return view ('admin.list-teacher');
	}
	

	public function addClass()
	{
		return view ('admin.add-Class');
	}
	public function SaveAddClass(Request $request){
            Session::flash('sukses','Data Berhasil disimpan');
        return back();
    }

	public function addStudent()
	{
		return view ('admin.add-Student');
	}
	public function SaveAddStudent(Request $request){
            Session::flash('sukses','Data Berhasil disimpan');
        return back();
    }

	public function listTabungan()
	{
		return view ('admin.list-tabungan');
	}
	public function detailTabungan()
	{
		return view ('admin.detail-tabungan');
	}
	public function detailTabunganSiswa()
	{
		return view ('admin.detail-tabungan-siswa');
	}
    public function table (){
        return view ('admin.table');
    }

    public function form (){
        return view ('admin.form');
    }
}
