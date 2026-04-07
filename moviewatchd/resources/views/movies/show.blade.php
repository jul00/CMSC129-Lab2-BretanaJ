@extends('layouts.app')

@section('content')
<h2>{{ $movie->title }}</h2>

@if($movie->poster)
    <img src="{{ asset('storage/'.$movie->poster) }}" width="100" class="mb-3">
@endif

<p><strong>Genre:</strong> {{ $movie->genre }}</p>
<p><strong>Release Year:</strong> {{ $movie->release_year }}</p>
<p><strong>Rating:</strong> {{ $movie->rating }}/5</p>
<p><strong>Category:</strong> {{ $movie->category->name ?? 'N/A' }}</p>
<p><strong>Watched At:</strong> {{ $movie->watched_at ? $movie->watched_at->format('M d, Y') : 'N/A' }}</p>

@if($movie->comment)
    <p><strong>Comment:</strong> {{ $movie->comment }}</p>
@endif

<a href="{{ route('movies.index') }}" class="btn btn-secondary">Back</a>
<a href="{{ route('movies.edit', $movie) }}" class="btn btn-warning">Edit</a>
@endsection
