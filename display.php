<?php

    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/display.css">
    <title>Document</title>
</head>
<body>
    <div class="cont">
        <div class="nav">
            <div class="ajout">
                <button> + Add item </button>
            </div>
            <div class="search">
                <input type="text" placeholder="Search"></input>
                <button><img src="assets/empty-filter-32.png" alt=""></button>
				
            </div>
        </div>
        <div class="display">
            <table>
                <tr>
                    <td>ID</td>
                    <td>Nom</td>
                    <td>Prix</td>
                    <td>Quantite</td>
                    <td>Statut</td>
                    <td></td>
                </tr>
                <?php
                    include "connexion.php";
                    $req=mysqli_query($cnx,"Select * from Produits");
                    while($row=mysqli_fetch_array($req)){

                ?>
                <tr>
                    <td><?php echo $row['ID'];?></td>
                    <td><?php echo $row['Nom'];?></td>
                    <td><?php echo $row['Prix'];?>MAD</td>
                    <td><?php echo $row['Quantite'];?></td>
                    <td><button></button></td>
                    <td><button></button><button></button></td>
                </tr>
                <?php
                    }
                ?>
				</table>
        </div>
    </div>
</body>
</html>
