<!DOCTYPE html>
<html>
    <!-- Hocanin derste gosterdigi ornek-->
    <head></head>
    <body>
        <script type="text/javascript">
            brwAdi= navigator.appName;
            brwSurum= navigator.appVersion;
            document.write("Tarayici adi: "+brwAdi+ "<br />");
            document.write("Tarayici surumu: "+brwSurum+"<br/>");

            function Olay()
            {
                alert(document.getElementById("metinkutusu").value);
            }

            function Goster()
            {
                LinkSayisi=document.getElementByName("link").length;
                for(i=1;i<LinkSayisi;i++)
                {
                    linkDigerAdi= document.anchors[i-1].innerHTML;
                    alert(linkDigerAdi);
                }
            }

        </script>
        <form name="test1">
            deger: <input type="text" id="metinkutusu"> <br>
            <input type="button" value="Yap" onClick="Olay()"><br>
            </form>

            <a href="deneme" id="link14" name="link" > Buradayim</a> <br>
            <a href="www" id="link13" name="link" > Buradaydim</a> <br>
            <a href="https" id="link12" name="link" > Orada olacagim</a> <br>
            <a href="hajd" id="link11" name="link" > Burada olmayacagim</a> <br>
     
            <h1>Hos Geldiniz</h1>
    </body>
</html>