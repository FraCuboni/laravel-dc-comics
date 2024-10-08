
{{-- extends view/layouts/main.blade.php --}}
@extends('layouts.main')


@section('yeld1')
    <h1>
        CREATE COMIC
    </h1>
    
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-10">
            <form action="{{ route('comics.store') }}" method="POST">
            @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="title" >
                    <small>
                        <div class="alert alert-danger" role="alert">
                            wrong smth
                        </div>
                    </small>
                </div>
                
                <div class="form-group">
                    <label for="series">series</label>
                    <input type="text" class="form-control" id="series" name="series" placeholder="series" >
                    <small>
                        <div class="alert alert-danger" role="alert">
                            wrong smth
                        </div>
                    </small>
                </div>
                
                <div class="form-group">
                    <label for="description">description</label>
                    <textarea type="text" class="form-control" id="description" name="description" placeholder="description" ></textarea>
                    <small>
                        <div class="alert alert-danger" role="alert">
                            wrong smth
                        </div>
                    </small>
                </div>

                <div class="form-group">
                    <label for="price">price</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="price" >
                    <small>
                        <div class="alert alert-danger" role="alert">
                            wrong smth
                        </div>
                    </small>
                </div>

                <div class="form-group">
                    <label for="img">img</label>
                    <input type="text" class="form-control" id="img" name="img" placeholder="img path" >
                    <small>
                        <div class="alert alert-danger" role="alert">
                            wrong smth
                        </div>
                    </small>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Delete</button>
            </form>        
        </div>
    </div>
</div>
@endsection