<?php 
    include "header.php";
    ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Cours</title>
    <link rel="stylesheet" href="css.css">
</head>
<?php
    //validation de formulaire
    if (isset($_POST['submit'])) {
        if (empty($_POST['title'])) {
            echo "title is required";
            return;
        }
        if (empty($_POST['description'])) {
            echo "description is required";
            return;
        }
        if (empty($_POST['level'])) {
            echo "level is required";
            return;
        }
        //ajoute les information d'un course a databest
        $title = $_POST['title'];
        $description =$_POST['description'];
        $level = $_POST['level'];
        $sql = "INSERT INTO courses (title,description,level) VALUES('$title','$description','$level')";
        mysqli_query($connction,$sql);
    }
    


?>

<body>
    
    
    <div class="containe">
        <h1>Ajouter un Cours</h1>


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