# control-panel-for-robot-movement
# Description
In this project, a web page of a control panel for robot movement will be created. The Movements are stored in a database. 

## Software Requirements 
- xampp
- MySQL
- phpMyAdmin
- VS Code

## Steps 
### 1. Creating the Control Panel page 
The control panel web interface for this project will be created as a php page. The page will show the commands/directions of the robot. These are the ones for the user to control the robot's movement from. To build this, a ne Text Document is added in the project folder. In this case, the Text Document is renamed to ```index.php```. Ensure the extension of the file is cahnged from ```.txt``` to ```.php```. Edite the file in notepad and add the code below. 
#### The PHP script to submit commands and log them into the database:
```
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

```
This will create a page with the control panel. It can be edited as desired. 

#### The CSS file for basic styling.
```
body {
    background-color: #add8e6;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    font-family: Arial, sans-serif;
}

.control-panel, .command-history, .last-command {
    background-color: #ffc0cb;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

button {
    display: inline-block;
    margin: 10px;
    padding: 15px;
    font-size: 20px;
    cursor: pointer;
    background-color: #fff;
    border: 2px solid #000;
    border-radius: 5px;
}
```

### 2. Setting Up the Database 
In phpMyAdmin, a new database ```robot_control``` is created, then a new table ```commands``` for the commands is added. 
The PHP script below is to creat the database connection. It is added in a file in ```C:\xampp\htdocs```, name it **db.php**. 

```
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot_control";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
```

## Results
### Result of Control Panel Webpage

<img width="658" alt="image" src="https://github.com/HayaBinsalim/control-panel-for-robot-movement/assets/173661622/0500a3c1-8074-412b-8c73-a2f0e5e67f83">



