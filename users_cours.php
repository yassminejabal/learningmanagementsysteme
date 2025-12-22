<?php
include "config.php";
include "crud.php";
session_start();
echo"<br>";
// var_dump($_SESSION['id']);

// $course = [];
// for($i=0;$i<count(katjib_datacours($connction,$_SESSION['id']));$i++){
//     array_push($course,$i);
//     return $course;
// }

// var_dump($course);
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des utilisateurs</title>
    <link rel="stylesheet" href="users.css">
</head>
<body>

<h1>Liste des utilisateurs</h1>

<table class="users-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>`
            <th>Rôle</th>
        </tr>
    </thead>
    <tbody>

<?php
$ARF = katjib_datacours($connction,$_SESSION['id']);
$id_coures = njibarayu($ARF);
foreach($id_coures as $idd){
$sql = "SELECT * FROM courses WHERE id = $idd";
    $reulet = mysqli_query($connction,$sql);
    while($row = mysqli_fetch_assoc($reulet)){
        ?>
                <tr>
                <td><?= $row['title'] ?></td>
                <td><?= $row['description'] ?></td>
                <td><?= $row['level'] ?></td>
                <td><?= $row['created_at'] ?></td>
                </tr>
    <?php
    }
} 
?>
</table>

</body>
</html>

