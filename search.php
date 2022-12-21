<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <?php
    extract($_POST);
    $servername = "localhost";
    $username = "navya";
    $password = "navya";
    $dbname = "craftingcorners";

    //Create Connections
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if ($conn) {

        $firstname = $_POST['fIRSTNAME'];
        $emailid = $_POST['eMAIL'];
        $cellphoneVal = $_POST['cELLPHONE'];

        $query = "Select * from users where firstName like '$firstname' AND email like '$emailid' AND cellPhone like '$cellphoneVal'";
        $result = mysqli_query($conn, $query);
        if ($result->num_rows > 0) {
            echo '<table id="user-search-results" cellspacing="0" cellpadding="1" border="1" width="300" class="table" style="table-layout:fixed;word-break: break-word;display: table; margin-top: 20px; width: 100%">';
            echo '<thead style="border-bottom: 2px solid grey">';
            echo '<tr>';

            echo '<th scope="col">First Name</th>';
            echo '<th scope="col">Last Name</th>';
            echo '<th scope="col">Email</th>';
            echo '<th scope="col">Address</th>';
            echo '<th scope="col">Home Phone</th>';
            echo '<th scope="col">Cell Phone</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody id="users-table-body">';
            while ($row = $result->fetch_assoc()) {

                $fname = $row['firstName'];
                $lname = $row['lastName'];
                $email = $row['email'];
                $address = $row['address'];
                $cellphone = $row['cellPhone'];
                $homephone = $row['homePhone'];
                echo '<tr>';

                echo "<td>$fname</td>";
                echo "<td>$lname</td>";
                echo "<td>$email</td>";
                echo "<td>$address</td>";
                echo "<td>$cellphone</td>";
                echo "<td>$homephone</td>";
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
        } else {
            echo '<table id="user-search-results" style="display: table; table-layout:fixed;word-break: break-word;margin-top: 20px; width: 100%">';
            echo '<thead style="border-bottom: 2px solid grey">';
            echo '<tr>';

            echo '<th scope="col">First Name</th>';
            echo '<th scope="col">Last Name</th>';
            echo '<th scope="col">Email</th>';
            echo '<th scope="col">Address</th>';
            echo '<th scope="col">Home Phone</th>';
            echo '<th scope="col">Cell Phone</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody id="users-table-body">';
            echo '<tr>';
            echo "<td colspan='7' style='text-align:center'>No data found</td>";
            echo '</tr>';
            echo '</tbody>';
            echo '</table>';
        }
    }

    $conn->close();
    ?>