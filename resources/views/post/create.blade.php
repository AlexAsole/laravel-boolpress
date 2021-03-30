@extends('template.base')
@section('content')
    <form action="{{ route('posts.store') }}" methods='POST'>
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="Title" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <select class="form-control" name="author" placeholder="Author">
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }} {{ $author->surname }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" rows="3" name="body" placeholder="Body"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">
            Create!
        </button>
    </form>
@endsection
