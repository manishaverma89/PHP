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
//  Average count

function average($any_array){
   $sum=0;
   $i=1;
    foreach ($any_array as $value) {
          $sum += $value;  
          $i++; 
    }
    return $sum/$i;
}


$manisha_count = ["1","2","3"];
$sum_manisha_count = average($manisha_count);
echo "sum of Manisha_count is:  ". $sum_manisha_count;

$bhavya_count = array("2","3","3");
$sum_bhavya_count = average($bhavya_count);
echo "<br>sum of Bhavya_count is:  ". $sum_bhavya_count;

?>