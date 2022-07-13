 
<?php
$con = mysqli_connect("localhost", "root", "", "foodorder");
$id = $_POST["ItemId"];
$in = $_POST["ItemName"];
$ip = $_POST["Price"];
$qry = "update  foodItem set ItemName='$in', Price=$ip where ItemId=$id";
if (mysqli_query($con, $qry) == true) {
    echo "<script> alert('Item Record updated');</script>";
    echo "<script> window.location='adminLogin.php';</script>";
}
?>
