<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Student details</h3>
<form method="POST" action="/student/update-student/{{ $student->id }}">
    <input type="text" name="fname" value="{{ $student->fname }}" placeholder="First Name">
    <input type="text" name="lname" value="{{ $student->lname }}" placeholder="Last Name">
    <input type="email" name="email" value="{{ $student->email }}" placeholder="Email">
    <input type="number" name="studentId" value="{{ $student->studentId }}" placeholder="Student ID">
    @csrf
    <button type="submit">Update</button>
</form>
<form method="POST" action="/student/delete/{{ $student->id }}">
    @csrf
    <button type="submit">delete</button>
</form>
</body>
</html>
