{{-- extends view/layouts/main.blade.php --}}
@extends('layouts.main')

@section('title')
home
@endsection

@section('yeld1')
<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-10 d-flex flex-wrap justify-content-center gap-3">

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">CARD TITLE</h5>
                  <p class="card-text">CARD TEXT</p>
                  <a href="#" class="btn btn-primary">CARD LINK</a>
                </div>
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

