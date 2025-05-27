<?php
session_start();


$correct_username = 'admin';
$correct_password = '1234';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $correct_username && $password === $correct_password) {
        $_SESSION['username'] = $username;
        header('Location: welcome.php');
        exit();
    } else {
        $error = 'Identifiant ou mot de passe incorrect.';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <h2>Connexion</h2>
    <?php if ($error): ?>
        <p style="color:red;"><?= $error ?></p>
    <?php endif; ?>
    <form method="post">
        <label>Identifiant : <input type="text" name="username" required></label><br><br>
        <label>Mot de passe : <input type="password" name="password" required></label><br><br>
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>