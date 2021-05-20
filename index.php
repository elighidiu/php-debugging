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

//=== Exercise 3 ===
//This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed

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

// === Exercise 5 ===
// The array should be printing every letter of the alfabet (a-z) but instead it does that + aa-yz
// Fix the code so the for loop only pushes a-z in the array

$arr = [];
    for ($letter = 'a'; $letter <= 'z', strlen($letter)<2; $letter++) { // I added a second condition in for loop so the length to be <2 
        array_push($arr, $letter);   
    }

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array


new_exercise(6);

// === Final exercise ===
// The fixed code should echo the following at the bottom:
// Here is the name: $name - $name2
// $name variables are decided as seen in the code, fix all the bugs whilst keeping the functionality!
$arr = [];


function combineNames($str1 = "", $str2 = "") {
    $params = [$str1, $str2];
    foreach($params as &$param) { //& to be able to assign a new value 
        if ($param == "") {
            $param = randomHeroName();
        }
    }
    return implode( " - ", $params); // implode(): Argument #2 ($array) must be of type ?array &  changed echo to return so it wouldn't put the name first
   
}


/* function randomGenerate($arr, $amount) {
    for ($i = $amount; $i > 0; $i--) {
        array_push($arr, randomHeroName());
    }

    return $amount;
}  */

function randomHeroName()
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"]; 
    $heroes = [$hero_firstnames, $hero_lastnames];  //Parse error: syntax error, unexpected variable "$heroes" -> was missing ; on line 99
    $randname = $heroes[rand(0,count($heroes)-1)][rand(0, 10)]; //count($heroes) is 11 so we have to deduct 1 becasue we start at index 0

    return $randname; //function have to return something so I changed echo to return
}

echo "Here is the name:".combineNames();

new_exercise(7);

function copyright(string $year) { // copyright(): Argument #1 ($year) must be of type int, string given so I changed the type from int to string becasue on line 115 the argument is a string not an integer 
    return "&copy; $year BeCode";
}
//print the copyright
echo copyright(date('Y'));

new_exercise(8);