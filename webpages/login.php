<?php
    
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <?php
        include "../php_actions/login_action.php";
        if(isset($_GET["annul"])){
            header("location:login.php");
        }
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
                if(isset($erreur)){
                    echo "<div class='erreur'>
                            <p> $erreur </p>
                            <form method='get'>
                                <button name='annul'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='10' viewBox='0 0 20 20' height='10'>
                                        <path fill='#393a37' d='m15.8333 5.34166-1.175-1.175-4.6583 4.65834-4.65833-4.65834-1.175 1.175 4.65833 4.65834-4.65833 4.6583 1.175 1.175 4.65833-4.6583 4.6583 4.6583 1.175-1.175-4.6583-4.6583z'></path>
                                    </svg>
                                </button>
                            </form>
                        </div>";
                }
            ?>
            <img src="../assets/3515462.jpg" alt="">
        </div>
    </section>
</body>
</html>