@extends('templates.default')

@section('title', 'Laravel | Comics')

@section('content')
@if (session('delete'))
<div class="alert alert-success" role="alert">
    {{session('delete')->title}} deleted!
</div>
@endif
<div class="container">
    <div class="row">
        <div class="col p-2">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">title</th>
                        <th scope="col">price</th>
                        <th scope="col">series</th>
                        <th scope="col">sale_date</th>
                        <th scope="col">Details</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td class="d-flex align-items-center">
                            <a class="mx-2" href="{{ route('comics.show', $comic->id) }}">Show</a>
                            <a class="mx-2" href="{{ route('comics.edit', $comic->id) }}">Edit</a>
                            <form class="d-flex align-items-center" action="{{ route('comics.destroy', $comic->id) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link p-0 mx-2">Remove</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection