<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Crafting Corners</title>
</head>

<body>




    <div class="wholebody">

        <?php

        $servername = "localhost";
        $username = "navya";
        $password = "navya";
        $dbname = "craftingcorners";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }


        $query = "Select * from craftingcorners.overallratings order by rating desc LIMIT 5";
        //   echo $query;
        $result = mysqli_query($conn, $query);
        if ($result->num_rows > 0) {
            print("<div style='margin:50px 80px'><h2>Top 5 Highly rated Products in Crafting Corners:</h2><br/>");
            $co = 0;
            $da = "";
            $va1 = "";
            while ($row = $result->fetch_assoc()) {
                $co = $co + 1;
                echo $co . ') ' . $row['product_name'];
                $da = $da . "," . $row['product_name'];
                $va1 = $va1 . "," . $row['rating'];
                print("<br>");
            }
            $da = substr($da, 1);
            print("</div>");
            print("<p style='display: none;'>" . $da . $va1 . "</p>");
        }


        ?>



    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>