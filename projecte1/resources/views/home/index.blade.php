<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>PHP ASIX</title>
    <style>
        /* General Styles */
        body {
            background-color: #1e1f22;
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            justify-content: center; /* Center vertically */
            align-items: center; /* Center horizontally */
        }
        .container {
            max-width: 900px;
            padding: 20px;
            background-color: #1a1a1a;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 0; /* Remove margin to center properly */
        }
        h1 {
            font-size: 32px;
            margin-bottom: 30px; /* Increased margin for more space below the h1 */
            color: #bb86fc;
        }
        a {
            color: #bb86fc;
            text-decoration: none;
            font-size: 18px;
            font-weight: 600;
        }
        .container a {
            margin-right: 15px; /* Add margin to the right of each link */
        }
        .container a:last-child {
            margin-right: 0; /* Remove margin from the last link */
        }
        a:hover {
            text-decoration: underline;
            color: #ff80ff;
        }
        #footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background: rgb(55, 61, 55);
            color: white;
            font-size: 20px;
        }
        #footer p {
            margin-left: 30px;
        }
        .footer-link {
            color: #bb86fc;
            text-decoration: none;
            font-size: 16px;
            font-weight: 600;
        }
        .footer-link:hover {
            text-decoration: underline;
            color: #ff80ff;
        }
        .navbar {
            position: fixed; /* Make the navbar fixed */
            top: 0; /* Position it at the top of the viewport */
            left: 0; /* Align it to the left */
            right: 0; /* Align it to the right */
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            z-index: 1000; /* Ensure it stays above other content */
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
    </style>
</head>
<body>
<div class="navbar">
    <div class="logo">BDs</div>
    <div class="nav-links">
        <a href="/">Home</a>
        <a href="/books">Llibres</a>
        <a href="/leaks"> Leaks</a>
    </div>
</div>

<div class="container">
    <h1>Portada del projecte</h1>
    <a href="../books">Database Llibres</a>
    <a href="../leaks">Database Leaks</a>
</div>

<div id="footer">
    <p>GitHub: <a class="footer-link" href="https://github.com/R3TR0R0C4" target="_blank">R3TR0R0C4</a></p>
</div>

<footer>
</footer>

</body>
</html>