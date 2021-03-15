<?php
    # LOOPS 
    /* 
        For
        While
        Do.. While
        Foreach
    */

    # For Loop
    # @params - Init, condition, inc

    # While Loop
    # @params - condition


    # Do.. While Loop
    # @params - condition

    # Forrach Loop - For arrays
    $people = array('Brad', 'Jose', 'William');

    foreach($people as $person){
        echo $person;
        echo '<br>';
    }

    # Forrach Loop - For associative arrays
    $people = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'willy@gmail.com');

    foreach($people as $person => $email){
        echo $person . ' has email address as ' . $email;
        echo '<br>';
    }


?>