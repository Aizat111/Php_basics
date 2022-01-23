<!DOCTYPE html>

<!-- Hocanin derste gosterdigi ornek-->
<html>
    <head>
        <title>JS 1.ornek</title>
    </head>
    <body>
    
    <script type="text/javascript">
    function Goster(metin){
        alert("Metin kurusundaki son deger "+metin+"'dir");
    }    
    function Pasif(ttt){
        document.test1.bilgi.value=ttt.name+" pasif";
    }
    function Aktif(object){
        document.test1.bilgi.value=object.name + " aktif";
    }
    </script>
    
    <form name="test1">
    Adi <input type="text" name="adi" value="" onChange="Goster(this.value)" onFocus="Aktif(this)" onBlur="Pasif(this)" >

    Soyadi <input type="text" name="soyadi" value="" onKeyPress="Goster(document.test1s.soyadi.value">
    Bilgi <input type="text" name="bilgi" value="">
    </form>
    </body>
</html>