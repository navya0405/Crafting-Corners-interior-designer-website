<!-- //Get Heroku ClearDB connection information
// $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
// $cleardb_server = $cleardb_url["host"];
// $cleardb_username = $cleardb_url["user"];
// $cleardb_password = $cleardb_url["pass"];
// $cleardb_db = substr($cleardb_url["path"], 1);
// $active_group = 'default';
// $query_builder = TRUE;
// // Connect to DB
// $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db); -->

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Crafting Corners</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
  <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5 {
      font-family: "Poppins", sans-serif
    }

    body {
      font-size: 16px;
    }

    .w3-half img {
      margin-bottom: -6px;
      margin-top: 16px;
      opacity: 0.8;
      cursor: pointer
    }

    .w3-half img:hover {
      opacity: 1
    }
  </style>
</head>

<body>

  <!-- Sidebar/menu -->
  <nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
    <div class="w3-container">
      <h3 class="w3-padding-64"><b>Crafting Corners</b></h3>
    </div>
    <div class="w3-bar-block">

      <!-- <a href="login.php" onclick="w3_close()" class=" -->
      <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a>
      <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Showcase</a>
      <a href="services.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Services</a>
      <!-- <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Designers</a> -->
      <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Packages</a>
      <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
      <a href="form.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Current_Users</a>
      <a href="users-form.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Users</a>
      <a href="showusers.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Show Crafting Corners Users</a>
      <a href="showother.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Show Other Users</a>
      <a href="https://navyasree04.online/" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Marketplace</a>

    </div>
  </nav>

  <!-- Top menu on small screens -->
  <header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
    <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
    <span>Crafting Corners</span>
  </header>

  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:340px;margin-right:40px">

    <!-- Header -->
    <div class="w3-container" style="margin-top:80px" id="showcase">
      <h1 class="w3-jumbo"><b>Home Decor & Interior Design</b></h1>
      <h1 class="w3-xxxlarge w3-text-red"><b>Showcase.</b></h1>
      <hr style="width:50px;border:5px solid red" class="w3-round">
    </div>

    <!-- Photo grid (modal) -->
    <div class="w3-row-padding">
      <div class="w3-half">
        <img src="brick2.jpeg" style="width:100%" onclick="onClick(this)" alt="Concrete meets bricks">
        <img src="livingroom.jpeg" style="width:100%" onclick="onClick(this)" alt="Light, white and tight scandinavian design">
        <img src="diningroom.jpeg" style="width:100%;height:100%" onclick="onClick(this)" alt="White walls with designer chairs">
      </div>

      <div class="w3-half">
        <img src="atrium.jpeg" style="width:100%" onclick="onClick(this)" alt="Windows for the atrium">
        <img src="bedroom.jpeg" style="width:100%" onclick="onClick(this)" alt="Bedroom">
        <img src="livingroom2.jpeg" style="width:100%" onclick="onClick(this)" alt="livingroom design">
        <img src="kitchen.jpeg" style="width:100%" onclick="onClick(this)" alt="kitchen design">
      </div>
    </div>

    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
      <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
      <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
        <img id="img01" class="w3-image">
        <p id="caption"></p>
      </div>
    </div>

    <!-- Services -->
    <div class="w3-container" id="services" style="margin-top:75px">
      <h1 class="w3-xxxlarge w3-text-red"><b>Services.</b></h1>
      <hr style="width:50px;border:5px solid red" class="w3-round">

      <p>Architectural details and drawings, Construction floor plans and elevations.</p>
      <p>Coordination with architects and contractors, Space planning and interior architecture.</p>
      <p>Selection of furniture and accessories, Custom furniture and textile design.</p>
      <p>Concierge purchasing management, Color palette consultation.</p>
      <p>Delivery and installation, Budget planning.</p>


    </div>


    <!-- Packages / Pricing Tables -->
    <div class="w3-container" id="packages" style="margin-top:75px">
      <h1 class="w3-xxxlarge w3-text-red"><b>Packages.</b></h1>
      <hr style="width:50px;border:5px solid red" class="w3-round">
    </div>

    <div class="w3-row-padding">
      <div class="w3-half w3-margin-bottom">
        <ul class="w3-ul w3-light-grey w3-center">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Basic</li>
          <li class="w3-padding-16">Floorplanning</li>
          <li class="w3-padding-16">10 hours support</li>
          <li class="w3-padding-16">Photography</li>
          <li class="w3-padding-16">20% furniture discount</li>
          <li class="w3-padding-16">Good deals</li>
          <li class="w3-padding-16">
            <h2>$ 199</h2>
            <span class="w3-opacity">per room</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>

      <div class="w3-half">
        <ul class="w3-ul w3-light-grey w3-center">
          <li class="w3-red w3-xlarge w3-padding-32">Pro</li>
          <li class="w3-padding-16">Floorplanning</li>
          <li class="w3-padding-16">50 hours support</li>
          <li class="w3-padding-16">Photography</li>
          <li class="w3-padding-16">50% furniture discount</li>
          <li class="w3-padding-16">GREAT deals</li>
          <li class="w3-padding-16">
            <h2>$ 249</h2>
            <span class="w3-opacity">per room</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-red w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>
    </div>

    <!-- Contact -->
    <div class="w3-container" id="contact" style="margin-top:75px">
      <h1 class="w3-xxxlarge w3-text-red"><b>Contact.</b></h1>
      <hr style="width:50px;border:5px solid red" class="w3-round">
      <p>Do you want us to style your home? Contact us at</p>
      <h5>
        <?php
        $myfile = fopen("test.txt", "r") or die("Unable to open file!");
        // Output one line until end-of-file
        while (!feof($myfile)) {
          echo fgets($myfile) . "<br>";
        }
        fclose($myfile);
        ?>
      </h5>
    </div>

    <!-- End page content -->
  </div>

  <!-- W3.CSS Container -->
  <div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px">
    <p class="w3-right">Powered by Crafting Corners</a></p>
  </div>

  <script>
    // Script to open and close sidebar
    function w3_open() {
      document.getElementById("mySidebar").style.display = "block";
      document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
      document.getElementById("mySidebar").style.display = "none";
      document.getElementById("myOverlay").style.display = "none";
    }

    // Modal Image Gallery
    function onClick(element) {
      document.getElementById("img01").src = element.src;
      document.getElementById("modal01").style.display = "block";
      var captionText = document.getElementById("caption");
      captionText.innerHTML = element.alt;
    }
  </script>

</body>

</html>