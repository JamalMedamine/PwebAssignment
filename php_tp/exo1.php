<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    number 1 :<input type="number" name="number1" placeholder="enter first number" > <br>
    number 2 :<input type="number" name="number2" placeholder="enter second number" > <br>
    <input type="radio" name="operation" value="add">Add
    <input type="radio" name="operation" value="subtract">Subtract
    <input type="radio" name="operation" value="multiply">Multiply
    <input type="radio" name="operation" value="devide">devide <br>
    <input type="submit" name="submit" value="submit">
    </form>
    <?php
    $result=$num1=$num2=$op="";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $num1 = $_POST['number1'];
            $num2 = $_POST['number2'];
            $op = $_POST['operation'];

        }
        switch($op){
            case 'add':
                $result = $num1 + $num2;
                echo "The result of addition is: " . $result;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                echo "The result of subtraction is: " . $result;
            case 'multiply':
                $result = $num1 * $num2;
                echo "The result of multiplication is: " . $result;
                break;
            case 'devide':
                $result = $num1 / $num2;
                echo "The result of division is: " . $result;
                break;
            }
                
    ?>
</body>
</html>