<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <!-- Arrays -->

    <?php
        $friends = array("Kevin", "Karen", "Oscar", "Jim");
        echo $friends[0];
        echo "<br>";
        echo count($friends);
        echo "<br>";

        for($i = 0; $i < count($friends); $i++) {
            echo $friends[$i];
            echo "<br>";
        }
    ?>

</body> 
</html>