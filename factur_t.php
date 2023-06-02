<?php

session_start();
include "connexion.php";

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // يتم السماح بالوصول إلى صفحة تسجيل الدخول
  echo  
  "<!DOCTYPE html>
  <html lang='en' dir='ltr'>
  <head>
  <meta charset='UTF-8'>
  <title> Librairie Achattari</title>
  <link rel='icon' href='image/icon1.icon'>
  <link rel='stylesheet' href='style/style1.css'>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>


  <style>
  .crd1{
    text-decoration: none;
    height: 260px;
  }.home-section{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
      position: relative;
      background: #E4E9F7;
      min-height: 100vh;
      top: 0;
      width: calc(94% );
      transition: all 0.5s ease;
      z-index: 2;
      
      padding-top: 35px;
    }
    body{
      background-color: #E4E9F7;
     }
     table td, table th {
      border: 1px solid #000;
      padding: 8px;
      text-align:center;
    }
    a{
      text-decoration: none;
      color:#000;
      font-weight: bold;
    }
    a:hover{
      color:#CD1818;
    }
      table th{ 
        text-align:center;
        padding-top: 12px;
        padding-bottom: 12px;
        font-size:20px;
        background-color: #04AA6D;
        color: #000;
      }
      table tr:nth-child(even){background-color: #f2f2f2;}

      table tr:hover {background-color: #ddd;}
    
    table{
      font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 70%;
   margin:auto;
   margin-top:5vw;
   margin-bottom:5vw;

    }
    .div_Left{
      width: calc(100% - 78px );
    }
    .h1{
  
      text-align: center;
      background-color: #000000;
      color: #FFF;
      padding-top: 5px;
      padding-bottom: 5px;
      width: 100%;
      height: 55px;
     
    }
    #delete-all-form{

         display:flex;
      
         justify-content: center;
      
        }
      
        
      
        #delete-all-input {
      
         background-color: #f44336;
      
         color: #ffffff;
      
         padding: 10px 40px;
      
         border: none;
      
         cursor: pointer;
      
         margin-left: 10px;
      
         position:relative;
      
         top:-50px;
      
         font-size:20px;
      
        }
      
       
      
        #delete-all-input:hover {
      
         background-color: #d32f2f;
      
        }
  </style>

  
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  </head>
  <body >
  <div class='sidebar'  dir='rtl' style='text-align: right m !important;'>
    <div class='logo-details'>  
      <div class='icons'>
        <img src='Image1.icon' class='icon' style='width: 50px;'>
      </div>
      <div class='logo_name'>مكتبة الشطاري</div>
        <i class='bx bx-menu' id='btn'></i>
      </div>
      <ul class='nav-list'>
        <li>
          <span class='tooltip'>الصفحة الرئيسية</span>
            <a href='index.php'>
              <i class='bx bx-home-alt'></i>
          <span class='links_name'>الصفحة الرئيسية</span>
            </a>
        </li>
        <li>
          <span class='tooltip'>الكتب المدرسية</span>
            <a href='الكتب المدرسية.php'>
              <i class='bx bx-book'></i>
              <span class='links_name'>الكتب المدرسية</span>
            </a>    
        </li>
        <li>
          <a href='الادوات المدرسية.php'>
            <i class='bx bxs-backpack'></i>
            <span class='links_name'>الأدوات المدرسية</span>
          </a>
          <span class='tooltip'>الأدوات المدرسية</span>
        </li>
        <li>
          <a href='روايات و كتب متنوعة.php'>
            <i class='bx bx-book-open'></i>
            <span class='links_name'>روايات وكتب متنوعة</span>
          </a>
          <span class='tooltip'>روايات وكتب متنوعة</span>
        </li>
   <li>
     <a href='العملاء.php'>
      <i class='bx bx-male' ></i>
       <span class='links_name'>العملاء</span>
     </a>
     <span class='tooltip'>العملاء</span>
   </li>
   <li>
     <a href='البيع بالتقسيط.php'>
      <i class='bx bxs-store-alt'></i>
       <span class='links_name'>بيع بالتقسيط</span>
     </a>
     <span class='tooltip'>بيع بالتقسيط</span>
   </li>
   <li>
     <a href='البيع بالجملة.php'>
      <i class='bx bx-package' ></i>
       <span class='links_name'>بيع بالجملة</span>
     </a>
     <span class='tooltip'>بيع بالجملة</span>
   </li>
   <li>
     <a href='factur_t.php'>
      <i class='bx bx-file-find'></i>
       <span class='links_name'>فواتير عملاء تقسيط</span>
     </a>
     <span class='tooltip'>فواتير عملاء تقسيط</span>
   </li>
   <li>
     <a href='factur_j.php'>
      <i class='bx bxs-file-find' ></i>
       <span class='links_name'>فواتير عملاء الجملة</span>
     </a>
     <span class='tooltip'>فواتير عملاء الجملة</span>
   </li>
   <li class='profile'>
      <form action = '' method = 'post'>
      <a href='tr.php'>
      <i class='bx bx-log-out' id='log_out' name='s'>تسجيل الخروج</i>
      </a>
      </form>
   </li>
  </ul>
</div>";

// استعلام SELECT لاسترداد جميع الملفات من قاعدة البيانات

$sql = "SELECT * FROM pdf_t";
$result = $cnx->query($sql);


echo "<div class='div_Left'>
<h1 class='h1'>فواتير عملاء تقسيط</h1>
<table><tr><th><h3>الفواتير</h3></th><th><h3>التاريخ</h3></th></tr>";
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $fileName = $row['name'];
                $date = $row['date'];
                
                $filePath = 'C:/xampp/htdocs/Project de stage/pdf_t/' . $fileName;
                echo "<tr><td> <a href='print_t.php?file=$fileName'  target='_blank' >$fileName</a></td><td><h3>$date</h3></td></tr>";
            }
        } else {
            echo '<script>swal({title: ".في قاعدة البيانات PDF  لم يتم العثور على ",icon: "info",button: "حسنا",});</script>';
        }
echo "</table>
<form id='delete-all-form' action='trdelet.php' method='post'>

<input id='delete-all-input' type='submit' name='dele' value='حذف الكل '>

</form>
</div>";


    

echo'</body>
</html>';

} else {
  // إعادة توجيه المستخدم إلى صفحة تسجيل الدخول
  session_destroy();
  header('Location: login.php');
  exit;
}
?>