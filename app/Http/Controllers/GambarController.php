<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\gambar;

class GambarController extends Controller
{ 

    public function index(){
        // return view('gambar',['title'=>'#27-Laravel MultiUpload File']);
        return view('gambar');
    } 
    // public function proses(Request $request){
    //     $this->validate($request, [
    //         'files.*' => 'required|file|max:2000',
    //     ]);
    //     $files = [];
    //     foreach ($request->file('files') as $file) {
    //         if ($file->isValid()) {
    //             $nama_file = time()."_".$file->getClientOriginalName();
    //             $file->move("gambar2",$nama_file);
    //             $files[] = [
    //                 'filename' => $file->getClientOriginalName(),
    //             ];
    //         }
    //     }
    //     gambar::insert($files);
    //     return redirect()
    //         ->back()
    //         ->withSuccess(sprintf('Total %s berkas berhasil diunggah.', count($files)));
    // }

}
