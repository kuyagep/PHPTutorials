<html>

<body>

    <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="fname">
        Email: <input type="text" name="email">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // collect value of input field
        $name = $_REQUEST['fname'];
        $email = $_REQUEST['email'];
        if (empty($name) || empty($email)) {
            echo "Some fields is empty";
        } else {
            echo $name;
            echo $email;
        }
    }
    ?>

</body>

</html>