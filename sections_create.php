<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter une section</title>

    <link rel="stylesheet" href="css.css">

</head>

<body>

<div class="container">
    <h2>Ajouter une nouvelle section</h2>

    <form method="POST" class="course-form">
        <label>Titre de la section</label>
        <input type="text" name="title" required>
        <label>Contenu de la section</label>
        <textarea  name="content"></textarea>
        <label>Position de la section</label>
        <input type="number" name="position" required>
        <button name="submit" type="submit">Enregistrer</button>
    </form>
</div>
<?php include "config.php";
      include "header.php";
      if(!isset($_GET['id']) && empty($_GET['id'])){
        echo "aucuane id trouve dans url";
      }
      $course_id = $_GET['id'];

      if ($_POST['submit']) {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $position = $_POST['position'];
        $created_at = $_POST['created_at'];
        $sql = "INSERT INTO sections(course_id, title, content, position, created_at) VALUES ('$course_id','$title','$content','$position','$created_at')";
        mysqli_query($connction,$sql);
      }
  ?>
</body>
</html>
