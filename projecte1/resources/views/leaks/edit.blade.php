<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Llibre</title>
    <style>
        * {
            box-sizing: border-box; /* Apply box-sizing to all elements */
        }

        body {
            background-color: #1e1f22;
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            background-color: #1a1a1a;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #bb86fc;
            text-align: center;
        }

        form div {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-size: 16px;
            margin-bottom: 5px;
            color: #e0e0e0;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #333;
            border-radius: 5px;
            background-color: #2c2c2c;
            color: #ffffff;
            margin: 0; /* Remove margin that might be adding extra space */
        }

        input[type="text"]:focus, input[type="number"]:focus {
            outline: none;
            border-color: #bb86fc;
            background-color: #3a3a3a;
        }

        button {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            color: #ffffff;
            background-color: #03a9f4;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0288d1;
        }

        .back-link {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #bb86fc;
            text-decoration: none;
            font-size: 16px;
        }

        .back-link:hover {
            text-decoration: underline;
            color: #ff80ff;
        }

    </style>
</head>
<body>
<div class="container">
    <h1>Editar llibre: <?= $book->name ?></h1>
    <form action="/books/update/<?= $book->id ?>" method="POST">
        <div>
            <label for="name">Títol</label>
            <input type="text" name="name" id="name" value="<?= $book->name ?>">
        </div>
        <div>
            <label for="author">Autor</label>
            <input type="text" name="author" id="author" value="<?= $book->author ?>">
        </div>
        <div>
            <label for="releaseYear">Any</label>
            <input type="number" name="releaseYear" id="releaseYear" value="<?= $book->releaseYear ?>">
        </div>
        <div>
            <label for="genre">Gènere</label>
            <input type="text" name="genre" id="genre" value="<?= $book->genre ?>">
        </div>
        <button type="submit">Editar</button>
    </form>
    <a class="back-link" href="/books">Volver a la Llista</a>
</div>
</body>
</html>
