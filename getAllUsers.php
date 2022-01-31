<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- Icinde bulunan form ile kendi kendini cagiran session4.php isimli tek bir php  dosyasi siniftaki ogrencilerin username ve passwordlarini
session yapisi yardimi ile  tutarak her cagirildiginda daha once eklenen tum userleri  de en alt kisima listeleyerek  sunmaktadir-->
<body>
    <?php
    session_start();
    $_SESSION['users']=array()
    ?>
    <div class="login">
        <center>
    <form action="session4.php"  method="post" >
        <input type="text" name="name"> <br><br>
        <input type="password" name="psd"> <br><br>
        <input type="Submit" value="Ok"><br><br>
    </form>
    </div>
</center>
    <div class="text">
        <?php
        if(isset($_POST['name'])&&isset($_POST['psd']))
        {
         
            $username=$_POST['name'];
            $password=$_POST['psd'];
            array_push($_SESSION['users'],$username);
            for($i=0;$i<count($_SESSION['users']);$i++)
            {
                echo $_SESSION['users'].'<br>';
            }
            
        }
        ?>
    </div>
  
 


</body>
</html>