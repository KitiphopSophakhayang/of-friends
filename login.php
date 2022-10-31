<!DOCTYPE html>
<html long="en">
    <meta charset="UTF-8"> 
    <body >     
        
    <div style="text-align:center;width:100%;" >    
<?php
    $user_name = $_GET["fname"];
    echo "your username is $user_name <br>";
    $user_pass = $_GET["pname"];
    echo "your passname is $user_pass <br><br>";

?>
     <form action="main.html">
        <input type="submit" name="suname" value="เข้าสู่ระบบ">
     </form>
     </div>

</body>
</html>