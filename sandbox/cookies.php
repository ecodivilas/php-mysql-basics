<?php

    // cookies
    // - Stores data in the computer
    // - Stores to persistent data of user's behaviors and likes to improve his/her UX 
    // - Most commonly used in ecommerces website to suggest customers preference based on cookies information
    // - Have expiration time
    // This could be mostly-liked in visted pages


    if(isset($_POST['submit'])){
        
        // cookie for gender
        // parameters (cookie_name, value, expiration_in_seconds)
        // 86400 - # of seconds in a day (setting this will last for a day)
        setcookie('gender', $_POST['gender'], time() + 86400);

        session_start();

        $_SESSION['name'] = $_POST['name'];

        header('Location: ../index.php'); // Need to be index.php alongside with the file cookies.php to make it work
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
        <select name="gender">
            <option value="male">male</option>
            <option value="female">female</option>
        </select>    
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
