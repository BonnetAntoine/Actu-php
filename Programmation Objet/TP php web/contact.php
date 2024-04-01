<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    
    $nom = $email = $message = "";
    
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données du formulaire
        $nom = test_input($_POST["nom"]);
        $email = test_input($_POST["email"]);
        $message = test_input($_POST["message"]);
        
        
    }
    
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<h2>Formulaire de Contact</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" required>
    <br><br>
    
    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required>
    <br><br>
    
    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="4" required></textarea>
    <br><br>
    
    <input type="submit" name="submit" value="Envoyer">
</form>

<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $contact = new Contact($results);
        echo "<h2>Récapitulatif des informations:</h2>";
        echo "Nom: " . $contact->nom . "<br>";
        echo "E-mail: " . $contact->email . "<br>";
        echo "Message: " . $contact->message;
    }
?>

</body>
</html>
