<?php
//create table with properties from CreateTablewithForm.php
if(isset($_GET['submit']))
{
   
    if(isset($_GET['color'])&& isset($_GET['satir'])&& isset($_GET['sutun']))
    { echo "<br> Buyurun tablonuz <br>";
        //find your color
        if($_GET['color']=="red")
        {
            printf('<table border="2" style="color:red">');
        }
        if($_GET['color']=="blue")
        {
            printf('<table border="1" dashing style="color:blue">');
        }
        if($_GET['color']=="green")
        {
            printf('<table border="0" style="color:green">');
        }
        for($i=0;$i<$_GET['satir'];$i++)
        {

            printf("<tr>");
            for($j=0;$j<$_GET['sutun'];$j++)
            {
                printf("<td>".($i+1).".".($j+1)."eleman </td>");
            }
            printf("</tr>");
        }
    }
}
?>