<?php
//sessions sayfasinda tanimladigimiz verileri oturumu kapatmadigimiz surece burada da acabiliriz
session_start();
echo 'The value of animal: '.$_SESSION['animal'];
echo '<br> The color is: '.$_SESSION['color'];
echo '<br>Time is: '.$_SESSION['_time'];
//get sessions id
echo "<br> Session's id is: ".session_id();
?>