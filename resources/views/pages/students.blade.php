@extends('layouts.app')
@section('content')
@section('title')
    Students
@endsection

<div class="container-fluid bg-light p-5">
    <h1 class="display-3 m-3">Students</h1>
    {{-- <p>Aceasta pagina foloseste modelul Jumbotron din Bootstrap 4</p> --}}
    {{-- <p><a class="btn btn-primary btn-lg" href="https://getbootstrap.com/" role="button">Afla mai multe despre Bootstrap</a></p> --}}
</div>

<div class="container p-5">
    <div class="row">
        @foreach($elevi as $elev)
            <div class="col-md-4">
                <h2>Name: {{$elev->name}}</h2>
                <h2>Surname: {{$elev->surname}}</h2>
                <p>Email: {{$elev->email}}</p>
                <p>Grade: {{$elev->grade}}</p>
                <p><a class="btn btn-secondary" href="#" role="button">Details &raquo;</a></p>
            </div>
        @endforeach
    </div>


</div>

<footer class="container-fluid">
    <hr>
    <p class="p-3">&copy; Pașa Nicolina 2024</p>
  </footer>
@endsection
