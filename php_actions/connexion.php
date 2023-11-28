<?php
    $cnx=mysqli_connect('localhost','root','','GESTION_STOCK');

    if(!$cnx){
        die(mysqli_connect_error());
    }
?>