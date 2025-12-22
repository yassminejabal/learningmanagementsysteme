<!DOCTYPE html>
<html lang="en">

 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
 </head>


<body>
    <?php
    include "config.php";
    include "header.php";
    session_start();
    $id_course = $_GET['id'];
    $_SESSION['id']=$_GET['id'];
    ?>

    
    <div class="courses">
        <?php
        //select les cours a databese de cours 
        $sqll = "SELECT  id,title, description, level, created_at FROM courses";
        $sqliu = mysqli_query($connction, $sqll);

        while ($raw = mysqli_fetch_assoc($sqliu)) {
        ?>
    <a href="sections_create.php?id=<?php echo $raw['id']?>" class="btn edit">new section</a>
    <a href="courses_delete.php?id=<?php echo $raw['id']?>"  class="btn delete">delete</a>
    <a href="courses_edit.php?id=<?php echo $raw['id']?>" class="btn edit">Edit</a>
    <a href="enrolmnt.php?id=<?php echo $raw['id']?>?id_course=<?php echo $id_course?>" class="btn edit">add moi un cous</a>
            <div class="course-card">
                <h3><?= $raw['title'] ?></h3>
                <p><?= $raw['description'] ?></p>
                <span class="level"><?= $raw['level'] ?></span>
                <small><?= $raw['created_at'] ?></small>
            </div>
        <?php } ?>
    </div>
    <?php
    include "footer.php";
    ?>
</body>

</html>

input file