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
    <p>{{ \Illuminate\Support\Facades\Auth::user() }}</p>
    <form action="{{ url('/add') }}" method="post">
        @csrf
        <input type="text" name="person" placeholder="Enter Name" />
        <input type="submit" name="submit" value="Add Data" />
    </form>
    <table border="1px">
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        @foreach($persons as $person)
            <tr>
                <td>{{ $person->id }}</td>
                <td>{{ $person->email }}</td>
                <td><a href="{{ url('/update/'.$person->id) }}">Edit</a> <br> <a href="{{ url('/delete/'. $person->id) }}">Delete</a></td>
            </tr>
        @endforeach
    </table>
    </body>
</html>
