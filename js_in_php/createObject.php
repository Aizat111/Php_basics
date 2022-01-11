<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        document.write("<h1> Balik Metni</h1>");
        document.write("<p> Paragraf Metni</p>");
        //loop in javascript
        for (i=1;i<6;i++)
        {
            document.write("Dongu denemesi: "+i+"<br>");

        }
        //function in javascript
        function dene_func(v,f)
        {
            return (v*0.4+f*0.6);
        }
        //create object in javascript
        var ders= new Object();
        ders.adi="Algoritma";
        ders.vize=80;
        ders.final=90;
        ders.hesapla=dene_func;
        ders.ortalama=ders.hesapla(ders.vize,ders.final);

        document.write(ders.adi+" "+ders.vize+" "+ders.final+"<br>");
        document.write(ders.adi+" "+ders.ortalama+"<br>");
        
        //create new Object
        var student= new Object();
        student.name="MK";
        student.surname="Omur";
        student.lesson=ders;

        document.write(student.name+" "+student.surname+"'un "+student.lesson.adi+" dersinden aldigi ortalama notu= "+student.lesson.ortalama);

    </script>
</body>
</html>