<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="add_row_to_db.php" >
        Username <input type="text" name="username"><br><br>
        Password <input type="password" name="psd"><br><br>
        <input type="submit" value="OK">
    </form>

    <?php
    // my local port is 3307
    $con=new mysqli('localhost:3307','root', '', 'test');
    if($con->connect_error)
    {
        echo "Database ile baglanmada sorun yasandi";
        exit();
    }
    else
    {
        
        if(isset($_POST['username'])||isset($_POST['psd']))
        {
            echo "buraya geldi";
            $username=$_POST['username'];
            $password=$_POST['psd'];
            $con->query("INSERT INTO `users`(`Username`, `Password`) VALUES ('$username','$password')");
            echo "Kayit basariyla kaydedildi";
        }
    }
    $con->close();
    ?>
</body>
</html>
