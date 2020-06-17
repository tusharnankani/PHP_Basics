<?php

    # LOOPS --> Executes a set of code number of times
    
    // SIMILAR TO ANY OTHER PROGRAMMING LANGUAGE LIKE C++;


    /*
        4 types:
            - For 
            - While
            - Do..while
            - Foreach
    */




    # For loop
    # @params - init, condition, inc/dec

    for ($i = 0; $i < 5; $i++) {
        echo $i;
        // echo '<br>';     # to print a new line for every iteration; 
    }
    # Outputs 01234






    # While loop
    # @params - conditon

    $a = 1;
    while ($a <= 10) {
        echo $a;
        $a++;
    }
    # Outputs 12345678910








    # Do..while loop
    # @param - condition

    $a = 1;
    do {
        echo $a++;  #Post increment operator (and pre increment operator) works just the same way as C++;
        // $a++;
    } while ($a <= 10);
    # Outputs 12345678910








    # Foreach loop --> for Arrays

    $people = ['Brad', 'Jose', 'Jill'];

    foreach ($people as $person) {
        echo '<br>';
        echo $person;
    }
    /*  OUTPUT:
        Brad
        Jose
        Jill
    */



    # For Associative arrays;
    $people = ['Brad' => 45, 'Jose' => 24, 'Jill' => 30];

    foreach ($people as $person => $age) {
        echo '<br>';
        echo "$person's age is $age";
    }
    /*
    Output:
    Brad's age is 45
    Jose's age is 24
    Jill's age is 30
    */

    


?>