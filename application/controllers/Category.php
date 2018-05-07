 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {


public function index()
{
    $this->load->model('category_model');

    $data['Category'] = $this->category_model->get_categories();

    $this->load->view('tampil_category', $data);
}


    public function detail($id_kategori)
    {
        $this->load->model('category_model');
        $data['detail'] = $this->category_model->get_kategori_by_id($id_kategori);
        $this->load->view('category_detail', $data);
    }



 public function create()
    {
        $this->load->model('category_model');

        // Form validasi untuk Nama Kategori
        $this->form_validation->set_rules(
            'nama_kategori','Nama Kategori','required|is_unique[kategori_barang.nama_kategori]',
            array(
                'required' => 'Isi %s donk, males amat.',
                'is_unique' => 'isi %s sudah ada bosque.'
            )
        );

        if($this->form_validation->run() === FALSE){
            $this->load->view('create_kategori');
        } else {
            $this->category_model->create_category();
            redirect('Category');            
        }
    }

    public function delete($id_kategori){
        $this->load->model('category_model');
        $this->category_model->delete($id_kategori);
        redirect('Category');

    }


    public function edit($id_kategori)
    {
        $this->load->model('category_model');
        $data['tipe'] = "Edit";
        $data['single'] = $this->category_model->get_kategori_by_id($id_kategori);

        if(isset($_POST['simpan']))
        {
            $this->category_model->update($_POST, $id_kategori);
            redirect('tampil_category');
        }

        $this->load->view("edit_kategori",$data);
    }


}