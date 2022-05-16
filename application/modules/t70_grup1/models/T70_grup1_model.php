<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class T70_grup1_model extends CI_Model
{

    public $table = 't70_grup1';
    public $id = 'id';
    public $order = 'ASC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('id,induk,kode,nama');
        $this->datatables->from('t70_grup1');
        //add this line for join
        //$this->datatables->join('table2', 't70_grup1.field = table2.field');
        $this->datatables->add_column('action',
        anchor(site_url('t70_grup1/update/$1'), '<i class="fa fa-edit"></i>', 'class="btn btn-primary" title="Ubah"')
        .'&nbsp;'
        .anchor(site_url('t70_grup1/delete/$1'),'<i class="fa fa-trash"></i>','class="btn btn-danger" title="Hapus" onclick="javascript: return confirm(\'Are You Sure ?\')"'), 'id');
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
		$this->db->or_like('induk', $q);
		$this->db->or_like('kode', $q);
		$this->db->or_like('nama', $q);
		$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
		$this->db->or_like('induk', $q);
		$this->db->or_like('kode', $q);
		$this->db->or_like('nama', $q);
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

/* End of file T70_grup1_model.php */
/* Location: ./application/models/T70_grup1_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-05-16 08:25:51 */
/* http://harviacode.com */