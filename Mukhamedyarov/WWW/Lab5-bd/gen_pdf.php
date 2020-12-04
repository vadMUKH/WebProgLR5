<?
require_once('connect.php');
require_once('tcpdf/tcpdf.php');


 function fetch_data()  
 {  
$servername = "localhost";
$database = "f0475681_fridges";
$username = "f0475681_mysql";
$password = "mysql";
$connect = mysqli_connect($servername, $username, $password, $database);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

      $output = '';  
      $result = mysqli_query($connect, 
      "SELECT `repairs`.`repair_id`,
      `fridge`.`brand`,
      `fridge`.`model`,
      `fridge`.`defroze`,
      `fridge`.`garantee`,
      `service`.`name`,
      `service`.`address`,
      `repairs`.`start`,
      `repairs`.`finish`,
      `repairs`.`client_name`,
      `repairs`.`price`
      FROM `repairs` LEFT JOIN `fridge` 
      ON `repairs`.`fridge_id`=`fridge`.`fridge_id` 
      LEFT JOIN `service` 
      ON `repairs`.`service_id`=`service`.`service_id`");
      while($row = mysqli_fetch_array($result))  
      {
      $output .= '<tr>  
                          <td>'.$row['repair_id'].'</td>  
                          <td>'.$row['brand'].'</td>  
                          <td>'.$row['model'].'</td>  
                          <td>'.$row['defroze'].'</td>  
                          <td>'.$row['garantee'].'</td>
                          <td>'.$row['name'].'</td>  
                          <td>'.$row['address'].'</td>  
                          <td>'.$row['start'].'</td>
                          <td>'.$row['finish'].'</td>  
                          <td>'.$row['client_name'].'</td>  
                          <td>'.$row['price'].'</td>  
                     </tr>  
                          ';  
      }  
      return $output;  
}

$obj_pdf = new tcpdf('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$obj_pdf-> SetTitle("Заявки на ремонт.");
$obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
$obj_pdf->SetDefaultMonospacedFont('helvetica');  
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
$obj_pdf->setPrintHeader(false);  
$obj_pdf->setPrintFooter(false);  
$obj_pdf->SetAutoPageBreak(TRUE, 10);  
$obj_pdf->setFontSubsetting(true);
$obj_pdf->SetFont('helvetica', '', 9);  
$obj_pdf->AddPage();

$content = '';  
$content .= '  
      <h3 align="center">Zayavki na remont</h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                <th>ID</th>  
                <th>Brand</th>  
                <th>Model</th>  
                <th>Defroze</th>  
                <th>Garantee</th>
                <th>ServiceName</th> 
                <th>Address</th> 
                <th>StartRepair</th> 
                <th>FinishRepair</th>   
                <th>ClientName</th> 
                <th>Price</th> 
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('Zayavki.pdf', 'I');  
 
?>
