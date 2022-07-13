 
<?php
session_start();
$adminId = $_SESSION['Uname'];
$con = mysqli_connect("localhost", "root", "", "foodorder");
$cat = $_POST["Category"];
$ItemName = $_POST['ItemName'];
$Price = $_POST['Price'];

$qry = "select max(ItemId) as maxid from fooditem ";
$itid = 0;
$run = mysqli_query($con, $qry);
while ($rows = mysqli_fetch_array($run)) {
    $itid = $rows[0];
}
$qry = "Insert into fooditem values ('$ItemName',$itid+1,$Price,$cat,$adminId)";
if (mysqli_query($con, $qry) == TRUE) {
    echo '<script> alert("Menu Item Added Successful");</script>';
    header('refresh:0;url=adminLogin.php');
} else {
    echo '<script> alert("Please try again");</script>';
    header('refresh:0;url=adminLogin.php');
}
?>
