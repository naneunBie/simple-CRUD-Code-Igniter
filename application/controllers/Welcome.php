<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('M_data');
	}
	
	public function index()
	{
		$data['order'] = $this->M_data->tampil_data('order')->result();
		$this->load->view('v_tabel', $data);
	}
	
	public function add_data() {
		$this->load->view('v_addForm');
	}
	
	function action_add(){
		$id_order = $this->input->post('id_order');
		$nama_pemesan = $this->input->post('nama_pemesan');
		$add_pemesan = $this->input->post('add_pemesan');
		$no_telp = $this->input->post('no_telp');
        $jenis_barang = $this->input->post('jenis_barang');
		$nama_barang = $this->input->post('nama_barang');
		$dosis = $this->input->post('dosis');
		$jumlah = $this->input->post('jumlah');
		$status = $this->input->post('status');
		
		$data = array(
			'id_order' => $id_order,
            'nama_pemesan' => $nama_pemesan,
            'add_pemesan' => $add_pemesan,
            'no_telp' => $no_telp,
			'jenis_barang' => $jenis_barang,
			'nama_barang' => $nama_barang,
            'dosis' => $dosis,
            'jumlah' => $jumlah,
            'status' => $status,
        );
		
		$this->M_data->input_data($data,'order');
        redirect('welcome');
    }

    function action_edit($id_order){
        $where = array('id_order' => $id_order);
        $data['order'] = $this->M_data->edit($where, 'order')->result();
        $this->load->view('v_edit', $data);
    }

    function action_delete($id_order){
        $where = array('id_order' => $id_order);
        $this->M_data->delete($where, 'order');
        redirect('welcome');

    }

    function update(){
		$id_order = $this->input->post('id_order');
		$nama_pemesan = $this->input->post('nama_pemesan');
		$add_pemesan = $this->input->post('add_pemesan');
		$no_telp = $this->input->post('no_telp');
        $jenis_barang = $this->input->post('jenis_barang');
		$nama_barang = $this->input->post('nama_barang');
		$dosis = $this->input->post('dosis');
		$jumlah = $this->input->post('jumlah');
		$status = $this->input->post('status');

        $data = array(
			'id_order' => $id_order,
            'nama_pemesan' => $nama_pemesan,
            'add_pemesan' => $add_pemesan,
            'no_telp' => $no_telp,
			'jenis_barang' => $jenis_barang,
			'nama_barang' => $nama_barang,
            'dosis' => $dosis,
            'jumlah' => $jumlah,
            'status' => $status,
        );
    
        $where = array(
            'id_order' => $id_order
        );

        $this->M_data->update($where,$data,'order');
        redirect('Welcome');
    }
}

?>
