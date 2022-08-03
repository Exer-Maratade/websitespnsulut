@extends('index')

@section('container')

    <div class="main align-content-center">
        <div class="bg-light p-5 mb-3 rounded shadow">
            <img src="/img/banner1.jpg" class="mt-5 img-fluid" alt="image">
            <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you
                scroll, it will remain fixed to the top of your browser’s viewport.</p>
        </div>

        
    </div>

    @include('layouts.news')
@endsection
