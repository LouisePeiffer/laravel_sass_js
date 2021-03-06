@extends('layouts.index')

@section('content')
    @include('partial.header')
    @include('partial.subheading')
    <div class="jumbotron">
        <h1 class="display-4">Hello, Coding School 16</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>
    @include('partial.footer')
@endsection