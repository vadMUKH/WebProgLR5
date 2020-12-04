<?
require_once('connect.php');
require_once('PHPExcel/Classes/PHPExcel.php');
require_once('PHPExcel/Classes/PHPExcel/Writer/Excel5.php');

$xls = new PHPExcel();
$xls->setActiveSheetIndex(0);
$sheet = $xls->getActiveSheet();
$sheet->setTitle('Заявки на ремонт');

$zagolovok =array("ID", 
             "Brand",  
            "Model",  
            "Defroze",  
            "Garantee",
            "ServiceName", 
            "Address", 
            "StartRepair", 
            "FinidhRepair",
            "ClientName",
            "Price");

for($i = 0;$i<count($zagolovok);$i++)
$sheet->setCellValueByColumnAndRow($i,1,$zagolovok[$i]);

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

$i=2;
while($row = mysqli_fetch_array($result))
{
  $sheet->setCellValueByColumnAndRow(0,$i,$row['repair_id']);
   $sheet->setCellValueByColumnAndRow(1,$i,$row['brand']);
    $sheet->setCellValueByColumnAndRow(2,$i,$row['model']);
     $sheet->setCellValueByColumnAndRow(3,$i,$row['defroze']);
     $sheet->setCellValueByColumnAndRow(4,$i,$row['garantee']);
      $sheet->setCellValueByColumnAndRow(5,$i,$row['name']);
      $sheet->setCellValueByColumnAndRow(6,$i,$row['address']);
      $sheet->setCellValueByColumnAndRow(7,$i,$row['start']);
      $sheet->setCellValueByColumnAndRow(8,$i,$row['finish']);
      $sheet->setCellValueByColumnAndRow(9,$i,$row['client_name']);
      $sheet->setCellValueByColumnAndRow(10,$i,$row['price']);
      $i++;
}  


// Выводим HTTP-заголовки
 header ( "Expires: Mon, 1 Apr 1974 05:00:00 GMT" );
 header ( "Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT" );
 header ( "Cache-Control: no-cache, must-revalidate" );
 header ( "Pragma: no-cache" );
 header ( "Content-type: application/vnd.ms-excel" );
 header ( "Content-Disposition: attachment; filename=zayavkinaremont.xls" );

// Выводим содержимое файла
 $objWriter = new PHPExcel_Writer_Excel5($xls);
 $objWriter->save('php://output');
 ?>