<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter une section</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 40px;
        }

        .container {
            width: 600px;
            margin: auto;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 15px;
            text-align: center;
            color: #333;
        }

        .course-form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .course-form input,
        .course-form textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .course-form textarea {
            resize: vertical;
            height: 100px;
        }

        .course-form button {
            padding: 12px;
            border: none;
            background-color: #3498db;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        .course-form button:hover {
            background-color: #2980b9;
        }
    </style>
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
