<?php

    # CONDITIONALS

    /*
        Very important  Type Juggling
        ==              // Test for value   ('5' == 5)  => True 
        ===             // Test for identicial types ('5' === 5) => false
        <               // Less than
        >               // Greater than
        <=              // Less than equal
        >=              // Greater than equal
        !=              // Not equal
        !==             // Not equal even the types

    */

    // Type Juggling
    $num1 = 5;          // Int
    $num2 = '5';        // String
    if($num1 == $num2){
        echo "Check passed String(5) == Int(5)<br>";
    }

    if($num1 !== $num2){
        echo "Check failed String(5) === Int(5)<br>";
    }

/*
    LOGICAL OPERATORS

    add &&
    or  ||
    xor
*/  
    // $num = 7;
    // if ($num > 4 AND $num <10){
    //     echo '$num passed';
    // }


# SWITCH

$favcolor = 'red';

switch($favcolor){
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is red';
        break;
    case 'green':
        echo 'Your favorite color is red';
        break;
    default:
        echo "Your favorite color is something else";
}


?>