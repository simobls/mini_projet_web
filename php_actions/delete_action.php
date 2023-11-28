<?php
    if (isset($_GET['delete'])){
        $idP = $_GET['delete'];
        $req = "DELETE FROM produits WHERE ID ='$idP'";
        $result = mysqli_query($cnx, $req);
        if ($result) {
            header("Location:display.php");
            exit();
        }
    }
?>