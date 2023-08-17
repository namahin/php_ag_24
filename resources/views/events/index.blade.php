@extends('layouts.app')

@section('content')
    <h2>All Events</h2>

    @if (count($events) > 0)
        <ul>
            @foreach ($events as $event)
                <li>
                    <a href="{{ route('events.show', $event->id) }}">{{ $event->title }}</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>No events available.</p>
    @endif
@endsection
