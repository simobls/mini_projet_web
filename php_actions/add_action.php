<?php
    if(isset($_POST["submit"])){
        $nomP=$_POST['nom'];
        $prixP=$_POST['prix'];
        $quanP=$_POST['quant'];
        $locationP=$_POST['loca'];

        $req=mysqli_query($cnx,"Insert into produits values(NULL,'$nomP','$prixP','$quanP','$locationP')");

        if(!$req){
            die ("Erreur");
        } else {
            header("Location:display.php");
        }
    }
?>