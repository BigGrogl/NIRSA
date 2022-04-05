<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <form  method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <label>ID: <input type="number" name="id" required></label><br>
            <input type="submit" name="submit" value="SUBMIT">
        </form>
<?php
    $id="";
    if(isset($_POST['submit'])){
        $id=$_POST['id'];
    };
    $con=mysqli_connect("localhost","root","","uporabniki");
    mysqli_query($con,"SET NAMES UTF8");
    $sql="DELETE FROM ime_priimek WHERE id='$id'";
    mysqli_query($con,$sql);
    mysqli_close($con);
?>

    </body>
</html>