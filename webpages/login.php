<?php
    
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <?php
        include "../php_actions/login_action.php"
    ?>
    <section class="cont">
        <div class="formul" action="../php_actions/login_action.php">
            <p class="welcome">Bienvenue, Admin.</p>
            <img src="assets/3515462.jpg" alt="">
            <form method="post" autocomplete="off">
                <input type="text" name="user" required="required">
                <label class="text">Nom d'utilisateur</label><br>
                <input type="password" name="password" required="required">
                <label class="text2">Mot de passe</label>
                <button type="submit" name="submit"> LogIn </button>
            </form>
        </div>
        <div class="illu">
            <?php
                if(isset($erreur)) echo "<p class='erreur'>".$erreur."</p>";
            ?>
            <img src="../assets/3515462.jpg" alt="">
        </div>
    </section>
</body>
</html>