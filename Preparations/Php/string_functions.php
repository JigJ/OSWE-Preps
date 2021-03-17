<?php   

    # Substr()
    # Returns a portion of a String

    // substr(String, Start_index, end_index)
    // $output = substr('Hello', 1, 3);
    // $output = substr('Hello', -2);
    // echo $output;


    # Strlen()
    # Returns the length of a String

    // $output = strlen('Hello World!');
    // echo $output;

    # Strpos()
    # Finds the position of the first occurence of a sub string

    // $output = strpos('Hello World!','o');
    // echo $output;

    # Strrpos()
    # Finds the position of the last occurence of a sub string

    // $output = strpos('Hello World!','o');
    // echo $output;

    # trim
    # strips whitespaces
    /*
    $text = 'Hello World        ';
    var_dump($text);

    $trimmed = trim($text);
    var_dump($trimmed);
    */

    # strtoupper
    # Makes everything uppercase
    // $output = strtoupper('Hello World!');
    // echo $output;

    # strtolower
    # Makes everything lowercase
    // $output = strtolower('Hello World!');
    // echo $output;

    # ucwords()
    # Capitable every world first letter
    // $output = ucwords('Hello World!');
    // echo $output;

    # str_replace()
    # Replace all occurences of a search string with a replacement

    // $text = 'Hello World!';
    // $output = str_replace('World',
    // 'everyone', $text);
    // echo $output;

    # is_string()
    # Check if string

    // $val = 12;
    // $output = is_string($value);
    // echo $output; // returns 1 if a string


    // $values = array(true, false, null, 'abc', 123, '', 22.5, '22.5');
    
    // foreach($values as $value){
    //     if(is_string($value)){
    //         echo "{$value} is a string<br>";
    //     }
    // }

    # gz_compress()
    # compress a string

    // $string = "This is very long parajgfjhgfhergherhgheroighihrghorhgo";
    
    // $compressed = gzcompress($string);
    // echo $compressed;

    // $uncompressed = gzuncompress($compressed);
    // echo $uncompressed;
?>