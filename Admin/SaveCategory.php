 
<?php
session_start();
$adminId = $_SESSION['Uname'];
//var_dump($adminId);
$con = mysqli_connect("localhost", "root", "", "foodorder");
$cd = $_POST["CatName"];

$qry = "select max(CatId) as maxid from category";
$id = 0;
$run = mysqli_query($con, $qry);
while ($rows = mysqli_fetch_array($run)) {
    $id = $rows[0];
}

$qry = "Insert into category values ('$cd',$id+1,$adminId)";
if (mysqli_query($con, $qry) == TRUE) {
    echo '<script> alert("Category Added Successful");</script>';
    header('refresh:0;url=adminLogin.php');
} else {
    echo '<script> alert("Please try again");</script>';
    header('refresh:0;url=adminLogin.php');
}
?>
