@extends('admin.layouts.base')

@section('content')
    <h1>{{ $post->title }}</h1>
    <h3>Written by: <strong>{{ $post->user->name }}</strong></h3>

    {{-- opzione con immagine di default --}}
    {{-- <img src="{{ asset($post->image ? 'storage/' . $post->image : 'img/fallback.jpg') }}" class="img-fluid" alt="{{ $post->title }}"> --}}

    {{-- opzione senza immagine --}}
    @if ($post->image)
        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->title }}">
    @endif
    <h3>In category: {{ $post->category->name }}</h3>
    <div class="tags">
        @foreach ($post->tags as $tag)
            <span class="tag">{{ $tag->name }}</span>
        @endforeach
    </div>
    <p>{{ $post->content }}</p>
@endsection
