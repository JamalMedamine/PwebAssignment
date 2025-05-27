<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    number 1 :<input type="number" name="number" placeholder="enter first number" > <br>
    <input type="submit" name="submit" value="submit">
</form>

<?php
$num1=$password="";
function randomChar() {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[]{};:,.<>?';
    return $chars[random_int(0, strlen($chars) - 1)];
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    $num1 = $_POST['number'];
    for($i=0;$i<$num1;$i++){
        $password .= randomChar();
    }
    echo "The generated password is: " . $password;
}
?>
</body>
</html>