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
<style type="text/css">
    table#t01 tr:nth-child(even) {
  background-color: #C0C0C0;
  font-size: 15px;
}
.button {
  background-color: blue;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 12px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
}
.button:hover {opacity: 1}

table#t01 tr:nth-child(odd) {
 background-color: #fff;
   font-size: 15px;

}
th
{
  color:blue;
  font-size: 1.5em;
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
                        <h1><img src="imgs/logo.png" alt="logo" width="40%" height="40%"></h1>
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
    <div class="container bootstrap snippet">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-box no-header clearfix">
                <div class="main-box-body clearfix">
                    <div class="table-responsive">
     <?php
    //execute the SQL query and return records
    $sql = "SELECT * FROM user";
    $result = $connection->query($sql);
     echo "<table cellpadding='30px' id='t01' width='100%''
>

<tr>
<h1>
<th><span>Id<span></th>
<th><span>Profile</span></th>
<th>Name</th>

<th>Email</th>

<th>Current Credit</th>
<th><span></span></th>
</h1>
</tr>";


    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$id=$row['Id'];
$img=$row['Profile_img'];
$name=$row['Name'];
$email=$row['Email'];
$c=$row['Current_credit'];



 
       // echo "id: " . $row["Id"]. " - Name: " . $row["Name"]. " -Email" . $row["Email"]. "-Current credit".$row['Current_credit']." ";

                //echo '<img src = "imgs/"'.$row['Profile_img'].'" /><br>';

        //echo '<img src="imgs/'.$row['Profile_img'].'" width="40px" height="40px"><br>';
       echo '<form action="profile.php" method="POST">';

        echo "<tr>";

  echo "<td  >" . $id . "</td>";
    echo '<td><img src="imgs/'.$img.'" width="70px" height="70px"></td>';
      
  echo "<td>" . $name. "</td>";

  echo "<td>" . $email . "</td>";

  echo "<td>" . $c . "</td>";
                echo '<td><input type="hidden" name="id" value="' . $id. '"><button class="button">View Profile</button></a></td>';
               // echo '<td><a  href="profile.php?id=' . $id. '" ><button class="button">View Profile</button></a></td>';


  echo "</tr>";
  echo "</form>";
    }
    echo "</table>";

} else {
    echo "0 results";
}

   
 



?>
</div></div></div></div></div>
<!-- jquery -->
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