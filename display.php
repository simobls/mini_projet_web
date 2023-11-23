<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/display.css">
    <link rel="stylesheet" href="css/add.css">
    <title>Document</title>
</head>
    <body>
        <div class="cont">
            <div class="nav">
                <div class="ajout2">
                    <button><a href="add.php"> + Ajouter un produit </a></button>
                </div>
                <div class="search">
                    <form method="get">
                        <input type="search" placeholder="Recherche" name="search"></input>
                    </form>
                    <button type="submit"><img src="assets/empty-filter-32.png" alt=""></button>
                </div>
            </div>
            <div class="display">
                <table border=0.5 frame=void rules=rows>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prix</th>
                        <th>Quantite</th>
                        <th>Location</th>
                        <th>Statut</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>salam</td>
                        <td>12233MAD</td>
                        <td>12</td>
                        <td>depot1</td>
                        <td><button class="actif">Actif</button></td>
                        <td class="opt">
                            <form method="get">
                                <button><img src="/assets/edit.png" alt="" class="img1"></button>
                                <button name="delete" type="submit"><img src="/assets/bin.png" alt="" class="img2" ></button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>salam</td>
                        <td>12233MAD</td>
                        <td>12</td>
                        <td>depot1</td>
                        <td><button class="actif">Actif</button></td>
                        <td class="opt">
                            <form method="get">
                                <button><img src="/assets/edit.png" alt="" class="img1"></button>
                                <button name="delete" type="submit"><img src="/assets/bin.png" alt="" class="img2" ></button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>salam</td>
                        <td>12233MAD</td>
                        <td>12</td>
                        <td>depot1</td>
                        <td><button class="actif">Actif</button></td>
                        <td class="opt">
                            <form method="get">
                                <button><img src="/assets/edit.png" alt="" class="img1"></button>
                                <button name="delete" type="submit"><img src="/assets/bin.png" alt="" class="img2" ></button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>salam</td>
                        <td>12233MAD</td>
                        <td>12</td>
                        <td>depot1</td>
                        <td><button class="actif">Actif</button></td>
                        <td class="opt">
                            <form method="get">
                                <button><img src="/assets/edit.png" alt="" class="img1"></button>
                                <button name="delete" type="submit"><img src="/assets/bin.png" alt="" class="img2" ></button>
                            </form>
                        </td>
                    </tr>

                <?php
                include "connexion.php";
                $index = 0;
                $search = null;
                    if (isset($_GET['search'])) {
                        $search = $_GET['search'];
                        if (preg_match('/^[[:alnum:]]/', $search)) {
                            $req = mysqli_query($cnx, "SELECT * FROM produits WHERE Nom = '$search'");
                        }
                        else {
                            $req = mysqli_query($cnx, "SELECT * FROM produits");
                        }
                        
                        while ($row = mysqli_fetch_assoc($req)) {
                            ?>
                            <tr>
                                <td><?php $row['ID']; ?></td>
                                <td><?php echo $row['Nom']; ?></td>
                                <td><?php echo $row['Prix']; ?>MAD</td>
                                <td><?php echo $row['Quantite']; ?></td>
                                <td><?php echo $row['Location']; ?></td>
                                <?php
                                if ($row['Quantite'] > 0) echo '<td><button class="actif">Actif</button></td>';
                                else echo '<td><button class="solde">Solde</button></td>';
                                ?>
                                <form method="get">
                                    <button><img src="edit.png" alt="" class="img1"></button>
                                    <button name="delete" type="submit" value="<?php echo $row['ID'] ?>"><img src="bin.png" alt="" class="img2"></button>
                                </form>
                            </tr>
                            <?php
                        }
                    }
                    else
                    {
                            $req = mysqli_query($cnx, "SELECT * FROM produits");
                        while ($row = mysqli_fetch_assoc($req)) {
                            ?>
                            <tr>
                                <?php $index++; ?>
                                <td><?php echo $row['ID']; ?></td>
                                <td><?php echo $row['Nom']; ?></td>
                                <td><?php echo $row['Prix']; ?>MAD</td>
                                <td><?php echo $row['Quantite']; ?></td>
                                <td><?php echo $row['Location']; ?></td>
                                <?php
                                if ($row['Quantite'] > 0) echo '<td><button class="actif">Actif</button></td>';
                                else echo '<td><button class="solde">Solde</button></td>';
                                ?>
                                <td class="opt">
                                    <form method="get">
                                    <button><img src="edit.png" alt="" class="img1"></button>
                                    <button name="delete" type="submit" value="<?php echo $row['ID'] ?>"><img src="bin.png" alt="" class="img2" ></button>
                                    </form>
                                </td>
                            </tr>
                            <?php
                        }
                    }

                    if (isset($_GET['delete'])){
                        $idP = $_GET['delete'];
                        $req = "DELETE FROM produits WHERE ID ='$idP'";
                        $result = mysqli_query($cnx, $req);
                        if ($result) {
                            header("Location: display.php");
                            exit();
                        }
                    }
                ?>
                </table>
            </div>
        </div>
    </body>
</html>