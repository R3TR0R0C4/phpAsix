<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Demo ASIX</title>
</head>
<body>
<h1>Eliminar llibre:</h1>
<div>
    <p>Estàs segur que vols eliminar el llibre <strong><?= $book->name ?></strong>?</p>
    <form action="/books/destroy/<?= $book->id ?>" method="POST">
        <button type="submit">Eliminar</button>
        <a href="/books">Cancel·lar</a>
    </form>
</div>
</body>
</html>