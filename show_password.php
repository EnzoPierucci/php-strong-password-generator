<?php
session_start();

if (!isset($_SESSION['generated_password'])) {
    // reindirizza l'utente a index
    header('Location: index.php');
    exit();
}

$password = $_SESSION['generated_password'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <title>Password Generata</title>
</head>
<body>
    
    <p>Password Generata: <strong><?= htmlspecialchars($password) ?></strong></p>
    <a href="index.php">Genera un'altra password</a>
    
    
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

</body>
</html>
