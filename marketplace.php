<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ephesis&family=Lobster&display=swap" rel="stylesheet">

        <link href="style.css" rel="stylesheet">

        <meta charset="utf-8">


    </head>

<body>
    <!--nav for market place -->
    <div class="market-header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Market place</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link " href="#">Tracking visiting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Top five visited products</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown show">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="account.php">Sign in/Register</a>
                                    <?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) { ?>

                                        <a class="dropdown-item" href="logOut.php">Sign Out</a>
                                        <a class="dropdown-item" href="profile.php">My profile</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>

    <div class="row">
        <div class="card mb-3" style="max-width: 800px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="images/laptop.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Electro</h5>
                        <p class="card-text">Looking for something back to school? Check for this website! </p>
                        <p class="card-text"><a href="http://nimmagaddasrikanth.me">Electro</a></p>
                    </div>
                </div>
            </div>

        </div>

        <div class="card mb-3" style="max-width: 770px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="images/service.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Dallor Bajji</h5>
                        <p class="card-text">Looking for daily service such as spa, ticket booking, dinning, or disco dancing? Go check for this website </p>
                        <p class="card-text"><a href="http://itsmerama.me">Dallor Bajji</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="card mb-3" style="max-width: 760px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="images/travel.jpeg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">PARAISO</h5>
                        <p class="card-text">Looking for places to go, such as hiking or beaching? Go check for this website </p>
                        <p class="card-text"><a href="http://abhitejamandava.live">PARAISO</a></p>
                    </div>
                </div>
            </div>
        </div>



        <div class="card mb-3" style="max-width: 800px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="images/baking.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Xuxi&Jeanie's baking house</h5>
                        <p class="card-text">Looking for getting a cake for a party? Go check for this website </p>
                        <p class="card-text"><a href="http://jeaniecutie.com/index.php">Xuxi&Jeanie's baking house</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>