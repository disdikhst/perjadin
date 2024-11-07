<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_logged_in();

        $this->load->model('m_campur');
        $this->load->helper(array('form', 'url'));
    }



    public function index_spd($id_st)
    {
        $this->load->model('tb_st_model');
        $detail2 = $this->tb_st_model->get_tb_st($id_st);
        $data['detail2'] = $detail2;



        $aktif = array('tb_st.id_st' => ($id_st));

        $data['daftar_peg2'] = $this->m_campur->join_table($aktif);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $data['title'] = "Perjadin";
        $this->load->view('template1/header', $data);
        $this->load->view('template1/sidebar');
        $this->load->view('template1/topbar');
        $this->load->view('tb_spd/index', $data);
        $this->load->view('template1/footer');
    }

 

    public function detail_st($id_st)
    {
        $this->load->model('tb_st_model');
        $detail = $this->tb_st_model->get_tb_st($id_st);
        $data['detail'] = $detail;
        $data['title'] = "Perjadin";

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('template1/header', $data);
        $this->load->view('template1/sidebar');
        $this->load->view('template1/topbar');
        $this->load->view('v_detail_st', $data);
        $this->load->view('template1/footer');
    }
}
