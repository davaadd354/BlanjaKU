@extends('layouts/app')

@section('content')

<div class="container-fluid">
    <div class="container d-flex justify-content-center" >
        <div class="row">
            <div class="col-md-10 offset-md-1 mt-2">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Form</li>
                  </ol>
                </nav>
            </div>
            <div class="col-md-10 offset-md-1">
                <div class="card pekerja mt-1 mb-5">
                    <div class="card-header text-center">
                        Data Peserta Bootcamp - <strong>PT.REGARSPORT</strong> - <a href="https://regarsport.net" target="_blank">https://regarsport.net</a>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/') }}"><img src="https://img.icons8.com/fluency/48/000000/circled-left-2.png"/> </a>
                        <br/>
                        <br/>
                        
                        <form method="post" action="{{ url('form_hasil') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama pegawai ..">
                                @if($errors->has('nama'))
                                    <div class="text-danger">
                                        {{ $errors->first('nama')}}
                                    </div>
                                @endif
                            </div>
                              <div class="form-group">
                                <label>Tempat Tanggal Lahir</label>
                                <input type="date" name="ttl" class="form-control">
                                @if($errors->has('ttl'))
                                    <div class="text-danger">
                                        {{ $errors->first('ttl')}}
                                    </div>
                                @endif
                            </div>
                              <div class="form-group text-start ">
                                <label class="text-white">Jenis Kelamin</label><br>
                                <input type="radio" name="gender" value="Laki Laki">Laki laki
                                <input type="radio" name="gender" value="Perempuan">Perempuan
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control" placeholder="Masukkan Alamat.."></textarea>
                            </div>
                            <div class="form-group tombol">
                                <input type="submit" class="btn" value="Simpan" style=" background-color: rgba(0,0, 0, 0.3);border: 0.5px solid white;width: 100%;color: white;" >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection