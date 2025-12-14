<?php 
 include "config.php";

if (!isset($_GET['id'])) {
    echo "il n y'a pas de id";
    exit;
}
else {
    echo "il y'a id";
}
    $id = $_GET['id'];
    $sql = "DELETE FROM courses where id = $id";
    if(mysqli_query($connction, $sql)){
   header("Location: courses_List.php");
    exit;
}
?>