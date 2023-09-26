<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <!-- If Loops -->

    <?php
        $age = 51;

        if($age <= 12){
            echo "You are a child";
        }
        elseif($age > 12 && $age < 20){
            echo "You are a teenager";
        }
        else{
            echo "You are an adult";
        }
    ?>


    <!-- Switch -->

    <?php
        $grade = "A";

        switch($grade){
            case "A":
                echo "You did amazing!";
                break;
            case "B":
                echo "You did pretty good!";
                break;
            case "C":
                echo "You did poorly";
                break;
            case "D":
                echo "You did very bad";
                break;
            case "F":
                echo "YOU FAIL!";
                break;
            default:
                echo "Invalid Grade";
        }
    ?>

    <!-- While Loop -->

    <?php
        // While
        $index = 1;

        while($index <= 5){
            echo "$index <br>";
            $index++;
        }   

        // Do While Loop
        $index = 6;

        do{
            echo "$index <br>";
            $index++;
        } while($index <= 5);
    ?>

    <!-- For Loop -->

    <?php
        for($i = 1; $i <= 5; $i++){
            echo "$i <br>";
        }
    ?>

</body>
</html>