 
<?php
$con = mysqli_connect("localhost", "root", "", "foodorder");
$un = $_POST["username"];
$pwd = $_POST["password"];
// $uid = $_GET["userid"];
$qry = "select Password, userId  from user where UserName='$un'";
$result = mysqli_query($con, $qry);
if ($un == null) {
    echo '<script> alert("Login Error!!");</script>';
    header('refresh:0;url=HomePage.html');
} else {

    while ($row = mysqli_fetch_array($result)) {
        if ($pwd == $row['Password']) {
            echo '<script> alert("Login Successful");</script>';

            session_start();
            $_SESSION['Uname'] = $un;
            $_SESSION['UserId'] = $row['userId'];

            header('refresh:0;url=Dashboard.php');
        } else {
            echo '<script> alert("Incorrect UserName/User Type/Password");</script>';
            header('refresh:0;url=HomePage.html');
        }
    }
}
?>
