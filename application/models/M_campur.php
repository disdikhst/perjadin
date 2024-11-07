<?php
class m_campur extends CI_Model
{

    public function join_table($aktif)
    {

        $this->db->select('*');
        $this->db->from('tb_spd');
        $this->db->join('tb_st', 'tb_st.id_st=tb_spd.id_st');
        $this->db->join('tb_pegawai', 'tb_pegawai.id_nip=tb_spd.id_nip');
        $this->db->join('tb_instansi', 'tb_instansi.id_instansi=tb_spd.id_instansi');
        $this->db->join('tb_ttd', 'tb_ttd.id_nip_ttd=tb_spd.id_nip_ttd');
        $this->db->order_by('id_spd', 'asc');
        $this->db->where($aktif);
        $query = $this->db->get();
        return $query->result();
    }


    public function rekaptab()
    {

        $this->db->select('*');
        $this->db->from('tb_spd');
        $this->db->join('tb_st', 'tb_st.id_st=tb_spd.id_st');
        $this->db->join('tb_pegawai', 'tb_pegawai.id_nip=tb_spd.id_nip');
        $this->db->join('tb_instansi', 'tb_instansi.id_instansi=tb_spd.id_instansi');
        $this->db->join('tb_ttd', 'tb_ttd.id_nip_ttd=tb_spd.id_nip_ttd');
        $this->db->order_by('id_spd', 'asc');
        $query = $this->db->get();
        return $query->result();
    }
    // public function join_table1($aktif)
    // {

    //     $this->db->select('*');
    //     $this->db->from('tb_spd');
    //     $this->db->join('tb_pegawai', 'tb_pegawai.id_nip=tb_spd.id_nip');


    //     $this->db->where($aktif);
    //     $query = $this->db->get();
    //     return $query->result();
    // }
    public function join_table1($id_st)
    {

        $this->db->select('*');
        $this->db->from('tb_spd');
        $this->db->join('tb_pegawai', 'tb_pegawai.id_nip=tb_spd.id_nip');
         $this->db->order_by('id_spd', 'asc');
        $this->db->where('id_st', $id_st);
        $query = $this->db->get();
        return $query->result();
    }

    public function join_table2($id_st)
    {

        $this->db->select('*');
        $this->db->from('tb_st');
        $this->db->join('tb_instansi', 'tb_instansi.id_instansi=tb_st.id_instansi');
        $this->db->join('tb_ttd', 'tb_ttd.id_nip_ttd=tb_st.id_nip_ttd');
        $this->db->where('id_st', $id_st);
        $query = $this->db->get();
        return $query->row_array();
    }


    //     public function detail_st($id_st)
    //     {
    //         return $this->db->get_where('tb_st', array('id_st' => $id_st))->row_array();
    //     }


    //     public function detail_st2($id_st)
    //     {
    //         $query = $this->db->get_where('tb_st', array('id_st' => $id_st))->row();
    //         return $query;
    //         // return $this->db->get_where('tb_st', array('id_st' => $id_st))->row();
    //     }
}
