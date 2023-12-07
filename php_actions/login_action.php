<?php
        include "connexion.php";
        if(isset($_POST["submit"])){

            $emailU=$_POST['user'];
            $passU=$_POST['password'];
            $erreur="";

            $req="SELECT * FROM Utilisateurs where email='$emailU' and password='$passU'";
            $res=mysqli_query($cnx,$req);
            if(mysqli_num_rows($res)>0) {
                header("Location:display.php");
            } else {
                $erreur="Email ou mot de passe incorrect";
            }
        }
    ?>