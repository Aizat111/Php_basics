<?php
//number of runs of the page
if(session_status()!=2) session_start();
if(isset($_SESSION['count']))
{
    $_SESSION['count']=$_SESSION['count']+1;
}
else
{
    $_SESSION['count']=1;
}
echo 'This page is working for the '.$_SESSION['count'].'.time ';
?>