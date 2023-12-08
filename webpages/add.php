<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/add.css">
	<title>Ajout</title>
</head>
<body>
    <div class="ajout" id="ajout">
		<p>Ajouter un produit</p>
		<form action="" method="post" autocomplete="off">
        <div class="in1">
            <input type="text" name="nom" placeholder="Nom du produit" required>
        </div>
        <div class="in1">
            <input type="text" name="loca" placeholder="Location du stock" required><br>
        </div>
        <div class="in2">
            <input type="number" name="prix" placeholder="Prix" required min='0.01' step='0.01'>
            <input type="number" name="quant" placeholder="Quantite" required min='0'><br>
        </div>
        <div class="but">
            <button class="b1" type="submit" name="OK" >+ Ajouter</button>
            <button class="b2" type="reset" onclick="window.location.href='../webpages/display.php'">x Annuler</button>
        </div>
		</form>
    </div>
    <?php
        include "../php_actions/connexion.php";
        if(isset($_POST["OK"])){
            $nomP=$_POST['nom'];
            $prixP=$_POST['prix'];
            $quanP=$_POST['quant'];
            $locationP=$_POST['loca'];
            $req=mysqli_query($cnx,"Insert into produits values(NULL,'$nomP','$prixP','$quanP','$locationP')");
            if(!$req){
                echo "Erreur";
            }else{
                header("Location:../webpages/display.php");
            }
        }
    ?>
</body>
</html>