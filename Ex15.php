<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Session</title>
</head>
<body>
    <?php
        session_start();

        $_SESSION["username"] = "lyhong";
        $_SESSION["email"] = "lyhong@gmail.com";

        echo $_SESSION["username"];
        echo "<br>";
        echo $_SESSION["email"];
    ?>
</body>
</html>