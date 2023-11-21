<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<div class="ajout2" id="ajout">
		<h1>Ajouter un produit</h1>
		<form action="" method="post" >
        <label class="nom">Nom:</label>
        <input type="text" name="nom" placeholder="Nom Produit">
        <label class="nom">Prix:</label>
        <input type="text" name="prix" placeholder="Prix Produit">
        <label class="nom">Quantite:</label>
        <input type="text" name="quant" placeholder="Quantite Produit"><br>
        <button type="submit" name="OK" >Ajouter</button>
        <button type="reset">Annuler</button>
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