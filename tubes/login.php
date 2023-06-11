<?php 
require 'functions.php';
$name = "Login";
$conn = koneksi();
//variabel
$err        = "";
$username   = "";
$ingatpass  = "";

session_start();

if(isset($_SESSION['session_username'])) {
    header("location:index.php");
    exit();
}

if(isset($_POST['login'])) {
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $ingatpass  = $_POST['ingatpass'];

    if($username == '' or $password == '') {
        $err .= "<li>Silahkan masukan username dan juga password</li>";
    }else{
        $sql1 = "SELECT * 
                 FROM user 
                 WHERE username = '$username'";
        $q1   = mysqli_query($conn,$sql1);  
        $r1   = mysqli_fetch_assoc($q1);

        if($r1['username'] == '') {
            $err .= "<li>Username <b>$username</b> tidak tersedia.</li>";
        }elseif($r1['password'] != password_verify($password, $r1["password"])) {
            $err .= "<li>Password yang dimasukan tidak sesuai.</li>";
        }

        if(empty($err)) {
            $_SESSION['session_username'] = $username; //server
            $_SESSION['session_password'] = password_hash($password, PASSWORD_DEFAULT);

            if($ingatpass == 1) {
                $cookie_name = "cookie_username";
                $cookie_value = $username;
                $cookie_time = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name,$cookie_value,$cookie_time,"/");

                $cookie_name = "cookie_password";
                $cookie_value = password_hash($password, PASSWORD_DEFAULT);
                $cookie_time = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name,$cookie_value,$cookie_time,"/");
            }
            header("location:index.php");
        }
    }
}
require 'view/login.view.php';
?>