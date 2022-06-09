@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>{{ $post->title }}</h3>
        <img src="{{ $post->image }}" alt="{{ $post->title }}">
        <p>{{ $post->content }}</p>

        @include('includes.deletePost')
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/delete-form.js') }}"></script>
@endsection