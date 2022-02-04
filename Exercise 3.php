<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3 - Francis Boafo</title>

</head>
    <style>
        h1{
            background-color: grey;
            padding: 3px;
            color: white;
        }
    </style>
<body>
<?php
    echo "<h1>QUESTION 1</h1>";
    
    $month = date("F");
    // date(F) gets current month name.
    if ($month == "August"){
        echo "<i>It's August, so it's still holiday</i> <br>";
    }
    else {
        echo "<i>Not August, This is  $month  so I don't have any holidays</i> <br>";
    }
?>

<?php
    echo "<h1>QUESTION 2</h1>";
    
    $color = "red";
    if ($color == "red"){
        echo "The color is red.<br>";
    }
    else {
        echo "The color is not red.<br>";
    }
?>
<?php 
    echo "<h1>QUESTION 3</h1>";
    echo "<h3>Checking your Exam Grade</h2>";
?>

    <form method ="post" action ="exercise3.php">
        Please enter your total score:
        <p><input type ="text" name="grade"></p>
        <input type ="submit" value="submit">
    </form>
<?php
    echo "<h3>ANSWER</h2>";
    
    $grade = $_POST["grade"]; 
    if ($grade >= 80){
        echo "Excellent<br>";
    }
    elseif ($grade >= 70){
        echo "Great<br>";
    }
    elseif ($grade >= 60){
        echo "Good<br>";
    }
    elseif ($grade >= 60){
        echo "Great<br>";
    }
    else{
        echo "Fail";
    }
?>
<?php 
    echo "<h1>QUESTION 4</h1>";
    echo "<h3>Check your voting rights</h2>";
?>

 <form method ="post" action ="exercise3.php">
        Please enter your name:
        <p><input type ="text" name="grade"></p>
        Please enter your age:
        <p><input type ="text" name="age"></p>
        <input type ="submit" value="submit">
    </form>
<?php
    echo "<h3>Voting Eigibility</h2>";
    
    $grade = $_POST["age"]; 
    if ($grade >= 18){
        echo "Congratulations. You're eligible to vote.<br>";
    }
    else{
        echo "Sorry. You cannot vote at this time.<br>";
    }
?>

<?php
    echo "<h1>QUESTION 5</h1>";
    
    for ($a = 8; $a>0; $a--){ // loops through 8 to 1 in a decreasing order
        for ($b = 0; $a>$b; $b ++)
        echo $b+1;
        echo "</br>";
        echo (" ");
    }
?>

<?php
    echo "<h1>QUESTION 6</h1>";
    echo "Using a while loop statement</br>";
    echo "</br>";
    $a = 8; $b = 1; $c = 1;
        while  ($b <= $a){
            while ($c <= $b){
                echo "*";
                $c++;
            }
            echo "</br>";
            $b++;
            $c = 1;
        }
?>

<?php
    echo "<h1>QUESTION 7</h1>";
    echo "Link to HTML files</br>";
    echo "</br>";
    echo "https://raw.githubusercontent.com/Franxbj/StarLearners/main/starlearners.html";
?>

</body>
</html>
