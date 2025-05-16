<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST" action="/student/save">
    <div>
        @if(session('success'))
            <p>{{ session('success') }}</p>
        @endif
        @if(session('error'))
            <p>{{ session('error') }}</p>
        @endif

        @csrf
        <label for="name">FName:</label>
        <input type="text" id="fname" name="fname">
         <label for="lname">LName:</label>
        <input type="text" id="lname" name="lname">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" >
         <label for="studentId">StudentId:</label>
        <input type="number" id="studentId" name="studentId" >
        <button type="submit">Save</button>
    </div>
</form>
</body>
</html>
