<?php

$conn = mysqli_connect("localhost", "root", "", "userdb");


// Fetch data from the database
$query = "SELECT * FROM offender_db";
$result = mysqli_query($connection, $query);

// Display the fetched data
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<p>{$row['name']}</p>"; // Replace 'column_name' with the actual column name you want to display
    }
} else {
    echo "<p>No data found.</p>";
}

// Close the database connection
mysqli_close($connection);
?>
