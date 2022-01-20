<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$con=new mysqli('localhost:3307','root','','test');
if($con->connect_error)
{
    echo "Conecction failed...";
}
else
{
    echo "Successfully connected.Host info: ".$con->host_info;

}
$con->close();
?>
</body>
</html>
