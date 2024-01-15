<!DOCTYPE html>
<html>
<head>
    <title>Book Meeting Room</title>
</head>
<body>
    <h2>Book Meeting Room</h2>

    <form method="POST" action="/book-meeting">
        @csrf
        <label for="title">Meeting Title:</label>
        <input type="text" name="title" required>

        <label for="organizer">Organizer:</label>
        <input type="text" name="organizer" required>

        <label for="date">Date:</label>
        <input type="date" name="date" required>

        <label for="time">Time:</label>
        <input type="time" name="time" required>

        <label for="participants">Participants:</label>
        <select name="participants[]" multiple>
            <!-- Populate with employee names -->
        </select>

        <button type="submit">Book Meeting</button>
    </form>
</body>
</html>
