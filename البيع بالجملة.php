<?php
session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // يتم السماح بالوصول إلى صفحة تسجيل الدخول
  echo '

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title> CHATTARI</title>
    <link rel="stylesheet" href="style/style_jamla.css">
    <link rel="icon" href="image/icon1.icon">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <style>
    /* Google Font Link */
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins" , sans-serif;
    }
    
    section {
       
      display: flex;
      flex-wrap: wrap;
     
      position: relative;
      min-height: 100vh;
      top: 0;
      width: calc(100% - 78px );
      transition: all 0.5s ease;
      z-index: 3;
      left:0;
      
    
    }
    .sidebar{
      position: fixed;
      right: 0;
      top: 0;
      height: 100%;
      width: 78px;
      background: #11101D;
      padding: 6px 14px;
      z-index: 99;
      transition: all 0.5s ease;
    }
    .sidebar.open{
      width: 250px;
    }
    
    .sidebar .logo-details{
      height: 50px;
      display: flex;
      align-items: center;
      position: relative;
        
    }
    
    .sidebar .logo-details .icons .icon{
      opacity: 0;
      transition: all 0.5s ease;
      color:#11101D;
       font-size: 30px;
       margin-top: px;
    
    }
    .sidebar .logo-details .icons .icon1{
        z-index: -1;
        opacity: 0;
        transition: all 0.5s ease;
        color:#00a8e8;
        position: absolute;
        font-size: 50px;
      }
    .sidebar .logo-details .logo_name{
      color:#00a8e8;
      font-size: 20px;
      font-weight: 600;
      opacity: 0;
      transition: all 0.5s ease;
    }
    .sidebar.open .logo-details .icon1,
    .sidebar.open .logo-details .icon,
    .sidebar.open .logo-details .logo_name{
      opacity: 1;
    }
    .sidebar .logo-details #btn{
      position: absolute;
      top: 50%;
      left: 0;
      transform: translateY(-50%);
      font-size: 22px;
      transition: all 0.4s ease;
      font-size: 23px;
      text-align: center;
      cursor: pointer;
      transition: all 0.5s ease;
      
    }
    .sidebar.open .logo-details #btn{
      text-align: left;
      
    }
    .sidebar i{
        color: #fff;
        height: 60px;
        min-width: 50px;
        font-size: 28px;
        text-align: center;
        line-height: 60px;
      }
      
    .sidebar .nav-list{
      margin-top: 2px;
      height: 100%;
    }
    .sidebar li{
      position: relative;
      margin: 2px 0;
      list-style: none;
    }
    .sidebar li .tooltip{
      position: absolute;
      top: -20px;
      right: calc(100% + 15px);
      z-index: 3;
      background: #fff;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
      padding: 6px 12px;
      border-radius: 4px;
      font-size: 15px;
      font-weight: 400;
      opacity: 0;
      white-space: nowrap;
      pointer-events: none;
      transition: 0s;
    }
    .sidebar li:hover .tooltip{
      opacity: 1;
      pointer-events: auto;
      transition: all 0.4s ease;
      top: 50%;
      transform: translateY(-50%);
    }
    .sidebar.open li .tooltip{
      display: none;
    }
    
    
    .sidebar li a{
      display: flex;
      height: 100%;
      width: 100%;
      border-radius: 12px;
      align-items: center;
      text-decoration: none;
      transition: all 0.4s ease;
      background: #11101D;
    }
    .sidebar li a:hover{
        background: #FFF;
      }
    .sidebar li a .links_name{
      color: #fff;
      font-size: 15px;
      font-weight: 400;
      white-space: nowrap;
      opacity: 0;
      pointer-events: none;
      transition: 0.4s;
    }
    .sidebar.open li a .links_name{
      opacity: 1;
      pointer-events: auto;
    }
    .sidebar li a:hover .links_name,
    .sidebar li a:hover i{
      transition: all 0.5s ease;
      color: #11101D;
    }
    .sidebar li i{
      height: 50px;
      line-height: 50px;
      font-size: 18px;
      border-radius: 12px;
    }
    .sidebar li.profile{
      position: fixed;
      height: 60px;
      width: 78px;
      right: 0;
      bottom: -8px;
      padding: 10px 14px;
      background: #1d1b31;
      transition: all 0.5s ease;
      overflow: hidden;
    }
    .sidebar.open li.profile{
      width: 250px;
    }
    .sidebar li .profile-details{
      display: flex;
      align-items: center;
      flex-wrap: nowrap;
    }
    .sidebar li img{
      height: 40px;
      width: 40px;
      object-fit: cover;
      border-radius: 6px;
      margin-right: 10px;
    }
    .sidebar li.profile .name,
    .sidebar li.profile .job{
      font-size: 15px;
      font-weight: 400;
      color: #fff;
      white-space: nowrap;
      margin-right:10px
    }
    .sidebar li.profile .job{
      font-size: 12px;
    }
    .sidebar .profile #log_out{
      position: absolute;
      top: 50%;
      left: 0;
      transform: translateY(-50%);
      background: #1d1b31;
      width: 100%;
      height: 60px;
      line-height: 60px;
      border-radius: 0px;
      transition: all 0.5s ease;
    }
    .sidebar.open .profile #log_out{
      width: 50px;
      background: none;
    }
    
    
    @media (max-width: 420px) {
      .sidebar li .tooltip{
        display: none;
      }
    }
    
    /* {
        margin: 0;
        padding:0;
    }
    nav li{
        display: none;
    }
    .img_profile{
        width: 60px;
        height: 60px;
    }
    .logo{
        display: flex;
    }
    .logo h2{
        margin-right: 15px;
    }
    .icon_menu{
        cursor: pointer;
    }
    .var_menu{
        
    } */
    
    
    .table_calcu {
      background-color: #ffffff;
      border-color: #000000;
      border-style: solid;
      border-width: 2px;
      margin-left: auto;
      margin-right: auto;
      text-align: center;
     
    }
    input[readonly] {
      text-align: right;
    }
    
    input[type="button"] {
      padding: 0.2em;
    }
    
    .mainbutton {
      width: 100px;
        height: 80px;
        margin: 5px;
    }
    
    /* Select only the "op" buttons, on the right column. */
    input:not(.mainbutton):not([type="text"]) {
      width: 25px;
      
      
    }
    
    .table .th{
        background-color:DodgerBlue;
        border:1px solid black;
        color: #FFF;    
    }
    .table .td{
        border:1px solid black;
        text-align: center;    
    }
    
    .divInput .input{
      position: absolute;
      right: 0;
     
      background-color: rgb(111, 142, 32);
    }
    .h1{
      
      text-align: center;
      background-color: #000000;
      color: #FFF;
      padding-top: 5px;
      padding-bottom: 5px;
      width: 100%;
      height: 50px;
     
    }
    
    
     
     .button:active {
      color: white;
      box-shadow: 0 0.2rem #dfd9d9;
      transform: translateY(0.2rem);
     }
     
     .button:hover:not(:disabled) {
      background: lightcoral;
      color: white;
      text-shadow: 0 0.1rem #bcb4b4;
     }
     
     .button:disabled {
      cursor: auto;
      color: grey;
     }
    
    
    .divl3amil{
      position:relative;
      
    }
    
    .select{
      position:absolute;
      right:500px;
      top:-45px;
    }
    .hl3amil{
      position:absolute;
      right:500px;
    
    }
    .hl3amil1{
      position:absolute;
      right:500px;
      top:-15px;
      width:400px;
    }
    .hl3amil2{
      position:absolute;
      right:575px;
      top:-15px;
      width:400px;
    }
    .hl3amil3{
      position:absolute;
      right:500px;
      top:20px;
      width:700px;
    
    }
    .hl3amil4{
      position:absolute;
      right:575px;
      top:20px;
      width:700px;
    }
    .hl3amiltel{
      posittion:absolute;
      right:900px; 
      top:-15px;
    }
    .hl3amiltel3{
      posittion:absolute;
      right:950px; 
      top:20px;
    }
    .hl3amiltel2{
      posittion:absolute;
      right:950px; 
      top:-15px;
    }
    .hl3amiltel1{
      posittion:absolute;
      right:900px; 
      top:20px;
    }
    



   
    .div_table {
      width: 68%;
      height: 70vh;
      aspect-ratio: 3/1;
      margin: auto;
      overflow-y: scroll;
      scroll-snap-type: y mandatory;
      position:absolute;
      left: 20px;
      top: 166px;
      
    }
    
    .border{
      position:absolute;
      width:68%;
      height:105px;
      border:2px solid DodgerBlue;
      top:53px;
      right:364px;
    }
    @media screen and (min-width: 1281px){
     
      .border{
        
        position:absolute;
      width: 73.7%;
      height:105px;
      border:2px solid DodgerBlue;
      top:53px;
      right:364px;
        
      }
      .div_table {
       
        width: 73.7%;
        height: 70vh;
        aspect-ratio: 3/1;
        margin: auto;
        overflow-y: scroll;
        scroll-snap-type: y mandatory;
        position:absolute;
        left: 20px;
        top: 166px;
        
      }
      table .tddelet{
        width:3%;
      }
    }
    @media screen and (min-height: 617px) {
      .select{
        position:absolute;
        right:500px;
        top:-95px;
      }
      .hl3amil{
        position:absolute;
        right:500px;
      
      }
      .hl3amil1{
        position:absolute;
        right:500px;
        top:-70px;
        width:400px;
      }
      .hl3amil2{
        position:absolute;
        right:575px;
        top:-70px;
        width:400px;
      }
      .hl3amil3{
        position:absolute;
        right:500px;
        top:-35px;
        width:700px;
      
      }
      .hl3amil4{
        position:absolute;
        right:575px;
        top:-35px;
        width:700px;
      }
      .hl3amiltel{
        posittion:absolute;
        right:900px; 
        top:-35px;
      }
      .hl3amiltel3{
        posittion:absolute;
        right:950px; 
        top:-70px;
      }
      .hl3amiltel2{
        posittion:absolute;
        right:950px; 
        top:-35px;
      }
      .hl3amiltel1{
        posittion:absolute;
        right:900px; 
        top:-70px;
      }
  
      
    
    }

    .div_table > *:last-child {
      scroll-snap-align: end;
    }
    
    .div_table > *:last-child:not(:first-child) {
      scroll-snap-stop: normal;
    }
    
    .div_table::-webkit-scrollbar {
      width: 0; /* Hide the scrollbar completely */
    }
    
    .button {
      background-color: #E0EAF0;
      border: none;
      padding: 2rem;
      font-size: 1.2rem;
      width: 5.5em;
      color: #000;
      box-shadow: 0 0.4rem #d3d9dc;
      cursor: pointer;
      margin: 5px;
      text-align: center;
    }
    
    .crd {
      text-decoration: none;
    }
    
    .container {
      height: 100px;
    }
    
    #display {
      text-align: right;
    }
    
    .buttons {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      width: 250px;
      position:relative;
    }
    
    .button {
      border: 1px solid #999;
      text-align: center;
      cursor: pointer;
      padding: 25px;
    }
    
    .calculatris {
      position: relative;
      top: -25px;
      right: 10px;
     
    }
    
    #dd {
      display: flex;
      justify-content: right;
    }
    
    .ddd {
      margin-left: 5px;
      margin-right: 10px;  
    }
    
    .print_next {
      display: flex;
      justify-content: space-around;
      position:absolute;
      top:75px;
    }
    
    .next {
      font-size: 25px;
      font-weight: bold;
      padding: 10px 78px 4px 127px;
      position: absolute;
      top: -125px;
      right: 5px;
      text-align: center;
      background-color: #5CBB6B;
      border: none;
    }
    
    .div_print {
      width: 130px;
      padding: 25px;
      position: absolute;
      top: -125px;
      right: 215px;
      background-color: #FAB911;
      border: none;
    }
    
    .submitt {
      position: absolute;
      right: 5px;
      top: 4.9px;
      padding: 10px 70px 4px 135px;
      border: none;
      background-color: #00A3FF;
      font-size: 25px;
      font-weight: bold;
      color: #fff;
    }
    
    .btnc {
      position: absolute;
      width: 11.5em;
      bottom: -90px;
    }
    
    .btn0 {
      position: absolute;
      right: 231px;
      bottom: -90px;
    }
    
    .input_qnt1 {
      position: absolute;
      left: 172px;
      top: 60px;
      width: 160px;
      height: 35px;
      padding: 3px;
  font-size: 20px;
     
      border:1px solid;
    
    }
    .input_qnt2 {
      position: absolute;
      left: -7px;
      top: 60px;
      width: 160px;
      height: 35px;
      
      
      border:1px solid;
      padding: 3px;
  font-size: 20px;
    
    }
    .test {
      width: 338px;
      height: 35px;
      top: 0px;
      position: relative;
      right: 5px;
      border:1px solid;
      padding: 3px;
  font-size: 20px;
    }
    .test:focus ,.input_qnt2:focus,.input_qnt1:focus {
      border: 2px solid #007bff;
      outline: none;
      
    }
    
    .tddelet {
      color: #fff;
      background-color: #dc3535;
      padding: 0.3em 0.5em;
      width:4%
    }
    
    .tddelet a {
      color: #fff;
    }
    
    .table {
     
      border-collapse: collapse;  
      position: absolute;  
      width: 100%;
      scroll-snap-align: start;
      scroll-margin: 20px;
    }
    
    .crd {
      text-decoration: none;
    }
    
    </style>
</head>
<body onload="document.pos.test.focus();">
  
  <div class="sidebar"  dir="rtl" style="text-align: right m !important;">
    <div class="logo-details">
        <div class="icons">
            <i class="bx bxs-circle icon1"></i>
            <i class="bx bx-library icon" style="width: 10px;"></i>
        </div>
        <div class="logo_name">مكتبة الشطاري</div>
        <i class="bx bx-menu" id="btn"></i>
    </div>
    <ul class="nav-list">
      <li>
        <span class="tooltip">الصفحة الرئيسية</span>
        <a href="index.php">
            <i class="bx bx-home-alt"></i>
            <span class="links_name">الصفحة الرئيسية</span>
        </a>

      </li>
      <li> 
        <span class="tooltip">الكتب المدرسية</span>
        <a href="الكتب المدرسية.php">
            <i class="bx bx-book"></i>
          <span class="links_name">الكتب المدرسية</span>
        </a>
        
      </li>
      <li>
       <a href="الادوات المدرسية.php">
        <i class="bx bxs-backpack"></i>
         <span class="links_name">الأدوات المدرسية</span>
       </a>
       <span class="tooltip">الأدوات المدرسية</span>
     </li>
     <li>
       <a href="روايات و كتب متنوعة.php">
        <i class="bx bx-book-open"></i>
         <span class="links_name">روايات وكتب متنوعة</span>
       </a>
       <span class="tooltip">روايات وكتب متنوعة</span>
     </li>
     <li>
       <a href="العملاء.php">
        <i class="bx bx-male" ></i>
         <span class="links_name">العملاء</span>
       </a>
       <span class="tooltip">العملاء</span>
     </li>
     <li>
       <a href="البيع بالتقسيط.php">
        <i class="bx bxs-store-alt"></i>
         <span class="links_name">بيع بالتقسيط</span>
       </a>
       <span class="tooltip">بيع بالتقسيط</span>
     </li>
     <li>
       <a href="البيع بالجملة.php">
        <i class="bx bx-package" ></i>
         <span class="links_name">بيع بالجملة</span>
       </a>
       <span class="tooltip">بيع بالجملة</span>
     </li>
     <li>
       <a href="factur_t.php">
        <i class="bx bx-file-find"></i>
         <span class="links_name">فواتير عملاء تقسيط</span>
       </a>
       <span class="tooltip">فواتير عملاء تقسيط</span>
     </li>
     <li>
       <a href="factur_j.php">
        <i class="bx bxs-file-find" ></i>
         <span class="links_name">فواتير عملاء الجملة</span>
       </a>
       <span class="tooltip">فواتير عملاء الجملة</span>
     </li>
     <li class="profile"> 
         <form action = "" method = "post">
      <a href="tr.php">
      <i class="bx bx-log-out" id="log_out" name="s">  تسجيل الخروج</i>
      </a>
      </form>
     </li>
    </ul>
  </div>
  
    <section class="book_section" dir="rtl" style="text-align: right m !important;">
    <div class="border"></div>
    <h1 class="h1">البيع بالجملة</h1>
   <div class="calculatris">
   <div class="container">';
   include "connexion.php";
$q = "SELECT `code`, `name`, `tele`, `city` FROM `العملاء`";
$result = mysqli_query($cnx, $q);

echo'
<form action="" method="post">
    <select class="select" name="person" id="" onchange="this.form.submit()">
        <option  value="">اختر الشخص</option>';
       
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<option value=' . $row["code"] . '> '. $row["name"] . '</option>"';
        }
        
    echo'</select>
</form>';



if (isset($_POST['person'])) {
  $personCode = $_POST['person'];

  if ($personCode != "") {
      $selectPersonQuery = "SELECT * FROM `العملاء` WHERE `code` = '$personCode'";
      $selectedPersonResult = mysqli_query($cnx, $selectPersonQuery);

      if (mysqli_num_rows($selectedPersonResult) > 0) {
          $personData = mysqli_fetch_assoc($selectedPersonResult);

          $code = $personData['code'];
          $name = $personData['name'];
          $tele = $personData['tele'];
          $city = $personData['city'];

          // حذف البيانات الموجودة في جدول "العميل"
          $del = "DELETE FROM `العميل`";
          $re_del = mysqli_query($cnx, $del);

          $insertQuery = "INSERT INTO `العميل`(`code`, `name`, `tele`, `city`) VALUES ('$code', '$name', '$tele', '$city')";
          $insert =  mysqli_query($cnx, $insertQuery);
              
          } 
      } 
  } 


$query = "SELECT * FROM `العميل`";
$result = mysqli_query($cnx, $query);

// عرض معلومات العميل إذا كانت متوفرة
if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);

  $code = $row['code'];
  $name = $row['name'];
  $tele = $row['tele'];
  $city = $row['city'];

  // عرض معلومات العميل على الشاشة
  echo "
 <div class='divl3amil'>
 <div class='hl3amil hl3amil1'>كود العميل: </div> <div class='hl3amil hl3amil2'>" . $code . "</div><br>
  <div class='hl3amil hl3amil3'>الإسم العميل: </div> <div class='hl3amil hl3amil4'>" . $name . "</div><br>
 <div class='hl3amil hl3amiltel'>الهاتف: </div> <div class='hl3amil hl3amiltel2'>" . $tele . "</div><br>
 <div class='hl3amil hl3amiltel1'>المنطقة: </div> <div class='hl3amil hl3amiltel3'>" . $city . "</div><br>
 </div>";
} 
echo'
</form>
<div class="print_next">
<form action="trdelet.php" method="post">
            <input class="next" type="submit" value="التالي" name="next1">
          </form>
          <div ><form action="test_j.php" method="post"><button name="print" class="div_print" type="submit" onclick="openLink()"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M19 7h-1V2H6v5H5a3 3 0 0 0-3 3v7a2 2 0 0 0 2 2h2v3h12v-3h2a2 2 0 0 0 2-2v-7a3 3 0 0 0-3-3zM8 4h8v3H8V4zm0 16v-4h8v4H8zm11-8h-4v-2h4v2z"></path></svg></button></form></div>
          
            

</div>
</div>
          <form action="" name="pos" method="post">
            <input placeholder="الكود" class="test" type="text" name="test">
            <input class="submitt" type="submit" name="submit" value="إضافة">
            <input placeholder="الكمية" type="text" name="qnt"value="" id="display" class="input_qnt1">
            <input placeholder="التخفيض" type="text" class="input_qnt2" name="%">
          </form>
          <div  class="buttons">
               
                <div class="button" id="9">9</div>
                <div class="button">8</div>
                <div class="button">7</div>
                <div class="button">6</div>
                <div class="button">5</div>
                <div class="button">4</div>
                <div class="button">3</div>
                <div class="button">2</div>
                <div class="button">1</div>
                <div class="button btnc">C</div>
                
                <div class="button btn0">0</div>
                
            </div>
        </div>
   </div>
   
     <div class="div_table">
<table class="table">
                        <tr>
                            <th style="width:4%"></th>
                            <th class="th" style="width:15%">الكود</th>
                            <th class="th" style="width:40%">المنتج</th>
                            <th class="th" style="width:5%">الكمية</th>
                            <th class="th" style="width:10%">السعر</th>
                            <th class="th" style="width:7%">التخفيض</th>
                            <th class="th" style="width:10%">الاجمالي</th>
                        </tr>';}
                        else {
                          // إعادة توجيه المستخدم إلى صفحة تسجيل الدخول
                          session_destroy();
                          header('Location:login.php');
                          exit;
                        }


include('connexion.php');
$d = '';
if(isset($_POST['submit'])){
    $test = $_POST['test']; 

    $req0 = "SELECT * FROM books_school WHERE code = '$test'";
    $resultat0 = mysqli_query($cnx, $req0);

    $req1 = "SELECT * FROM `الادوات_المدرسية` WHERE code = '$test'";
    $resultat1 = mysqli_query($cnx, $req1);

    $req2 = "SELECT * FROM `روايات_و_كتب_متنوعة` WHERE code = '$test'";
    $resultat2 = mysqli_query($cnx, $req2);

    if ($resultat0 && mysqli_num_rows($resultat0) == 1){
      while($row1 = mysqli_fetch_assoc($resultat0)){
        if($_POST['qnt']==''){
          $d = 1;
        }else{
          $d = $_POST['qnt'];
        }  
        if($_POST['%']==''){
          $n=0;
        }else{
          $n = $_POST['%'];
        }
          $req = "INSERT INTO `factur_j`(`code`, `المنتج`, `qnt`, `السعر`, `التخفيض`, `ijmal`) VALUES ('".$row1['code']."','".$row1['name']."','".$d."','".$row1['price_t']."','".$n."','".($row1['price_t'] * $d) - (($row1['price_t'] * $d)*($n / 100))."')";
          $resultat = mysqli_query($cnx, $req);
          $rq = "UPDATE `books_school` SET qnt = qnt - $d WHERE code = $test";
          $result = mysqli_query($cnx, $rq);
      }
    }
    elseif ($resultat1 && mysqli_num_rows($resultat1) == 1){
      while($row1 = mysqli_fetch_assoc($resultat1)){
        if($_POST['qnt']==''){
          $d = 1;
        }else{
          $d = $_POST['qnt'];
        }  
        if($_POST['%']==''){
          $n=0;
        }else{
          $n = $_POST['%'];
        }
          $req = "INSERT INTO `factur_j`(`code`, `المنتج`, `qnt`, `السعر`, `التخفيض`, `ijmal`) VALUES ('".$row1['code']."','".$row1['name']."','".$d."','".$row1['price_j']."','".$n."','".($row1['price_j'] * $d) - (($row1['price_j'] * $d)*($n / 100))."')";
          $resultat = mysqli_query($cnx, $req);
          $rq = "UPDATE `الادوات_المدرسية` SET `qnt`= qnt - $d WHERE code = $test";
          $result = mysqli_query($cnx, $rq);
      }
    }
    elseif ($resultat2 && mysqli_num_rows($resultat2) == 1){
      while($row1 = mysqli_fetch_assoc($resultat2)){
        if($_POST['qnt']==''){
          $d = 1;
        }else{
          $d = $_POST['qnt'];
        }  
        if($_POST['%']==''){
          $n=0;
        }else{
          $n = $_POST['%'];
        }
          $req = "INSERT INTO `factur_j` (`code`, `المنتج`, `qnt`, `السعر`, `التخفيض`, `ijmal`) VALUES ('" . $row1['code'] . "', '" . $row1['name'] . "', '" . $d . "', '" . $row1['price_t'] . "', '" . $n . "', '" . ($row1['price_t'] * $d) - (($row1['price_t'] * $d)*($n / 100)) . "')";
          $resultat = mysqli_query($cnx, $req);
          $rq = "UPDATE `روايات_و_كتب_متنوعة` SET `qnt`=`qnt` - $d WHERE code = $test";
          $result = mysqli_query($cnx, $rq);
      }
    }
    else{
      echo'<script>swal({title: "هذا المنتج غير موجود",icon: "info",button: "حسنا",});</script>';
    }
}   
      $req = "SELECT * FROM factur_j";
      $resultat = mysqli_query($cnx, $req);
      $i = 1;
      $p = "SELECT SUM(ijmal) FROM `factur_j`";
$re = mysqli_query($cnx, $p);
$row = mysqli_fetch_array($re);
$total = $row[0];
$tt = number_format($total, 2);


      while ($row2 = mysqli_fetch_assoc($resultat)) {
        echo "<tr>";
        echo "<td class='td' style='width:4%'>" . $i++ . "</td>";
        echo "<td class='td'>" . $row2["code"] . "</td>";
        echo "<td class='td'>" . $row2["المنتج"] . "</td>";
        echo "<td class='td'><div >" . $row2["qnt"] . "</div></td>";
        echo "<td class='td'><div id='dd'><div class='ddd'>DH</div><div>" . $row2["السعر"] . "</div></div></td>";
        echo "<td class='td'><div id='dd'><div class='ddd'>%</div><div>" . $row2["التخفيض"] . "</div></div></td>";
        echo "<td class='td'><div id='dd'><div class='ddd'>DH</div><div>" . $row2["ijmal"] . "</div></div></td>";
        echo "<td class='td tddelet'><div id='dd'><a href='trdelet.php?jj=".$row2["id"]."&jjj=".$row2["qnt"]."&jjjj=".$row2["code"]."' class='btn_table btn2'><i class='bx bx-trash' name='jj'></i></a></td>";
        echo "</tr>"; 
      }
      
      echo "<tr>
      <td class= 'td' colspan='3'><h2>المجموع</h2></td>
      <td class='td' colspan='5' style='text-align: center;color:red;' ><h2>".$tt."</h2></td>
      </tr>";
      echo "</table>";

      
?>
      
     </div>
    </section>
    <script src="index.js"></script>
    <script>
      function openLink() {
        window.open('البيع بالجملة.php', '_blank');
      }
    </script>
  <script>
    
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
 

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-left");
   }else {
     closeBtn.classList.replace("bx-menu-alt-left","bx-menu");
   }
  }
  </script>
</body>
</html>
