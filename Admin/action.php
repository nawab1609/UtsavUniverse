<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "utsav_universe") or die("not connect");


if (isset($_POST['log'])) //login
{
    $user = $_POST["user"];
    $pass = $_POST["password"];

    $_SESSION['user'] = $user;

    $_SESSION['status'] = true;

    $qry = "select * from admin where username='$user' and password='$pass'";
    mysqli_query($conn, $qry) or die("not fire");


    if (mysqli_affected_rows($conn)) {

        header("location:Dashboard.php");
        // echo  $_SESSION['user'];
    } else {
        header("location:index.php?error=1");
        // echo "retry";
    }
}
if(isset($_GET['id'])) // for delete
{
    $id=$_GET['id'];
    $qry="delete from booking where id=$id";
    mysqli_query($conn,$qry) or die("not fire");
    header("location:Dashboard.php");
}


if(isset($_GET['ids'])) // for delete
{
    $id=$_GET['ids'];
    $qry="delete from contact where id=$id";
    mysqli_query($conn,$qry) or die("not fire");
    header("location:ContactDetails.php");
}




if(isset($_GET['logout'])==1)
{
    session_destroy();

    header("location:index.php");
}



?>