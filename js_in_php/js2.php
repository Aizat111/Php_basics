<!DOCTYPE html>
<html>
    <head>
<!-- Hocanin derste gosterdigi ornek-->
    </head>
    <body>
    <script type="text/javascript">
    function topla()
    {
        //birinci ve ikinci textfieldde yazilmis text yanyana gelir
        c=parseInt(document.test1.bir.value) + parseInt(document.test1.iki.value);
        document.test1.bilgi.value=c;
        //**parseInt() fonksiyonu string degerini integer degerine ceviriyor */
    }
    function deneme()
    {
        //sayfadaki formlar kaybolur ortaya list gelir
        document.test1.innerHTML="<ol name='test1'><li>1</li><li>2</li><li>3</li><li>4</li></ol>";
    }
    function radyotest(radyo){
        if(document.test1.rbut[0].checked==true)
        document.test1.bilgi.value="Besiktas secilmis";//bilgi text fieldine bu cumle yazilir
        else if(document.test1.rbut[1].checked==true)
        document.test1.bilgi.value="GS secilmis";
        else if(document.test1.rbut[2].checked==true)
        document.test1.bilgi.value="Fener secilmis";
        alert(radyo.value);
    }
    </script>
    <!--submit reset butonlarina basildiginda asagidaki alert sinyallerini alacaz-->
    <form name="test1" onSubmit="alert('Submit olayi')" onReset="alert('Reset olayi')">
    Bir <input type="text" name="bir" value=" ">
    Iki <input type="text" name="iki" value=" ">
    Bilgi <input type="text" name="bilgi" value=" ">
    <br />
    <input type="radio" name="rbut" value="bjk" onClick="radyotest(this)"> Besiktas
    <input type="radio" name="rbut" value="gs" onClick="radyotest(document.test1.rbut[1])"> Galatasaray
    <input type="radio" name="rbut" value="fnr" onClick="radyotest(this)"> Fenerbahce

    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
    <input type="button" value="Topla" onClick="topla()">
    <input type="button" value="Deneme" onClick="deneme()">
    </form>
    </body>

</html>