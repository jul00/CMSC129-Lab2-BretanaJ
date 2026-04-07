@extends('layouts.app')

@section('content')
<h2>Add Movie</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{ route('movies.store') }}" enctype="multipart/form-data">
    @csrf
    <input name="title" class="form-control mb-2" placeholder="Title">
    <input name="genre" class="form-control mb-2" placeholder="Genre">
    <input name="release_year" class="form-control mb-2" placeholder="Year">
    <input type="number" name="rating" class="form-control mb-2" placeholder="Rating (1-5)" min="1" max="5" step="0.1">
    <textarea name="comment" class="form-control mb-2"></textarea>
    <input type="date" name="watched_at" class="form-control mb-2" required>

    <input type="file" name="poster" class="form-control mb-2" accept="image/*">

    <select name="category_id" class="form-control mb-2">
    @foreach($categories as $cat)
    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
    @endforeach
    </select>

    <button class="btn btn-success">Save</button>
</form>
@endsection
