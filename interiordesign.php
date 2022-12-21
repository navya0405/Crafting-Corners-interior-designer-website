<?php
$current = 'Interiordesign';
if (!isset($_COOKIE['uselist'])) {
    $uselist = [
        'Architecture' => 0, 'Customfurniture' => 0, 'Interiordesign' => 0,
        'Paints' => 0, 'Kitchen' => 0, 'Renovation' => 0
    ];
} else {
    $uselist = unserialize($_COOKIE['uselist']);
}
$uselist[$current] = $uselist[$current] + 1;
$uselist = serialize($uselist);
setcookie('uselist', $uselist, time() + 860000 * 30);

if (!isset($_COOKIE['last5list'])) {
    $last5list = [$current, '', '', '', ''];
} else {
    $last5list = unserialize($_COOKIE['last5list']);
    for ($i = 0; $i < 5; $i++) {
        if ($last5list[$i] == $current) {
            $last5list[$i] = '';
            break;
        }
    }
    if ($i > 4) {
        $i = 4;
    }
    for ($j = $i; $j > 0; $j--) {
        $last5list[$j] = $last5list[$j - 1];
    }
    $last5list[0] = $current;
}

$last5list = serialize($last5list);
setcookie('last5list', $last5list, time() + 860000 * 30);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="form.css" />
</head>

<body>
    <h2>Interior Design</h2>
    <p>
        We can design your entire house with different budget options.
    </p>
    <br />
    <form action="interiordesign.php" method="post">
        <fieldset>
            <legend>Review This Product</legend>
            <br />
            <p><label for="rating">Rating</label>
                <input type="radio" name="rating" value="5" /> 5
                <input type="radio" name="rating" value="4" /> 4
                <input type="radio" name="rating" value="3" /> 3
                <input type="radio" name="rating" value="2" /> 2
                <input type="radio" name="rating" value="1" /> 1
            </p>

            <p><label for="review">Review</label>
                <textarea name="review" rows="8" cols="40" maxlength="450">
       </textarea>
            </p>
            <br />
            <p><input type="submit" value="Submit Review"></p>

        </fieldset>
    </form>
    <?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'navya');
    define('DB_PASSWORD', 'navya');
    define('DB_NAME', 'craftingcorners');

    /* Attempt to connect to MySQL database */
    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $product_name = "Interiordesign";
    //Create Connections
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $rating_value = $_POST["rating"];
        $review_text = $_POST["review"];


        $sql1 = "Select * from craftingcorners.overallratings where product_name='" . $product_name . "'";
        $result = mysqli_query($conn, $sql1);
        $count = 0;
        $orating = 0;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $count = $row['count'];
                $orating = $row['rating'];
            }
        } else {
            echo $sql1;
        }
        $orating = (($orating * $count) + $rating_value) / ($count + 1);
        $count = $count + 1;


        $sql2 = "UPDATE craftingcorners.overallratings set count=" . $count . ",rating=" . $orating . " where product_name='" . $product_name . "';";

        if ($conn->query($sql2) === TRUE) {

            $sql3 = "INSERT INTO craftingcorners.ratings (product_name,review, rating) VALUES ('" . $product_name . "','" . $review_text . "'," . $rating_value . ");";

            if ($conn->query($sql3) === TRUE) {
                header("location: interiordesign.php");
            } else {
                echo "Error: " . $sql3 . "<br>" . $conn->error;
            }
        } else {
            echo "Error: " . $sql2 . "<br>" . $conn->error;
        }
    }
    ?>
    <br />
    <br />

    <h3>Customer's review</h3><br>
    <?php
    // Prepare a select statement

    $sql4 = "SELECT rating FROM craftingcorners.overallratings WHERE product_name = '" . $product_name . "';";
    $result1 = mysqli_query($conn, $sql4);

    if ($result1->num_rows > 0) {
        while ($row = $result1->fetch_assoc()) {
            echo "Overall Rating :{$row['rating']}  <br> ";
        }
    } else {
        echo "zero rows";
    }

    ?>
    <br />
    <?php

    $sql5 = "SELECT rating, review FROM craftingcorners.ratings WHERE product_name = '" . $product_name . "';";

    $result = mysqli_query($conn, $sql5);
    $i = 1;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo $i . ") Rating :{$row['rating']}  <br> ";
            echo "  Review:{$row['review']}  <br><br> ";
            $i++;
        }
    }
    $conn->close();
    ?>

</body>

</html </body>

</html>