<?php

// superglobals

// $_GET['name'], $_POST['name']

echo $_SERVER['SERVER_NAME'] . '<br />'; // localhost
echo $_SERVER['REQUEST_METHOD'] . '<br />'; // GET
echo $_SERVER['SCRIPT_FILENAME'] . '<br />'; // C:/xampp/htdocs/tuts/sandbox/superglobals.php
echo $_SERVER['PHP_SELF'] . '<br />'; // /tuts/sandbox/superglobals.php

// $_SESSION, $_COOKIE

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>php tuts</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <input type="submit" name="submit">
    </form>
</body>
</html>
