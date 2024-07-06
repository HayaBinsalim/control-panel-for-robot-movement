<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last Command</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="last-command">
        <h1>Last Command</h1>
        <p>
            <?php
            if (file_exists("last_command.txt")) {
                $lastCommand = file_get_contents("last_command.txt");
                echo htmlspecialchars($lastCommand);
            } else {
                echo "No commands found";
            }
            ?>
        </p>
    </div>
</body>
</html>
