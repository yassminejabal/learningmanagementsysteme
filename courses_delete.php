<?php include "config.php"?>
<?php 
if (!isset($_POST['id'])) {
    echo "il n y'a pas de id";
}
else {
    echo "il y'a id";
}
    $id = $_POST['id'];
    $sql = "DELTE FROM courses where id = $id";
    if(mysqli_query($connction, $sql)){
    header("location : courses_List.php");
    }
    else {
        
    }
?>