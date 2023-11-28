<?php
        if (isset($_POST['modifier'])) {
            $id = $_POST['id'];
            $nom = $_POST['nom'];
            $prix = $_POST['prix'];
            $quant = $_POST['quantite'];
            $location = $_POST['location'];

            $req = "UPDATE produits SET nom='$nom', prix='$prix', quantite='$quant', location='$location' WHERE id ='$id'";
        
            $result = mysqli_query($cnx, $req);
 
            if ($result) {
                header("Location:display.php");
            } else {
                echo "Erreur lors de la mise à jour.";
            }
        }
?>