<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {
public function create_category()
   {
       $data = array(
           'nama_kategori'          => $this->input->post('nama_kategori')
       );

       return $this->db->insert('kategori_barang', $data);
   }

public function get_categories()
   {
   	$query = $this->db->get('kategori_barang');
   	return $query->result();
   }


public function edit($post, $id_kategori)
  {
		$nama_kategori = $this->db->escape($post['nama_kategori']);

    
    $sql = $this->db->query('UPDATE kategori_barang SET nama_kategori = $nama_kategori WHERE id_kategori = '.intval($id_kategori));

    return TRUE;
	}


public function get_kategori_by_id($id_kategori)
    {
        $query = $this->db->get_where('kategori_barang', array('id_kategori' => $id_kategori));
        return $query->row();
    }

public function delete($id_kategori){
		$query = $this->db->query('DELETE from kategori_barang WHERE id_kategori= '.$id_kategori);

}
}
