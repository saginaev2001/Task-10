<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $database = new mysqli('localhost', 'root', '', 'task10.1');
    $table = "CREATE TABLE Makers (
        id INT(6), 
        title VARCHAR(50)
        )";
    if ($database->query($table) === TRUE) {
        echo "Table Makers created successfully";
    } else {
        echo "Error creating table: " . $database->error;
    }
    $update = "ALTER TABLE joib 
    CHANGE COLUMN maker maker VARCHAR(100)";
    if ($database->query($update) === TRUE) {
        echo "Table cars changed successfully";
    } else {
        echo "Error creating table: " . $database->error;
    }
    $database->close();
    ?>
</body>

</html>