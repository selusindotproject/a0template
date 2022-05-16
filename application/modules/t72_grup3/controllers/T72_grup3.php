<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class T72_grup3 extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('T72_grup3_model');
		$this->load->library('form_validation');
		$this->load->library('datatables');
		$this->load->model('t70_grup1/T70_grup1_model');
		$this->load->model('t71_grup2/T71_grup2_model');
	}

	public function getDataGrup2()
	{
		// POST data
		$postData = $this->input->post();

		//load model
		// $this->load->model('Main_model');

		// get data
		// $data = $this->Main_model->getCityDepartment($postData);
		$data = $this->T71_grup2_model->getDataGrup2($postData);

		echo json_encode($data);
	}

	public function index()
	{
		// $this->load->view('t72_grup3/t72_grup3_list');
		$data['_judulHalaman'] = 'Data Grup3';
		$data['_view'] = 't72_grup3/t72_grup3_list';
		$this->load->view('dashboard/dashboard', $data);
	}

	public function json() {
		header('Content-Type: application/json');
		echo $this->T72_grup3_model->json();
	}

	public function read($id)
	{
		$row = $this->T72_grup3_model->get_by_id($id);
		if ($row) {
			$data = array(
				'id' => $row->id,
				'induk' => $row->induk,
				'kode' => $row->kode,
				'nama' => $row->nama,
			);
			//$this->load->view('t72_grup3/t72_grup3_read', $data);
			$data['_judulHalaman'] = 'Data Grup3';
			$data['_view'] = 't72_grup3/t72_grup3_read';
			$this->load->view('dashboard/dashboard', $data);
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('t72_grup3'));
		}
	}

	public function create()
	{
		$dataGrup1 = $this->T70_grup1_model->get_all();
		// $dataGrup2 = $this->T71_grup2_model->get_all();
		$data = array(
			'button' => 'Simpan',
			'action' => site_url('t72_grup3/create_action'),
			'id' => set_value('id'),
			'induk' => set_value('induk'),
			'kode' => set_value('kode'),
			'nama' => set_value('nama'),
			'dataGrup1' => $dataGrup1,
			'grup1' => '',
			// 'dataGrup2' => $dataGrup2,
		);
		//$this->load->view('t72_grup3/t72_grup3_form', $data);
		$data['_judulHalaman'] = 'Data Grup3';
		$data['_judulForm'] = 'Tambah Data';
		$data['_view'] = 't72_grup3/t72_grup3_form';
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

			$this->T72_grup3_model->insert($data);
			$this->session->set_flashdata('message', 'Create Record Success');
			redirect(site_url('t72_grup3'));
		}
	}

	public function update($id)
	{
		$row = $this->T72_grup3_model->get_by_id($id);

		if ($row) {
			$dataGrup1 = $this->T70_grup1_model->get_all();
			// $dataGrup2 = $this->T71_grup2_model->get_all();
			$data = array(
				'button' => 'Simpan',
				'action' => site_url('t72_grup3/update_action'),
				'id' => set_value('id', $row->id),
				'induk' => set_value('induk', $row->induk),
				'kode' => set_value('kode', $row->kode),
				'nama' => set_value('nama', $row->nama),
				'dataGrup1' => $dataGrup1,
				'grup1' => $this->T71_grup2_model->get_by_id($row->induk)->induk,
				// 'dataGrup2' => $dataGrup2,
			);
			//$this->load->view('t72_grup3/t72_grup3_form', $data);
			$data['_judulHalaman'] = 'Data Grup3';
			$data['_judulForm'] = 'Ubah Data';
			$data['_view'] = 't72_grup3/t72_grup3_form';
			$this->load->view('dashboard/dashboard', $data);
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('t72_grup3'));
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

			$this->T72_grup3_model->update($this->input->post('id', TRUE), $data);
			$this->session->set_flashdata('message', 'Update Record Success');
			redirect(site_url('t72_grup3'));
		}
	}

	public function delete($id)
	{
		$row = $this->T72_grup3_model->get_by_id($id);

		if ($row) {
			$this->T72_grup3_model->delete($id);
			$this->session->set_flashdata('message', 'Delete Record Success');
			redirect(site_url('t72_grup3'));
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('t72_grup3'));
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

/* End of file T72_grup3.php */
/* Location: ./application/controllers/T72_grup3.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-05-16 13:06:43 */
/* http://harviacode.com */