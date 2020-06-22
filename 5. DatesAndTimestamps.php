<?php

// REFERENCE FOR MORE: https://www.php.net/manual/en/function.date.php





    # SETTING TIMEZONES:
    // imp;
    date_default_timezone_set('Asia/Calcutta');





    # The `date()` function;
    // today's date is 23-06-2020 & time is about 2 a.m.;

    # DATES:

    echo date();
    // gives error, date() expects at least 1 parameter;

    echo date('d');     # day
    // outputs 22;

    echo date('m');     # month
    // outputs 06;

    echo date('Y');     # Year
    // outputs 2020

    echo date('l');     #Day of the week;
    // outputs Monday;

    


    echo date('d/m/Y');
    // outputs 22/06/2020;

    echo date('d-m-Y');
    // 22-06-2020











    # TIME:

    echo date('h');     # hour;
    echo date('i');     # minute;
    echo date('s');     # seconds;
    echo date('a');     # AM or PM;


    echo date("h:i:s a");
    // outputs 02:07:09 am;



    echo "<br>";





    # `mktime()` --> args: hrs, min, sec, mon, day, year;

    $timestamp = mktime(10, 14, 54, 8, 12, 2001);
    
    echo $timestamp;
    // outputs 997591494;
    // number of seconds is outputted;

    /*
        The unix time stamp is a way to track time as a running total of seconds. 
        This count starts at the Unix Epoch on January 1st, 1970 at UTC. 
        Therefore, the unix time stamp is merely the `number of seconds` between a particular date and the Unix Epoch.
    */



    // to output the timestamp created using `mktime()` into readable format;
    # WE HAVE TO ADD THAT AS A SECOND ARGUMENT AS THAT USING `date()`

    echo date("m/d/Y h:i:s a", $timestamp);
    // outputs 08/12/2001 10:14:54 am;











    # `strtotime`:
    $timestamp2 = strtotime("7:00pm March 22 2016");
    
    echo $timestamp2;
    // outputs 1458653400;

    echo date("m/d/Y h:i:s a", $timestamp2);
    // outputs 03/22/2016 07:00:00 pm;


    echo "<br>";




    $timestamp3 = strtotime("tomorrow");
    
    echo $timestamp3;
    // outputs 1592937000
    
    echo date("d/m/Y h:i:s a", $timestamp3);
    // outputs 24/06/2020 12:00:00 am
    // tomorrow's date;
    
    echo "<br>";
    




    $timestamp4 = strtotime("next Sunday");
    
    echo $timestamp4;
    // outputs 1593282600;
    
    echo date("d/m/Y h:i:s a", $timestamp4);
    // outputs 28/06/2020 12:00:00 am;
    
    
    echo "<br>";



    
    
    
    $timestamp5 = strtotime("+2 Months");
    
    echo $timestamp5;
    // outputs 1598130016;
    
    echo date("d/m/Y h:i:s a", $timestamp5);
    // outputs 23/08/2020 02:30:16 am;


    


?>