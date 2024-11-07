<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller 
{
    public function index()
    {
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML('<h1>KCDEV: Testing Composer dan MPDF</h1>');
        $mpdf->Output();
    }
}