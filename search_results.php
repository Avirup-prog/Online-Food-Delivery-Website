<?php
// search_results.php

// Include the database connection file
include 'conn_db.php';

if (isset($_GET['query'])) {
    $query = $_GET['query'];
    $query = $mysqli->real_escape_string($query);

    $sql = "SELECT * FROM food WHERE f_name LIKE '%$query%' OR f_id LIKE '%$query%' OR s_id LIKE '%$query%'";
    $result = $mysqli->query($sql);

    echo '<div class="search-container">';
    echo '<form method="GET" action="search_results.php">';
    echo '<input type="text" name="query" value="'.htmlspecialchars($query).'" placeholder="Search food items...">';
    echo '<input type="submit" value="Search">';
    echo '</form>';
    echo '</div>';

    echo '<div class="results">';
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='result-item'>";
            echo "<h3>" . htmlspecialchars($row['f_name']) . "</h3>";
            echo "<p>Price: $" . htmlspecialchars($row['f_price']) . "</p>";
            if (!empty($row['f_pic'])) {
                echo "<img src='" . htmlspecialchars($row['f_pic']) . "' alt='" . htmlspecialchars($row['f_name']) . "'>";
            }
            echo "</div>";
        }
    } else {
        echo "No results found.";
    }
    echo '</div>';
}

$mysqli->close();
?>
