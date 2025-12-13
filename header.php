<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    /* Header */
.header {
    background-color: #3498db;
    padding: 15px 0;
    color: white;
    font-family: Arial, sans-serif;
}

.header .container {
    width: 90%;
    max-width: 1200px;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.header .logo h1 {
    margin: 0;
    font-size: 24px;
}

.header .nav ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

.header .nav ul li a {
    text-decoration: none;
    color: white;
    font-size: 16px;
    transition: 0.3s;
}

.header .nav ul li a:hover {
    color: #f1c40f;
}

</style>
<body>
    
<header class="header">
    <div class="container">
        <div class="logo">
            <h1>MonSite</h1>
        </div>
        <nav class="nav">
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="courses_list.php">Cours</a></li>
                <li><a href="courses_create.php">Ajouter Cours</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
</body>
</html>


