# displaying-commands
# Description
The commands/directions of the robot chosen by the user are shown in a web page. Another page will show the last direction alone. 

## Page to Display all commands chosen 
This page will show the commands by the user in order. Create a ```.php``` file and name it ```commands.php```, add the following commands to it. 

```
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
```
## Page to display the LAST command 
Create a ```.php``` file and name it ```last_command.php``` and add the following commands to it. 

```
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
```
## Results 
The image below is of the control oanle. As you can see, it shows that the comman **stop** was logged successfuly, which in this case is the last command. 

![Screenshot 2024-07-06 150651](https://github.com/HayaBinsalim/control-panel-for-robot-movement/assets/173661622/d3447682-ba28-4a84-9909-eafbce9135b8)


The image below is of the Command History. You can see that the last command in the list is **stop**. 

![Screenshot 2024-07-06 153728](https://github.com/HayaBinsalim/control-panel-for-robot-movement/assets/173661622/3cd11a3d-302f-47c5-98cd-4d0217c06230)


The image below is of the page that shows the last command alone. It is, obviously, the **stop**. 

<img width="712" alt="image" src="https://github.com/HayaBinsalim/control-panel-for-robot-movement/assets/173661622/bb1cfd53-61f3-46dc-b4ad-47a4080ed1bd">

