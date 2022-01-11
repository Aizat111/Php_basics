<?php
$days=array("Monday","Tuesday","Wednesday","Thursday");
// for each loop
echo "<br> With foreach loop <br> ";
 foreach ($days as $value)
 {
     echo $value." <br>";
 }

 // for loop
 echo " <br>With for loop <br>";
 for ($i=0;$i<count($days);$i++)
 {
   echo $days[$i]."<br>";
 }

 //while loop
 echo "<br> With while loop <br> ";
 $i=0;
 while($i<count($days))
 {
     echo $days[$i]."<br>";
     $i++;
 }
 ?>