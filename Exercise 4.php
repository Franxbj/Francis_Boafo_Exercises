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


</body>
</html>