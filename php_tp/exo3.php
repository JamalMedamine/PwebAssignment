<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    neme : <input type="text" name="name" > <br>
    email : <input type="email" name="email"> <br>
    message : <input type="text" name="message" > <br>   
    <input type="submit" name="submit" value="submit">
    </form>
    <?php
    $name = $email = $message = "";
    if($_SERVER['REQUEST_METHOD']=='POST'){
            $name = $_POST['name'];
            $email =$_POST['email'];
            $message = $_POST['message'];
        if(!empty($name)&& !empty($email)){
            echo "Name: " . $name . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Message: " . $message . "<br>";
        }else{
            echo "Please fill in all required fields.";
        }
    }
    ?>
</body>
</html>