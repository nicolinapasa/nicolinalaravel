@extends('layouts.app')
@section('content')
@section('title')
    About
@endsection
    <section class="container-fluid p-5">
        <h1>Bun brat, hai davai</h1>
        <img class="col-4 rounded mt-3" src="/images/scenic.jpg" alt="">
        <ul class="list-group list-group-horizontal">
            @foreach ($groups as $group)
                <li class="list-group-item mt-3">{{ $group }}</li>
            @endforeach
        </ul>
    </section>
@endsection
