<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script type="text/javascript">
        function Goster()
        {
            linkSayisi=document.getElementsByName("link").length;
       
            for(i=1;i<=linkSayisi;i++)
            {
                linkAdi=document.getElementById("link1"+i).innerHTML;
                alert(linkAdi);
                if(i==4)
                {
                    document.getElementById("link1"+i).innerHTML="Denedim Olmadi";
                }
                linkDigerAdi=document.anchors[i-1].innerHTML;
                alert(i+linkDigerAdi);
            }
        }

    </script>
    <form name="test1">
        <input type="text" id ="metinkutusu"><br>
        <input type="button" value="Goster" onClick="Goster()"><br>
    </form>
    <a href="deneme" id="link14" name="link">Buradayim</a><br>
    <a href="www" id="link13" name="link">Burdaydim</a><br>
    <a href="https" id="link12" name="link">Orada Olacagim</a><br>
    <a href="hajd" id="link11" name="link">Burada Olmayacagim</a><br>
</body>
</html>