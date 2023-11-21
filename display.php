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
                <button><a href="/add.php"> + Ajouter </a></button>
            </div>
            <div class="search">
                <input type="text" placeholder="Recherche"></input>
                <button><img src="assets/empty-filter-32.png" alt=""></button>
				
            </div>
        </div>
        <div class="display">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Quantite</th>
                    <th>Statut</th>
                    <th></th>
                </tr>
				<tr>
                    <td>1</td>
                    <td>Phone</td>
                    <td>1200MAD</td>
                    <td>12</td>
                    <td><button>Actif</button></td>
                    <td class="opt">
						<img src="/assets/edit.png" alt="" class="img1">
						<img src="/assets/bin.png" alt="" class="img2">
					</td>
                </tr>
				<hr>
				<tr>
                    <td>1</td>
                    <td>Phone</td>
                    <td>1200MAD</td>
                    <td>12</td>
                    <td><button>Actif</button></td>
                    <td class="opt">
						<img src="/assets/edit.png" alt="" class="img1">
						<img src="/assets/bin.png" alt="" class="img2">
					</td>
                </tr>
				<tr>
                    <td>1</td>
                    <td>Phone</td>
                    <td>1200MAD</td>
                    <td>12</td>
                    <td><button>Actif</button></td>
                    <td class="opt">
						<img src="/assets/edit.png" alt="" class="img1">
						<img src="/assets/bin.png" alt="" class="img2">
					</td>
                </tr>
				<tr>
                    <td>1</td>
                    <td>Phone</td>
                    <td>1200MAD</td>
                    <td>12</td>
                    <td><button>Actif</button></td>
                    <td class="opt">
						<img src="/assets/edit.png" alt="" class="img1">
						<img src="/assets/bin.png" alt="" class="img2">
					</td>
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
                    <td><button>Actif</button></td>
                    <td class="opt">
						<img src="/assets/edit.png" alt="" class="img1">
						<img src="/assets/bin.png" alt="" class="img2">
					</td>
                </tr>
                <?php
                    }
                ?>
				<hr>
				</table>
        </div>
    </div>
</body>
</html>
