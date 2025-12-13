


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Cours</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    /* Reset simple */
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

    h1,
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
    .course-form textarea,
    .course-form select {
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
    }

    .course-form button:hover {
        background-color: #2980b9;
    }

    /* Carte de cours */
    .course-list {
        margin-top: 20px;
    }

    .course-card {
        background: #fafafa;
        border-left: 4px solid #3498db;
        padding: 15px;
        margin-bottom: 15px;
        border-radius: 5px;
    }

    .course-card h3 {
        margin-bottom: 8px;
    }

    .course-card p {
        color: #555;
        margin-bottom: 10px;
    }

    .level {
        padding: 5px 10px;
        border-radius: 3px;
        color: white;
        font-size: 13px;
    }

    .beginner {
        background-color: #27ae60;
    }

    .intermediate {
        background-color: #f1c40f;
    }

    .advanced {
        background-color: #e74c3c;
    }
</style>

<body>

    <div class="container">
        <h1>Ajouter un Cours</h1>
        
        
        <form class="course-form" method="POST" action="courses_list.php">
            <label for="title">Titre du cours</label>
            <input type="text" name="title" id="title" placeholder="Ex: Introduction à Python">

            <label for="description">Description</label>
            <textarea id="description" name="description" placeholder="Décrivez le cours..."></textarea>

            <label for="level">Niveau</label>
            <select id="level" name="level">
                <option>Débutant</option>
                <option>Intermédiaire</option>
                <option>Avancé</option>
            </select>

            <button type="submit" name="submit">Enregistrer</button>
        </form>



        <h2>Cours enregistrés</h2>
        <div class="course-list">
            <div class="course-card">
                <h3>Exemple de cours</h3>
                <p>Description du cours ici...</p>
                <span class="level beginner">Débutant</span>
            </div>
        </div>
    </div>

</body>

</html>