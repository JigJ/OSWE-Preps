<?php
    // Check for posted data
    // if(filter_has_var(INPUT_POST, 'data')){
    //     echo 'Data found';
    // }else {
    //     echo 'No Data';
    // }

    // Check 
    // FILTER_VALIDATE_EMAIL: Would check input is of email form
    // INPUT_POST: Would get the data sent in post
    // FILTER_SANITIZE_EMAIL: Would sanitize special chars

    # Other ex:
        # FILTER_VALIDATE_BOOLEAN
        # FILTER_VALIDATE_EMAIL
        # FILTER_VALIDATE_FLOAT
        # FILTER_VALIDATE_INT
        # FILTER_VALIDATE_IP
        # FILTER_VALIDATE_REGEXP
        # FILTER_VALIDATE_URL

        # FILTER_SANITIZE_SPECIAL_CHARS
        # FILTER_SANITIZE_EMAIL
        # FILTER_SANITIZE_ENCODED
        # FILTER_SANITIZE_NUMBER_FLOAT
        # FILTER_SANITIZE_NUMBER_INT
        # FILTER_SANITIZE_STRING
        # FILTER_SANITIZE_URL
    


    // if(filter_has_var(INPUT_POST, 'data')){
    //     if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
    //         echo ' email is valid';
    //     } else {
    //         echo 'email is not valid';
    //     }
    // }

    // if(filter_has_var(INPUT_POST, 'data')){
    //     $email = $_POST['data'];

    //     // Remove illegal Chars
    //     $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    //     echo $email.'<br>';
    //     if(filter_var($email, 'data', FILTER_VALIDATE_EMAIL)){
    //         echo ' email is valid';
    //     } else {
    //         echo 'email is not valid';
    //     }
    // }

    // $var = 23;
    // if(filter_var($var, FILTER_VALIDATE_INT)){
    //     echo $var. 'is a number';
    // }else{
    //     echo $var. 'is not a number';
    // }

    // $var = '<script>alert(1)</script>';
    // echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);

    $filters = array(
        "data" => FILTER_VALIDATE_EMAIL,
        "data2" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 100
            )
        )
    );

    print_r(filter_input_array(INPUT_POST, $filters));



?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"> <!-- Could be "GET" !-->
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit" value="Submit">
</form>    