<?php
    $servername='localhost';
    $username='creasites_pw';
    $password='oe}f4~w}b-R@';
    $dbname = "creasites_pw";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>