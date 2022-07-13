 
<?php
$con = mysqli_connect("localhost", "root", "", "foodorder");
$id = $_GET["key"];
$qry = "delete from fooditem where ItemID=$id";
if (mysqli_query($con, $qry) == true) {
    echo "<script> alert('Record Deleted');</script>";
    echo "<script> window.location='adminLogin.php';</script>";
}
?>
