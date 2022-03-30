<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class T00_siswa_model extends CI_Model
{

    public $table = 't00_siswa';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id,nik,nama,tgl_lahir');
        $this->datatables->from('t00_siswa');
        //add this line for join
        //$this->datatables->join('table2', 't00_siswa.field = table2.field');
        $this->datatables->add_column('action',
        anchor(site_url('t00_siswa/update/$1'), '<i class="fa fa-edit"></i>', 'class="btn btn-primary" title="Ubah"')
        .'&nbsp;'
        .anchor(site_url('t00_siswa/delete/$1'),'<i class="fa fa-trash"></i>','class="btn btn-danger" title="Hapus" onclick="javascript: return confirm(\'Are You Sure ?\')"'), 'id');
        return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id', $q);
		$this->db->or_like('nik', $q);
		$this->db->or_like('nama', $q);
		$this->db->or_like('tgl_lahir', $q);
		$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
		$this->db->or_like('nik', $q);
		$this->db->or_like('nama', $q);
		$this->db->or_like('tgl_lahir', $q);
		$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file T00_siswa_model.php */
/* Location: ./application/models/T00_siswa_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-03-31 01:26:04 */
/* http://harviacode.com */