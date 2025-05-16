<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST" action="/login/user">
    <div>
        @if(session('success'))
            <p>{{ session('success') }}</p>
        @endif
        @if(session('error'))
            <p>{{ session('error') }}</p>
        @endif

        @csrf
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" >


         <label for="password">password:</label>
        <input type="password" id="password" name="password" >


        <button type="submit">login</button>
    </div>
</body>
</html>
