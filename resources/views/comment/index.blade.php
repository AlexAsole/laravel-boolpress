@extends('template.base')

@section('content')
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Post ID</th>
                <th scope="col">Body</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($comments as $comment)
                <tr>
                    <th scope="row">{{ $comment->id }}</th>
                    <td>{{ $comment->post_id }}</td>
                    <td>{{ $comment->body }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
