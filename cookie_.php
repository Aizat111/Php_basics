<?php


// set new cookie with name genel to 20 seconds
setcookie('genel', 'Merhaba Dunya', time() + 20);

//set new cookie with name name to 10 seconds
setcookie('name','Aizat',time()+10);
setcookie('age','20',time()+10);
//link to page cookie1.php
echo "<a href='cookie1.php'> Cookie?</a>";
?>