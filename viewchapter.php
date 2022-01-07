<script>
  function getVal(str) {
    var v = window.location.search.match(new RegExp('(?:[\?\&]' + str + '=)([^&]+)'));
    return v ? v[1] : null;
  }

  if (getVal("f") == "Content") {

    if (getVal("load") != 1) {
      var foo = prompt('Password');
      window.location.href += "&pass=" + foo + "&load=1";
    }
  }
</script>

<?php include "dbconnect.php";

$id = $_GET['i'];


$sql = "SELECT * FROM files WHERE id = '$id' ";

$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

$manganame = $files[0]['manganame'];
$mangalink = $files[0]['mangalink'];
$chaptername = $files[0]['chaptername'];
$type = $files[0]['type'];
$password = $files[0]['cpassword'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Chapter View</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>burningOTAKU</title>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark" style="width: 100%;background-color: black;" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php">
        <h5 style="color: white;">DESTINY</h5>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars ml-1"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <!--<li class="nav-item"><a class="nav-link js-scroll-trigger" href="https://www.youtube.com/channel/UCiRbkeVXrtKW4oCLj61pVNQ">YouTube Channel</a></li>-->

          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/#portfolio">Updates</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/#about">About</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/">Search</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>









  <div class="container-fluid text-center">
    <div style="
                    /* margin: 28px; */
                    position: fixed;
                    right: 0;
                    bottom: 0;
                    z-index: 9999999999;
                    background: yellow;
                    padding: 5px;
                    width: 238px;
                    border-top-left-radius: 5px;
                "><a style="color:black" href="">Destiny</a></div>
    <div class="row content">
      <div class="col-sm-2 sidenav">
        <p>Live as if you were to die tomorrow. </p>
        <p>Learn as if you were to live forever.</p>
      </div>
      <div class="col-sm-8 text-left">
        <?php

        if (isset($_GET["pass"]) && $type == "Content") { ?>

          <?php if ($_GET["pass"] != $password) { ?>
            <div class="wp">
              <p>Wrong Password Try Again</p>
              <p><input type="text" id="trypass"></p>
              <p><button onclick='window.location.href += "&pass=" + document.getElementById("trypass").value + "&load=0";'>Try Again</button></p>
            </div>

          <?php }  ?>

          <?php if ($_GET["pass"] == $password) { ?>
            <h1><?php echo $manganame;   ?></h1> <?php echo $chaptername; ?>
            <p><?php echo str_replace("/*-/", "'", $mangalink);   ?></p>
            <hr>
          <?php }  ?>


        <?php } else if ($type != "Content") { ?>

          <h1><?php echo $manganame;   ?></h1> <?php echo $chaptername; ?>
          <p><?php echo str_replace("/*-/", "'", $mangalink);   ?></p>

          <hr>

        <?php } ?>

      </div>
      <div class="col-sm-2 sidenav">
        <div class="well">
          <p><a class="portfolio-link" href="https://www.youtube.com/channel/UCiRbkeVXrtKW4oCLj61pVNQ"></p>
        </div>
        <div class="well">
          <p></p>
        </div>
      </div>
    </div>
  </div>

  <footer class="container-fluid text-center">
    <h3>Visit</h3>
  </footer>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Third party plugin JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <!-- Contact form JS-->
  <script src="assets/mail/jqBootstrapValidation.js"></script>
  <script src="assets/mail/contact_me.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>

</body>

</html>