
    <?php
    extract($_POST);
    $servername = "localhost";
    $username = "navya";
    $password = "navya";
    $dbname = "craftingcorners";

    //Create Connections
    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if ($conn) {
        echo "Connection Successful";
    }
    mysqli_select_db($conn, $dbname);

    $f_name = $_POST['FIRSTNAME'];
    $l_name = $_POST['LASTNAME'];
    $email = $_POST['EMAIL'];
    $home_address = $_POST['HOMEADDRESS'];
    $home_phone = $_POST['HOMEPHONE'];
    $cell_phone = $_POST['CELLPHONE'];


    $query = "INSERT INTO users (firstName,lastName,email,address,homePhone,cellPhone) VALUES('$f_name','$l_name','$email','$home_address','$home_phone','$cell_phone')";

    if (mysqli_query($conn, $query)) {
        echo ("<h5>User Created Successfully</h5>");
    }
    header('location: index.php');




    ?>
