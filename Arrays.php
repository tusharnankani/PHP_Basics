<?php

    #Arrays : Variable that hold multiple values
    /*
        Three Types:
            - Indexed
            - Associative
            - Multi-dimensional
    */




    # Indexed array

    $letter = array('ab', 'cde', 'fghij'); 
    # using the array function.
    // 0 - indexed; like any other language;
    // echo $letters[0]; #prints a
    // echo $letters[3]; #undefined error

    $ids = array(23, 55, 12);
    // echo $ids[1]; #outputs 55

    # Declaration of arrays without using the array functions;
    $num = [0, 1, 2, 3]; 

    # Adding elements to the array;
    $num[4] = 4;
    echo $num[4];   # Outputs 4;
    # Adding elements, if we dont know the last index;
    $num[] = 5;
    echo $num[5];   # Outputs 5;

    # Replacing the elements;
    $num[2] = -1;
    echo $num[2];   # Outputs -1;



    # Count of the number of elements in an array using the `count` function;
    echo count($num);   # Outputs 6;




    # Printing the complete array using `print_r` function;
    print_r($num);
    /* Output: 
     Array ( [0] => 0 [1] => 1 [2] => -1 [3] => 3 [4] => 4 [5] => 5 ) 
     */




    # `var_dump` function;
    // A very important function, to know all about the datatype;
    var_dump($num);
    /* Output:
        array(6) { [0]=> int(0) [1]=> int(1) [2]=> int(-1) [3]=> int(3) [4]=> int(4) [5]=> int(5) } 
    */

    var_dump($letter);
    /* Output
        array(3) { [0]=> string(2) "ab" [1]=> string(3) "cde" [2]=> string(5) "fghij" } 
    */









    

    # Associative Array --> like Dictionary in Python and Hashing in C++; 
    // is unordered;
    // key: value pairs;
    // key, value --> can be any data type: string, int etc.

    $people = ['Brad' => 22, 'Jose' => 25, 55 => 'tom'];
    echo $people['Brad'];   # Outputs 22;
    echo $people[55];    # Outputs tom;
    

    print_r($people);
    /* Output:
        Array ( [Brad] => 22 [Jose] => 25 [55] => tom ) 
    */


    var_dump($people);
    /* Output:
         array(3) { ["Brad"]=> int(22) ["Jose"]=> int(25) [55]=> string(3) "tom" } 
    */


    # Adding elements;
    $people['Jill'] = 30;

    print_r($people);
    /* Output:
        Array ( [Brad] => 22 [Jose] => 25 [55] => tom [Jill] => 30 ) 
    */









    # Multi-Dimensional arrays:
    $cars = [
        ['Honda', 20, 10],
        ['Toyota', 30, 20],
        ['Ford', 23, 12]
    ];
    /* Using `array()` function;
        $cars = array(
        array('Honda', 20, 10),
        array('Toyota', 30, 20),
        array('Ford', 23, 12)
        );
    */

    echo $cars[1][0];   # Ouptuts Toyota;
    echo $cars[2][1];   # Outputs 23;


?>
