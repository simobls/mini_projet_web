<?php
    include "connexion.php";
    include "delete_action.php";
    include "update_action.php";

    function displayInventory($req){
        $index = 1;
        while ($row = mysqli_fetch_assoc($req)) {
                echo "<tr>
                        <td>" .$index++. "</td>
                        <td>" .$row['nom']. "</td>
                        <td>" .$row['prix']. " MAD</td>
                        <td>" .$row['quantite']. "</td>
                        <td>" .$row['location']. "</td>";
                    if ($row['quantite'] > 0){
                        echo '<td><button class="actif">Disponible</button></td>';
                    } else {
                        echo '<td><button class="solde">Solde</button></td>';
                    };
                    echo "<td class='opt'>
                            <form method='get'>
                                <a name='modify' id='update' class='update-btn'  data-target='update-form-$row[ID]'><img src='../assets/edit.png' class='img1'></a>
                                <button name='delete' type='submit' value='$row[ID]'><img src='../assets/bin.png' class='img2'></button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td colspan='100%'>
                            <form method='post' id='update-form-$row[ID]' class='update'>
                                <div class='in'>
                                    <div class='inin'>
                                        <div class='in3'>
                                            <label>Nom:</label>
                                            <input type='text' name='nom' value='$row[nom]'>
                                        </div>
                                        <div class='in3'>
                                            <label>Location:</label>
                                            <input type='text' name='location' value='$row[location]'>
                                        </div>
                                    </div>
                                    <div class='inin'>
                                        <div class='in3'>
                                            <label>Prix:</label>
                                            <input type='number' name='prix' value='$row[prix]' min='0.01' step='0.01'>
                                        </div>
                                        <div class='in3'>
                                            <label>Quantite:</label>
                                            <input type='number' name='quantite' value='$row[quantite]' min='0'>
                                        </div>
                                    </div>
                                </div>
                                <div class='but'>
                                    <button type='submit' value='Modifier' name = 'modifier' id='close' class='b1'>Modifier</button>
                                    <input type='hidden' name='id' value='$row[ID]'>
                                    <button id='close' class='b2'>Annuler</button>
                                </div>
                            </form>
                        </td>
                    </tr>";
        }
    }
    $req = mysqli_query($cnx, "SELECT * FROM produits");
    if(isset($_GET['triNom'])){
        $req=mysqli_query($cnx,"SELECT * FROM produits ORDER BY Nom ASC");
    }
    elseif(isset($_GET['triPr'])){
        $req=mysqli_query($cnx,"SELECT * FROM produits ORDER BY Prix ASC");
    }
    elseif(isset($_GET['triNomDes'])){
        $req=mysqli_query($cnx,"SELECT * FROM produits ORDER BY Nom DESC");
    }
    elseif(isset($_GET['triPrDes'])){
        $req=mysqli_query($cnx,"SELECT * FROM produits ORDER BY Prix DESC");
    }
    displayInventory($req);
?>