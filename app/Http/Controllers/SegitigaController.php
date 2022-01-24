<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Segitiga;


class SegitigaController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function hitung(){
        return view('Segitiga/hitung_segitiga');
    }
    public function hasil(Request $request){
         $this->validate($request,[
            'alas'    => 'required',
            'tinggi'  => 'required'
        ]);

        $alas = $request->alas;
        $tinggi = $request->tinggi;

        $segitiga = new Segitiga;
        $segitiga->setAlas($alas);
        $segitiga->setTinggi($tinggi);
        $segitiga->getLuas();

        return view('Segitiga/hasil',compact('segitiga'));

    }
}
