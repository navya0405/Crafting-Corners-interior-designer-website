<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list of customers</title>
    <link rel="stylesheet" type="text/css" href="current_users_style.css">

</head>

<body>
    <div id="contacts">
        <?php
        extract($_POST);
        // open file
        // for reading
        if (!($file = fopen("password.txt", "r"))) {
            print("<title>Error</title></head><body>Could not open password file</body></html>");
            die();
        }


        $userVerified = 0;

        // read each line in file and check username
        // and password
        while (!feof($file) && !$userVerified) {

            // read line from file
            $line = fgets($file, 255);

            // remove newline character from end of line
            $line = chop($line);

            // split username and password
            $field = explode(",", $line, 2);

            // verify username
            if ($USERNAME == $field[0]) {
                $userVerified = 1;

                // call function checkPassword to verify
                // user’s password
                if (checkPassword($PASSWORD, $field)  == true)
                    accessGranted($USERNAME);
                else
                    wrongPassword();
            }
        }

        // close text file
        fclose($file);

        // call function accessDenied if username has
        // not been verified
        if (!$userVerified)
            accessDenied();


        // verify user password and return a boolean
        function checkPassword($userpassword, $filedata)
        {
            if ($userpassword == $filedata[1])
                return true;
            else
                return false;
        }


        // print a message indicating permission
        // has been granted
        function accessGranted($name)
        {
            print("<title>Thank You</title></head><body style = \"font-family: arial;font-size: 1em; color: blue\">
                      <strong>Permission granted, $name.  <br/></strong>");


            $contact_list = file("users.txt");
            foreach ($contact_list as $contact) {
                echo nl2br($contact);
            }
        }
        // print a message indicating password is invalid
        function wrongPassword()
        {
            print("<title>Access Denied</title></head><body style = \"font-family: arial; font-size: 1em; color: red\">
                     <strong>You entered an invalid password.<br />Access has been denied.</strong>");
        }

        // print a message indicating access has been denied
        function accessDenied()
        {
            print("<title>Access Denied</title></head><body style = \"font-family: arial;font-size: 1em; color: red\">
                      <strong> You were denied access to this server.<br /></strong>");
        }





        ?>
        
        <h2> <a class = "homepage" href = "index.php"> Go to Home page </a></h2>
    </div>


</body>

</html>