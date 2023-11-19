<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <?php
        if(isset($_POST["submit"])){
            $emailU=$_POST['email'];
            $passU=$_POST['password'];
            $erreur="";
    
            $cnx=mysqli_connect('localhost','root','123');
            $db_select=mysqli_select_db($cnx,'GESTION_STOCK');
            
            $req="SELECT * FROM Utilisateurs where email='$emailU' and password='$passU'";
            $res=mysqli_query($cnx,$req);
            if(mysqli_num_rows($res)>0){
                header("Location:bienvenue.php");
            }
            else $erreur="Email ou mot de passe incorrect";
        }
    ?>
    <section class="cont">
        <div class="formul">
            <p class="welcome">Bienvenue, Admin.</p>
            <img src="assets/3515462.jpg" alt="">
            <?php
                if(isset($erreur)){
                    echo "<p class='erreur'>".$erreur."</p>";
                }
            ?>
            <form method="post">
                <input type="text" name="user" required="required">
                <label class="text">Nom d'utilisateur</label><br>
                <input type="password" name="pwd" required="required">
                <label class="text2">Mot de passe</label>
                <button type="submit" name="submit"> LogIn </button>
            </form>
        </div>
        <div class="illu">
            <img src="assets/3515462.jpg" alt="">
        </div>
    </section>
</body>
</html>