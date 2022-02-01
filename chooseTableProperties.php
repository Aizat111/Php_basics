<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            margin: 20%;
        }
    </style>
</head>

<body>
    <form  name="TableForm" method= "get" action="CreateTable.php">
        
        <!-- choose your table's color-->
        Red <input id="red" name="color" type="radio" value="red">
        Blue <input id="blue" name="color" type="radio" value="blue">
        Green <input id="green" name="color" type="radio" value="green">
        <table>
            <tr>
                <td>Count of rows </td>
                <td><input name="satir" type="text"></td>
            </tr>
            <tr>
                <td>Count of columns</td>
                <td><input name="sutun" type="text"></td>
            </tr>
            <tr>

            </tr>
            <tr>
                <td colspan="2"><input name="submit" type="submit" value="OK" ></td>
            </tr>
        </table>
      
    <br>
     

    </form>
</body>


</html>
