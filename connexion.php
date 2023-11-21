<?php
    $cnx=mysqli_connect('localhost','root','123','GESTION_STOCK');
    
    if(!$cnx){
        die(mysqli_connect_error());
    }
?>