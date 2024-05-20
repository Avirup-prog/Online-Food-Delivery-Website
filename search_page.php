<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Food Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .search-container {
            margin: 20px;
        }
        .results {
            margin-top: 20px;
        }
        .result-item {
            border-bottom: 1px solid #ccc;
            padding: 10px 0;
        }
        .result-item h3 {
            margin: 0;
        }
        .result-item img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <div class="search-container">
        <form method="GET" action="search_results.php">
            <input type="text" name="query" placeholder="Search food items...">
            <input type="submit" value="Search">
        </form>
    </div>
</body>
</html>
