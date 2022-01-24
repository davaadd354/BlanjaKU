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
                    <li class="breadcrumb-item active" aria-current="page">Produk</li>
                  </ol>
                </nav>
            <div class="card ">
                <div class="card-header text-center">
                     <h1 class="produk">DATA PRODUK</h1>
                </div>
                <div class="card-body">

                    <a href="{{url('/produk/tambah_produk')}}" class="btn btn-primary mb-3"><img src="https://img.icons8.com/ios-glyphs/50/ffffff/pencil.png" width="25px">  Input Produk</Produ></a>
                    
                    <form action="{{url('produk/cari')}}" method="GET">
                        <input type="text" name="cari" placeholder="Cari Produk.." value="{{ old('cari') }}" >
                        <input type="submit" value="Cari" class="btn btn-primary">
                    </form>
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
                                        <a href="/produk/edit/{{$p->id}}" class="btn btn-warning text-white" style="margin-right: 10px;"><img src="img/icons8-edit-64.png" style="height: 23px;"></a>
                                        </div>
                                        <div class="col-6 pl-1">
                                        <a href="/produk/hapus/{{ $p->id }}" class="btn btn-danger"  onclick="alert_hapus()"><img src="img/delete.png" style="height: 23px;"></a>
                                        </div> 
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination justify-content-center">
                        {{$product->links()}}
                    </div>

                </div>
            </div>
        </div>
		</div>
	</div>
</div>
@endsection