@extends('layouts/app')
@extends('layouts.nav')
@section('content')
  <div class="container my-4">
             <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/produk">Produk</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Produk</li>
                  </ol>
                </nav>
            <div class="card">
                <div class="card-header text-center">
                    <h1 class="produk">EDIT PRODUK</h1>
                </div>
                <div class="card-body">
                    <form method="post" action="/produk/upload/{{ $product->id }}" enctype="multipart/form-data">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="Nama" class="form-control" placeholder="Nama Produk .." value="{{ $product->Nama}}" id="nama_edit">
                            @if($errors->has('Nama'))
                                <div class="text-danger">
                                    {{ $errors->first('Nama')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="number" name="Harga" class="form-control" placeholder="Harga Produk" value="{{ $product->Harga }}" id="harga_edit">
                            @if($errors->has('Harga'))
                                <div class="text-danger">
                                    {{ $errors->first('Harga')}}
                                </div>
                            @endif
                        </div>
                         <div class="form-group">
                            <label>Stok</label>
                            <input type="number" name="Stok" class="form-control" placeholder="Stok Produk" value="{{ $product->Stok }}" id="stok_edit">
                            @if($errors->has('Stok'))
                                <div class="text-danger">
                                    {{ $errors->first('Stok')}}
                                </div>
                            @endif
                        </div>
                         <div class="form-group">
                                <label>Kategori : </label>
                                 <select name='Kategori' id="kategori_edit">
                                    <option value='Bahan Makanan'>Bahan Makanan</option>
                                    <option value='Peralatan Rumah Tangga'>Peralatan Rumah Tangga</option>
                                    <option value='Alat Tulis'>Alat Tulis</option>
                                 </select>
                         </div>      
                           <div class="form-group">
                            <img src="{{ url('Gambar/'.$product->file) }}" alt="gambar" width="80px">
                             <label >Gambar : </label>
                                <input type="File" name="file" id="gambar_edit">
                            </div>                      
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan" id="edit" hidden>
                        </div>
 
                    </form>
                      <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" onclick="validasi_edit()">
                      Lihat Detail
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modalEditProduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                     <td id="editNama"></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Harga</td>
                                     <td id="editHarga"></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Stok</td>
                                     <td id="editStok"></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Kategori</td>
                                     <td id="editKategori"></td>
                                </tr>
                            </table>
                            </div>
                          <div class="modal-footer bg-dark">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
                            <button type="button" class="btn btn-primary" onclick="simpan_edit()">Edit Produk</button>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    @endsection
  
    <script type="text/javascript">
   
   function validasi_edit(){
    var nama_edit = document.getElementById('nama_edit').value;
    var harga_edit = document.getElementById("harga_edit").value;
    var stok_edit = document.getElementById("stok_edit").value;
    var kategori_edit = document.getElementById('kategori_edit').value;
      if(nama_edit == ''){
        swal('Gagal','Nama Produk tidak boleh kosong','error');
    } 
      else if(harga_edit == ''){
        swal('Gagal','Harga Produk tidak boleh kosong','error');
    }
      else if(stok_edit == ''){
        swal('Gagal','Stok Produk tidak boleh kosong','error');
    }  
    else if(kategori_edit == ''){
        swal('Gagal','Stok Produk tidak boleh kosong','error');
    }
     else if (nama_edit != '' && harga_edit != '' && stok_edit != '' && kategori_edit != ''){
        $('#editNama').html(nama_edit);
        $('#editHarga').html(harga_edit);
        $('#editStok').html(stok_edit);
        $('#editKategori').html(kategori_edit);
        $('#modalEditProduk').modal('show');
     }
    }
    function simpan_edit(){
        document.getElementById('edit').click();
        swal('Berhasil','Produk Berhasil di Edit','success');

    }

</script>
