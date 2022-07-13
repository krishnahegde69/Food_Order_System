 
<?php
$con = mysqli_connect("localhost", "root", "", "foodorder");
$uid = $_POST["userid"];
$un = $_POST["username"];
$pwd = $_POST["password"];
$phno = $_POST["phoneno"];
$eml = $_POST["email"];
$dadd = $_POST['DeliAdd'];

$qry = "Insert into user values ('$uid','$un','$pwd','$eml',$phno,'$dadd')";
if (mysqli_query($con, $qry) == TRUE) {
    echo '<script> alert("Successful");</script>';
    header('refresh:0;url=HomePage.html');
} else
    echo '<script> alert("Please try again");</script>';
?>
