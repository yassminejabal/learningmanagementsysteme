<?php
    include "config.php";
    include "crud.php";

    session_start();
    $course_id = $_GET['id'];
    $user_id = $_SESSION['id'];
    echo '<br>';
    echo ($_GET['id']);
    echo ($_SESSION['id']);
    echo '<br>';
    echo "<br>";
    ajoutecoursdansenroulmnte($connction,$user_id,$course_id);


    
    // ajouteusercoures($connction,$course_id);
    // header("Location:users_cours.php");
?>