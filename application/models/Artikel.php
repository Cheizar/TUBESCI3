<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Model {

	public function get_artikels(){
		$query = $this->db->get('barang');
		return $query->result();
	}	

	public function get_single($id)
	{
		$query = $this->db->query('select * from barang where id_barang='.$id);
		return $query->result();

		$this->db->select("*");
		$this->db->from('barang');
		$this->db->join('kategori_barang','barang.id_kategori = kategori_barang.id_kategori');
		$this->db->Where('barang.id_barang='.$id);
		return $this->db->get()->result();

	}

	public function upload(){
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = '2048';
		$config['remove_space'] = TRUE;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('input_gambar')){
			$return = array ('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		} else {
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	} 
	public function insert($upload)
	{
		$data = array(
			'id_barang' => '',
			'nama_barang' => $this->input->post('input_nama_barang'),
			'jumlah_stok' => $this->input->post('input_jumlah_stok'),
			'harga_satuan' => $this->input->post('input_harga_satuan'),
			'gambar' => $upload['file']['file_name'],
			'keterangan' => $this->input->post('input_keterangan'),
			'tanggal' => $this->input->post('input_tanggal'),
		);

		$this->db->insert('barang', $data);
	}

	public function update($post, $id){
		$nama_barang = $this->db->escape($post['nama_barang']);
		$jumlah_stok = $this->db->escape($post['jumlah_stok']);
		$harga_satuan=$this->db->escape($post['harga_satuan']);
		$keterangan=$this->db->escape($post['keterangan']);
		$tanggal=$this->db->escape($post['tanggal']);

		$sql = $this->db->query('UPDATE barang SET nama_barang = $nama_barang, jumlah_stok = $jumlah_stok,harga_satuan = $harga_satuan, keterangan = $keterangan, tanggal = $tanggal WHERE id_barang = '.intval($id_barang));

		return TRUE;

	}


	public function delete($id_barang){
		$query = $this->db->query('DELETE from barang WHERE id_barang= 
			'.$id_barang);
	}

	public function create_category()
   {
       $data = array(
           'nama_kategori'          => $this->input->post('nama_kategori')
       );

       return $this->db->insert('kategori_barang', $data);
   }

	public function get_all_categories()
	{
		$this->db->order_by('nama_kategori');
		$query = $this->db->get('kategori_barang');
		return $query->result();
	}

}
