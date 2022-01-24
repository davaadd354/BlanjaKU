@extends('layout/app/app')

<div class="container-fluid">
	<div class="container mb-5 mt-5">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
				    <li class="breadcrumb-item"><a href="{{ url('/form') }}">Form</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Hasil Form</li>
				  </ol>
				</nav>
				<div class="card pekerja">
					<div class="card-header text-white text-center" style="border-bottom: 1px solid white;"><h1>Data Peserta</h1><hr></div>
				  <div class="card-body text-white">
					<p>Nama            : <i>{{$nama}}</i></p>
					<p>Tanggal Lahir   : <i>{{$ttl}}</i></p>
					<p>Jenis Kelamin   : <i>{{$gender}}</i></p>
					<p>Alamat          : <i>{{$alamat}}</i></p>
					<a href="{{ url('/form') }}"><img src="https://img.icons8.com/fluency/48/000000/circled-left-2.png"/> </a>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>