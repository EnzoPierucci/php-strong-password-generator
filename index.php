<?php
session_start(); // sessione php per passare da una pagina a l'altra 
require 'functions.php'; // collegamento a  functions

if (isset($_GET['length']) && is_numeric($_GET['length'])) {
    $password = generatePassword((int)$_GET['length']);
    $_SESSION['generated_password'] = $password; // salva la password in una sessione
    header('Location: show_password.php'); // reindirizza l'utente
    exit(); // uscità dalla pagina 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <title>php-strong-password-generator</title>
</head>

<body>
<form action="index.php" method="GET">
        <label for="length">Lunghezza Password:</label>
        <input type="number" id="length" name="length" required>  <!-- requied per renderlo obbligatorio --> 
        <input type="submit" value="Genera Password">
    </form>

    <?php if ($password): ?>
        <p>Password Generata: <strong><?= htmlspecialchars($password) ?></strong></p>
    <?php endif; ?>    
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</body>

</html>