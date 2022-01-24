<!-- <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{$title}}</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    {{$title}}
                </div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <br/>
                    <br/>
                    <form action="/gambar/proses" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <b>File Gambar 1</b><br/>
                            <input type="file" name="files[]">
                        </div>
                        <div class="form-group">
                            <b>File Gambar 2</b><br/>
                            <input type="file" name="files[]">
                        </div>
                        @if($errors->has('files'))
                            <div class="text-danger">
                                {{ $errors->first('files')}}
                            </div>
                        @endif
 
                        <input type="submit" value="Upload" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html> -->