<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <form  method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <label>IME: <input type="text" name="ime" required></label><br>
            <label>PRIIMEK: <input type="text" name="priimek" required></label><br>
            <input type="submit" name="submit" value="SUBMIT">
        </form>
<?php
    $ime=$priimek="";
    if(isset($_POST['submit'])){
        $ime=$_POST['ime'];
        $priimek=$_POST['priimek'];
    }
    $con=mysqli_connect("localhost","root","","uporabniki");
    mysqli_query($con,"SET NAMES UTF8");
    $sql="INSERT INTO ime_priimek (ime,priimek) VALUES ('$ime','$priimek')";
    mysqli_query($con,$sql);
    mysqli_close($con);
    echo "Uspesno smo vnesli ".$ime." ".$priimek.".";
?>

    </body>
</html>
