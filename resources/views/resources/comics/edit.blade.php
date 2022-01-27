@extends('templates.default')

@section('title', 'Laravel | Edit')

@section('content')
<section class="container">
    <div class="row">
        <div class="col-lg p-5">
            <form class="row g-3" autocomplete="off" method="POST" action="{{ route('comics.update', $comic->id) }}">
                @csrf
                @method('PATCH')

                <div class="col-md-6">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
                </div>
                <div class="col-md-6">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
                </div>
                <div class="col-12">
                    <label for="thumb" class="form-label">Thumb</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
                </div>
                <div class="col-12">
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" class="form-control" id="description"
                        name="description">{{ $comic->description }}</textarea>
                </div>
                <div class="col-md-6">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date"
                        value="{{ $comic->sale_date}}">
                </div>
                <div class="col-md-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
                </div>
                <div class="col-md-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection