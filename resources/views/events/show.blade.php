@extends('layouts.app')

@section('content')
    <h2>{{ $event->title }}</h2>

    <p><strong>Description:</strong> {{ $event->description }}</p>
    <p><strong>Date:</strong> {{ $event->date }}</p>
    <p><strong>Time:</strong> {{ $event->time }}</p>
    <p><strong>Location:</strong> {{ $event->location }}</p>

    <a href="{{ route('events.edit', $event->id) }}">Edit</a>

    <form method="POST" action="{{ route('events.destroy', $event->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure you want to delete this event?')">Delete</button>
    </form>
@endsection
