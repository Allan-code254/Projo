<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReJo Sales Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 18px;
        }
        header nav a:hover {
            text-decoration: underline;
        }
        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .content {
            padding: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>ReJo Sales</h1>
        <nav>
            <a href="about.php">About</a>
            <a href="services.php">Services</a>
            <a href="inventory.php">Inventory</a>
            <a href="sales.php">Sales</a>
        </nav>
    </header>
    <div class="content">
