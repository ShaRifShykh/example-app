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
<form action="{{ url('/login') }}" method="post">
    @csrf
    <input type="email" name="email" placeholder="Enter Email" />
    <br>
    <input type="password" name="password" placeholder="Enter Password" />
    <br>
    <input type="submit" name="submit" value="Sign In" />
</form>
</body>
</html>
