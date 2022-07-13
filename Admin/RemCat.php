 
<?php
$con = mysqli_connect("localhost", "root", "", "foodorder");
$id = $_POST["abc"];
$qry = "delete from category where CatId=$id";
if (mysqli_query($con, $qry) == true) {
    echo "<script> alert('Record Deleted');</script>";
    echo "<script> window.location='adminLogin.php';</script>";
}
?>
