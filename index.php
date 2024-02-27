<?php
// Funzione per generare la password
function generatePassword($length = 8) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&()_+-=[]{}?';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $password;
}

$password = '';
if (isset($_GET['length']) && is_numeric($_GET['length'])) {
    $password = generatePassword((int)$_GET['length']);
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
        <input type="number" id="length" name="length" required> <!-- requied per renderlo obbligatorio --> 
        <input type="submit" value="Genera Password">
    </form>

    <?php if ($password): ?>
        <p>Password Generata: <strong><?= htmlspecialchars($password) ?></strong></p>
    <?php endif; ?>    
    
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</body>

</html>