<?php
$servername = "sql301.infinityfree.com";
$username = "if0_42364670";
$password = "xKXGfaoIgBTqeQH"; // Remember to update this!
$dbname = "if0_42364670_mydata";

// Create the database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ==========================================
// 1. INSERT DATA (From your HTML form)
// ==========================================
if(isset($_GET['name']) && isset($_GET['age'])) {
    
    $form_name = $conn->real_escape_string($_GET['name']);
    $form_age = $conn->real_escape_string($_GET['age']);
    
    $sql_insert = "INSERT INTO user (name, age) VALUES ('$form_name', '$form_age')";

    if ($conn->query($sql_insert) === TRUE) {
        echo "<h3>Success! New record created.</h3><hr>";
    } else {
        echo "Error inserting into table: " . $conn->error . "<br>";
    }
}

// ==========================================
// 2. SELECT & DISPLAY DATA
// ==========================================
echo "<h2>Current Users in Database:</h2>";

// Write the SQL query to select everything from the user table
$sql_select = "SELECT id, name, age FROM user";
$result = $conn->query($sql_select);

// Check if there is at least one row of data
if ($result->num_rows > 0) {
    
    // Create an HTML table to make it look organized
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>ID</th><th>Name</th><th>Age</th></tr>";
    
    // Loop through each row in the database and print it
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["age"] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    
} else {
    echo "No users found in the database.";
}

$conn->close();
?>