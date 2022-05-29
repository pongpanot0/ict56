
<?php
session_start();
include("Lib/condb.php");
include_once("Lib/inc.php");

if (isset($_POST['btlogin'])) {
    $user = $_POST['user'];
    $Password = $_POST['Password'];

    $sql1 = "select * from admin where admin_id='$user' and admin_pass='$Password' ";
    $res1 = mysqli_query($con, $sql1);
    $row1 = mysqli_num_rows($res1);
    $sql2 = "select * from member where mem_id='$user' and mem_pass='$Password'";
    $res2 = mysqli_query($con, $sql2);
    $row2 = mysqli_num_rows($res2);
    $sql3 = "select * from officer where officer_id='$user' and officer_pass='$Password' ";
    $res3 = mysqli_query($con, $sql3);
    $row3 = mysqli_num_rows($res3);

    if ($row1 > 0) {
        $row11 = mysqli_fetch_assoc($res1);
        $id = $row11['admin_id'];
        $fname = $row11['admin_fname'];
        $lname = $row11['admin_lname'];
        $_SESSION['usr'] = $user;
        $_SESSION['pwd'] = $Password;
        echo '<meta http-equiv="refresh" content="0;url=index.php">';
        exit();
    } else if ($row2 > 0) {

        $row22 = mysqli_fetch_assoc($res2);
        $id = $row22['mem_id'];
        $fname = $row22['mem_fname'];
        $lname = $row22['mem_lname'];
        $_SESSION['usr'] = $user;
        $_SESSION['pwd'] = $Password;
        echo '<meta http-equiv="refresh" content="0;url=index.php">';
        exit();
    } else if ($row3 > 0) {
        $row33 = mysqli_fetch_assoc($res3);
        $id = $row33['officer_id'];
        $fname = $row33['officer_fname'];
        $lname = $row33['officer_lname'];
        $_SESSION['usr'] = $user;
        $_SESSION['pwd'] = $Password;
        echo '<meta http-equiv="refresh" content="0;url=index.php">';
        exit();
    } else {
        echo '<meta http-equiv="refresh" content="0;url=index.php?Node=frm_login">';
    }
}
?>
