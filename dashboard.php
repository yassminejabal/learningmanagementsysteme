<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Mini LMS</title>
    <link rel="stylesheet" href="css.css">
</head>
<style>


</style>
<body>

<div class="dashboard">
    <h1>📊 Tableau de Bord - Mini LMS</h1>

    <!-- KPI Cards -->
    <div class="kpi-grid">
        <div class="kpi-card">
            <h3>Total Cours</h3>
            <?php

            $sql = "SELECT COUNT(title) as nembre FROM courses";
            $resultst = mysqli_query($connction,$sql);
            echo $resultst->fetch_assoc()["nembre"];
            ?>
        </div>
        <div class="kpi-card">
            <h3>Total Utilisateurs</h3>
            <?php 
            $sqll = "SELECT COUNT(name) as nembreUsers FROM users";
            $result = mysqli_query($connction,$sqll);
            echo $result->fetch_assoc()['nembreUsers'];
            
            ?>
        </div>
        <div class="kpi-card">
            <h3>Total Inscriptions</h3>
            <p>134</p>
        </div>
        <div class="kpi-card">
            <h3>Cours le + Populaire</h3>
            <p>PHP Avancé</p>
        </div>
        <div class="kpi-card">
            <h3>Moyenne Sections / Cours</h3>
            <p>6.4</p>
        </div>
    </div>

    <!-- Tables Section -->
    <div class="tables">

        <div class="table-box">
            <h2>📚 Cours avec +5 Sections</h2>
            <table>
                <tr>
                    <th>Cours</th>
                    <th>Sections</th>
                </tr>
                <tr>
                    <td>Laravel</td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>JavaScript</td>
                    <td>7</td>
                </tr>
            </table>
        </div>

        <div class="table-box">
            <h2>👥 Utilisateurs inscrits cette année</h2>
            <table>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Date</th>
                </tr>
                <tr>
                    <td>Ali</td>
                    <td>ali@email.com</td>
                    <td>2025-02-01</td>
                </tr>
            </table>
        </div>

        <div class="table-box">
            <h2>🚫 Cours sans inscription</h2>
            <table>
                <tr>
                    <th>Cours</th>
                </tr>
                <tr>
                    <td>Docker Basics</td>
                </tr>
            </table>
        </div>

    </div>
</div>

</body>
</html>





























