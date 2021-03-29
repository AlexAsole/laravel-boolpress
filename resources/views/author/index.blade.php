@extends('template.base')

@section('content')
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Mail</th>
                <th scope="col">Website</th>
                <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($authors as $author)
                <tr>
                    <th scope="row">{{ $author->id }}</th>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->surname }}</td>
                    <td>{{ $author->mail }}</td>
                    <td><a href="{{ $author->detail->website }}">{{ $author->detail->website }}</a></td>
                    <td><img src="{{ $author->detail->image }}" alt=""></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
