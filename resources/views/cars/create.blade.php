<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form action="{{ route('articles.store') }}" method="post">

        {{ csrf_field() }}
        
            <input type="text" name="name" placeholder="name">
            <input type="text" name="price" placeholder="price">
            <input type="text" name="description" placeholder="description">
            <input type="submit" value="Confirm your article">
        </form>

        <p><a href="http://localhost:3000/articles">Annuler</a></p>
    </body>
</html>