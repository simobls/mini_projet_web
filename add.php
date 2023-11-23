<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/add.css">
	<title>Document</title>
</head>
<body>
<div class="ajout" id="ajout">
		<p>Ajouter un produit</p>
		<form action="" method="post" >
        <div class="in1">
            <input type="text" name="nom" placeholder="Nom du produit">
        </div>
        <div class="in1">
            <input type="text" name="loca" placeholder="Location du stock"><br>
        </div>
        <div class="in2">
            <input type="text" name="prix" placeholder="Prix">
            <input type="text" name="quant" placeholder="Quantite"><br>
        </div>
        <div class="but">
            <button class="b1" type="submit" name="OK" >+ Ajouter</button>
            <button class="b2" type="reset">x Annuler</button>
        </div>
		</form>
    </div>
    <?php
        include "connexion.php";
        if(isset($_POST["OK"])){
            $nomP=$_POST['nom'];
            $prixP=$_POST['prix'];
            $quanP=$_POST['quant'];
            $req=mysqli_query($cnx,"Insert into Produits values(NULL,'$nomP','$prixP','$quanP')");
            if(!$req){
                echo "Erreur ";
            }
        }
    ?>
</body>
</html>