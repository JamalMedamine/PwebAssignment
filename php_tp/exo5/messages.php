<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $file = fopen("messages.txt","r");
    while(!feof($file)){
        $line = fgets($file);
        if(!empty(trim($line))) {
            echo htmlspecialchars($line) . "<br>";
        }
    } 
    ?>
</body>
</html>