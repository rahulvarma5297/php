<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="form.php" method="get">
        <input type="text" name="name">
        <input type="submit" value="Submit">
    </form>

    <?php
        echo $_GET["name"];
    ?>

    <!-- Calculator -->

    <form action="form.php" method="get">
        <input type="number" name="num1">
        <input type="number" name="num2">
        <input type="submit" value="Submit">
    </form>

    <?php
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        echo $num1 + $num2;
    ?>

    <!-- Password -->
    <form action="form.php" method="post">
        Password: <input type="password" name="password">
        <input type="submit" value="Submit">
    </form>

    <?php
        echo $_POST["password"];
    ?>

</body>
</html>