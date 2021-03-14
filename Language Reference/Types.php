<?php

#Introduction

    // $a_bool = TRUE;   // a boolean
    // $a_str  = "foo";  // a string
    // $a_str2 = 'foo';  // a string
    // $an_int = 12;     // an integer

    // echo gettype($a_bool); // prints out:  boolean
    // echo gettype($a_str);  // prints out:  string

    // // If this is an integer, increment it by four
    // if (is_int($an_int)) {
    //     $an_int += 4;
    // }

    // // If $a_bool is a string, print it out
    // // (does not print out anything)
    // if (is_string($a_bool)) {
    //     echo "String: $a_bool";
    // }

#Booleans

    // $foo = True; // assign the value TRUE to $foo  

    // // == is an operator which tests
    // // equality and returns a boolean
    // if ($action == "show_version") {
    //     echo "The version is 1.23";
    // }

    // // this is not necessary...
    // if ($show_separators == TRUE) {
    //     echo "<hr>\n";
    // }

    // // ...because this can be used with exactly the same meaning:
    // if ($show_separators) {
    //     echo "<hr>\n";
    // }

    // var_dump((bool) "");        // bool(false)
    // var_dump((bool) 1);         // bool(true)
    // var_dump((bool) -2);        // bool(true)
    // var_dump((bool) "foo");     // bool(true)
    // var_dump((bool) 2.3e5);     // bool(true)
    // var_dump((bool) array(12)); // bool(true)
    // var_dump((bool) array());   // bool(false)
    // var_dump((bool) "false");   // bool(true)

