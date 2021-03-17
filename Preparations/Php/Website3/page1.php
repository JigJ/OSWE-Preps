<?php
    if(isset($_POST['submit'])){
        session_start(); // start session
        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['email'] = htmlentities($_POST['email']);

        header('Location: page2.php'); // Redirect header
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>
<body>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>"> <!-- Could be "GET" !-->
            <input type="text" name="name" placeholder="Enter Name">
            <input type="text" name="email" placeholder="Enter Email">
            <input type="submit" name="submit" value="Submit">
</form>    
    
</body>
</html>