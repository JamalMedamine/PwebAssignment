<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $questions = [
        "What is the capital of France?" => ["Paris",['Marseille', 'Lyon', 'Nice']],
        "What is 2 + 2?" => ["4", ['3', '5', '6']],
        "What is the largest planet in our solar system?" => ["Jupiter", ['Earth', 'Mars', 'Saturn']],
        "What is the chemical symbol for water?" => ["H2O", ['CO2', 'O2', 'N2']],
        "What is the smallest prime number?" => ["2", ['1', '3', '5']],
    ];
    ?>
    <form method="post" action="">
        <?php foreach ($questions as $question => $answers): ?>
            <fieldset>
                <legend><?= htmlspecialchars($question) ?></legend>
                <label>
                    <input type="radio" name="<?= htmlspecialchars($question) ?>" value="<?= htmlspecialchars($answers[0]) ?>" required>
                    <?= htmlspecialchars($answers[0]) ?>
                </label><br>
                <?php foreach ($answers[1] as $answer): ?>
                    <label>
                        <input type="radio" name="<?= htmlspecialchars($question) ?>" value="<?= htmlspecialchars($answer) ?>" required>
                        <?= htmlspecialchars($answer) ?>
                    </label><br>
                <?php endforeach; ?>
            </fieldset>
        <?php endforeach; ?>
        <input type="submit" name="submit" value="Submit">
    </form> 
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST') {
        $score = 0;
        
        foreach ($questions as $question => $answers) {
            if (isset($_POST[$question]) && $_POST[$question] === $answers[0]) {
                $score++;
            }
        }
        echo "<h2>Your score: $score out of " . count($questions) . "</h2>";
    }
    ?>
    
</body>
</html>