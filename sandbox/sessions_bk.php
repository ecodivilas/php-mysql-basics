<?php

    // sessions
    // - Does not stores data in the computer like cookie would
    // - It stores data on the server between requests or between any loading pages
    // - The server always keeping track of data as we navigate around the website on different pages until they close off the web pages
    // This could be a login page


    if(isset($_POST['submit'])){
        
        session_start();

        $_SESSION['name'] = $_POST['name'];

        header('Location: ../index.php');
        // echo $_SESSION['name'];
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>php tuts</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="text" name="name">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
