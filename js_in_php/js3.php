<!DOCTYPE html>
<html>
    <head>
<!-- Hocanin derste gosterdigi ornek-->
    </head>
    <body>
        <script>
            function kontrol(ch)
            {
                if(ch.checked==true)
                document.test1.bilgi.value= ch.value + " secilmis";
                else 
                document.test1.bilgi.value= ch.value + " secilmemis";
            }
            function kontrol2(ch)
            {
                if(ch.checked==true)
                document.test1.bilgi.value= ch.value + " abc";
                else 
                document.test1.bilgi.value= ch.value + " def";
            }
            switchClick()//anlamsiz bir sey olmus, hoca da anlamamis zaten ne yazmak istedigini
            {
                document.test1.chk[0].onClick="kontrol2(this)";
            }
        </script>
        <form name="test1">
            <input type="checkbox" name="chk" value="BMW" onClick="kontrol(this)">BMW <br/>
            <input type="checkbox" name="chk" value="Audi" onClick="kontrol(this)">Audi<br/>
            <input type="checkbox" name="chk" value="Mercedes" onClick="kontrol(this)">Mercedes <br/>

            Bilgi <input type="text" name="bilgi" value=""> <br> <br>

            <input type="button" value="BMW" onClick="document.test1.chk[0].checked=!document.test1.chk[0].checked">
            <input type="button" value="Audi" onClick="document.test1.chk[1].checked=true">
            <input type="button" value="Mercedes" onClick="document.test1.chk[2].checked=true">
            <input type="button" value="Switch" onClick="switchClick()">
                </form>
    </body>
</html>