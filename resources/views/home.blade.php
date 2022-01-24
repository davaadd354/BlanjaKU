@extends('layouts.app')

@extends('layouts.nav')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header produk">
                    <h1 class="produk text-center">Dasboard</h1>
                </div>

                <div class="card-body text-center">
                    <a href="{{url('/biodata')}}" class="btn btn-warning"><i> Biodata</i></a>
                    <a href="{{url('/form')}}" class="btn btn-warning"><i> Formulir</i></a>
                    <a href="{{url('/hitung_segitiga')}}" class="btn btn-warning"><i> Rumus Segitiga</i></a>
                    <a href="{{url('/produk')}}" class="btn btn-warning"><i> Data Produk</i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection