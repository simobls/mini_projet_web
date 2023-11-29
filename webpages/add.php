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
		<form action="../php_actions/add_action.php" method="post" >
        <div class="in1">
            <input type="text" name="nom" placeholder="Nom du produit">
        </div>
        <div class="in1">
            <input type="text" name="loca" placeholder="Location du stock"><br>
        </div>
        <div class="in2">
            <input type="text" name="prix" placeholder="Prix">
            <input type="number" name="quant" placeholder="Quantite"><br>
        </div>
        <div class="but">
            <button class="b1" type="submit" name="OK" >+ Ajouter</button>
            <button class="b2" type="reset">x Annuler</button>
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