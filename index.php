<?php
    declare(strict_types=1);

    ini_set("display_errors", "1");
    ini_set("display_startup_errors", "1");
    error_reporting(E_ALL);


// === Exercise 1 ===
// Below we're defining a function, but it doesn't work when we run it.
// Look at the error you get, read it and it should tell you the issue...,
// sometimes, even your IDE can tell you what's wrong
echo "Exercise 1 starts here:";

function new_exercise($x) { //we add $x as a parameter, so when the function is called the argument can be anything

    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>"; //Exception has occured. Warning: Undefined variable $x;
    echo $block;

}
new_exercise(2);