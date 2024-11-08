<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Tb_ttd_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get tb_ttd by id_nip_ttd
     */
    function get_tb_ttd($id_nip_ttd)
    {
        return $this->db->get_where('tb_ttd', array('id_nip_ttd' => $id_nip_ttd))->row_array();
    }

    /*
     * Get all tb_ttd
     */
    function get_all_tb_ttd($id)
    {

        $this->db->order_by('id_nip_ttd', 'desc');
        $this->db->where('id', $id);
        $this->db->from('tb_ttd');
        $query = $this->db->get();
        return $query->result_array();
    }

    /*
     * function to add new tb_ttd
     */
    function add_tb_ttd($params)
    {
        $this->db->insert('tb_ttd', $params);
        return $this->db->insert_id();
    }

    /*
     * function to update tb_ttd
     */
    function update_tb_ttd($id_nip_ttd, $params)
    {
        $this->db->where('id_nip_ttd', $id_nip_ttd);
        return $this->db->update('tb_ttd', $params);
    }

    /*
     * function to delete tb_ttd
     */
    function delete_tb_ttd($id_nip_ttd)
    {
        return $this->db->delete('tb_ttd', array('id_nip_ttd' => $id_nip_ttd));
    }
}
