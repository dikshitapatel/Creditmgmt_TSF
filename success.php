<?php
include_once "includes/connection.php";


      session_start();
  $sender=$_SESSION['SENDER'];
  $receiver=$_SESSION['RECEIVER'];

  $points=$_POST['points'];

  $query = "SELECT Current_credit FROM user where Id = $sender";
                    $result = mysqli_query($connection,$query);
                    if ($user = mysqli_fetch_assoc($result)) {
                        $credit=$user["Current_credit"];
                        
                    }
                   if($credit < 0 )
                   {
                   	echo "Insufficient balance";
                   }
                   elseif ($points > $credit) {
                   	echo "Insufficient balance";
                   }
                   else
                   {
                   $q1=	"INSERT INTO `transfer`(`creditor_id`, `debtor_id`, `amount`) VALUES ($sender,$receiver,$points)";
					$q2="UPDATE user SET Current_credit=Current_credit-$points WHERE Id='$sender'";
					$q3="UPDATE user SET Current_credit=Current_credit+$points WHERE Id='$receiver'";
					 $r1 = mysqli_query($connection,$q1);
					  $r2= mysqli_query($connection,$q2);
					   $r3= mysqli_query($connection,$q3);


                   }
      


?>
