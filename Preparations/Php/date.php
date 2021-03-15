<?php
    // echo date('d');      // Day; Number of the day
    // echo date('m');      // Month: Number of Month
    // echo date('Y');      // Year
    // echo date('1');      // Day of week

    // echo date('Y/m/d');      // Current date
    // echo date('m-Y-d');      // Current date

    // echo date('h');     // Hour      (Could be wrong) Thus timezone needs to be set

    // Set time zone
    date_default_timezone_set('America/New_York');
    // echo date('i');     // Minutes
    // echo date('s');     // Seconds
    // echo date('a');     // AM or PM

    // echo date('h:i:sa');  // Current time

    // mktime(Hour, Minute, Second, Date, Month, Year)
    // $timestamp = mktime(10,14,54,25,06,1994);

    // echo $timestamp;     // String of number since Unix timestamp

    // echo date('m/d/Y h:i:sa', $timestamp);

    $timestamp2 = strtotime('7:00pm March 22 2016');

    // Can put anything Vague
    $timestamp3 = strtotime('tomorrow');        
    $timestamp4 = strtotime('next Sunday');
    $timestamp5 = strtotime('+2 Days');
    // echo $timestamp2;           // Time enoch
    echo date('m/d/Y h:i:sa', $timestamp3);

?>