@extends('templates.default')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="d-flex justify-content-center">
                <div>Ops non riesco a trovare la pagina che stai cercando :(</div>
                <a class="mx-2" href="{{ route('home')}}">Home</a>
            </div>
        </div>
    </div>
</div>
@endsection