
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="image/icon1.icon">
    <title>Librairie Achattari</title>
    <style>
        body {
            background-image: url('./image/2.jpg');
            background-size: cover;
            background-position: center;
            position: relative;
        }
        .msg{
            text-align: center;
        }
</style>
    
</head>
<body>
    <!----------------------- Main Container -------------------------->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <!----------------------- Login Container -------------------------->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
    <!--------------------------- Left Box ----------------------------->
        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"  style="background: #e9ecef; border:solid 1px black;">
            <div class="featured-image mb-3">
                <img src="image/Image1.icon" class="img-fluid" style="width: 250px;">
            </div>
            <p class="text-black fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;font-size:20px;">مكتبة الشطاري </p>   
       </div> 
    <!-------------------- ------ Right Box ---------------------------->
        <div class="col-md-6 right-box" dir="rtl" style="text-align: right m !important;">
            <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>مرحبا بك،</h2>
                        <p>قم بتسجيل الدخول.</p>
                    </div>
                    <form action = "tr.php" method = "post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="إسم المستخدم" name = "login" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="كلمة السر" name = "password"required>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-primary w-100 fs-6">تسجيل الدخول</button>
                    </div>
                    </form>
                    <div class="msg">
                    <?php
$m = isset($_GET["m"]);
if($m){
    session_start();
    session_destroy();
    echo "خطاء في تسجيل الدخول";
}
$h = isset($_GET["h"]);
if($h){
    session_start();
    session_destroy();
    echo "تم تسجيل الخروج بنجاح.";
}
?>
</div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>


