<?php
    $connction = mysqli_connect('localhost','root','','cousrs');
    
    ?>
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="css.css">

</head>

<body>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer un compte</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <form method="POST" class="form-card" action="virifierinscription.php" id="registerForm">
        
        
        <h2>Créer un compte</h2>
        <p class="subtitle">Inscris-toi pour accéder aux cours</p>

        <div class="input-group">
            <i class="fa fa-user"></i>
            <input type="text" name="name" placeholder="Nom complet" required>
        </div>

        <div class="input-group">
            <i class="fa fa-envelope"></i>
            <input type="email" name="email" placeholder="Adresse email" required>
        </div>

        <div class="input-group">
            <i class="fa fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Mot de passe" required>
        </div>

        <div class="input-group">
            <i class="fa fa-lock"></i>
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirmer le mot de passe" required>
        </div>

        <button name="submit" type="submit">S'inscrire</button>

        <p class="login-link">
            Déjà inscrit ? <a href="login.php">Se connecter</a>
        </p>
    </form>
</div>


</body>
</html>

</body>
</html>
