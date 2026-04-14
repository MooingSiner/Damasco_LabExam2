<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Edit</title>
</head>
<body>
    <div class="container">
        <h1>Edit Student</h1>
        <form action="{{ route('edit', $student->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{ old('name', $student->name) }}" required>
            </div>
            <div class="form-group">
                <label for="course">Course:</label>
                <input type="text" id="course" name="course" value="{{ old('course', $student->course) }}" required>
            </div>
            <input type="submit" value="Submit">
        </form>
        <a href="{{ route('student') }}" class="back-link">Back to Dashboard</a>
    </div>
</body>
</html>