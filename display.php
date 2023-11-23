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
                        <td>Phone</td>
                        <td>1200MAD</td>
                        <td>12</td>
                        <td>Depot 3</td>
                        <td><button>Dispo</button></td>
                        <td class="opt">
                            <button><img src="/assets/edit.png" alt="" class="img1"></button>
                            <button><img src="/assets/bin.png" alt="" class="img2"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>jacket</td>
                        <td>1200MAD</td>
                        <td>12</td>
                        <td>Depot 3</td>
                        <td><button>Disponible</button></td>
                        <td class="opt">
                            <button><img src="/assets/edit.png" alt="" class="img1"></button>
                            <button><img src="/assets/bin.png" alt="" class="img2"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Phone</td>
                        <td>1200MAD</td>
                        <td>12</td>
                        <td>Depot 3</td>
                        <td><button>Vendu</button></td>
                        <td class="opt">
                            <button><img src="/assets/edit.png" alt="" class="img1"></button>
                            <button><img src="/assets/bin.png" alt="" class="img2"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Phone</td>
                        <td>1200MAD</td>
                        <td>12</td>
                        <td>Depot 3</td>
                        <td><button>Actif</button></td>
                        <td class="opt">
                            <button><img src="/assets/edit.png" alt="" class="img1"></button>
                            <button><img src="/assets/bin.png" alt="" class="img2" name="delete"></button>
                        </td>
                    </tr>
                    <hr>

                <?php
                include "connexion.php";
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
                                    <button><img src="/assets/edit.png" alt="" class="img1"></button>
                                    <button><img src="/assets/bin.png" alt="" class="img2"></button>
                                </td>
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
                                    <form action="get">
                                    <button><img src="edit.png" alt="" class="img1"></button>
                                    <button><img src="bin.png" alt="" class="img2" name="delete"></button>
                                    </form>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    if (isset($_GET['delete'])){
                        $idToDelete = $_GET['delete'];
                        $req = "DELETE * FROM produits WHERE ID = '$idToDelete'";
                        $result = mysqli_query($cnx, $req);
                        if ($result) {
                            
                        } else {
                            
                        }
                    }
                ?>
                <div class="ajout">
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
                <input type="number" name="quant" placeholder="Quantite"><br>
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
                </table>
            </div>
        </div>
    </body>
</html>