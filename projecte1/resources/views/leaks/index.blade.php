<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Demo ASIX</title>
    <style>
        body {
            background-color: #1e1f22;
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .navbar .logo {
            font-size: 24px;
            font-weight: bold;
            color: #bb86fc;
        }

        .navbar .nav-links {
            display: flex;
            gap: 20px;
        }

        .navbar .nav-links a {
            color: #e0e0e0;
            font-size: 18px;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .navbar .nav-links a:hover {
            background-color: #bb86fc;
            color: #121212;
        }

        .table-container {
            width: 90%;
            margin: 20px auto;
            overflow-x: auto;
        }

        table {
            width: 100%;
            min-width: 600px;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #333;
            font-size: 16px;
            white-space: nowrap;
        }

        th {
            background-color: #333;
            color: #ffffff;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #2c2c2c;
        }

        tr:nth-child(odd) {
            background-color: #222;
        }

        tr:hover {
            background-color: #3a3a3a;
        }

        a {
            color: #03a9f4;
            text-decoration: none;
        }

        .action-links {
            display: flex;
            gap: 10px;
        }

        .action-links a {
            padding: 8px 16px;
            background-color: #444;
            border-radius: 5px;
        }

        .action-links a:hover {
            background-color: #ff4081;
            color: #fff;
        }

        .create {
            display: inline-block;
            margin-top: 20px;
            color: #03a9f4;
        }

        .create:hover {
            color: #ffffff;
        }
    </style>
</head>
<body>
<div class="navbar">
    <div class="logo">BDs</div>
    <div class="nav-links">
        <a href="/">Home</a>
        <a href="/books">Llibres</a>
        <a href="/leaks">Leaks</a>
    </div>
</div>

<div class="table-container">
    <p class="title">Llista de leaks:</p>
    <table>
        <thead>
        <tr>
            <th scope="col" class="id-column">Id</th>
            <th scope="col" class="name-column">Name</th>
            <th scope="col" class="company-column">Company</th>
            <th scope="col" class="date-column">Date of Leak</th>
            <th scope="col" class="lines-column">Lines</th>
            <th scope="col" class="sensitivity-column">Sensitivity</th>
            <th scope="col" class="action-column">Actions</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($leaks as $leak): ?>
        <tr>
            <td class="id-column"><?=$leak->id;?></td>
            <td class="name-column"><?=$leak->name;?></td>
            <td class="company-column"><?=$leak->company;?></td>
            <td class="date-column"><?=$leak->leak_date;?></td>
            <td class="lines-column"><?= number_format($leak->lines, 0, ',', '.'); ?></td>
            <td class="sensitivity-column"><?=$leak->sensitivity_level;?></td>
            <td class="action-column">
                <div class="action-links">
                    <a href="/leaks/edit/<?= $leak->id?>">Editar</a>
                    <a href="/leaks/confirm-delete/<?= $leak->id?>">Eliminar</a>
                    <a href="/leaks/view/<?= $leak->id ?>">Veure</a>
                </div>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <a class="create" href="/leaks/create">Crear Leak</a>
</div>
</body>
</html>
