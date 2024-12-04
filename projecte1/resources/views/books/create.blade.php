<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Demo ASIX</title>
    <style>
        /* Ensure all elements respect specified width */
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #1e1f22;
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        section {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        div {
            background-color: #1a1a1a;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 600px;
            width: 100%;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #bb86fc;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        /* Style for each label-input pair */
        form > div {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        label {
            font-size: 18px;
            color: #e0e0e0;
            margin-bottom: 8px;
        }

        input {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #333;
            border-radius: 4px;
            background-color: #2a2a2a;
            color: #ffffff;
            width: 100%;
        }

        input:focus {
            outline: none;
            border-color: #bb86fc;
        }

        button {
            background-color: #bb86fc;
            color: #ffffff;
            font-size: 18px;
            font-weight: bold;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        button:hover {
            background-color: #ff80ff;
        }
    </style>
</head>
<body>
<section>
    <div>
        <h1>Afegir nou llibre</h1>
        <form action="/books/store" method="POST">
            <div>
                <label for="name">Títol</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="author">Autor</label>
                <input type="text" name="author" id="author">
            </div>
            <div>
                <label for="releaseYear">Any</label>
                <input type="number" name="releaseYear" id="releaseYear">
            </div>
            <div>
                <label for="genre">Genere</label>
                <input type="text" name="genre" id="genre">
            </div>
            <button type="submit">Crear</button>
        </form>
    </div>
</section>
</body>
</html>
