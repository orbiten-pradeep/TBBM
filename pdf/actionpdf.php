<?php
require('WriteHTML.php');
require_once("../class/dbconnect.php");
  $sql = $DBcon->prepare("SELECT * FROM tickets WHERE transactions_id=?");
  $sql->bind_param("i",$_GET["transactions_id"]);      
  $sql->execute();
  $result = $sql->get_result();
 // while ($data =$query->fetch_array(MYSQLI_ASSOC)) {
  if ($result->num_rows > 0) {    
    $row = $result->fetch_assoc();
  }
  $DBcon->close();


$pdf=new PDF_HTML();

$pdf->AliasNbPages();
$pdf->SetAutoPageBreak(true, 15);

$pdf->AddPage();
$pdf->Image('../img/TheBigBeachMarathon280.png',28,23,23);
$pdf->SetFont('Arial','B',14);
$pdf->WriteHTML('<para><h1>TheBigBeachMarathon</h1><br>
Website: <u>www.thebigbeachmarathon.com</u></para><br>');

$pdf->SetFont('Arial','B',7); 
$htmlTable='<TABLE>
<TR>
<TD>Name:</TD>
<TD>'.$row['fullname'].'</TD>
</TR>
<TR>
<TD>Email:</TD>
<TD>'.$row['email'].'</TD>
</TR>
<TR>
<TD>Gender:</TD>
<TD>'.$row['gender'].'</TD>
</TR>
<TR>
<TD>Bibno:</TD>
<TD>'.$row['Bibno'].'</TD>
</TR>
<TR>
<TD>TShirt Size:</TD>
<TD>'.$row['tshirt'].'</TD>
</TR>
<TR>
<TD>KM:</TD>
<TD>'.$row['KM'].'</TD>
</TR>
<TR>
<TD>Status:</TD>
<TD>'.$row['Status'].'</TD>
</TR>

</TABLE>';
$pdf->WriteHTML2("<br><br><br>$htmlTable");
$pdf->SetFont('Arial','B',6);
$pdf->Output(); 
?>