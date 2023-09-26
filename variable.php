<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <?php
        // Variables
        $name = "Rahul";
        $age = 20;
        echo "<h1>My Name is $name </h1> <br>";
        echo "<h1>My Age is $age </h1>";
    ?>

    <?php
        // Data Types
        $phrase = "To be or not to be";
        $age = 20;
        $gpa = 9.28;
        $isMale = true;
    ?>

    <?php
        // strings
        $phrase = "Rahul Varma";
        echo strtolower($phrase); // lowercase
        echo strtoupper($phrase); // uppercase
        echo strlen($phrase); // length
        $phrase[0] = "B"; // change character
        echo $phrase[0]; // index
    ?>

    <h2>
    <?php
        $phrase = "Rahul Varma";
        echo str_replace("Rahul", "Rishik", $phrase); // replace
        echo substr($phrase, 2, 3); // substring
    ?>
    </h2>

    <h2>
        <?php
            // Working with Numbers
            echo min(2, 10);
        ?>
    </h2>
</body>
</html>