{{-- extends view/layouts/main.blade.php --}}
@extends('layouts.main')

@section('title')
MY COMICS
@endsection

@section('yeld1')
<div style="padding:0 50px; display:flex; justify-content: space-between">
    <h1>
        COMICS PAGE
    </h1>
    <a href="{{ route('comics.create') }}">
        <button type="button" class="btn btn-primary btn-lg">add new</button>
    </a>

</div>
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
                        <th scope="col">price</th>
                        <th scope="col">actions</th>
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
                            {{-- <td>{{$comic->description}}</td> --}}
                            <td>${{$comic->price}}</td>
                            <td>
                                {{-- see --}}
                                <a href="{{ route('comics.show', $comic->id) }}">
                                    <button type="button" class="btn btn-primary">
                                        <i class="fa-regular fa-eye"></i>
                                    </button>
                                </a>

                                {{-- modify --}}
                                <a href="{{ route('comics.edit', $comic->id) }}">
                                    <button type="button" class="btn btn-warning">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>
                                </a>

                                {{-- delete --}}
                                <a href="">
                                    <button type="button" class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </a>

                            </td>
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

