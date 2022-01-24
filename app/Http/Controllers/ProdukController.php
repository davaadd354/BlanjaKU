<?php

namespace App\Http\Controllers;

use App\product;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ProdukController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }
    public function data(){
       //$product = product::get();
        $product = DB::table('products')->paginate(2);
        return view('Produk/dataProduk',compact('product'));
    }
     public function tambah(){
        return view('Produk/tambahProduk');
    }
    public function proses(Request $request){
         $messages = [
            'required' => 'Data Wajib diisi'
        ];
         $this->validate($request,[
            'Nama'    => 'required',
            'Harga'     => 'required',
            'Stok' => 'required',
            'Kategori' => 'required',
            'file' => 'required|file|image|mimes:jpeg,png,jpg'
        ]);
         //Menyimpan file kedalam variable
         $file = $request->file('file');
         //tentukan tujuan upload
         $upload_file = 'Gambar';
          //Nama file untuk database & folder
         $nama_file = time()."_".$file->getClientOriginalName();
         //Upload file
         $file->move($upload_file,$nama_file);
        
          product::create([
            'Nama'    => $request->Nama,
            'file'    => $nama_file,
            'Harga'     => $request->Harga,
            'Stok' => $request->Stok,
            'Kategori' => $request->Kategori
        ]);

          return redirect('/produk');
    }
    public function edit($id){
        $product = product::find($id);
        return view ('Produk/editProduk',compact('product'));
    }
    public function upload($id , Request $request){
        $messages = [
            'required' => 'Data Wajib diisi'
        ];
         $this->validate($request,[
            'Nama'    => 'required',
            'Harga'     => 'required',
            'Stok' => 'required',
            'Kategori' => 'required'
        ]);
       
         $product  = product::find($id);
         $product->Nama = $request->Nama;
         $product->Harga = $request->Harga;
         $product->Stok = $request->Stok;
         $product->Kategori = $request->Kategori;
         $product->save();

         return redirect('/produk');
    }
    public function hapus($id){
         $product = product::find($id);
        //Hapus File
        File::delete('Gambar/'.$product->file);
        //Hapus Data
        $product->delete();
        

        return redirect('/produk');
    }
    public function cari(Request $request){
        $cari = $request->cari;

        $product = DB::table('products')
        ->where('Nama','like',"%".$cari."%")
        ->paginate();

        return view('Produk/dataCari',compact('product','cari'));
    }





















    public function gambar(){
        return view('gambar');
    }
    public function gambar_proses(Request $request){
        $this->validate($request,[
            'file' => 'required'
        ]);
        // menyimpan data file yang diupload ke variabel $file
    $file = $request->file('file');
        // isi dengan nama folder tempat kemana file diupload
    $tujuan_upload = 'Gambar';
    $file->move($tujuan_upload,$file->getClientOriginalName());
    return redirect('produk');
    }
}
