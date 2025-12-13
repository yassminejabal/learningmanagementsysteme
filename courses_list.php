<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $localhost = 'localhost';
    $pasword = '';
    $root = 'root';
    $db = 'cousrs';
    $connction = mysqli_connect($localhost, $root, $pasword, $db);
    if ($connction->connect_error) {
        echo 'non connecte';
    } else {
        echo 'connecte';
    }

    ?>
    <?php

        // print_r($_POST);

        if (isset($_POST['submit'])) {

            
        }

        $localhost = 'localhost';
        $pasword = '';
        $root = 'root';
        $db = 'cousrs';
    $connction = mysqli_connect($localhost,$root,$pasword,$db);
    if ($connction->connect_error) {
        echo 'non';
        
    }
    else {
        echo 'connecte';
    }
        ?>
        
        <?php
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
            $title = $_POST['title'];
            $description = $_POST['description'];
            
            if ($_POST['level']=='Débutant') {

               $_POST['level'] = 1;
            }
            if ($_POST['level']=='Intermédiaire') {
                $_POST['level'] = 2;
            }
            if ($_POST['level'] == 'Avancé') {
            $_POST['level'] = 3;
}
            $level = $_POST['level'];
            $sql = "INSERT INTO courses (title,description,level) VALUES('$title','$description','$level')";
             $connction->query($sql);
        }
        ?>



















    <?php
    $sqll = "SELECT  title, description, level, created_at FROM courses";
    $mohmed = mysqli_query($connction, $sqll);

    while ($raw = mysqli_fetch_assoc($mohmed)) {
        // echo "title: $raw[title]  description :$raw[description]  level: $raw[level]  created_at:$raw[created_at] <br>";
    ?>
    <div class="course-card">
        <h3><?= $raw['title'] ?>></h3>
        <p><?= $raw['description'] ?></p>

    </div>

</body>

</html>