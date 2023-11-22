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
		<h1>Ajouter un produit</h1>
		<form action="" method="post" >
        <div>
            <label class="nom">Nom:</label>
            <input type="text" name="nom" placeholder="Nom du produit">
        </div>
        <div>
            <label class="nom">Location:</label>
            <input type="text" name="loca" placeholder="Location du stock"><br>
        </div>
        <div>
            <label class="nom">Prix:</label>
            <input type="text" name="prix" placeholder="Prix">
            <label class="nom">Quantite:</label>
            <input type="text" name="quant" placeholder="Quantite"><br>
        </div>
        <div>
            <button type="submit" name="OK" >Ajouter</button>
            <button type="reset">Annuler</button>
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