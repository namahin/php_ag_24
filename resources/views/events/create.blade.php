<form method="POST" action="{{ route('events.store') }}">
    @csrf

    <div>
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}" required>
    </div>

    <div>
        <label for="description">Description</label>
        <textarea id="description" name="description" required>{{ old('description') }}</textarea>
    </div>

    <div>
        <label for="date">Date</label>
        <input type="date" id="date" name="date" value="{{ old('date') }}" required>
    </div>

    <div>
        <label for="time">Time</label>
        <input type="time" id="time" name="time" value="{{ old('time') }}" required>
    </div>

    <div>
        <label for="location">Location</label>
        <input type="text" id="location" name="location" value="{{ old('location') }}" required>
    </div>

    <div>
        <button type="submit">Create Event</button>
    </div>
</form>
