@extends('template.base')

@section('content')
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Author ID</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->author_id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
