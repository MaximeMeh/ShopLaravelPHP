<!DOCTYPE html>
<html>
    <head>
        <title>Shoes {{ $car->id }}</title>
    </head>
    <body>
        <h1>Article {{ $car->id }}</h1>
        <ul>
        <li>Name: {{ $car->make }}</li>
        <li>Price: {{ $car->model }}</li>
        <li>Description: {{ $car->produced_on }}</li>
        <a href="{{ route('articles.edit', $car) }}">Edit</a> |
        <form action="{{ route('articles.destroy', $car) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="submit" value="Delete">
        </form>
        </ul>
    </body>
</html>