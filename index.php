<?php
session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
 
    // يتم السماح بالوصول إلى صفحة تسجيل الدخول
  echo  
  "<!DOCTYPE html>
  <html lang='en' dir='ltr'>
  <head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'>



  <title> Librairie Achattari</title>
  <link rel='icon' href='image/icon1.icon'>
  <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
  <link rel='stylesheet' href='style/style1.css'>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  <style>
  html, body {
    height: 100%;
    overflow: hidden;
  }
  
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
</div>
<section class='home-section' dir='rtl' style='text-align: right m !important;'>
  <a href='الكتب المدرسية.php' class='crd1' style='text-decoration: none;'>
  <div class='card-client card1'>
      <div class='user-picture '>
          <i class='bx bx-book'></i>
      </div>
      <p class='name-client'> الكتب المدرسية
          <span>Les manuels scolaires</span>
      </p>
  </div>
  </a>
<a href='الادوات المدرسية.php' class='crd1' style='text-decoration: none;'>
  <div class='card-client card2'>
      <div class='user-picture'>
          <i class='bx bxs-backpack'></i>
      </div>
      <p class='name-client'> الأدوات المدرسية
          <span>Les fournitures scolaires</span>
      </p>
  </div>
</a>
<a href='روايات و كتب متنوعة.php' class='crd1' style='text-decoration: none;'>
  <div class='card-client card3'>
      <div class='user-picture'>
          <i class='bx bx-book-open'></i>
      </div>
      <p class='name-client'> روايات وكتب متنوعة
          <span>Romans et livres divers</span>
      </p>
  </div>
</a>
<a href='العملاء.php' class='crd1' style='text-decoration: none;'>
  <div class='card-client card4'>
      <div class='user-picture'>
          <i class='bx bx-male' ></i>
      </div>
      <p class='name-client'> العملاء
          <span>Les clients</span>
      </p>
  </div>
</a>
<a href='البيع بالتقسيط.php' class='crd1' style='text-decoration: none;'>
  <div class='card-client card5'>
      <div class='user-picture'>
          <i class='bx bxs-store-alt'></i>
      </div>
      <p class='name-client'> بيع بالتقسيط
          <span>Vente à tempérament</span>
      </p>
  </div>
</a>
  <a href='البيع بالجملة.php' class='crd1' style='text-decoration: none;'>
  <div class='card-client card6'>
      <div class='user-picture'>
          <i class='bx bx-package' ></i>
      </div>
      <p class='name-client'> بيع بالجملة
          <span>Vente en gros</span>
      </p>
  </div>
</a>
  <a href='factur_t.php' class='crd1' style='text-decoration: none;'>
  <div class='card-client card7'>
      <div class='user-picture'>
      <i class='bx bx-file-find'></i>
          </div>
      <p class='name-client'> فواتير عملاء تقسيط
          <span>Factures clients à tempérament</span>
      </p>
  </div>
</a>
  <a href='factur_j.php' class='crd1' style='text-decoration: none;'>
  <div class='card-client card8'>
      <div class='user-picture'>
      <i class='bx bxs-file-find' ></i>
         
      </div>
      <p class='name-client'> فواتير عملاء الجملة
          <span>Factures clients en gros</span>
      </p>
  </div>
</a>

<script>
let sidebar = document.querySelector('.sidebar');
let closeBtn = document.querySelector('#btn');

closeBtn.addEventListener('click', ()=>{
  sidebar.classList.toggle('open');
  menuBtnChange();//calling the function(optional)
});

function menuBtnChange() {
 if(sidebar.classList.contains('open')){
   closeBtn.classList.replace('bx-menu', 'bx-menu-alt-left');
 }else {
   closeBtn.classList.replace('bx-menu-alt-left','bx-menu');
 }
}
</script>
<script>
  document.addEventListener('touchmove', function(event) {
    event.preventDefault();
    event.stopPropagation();
  }, { passive: false });
</script> 
<script>
    document.addEventListener('touchstart', function(event) {
        if (event.touches.length > 1) {
            event.preventDefault();
        }
    }, { passive: false });
    
    var lastTouchEnd = 0;
    document.addEventListener('touchend', function(event) {
        var now = (new Date()).getTime();
        if (now - lastTouchEnd <= 300) {
            event.preventDefault();
        }
        lastTouchEnd = now;
    }, false);
</script>
";

include('connexion.php');


$sql = "SELECT qnt FROM books_school WHERE qnt < 20";
$result = mysqli_query($cnx, $sql);
$a = 0;
if ($result && mysqli_num_rows($result) <> 0) {
    $a = 1;
}

$sql1 = "SELECT qnt FROM روايات_و_كتب_متنوعة WHERE qnt < 20";
$result1 = mysqli_query($cnx, $sql1);
$b = 0;
if ($result1 && mysqli_num_rows($result1) <> 0) {
    $b = 1;
}

$sql2 = "SELECT qnt FROM الادوات_المدرسية WHERE qnt < 20";
$result2 = mysqli_query($cnx, $sql2);
$c = 0;
if ($result2 && mysqli_num_rows($result2) <> 0) {
    $c = 1;
}

echo '<script>';
echo 'window.addEventListener("DOMContentLoaded", function() {';
echo '  var message = "";';

if ($a == 1) {
    echo 'message += "\nهناك كمية أقل من 20 في الكتب المدرسية\n";';
}

if ($b == 1) {
    echo 'message += "\nهناك كمية أقل من 20 في روايات والكتب المدرسية\n";';
}

if ($c == 1) {
    echo 'message += "\nهناك كمية أقل من 20 في الأدوات المدرسية\n";';
}

echo '  if (message !== "") {';
echo '    alert(message);';
echo '  }';
echo '});';
echo '</script>';


  } else {
    // إعادة توجيه المستخدم إلى صفحة تسجيل الدخول
    session_destroy();
    header('Location: login.php');
    exit;
  }
?>


