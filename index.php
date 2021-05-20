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

// === Exercise 2 ===
// Below we create a week array with all days of the week.
// We then try to print the first day which is monday, execute the code and see what happens.

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];  //variable week index start with 0
$monday = $week[0]; //we change index from 1 to 0 becasue 1 is the index for the second position

echo $monday;

new_exercise(3);

// === Exercise 3 ===
// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed

$str = "Debugged ! Also very fun"; // Parse error: syntax error, unexpected token "!". The quotation marks used should be "" and not “”;
echo substr($str, 0, 10);

new_exercise(4);

// === Exercise 4 ===
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it, with ONE CHARACTER!

foreach($week as &$day) { //&  passes a value of the array as a reference and does not create a new instance of the variable. Thus if you change the reference the original value will change.
   
    $day = substr($day, 0, strlen($day)-3); 
}

print_r($week);

new_exercise(5);

