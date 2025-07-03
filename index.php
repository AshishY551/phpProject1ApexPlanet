<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple PHP Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 40px;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            background: #007BFF;
            color: white;
            padding: 15px;
            text-align: center;
        }
        footer {
            margin-top: 40px;
            font-size: 0.9em;
            color: #555;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to My Simple PHP Page</h1>
    </header>

    <main>
        <p>Hello, world! This is a simple PHP-powered web page.</p>
        <p>Today's date is: <strong><?php echo date("F j, Y"); ?></strong></p>
    </main>

    <footer>
        &copy; <?php echo date("Y"); ?> My Simple Website
    </footer>
</body>
</html>
