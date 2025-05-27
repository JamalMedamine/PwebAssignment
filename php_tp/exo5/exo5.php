<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        name :<input type="text" name="name" >
        <textarea name="message" id="message" placeholder="message"></textarea>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $date = date('Y-m-d H:i:s');
            $name = $_POST['name'] ;
            $message = $_POST['message'] ;
            if(!empty($name) && !empty($message)){
                $file = fopen('messages.txt', 'a');
                fwrite($file, "[$date] $name: $message\n");
                fclose($file);
                echo "Message saved successfully.";
            } else {
                echo "Please fill in all required fields.";
            }
        }
    
    ?>
    <p><a href="messages.php"> all messages</a></p>
</body>
</html>