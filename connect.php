<?php
    $host="localhost";
    $user="root";
    $password="";
    $dbname="shopping_cart";

    $con=mysqli_connect($host,$user,$password,$dbname) or die ("ไม่สามารถเชื่อมต่อ database ได้");
    $con->query("SET NAMES UTF8");
?>