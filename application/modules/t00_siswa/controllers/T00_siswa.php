<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class T00_siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('T00_siswa_model');
        $this->load->library('form_validation');
		$this->load->library('datatables');
    }

    public function index()
    {
        // $this->load->view('t00_siswa/t00_siswa_list');
        $data['_judulHalaman'] = 'Data Siswa';
        $data['_view'] = 't00_siswa/t00_siswa_list';
        $this->load->view('dashboard/dashboard', $data);
    }

    public function json() {
        header('Content-Type: application/json');
        echo $this->T00_siswa_model->json();
    }

    public function read($id)
    {
        $row = $this->T00_siswa_model->get_by_id($id);
        if ($row) {
            $data = array(
				'id' => $row->id,
				'nik' => $row->nik,
				'nama' => $row->nama,
				'tgl_lahir' => $row->tgl_lahir,
			);
            //$this->load->view('t00_siswa/t00_siswa_read', $data);
            $data['_judulHalaman'] = 'Data Siswa';
            $data['_view'] = 't00_siswa/t00_siswa_read';
            $this->load->view('dashboard/dashboard', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t00_siswa'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Simpan',
            'action' => site_url('t00_siswa/create_action'),
			'id' => set_value('id'),
			'nik' => set_value('nik'),
			'nama' => set_value('nama'),
			'tgl_lahir' => set_value('tgl_lahir'),
		);
        //$this->load->view('t00_siswa/t00_siswa_form', $data);
        $data['_judulHalaman'] = 'Data Siswa';
        $data['_judulForm'] = 'Tambah Data';
        $data['_view'] = 't00_siswa/t00_siswa_form';
        $this->load->view('dashboard/dashboard', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
				'nik' => $this->input->post('nik',TRUE),
				'nama' => $this->input->post('nama',TRUE),
				'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
			);

            $this->T00_siswa_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('t00_siswa'));
        }
    }

    public function update($id)
    {
        $row = $this->T00_siswa_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Simpan',
                'action' => site_url('t00_siswa/update_action'),
				'id' => set_value('id', $row->id),
				'nik' => set_value('nik', $row->nik),
				'nama' => set_value('nama', $row->nama),
				'tgl_lahir' => set_value('tgl_lahir', $row->tgl_lahir),
			);
            //$this->load->view('t00_siswa/t00_siswa_form', $data);
            $data['_judulHalaman'] = 'Data Siswa';
            $data['_judulForm'] = 'Ubah Data';
            $data['_view'] = 't00_siswa/t00_siswa_form';
            $this->load->view('dashboard/dashboard', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t00_siswa'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
				'nik' => $this->input->post('nik',TRUE),
				'nama' => $this->input->post('nama',TRUE),
				'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
			);

            $this->T00_siswa_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('t00_siswa'));
        }
    }

    public function delete($id)
    {
        $row = $this->T00_siswa_model->get_by_id($id);

        if ($row) {
            $this->T00_siswa_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('t00_siswa'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t00_siswa'));
        }
    }

    public function _rules()
    {
		$this->form_validation->set_rules('nik', 'nik', 'trim|required');
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('tgl_lahir', 'tgl lahir', 'trim|required');

		$this->form_validation->set_rules('id', 'id', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file T00_siswa.php */
/* Location: ./application/controllers/T00_siswa.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-03-31 01:26:04 */
/* http://harviacode.com */