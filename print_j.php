<?php 
session_start();
include "connexion.php";

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {

    if (isset($_GET['file'])) {
        $fileName = $_GET['file'];
        $filePath = 'C:/xampp/htdocs/Project de stage/pdf_j/' . $fileName;
        
        // التحقق من وجود الملف
        if (file_exists($filePath)) {
            // تحديد نوع المحتوى وعرض الملف
            header('Content-Type: application/pdf');
            readfile($filePath);
        } else {
            echo "لم يتم العثور على الملف.";
        }
    }
} else {
    // إعادة توجيه المستخدم إلى صفحة تسجيل الدخول
    session_destroy();
    header('Location: login.php');
    exit;
  }

?>