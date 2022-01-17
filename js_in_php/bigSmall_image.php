<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <!--Bir html formunda 10 adet resim bulunmaktadir ve bu resimlerin isimleri "resim1.jpg...resim10.jpg"
    seklinde belirlenmistir ve name/id olarak resim1...resim10" seklinde belirtilmistir. Ayni sekilde,
    belirtilen resimlerin 1/2 oraninda en ve boydan kucultulmus kucuk halleri mevcuttur ve
    "resimk1.jpg...resimk10.jpgseklinde isimlendirilmistir. Her bir resme tiklaninca resim kucukse buyuk, 
    buyukse kucuk halini alacaktir. Belirtilen web dokumaninin kodunu php/javascript/HTML kullanarak olusturunuz-->
<script type="text/javascript">
    function changeImage(id)
    {
        var number=id.substr(5);
     
        if(document.getElementById(id).src=="http://localhost/php_basics/JS_in_php/images/resim"+number+".jpg")
        {
            document.getElementById(id).src="images/resimk"+number+".jpg";
        }
        else
        {
            document.getElementById(id).src='images/resim'+number+'.jpg';
        }
       
      
    }
</script>
<?php

for($i=1;$i<5;$i++)
{ 
    echo "<div class='forPhoto'>";
    $str=strval($i);
    echo "<img src='images/resim$str.jpg'  id='resim$str' onClick='changeImage(this.id)'>";
    echo "</div>";
}
?>
</body>
</html>