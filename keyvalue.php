<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>
    <!-- Associative Arrays -->

    <?php
        $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
        echo $grades["Jim"];
        echo "<br>";
        echo $grades["Pam"];
        echo "<br>";
        echo $grades["Oscar"];
        echo "<br>";
        $grades["Jim"] = "F";
        echo $grades["Jim"];
        echo "<br>";
        echo count($grades);
    ?>
</body>
</html>