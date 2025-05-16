<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    get logged user :
    {{-- {{ auth()->user() }} --}}
    {{ auth()->user()->name }}
    <ul>
@foreach ($studentsLists as $item)
<li>{{ $item->id }} : {{ $item->fname }}</li>
<a href="/student/{{ $item->id }}">View details </a>
@endforeach

    </ul>
</body>
</html>
