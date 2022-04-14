<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ExportExcelFile extends CI_Controller {


    public function index() {
       
        $this->load->model('Get_query_model');
      
        
        
     
		$repairs_data = $this->Get_query_model->exportlist();
		$spreadsheet = new Spreadsheet();

        $sheet = $spreadsheet->getActiveSheet();

     
        $sheet->setCellValue('A1', 'Repairs');
      $sheet->setCellValue('A3', 'JOBCARDNO');
        $sheet->setCellValue('B3', 'FLEETNO');
        $sheet->setCellValue('C3', 'FAULT');
        $sheet->setCellValue('D3', 'STATUS');
          $sheet->setCellValue('E3', 'CREATED BY');
        $sheet->setCellValue('F3', 'DATE');
        $sheet->setCellValue('G3', 'COMMENTS');
         $sheet->setCellValue('H3', 'TECHNICIAN ASSIGNED');
        $rows = 5;
        
        
        
       foreach ($repairs_data as $val)
       {
            $sheet->setCellValue('A' . $rows, 'CAR'.$val['jobcardno']);
            $sheet->setCellValue('B' . $rows, $val['fleetno']);
            $sheet->setCellValue('C' . $rows, $val['faults']);
            $sheet->setCellValue('D' . $rows, $val['status']);
            $sheet->setCellValue('E' . $rows, $val['techcreator']);
            $sheet->setCellValue('F' . $rows, $val['my_date']);
            $sheet->setCellValue('G' . $rows, $val['repairdescription']);
            $sheet->setCellValue('H' . $rows, $val['last_name']);
	  
	  
            $rows++;
        }
       
		
		
          
        $writer = new Xlsx($spreadsheet); // instantiate Xlsx
 
        $filename = 'list-of-Repairs'; // set filename for excel file to be exported
 
        header('Content-Type: application/vnd.ms-excel'); // generate excel file
        header('Content-Disposition: attachment;filename="'. $filename .'.xls"'); 
        header('Cache-Control: max-age=0');
        
        $writer->save('php://output');	// download file 

    }
    
} 