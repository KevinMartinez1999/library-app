<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>

<body>

    <form action="">
        <input type="text" name="search">
        <button type="submit">Buscar</button>
        <ul>
            @foreach ($books as $book)
            <li>{{ $book->title }}</li>
            @endforeach
        </ul>

</body>

</html>