<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/add.css">
	<title>Document</title>
</head>
<body>
    <?php
        include "../php_actions/add_action.php";
    ?>
    <div class="ajout" id="ajout">
		<p>Ajouter un produit</p>
		<form action="" method="post">
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
</body>
</html>