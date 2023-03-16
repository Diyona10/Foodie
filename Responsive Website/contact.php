<?php

$conn = mysqli_connect('localhost','root','','contact_form');

if(isset($_POST['send'])){

   $NAME = $_POST['full_name'];
   $EMAIL = $_POST['email_address'];
   $PERSON = $_POST['total_person'];
   $DATE = $_POST['booking_date'];
   $MSG = $_POST['message'];
   

   $insert = "INSERT INTO `contact_form`(`NAME`, `EMAIL`, `PERSON`, `DATE`, `MSG`) VALUES ('$NAME','$EMAIL','$PERSON','$DATE','$MSG')" ;

   mysqli_query($conn, $insert);

   header('location:contact.php');

}

?>