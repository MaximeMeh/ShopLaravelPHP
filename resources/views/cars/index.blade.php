<!DOCTYPE html>
<html>
    <head>
        <title>Shoes</title>
    </head>
    <body>
        @foreach ($cars as $car)
    <h1>Article {{ $car->id }}</h1>
        <ul>
        <li>Name: {{ $car->make }}</li>
        <li>Price: {{ $car->model }}</li>
        <li>Description: {{ $car->produced_on }}</li>
        </ul>
        @endforeach
    </body>
</html>