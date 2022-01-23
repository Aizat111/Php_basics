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
    
    //connect to database with name test
    $db= new mysqli('localhost:3307','root','','test');
    if($db->connect_error)
    {
        echo "Connection failed";
        exit();
    }
    else
    {
        $result=$db->query('select * from users');
        //take number of rows on the table
        $rowcount=mysqli_num_rows($result);
        echo "There are ".$rowcount." rows on the table<br>";
        echo'<table border="1">';
        while ($row =$result->fetch_assoc())
        {
            echo "<tr>";
            printf("<td>%s</td><td>%s</td></tr>",$row['Username'],$row['Password']);
        }
        echo "</table>";

    }
    $db->close();
    ?>
</body>
</html>