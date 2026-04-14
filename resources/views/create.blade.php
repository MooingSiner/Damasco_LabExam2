<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Create</title>
</head>
<body>
    <div class="container">
        <h1>Create Student</h1>
        <form action="{{ route('create') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
                <label for="course">Course:</label>
                <input type="text" id="course" name="course" value="{{ old('course') }}" required>
            </div>
            <input type="submit" value="Submit">
        </form>
        <a href="{{ route('student') }}" class="back-link">Back to Dashboard</a>
    </div>
</body>
</html>