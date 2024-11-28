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
            padding: 20;
        }

        .header {
            background-color: #ffd6d6;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-left: 200px;
            margin-right: 200px;
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
            background-color: #FFFFFF;
            padding: 20px;
            width: 250px;
            margin-left: 200px;
            margin-bottom: 200px;
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
            margin-right: 200px;
        }

        .content h2 {
            margin-bottom: 10px;
        }

        .content .card {
            display: flex;
            align-items: center;
            padding: 20px;
            margin: 25px;
            background-color: #f0f0f0;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .content h1 {
            font-size: 20px; /* Adjust the font size as needed */
            font-weight: bold;
            margin-top: 0;
        }

        .content .image-container {
            margin-right: 30px;
            margin-left: 20px;
        }

        .content .image-container img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 5px;
        }

        .content .text-container {
            flex-grow: 1;
            margin-left: 20px;
        }

        .content .text-container p {
            margin-bottom: 5px;
        }

        .content .see-details-button {
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px 20px;
            text-decoration: none;
            color: #333;
        }

        .content .see-details-button:hover {
            background-color: #ccc;
        }




        .sidebar .category-item:hover {
        background-color: #E0E0E0;
        }

    </style>
</head>
<body>
    <header class="header">
        <a href= "{{ url('/') }}"><h1>HelloFixer</h1></a>
        <div class="language">
            <i class="fa-solid fa-globe"></i>
            English
        </div>
    </header>

    <div class="container">
        <div class="sidebar">
            <h2>All Categories</h2>
            <ul>
                <li class="category-item" data-category="air-conditioner">Air Conditioner</li>
                <li class="category-item" data-category="television">Television</li>
                <li class="category-item" data-category="water-purifier">Water Purifier</li>
                <li class="category-item" data-category="carpentry">Carpentry</li>
                
            
            </ul>
        </div>

        <div class="content">
            <h2>Category-Specific Content</h2>


            <div class="card">
                <div class="image-container">
                    <img src="http://127.0.0.1:8000/images/tasker.jpg" alt="Image">
                </div>
                <div class="text-container">
                    <h1><span class="category-name"></span></h1>
                    <p>Sub-Category</p>
                    <p>Details</p>
                </div>
            <a href="#" class="see-details-button">See Details</a>
            </div>
            <div class="card">
                <div class="image-container">
                    <img src="http://127.0.0.1:8000/images/tasker.jpg" alt="Image">
                </div>
                <div class="text-container">
                    <h1><span class="category-name"></span></h1>
                    <p>Sub-Category</p>
                    <p>Details</p>
                </div>
            <a href="#" class="see-details-button">See Details</a>
            </div>
            <div class="card">
                <div class="image-container">
                    <img src="http://127.0.0.1:8000/images/tasker.jpg" alt="Image">
                </div>
                <div class="text-container">
                    <h1><span class="category-name"></span></h1>
                    <p>Sub-Category</p>
                    <p>Details</p>
                </div>
            <a href="#" class="see-details-button">See Details</a>
            </div>
            <div class="card">
                <div class="image-container">
                    <img src="http://127.0.0.1:8000/images/tasker.jpg" alt="Image">
                </div>
                <div class="text-container">
                    <h1><span class="category-name"></span></h1>
                    <p>Sub-Category</p>
                    <p>Details</p>
                </div>
            <a href="#" class="see-details-button">See Details</a>
            </div>

        </div>
    </div>

    <script>
       const categoryItems = document.querySelectorAll('.category-item');
        const categoryNameElements = document.querySelectorAll('.category-name');

        categoryItems.forEach(item => {
            item.addEventListener('click', () => {
                categoryItems.forEach(item => item.classList.remove('active'));
                item.classList.add('active');

                const selectedCategory = item.dataset.category;

                categoryNameElements.forEach(element => {
                element.textContent = selectedCategory;
                });

        // Replace the placeholder data with actual data from your database or API
        // ... (code to fetch and display data based on selectedCategory)
            });
        });
    </script>
</body>
</html>