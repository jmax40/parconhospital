<?php
// Include TCPDF library
require_once 'TCPDF-main/tcpdf.php';

// Collect form data
$name = isset($_POST['name']) ? $_POST['name'] : '';
$age = isset($_POST['age']) ? $_POST['age'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$info = isset($_POST['info']) ? $_POST['info'] : '';
$info2 = isset($_POST['info2']) ? $_POST['info2'] : ''; 
$issue = isset($_POST['issue']) ? $_POST['issue'] : ''; 
$date2 = isset($_POST['date2']) ? $_POST['date2'] : '';
$date = isset($_POST['date']) ? $_POST['date'] : '';
$doctor = isset($_POST['doctor']) ? $_POST['doctor'] : '';
$lic = isset($_POST['lic']) ? $_POST['lic'] : '';



// Format dates
$formattedDate = !empty($date) ? date("F j, Y", strtotime($date)) : '';
$formattedDate2 = !empty($date2) ? date("F j, Y", strtotime($date2)) : '';
$formattedDate3 = !empty($date) ? date("n-j-Y", strtotime($date)) : '';

// Create HTML content
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Medical Certification</title>
    <style>
        .info {
            font-weight: bold;
            font-size: 20px;
              text-align: justify; 
        }

        .info02 {
            font-weight: bold;
            font-size: 20px; /* Adjust the font size as needed */
            display: inline-block; /* Make sure text is centered within the span */
            resize: both; /* Allow resizing */
            overflow: auto; /* Add scrollbars when needed */
            text-align: center;
            display: block;
        } 

        .info01 {
            font-size: 15px; /* Adjust the font size as needed */
           text-align: justify; 
        } 

        .bold {
            font-weight: bold;
            font-size: 15px; /* Adjust the font size as needed */
            display: inline-block; /* Change display to make it resizable */
            resize: both; /* Allow resizing */
            overflow: auto; /* Add scrollbars when needed */
        }  

        .paragraph {
            font-weight: bold;
            font-size: 13px;
            padding: none; /* Adjust the font size as needed */
        }  

 .date {
    text-align: right;
    font-weight: bold;
      font-size: 15px; 
}

 .starting {
      font-size: 15px; 
}

body {
    font-family: "Times New Roman", Times, serif;
}




    </style>
</head>
<body>


<img src="heading.png" alt="Description of the image" class="responsive-image">



    <p class="date">' . $formattedDate . '</p>


<p class = "starting" >To whom it may concern:</p>

   <p class="info01">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  This is to certify that <span class="bold">' .  ucwords(strtolower($name)) . ', ' . $age . '</span> y.o/' . $gender . ', a resident of  <span class="bold">' . ucwords(strtolower($address)) . '</span> has been examined on <span class="bold">' . $formattedDate2 . '</span>
</p>';

if (!empty($info)) {
    $html .= '<p class="info">Diagnosis: ' . ucwords(strtolower($info)). '</p>';
}

if (!empty($info2)) {
    $html .= '<p class="info">Remarks: ' . ucwords(strtolower($info2)). ' </p>';
}

$html .= '<p class="info01">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    This is to certify that  
    <span > This certification is issued to  <span class="bold">' . ucwords(strtolower($issue)) . '</span>, for whatever purpose it may serve him/her best.</span>
</p>

<div class="bottom-content">
    <div style="display: flex; justify-content: space-between;">
        <p class="paragraph" style="text-align: right;">' . $doctor . ' <br> ' . $lic . ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
        <p class="paragraph" style="text-align: left;">Note: Not for medico legal<br>  Not valid without seal <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  '.$formattedDate3.'  </p>
    </div>
</div>

</body>
</html>';

// Initialize TCPDF
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Set document information
$pdf->SetCreator('Parcon Hospital');
$pdf->SetAuthor('Parcon Hospital');
$pdf->SetTitle('Medical Certification');
$pdf->SetSubject('Medical Certification');
$pdf->SetKeywords('Medical, Certification');

// Set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// Set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// Set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_RIGHT);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// Remove page border
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// Add a page
$pdf->AddPage();

// Write HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// Output the generated PDF to the browser (inline display)
$pdf->Output(ucwords(strtolower($name)) . '.pdf', 'I');

exit;
?>