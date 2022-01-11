<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body  id="title"  >
    <script  type="text/javascript">
        function ChangeBody()
        {
            document.getElementById("title").innerHTML="<ol><li>Elma<ul><li>Sari</li><li>Kirmizi</li><li>Yesil</li></ul></li><li>Portakal<ul><li>Buyuk</li><li>Kucuk</li></ul></li></ol>";
        }
     
    </script>
    <h1 > This is a title</h1>
    <input type="submit" onClick="ChangeBody()" value="Change Body" >
</body>
</html>