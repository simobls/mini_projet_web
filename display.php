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
                <button><a href="add.php"> + Ajouter un produit </a></button>
            </div>
            <div class="search">
                <form method="GET"> <!-- Ajout de la méthode GET -->
                    <input type="search" placeholder="Search" name="search"></input>
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
                        <button><img src="/assets/bin.png" alt="" class="img2"></button>
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
                                <img src="edit.png" alt="" class="img1">
                                <img src="bin.png" alt="" class="img2">
                            </td>
                        </tr>
                        <?php
                    }
                }
            ?>
            </table>
        </div>
    </div>
</body>
</html>