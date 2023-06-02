<?php
session_start();
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // تضمين ملف TCPDF
        require_once('library/tcpdf.php');

        // قم بتعيين المسار المطلوب لحفظ الملف PDF
        $directory = 'C:/xampp/htdocs/Project de stage/pdf_j/'; // تعديل المسار حسب المجلد الذي ترغب في حفظ الملفات فيه

        if (isset($_POST['print'])) {
            // قم بتخصيص المستند PDF
            class MYPDF extends TCPDF
            {
                public $fileName = ''; // قم بإضافة خاصية fileName
                public function Header() {
                                    $path = dirname( __FILE__ );
                                    // تعيين بيانات الهيدر
                                    $logo = $path.'/image/image_logo.jpg'; // استبدل بمسار الصورة الخاصة بالشعار الخاص بك
                                    $logoWidth = 30; // استبدل بالعرض المطلوب للصورة
                            
  
                                    $this->Image($logo, $this->getMargins()['left']+170, 1, $logoWidth);
                                    // $this->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH+111, PDF_HEADER_TITLE, PDF_HEADER_STRING);
                                    $this->SetFont('freeserif', '', 12);
                                    $this->SetXY(118, 1);
                                    $this->Cell(0, 10, 'شارع البريد رقم 16 إمزورن الحسيمة', 0, false, 'L', 0, '', 0, false, 'T', 'M');
                                    $this->SetXY(112, 7);
                                    $this->Cell(0, 10, "الهاتف :0622222164 / 0699999464", 0, false, 'L', 0, '', 0, false, 'T', 'M');
                                    $this->SetXY(112, 13);
                                    $this->Cell(0, 10, "البريد:Nahdaimzouren@gmail.com", 0, false, 'L', 0, '', 0, false, 'T', 'M');
                                    // $this->SetXY(10, 13);
                                    include 'connexion.php';
                                    $query = "SELECT * FROM العميل"; // استبدل بالاستعلام المناسب لاسترداد بيانات العميل المطلوب
                                    $result = mysqli_query($cnx, $query);
                                    if ($row = mysqli_fetch_assoc($result)) {
                                        $code = $row['code'];
                                        $name = $row['name'];
                                        $tele = $row['tele'];
                                        $city = $row['city'];

                                       

                                        $this->SetXY(55, 22);
                                        $this->Cell(0, 10, 'كود : '.$code , 0, false, 'L', 0, '', 0, false, 'B', 'M');
                                        
                                        $this->SetXY(20, 10);
                                        
                                        // $this->Ln();
                                        $this->Cell(0, 10, 'اسم العميل : ' . $name, 0, false, 'L', 0, '', 0, false, 'B', 'M');
                                        
                                        $this->SetXY(10, 22);
                                        
                                        // $this->Ln();
                                        $this->Cell(0, 10, ' الهاتف : ' . $tele, 0, false, 'L', 0, '', 0, false, 'B', 'M');
                                        
                                        $this->SetXY(25,16);
                                        
                                        // $this->Ln();
                                        $this->Cell(0, 10, 'المدينة : ' . $city, 0, false, 'L', 0, '', 0, false, 'B', 'M');

                                        // $this->SetXY(25,20);
                                        
                                        // $this->Ln();
                                        // $this->Cell(0, 10, '_____________________________________________________________________________________________________' . $city, 0, false, 'C', 0, '', 0, false, 'B', 'M');
                                    }
                                }
                public function Footer()
                {
                    $this->SetY(-12);
                    $this->SetX(20);
                    $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
                    $this->SetY(-15);
                    $this->SetFont('helvetica', '', 12);
                    $this->Cell(0, 10, 'PDF: ' . $this->fileName, 0, 0, 'L');
                    $this->Cell(0, 10, 'date: ' . date('Y-m-d H:i:s'), 0, 0, 'R');

                    $this->SetY(-20);
			        $this->SetFont('helvetica', '', 8);
                    $this->html = '<p style="border-top:1px solid #999; text-align:center;border-bottom:1px solid #999;">
                    MERCI POUR VOTRE VISITE
                     
							</p>';
                    $this->writeHTML($this->html, true, false, true, false, '');
                    
                }
                
                public function LoadData()
                {
                    // Read file lines
                    include 'connexion.php';
                    $select = "SELECT * FROM factur_j";
                    $query = mysqli_query($cnx, $select);
                    return $query;
                }

                // Colored table
                public function ColoredTable($header, $data)
                {
                    // Colors, line width and bold font
                    $this->SetFillColor(250);
                    // $this->SetTextColor(0,0,0);
                    // $this->SetDrawColor(0, 0, 0);
                    // $this->SetLineWidth(0.5);
                    // $this->SetFont('', 'B');
                    // Header
                    $w = array(20, 20, 20, 145);
                    $num_headers = count($header);
                    for ($i = 0; $i < $num_headers; ++$i) {
                        $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', 1);
                    }
                    $this->Ln();
                    // Color and font restoration
                    $this->SetFillColor(224, 235, 255);
                    $this->SetTextColor(0);
                    $this->SetFont('');
                    // Data
                    $fill = 0;
                    include 'connexion.php';
            $req = "SELECT * FROM factur_j";
            $resultat = mysqli_query($cnx, $req);
            $i = 1;
            $p = "SELECT SUM(ijmal) FROM `factur_j`";
            $re = mysqli_query($cnx, $p);
            $row = mysqli_fetch_array($re);
            $total = $row[0];
            $tt = number_format($total, 2);
                                                                        foreach ($data as $row) {
                                                                            $fileName = uniqid('pdf_') . '.pdf';

                                                                            $this->Cell($w[0], 6, $row["ijmal"].' DH', 'LR', 0, 'C', $fill);
                                                                            $this->Cell($w[1], 6, $row["السعر"].' DH', 'LR', 0, 'C', $fill);
                                                                            $this->Cell($w[2], 6, $row["qnt"], 'LR', 0, 'C', $fill);
                                                                            $this->SetFont('freeserif', '', 10);
                                                                            $this->Cell($w[3], 6, $row["المنتج"], 'LR', 0, 'C', $fill);
                                                                            
                                                                            $this->Ln();
                                                                            // $fill=!$fill;
                                                                       }
                                                                      
$this->Cell(array_sum($w), 0, '', 'T');
            
                    
                    
                    $this->SetFont('aealarabiya', '', 12);

                    $this->SetX(2);
                     $this->Cell( 60,6, $tt, 'LR', 0, 'C', $fill);
                    $this->SetX(62);
                     $this->Cell( 145,6, 'المجموع', 'LR', 0, 'C', $fill);
                    $this->SetX(2);

                    

                     
                }
            }

            // إنشاء مستند PDF جديد
            $pdf = new MYPDF('P', 'mm', 'A4', true, 'UTF-8', false);
            
            // توليد اسم الملف الفريد
            $fileName = uniqid() . '.pdf';

            // تعيين اسم الملف في الخاصية fileName
            $pdf->fileName = $fileName;

            // تعيين معلومات المستند
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('library Echattari');
            $pdf->SetTitle($fileName);
            $pdf->SetSubject('factur');
            // $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

            // تعيين بيانات الهيدر الافتراضية
            // $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH , PDF_HEADER_TITLE, PDF_HEADER_STRING,);

            // تعيين خطوط الهيدر والفوتر الافتراضية
            $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

            // تعيين الخط المونوسبيس الافتراضي
            $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

            // تعيين الهوامش
            $pdf->SetMargins(2, 25, PDF_MARGIN_RIGHT);
            $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
            $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
            $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

            // تعيين كسر الصفحات التلقائي
            $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

            // تعيين نسبة تحجيم الصورة
            // $pdf->setImageScale('bg_img.jpg');

            // تعيين بعض السلاسل المعتمدة على اللغة (اختياري)
            if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
                require_once(dirname(__FILE__) . '/lang/eng.php');
                $pdf->setLanguageArray($l);
            }

            // ---------------------------------------------------------

            // تعيين الخط
            $pdf->SetFont('helvetica', '', 12);

            // إضافة صفحة جديدة
            $pdf->AddPage();

            // العنوان
            $pdf->SetFont('aealarabiya', '', 10);
                                                        $header = array('الإجمالي', 'السعر', 'الكمية', 'المنتج');    

            // تحميل البيانات
            $data = $pdf->LoadData();

            // طباعة الجدول الملون
                                                                $pdf->ColoredTable($header, $data);

            // حفظ المستند في المجلد المحدد باستخدام اسم الملف الذي تم توليده بشكل تلقائي
            include("connexion.php");
            // إدخال اسم الملف في قاعدة البيانات
            $sql = "INSERT INTO pdf_j(name, date) VALUES ('$fileName', CURRENT_TIMESTAMP)";
            
            if ($cnx->query($sql) === TRUE) {
            $pdf->Output($directory . $fileName, 'F');
            $pdf->Output($directory . $fileName, 'I');
                echo "تم إدخال اسم الملف في قاعدة البيانات بنجاح.";
            } else {
                echo "حدث خطأ أثناء إدخال اسم الملف في قاعدة البيانات: " . $cnx->error;
            }

            // قم بتوجيه المستخدم إلى الملف المحفوظ
            header('Location: ' . $directory . $fileName);
            exit();
        }

        // قم بتوجيه المستخدم إلى صفحة عرض الملفات
        header('Location:البيع بالجملة.php');
        exit();
    } }else {
        // إعادة توجيه المستخدم إلى صفحة تسجيل الدخول
        session_destroy();
        header('Location: login.php');
        exit;
    }
?>