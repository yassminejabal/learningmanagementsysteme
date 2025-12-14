<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>

.btn {
    padding: 8px 15px;
    border: none;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    cursor: pointer;
    text-decoration: none;
    display: inline-block;
    margin-right: 5px;
    transition: 0.3s;
}

.btn.delete {
    background-color: #e74c3c; 
}

.btn.delete:hover {
    background-color: #c0392b;
}


.btn.edit {
    background-color: #3498db;
}

.btn.edit:hover {
    background-color: #2980b9;
}


.course-card {
    background: #fafafa;
    border-left: 4px solid #3498db;
    padding: 15px;
    margin-bottom: 15px;
    border-radius: 5px;
    position: relative;
}


.course-card .btn {
    position: absolute;
    top: 15px;
    right: 15px;
}

.course-card .btn.delete {
    right: 15px;
}

.course-card .btn.edit {
    right: 80px;
}

    .courses {
        margin-top: 30px;
    }

    .course-card {
        background: #ffffff;
        border-left: 5px solid #3498db;
        padding: 15px 20px;
        margin-bottom: 15px;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .course-card h3 {
        margin-bottom: 8px;
        color: #333;
    }

    .course-card p {
        color: #555;
        margin-bottom: 10px;
    }

    .level {
        display: inline-block;
        padding: 5px 10px;
        border-radius: 4px;
        font-size: 13px;
        color: #fff;
        margin-right: 10px;
    }

    .beginner {
        background-color: #2ecc71;
    }

    .intermediate {
        background-color: #f1c40f;
        color: #000;
    }

    .advanced {
        background-color: #e74c3c;
    }

    .course-card small {
        display: block;
        margin-top: 8px;
        color: #888;
    }
</style>

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
    include "header.php";
    ?>

    <?php
    if (isset($_POST['submit'])) {
    }

    $localhost = 'localhost';
    $pasword = '';
    $root = 'root';
    $db = 'cousrs';
    $connction = mysqli_connect($localhost, $root, $pasword, $db);
    if ($connction->connect_error) {
        echo 'non';
    } else {
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

        if ($_POST['level'] == 'Débutant') {

            $_POST['level'] = 1;
        }
        if ($_POST['level'] == 'Intermédiaire') {
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

    <div class="courses">
        <?php
        $sqll = "SELECT  id,title, description, level, created_at FROM courses";
        $sqliu = mysqli_query($connction, $sqll);

        while ($raw = mysqli_fetch_assoc($sqliu)) {
            
        ?>
    <a href="courses_delete.php?id=<?php echo $raw['id']?>"  class="btn delete">delete</a>
    <a href="courses_edit.php?id=<?php echo $raw['id']?>" class="btn edit">Edit</a>
            <div class="course-card">
                <h3><?= $raw['title'] ?></h3>
                <p><?= $raw['description'] ?></p>
                <span class="level"><?= $raw['level'] ?>></span>
                <small><?= $raw['created_at'] ?></small>
            </div>
        <?php } ?>
    </div>
    <?php
    include "footer.php";
    ?>
</body>

</html>