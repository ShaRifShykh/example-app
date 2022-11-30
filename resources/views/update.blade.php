<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body class="antialiased">
<form action="{{ url('/edit') }}" method="post">
    @csrf
    <input type="number" name="id" value="{{ $user->id }}" hidden />
    <input type="text" name="person" placeholder="Enter Name" value="{{ $user->name }}" />
    <input type="submit" name="submit" value="Add Data" />
</form>
</body>
</html>
