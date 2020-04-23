@extends('layouts.default')

@section('title', $post->title)

@section('content')
<h1>{{ $post->title }}</h1>
<a href="{{ url('/') }}"  class="header-menu">Back</a>
<p>{!! nl2br(e($post->body)) !!}</p>

@endsection
