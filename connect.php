<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    $conn=mysqli_connect("localhost","root","","school");
    if(!$conn)
    {
        die("Connect Failed".mysqli_error());
    }
    ?>
</body>
</html>