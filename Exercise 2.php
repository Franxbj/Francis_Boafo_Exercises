<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 2 - Francis Boafo</title>

<style>
    h4
    {
        color: red;
     }

     h3
    {
        color: blue;
     }
</style>

</head>
<body>  
    <?php
    /*
    Question 1. Adding two strings.
    
    */
    echo "<h2>EXERCISE 2 - STRING</h2>";

    echo "<h3>QUESTION 1.</h3>";

    $fitem = "Tomorrow is";
    $sitem = "another day.";

    // . is used to add two strings together.
    $titem = $fitem . " " . $sitem;
    echo $titem;

    // To find the length of the string, strlen() is used

    $length = strlen($titem);
    echo "</br>";
    echo "The length of the string is " . $length;

    ?>

<?php
    /*
    Question 2. Changing the double quotes
    
    */
    echo "<h3>QUESTION 2.</h3>";

    $fitem = 'Tomorrow is';
    $sitem = 'another day.';

    // . is used to add two strings together.
    $titem = $fitem . ' ' . $sitem;
    echo $titem;

    // To find the length of the string, strlen() is used

    $length = strlen($titem);
    echo '</br>';
    echo 'The length of the string is ' . $length;

    echo '</br>';
    echo '<h4>After changing double quotes to single,</br> there was no change. </h2>';
    ?>

<?php
    /*
    Question 3. Changing the double quotes
    
    */
    echo "<h3>QUESTION 3.</h3>";
    /*

    $fitem = 'Tomorrow is";
    $sitem = 'another day.";
    
    // . is used to add two strings together.
    $titem = $fitem . ' ' . $sitem;
    echo $titem;

    // To find the length of the string, strlen() is used

    $length = strlen($titem);
    echo '</br>';
    echo 'The length of the string is ' . $length;

    echo '</br>';
    echo '<h2>After changing double quotes to single,</br> there was no change. </h2>';
    */
    
    $error = "Parse error: syntax error, <b>unexpected identifier</b>";
    echo $error;
    ?>

<?php
    /*
    Question 4. Removing the dollar sign.
    
    */
    echo "<h3>QUESTION 4.</h3>";
/*
    fitem = "Tomorrow is";
    sitem = "another day.";

    // . is used to add two strings together.
    $titem = $fitem . " " . $sitem;
    echo $titem;

    // To find the length of the string, strlen() is used

    $length = strlen($titem);
    echo "</br>";
    echo "The length of the string is " . $length;
    */
    $error = "Parse error: syntax error, <b>unexpected token</b>";
    echo $error;
    ?>
    
    <?php
    /*
    Question 5. Removing one semi colon.
    
    */
    echo "<h3>QUESTION 5.</h3>";
     /*
    $fitem = "Tomorrow is"
    $sitem = "another day.";

    // . is used to add two strings together.
    $titem = $fitem . " " . $sitem;
    echo $titem;

    // To find the length of the string, strlen() is used

    $length = strlen($titem);
    echo "</br>";
    echo "The length of the string is " . $length;
    */

    $error = "Parse error: syntax error, <b>unexpected variable</b>";
    echo $error;

    ?>

<?php
    /*
    Question 6.
    
    */

    echo "<h3>QUESTION 6.</h3>";
    
    $text = " \" It is Markku's car.\"";
    echo $text;
    echo "</br>";

    $new = "Random characters: del c:\*.*\"";
    echo $new;
    ?>

<?php
    
    echo "<h2>EXERCISE 2 - OPERATORS</h2>";

    echo "<h3>QUESTION 1.</h3>";

    $f_num = 298;
    $s_num = 234;
    $t_num = 46;
    $sum_total = $f_num + $s_num + $t_num;

    // using echo to output the answer.
    echo $sum_total;

    ?>

<?php

    echo "<h3>QUESTION 2.</h3>";

    $a = 87;
    $b = 44;
    $c = 200;
    $d = 15;
    $e = 10;
    $answer = ($a + $b) + ($c * $d) / $e;

    // using echo to output the answer.
    echo $answer;

    ?>

</body>
</html>