<?php
if(session_status()!=2)
{
    session_start();
}
/*
0=php session disabled;
1=php session none;
2=php session active;
*/
echo "Welcome to first page<br>";
$_SESSION['color']="black";
$_SESSION['animal']="horse";
$_SESSION["_time"]=time();

echo '<br> <a href="session2.php">2.sayfa</a>';