<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HelloFixer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gvszEPk2e1cw075mmN6bRTv8tRGwFRO47LkM110Bm25vMZj70MjRC5eWB/UUK453WJHw5E90R4m09dHG7KzE9BsYKp0i7" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #F0F0F0;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            margin: 0;
        }

        .header .language {
            display: flex;
            align-items: center;
        }

        .header .language i {
            margin-right: 5px;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            background-color: #F0F0F0;
            padding: 20px;
            width: 250px;
            border-right: 1px solid #ccc;
        }

        .sidebar h2 {
            margin-bottom: 10px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar li {
            padding: 10px;
            cursor: pointer;
        }

        .sidebar li.active {
            background-color: #E0E0E0;
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        .content h2 {
            margin-bottom: 10px;
        }

        .content .card {
            background-color: #F0F0F0;
            padding: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <header class="header">
        <h1>HelloFixer</h1>
        <div class="language">
            <i class="fa-solid fa-globe"></i>
            English
        </div>
    </header>

    <div class="container">
        <div class="sidebar">
            <h2>All Categories</h2>
            <ul>
                <li class="active">Air Conditioner</li>
                <li>Television</li>
                <li>Water purifier</li>
                <li>Carpentry</li>
                <li>Electrician</li>
                <li>Plumber</li>
            </ul>
        </div>

        <div class="content">
            <h2>Only AC related tasks</h2>
            <div class="card">
                <h3>2</h3>
            </div>
            <div class="card">
                <h3>3</h3>
            </div>
            <div class="card">
                <h3>4</h3>
            </div>
        </div>
    </div>
</body>
</html>