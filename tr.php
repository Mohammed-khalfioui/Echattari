<?php
include("connexion.php");
session_start();

$log = "nahda";
$pas = "1234";

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $login =$_POST["login"];
    $password = $_POST["password"];
    // التحقق من اسم المستخدم وكلمة المرور
    //   $req = "select * from login";
    //   $result = mysqli_query($cnx, $req);
  if ($login === $log && $password === $pas){
    // تخزين القيمة في الجلسة
    $_SESSION['logged_in'] = true;
    // توجيه المستخدم إلى الصفحة الرئيسية
    header("Location:index.php");
    exit;
  }
  else{
    // عرض رسالة الخطأ
    session_destroy();
    header("Location: login.php?m");
  }
} else {
  // التحقق من وجود القيمة المخزنة في الجلسة
  session_destroy();
  header("Location: login.php");
}
if(isset($_POST["s"])){
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true){
    session_destroy();
    header("Location: login.php?h=h");
}
}

?>