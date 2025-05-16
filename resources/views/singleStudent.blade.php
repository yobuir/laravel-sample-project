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
<p>Name: {{ $student->fname }} {{ $student->lname }}</p>
<p>Email: {{ $student->email }}</p>
<p>Student ID: {{ $student->studentId }}</p>
<form method="POST" action="/student/delete/{{ $student->id }}">
    @csrf
    <button type="submit">delete</button>
</form>
</body>
</html>
