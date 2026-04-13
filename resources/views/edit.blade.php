<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h1>Edit Student</h1>
    <form action="{{ route('edit', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name', $student->name) }}"><br><br>
        <label for="course">Course:</label>
        <input type="text" id="course" name="course" value="{{ old('course', $student->course) }}"><br><br>
        <input type="submit" value="Submit">
    </form>
    <a href="{{ route('student') }}">Back to Dashboard</a>
</body>
</html>