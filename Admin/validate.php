<?php

include_once('connection.php');

function test_input($data)
{

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adminname = test_input($_POST["adminname"]);
    $password = test_input($_POST["password"]);
    $stmt = $conn->prepare("SELECT * FROM admin where adminname='$adminname' ");
    $stmt->execute();
    $user = $stmt->fetchAll();
    if ($adminname == null) {
        echo "<script language='javascript'>";
        echo "alert('Login Error!!!!')";
        echo "</script>";
        header('refresh:0;url= adminlogin.html');
    } else {

        if (($user[0]['AdminName'] == $adminname) &&
            ($user[0]['Password'] == $password)
        ) {
            session_start();
            $_SESSION['Uname'] = $user[0]['AdminId'];
            header("Location: adminlogin.php");
        } else {
            echo "<script language='javascript'>";
            echo "alert('Login unsuccessful!!!!')";
            echo "</script>";
            die(header('refresh:0;url= adminlogin.html'));
        }
    }
}
