<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <form  method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <label>ID: <input type="number" name="id" required></label><br>
            <label>IME: <input type="text" name="ime" required></label><br>
            <label>PRIIMEK: <input type="text" name="priimek" required></label><br>
            <input type="submit" name="submit" value="SUBMIT">
        </form>
<?php
    $ime=$priimek=$id="";
    if(isset($_POST['submit'])){
        $ime=$_POST['ime'];
        $priimek=$_POST['priimek'];
        $id=$_POST['id'];
    };
    $con=mysqli_connect("localhost","root","","uporabniki");
    mysqli_query($con,"SET NAMES UTF8");
    $sql="UPDATE ime_priimek SET ime='$ime',priimek='$priimek' WHERE id='$id'";
    mysqli_query($con,$sql);
    mysqli_close($con);
?>

    </body>
</html>