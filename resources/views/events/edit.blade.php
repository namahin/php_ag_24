<form method="POST" action="{{ route('events.update', $event->id) }}">
    @csrf
    @method('PUT')

    <div>
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{ old('title', $event->title) }}" required>
    </div>

    <div>
        <label for="description">Description</label>
        <textarea id="description" name="description" required>{{ old('description', $event->description) }}</textarea>
    </div>

    <div>
        <label for="date">Date</label>
        <input type="date" id="date" name="date" value="{{ old('date', $event->date) }}" required>
    </div>

    <div>
        <label for="time">Time</label>
        <input type="time" id="time" name="time" value="{{ old('time', $event->time) }}" required>
    </div>

    <div>
        <label for="location">Location</label>
        <input type="text" id="location" name="location" value="{{ old('location', $event->location) }}" required>
    </div>

    <div>
        <button type="submit">Update Event</button>
    </div>
</form>
