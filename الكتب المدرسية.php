<?php
session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // يتم السماح بالوصول إلى صفحة تسجيل الدخول
  echo '

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Librairie Achattari</title>
    <link rel="stylesheet" href="style/book.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" href="image/icon1.icon">
     <style>
     .crd{
      text-decoration: none;
     }
     .btn_table{

      text-align: center;

      padding-left: 12px;

      padding-right: 12px;

      width: 40px;

      border: none;

      border-radius: 5px;

      height: 30px;

      padding-top:3px ;

      padding-bottom:3px ;

      }
      .dd{
        text-align: center;
        margin-top:20px;
        margin-bottom:20px;
      }

      .h1_book{

 background-color: #11101D;

 color: #fff;

 width: 100%;


height:50px;
 padding-bottom: 5px;

 padding-top: 5px;

 margin-bottom: 20px; 

}
section {
   
  display: flex;
flex-wrap: wrap;
justify-content: center;
  position: relative;
  
  min-height: 100vh;
  top: 0;
  width: calc(95% );
  transition: all 0.5s ease;
  z-index: 3;
  
  
}
.form_book{
position: absolute;
  top: 70px;
}
.inpt{
  width: 710px;
}


     </style>
   </head>
<body >
  
  <div class="sidebar"  dir="rtl" style="text-align: right m !important;">
    <div class="logo-details">
      <div class="icons">
        <img src="image/Image1.icon" class="icon" style="width: 50px;">
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
         <form action="">
            <!-- <div class="profile-details">
                <img src="profile.jpg" alt="profileImg">
                <div class="name_job">
                  <div class="name">حسابي</div>
                </div>
              </div> -->
              <form action = "" method = "post">
      <a href="tr.php">
      <i class="bx bx-log-out" id="log_out" name="s">  تسجيل الخروج</i>
      </a>
      </form>
         </form>
        
     </li>
    </ul>
  </div>
  <section class="book_section" dir="rtl" style="text-align: right m !important;">
  <h1 class="h1_book mt-2 mb-2" style="text-align: center">الكتب المدرسية</h1>
    <form class="form_book container " loaction="#" method="POST">
        
        <div class="display_input">
        <div class="">
            <div class="div_dis">
                <input class="form-control input-style" type="text" name="code" placeholder="الكود" >
           
                <input class="form-control input-style inpt" type="text" name="name" placeholder="إسم الكتاب">
            
                
            </div>
            <div class="div_dis">
                
                    <input class="form-control input-style" type="text" name="price_t" placeholder="الثمن ">
             
              
                    
              
                    <input class="form-control input-style" type="text" name="qnt" placeholder="الكمية" >
               
                    <select name="mostawa" id="" class="form-select input-style">
                    <option value="">المستويات التعليمية</option>
                    <option value="الروضة">الروضة</option>
                    <option value="الأول الإبتدائي"> الأول الإبتدائي</option>
                    <option value="الثاني الإبتدائي"> الثاني الإبتدائي</option>
                    <option value="الثالث الإبتدائي"> الثالث الإبتدائي</option>
                    <option value="الرابع الإبتدائي"> الرابع الإبتدائي</option>
                    <option value="الخامس الإبتدائي"> الخامس الإبتدائي</option>
                    <option value="السادس الإبتدائي"> السادس الإبتدائي</option>
                    <option value="الأولى من التعليم الثانوي الإعدادي">الأولى من التعليم الثانوي الإعدادي</option>
                    <option value="الثانية من التعليم الثانوي الإعدادي">الثانية من التعليم الثانوي الإعدادي</option>
                    <option value="الثالثة من التعليم الثانوي الإعدادي">الثالثة من التعليم الثانوي الإعدادي</option>
                    <option value="الجذع المشترك من التعليم الثانوي">الجذع المشترك من التعليم الثانوي</option>
                    <option value="السنة الأولى من سلك البكالوريا">السنة الأولى من سلك البكالوريا</option>
                    <option value="السنة الثانية من سلك البكالوريا">السنة الثانية من سلك البكالوريا</option>
                </select>
                </div>
                

            </div> 
           <button class="btn1" style="width:94px" name="add"><i class="bx bxs-book-add"></i></button>
            </div>
            ';}
            else {
              // إعادة توجيه المستخدم إلى صفحة تسجيل الدخول
              session_destroy();
              header('Location: login.php');
              exit;
            }
           

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chattari";
$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['add'])){
$code = $_POST['code'];
$name = $_POST['name'];
$mostawa = $_POST['mostawa'];
$price_t = $_POST['price_t'];

$qnt = $_POST['qnt'];
$sql = "SELECT * FROM books_school WHERE code = '$code'";
$result = $conn->query($sql);

if($code != "" && $qnt!=""){
if ($result->num_rows >0) {
    $sql = "UPDATE books_school SET qnt = qnt +'$qnt' WHERE code='$code'"; 
    if ($conn->query($sql) === TRUE) {echo '<script>swal({title: "تم تحديث السجل بنجاح",icon: "success",button: "حسنا",});</script>';} 
    else {echo '<script>swal({title: "حدث خطأ أثناء التحديث",icon: "success",button: "حسنا",});</script>'. $conn->error;}}   
else {
    $sql = "INSERT INTO books_school (`code`, `name`, `mostawa`, `price_t`, `qnt`) VALUES ('$code','$name','$mostawa','$price_t','$qnt')";
    if ($conn->query($sql) === TRUE) {echo '<script>swal({title: "تم إضافة السجل بنجاح",icon: "success",button: "حسنا",});</script>';} 
    else {echo '<script>swal({title: "حدث خطأ أثناء الإضافة",icon: "error",button: "حسنا",});</script>'. $conn->error;}}}
else{
  echo '<script>swal({title: "إملاء الخانات",icon: "warning",button: "حسنا",});</script>';
}
}

$sql1 = 'SELECT * FROM `books_school` ORDER BY FIELD(`mostawa`,
    "الروضة",
    "الأول الإبتدائي",
    "الثاني الإبتدائي",
    "الثالث الإبتدائي",
    "الرابع الإبتدائي",
    "الخامس الإبتدائي",
    "السادس الإبتدائي",
    "الأولى من التعليم الثانوي الإعدادي",
    "الثانية من التعليم الثانوي الإعدادي",
    "الثالثة من التعليم الثانوي الإعدادي",
    "الجذع المشترك من التعليم الثانوي",
    "السنة الأولى من سلك البكالوريا",
    "السنة الثانية من سلك البكالوريا"
)';
$result1 = mysqli_query($conn, $sql1);
 echo '
    <div class="table-responsive">
      <table id="customers" dir="rtl" style="text-align: right m !important;">
        <thead class="table-dark">
          <tr>
            <th style="width:15%" >الكود</th>
            <th style="width:40%" class="thbook" >إسم الكتاب</th>
            <th style="width:20%">المستوى</th>
            <th style="width:10%">الثمن </th>
            <th style="width:6.5%">الكمية</th>                
          </tr>
        </thead>
        <tbody>';
if (mysqli_num_rows($result1) > 0) {
 

  while ($row = mysqli_fetch_assoc($result1)) {
    echo '
          <tr>
            <td>'.$row['code'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['mostawa'].'</td>
            <td>'.$row['price_t'].'</td>
           
            <td'.($row['qnt'] <= 20 ? ' style="background-color: #dc3535;color:#fff"' : '').'>'.$row['qnt'].'</td>
            <td class="td_amaliyat">
              <a href="trupdate.php?code='.$row['code'].'" class="btn_table btn11"><i class="bx bxs-edit" name="edit"></i></a>
              <a href="trdelet.php?code='.$row['code'].'" class="btn_table btn2"><i class="bx bx-trash" name="trash"></i></a>
            </td>
          </tr>';
  }

  echo '
        </tbody>
      </table>
    </div>';
} else {
  echo '<script>swal({title: "لا توجد بيانات في الجدول",icon: "info",button: "حسنا",});</script>';
}

$conn->close();

?>
</form>

</section>
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
