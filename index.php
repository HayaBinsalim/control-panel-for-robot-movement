<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robot Control Panel</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="control-panel">
        <form method="post" action="index.php">
            <button type="submit" name="direction" value="forward">Forward</button><br>
            <button type="submit" name="direction" value="left">Left</button>
            <button type="submit" name="direction" value="stop">Stop</button>
            <button type="submit" name="direction" value="right">Right</button><br>
            <button type="submit" name="direction" value="backward">Backward</button>
        </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $direction = $_POST["direction"];
        file_put_contents("commands.txt", $direction . PHP_EOL, FILE_APPEND);
        file_put_contents("last_command.txt", $direction);
        echo "Command $direction logged successfully";
    }
    ?>
</body>
</html>
