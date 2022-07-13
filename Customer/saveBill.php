 
<?php
$con = mysqli_connect("localhost", "root", "", "foodorder");
session_start();
// $tt = explode(",", substr($_SESSION['cart'], 1));
// $qty = $_POST['Quantity'];
// $prc = $_POST['Price'];
// $nam = $_SESSION['Uname'];
$mode = $_POST["PaymentMode"];
$items_quantity = $_SESSION['items_with_quantity'];
$oid = 0;
$bill_amount = 0;
$qry = "select max(OrderId) as maxid from Ordertable";
$user_id = $_SESSION['UserId'];
$run = mysqli_query($con, $qry);
while ($rows = mysqli_fetch_array($run)) {
    $oid = $rows[0] + 1;
}
foreach ($items_quantity as $key => $value) {
    $qry = 'select * from fooditem where ItemId=' . $key;
    $run = mysqli_query($con, $qry);



    while ($row = mysqli_fetch_array($run)) {
        $bill_amount = $bill_amount + $row["Price"] * $value;
        $qry = "Insert into ordertable values($oid," . $key . "," . $value . "," . $row["Price"] * $value . ")";
        $price = $row['Price'];
        $flag = mysqli_query($con, $qry);
    }
}

// for ($cnt = 0; $cnt < count($qty); $cnt++) {
//     $qry = "Insert into ordertable values ($oid," . $tt[$cnt] . "," . $qty[$cnt] . "," . $qty[$cnt] * $prc[$cnt] . ")";
//     $billAmt = $billAmt + $qty[$cnt] * $prc[$cnt];
//     mysqli_query($con, $qry);
// }
$qry = "Insert into orderpayment(orderid, userid, amount, paymentmode) values($oid, '$user_id',$bill_amount, '$mode' )";
// echo ($qry);
if (mysqli_query($con, $qry) == TRUE) {
    echo '<script> alert("Order Placed Successful");</script>';
    header('refresh:0;url=dashboard.php');
} else {
    echo '<script> alert("Please try again");</script>';
    header('refresh:0;url=dashboard.php');
}
?>
