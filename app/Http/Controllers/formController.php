<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('dataPekerja/form');
    }
    public function postData(Request $request)
    {
        // $data = [
        //     'nama'          =>  $request->input('nama'),
        //     'alamat'        =>  $request->input('alamat'),
        //     'ttl'           =>  $request->input('ttl'),
        //     'gender'        =>  $request->input('gender')
        // ];
        // dd($data);
        $nama = $request->nama;
        $alamat = $request->alamat;
        $ttl = $request->ttl;
        $gender = $request->gender;

        return view('dataPekerja/hasil',compact('nama','alamat','ttl','gender'));
    }
}
