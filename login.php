<?php 
include "config.php";


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    * {
    box-sizing: border-box;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

body {
    background-color: #f4f6f8;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.auth-container {
    width: 100%;
    max-width: 400px;
}

.auth-box {
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.icon {
    font-size: 50px;
    margin-bottom: 15px;
}

.auth-box h2 {
    margin-bottom: 20px;
    color: #333;
}

.auth-box input {
    width: 100%;
    padding: 12px;
    margin: 8px 0;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.auth-box button {
    width: 100%;
    padding: 12px;
    margin-top: 15px;
    background-color: #007BFF;
    border: none;
    color: white;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
}

.auth-box button:hover {
    background-color: #0056b3;
}

.auth-box p {
    margin-top: 15px;
    font-size: 14px;
}

.auth-box a {
    color: #007BFF;
    text-decoration: none;
}

.auth-box a:hover {
    text-decoration: underline;
}

</style>
<body>

<div class="auth-container">
    <div class="auth-box">
        <div class="icon">👤</div>
        <h2>Se connecter</h2>

        <form method="POST">

            <?php 
        
            //     if (empty($email)){
            //         echo "email is requirde";
            //     }

            // if (empty($password)){
            //         echo "password is requirde";
    
            // }
            ?>

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

if ($_SERVER['REQUEST_METHOD'] === "POST") {

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
            header('Location:dashboard.php');
            
        } else {
            echo " Password ghalat";
        }
    } else {
        echo " Email makaynch";
    }
}
?>

 







