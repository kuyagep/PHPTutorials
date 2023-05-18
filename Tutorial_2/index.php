<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 2</title>
</head>

<body>
    <!-- This is Conditional Statement -->

    <?php

        //if statement
        $y = 5;
        $x = 10;

        //Comparison operator
        // == 
        // ===
        //\ !=
        // <>
        // >
        // <
        // >=
        // <=
        // <=>

//  if statement
        if ($x != $y) {
            echo "True";  //for true condition
        }else{
            echo "False";   //for false condition
        }

//if else statement
        if ($y == $x) {
            echo "True";
        } elseif ($x > $y) {
            echo "True";
        } else {
            echo "False";
        }

// switch statement 
        echo "<br>";

        $favColor = 3;
        
        switch ($favColor){
            case 1: 
                echo "Your favorite color is red!";
                break;
            case 2:
                echo "Your favorite color is blue!";
                break;
            case 3:
                echo "Your favorite color is green!";
                break;
            default:
                echo "Your favorite color is neither red, blue, nor green!";
            echo "<br>";
        }
    echo "<br>";
    // loops
    $a = 11;

    while ($a <= 5) {
       echo "Hello World!";
       $a++;
       echo "<br>";
    }

    do {
            echo "Hello World!";
            echo "<br>";
            $a++;
    } while ($a <= 10);



    for ($a = 1; $a < 10; $a++) { 
            echo $a;
            echo "<br>";
    }
    $variable = array( ["one" => 1, "two" => 2, "three" => 3]);

    foreach ($variable as $key => $value) {
        echo $value["one"];
    }

        
    ?>



</body>

</html>