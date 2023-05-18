<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 3</title>
</head>

<body>

    <!-- Super Globals in PHP -->
    <?php 

        // $GLOBALS

        $x = 100;
        $y = 25;

        function addition(){
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }

        addition();
        echo $z;

    echo "<br>";
    // $_SERVER
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    // echo $_SERVER['HTTP_REFERER'];
    // echo "<br>";
    // echo $_SERVER['HTTP_USER_AGENT'];
    // echo "<br>";
    // echo $_SERVER['SCRIPT_NAME'];
        
        // $_REQUEST
        
        // $_POST
        
        // $_GET
        
        // $_FILES
        // $_ENV
        // $_COOKIE
        // $_SESSION

        

    ?>

</body>

</html>