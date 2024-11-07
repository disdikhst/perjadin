<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Campur extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // is_logged_in();

        $this->load->model('m_campur');
        $this->load->helper(array('form', 'url'));
    }



    public function pdf($id_st)
    {

        $data['title'] = "PDF";
        $this->load->model('tb_st_model');
        $detail = $this->tb_st_model->get_tb_st($id_st);
        $data['detail'] = $detail;



        $aktif = array('tb_st.id_st' => ($id_st));

        $data['campur2'] = $this->m_campur->join_table($aktif);

        // $this->load->view('v_campur', $data);
        $html = $this->load->view('v_campur', $data, true);
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [330, 215]]);
        $mpdf->curlAllowUnsafeSslRequests = true;
        // $mpdf->showImageErrors = true;
        $mpdf->WriteHTML($html);
        $mpdf->Output('perjadin.pdf', 'I');
    }





    public function pdf_blanko($id_st)
    {

        $data['title'] = "PDF";
        $this->load->model('tb_st_model');
        $detail = $this->tb_st_model->get_tb_st($id_st);
        $data['detail'] = $detail;



        $aktif = array('tb_st.id_st' => ($id_st));

        $data['campur2'] = $this->m_campur->join_table($aktif);

        // $this->load->view('v_campur', $data);
        $html = $this->load->view('v_blanko', $data, true);
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [330, 215]]);
        $mpdf->WriteHTML($html);
        $mpdf->curlAllowUnsafeSslRequests = true;
        $mpdf->Output('perjadin.pdf', 'I');
    }

    public function pdf_kanan($id_st)
    {

        $data['title'] = "PDF";
        $this->load->model('tb_st_model');
        $detail = $this->tb_st_model->get_tb_st($id_st);
        $data['detail'] = $detail;



        $aktif = array('tb_st.id_st' => ($id_st));

        $data['campur2'] = $this->m_campur->join_table($aktif);

        // $this->load->view('v_campur', $data);
        $html = $this->load->view('v_blanko_kanan', $data, true);
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [330, 215]]);
        $mpdf->curlAllowUnsafeSslRequests = true;
        $mpdf->WriteHTML($html);
        $mpdf->Output('perjadin.pdf', 'I');
    }

    public function pdf_kanan_noborder($id_st)
    {

        $data['title'] = "PDF";
        $this->load->model('tb_st_model');
        $detail = $this->tb_st_model->get_tb_st($id_st);
        $data['detail'] = $detail;



        $aktif = array('tb_st.id_st' => ($id_st));

        $data['campur2'] = $this->m_campur->join_table($aktif);

        // $this->load->view('v_campur', $data);
        $html = $this->load->view('v_blanko_kanan_noborder', $data, true);
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [330, 215]]);
        $mpdf->curlAllowUnsafeSslRequests = true;
        $mpdf->WriteHTML($html);
        $mpdf->Output('perjadin.pdf', 'I');
    }


    public function pdf_st($id_st)
    {
        // $this->load->model('tb_st_model');
        // $detail = $this->tb_st_model->get_tb_st($id_st);
        // $data['detail'] = $detail;

        $detail1 = $this->m_campur->join_table1($id_st);
        $data['daftar_peg'] = $detail1;
        $data['title'] = "Perjadin";
        $detail2 = $this->m_campur->join_table2($id_st);
        $data['daftar_peg_st'] = $detail2;




        // $this->load->view('v_st_peg', $data);

        $html = $this->load->view('v_st_peg', $data, true);
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [215, 330]]);
        $mpdf->curlAllowUnsafeSslRequests = true;
        $mpdf->WriteHTML($html);
        $mpdf->Output('perjadin.pdf', 'I');
    }

    public function pdf_st_lite($id_st)
    {

        $detail1 = $this->m_campur->join_table1($id_st);
        $data['daftar_peg'] = $detail1;
        $data['title'] = "Perjadin";
        $detail2 = $this->m_campur->join_table2($id_st);
        $data['daftar_peg_st'] = $detail2;



        $data['title'] = "Perjadin";
        $html = $this->load->view('v_st_lite', $data, true);
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [215, 330]]);
        $mpdf->curlAllowUnsafeSslRequests = true;
        $mpdf->WriteHTML($html);
        $mpdf->Output('perjadin.pdf', 'I');
    }
    public function pdf_st_list($id_st)
    {
        $detail1 = $this->m_campur->join_table1($id_st);
        $data['daftar_peg'] = $detail1;
        $data['title'] = "Perjadin";
        $detail2 = $this->m_campur->join_table2($id_st);
        $data['daftar_peg_st'] = $detail2;
        // $this->load->view('v_st_list', $data,false);


        $data['title'] = "Perjadin";
        $html = $this->load->view('v_st_list', $data, true);
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [215, 330]]);
        $mpdf->curlAllowUnsafeSslRequests = true;
        $mpdf->WriteHTML($html);
        $mpdf->Output('perjadin.pdf', 'I');
    }


    public function pdf_lap($id_st)
    {
        $detail2 = $this->m_campur->join_table2($id_st);
        $data['daftar_peg_st'] = $detail2;
        $aktif = array('tb_st.id_st' => ($id_st));
        $data['daftar_peg'] = $this->m_campur->join_table($aktif);
        // $this->load->view('v_laporan', $data);

        $data['title'] = "Perjadin";
        $html = $this->load->view('v_laporan', $data, true);
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [215, 330]]);
        $mpdf->curlAllowUnsafeSslRequests = true;
        $mpdf->WriteHTML($html);
        $mpdf->Output('perjadin.pdf', 'I');
    }
}