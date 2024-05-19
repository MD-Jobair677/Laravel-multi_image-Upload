<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>show image</title>
  </head>
  <body class=" bg-dark">


    <div class="container bg-dark">
        <div class="row">
            <div class="col-md-12">
                {{-- <div class="card">
                    <h1>All Image</h1>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">image</th>
                            
                          </tr>
                        </thead>
                        <tbody>

                          @forelse ($allimage as $image )
                          <tr>
                            <th scope="row">1</th>
                            <td> 
                              <img src="{{asset('storage/upload/'.$image)}}" alt="" width="300px">
                              
                            </td>
                            
                          </tr>
                          @empty
                          <h1>not</h1>
                            
                          @endforelse
                         
                        </tbody>
                      </table>







                   
                    <a href="{{route('index')}}" class="btn btn-primary mt-3"> Add Image</a>
                </div> --}}




               <div class="card">
                    <h1>All Multi Image</h1>



                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">image</th>
                            
                          </tr>
                        </thead>
                        <tbody>


                          
                          @foreach($images as $key=> $image)
                          <tr>
                              <td>{{++$key}}</td>
                          
                         
                             
                                  
                                  @foreach($image as $productimage)
                                 {{-- @dd($productimage) --}}
                                  <td>
                                      <div class="">
                                          <img src="{{ asset('storage/upload/'.$productimage) }}" alt="Product Image" class="img-fluid" width="200px">
                                      </div>
                                  </td>
                                  @endforeach
                             
                         
                          
                      </tr>
                      @endforeach

                        
                         
                        </tbody>
                      </table>







                   
                    <a href="{{route('index')}}" class="btn btn-primary mt-3"> Add Image</a>
                </div> 


                
                
            </div>
        </div>
    </div>
    
   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 
  </body>
</html>
