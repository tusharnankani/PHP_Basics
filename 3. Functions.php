<?php

    # Function - block of code that can be repeatedly called;

    /*
        Camel Case & Snake Case --> Function name;
        Pascal Case --> classes and objects in OOP;
        MyFunction()    #Pascal Case
    */


    # Creating a function
    function func() {
        echo "Hello";
    }

    func();
    # outputs Hello




    # Functions where arguments are passed;
    // if no arguments are passed, we can set the value to some default value;
    function greet($name = 'World') {
        echo "Hello $name";
    }

    greet("Tushar");
    # Outputs Hello Tushar
    
    greet();
    # Outputs Hello World






    // FUnctions returning value

    function add($a, $b) {
        return $a + $b;
    }

    echo add(9, 10);
    # Outputs 19;







    # Passing arguments by reference;

    $num = 10;

    function addfive($a) {
        $a += 5;
    }

    // Passing by reference
    function addten(&$a) {
        $a += 10;
    }


    addfive($num);
    echo $num;
    # Outputs 10 --> num remains same;
    
    addten($num);
    echo $num;
    # Outputs 20 --> num changes when passed by reference;


?>