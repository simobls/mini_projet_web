<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/display.css">
    <link rel="stylesheet" href="../css/update.css">
    <title>Document</title>
    <script src= 
        "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> 
    </script>
</head>
<body>
    <div class="cont">
        <div class="nav">
            <div class="ajout2">
                <button id="add"><a href="add.php"> + Ajouter un produit </a></button>
            </div>
            <div class="search">
                <form method="get">
                    <input id="gfg" type="search" placeholder="Recherche"></input>
                </form>
                <button type="submit"><img src="../assets/empty-filter-32.png" alt=""></button>
            </div>
        </div>
        <div class="display">
            <table frame=void rules=rows>
                    <tr>
                        <th>ID<button></button></th>
                        <th>Nom<button></button></th>
                        <th>Prix<button></button></th>
                        <th>Quantite</th>
                        <th>Location</th>
                        <th>Statut</th>
                        <th>Action</th>
                    </tr>
                <tbody id='geeks'>
                <?php
                    include "../php_actions/display_action.php";
                ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<script src="../Js/search.js"></script>
<script src="../Js/update_modal.js"></script>
</html>