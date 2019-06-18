<?php
include_once "includes/connection.php";
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CMS</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/user_list.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">


.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 400px;
  max-height: 800px;
 margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
img {
  border-radius: 70%;
}
.button {

  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  background-color: blue;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: #C0C0C0;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>

<body style="background-color:white;">
    <!--::header part start::-->
    <header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <h1><img src="imgs/logo.png" alt="logo" width="30%" height="30%"></h1>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                         <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php"><h4><b>Home </b></h4></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html"><h4><b>About</b></h4></a>
                                </li>
                                
                               
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
 <?php

session_start();
$sender=$_SESSION['SENDER'];
$receiver=$_POST['rid'];
$_SESSION['RECEIVER']=$receiver;

$query1="select * from user where Id=$sender";
$result=mysqli_query($connection,$query1);
if($user=mysqli_fetch_assoc($result))
{
	$sname=$user["Name"];
}
$query2="select * from user where Id=$receiver";
$result=mysqli_query($connection,$query2);
if($user=mysqli_fetch_assoc($result))
{
	$rname=$user["Name"];
}
?>
<form action="transfer2.php" method="POST">
<div class="card">
   
  <h2>Sender:&nbsp; &nbsp;<?php echo $sname; ?></h2>
  <h2>TO</h2>
  <h2>Receiver:&nbsp; &nbsp;<?php echo $rname; ?></h2>
  <h2>Enter Credit:&nbsp;</h2> <input type="number" name="points">
  <div style="margin: 24px 0;">
     </div>
  <input type="submit" class="button" value="Transfer">
</form>
<script src="js/jquery-1.12.1.min.js"></script>
<!-- popper js -->
<script src="js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- easing js -->
<!-- particles js -->
<script src="js/contact.js"></script>
<!-- ajaxchimp js -->
<script src="js/jquery.ajaxchimp.min.js"></script>
<!-- validate js -->
<script src="js/jquery.validate.min.js"></script>
<!-- form js -->
<script src="js/jquery.form.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<!-- swiper js -->
<script src="js/swiper.min.js"></script>
<!-- swiper js -->
<script src="js/masonry.pkgd.js"></script>
<!-- particles js -->
<script src="js/owl.carousel.min.js"></script>
<!-- swiper js -->
<script src="js/slick.min.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>



</body>

</html>

