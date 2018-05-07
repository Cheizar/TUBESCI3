<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('barang');
		$data['barang'] = $this->barang->get_barang();
		$this->load->view('home_view', $data);
	}

	public function detail($id)
	{
		$this->load->model('barang');
		$data['detail'] = $this->barang->get_single($id);
		$this->load->view('home_detail', $data);
	}



public function tambah()
{
	$this->load->model('barang');
	$this->load->model('category_model');
	$data = array();
	$data['Category'] = $this->category_model->get_categories();

	$this->load->library('form_validation');
	$this->form_validation->set_rules('input_nama_barang',' nama barang!!!','required', array('required' => 'Isi %s,'));
	$this->form_validation->set_rules('input_jumlah_stok',' jumlah stok!!!','required', array('required' => 'Isi %s,'));
	$this->form_validation->set_rules('input_harga_satuan',' harga satuan!!!','required', array('required' => 'Isi %s,'));
	$this->form_validation->set_rules('input_keterangan',' keterangan!!!','required', array('required' => 'Isi %s,'));
	$this->form_validation->set_rules('input_tanggal',' tanggal!!!','required', array('required' => 'Isi %s,'));


	if($this->form_validation->run()==FALSE){
			$this->load->view('tambah', $data);
		}
		else{
			if ($this->input->post('simpan')) {
			$upload = $this->barang->upload();

			if ($upload['result'] == 'success') {
				$this->barang->insert($upload);
				redirect('home');
			}else{
				$data['message'] = $upload['error'];
			}
		}
		

		$this->load->view('home_view', $data);
	}
}



	// if ($this->input->post('simpan')){
	// 	$upload = $this->artikel->upload();

	// 	if ($upload['result'] == 'success') {
	// 		$this->artikel->insert($upload);
	// 		redirect('home');
	// 	}else{
	// 		$data['message'] = $upload['error'];
	// 	}
	// }

	// $this->load->view('home_view', $data);
	// }


	public function edit($id_barang){
		$this->load->model('barang');
		$data['tipe'] = "Edit";
		$data['default'] = $this->barang->get_single($id_barang);

		if(isset($_POST['simpan'])){
			$this->barang->update($_POST, $id_barang);
			redirect('home_view');
		}

		$this->load->view("home_view_form",$data);
	}


public function create()
    {
        // Judul Halaman
        $data['page_title'] = 'Buat Kategori';

        // Form validasi untuk Nama Kategori
        $this->form_validation->set_rules(
            'cat_name',
            'Nama Kategori',
            'required|is_unique[categories.cat_name]',
            array(
                'required' => 'Isi %s donk, males amat.',
                'is_unique' => 'Judul ' . $this->input->post('title') . ' sudah ada bosque.'
            )
        );
if($this->form_validation->run() === FALSE){
            // $this->load->view('templates/header');
            $this->load->view('home_view', $data);
            // $this->load->view('templates/footer');
        } else {
            $this->category_model->create_category();
            redirect('Category');
        }
    }



	public function delete($id_barang){
		$this->load->model('barang');
		$this->barang->delete($id_barang);
		redirect('home');
	}

}




/**
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	