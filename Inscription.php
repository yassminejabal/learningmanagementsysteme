<?php
    $connction = mysqli_connect('localhost','root','','cousrs');
    
    ?>
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

body {
    height: 100vh;
    background: linear-gradient(135deg, #667eea, #764ba2);
    display: flex;
    align-items: center;
    justify-content: center;
}

form {
    background: #fff;
    padding: 25px 30px;
    width: 350px;
    border-radius: 8px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

label {
    font-weight: bold;
    color: #555;
}

input {
    width: 100%;
    padding: 10px;
    margin-top: 6px;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 15px;
    font-size: 14px;
}

input:focus {
    outline: none;
    border-color: #667eea;
}

button {
    width: 100%;
    padding: 10px;
    background: #667eea;
    border: none;
    color: white;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background: #556cd6;
}

    </style>
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
    <form method="POST" class="form-card" id="registerForm">
        
        
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
<?php 
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email= $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    if (empty($name||$email||$password)) {
        echo "input et requirde";
    }
    $sql = " INSERT INTO users (name,email,password) VALUES('$name','$email','$password')";
    $f = mysqli_query($connction,$sql);
    echo $f;

}
?>

</body>
</html>

</body>
</html>
