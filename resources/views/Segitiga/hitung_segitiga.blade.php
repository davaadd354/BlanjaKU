@extends('layouts/app')

@section('content')

<div class="container my-4">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			 <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Hitung Segitiga</li>
                  </ol>
                </nav>
			<div class="card" style="box-shadow: 0px 0px 40px black;">
				<div class="card-header text-center text-white bg-primary">
					<h3>Menghitung Luas Segitiga</h3>
				</div>
				<div class="card-body ">
					<a href="{{ url('/') }}"><img src="https://img.icons8.com/fluency/48/000000/circled-left-2.png"/> </a>
					<img src="img/hitung.jpg" style="display: block;margin: auto;" alt="rumus">
					<form method="post" action="{{url('/hasil')}}">
						  {{ csrf_field() }}
                        {{ method_field('PUT') }}
						  <div class="form-group">
						    <label for="alas">Alas</label>
						    <input type="number" class="form-control" id="alas" placeholder="Masukkan alas segitiga..(cm)" name="alas">
						  </div>
						  <div class="form-group">
						    <label for="tinggi">Tinggi</label>
						    <input type="number" class="form-control" id="tinggi" placeholder="Masukkan tinggi segitiga..(cm)" name="tinggi">
						  </div>
						  <button type="submit" class="btn btn-primary" style="display: block;margin: auto;">Lihat hasil</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection