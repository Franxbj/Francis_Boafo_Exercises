<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 4 - Francis Boafo</title>
</head>
<body>
<style>
    h1 {
        background-color: #D4D4D4; 
        font-family: Arial, Helvetica, sans-serif;
    }
</style>
<?php
    echo "<h1>QUESTION 1</h1>";
?>

<?php
$courses = array("PHP", "HTML", "Javascript", "CMS", "project");

echo "

    <li>$courses[0]</li>
    <li>$courses[1]</li>
    <li>$courses[2]</li>
    <li>$courses[3]</li>
    <li>$courses[4]</li>
   
 ";
?>

<?php
    echo "<h1>QUESTION 2</h1>";
?>

<?php
$courses1 = array("PHP", "HTML", "Javascript", "CMS", "project");
echo "Elements in the Array - Courses1 <br>";
echo $courses1[0] .", ".  $courses1[1] . ", ". $courses1[2] .", ".  $courses1[3] . ", ". $courses1[4];

// lets remove HTML
echo "<br>";
echo "<br>";
print_r($courses1);
echo "<br>";
echo "<br>";
echo "Using unset() to remove HTML, the final result is <br>";

unset($courses1[1]);

print_r($courses1);

?>

<?php
    echo "<h1>QUESTION 3</h1>";
?>

<?php
    echo "<h1>QUESTION 4</h1>";
    echo "Converting values in array to UPPERCASE.</br>";
    $courses4=array("php", "html", "javascript", "cms", "project");
    $name_convert = array_map("strtoupper", $courses4);

    foreach ($name_convert as $NewArray) {
    echo $NewArray. "</br>";
  }
?>

<?php
    echo "<h1>QUESTION 5 - Index Arrays</h1>";
    echo "My Favorite Colors<br>";
    echo "<br>";
    $colors = array("Absolute Zero", "Acid Green", "AliceBlue", "Crystal", "Denim");
    $arrlength = count($colors);

    for($x = 0; $x < $arrlength; $x++) {
    echo $colors[$x];
    echo "<br>";
}
?>

<?php
    echo "<h1>QUESTION 6 - Associative Arrays</h1>";
    echo "My Favorite Colors and Hexadecimal Equivalence<br>";
    echo "<br>";
    $color = array("Absolute Zero"=>"#0048ba", "Acid Green"=>"#b0bf1a", "AliceBlue"=>"#f0f8ff", "Crystal"=>"#a7d8de", "Denim"=>"#1560bd");

    foreach($color as $x => $x_value) {
    echo "Favorite color = " . $x . ", Hexadecimal equivalence = " . $x_value;
    echo "<br>";
    }
?>

<?php
    echo "<h1>QUESTION 7 </h1>";
    echo "12 Months in the Year<br>";
    echo "<br>";
    $month = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November",  "December");
    $arrlength = count($month);

    for($x = 0; $x < $arrlength; $x++) {
    echo $month[$x];
    echo "<br>";
}
?>

<?php
    echo "<h1>QUESTION 7 </h1>";
    echo "Statements Explaining the various lines of codes<br>";
    echo "<br>";
    echo "<hr><h2> Calculation average temperature: </h2>";
    $month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
    68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
    // what is explode and what does the below code do? : explode is a php function that breaks or splits a string into an array or many small strings.
    // The code below will be split into an array eg. 
    $temp_array = explode(',', $month_temp);
    $tot_temp = 0;
    // What is count?
    //Answer: The count() function is a php function that counts and returns the number of elements in a array
    $temp_array_length = count($temp_array);
    foreach($temp_array as $temp)
    {
     $tot_temp += $temp;
    }
     $avg_high_temp = $tot_temp/$temp_array_length;
     echo "Average Temperature is : ".$avg_high_temp."
    "; 
    // what does sort do?
    // Answer: The sort() function is a php function that sorts in ascending order an indexed array.
    sort($temp_array);
    echo "<br> List of five lowest temperatures :";
    for ($i=0; $i< 5; $i++)
    { 
    echo $temp_array[$i].", ";
    }
    echo "<br>List of five highest temperatures :";
    // explain the following loop
    //Answer: the for loop loops through this array for the exact specified number of times. It begins with an initial or start of a counter. 
    // in the example below, the intial counter is set to ($temp_array_length-5)
    // For as long as $i is less than ($temp_array_length), the loop contnues to count. 
    // for each repetition or iteration, the counter increases by 1.
    for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
    {
    echo $temp_array[$i].", ";
    }

?>
</body>
</html>