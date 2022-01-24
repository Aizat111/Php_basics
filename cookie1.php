<?php
//display cookie wih name genel
echo @$_COOKIE['genel'];

//delete cookie with name genel
setcookie('genel','',time()-3600);

//dispaly all cookies
print_r($_COOKIE);
?>