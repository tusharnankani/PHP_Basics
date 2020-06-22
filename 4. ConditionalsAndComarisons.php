<?php

    # CONDITIONALS

    /*
        ==
        ===
        <
        >
        <=
        >=
        !=
        !==
    */

    $num = 5;

    if($num == 5){
        echo "5 passed";
    }
    // prints "5 passed"

    if($num == '5'){
        echo "5 passed";
    }
    // prints "5 passed"

    # a triple equal to means, data type should be also equal for it to be true;
    if($num === '5'){
        echo "5 passed";
    }
    // No output since data type isn't same;
    
    if($num === 5){
        echo "5 passed";
    }
    // prints "5 passed"

    #Rest comparisons are same to c++;
?>

</br>

<?php

    /*
    SYNTAX:

        if(condition 1) {

        } elseif (conditon 2) {

        } else {

        }
    
    */


    /*
        NESTED if:
            
            if(condition 1) {
                if(condition 1.1) {

                } else {

                }
            } elseif(condition 2) {

            } else {
                if(condition 3.1){

                } else {

                }
            }
    */

    
    /*
    LOGICAL OPERATORS: (we can use any of these; eg AND and &&; both can be used)
            AND     &&
            OR      ||
            XOR: one of them should be true but not both;
    */




    #SWITCHES:
    
    $color = 'blue';

    switch($color) {
        case 'red':
            echo "Your fav color is red.";
        break;
        case 'blue':
            echo "Your fav color is blue.";
        break;
        default:
            echo "Your fav color is something else.";
    }

    // Outputs: Your fav color is something else.

?>