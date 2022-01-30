<?php

$fruit=array(
   'bir'=>array("apple","banana","pera"),
   array("peach","mandalina","orange"),
   array("domatoes","potatoes","cucumber"), 
);
//open comment below to see all structure of array

//echo $fruit['bir'][1];
print_r($fruit);
// with foreach loop, display all items of array fruit
foreach ($fruit as $number=>$row)
{
    foreach($row as $line )
    {
        echo $line.",";
    }
 echo "<br>********<br>";
}
?> 