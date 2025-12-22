<?php 
include "config.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css.css">
</head>
<style>
   

</style>
<body>

<div class="auth-container">
    <div class="auth-box">
        <div class="icon">👤</div>
        <h2>Se connecter</h2>

        <form method="POST">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Mot de passe">
            <button type="submit">Login</button>
        </form>

        <p>Pas de compte ? <a href="Inscription.php">S'inscrire</a></p>
    </div>
</div>


</body>
</html>

<?php 

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT password FROM users WHERE email = ?";
    $stmt = mysqli_prepare($connction, $sql);
    
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        if ($password==$row['password']) {
            echo "Login perfict ";
            session_start();
            
            $_SESSION['email'] = $email;
            $_SESSION['password']=$password;
            header('Location:courses_list.php');
            
        } else {
            echo " Password ghalat";
        }
    } else {
        echo " Email makaynch";
    }
}
?>

 







