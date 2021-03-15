<?php

    #Functions = Block of code that can be repeatedly called

    /*
        Camel Case = myFunction()
        Lower Case = my_function()
        Pascal Case = MyFunction()  // Mostly for Classes

    */

    // // Create Simple Function
    // function simpleFunction(){
    //     echo 'Hello World';
    // }

    // // Running a simple function
    // simpleFunction();

    // // Function with Param
    // function sayHello($name = 'World'){
    //     echo "Hello $name<br>";
    // }

    // sayHello("Joe");
    // sayHello();

    // // Add numbers
    // // Returning value
    // function addNumbers($num1, $num2){
    //     return $num1 + $num2;
    // }

    // echo addNumbers(2,5);

    // Pass by value and  reference
    

    // Pass by Value
    $myNum = 10;
    function addFive($num){
        $num += 5;
    }

    // Pass by Reference ==> See the "&" sign before variable
    function addTen(&$num){
        $num += 10;
    }

    addFive($myNum);
    echo "Value: $myNum<br>";

    addTen($myNum);
    echo "Value: $myNum<br>";


?>