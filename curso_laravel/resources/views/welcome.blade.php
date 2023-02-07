@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

    <h1>Título</h1>
    
    <img src="/img/banner.jpg" alt="Banner">
    @foreach($events as $event)
        <p>{{ $event->title }} -- {{ $event->description }}</p>
    @endforeach

@endsection
