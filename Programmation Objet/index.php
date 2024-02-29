<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activ'Actu</title>
    <link rel="stylesheet" media="all" type="text/css" href="index.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=EB+Garamond:ital@1&display=swap');
    </style>
</head>
<body>
    <header>
        <div class="banderolle">
            <p class="bouton">Contact</p>
            <p class="bouton">Les actualités</p>
            <p class="bouton">Accueil</p>
        </div>
    </header>
    <div class="logo">
        <div class="logo1">
            <h1>Activ'Actu</h1>
        </div>
        <div class="logo2">
            <img src="image/logo.png" alt="logo">
        </div>
    </div>
    <div>
    <?php
    $host = '127.0.0.1';
    $db = 'actualités';
    $user = 'root';
    $pass = '';
    $port = 3306;
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";

    try {
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $requete = "SELECT * FROM id_actualités ORDER BY date_publication DESC LIMIT 5"; 
        $resultat = $pdo->query($requete);

        while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
            echo "<div class=paragraphe style='color: #ffea98;'>";
            echo "<strong>Titre:</strong> {$ligne['titre']}<br>";
            echo "<strong>Corps:</strong> " . substr($ligne['corps'], 0, 100) . "... <br>";
            echo "<a href='article1.php?id={$ligne['id']}'>Lire la suite</a><br>";
            echo "<strong>Date de Publication:</strong> {$ligne['date_publication']}<br>";
            echo "<strong>Date de Révision:</strong> {$ligne['date_revision']}<br>";
            echo "<strong>Auteur:</strong> {$ligne['auteur']}<br>";
            echo "<strong>Tags:</strong> {$ligne['tags']}<br>";

            echo "<p><strong>Sources:</strong> {$ligne['sources']}</p>";
            echo "<img src='{$ligne['image_url']}' alt='Image associée'>";

            echo "</div>";
        }
    } catch (PDOException $e) {
        echo "Erreur de connexion à la base de données : " . $e->getMessage();
    }
    ?>
    </div>

    <footer>
        <div class="footer-droite">
            <p><a href="contact.php">Contact</a></p>
        </div>
        
        <div class="footer-gauche">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.96777912509!2d2.2646344984437397!3d48.858825492072896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!5e0!3m2!1sfr!2sfr!4v1709133114404!5m2!1sfr!2sfr" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </footer>
</body>
</html>
