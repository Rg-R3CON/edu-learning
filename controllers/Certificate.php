<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'third_party/fpdf/fpdf.php';

class Certificate extends CI_Controller {
    // http://127.0.0.1/codeigniterframework/codeigniter/index.php/certificate

   public function __construct() {
      parent::__construct();
      
      // Call the model method
            $this->load->model('India_Excels_Models');
   }

      
     
    public function certificate($coursedetail)
    {
        $email =  $this->session->userdata('email');
        $certificate = $this->India_Excels_Models->certificate($email,$coursedetail);
 
if($certificate){
        $this->load->library('fpdf');

        // Create new FPDF object
        $pdf = new FPDF();

        // Add new page
        $pdf->AddPage();

        // Set font and font size
        $pdf->SetFont('Arial','B',16);
            
        $pdf->SetFillColor(255, 255, 255, 0);

        $pdf->Image( base_url("uploads/certificate.jpg"), 0, 0, $pdf->GetPageWidth(), $pdf->GetPageHeight());

        $pdf->SetTextColor(0, 0, 0);

        // Set certificate title
        $pdf->Cell(0, 30, '', 10, 1, 'C');
        $y = $pdf->GetY();
        $pdf->SetXY(0, $y+73);
        $pdf->Cell(0, 10, $certificate->studentname, 0, 1, 'C');

    

        $recipient_name =  $certificate->course;
        $y = $pdf->GetY();
        $pdf->SetXY(0, $y+33);

        $pdf->Cell(0, 10, $recipient_name , 0, 1, 'C');
        // $pdf->AddFont('Zeyada', '', 'Zeyada.php');

        $pdf->SetFont('Arial','B',8);
        $y = $pdf->GetY();
        $x = $pdf->GetX();

        $pdf->SetXY($x+10, $y+20);

        $pdf->Cell( 0, 0, '12-12-2002' , 0, 0, 'C');


        // Output PDF to browser
        $pdf->Output();
}
else{
    $cid = $this->session->userdata('cid');

    $this->session->set_flashdata('message', "You Didn't  Attent Exam Or You Didn't Get Pass Mark");
        redirect('IndiaExcels/coursedetailsdashboard/'.$cid);
    }







    }











    
}
