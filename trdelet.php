<?php

include('connexion.php');
session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
  // يتم السماح بالوصول إلى صفحة تسجيل الدخول
if (isset($_GET['code'])) {
    $code = mysqli_real_escape_string($cnx, $_GET['code']);
    $query = "DELETE FROM `books_school` WHERE code = '$code'";
    $run = mysqli_query($cnx, $query);
    if ($run) {
      header('location: الكتب المدرسية.php');
      exit();
    } else {
      echo "Error: " ;
    }
  }
  if (isset($_GET['code1'])) {
    $code = mysqli_real_escape_string($cnx, $_GET['code1']);
    $query = "DELETE FROM `الادوات_المدرسية` WHERE code = '$code'";
    $run = mysqli_query($cnx, $query);
    if ($run) {
      header('location: الادوات المدرسية.php');
      exit();
    } else {
      echo "Error: " ;
    }
  }
  if (isset($_GET['code3'])) {
    $code = mysqli_real_escape_string($cnx, $_GET['code3']);
    $query = "DELETE FROM `روايات_و_كتب_متنوعة` WHERE code = '$code'";
    $run = mysqli_query($cnx, $query);
    if ($run) {
      header('location: روايات و كتب متنوعة.php');
      exit();
    } else {
      echo "Error: " ;
    }
  }

  if (isset($_GET['code2'])) {
    $code = mysqli_real_escape_string($cnx, $_GET['code2']);
    $query = "DELETE FROM `العملاء` WHERE code = '$code'";
    $run = mysqli_query($cnx, $query);
    if ($run) {
      header('location: العملاء.php');
      exit();
    } else {
      echo "Error: " ;
    }
  }

if(isset($_POST['next'])){
  $req = "DELETE FROM `factur_t`";
  $result = mysqli_query($cnx, $req);
  header('location: البيع بالتقسيط.php');
}
if(isset($_POST['next1'])){
  $req = "DELETE FROM `factur_j`";
  $result = mysqli_query($cnx, $req);
  $r = "DELETE FROM `العميل`";
  $res = mysqli_query($cnx, $r);
  header('location: البيع بالجملة.php');
}

if (isset($_GET['jj']) && isset($_GET['jjj']) && isset($_GET['jjjj'])){
  $jjjj = ($_GET['jjjj']); 
  $jj = ($_GET['jj']);
  $jjj =($_GET['jjj']); 
  

  $req0 = "SELECT * FROM books_school WHERE code = '$jjjj'";
  $resultat0 = mysqli_query($cnx, $req0);

  $req1 = "SELECT * FROM `الادوات_المدرسية` WHERE code = '$jjjj'";
  $resultat1 = mysqli_query($cnx, $req1);

  $req2 = "SELECT * FROM `روايات_و_كتب_متنوعة` WHERE code = '$jjjj'";
  $resultat2 = mysqli_query($cnx, $req2);
  if ($resultat0 && mysqli_num_rows($resultat0) == 1) {
    while($row1 = mysqli_fetch_assoc($resultat0)){
      $req = "UPDATE `books_school` SET `qnt`= `qnt` +'" . $jjj . "' WHERE code = $jjjj";
      $resultat = mysqli_query($cnx, $req);
      if($resultat){
        $re = "DELETE FROM `factur_j` WHERE id = $jj";
        $result = mysqli_query($cnx, $re);
        header('location: البيع بالجملة.php');
       
      }
      
    }
  }
  elseif ($resultat1 && mysqli_num_rows($resultat1) == 1) {
    while($row1 = mysqli_fetch_assoc($resultat1)){
      $req = "UPDATE `الادوات_المدرسية` SET `qnt`= `qnt` +'" . $jjj . "' WHERE code = $jjjj";
      $resultat = mysqli_query($cnx, $req);
      $re = "DELETE FROM `factur_j` WHERE id = $jj";
      $result = mysqli_query($cnx, $re);
      header('location: البيع بالجملة.php');
    }
  }
  elseif ($resultat2 && mysqli_num_rows($resultat2) == 1) {
    while($row1 = mysqli_fetch_assoc($resultat2)){
      $req = "UPDATE `روايات_و_كتب_متنوعة` SET `qnt`= `qnt` +'" . $jjj . "' WHERE code = $jjjj";
      $resultat = mysqli_query($cnx, $req);
      $re = "DELETE FROM `factur_j` WHERE id = $jj";
      $result = mysqli_query($cnx, $re);
      header('location: البيع بالجملة.php');
    }
  } else {
    echo '404';
  }
}


if (isset($_GET['d_code']) && isset($_GET['d_qnt']) && isset($_GET['d_id'])){
  $d_code = ($_GET['d_code']); 
  $d_id = ($_GET['d_id']);
  $d_qnt =($_GET['d_qnt']); 
  

  $req0 = "SELECT * FROM books_school WHERE code = '$d_code'";
  $resultat0 = mysqli_query($cnx, $req0);

  $req1 = "SELECT * FROM `الادوات_المدرسية` WHERE code = '$d_code'";
  $resultat1 = mysqli_query($cnx, $req1);

  $req2 = "SELECT * FROM `روايات_و_كتب_متنوعة` WHERE code = '$d_code'";
  $resultat2 = mysqli_query($cnx, $req2);
  if ($resultat0 && mysqli_num_rows($resultat0) == 1) {
    while($row1 = mysqli_fetch_assoc($resultat0)){
      $req = "UPDATE `books_school` SET `qnt`= `qnt` +'" . $d_qnt . "' WHERE code = $d_code";
      $resultat = mysqli_query($cnx, $req);
      if($resultat){
        $re = "DELETE FROM `factur_t` WHERE id = $d_id";
        $result = mysqli_query($cnx, $re);
        header('location: البيع بالتقسيط.php');
      }
      
    }
  }
  elseif ($resultat1 && mysqli_num_rows($resultat1) == 1) {
    while($row1 = mysqli_fetch_assoc($resultat1)){
      $req = "UPDATE `الادوات_المدرسية` SET `qnt`= `qnt` +'" . $d_qnt . "' WHERE code = $d_code";
      $resultat = mysqli_query($cnx, $req);
      $re = "DELETE FROM `factur_t` WHERE id = $d_id";
      $result = mysqli_query($cnx, $re);
      header('location: البيع بالتقسيط.php');
    }
  }
  elseif ($resultat2 && mysqli_num_rows($resultat2) == 1) {
    while($row1 = mysqli_fetch_assoc($resultat2)){
      $req = "UPDATE `روايات_و_كتب_متنوعة` SET `qnt`= `qnt` +'" . $d_qnt . "' WHERE code = $d_code";
      $resultat = mysqli_query($cnx, $req);
      $re = "DELETE FROM `factur_t` WHERE id = $d_id";
      $result = mysqli_query($cnx, $re);
      header('location: البيع بالتقسيط.php');
    }
  } else {
    echo '404gggg';
  }
}

if(isset($_POST['del'])){

   $folderPath = 'C:/xampp/htdocs/Project de stage/pdf_j/';
  
  // فحص وجود المجلد
  
  if (!is_dir($folderPath)) {
  
    echo "المسار المحدد ليس مجلدًا صحيحًا.";
  
    exit;
  
  }
  
  $sql = "DELETE FROM `pdf_j`";
  
  $resl = $cnx->query($sql);
  
  // الحصول على قائمة الملفات داخل المجلد
  
  $files = glob($folderPath . '/*.pdf');
  
  $i = 0;
  
  // حذف كل ملف PDF
  
  foreach ($files as $file) {
  
    if (is_file($file)) {
  
      unlink($file);
  
     $i = 1;
  
    }
  
   
  
  }
  
  if($i = 1){
  
     header("Location:factur_j.php");
  
    }
  
  }
  
  
  
  
  
  if(isset($_POST['dele'])){
  
   $folderPath = 'C:/xampp/htdocs/Project de stage/pdf_t/';
  
  // فحص وجود المجلد
  
  if (!is_dir($folderPath)) {
  
    echo "المسار المحدد ليس مجلدًا صحيحًا.";
  
    exit;
  
  }
  
  $sql = "DELETE FROM `pdf_t`";
  
  $resl = $cnx->query($sql);
  
  // الحصول على قائمة الملفات داخل المجلد
  
  $files = glob($folderPath . '/*.pdf');
  
  $i = 0;
  
  // حذف كل ملف PDF
  
  foreach ($files as $file) {
  
    if (is_file($file)) {
  
      unlink($file);
  
     $i = 1;
  
    }
  
   
  
  }
  
  if($i = 1){
  
     header("Location:factur_t.php");
  
    }
  
  }

  
} else {
  // إعادة توجيه المستخدم إلى صفحة تسجيل الدخول
  session_destroy();
  header('Location: login.php');
  exit;
}
  ?>