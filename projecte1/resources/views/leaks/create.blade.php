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

        input, select {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #333;
            border-radius: 4px;
            background-color: #2a2a2a;
            color: #ffffff;
            width: 100%;
        }

        input:focus, select:focus {
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
        <h1>Afegir nou leak</h1>
        <form action="/leaks/store" method="POST">
            <div>
                <label for="name">Títol</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div>
                <label for="company">Empresa</label>
                <input type="text" name="company" id="company">
            </div>
            <div>
                <label for="leak_date">Data de filtració</label>
                <input type="date" name="leak_date" id="leak_date">
            </div>
            <div>
                <label for="lines">Línies</label>
                <input type="number" name="lines" id="lines" min="0">
            </div>
            <div>
                <label for="sensitivity_level">Nivell de sensibilitat</label>
                <select name="sensitivity_level" id="sensitivity_level">
                    <option value="Low">Baix</option>
                    <option value="Medium">Mitjà</option>
                    <option value="High">Alt</option>
                </select>
            </div>
            <button type="submit">Crear</button>
        </form>
    </div>
</section>
</body>
</html>