<?php
include "config.php";
$id = "";
$title = "";
$description = "";
$level = "";
$created_at = "";
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT title,description, level, created_at FROM courses WHERE id=$id";
    $resultet = mysqli_query($connction, $sql);
    if (mysqli_num_rows($resultet) == 1) {
        $raw = mysqli_fetch_assoc($resultet);
        $title = $raw['title'];
        $description = $raw['description'];
        $level = $raw['level'];
        $created_at = $raw['created_at'];
    } else {
        echo 'il ya plusieur id';
    }  
}
if ($_SERVER['REQUEST_METHOD'] === "POST"){
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $level = trim($_POST['level']);
    $created_at = trim($_POST['created_at']);
    if (empty($title) || empty($description) || empty($level)) {
        echo "requirde";
    } else {
        $updete = "UPDATE courses SET title = '$title',
        description = '$description',level = '$level',created_at = '$created_at' WHERE id = $id";

    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Cours</title>
    <link rel="stylesheet" href="css.css">
</head>


<body>
    <?php 
    include "header.php";
    ?>
    
    <div class="container">
        <h1>modifier un</h1>


        <form class="course-form" method="POST" action="courses_list.php">
            <label for="title">Titre du cours</label>
            <input type="text" name="title" id="title" placeholder="Ex: Introduction à Python">

            <label for="description">Description</label>
            <textarea id="description" name="description" placeholder="Décrivez le cours..."></textarea>

            <label for="level">Niveau</label>
            <select id="level" name="level">
                <option>Débutant</option>
                <option>Intermédiaire</option>
                <option>Avancé</option>
            </select>

            <button type="submit" name="submit">Enregistrer</button>
        </form>
        <h2>Cours enregistrés</h2>
        <div class="course-list">
            <div class="course-card">
                <h3>Exemple de cours</h3>
                <p>Description du cours ici...</p>
                <span class="level beginner">Débutant</span>
            </div>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>
</body>

</html>