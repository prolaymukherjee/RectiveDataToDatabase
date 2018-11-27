<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "w_lab";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT s_id, s_name FROM stinfo";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "s_id: " . $row["s_id"]. " - Name: " . $row["s_name"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>