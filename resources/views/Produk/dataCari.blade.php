@extends('layouts/app')

@extends('layouts.nav')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 offset-md-1">
			<div class="container my-4">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{url('/produk')}}">Produk</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data Pencarian</li>
                  </ol>
                </nav>
            <div class="card ">
                <div class="card-header text-center">
                     <h1 class="produk">DATA PRODUK</h1>
                </div>
                <div class="card-body">
                   <h4>Hasil pencarian dari " <i>{{$cari}}</i> " </h4>
                    <table class="table table-bordered table-hover table-striped my-3">
                        <thead>
                            <tr>
                            	<th>No.</th>
                                <th>Nama</th>
                                <th>Gambar</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Kategori</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php $n = 1; ?>
                            @foreach($product as $p)
                            <tr>
                            	<td class="text-center">{{ $n++ }}</td>
                                <td>{{ $p->Nama }}</td>
                                <td><img src="{{ url('Gambar/'.$p->file) }}" alt="gambar" width="80px"></td>
                                <td>{{'Rp'.number_format($p->Harga,2,',','.')}}</td>
                                <td>{{ $p->Stok }}</td>
                                <td>{{ $p->Kategori }}</td>
                                <td >
                                    <div class="row">
                                        <div class="col-6 pr-1">
                                        <a href="/produk/edit/{{$p->id}}" class="btn btn-warning text-white" style="margin-right: 10px;"> Edit</a>
                                        </div>
                                        <div class="col-6 pl-1">
                                        <a href="/produk/hapus/{{ $p->id }}" class="btn btn-danger" onclick="return confirm('Apa Kamu Yakin menghapus Produk Ini?')">Hapus</a>
                                        </div> 
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
		</div>
	</div>
</div>
@endsection