
<?php

    // single line comment
    # single line comment
    /*
        multiline line comment
    */

    // echo and print: both work the same way, 
    // But the key difference is `print` returns a value; hence used in expressions;
    // but `echo` is usually faster!
    echo 'Hello!';
    print 'Works the same way!';




    # VARIABLES
    /*
        - Prefix $
        - Variable has to start with a letter or an underscore
        - only letters, numbers and underscores
        - case sensitive
    */
    
    // Creating variables
    $s = "hey";
    $A = 5;
    
    
    # DATA TYPES
    /*
        - Strings
        - Integers
        - Float
        - Booleans
        - Arrays
        - Objects
        - NULL
        - Resource
    */
    
    
    



    //ARITMETIC OPERATIONS
    $num1 = 4;
    $num2 = 10;
    $sum = ($num1 + $num2);
    echo ($num1 + $num2);
    echo $sum;
    // Output is 14

    $float1 = 2.5; 
    $bool1 = true;
    



    // STRINGS:
    $s1 = 'hello';
    $s2 = 'world';

    #STRING CONCATENATION: (Using full stops (.) intead of "+" like in PYTHON)
    $greet = $s1 . ' ' . $s2.'!';
    echo $greet;
    // Output is "hello world!";

    #STRING FORMATING --> EASIER using Double Quotes (" ");
    $easiergreeting = "$s1 $s2!";
    echo $easiergreeting;
    // Output is "hello world!";

    $s3 = 'I\'m a learner';
    // Using BACKSLASH (\) to ignore that quote;



    # USING `define` to declare strings; if we know the string is never going to change!;
    define('GREETING', 'Namaste!');
    #NOTE: While using define, one doesn't need to prefix it with `$`;
    echo GREETING; # OUTPUTS: Namaste!
    echo greeting; # GIVES ERRORS: Since case sensitive;

    
    define('GREETING', 'Namaste!', true);
    echo greeting;
    // OUTPUTS: Namaste! //Hence doesn't give errors!

    ?>