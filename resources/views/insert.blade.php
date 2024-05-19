<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Insert iamge</title>
  </head>
  <body class=" bg-dark">
    <div class="container">
        <div class="row  me-auto">
            <div class="col-md-6 m-auto">
                <div class="card">
                  @if (session('success'))
                  <div class="alert alert-success">
                    {{session('success')}}
                  </div>
                    
                  @endif
                    {{-- <h1>Insert Image</h1> --}}
                    <form action="{{route('insert')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="image" class="fs-3"> <h1>Input Your Multi-Image </h1></label>
                        <input type="file" name="file[]" id="image" multiple class="form-control mt-3">
                        @error('file')
                        <div class="alert alert-danger">{{ $message }}</div>
                          
                        @enderror
                        <button type="submit" class="btn btn-primary mt-3">Upload</button>
                    </form>
                    <a href="{{route('show')}}" class="btn btn-primary mt-3"> Show Image</a>
                </div>
                
            </div>
        </div>
    </div>
    


 

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
    -->
  </body>
</html>
