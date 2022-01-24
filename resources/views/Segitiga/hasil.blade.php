@extends('layouts/app')

@section('content')
  <body>    
    <div class="container my-4">
    	<div class="row">
        <div class="col-md-6 offset-md-3">
          <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{url('hitung_segitiga')}}">Hitung Segitiga</a></li>
            <li class="breadcrumb-item active" aria-current="page">Hasil</li>
          </ol>
        </nav>
        </div>
    		<div class="col-md-6 offset-md-3">
    			<div class="card " style="box-shadow: 0px 0px 40px black;">
    				<div class="card-header text-center text-white bg-primary">
    					<h3>Hasil Luas Segitiga</h3>
    				</div>
    				<div class="card-body">
    					<div class="row">
	    					<div class="col-6 mb-3">Alas Segitiga</div>
	    					<div class="col-6">: <i><?= $segitiga->getAlas();?>cm</i></div>
	    					<div class="col-6 mb-3">Tinggi Segitiga</div>
	    					<div class="col-6">: <i><?= $segitiga->getTinggi();?>cm</i></div>
	    					<div class="col-6 mb-3">Luas Segitiga</div>
	    					<div class="col-6">: <i><?= $segitiga->getLuas();?>cm2</i></div>
	    					<br><br>
	    					<a href="{{url('hitung_segitiga')}}"><img src="https://img.icons8.com/fluency/48/000000/circled-left-2.png"/> </a>
	    				</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    @endsection
 