<?php
   $servername = "localhost";
   $username = "navya";
   $password = "navya";
   $dbname = "craftingcorners";
   
   //Create Connections
   $conn= mysqli_connect($servername,$username,$password,$dbname);
   
   if($conn) {
     $query = "Select firstName,lastName From users";
     $result=mysqli_query($conn, $query);
     if ($result->num_rows > 0) {
       // output data of each row
       echo "NAMES OF USERS OF Crafting Corners: <br><br>";
       $i=1;
       while($row = $result->fetch_assoc()) {
           echo $i;
           echo ")";
         echo $row["firstName"]. " " . $row["lastName"]. "<br>";
         $i=$i+1;
       }
     } else {
       echo "0 results";
     }
     $conn->close();
   
   }
