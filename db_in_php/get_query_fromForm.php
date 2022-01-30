<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Document</title>  
</head>  
<body>  
    <!--first body-->
    <form action="db.php" method="get">  
        Your query: <input type="text" name="query">  
        <input type="submit" value="Send Query">  
    </form>  
  

    <?php  
        //connect to database
        $con= new mysqli('localhost','root','','test') ; 
        if($con->connect_error)  
        {  
            echo "There is a problem with database connection";  
        }  
        else  
        {  
            if(isset($_GET['query']))  
            {  
                $query=$_GET['query'];  
                
                //get column name
                $resultColumn=$con->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'test' AND TABLE_NAME = 'student'"); 
                while($row = $resultColumn->fetch_assoc()){ 
                    $result[] = $row; 
                } 
                $columnArr = array_column($result, 'COLUMN_NAME'); 
                echo '<table border=1px>'; 
                foreach ($columnArr as $c) 
                { 
                    printf("<th>%s</th>",$c); 
                } 

                $result=$con->query($query);  
                while($row=$result->fetch_assoc()) 
                { 
                    printf("<tr><td>%d</td><td>%s</td></tr>",$row['id'],$row['name']); 
                } 
                echo  '</table>'; 
           
            }  
        } 
        $con->close();  
    ?>  
</body>  
</html>

