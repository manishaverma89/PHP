<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array & Loops in PHP </title>
</head>
<body>
<h3>Arrays in PHP</h3>

    <?php
$friends = array("A","B","C");
echo "total count is: "; echo count($friends);
echo "<br>";
echo "<br>I love " . $friends[0] . " , " . $friends[1] . " and " . $friends[2];
echo "<br>";



// while Loop in PHP 

$a=0;
while ($a <= 10) {
    echo "<br>value of a from while loop is: ";
    echo $a;
    ++$a;
    echo "<br>";
  
}

// <h3> Iterating Arrays in PHP using while loop</h3>
$a=0;
while ($a < count($friends)) {
    echo "<br>value of friends is: ";
    echo $friends[$a];
    ++$a;
    echo "<br>";
  
}

// <h3>do while loop</h3>
$a=200;
do {
    
    echo "<br>value of a is: ";
    echo $a;
    ++$a;
    } while ($a < 10);


    //  for loop
for ($i=0; $i <10 ; $i++) { 
    echo "<br>value of i from for loop is: ";
    echo $i;
    echo "<br>";
}

// for each loop

$colors = array("red","yellow","green","blue");
foreach($colors as $value){
    echo "<br>value of current array element from for each loop is: ";
    echo "<br>";
    echo $value;
}

?>


</body>
</html>