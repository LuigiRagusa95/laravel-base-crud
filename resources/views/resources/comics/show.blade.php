@extends('templates.default')

@section('title', 'Laravel | '.$comic->title)

@section('content')
@dump($comic->title)
@endsection