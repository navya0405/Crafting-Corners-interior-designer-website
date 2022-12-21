<?php

/**
 * Initialize the cURL session
 */
$servername = "localhost";
$username = "navya";
$password = "navya";
$dbname = "craftingcorners";

//Create Connections
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
    $query = "Select firstName,lastName From users";
    $result = mysqli_query($conn, $query);
    if ($result->num_rows > 0) {
        // output data of each row
        echo "Names of users of Crafting corners: <br><br>";
        $i = 1;
        while ($row = $result->fetch_assoc()) {
            echo $i;
            echo ")";
            echo $row["firstName"] . " " . $row["lastName"] . "<br>";
            $i = $i + 1;
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}

$ch = curl_init();

/**
 * Set the URL of the page or file to download.
 */
curl_setopt($ch, CURLOPT_URL, "https://navyasree04.online/showusers.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

$server_response = curl_exec($ch);
curl_close($ch);
echo "<br><br>Names of users of seborrheic-ditches: <br>";
echo $server_response;
