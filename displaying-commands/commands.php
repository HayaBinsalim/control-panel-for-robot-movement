<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Command History</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="command-history">
        <h1>Command History</h1>
        <ul>
            <?php
            if (file_exists("commands.txt")) {
                $commands = file("commands.txt", FILE_IGNORE_NEW_LINES);
                foreach ($commands as $command) {
                    echo "<li>" . htmlspecialchars($command) . "</li>";
                }
            } else {
                echo "No commands found";
            }
            ?>
        </ul>
    </div>
</body>
</html>
