<?php
$family = array("Papa","Mummy","Bhai","Bhabhi","Bhavya","Arav");
echo "Total family members are: ";
echo count($family);
echo "</br>";
  

echo "<br>we are using foreach loop now";
// foreach loop works only on arrays,and is only used to loop through each key/value pair in an array.

foreach($family as $value){
    // echo "<br>";
    echo "$value <br>";
}


function avg_count($any_array){
   $sum=1;
    foreach ($any_array as $value) {
          $sum *= $value;   
    }
    return $sum;
}


$manisha_count = ["1","2","3"];
$sum_manisha_count = avg_count($manisha_count);
echo "sum of Manisha_count is:  ". $sum_manisha_count;

$bhavya_count = array("2","3","3");
$sum_bhavya_count = avg_count($bhavya_count);
echo "<br>sum of Bhavya_count is:  ". $sum_bhavya_count;

?>