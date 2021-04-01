@extends('template.base')
@section('content')
    <form action="{{ route('posts.store') }}" method='POST'  enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="author_id">Author</label>
            <select class="form-control" name="author_id" placeholder="Author">
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }} {{ $author->surname }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" rows="3" name="body" placeholder="Body"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" name="image" id="image">
        </div>
        <div class="form-group">
            <label for="tags[]">Tags</label>
            <select multiple class="form-control" name="tags[]">
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">
            Create!
        </button>
    </form>
@endsection
