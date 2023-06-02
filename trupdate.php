<?php
session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
include ('connexion.php');

$code = "";
$name = "";
$mostawa = "";
$price_t = "";
$qnt = "";
if(isset($_GET['code'])){
if($_SERVER['REQUEST_METHOD'] == 'GET'){

    if(!isset($_GET['code'])){
        header("location:الكتب المدرسية.php");
        exit;
    }
    $code = $_GET['code'];
    $sql="SELECT * FROM books_school WHERE code = '$code'";
    $result = $cnx->query($sql);
    $row = $result->fetch_assoc();

    if(!$row){
        header("location:الكتب المدرسية.php");
        exit;
    }
    $name = $row['name'];
    $mostawa = $row['mostawa'];
    $price_t = $row['price_t'];
    $qnt = $row['qnt'];
}
else{   
        $code = $_POST['code'];
        $name = $_POST['name'];
        $mostawa = $_POST['mostawa'];
        $price_t = $_POST['price_t'];
        $qnt = $_POST['qnt'];
        
        do{
            if(empty($code) || empty($name) || empty($mostawa) || empty($price_t) || empty($qnt)){
                break;
            }
        }while (false);

        $sql = "UPDATE books_school SET name = '$name', mostawa = '$mostawa', price_t = '$price_t', qnt = '$qnt' WHERE code = '$code'";
        $result = $cnx->query($sql);
        header("location:الكتب المدرسية.php");
        exit;
}
echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/book.css">  
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
    body{ 
        display:flex;
        align-items:center;
        flex-direction: column;
    }
        .h1_book{
        background-color: #11101D;
        color: #fff;
        width: 100%;
       
        padding-bottom: 5px;
        padding-top: 5px;
        margin-bottom: 20px; 
        }   
        
             
    </style>
</head>
<body>
<h1 class="h1_book mt-2 mb-2" style="text-align: center">الكتب المدرسية</h1>
    <section class="book_section" dir="rtl" style="text-align: right m !important;">
    <form class="form_book container " loaction="#" method="POST">
        
        <div class="display_input">
        <div class="">
            <div class="div_dis">
                <input class="form-control input-style" type="text" name="code" placeholder="الكود" value='.  $code.' >
           
                <input class="form-control input-style" type="text" name="name" placeholder="إسم الكتاب" value='.$name.'>
            
                <select name="mostawa" id="" class="form-select input-style" >
                    <option value=<?php echo $mostawa?>>'.$mostawa.'</option>
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
            <div class="div_dis">                
                    <input class="form-control input-style" type="text" name="price_t" placeholder="ثمن التقسيط" value='.$price_t.'>             
                                
                    <input class="form-control input-style" type="text" name="qnt" placeholder="الكمية" value='.$qnt.'>
               
                </div>
            </div> 
           <button class="btn1" style="width:94px" name="add"><i class="bx bxs-book-add"></i></button>
            </div>
    </form>   
</body>
</html>';

}
if(isset($_GET['code1'])){
if($_SERVER['REQUEST_METHOD'] == 'GET'){

    if(!isset($_GET['code1'])){
        header("location:الادوات المدرسية.php");
        exit;
    }

    $code = $_GET['code1'];

    $sql="SELECT * FROM الادوات_المدرسية WHERE code = '$code'";
    $result = $cnx->query($sql);
    $row = $result->fetch_assoc();

    if(!$row){
        header("location:الادوات المدرسية.php");
        exit;
    }

    $name = $row['name'];
    $price_t = $row['price_t'];
    $price_j = $row['price_j'];
    $qnt = $row['qnt'];

}
else{
    
        $code = $_POST['code1'];
        $name = $_POST['name'];
        $price_t = $_POST['price_t'];
        $price_j = $_POST['price_j'];
        $qnt = $_POST['qnt'];
        
        do{
            if(empty($code) || empty($name) || empty($price_t) || empty($price_j) || empty($qnt)){
                break;
            }
        }while (false);

        $sql = "UPDATE الادوات_المدرسية SET name = '$name', price_t = '$price_t', price_j = '$price_j', qnt = '$qnt' WHERE code = '$code'";
        $result = $cnx->query($sql);
        header("location:الادوات المدرسية.php");
        exit;

}
echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/book1.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
    body{ 
        display:flex;
        align-items:center;
        flex-direction: column;
    }
        .h1_book{
        background-color: #11101D;
        color: #fff;
        width: 100%;
       
        padding-bottom: 5px;
        padding-top: 5px;
        margin-bottom: 20px; 
        } 
        .display_input{
            display:flex;
        }
        
    </style>
</head>
<body>
<h1 class="h1_book mt-2 mb-2" style="text-align: center">الأدوات المدرسية</h1>
    <section class="book_section" dir="rtl" style="text-align: right m !important;">
    <form class="form_book container " loaction="#" method="POST">
        
        <div class="display_input">
        <div class="">
            <div class="div_dis">
                <input class="form-control input-style" type="text" name="code1" placeholder="الكود" value='.$code.' >
           
                <input class="form-control input-style" type="text" name="name" placeholder="إسم المنتج" value='.$name.'>
            
                
            </div>
            <div class="div_dis">
                
                    <input class="form-control input-style" type="text" name="price_t" placeholder="ثمن التقسيط" value='.$price_t.'>
             
              
                    <input class="form-control input-style" type="text" name="price_j" placeholder="ثمن الجملة" value='.$price_j.'>

              
                    <input class="form-control input-style" type="text" name="qnt" placeholder="الكمية" value='.$qnt.'>
               
                </div>
                

            </div> 
           <button class="btn1" style="width:94px" name="add"><i class="bx bxs-book-add"></i></button>
            </div>
    </form>
</body>
</html>';}

 if(isset($_GET['code3'])){
if($_SERVER['REQUEST_METHOD'] == 'GET'){

    if(!isset($_GET['code3'])){
        header("location:روايات و كتب متنوعة.php");
        exit;
    }

    $code = $_GET['code3'];

    $sql="SELECT * FROM `روايات_و_كتب_متنوعة` WHERE code = '$code'";
    $result = $cnx->query($sql);
    $row = $result->fetch_assoc();

    if(!$row){
        header("location:روايات و كتب متنوعة.php");
        exit;
    }

    $name = $row['name'];
    $price_t = $row['price_t'];

    $qnt = $row['qnt'];

}
else{
    
        $code = $_POST['code3'];
        $name = $_POST['name'];
        $price_t = $_POST['price_t'];

        $qnt = $_POST['qnt'];
        
        do{
            if(empty($code) || empty($name) || empty($price_t) || empty($qnt)){
                break;
            }
        }while (false);

        $sql = "UPDATE `روايات_و_كتب_متنوعة` SET name='$name',price_t='$price_t',qnt='$qnt' WHERE code = '$code'";
        $result = $cnx->query($sql);
        header("location:روايات و كتب متنوعة.php");
        //echo"ohhhhhhhhhhhhhhhhh";
        exit;

}
echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/book1.css">
  
   
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
    body{ 
        display:flex;
        align-items:center;
        flex-direction: column;
    }
        .h1_book{
        background-color: #11101D;
        color: #fff;
        width: 100%;
       
        padding-bottom: 5px;
        padding-top: 5px;
        margin-bottom: 20px; 
        } 
        .display_input{
            display:flex;
        }
        
    </style>
</head>
<body>  
<h1 class="h1_book mt-2 mb-2" style="text-align: center">روايات و كتب متنوعة</h1>
    <section class="book_section" dir="rtl" style="text-align: right m !important;">
    <form class="form_book container " loaction="#" method="POST">
      
        <div class="display_input">
        <div class="">
            <div class="div_dis">
                <input class="form-control input-style" type="text" name="code3" placeholder="الكود" value='.$code.' >
           
                <input class="form-control input-style" type="text" name="name" placeholder="إسم الكتاب" value='.$name.'>
            
                
            </div>
            <div class="div_dis">
                
                    <input class="form-control input-style" type="text" name="price_t" placeholder="ثمن التقسيط" value='.$price_t.'>
             
              
                    
              
                    <input class="form-control input-style" type="text" name="qnt" placeholder="الكمية" value='.$qnt.'>
               
                </div>
                

            </div> 
           <button class="btn1" style="width:94px" name="add"><i class="bx bxs-book-add"></i></button>
            </div>
    </form>
</body>
</html>';}

if(isset($_GET['code2'])){
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
    
        if(!isset($_GET['code2'])){
            header("location:العملاء.php");
            exit;
        }
    
        $code = $_GET['code2'];
    
        $sql="SELECT * FROM `العملاء` WHERE code = '$code'";
        $result = $cnx->query($sql);
        $row = $result->fetch_assoc();
    
        if(!$row){
            header("location:العملاء.php");
            exit;
        }
    
        $name = $row['name'];
        $tele = $row['tele'];
        $city = $row['city'];
    
    }
    else{
        
            $code = $_GET['code2'];
            $name = $_POST['name'];
            $tele = $_POST['tele'];
            $city = $_POST['city'];
            
            do{
                if(empty($name) || empty($tele) || empty($city)){
                    break;
                }
            }while (false);
    
            $sql = "UPDATE `العملاء` SET name='$name',tele='$tele',city='$city' WHERE code = '$code'";
            $result = $cnx->query($sql);
            header("location:العملاء.php");
            exit;
    
    }
    echo'
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/book1.css">
      
       
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
        <title>Document</title>
        <style>
        body{ 
            display:flex;
            align-items:center;
            flex-direction: column;
        }
            .h1_book{
            background-color: #11101D;
            color: #fff;
            width: 100%;
           
            padding-bottom: 5px;
            padding-top: 5px;
            margin-bottom: 20px; 
            } 
            
            .display_input{
                display:flex;
            }

        </style>
    </head>
    <body>
    <h1 class="h1_book mt-2 mb-2" style="text-align: center">العملاء</h1>
        <section class="book_section" dir="rtl" style="text-align: right m !important;">
        <form class="form_book container " loaction="#" method="POST">
            
            <div class="display_input">
            <div class="">
                <div class="div_dis">
                    <input class="form-control input-style" type="text" name="code2" placeholder="الكود" value='.$code.' >
               
                    <input class="form-control input-style" type="text" name="name" placeholder="إسم العميل" value='.$name.'>
                
                    
                </div>
                <div class="div_dis">
                    
                        <input class="form-control input-style" type="text" name="tele" placeholder="رقم الهاتف" value='.$tele.'>
                 
                  
                        <input class="form-control input-style" type="text" name="city" placeholder="المنطقة" value='.$city.'>
                   
                    </div>
                    
    
                </div> 
               <button class="btn1" style="width:94px" name="add"><i class="bx bxs-book-add"></i></button>
                </div>
        </form>
    </body>
    </html>';}

mysqli_close($cnx);
} else {
    // إعادة توجيه المستخدم إلى صفحة تسجيل الدخول
    session_destroy();
    header('Location: login.php');
    exit;
  }
?>