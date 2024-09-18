{{-- <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="..." class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div> --}}

  {{-- extends view/layouts/main.blade.php --}}
@extends('layouts.main')

@section('title')
MY COMICS
@endsection

@section('yeld1')
<h1>
    COMIC DETAIL
</h1>
<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-10">

            <div class="table-responsive">
                <table class="table align-middle">

                    <thead>
                      <tr>
                        <th scope="col">#id</th>
                        <th scope="col">image</th>
                        <th scope="col">title</th>
                        <th scope="col">description</th>
                        <th scope="col">price</th>
                      </tr>
                    </thead>
    
                    <tbody>
    
                        <tr style="max-height: 200px; overflow: hidden;">
                            <th scope="row">{{$comic->id}}</th>
                            <td>
                                <img src="{{$comic->img}}" class="img-fluid" style="max-width: 200px" alt="...">
                            </td>
                            <td><strong>{{$comic->title}}</strong></td>
                            <td>{{$comic->description}}</td>
                            <td>{{$comic->price}}</td>
                        </tr>
                      
                        
    
                    </tbody>

                </table>
            </div>
            
                
        </div>
        
    </div>
</div>
@endsection

@section('content')
<p>
    content
</p>
@endsection

