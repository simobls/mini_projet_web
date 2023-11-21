<?php

    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="ajout">
                <button>Add item</button>
            </div>
            <div class="search">
                <button>Search</button>
            </div>
            <div class="filter">
                <button></button>
            </div>
        </div>
        <div class="table">
            <table>
                <tr>
                    <td>ID</td>
                    <td>Nom</td>
                    <td>Prix</td>
                    <td>Quantite</td>
                    <td>Statut</td>
                    <td>Action</td>
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
        </div>
    </div>
</body>
</html>
