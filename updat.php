<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
        <input type="text" name="ID">
        <input type="text" name="Nom" ><br>
        <input type="text" name="prix" ><br>
        <input type="text" name="Quantite" ><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    $id=$_POST['ID'];
    $nom=$_POST['Nom'];
    $prix=$_POST['prix'];
    $quant=$_POST['Quantite'];

    include "connexion.php";

    if(isset($_POST['Submit'])){

        $req="update Produits set Nom=$nom and prix=$prix and Quantite=$quan where ID=$id";
        $res=mysqli_query($cnx,$req);
        if($res==false){
            die("requete impossible d'executer");
        }
        echo "requete reussite ";
        
        if($res->num_rows>0){
            echo "<table border='1'>
            <tr>
            <th>Nom</th>
            <th>Prix</th>
            <th>Quantite</th>
            </tr>";
    
            while ($row = $res->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["Nom"] . "</td>";
                echo "<td>" . $row["Quantite"] . "</td>";
                echo "<td>" . $row["Prix"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }else echo "0 resultat";
    
    
        }
        ?>
        </body>
        </html>