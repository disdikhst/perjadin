<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Tb_pegawai extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_logged_in();

        $this->load->model('Tb_pegawai_model');
    }

    /*
     * Listing of tb_pegawai
     */
    function index()
    {
        $id = $this->session->userdata('id');
        $data['tb_pegawai'] = $this->Tb_pegawai_model->get_all_tb_pegawai($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = "Perjadin";
        $this->load->view('template1/header', $data);
        $this->load->view('template1/sidebar');
        $this->load->view('template1/topbar');
        $this->load->view('tb_pegawai/index', $data);
        $this->load->view('template1/footer');
    }

    /*
     * Adding a new tb_pegawai
     */
    function add()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nip_peg', 'NIP', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required|min_length[3]');
        $this->form_validation->set_rules('pangkat_gol', 'Pangkat Gol', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        // $this->form_validation->set_rules('ttl', 'Ttl');
        // $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
        $this->form_validation->set_rules('skpd', 'Skpd', 'required');
        $this->form_validation->set_rules('instansi', 'Instansi', 'required');

        if ($this->form_validation->run()) {
            $params = array(
                'nip_peg' => $this->input->post('nip_peg'),
                'nama' => $this->input->post('nama'),
                'pangkat_gol' => $this->input->post('pangkat_gol'),
                'jabatan' => $this->input->post('jabatan'),
                'ttl' => $this->input->post('ttl'),
                'pendidikan' => $this->input->post('pendidikan'),
                'skpd' => $this->input->post('skpd'),
                'instansi' => $this->input->post('instansi'),
                'id' => $this->session->userdata('id')
            );

            $tb_pegawai_id = $this->Tb_pegawai_model->add_tb_pegawai($params);
            redirect('tb_pegawai/index');
        } else {
            $data['title'] = "Perjadin";
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

            $this->load->view('template1/header', $data);
            $this->load->view('template1/sidebar');
            $this->load->view('template1/topbar');
            $this->load->view('tb_pegawai/add', $data);
            $this->load->view('template1/footer');
        }
    }

    /*
     * Editing a tb_pegawai
     */
    function edit($id_nip)
    {
        // check if the tb_pegawai exists before trying to edit it
        $data['tb_pegawai'] = $this->Tb_pegawai_model->get_tb_pegawai($id_nip);

        if (isset($data['tb_pegawai']['id_nip'])) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('nama', 'Nama', 'required|min_length[3]');
            $this->form_validation->set_rules('nip_peg', 'NIP', 'required');
            $this->form_validation->set_rules('pangkat_gol', 'Pangkat Gol', 'required');
            $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
            // $this->form_validation->set_rules('ttl', 'Ttl');
            // $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
            $this->form_validation->set_rules('skpd', 'Skpd', 'required');
            $this->form_validation->set_rules('instansi', 'Instansi', 'required');

            if ($this->form_validation->run()) {
                $params = array(

                    'nama' => $this->input->post('nama'),
                    'nip_peg' => $this->input->post('nip_peg'),
                    'pangkat_gol' => $this->input->post('pangkat_gol'),
                    'jabatan' => $this->input->post('jabatan'),
                    'ttl' => $this->input->post('ttl'),
                    'pendidikan' => $this->input->post('pendidikan'),
                    'skpd' => $this->input->post('skpd'),
                    'instansi' => $this->input->post('instansi'),
                );

                $this->Tb_pegawai_model->update_tb_pegawai($id_nip, $params);
                redirect('tb_pegawai/index');
            } else {
                $data['title'] = "Perjadin";
                $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

                $this->load->view('template1/header', $data);
                $this->load->view('template1/sidebar');
                $this->load->view('template1/topbar');
                $this->load->view('tb_pegawai/edit', $data);
                $this->load->view('template1/footer');
            }
        } else
            show_error('The tb_pegawai you are trying to edit does not exist.');
    }

    /*
     * Deleting tb_pegawai
     */
    function remove($id_nip)
    {
        $tb_pegawai = $this->Tb_pegawai_model->get_tb_pegawai($id_nip);

        // check if the tb_pegawai exists before trying to delete it
        if (isset($tb_pegawai['id_nip'])) {
            $this->Tb_pegawai_model->delete_tb_pegawai($id_nip);
            redirect('tb_pegawai/index');
        } else
            show_error('The tb_pegawai you are trying to delete does not exist.');
    }
}
