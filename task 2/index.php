<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "players";

    $conn = mysqli_connect($db_server,
                            $db_user, 
                            $db_pass,
                            $db_name);
                            
    if (!$conn) {
        die("Connection failed: ". mysql_connect_error());
    }
    $name = "peter";
    $age = 25;
    $stmt = mysqli_prepare($conn, "INSERT INTO player (name, age) VALUES (?, ?)");
    mysqli_stmt_bind_param($stmt, "sd", $name, $age);
    mysqli_stmt_execute($stmt);
    $sql = "SELECT * FROM `player`;";
    $result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

while ($row = mysqli_fetch_assoc($result)) {
    // Process each row
    echo " Name " . $row['name'] . " and age: " . $row['age'] . "<br>";
}

mysqli_free_result($result);
    

