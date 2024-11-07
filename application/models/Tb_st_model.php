<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Tb_st_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get tb_st by id_st
     */
    function get_tb_st($id_st)
    {
        return $this->db->get_where('tb_st', array('id_st' => $id_st))->row_array();
    }

    /*
     * Get all tb_st
     */
    function get_all_tb_st($id)
    {
        $this->db->order_by('id_st', 'desc');
        $this->db->where('id', $id);
        $this->db->from('tb_st');
        $query = $this->db->get();
        return $query->result_array();
    }

    /*
     * function to add new tb_st
     */
    function add_tb_st($params)
    {
        $this->db->insert('tb_st', $params);
        return $this->db->insert_id();
    }

    /*
     * function to update tb_st
     */
    function update_tb_st($id_st, $params)
    {
        $this->db->where('id_st', $id_st);
        return $this->db->update('tb_st', $params);
    }

    /*
     * function to delete tb_st
     */
    function delete_tb_st($id_st)
    {
        return $this->db->delete('tb_st', array('id_st' => $id_st));
    }
}