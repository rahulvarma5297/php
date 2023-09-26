<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Check Box -->

    <form action="checkbox.php" method="post">
        <input type="checkbox" name="fruits[]" value="apples"> Apples <br>
        <input type="checkbox" name="fruits[]" value="oranges"> Oranges <br>
        <input type="checkbox" name="fruits[]" value="pears"> Pears <br>
        <input type="submit" value="Submit">
    </form>

    <?php
        $fruits = $_POST["fruits"];
        echo $fruits[0];

        for($i = 0; $i < count($fruits); $i++) {
            echo "<br>";
            echo $fruits[$i];
        }
    ?>

</body>
</html>