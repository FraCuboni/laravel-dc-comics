{{-- extends view/layouts/main.blade.php --}}
@extends('layouts.main')

@section('title')
MY COMICS
@endsection

@section('yeld1')
<h1>
    COMICS PAGE
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
    
                        @foreach ($comics as $comic)
    
                        <tr style="max-height: 200px; overflow: hidden;">
                            <th scope="row">{{$comic->id}}</th>
                            <td>
                                <img src="{{$comic->img}}" class="img-fluid" style="max-width: 200px" alt="...">
                            </td>
                            <td><strong>{{$comic->title}}</strong></td>
                            <td>{{$comic->description}}</td>
                            <td>{{$comic->price}}</td>
                        </tr>
                      
                        @endforeach
    
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

