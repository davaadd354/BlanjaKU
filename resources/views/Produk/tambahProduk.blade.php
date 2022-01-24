@extends('layouts/app')

@extends('layouts.nav')

@section('content')     
  <div class="container">
             <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/produk">Produk</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Produk</li>
                  </ol>
                </nav>
            <div class="card ">
                <div class="card-header text-center">
                    <h1 class="produk">TAMBAH PRODUK</h1>
                </div>
                <div class="card-body">
                    <form method="post" action="/produk/proses" enctype="multipart/form-data">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="Nama" class="form-control" placeholder="Nama Produk .." id="nama">
                            @if($errors->has('Nama'))
                                <div class="text-danger">
                                    {{ $errors->first('Nama')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="number" name="Harga" class="form-control" placeholder="Harga Produk" id="harga">
                            @if($errors->has('Harga'))
                                <div class="text-danger">
                                    {{ $errors->first('Harga')}}
                                </div>
                            @endif
                        </div>
                         <div class="form-group">
                            <label>Stok</label>
                            <input type="number" name="Stok" class="form-control" placeholder="Stok Produk" id="stok">
                            @if($errors->has('Stok'))
                                <div class="text-danger">
                                    {{ $errors->first('Stok')}}
                                </div>
                            @endif
                        </div>
                         <div class="form-group">
                                <label>Kategori : </label>
                                 <select name='Kategori' id="kategori">
                                    <option value='Bahan Makanan'>Bahan Makanan</option>
                                    <option value='Peralatan Rumah Tangga'>Peralatan Rumah Tangga</option>
                                    <option value='Alat Tulis'>Alat Tulis</option>
                                 </select>
                         </div>
                         <div class="form-group">
                        <label >Gambar : </label>
                        <input type="File" name="file" id="gambar">
                        </div>                       
                        <div class="form-group">
                            <input type="submit" value="submit" id="submit" class="btn btn-success" id="submit" hidden>
                        </div>
                    </form>
                  <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" onclick="validasi()">
                      Lihat Detail
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header bg-dark">
                            <h2 class="modal-title produk" id="exampleModalLabel">Detail Input Produk</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body bg-dark">
                             <table class="table table-bordered table-striped table-dark text-white">
                                <tr>
                                    <td style="font-weight: bold;">Nama Produk</td>
                                     <td id="tampilNama"></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Harga</td>
                                     <td id="hargaTampil"></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Stok</td>
                                     <td id="stokTampil"></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Kategori</td>
                                     <td id="kategoriTampil"></td>
                                </tr>
                            </table>
                            </div>
                          <div class="modal-footer bg-dark">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
                            <button type="button" class="btn btn-primary" onclick="submit()">Tambah Produk</button>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
   <script type="text/javascript">  
function validasi(){
     var nama = document.getElementById('nama').value;
    var harga = document.getElementById("harga").value;
    var stok = document.getElementById("stok").value;
    var gambar = document.getElementById("gambar").value;
    var kategori = document.getElementById('kategori').value;
     if(nama == ''){
        swal('Gagal','Nama Produk tidak boleh kosong','error');
    } 
     else if(harga == ''){
        swal('Gagal','Harga Produk tidak boleh kosong','error');
    }
     else if(stok == ''){
        swal('Gagal','Stok Produk tidak boleh kosong','error');
    }
     else if(gambar == ''){
        swal('Gagal','Gambar Produk tidak boleh kosong','error');
     } 
     else if(kategori == ''){
         swal('Gagal','Kategori Produk tidak boleh kosong','error');
     }  
     else if(nama != '' && harga != '' && stok != '' && gambar != '' && kategori != ''){
        $('#tampilNama').html(nama);
        $('#hargaTampil').html(harga);
        $('#stokTampil').html(stok);
        $('#kategoriTampil').html(kategori);
        $('#modalDetail').modal('show');
     }
}
function submit(){
    document.getElementById('submit').click();
    swal('Berhasil','Produk Berhasil ditambahkan','success');
}
    </script>
