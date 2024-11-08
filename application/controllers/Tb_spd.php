<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Tb_spd extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_logged_in();

        $this->load->model('Tb_spd_model');
        $this->load->model('Tb_instansi_model');
        $this->load->model('Tb_st_model');
        $this->load->model('Tb_pegawai_model');
        $this->load->model('Tb_ttd_model');
        $this->load->model('m_campur');
    }

    /*
     * Listing of tb_spd
     */
    function index()
    {
        $id = $this->session->userdata('id');
        $data['tb_spd'] = $this->Tb_spd_model->get_all_tb_spd($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = "Perjadin";
        $this->load->view('template1/header', $data);
        $this->load->view('template1/sidebar');
        $this->load->view('template1/topbar');
        $this->load->view('tb_spd/index', $data);
        $this->load->view('template1/footer');
    }

   

    /*
     * Adding a new tb_spd
     */
    function add()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('skpd_pembeban', 'Skpd Pembeban', 'required');
        $this->form_validation->set_rules('kode_belanja', 'Kode Belanja', 'required');

        if ($this->form_validation->run()) {
            $params = array(
                'id_instansi' => $this->input->post('id_instansi'),
                'id_st' => $this->input->post('id_st'),
                'id_nip' => $this->input->post('id_nip'),
                'id_nip_ttd' => $this->input->post('id_nip_ttd'),
                'peng1' => $this->input->post('peng1'),
                'tgl_lahir_peng1' => $this->input->post('tgl_lahir_peng1'),
                'peng2' => $this->input->post('peng2'),
                'tgl_lahir_peng2' => $this->input->post('tgl_lahir_peng2'),
                'skpd_pembeban' => $this->input->post('skpd_pembeban'),
                'kode_belanja' => $this->input->post('kode_belanja'),
                'id' => $this->session->userdata('id')
            );

            $tb_spd_id = $this->Tb_spd_model->add_tb_spd($params);
            redirect('detail/index_spd/' . $params['id_st']);
        } else {
            $id = $this->session->userdata('id');
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

            $data['all_tb_ttd'] = $this->Tb_ttd_model->get_all_tb_ttd($id);
            $data['all_tb_instansi'] = $this->Tb_instansi_model->get_all_tb_instansi($id);
            $data['all_tb_st'] = $this->Tb_st_model->get_all_tb_st($id);
            $data['all_tb_pegawai'] = $this->Tb_pegawai_model->get_all_tb_pegawai($id);


            $data['title'] = "Perjadin";
            $this->load->view('template1/header', $data);
            $this->load->view('template1/sidebar');
            $this->load->view('template1/topbar');
            $this->load->view('tb_spd/add', $data);
            $this->load->view('template1/footer');
        }
    }

    /*
     * Editing a tb_spd
     */
    function edit($id_spd)
    {
        // check if the tb_spd exists before trying to edit it
        $data['tb_spd'] = $this->Tb_spd_model->get_tb_spd($id_spd);

        if (isset($data['tb_spd']['id_spd'])) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('skpd_pembeban', 'Skpd Pembeban', 'required');
            $this->form_validation->set_rules('kode_belanja', 'Kode Belanja', 'required');

            if ($this->form_validation->run()) {
                $params = array(
                    'id_instansi' => $this->input->post('id_instansi'),
                    'id_st' => $this->input->post('id_st'),
                    'id_nip' => $this->input->post('id_nip'),
                    'id_nip_ttd' => $this->input->post('id_nip_ttd'),
                    'peng1' => $this->input->post('peng1'),
                    'tgl_lahir_peng1' => $this->input->post('tgl_lahir_peng1'),
                    'peng2' => $this->input->post('peng2'),
                    'tgl_lahir_peng2' => $this->input->post('tgl_lahir_peng2'),
                    'skpd_pembeban' => $this->input->post('skpd_pembeban'),
                    'kode_belanja' => $this->input->post('kode_belanja'),
                );

                $this->Tb_spd_model->update_tb_spd($id_spd, $params);
                redirect('detail/index_spd/' . $params['id_st']);
            } else {
                $id = $this->session->userdata('id');
                $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

                $data['all_tb_ttd'] = $this->Tb_ttd_model->get_all_tb_ttd($id);
                $data['all_tb_instansi'] = $this->Tb_instansi_model->get_all_tb_instansi($id);
                $data['all_tb_st'] = $this->Tb_st_model->get_all_tb_st($id);
                $data['all_tb_pegawai'] = $this->Tb_pegawai_model->get_all_tb_pegawai($id);

                $data['title'] = "Perjadin";
                $this->load->view('template1/header', $data);
                $this->load->view('template1/sidebar');
                $this->load->view('template1/topbar');
                $this->load->view('tb_spd/edit', $data);
                $this->load->view('template1/footer');
            }
        } else
            show_error('The tb_spd you are trying to edit does not exist.');
    }

    /*
     * Deleting tb_spd
     */
    function remove($id_spd)
    {





        $tb_spd = $this->Tb_spd_model->get_tb_spd($id_spd);

        // check if the tb_spd exists before trying to delete it
        if (isset($tb_spd['id_spd'])) {
            $this->Tb_spd_model->delete_tb_spd($id_spd);
            redirect('tb_st/index');
        } else
            show_error('The tb_spd you are trying to delete does not exist.');
    }
}
