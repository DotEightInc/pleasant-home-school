<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="dist/img/favicon2.ico" type="image/ico" />
    <title>Admission Letter</title>
</head>
</html>
<?php
session_start();
if (isset($_SESSION['staffid'])) {

require ("functions/init.php");
require('fpdf.php');



class PDF extends FPDF
{
// Page header
function Header()
{

    //line break
    $this->Ln(45);
}
}

// Instanciation of inherited class
$pdf = new PDF();
// Begin with regular font
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

    $sql ="SELECT * FROM staff WHERE `id` = '".$_SESSION["staffid"]."'";
    $result = query($sql);
    if(row_count($result) == 1) {
    $row = mysqli_fetch_array($result);
    $a = date("Y");
    $b = date("M");
    $c = date("d");
    $d = "$a" + 1;
    $e = $a."/".$d;
    $ad = $row['staffid'];
    $add = str_replace('/', '', $ad);

 {
        $pdf->Write(40,$c. " " .$b. ", " .$a);
        $pdf->Ln(10);
        $pdf->SetFont('times','B',12);
        $pdf->Write(40,'Dear'." ".$row['surname']. " " .$row['firstname']. " " .$row['othername']);
        $pdf->Rect(145, 50, 50, 50);
        $pdf->Image('http://localhost/paradise%20school/portal/admin/upload/staffDP/'."".$row['passport'],145,50,50,50);
        $pdf->SetFont('times','',12);
		$pdf->Ln(6);
		$pdf->Write(40,$row['staffid']);
		$pdf->Ln(30);
		$pdf->SetFont('times','B',12);
		$pdf->Cell(10,10,'OFFER OF PROVISIONAL ADMISSION INTO','C');
        $pdf->Ln(5);
        $pdf->SetFont('times','',11);
        $pdf->Write(15,'Congratulations on your admission into Paradise Model School!');
        $pdf->Ln(5);
        $pdf->Cell(20);

		$pdf->SetFont('times','',12);
		$pdf->Ln(5);
		$pdf->Write(15,'You have been offered provisional admission into at Paradise Model School for the '.$e.'');
        $pdf->Ln(5);
        $pdf->Write(19,'academic session. Your admission should be seen as a unique oppurtunity to be part of the school system that');	
		$pdf->Ln(8);
        $pdf->Write(19,'attaches overwhelming importance to the moral, physical, spiritual and mental development of the child.'); 
        $pdf->Ln(8);
		$pdf->Write(19,'To this end, it is envisaged that you will live up to this fundamental objectives of the school. If you accept');
        $pdf->Ln(8);
        $pdf->Write(19, 'this offer, you are requested to pay;');
        $pdf->SetFont('times','B',12);
       
        

        $pdf->SetFont('times','',12);
        $pdf->Ln(8);
        $pdf->Write(19,'The payments are to be made into the school`s ACCOUNT NUMBER: 0781630015, at the First City ');
        $pdf->Ln(8);
        $pdf->Write(19,'Monument Bank(FCMB) or Gateway Mortage Bank(GMB) with ACCOUNT NUMBER: 1000109147 ');
        $pdf->Ln(8);
        $pdf->Write(19,'Teller are expected to be brought to the school in exchange for the school receipt. It is important that the');
        $pdf->Ln(8);
        $pdf->Write(19,'exchange of receipt is done between 3 days of admission into the school.');
        $pdf->Ln(10);
        $pdf->Write(19,'On payment of school fees, the medical fitness for shall be issued on the school portal. Kindly download, fill');
        $pdf->Ln(8);
        $pdf->Write(19,'and upload. It is important to state here that the medical fitness form must be filled by the parent and the');
        $pdf->Ln(8);
        $pdf->Write(19,'medical fitness certificate obtained, signed and stamped by a practising medical practitioner.');
        $pdf->Ln(10);
        
        $pdf->Write(19,'We wish you an enduring and happy stay in the school');
        $pdf->Ln(14);
        $pdf->SetFont('times','B',12);
        $pdf->Write(19,'Yours faithfully');
        $pdf->Ln(7);
        $pdf->Write(19,'School Admin Officer');
		
     
}
}
$pdf->Output();
$file = "$add.pdf";
$filename = "upload/employ/$file";
$pdf->Output($filename, 'F');

$sqll = "UPDATE staff SET `admletter` = '$file' WHERE `id` = '".$_SESSION["staffid"]."'";
$re   = query($sqll);

}
else{
  header("location: ./login");
}
?>