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
            <img src="#" alt="logo">
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

                $requete = "SELECT * FROM id_actualités"; 
                $resultat = $pdo->query($requete);

                while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
                    echo "<div class= paragraphe>";
                    echo "<strong>Titre:</strong> {$ligne['titre']}<br>";
                    echo "<strong>Corps:</strong> {$ligne['corps']}<br>";
                    echo "<strong>Date de Publication:</strong> {$ligne['date_publication']}<br>";
                    echo "<strong>Date de Révision:</strong> {$ligne['date_revision']}<br>";
                    echo "<strong>Auteur:</strong> {$ligne['auteur']}<br>";
                    echo "<strong>Tags:</strong> {$ligne['tags']}<br>";
                    
                    
                    echo "<p><strong>Sources:</strong> {$ligne['sources']}</p>";
                    
                    echo "</div>";
                }
            } catch (PDOException $e) {
                echo "Erreur de connexion à la base de données : " . $e->getMessage();
            }
        ?>
    </div>
</body>
</html>
