<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login PHP</title>

</head>

<body>
    <?php
    if (array_key_exists('button1', $_POST)) {
        button1();
    }

    function button1()
    {
        echo "deze knop";
    }
    ?>
    <div class="container">
        <form action="registratie.php" method="post">
            <div class="form-group">
                <input type="text" name="fullname" placeholder="Full name">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="email">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="password">
            </div>
            <div class="form-group">
                <input type="text" name="fullname" placeholder="Full name">
            </div>
            <div class="form-group">
                <input type="text" name="fullname" placeholder="submit">
            </div>
            <input type="submit" name="button1" class="button" value="Button1">
        </form>
    </div>
</body>

</html>