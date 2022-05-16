<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class T70_grup1 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('T70_grup1_model');
        $this->load->library('form_validation');
		$this->load->library('datatables');
    }

    public function index()
    {
        // $this->load->view('t70_grup1/t70_grup1_list');
        $data['_judulHalaman'] = 'Data Grup1';
        $data['_view'] = 't70_grup1/t70_grup1_list';
        $this->load->view('dashboard/dashboard', $data);
    }

    public function json() {
        header('Content-Type: application/json');
        echo $this->T70_grup1_model->json();
    }

    public function read($id)
    {
        $row = $this->T70_grup1_model->get_by_id($id);
        if ($row) {
            $data = array(
				'id' => $row->id,
				'induk' => $row->induk,
				'kode' => $row->kode,
				'nama' => $row->nama,
			);
            //$this->load->view('t70_grup1/t70_grup1_read', $data);
            $data['_judulHalaman'] = 'Data Grup1';
            $data['_view'] = 't70_grup1/t70_grup1_read';
            $this->load->view('dashboard/dashboard', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t70_grup1'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Simpan',
            'action' => site_url('t70_grup1/create_action'),
			'id' => set_value('id'),
			'induk' => set_value('induk'),
			'kode' => set_value('kode'),
			'nama' => set_value('nama'),
		);
        //$this->load->view('t70_grup1/t70_grup1_form', $data);
        $data['_judulHalaman'] = 'Data Grup1';
        $data['_judulForm'] = 'Tambah Data';
        $data['_view'] = 't70_grup1/t70_grup1_form';
        $this->load->view('dashboard/dashboard', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
				'induk' => $this->input->post('induk',TRUE),
				'kode' => $this->input->post('kode',TRUE),
				'nama' => $this->input->post('nama',TRUE),
			);

            $this->T70_grup1_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('t70_grup1'));
        }
    }

    public function update($id)
    {
        $row = $this->T70_grup1_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Simpan',
                'action' => site_url('t70_grup1/update_action'),
				'id' => set_value('id', $row->id),
				'induk' => set_value('induk', $row->induk),
				'kode' => set_value('kode', $row->kode),
				'nama' => set_value('nama', $row->nama),
			);
            //$this->load->view('t70_grup1/t70_grup1_form', $data);
            $data['_judulHalaman'] = 'Data Grup1';
            $data['_judulForm'] = 'Ubah Data';
            $data['_view'] = 't70_grup1/t70_grup1_form';
            $this->load->view('dashboard/dashboard', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t70_grup1'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
				'induk' => $this->input->post('induk',TRUE),
				'kode' => $this->input->post('kode',TRUE),
				'nama' => $this->input->post('nama',TRUE),
			);

            $this->T70_grup1_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('t70_grup1'));
        }
    }

    public function delete($id)
    {
        $row = $this->T70_grup1_model->get_by_id($id);

        if ($row) {
            $this->T70_grup1_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('t70_grup1'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t70_grup1'));
        }
    }

    public function _rules()
    {
		$this->form_validation->set_rules('induk', 'induk', 'trim|required');
		$this->form_validation->set_rules('kode', 'kode', 'trim|required');
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');

		$this->form_validation->set_rules('id', 'id', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file T70_grup1.php */
/* Location: ./application/controllers/T70_grup1.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-05-16 08:25:51 */
/* http://harviacode.com */