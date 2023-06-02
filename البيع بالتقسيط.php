<?php
session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // يتم السماح بالوصول إلى صفحة تسجيل الدخول
  echo '

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> CHATTARI</title>
    <link rel="stylesheet" href="style/style_ta9sit.css">
    <link rel="icon" href="image/icon1.icon">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
     <style>
     .div_table {
      width: 68%;
      height: 85%;
      aspect-ratio: 3/1;
      margin: auto;
      overflow-y: scroll;
      scroll-snap-type: y mandatory;
      position: absolute;
      left: 20px;
      top: 68px;
    }
    .div_table > *:last-child {
      scroll-snap-align: end;
    }
    
    .div_table > *:last-child:not(:first-child) {
      scroll-snap-stop: normal;
    }
    .div_table::-webkit-scrollbar {
      width: 0; /* إخفاء عرض شريط التمرير بالكامل */
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
      /* height: 6em; */
     }
      .crd{
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
}

/* .buttons > div {
    border-top: 1px solid #999;
    border-right: 1px solid #999;
} */

 .button {
    border: 1px solid #999;
    text-align: center;
    
    cursor: pointer;
    padding:25px;
}

/*.button:hover {
    background-color: #323330;
    color: white;

} */
.calculatris{
  position: relative;
  top:  -90px;
  right:10px;
}
#dd{
  display: flex;
  justify-content:right;
}
.ddd{
  margin-left: 5px;
  margin-right: 10px;  
}

.print_next{
  display: flex;
  justify-content: space-around;
  
}
   .next{
    font-size: 25px;
    font-weight: bold;
padding: 10px 78px 4px 127px;
position: absolute;
top: -125px;
left:40px;
text-align: center;
background-color: #5CBB6B;
border: none;

}
  .div_print{
    width:130px;
padding: 25px;
position: absolute;
top: -125px;
right:215px;
background-color: #FAB911;
border: none;


  }
.submitt{
position: absolute;
right:5px;
top: -70px;
padding: 10px 70px 4px 135px;
border: none;
background-color: #00A3FF;
font-size: 25px;
    font-weight: bold;
    color:#fff;

}
.btnc{
  position:absolute;
  width: 11.5em;
  bottom:-62px;

}

.btn0{
  position:absolute;
  right:231px;
  bottom:-62px;
}
@media screen and (min-width: 1281px){
  .div_table{
    width:73%;
    
  }
  table .tddelet{
    width:3%;
  }
}


 .input_qnt{

  position: absolute;
 
  left:-92px;
 
  top: -6px;
 
  width: 107px;
 
  height: 35px;
 
  padding: 3px;
  font-size: 20px;
 
 }
 @media screen and (min-height: 617px) {

  .btnc{
    position:absolute;
    width: 11.5em;
    bottom:-7px;
  
  }
  .btn0{
  position:absolute;
  right:231px;
  bottom:-7px;
}
}

 .test{
  padding: 3px;
  width: 222px;
  height: 35px;
  top: -6px;
  position: relative;
  right:5px;
  font-size: 20px;


 }

 body{
  background-color: rgb(255, 249, 249);

}
.tddelet{
  width:4%;
  color: #fff;
  background-color: #dc3535;
  padding:0.3em 0.5em;
}
.tddelet a{
  color:#fff;
}

.table{
  border:1px solid black;
  border-collapse: collapse;  
  position: relative;  
  width: 100%;
  scroll-snap-align: start;
  scroll-margin: 20px;
  border: none;
  
  }
  .test:focus ,.input_qnt1:focus {
    border: 2px solid #007bff;
    outline: none;
    
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
    <h1 class="h1">البيع بالتقسيط</h1>
   <div class="calculatris">
   <div class="container">


  <div class="print_next">
  <form action="trdelet.php" method="post">
  <input class="next" type="submit" value="التالي" name="next">
  </form>
  <div ><form action="test_t.php" method="post"><button name="print" class="div_print" type="submit" onclick="openLink()"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M19 7h-1V2H6v5H5a3 3 0 0 0-3 3v7a2 2 0 0 0 2 2h2v3h12v-3h2a2 2 0 0 0 2-2v-7a3 3 0 0 0-3-3zM8 4h8v3H8V4zm0 16v-4h8v4H8zm11-8h-4v-2h4v2z"></path></svg></button></form></div>
  </div>


          <form action="" name="pos" method="post">
            <input class="test" type="text" name="test" placeholder="الكود">
            <input class="submitt" type="submit" name="submit" value="إضافة">

            <input type="text" name="qnt"value="" id="display" class="input_qnt input_qnt1" placeholder="الكمية">
          </form>
          
            
          
          <div class="buttons">
          <div class="button" id="9">9</div>
          <div class="button">8</div>
          <div class="button">7</div>
          <div class="button">6</div>
          <div class="button">5</div>
          <div class="button">4</div>
          <div class="button">3</div>
          <div class="button">2</div>
          <div class="button ">1</div>
          <div class="button btnc" >C</div>
          <div class="button btn0" >0</div> 
         
      </div>         

        </div>
   </div>
   
     <div class="div_table">
<table class="table" >
                        <tr >
                        <th ></th>
                            <th class="th" style="width:15%">الكود</th>
                            <th class="th" style="width:50%">المنتج</th>
                            <th class="th" style="width:7%">الكمية</th>
                            <th class="th" style="width:10%">السعر</th>
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

    if ($resultat0 && mysqli_num_rows($resultat0) == 1) {
      while ($row1 = mysqli_fetch_assoc($resultat0)) {
        $d = ($_POST['qnt'] == '') ? 1 : $_POST['qnt'];
        $req = "INSERT INTO `factur_t`(`code`, `المنتج`, `qnt`, `السعر`, `ijmal`) VALUES ('".$row1['code']."','".$row1['name']."','".$d."','".$row1['price_t']."','".$row1['price_t']*$d."')";
        $resultat = mysqli_query($cnx, $req);
        $rq = "UPDATE `books_school` SET qnt = qnt - $d WHERE code = $test";
        $result = mysqli_query($cnx, $rq);
      }
    } elseif ($resultat1 && mysqli_num_rows($resultat1) == 1) {
      while ($row1 = mysqli_fetch_assoc($resultat1)) {
        $d = ($_POST['qnt'] == '') ? 1 : $_POST['qnt'];
        $req = "INSERT INTO `factur_t`(`code`, `المنتج`, `qnt`, `السعر`, `ijmal`) VALUES ('".$row1['code']."','".$row1['name']."','".$d."','".$row1['price_t']."','".$row1['price_t']*$d."')";
        $resultat = mysqli_query($cnx, $req);
        $rq = "UPDATE `الادوات_المدرسية` SET `qnt`= qnt - $d WHERE code = $test";
        $result = mysqli_query($cnx, $rq);
      }
    } elseif ($resultat2 && mysqli_num_rows($resultat2) == 1) {
      while ($row1 = mysqli_fetch_assoc($resultat2)) {
        $d = ($_POST['qnt'] == '') ? 1 : $_POST['qnt'];
        $req = "INSERT INTO `factur_t`(`code`, `المنتج`, `qnt`, `السعر`, `ijmal`) VALUES ('".$row1['code']."','".$row1['name']."','".$d."','".$row1['price_t']."','".$row1['price_t']*$d."')";
        $resultat = mysqli_query($cnx, $req);
        $rq = "UPDATE `روايات_و_كتب_متنوعة` SET `qnt`=`qnt` - $d WHERE code = $test";
        $result = mysqli_query($cnx, $rq);
      }
    } else {
      echo '<script>swal({title: "هذا المنتج غير موجود",icon: "info",button: "حسنا",});</script>';
    }
}   
      $req = "SELECT * FROM factur_t";
      $resultat = mysqli_query($cnx, $req);
      $i = 1;
      while($row2 = mysqli_fetch_assoc($resultat)){
          echo "<tr>";
          echo "<td class='td'>".$i++."</td>";
          echo "<td class='td'>".$row2["code"]."</td>";
          echo "<td class='td'>".$row2["المنتج"]."</td>";
          echo "<td class='td'><div >".$row2["qnt"]."</div></td>";
          echo "<td class='td'><div id='dd'><div class='ddd'>DH</div><div>".$row2["السعر"]."</div></div></td>";
          echo "<td class='td'><div id='dd'><div class='ddd'>DH</div><div>".$row2["ijmal"]."</div></div></td>";
          echo "<td class='td tddelet'><div id='dd'><a class='' href='trdelet.php?d_id=".$row2["id"]."&d_qnt=".$row2["qnt"]."&d_code=".$row2["code"]."' class='btn_table btn2'><i class='bx bx-trash' name='jj'></i></a></div></td>";
          echo "</tr>";
      }
      $reqq = "SELECT * FROM factur_t";
      $resultatt = mysqli_query($cnx, $reqq);
      $i = 1;
      $p = "SELECT SUM(ijmal) FROM `factur_t`";
      $re = mysqli_query($cnx, $p);
      $row = mysqli_fetch_array($re);
      $total = $row[0];
      $tt = number_format($total, 2);
      echo '<tr>
            <td class= "td" colspan="3"><h2>المجموع</h2></td>
            <td class="td" colspan="4" style="text-align: center;color:red"  ><h2>'.$tt.'</h2></td>
            
          </tr >';
      echo "</table>";

?>
      
     </div>
    </section>

    
    <script src="index.js"></script>
    <script>
      function openLink() {
        window.open('البيع بالتقسيط.php', '_blank');
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
   <script>
        let display = document.getElementById('display');
        let buttons = Array.from(document.getElementsByClassName('button'));
        let deleteButton = document.getElementById('delete');
        
        buttons.forEach(button => {
            button.addEventListener('click', (e) => {
                switch(e.target.innerText) {
                    case 'C':
                        display.value = '';
                        break;
                    case 'Delete':
                        let currentValue = display.value;
                        display.value = currentValue.slice(0, -1); 
                        break;
                    default:
                        display.value += e.target.innerText; 
                        console.log(display.value);
                }
            });
        });
    </script>
</body>
</html>
