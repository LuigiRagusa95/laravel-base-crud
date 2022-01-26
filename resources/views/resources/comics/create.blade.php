@extends('templates.default')

@section('title', 'Laravel | Create')

@section('content')
<section class="container">
    <div class="row">
        <div class="col-lg p-5">
            <form class="row g-3" autocomplete="off" method="POST" action="{{ route('comics.store') }}">
                @csrf
                <div class="col-md-6">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="col-md-6">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>
                <div class="col-12">
                    <label for="thumb" class="form-label">Thumb</label>
                    <input type="text" class="form-control" id="thumb" name="thumb">
                </div>
                <div class="col-12">
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" class="form-control" id="description" name="description"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date">
                </div>
                <div class="col-md-2">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price">
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection