@extends('templates.default')

@section('title', 'Laravel | Comics')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg p-5">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>title</th>
                        <th>price</th>
                        <th>series</th>
                        <th>sale_date</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->id }}</td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>
                            <a href="{{ route('comics.show', $comic->id) }}">Show</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection