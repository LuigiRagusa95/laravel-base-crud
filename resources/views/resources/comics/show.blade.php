@extends('templates.default')

@section('title', 'Laravel | '.$comic->title)

@section('content')
<div class="container">
    <div class="row">
        <div class="col p-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    <p class="card-text">{{$comic->description}}</p>
                    <p class="card-text"><small class="text-muted">Sale date: {{$comic->sale_date}}</small></p>
                </div>
                <img style="width: 300px;" class="card-img-bottom" src="{{ $comic->thumb }}" alt="Card image cap">
            </div>
        </div>
    </div>
</div>
@endsection