@extends('templates.default')

@section('title', 'Laravel | Comics')

@section('content')
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>price</th>
            <th>series</th>
            <th>sale_date</th>
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

@endsection