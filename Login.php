<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <section class="cont">
        <div class="formul">
            <p class="welcome">Bienvenue, Admin.</p>
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
    <?php
        if(isset($_POST["submit"])){
            $user = $_POST["user"];
            $pwd = $_POST["pwd"];
            $file = fopen("data.txt", "a+");
            fwrite($file, $user . "/" . $pwd);
        }
    ?>
</body>
</html>