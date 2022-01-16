<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!--isimleri resim1,resim2...resim5 seklinde verilmis 5 adet resim oldugunu kabul edelim. Olusturmaniz gereken
ekran Buton-Resim-Buton seklinde goruntulenecek,soldaki buton tiklaninca resim olarak bir onceki resim, sagdaki buton tiklaninca 
bir sonraki resim goruntulenecktir ve bu yapi donguselse calisacak(1.resim goruntulenirken sola basilirsa 5.resim, 
5.resim goruntulenirken saga basilirsa 1. resim goruntulenecektir) -->
<body name="body">
    <script type="text/javascript">
        function changeLeft(id)
        {
            if(parseInt(id)==1)
            {
                var str="5";
            }
            else
            {
                var intg=parseInt(id)-1;
                var str=intg.toString();
            }
           
            document.getElementById(id).src="images/caravan"+str+".jpg";
            document.getElementById(id).id=str+"pic";
        }
        function changeRight(id)
        {   
            if(parseInt(id)==5)
            {
                var str="1";
            }
            else
            {
                var intg=parseInt(id)+1;
                var str=intg.toString();
            }
            document.getElementById(id).src="images/caravan"+str+".jpg";
            document.getElementById(id).id=str+"pic";
        }
    </script>
   <form name="test1">
       <input type="button" value="Left" style="width:350px; height:100px" onClick="changeLeft(document.test1.picture.id)">
       <img src="images/caravan1.jpg" alt="caravan" width="650" height="550" id="1pic" name="picture">
       <input type="button" value="Right"style="width:350px; height:100px" onClick="changeRight(document.test1.picture.id)">
   </form>

    
</body>
</html>