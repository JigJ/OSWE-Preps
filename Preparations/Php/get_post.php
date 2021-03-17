<?php
    if(isset($_GET['name'])){
        // Unsafe coz vulnerable to XSS
        echo $_GET['name'];   

        // Protection to XSS using htmlentities
        $name = htmlentities($_GET['name']);
        echo $name;
    }

    if(isset($_POST['name'])){
        // Protection to XSS using htmlentities
        $name = htmlentities($_POST['name']);
        echo $name;
    }

    // REQUEST Captures both GET/ POST
    if(isset($_REQUEST['name'])){
        // Protection to XSS using htmlentities
        $name = htmlentities($_REQUEST['name']);
        echo $name;
    }

    // Query strings for GET
    echo $_SERVER['QUERY_STRING'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="get_post.php"> <!-- Could be "GET" !-->
        <div>
            <label>Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label>Email</label><br>
            <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>    

</body>
</html>