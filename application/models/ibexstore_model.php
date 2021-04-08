<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ibexstore_model extends CI_Model
{
    // --------------- Kategori Baju ---------------
    public function getKategori()
    {
        return $this->db->get('kategori_baju')->result_array();
    }

    public function getKategoriId($id_kategori)
    {
        return $this->db->get_where('kategori_baju',['id_kategori' => $id_kategori])->result_array();
    }

    public function hapusKategori($id_kategori)
    {
        $this->db->where('id_kategori', $id_kategori);
        $this->db->delete('kategori_baju');
    }

    public function jumlahKategori()
    {
        $query = $this->db->get('kategori_baju');
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }
        else
        {
            return 0;
        }
    }

    public function datatabelsKategori()
    {
        $query = $this->db->order_by('id_kategori','DESC')->get('kategori_baju');
        return $query->result_array();
    }

    public function tambahKategori($data)
    {
        $insert_data['nama'] = $data['nama'];    
        $insert_data['gambar'] = $data['gambar'];
        
        $query = $this->db->insert('kategori_baju', $insert_data);
    }

    public function ubahKategori()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'gambar' => $this->input->post('gambar')
        ];
        $this->db->where('id_kategori', $this->input->post('id_kategori'));
        $this->db->update('kategori_baju', $data);
    }


    public function searchKategori(){
        $keyword=$this->input->post('keyword');
        $this->db->like('nama',$keyword);
        return $this->db->get('kategori_baju')->result_array();
    }

    // --------------- End Kategori Baju ---------------

    // --------------- Produk ---------------

    public function getProduk()
    {
        return $this->db->get('produk')->result_array();
    }

    public function getProdukId($id_produk)
    {
        return $this->db->get_where('produk',['id_produk' => $id_produk])->result_array();
    }

    public function hapusProduk($id_produk)
    {
        $this->db->where('id_produk', $id_produk);
        $this->db->delete('produk');
    }

    public function jumlahProduk()
    {
        $query = $this->db->get('produk');
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }
        else
        {
            return 0;
        }
    }

    public function datatabelsProduk()
    {
        $query = $this->db->order_by('id_produk','DESC')->get('produk');
        return $query->result_array();
    }

    public function tambahProduk($data)
    {
        $insert_data['nama'] = $data['nama'];
        $insert_data['kategori_jk'] = $data['kategori_jk'];
        $insert_data['kategori_baju'] = $data['kategori_baju'];
        $insert_data['harga'] = $data['harga'];
        $insert_data['ukuran'] = $data['ukuran'];
        $insert_data['keterangan'] = $data['keterangan'];    
        $insert_data['gambar'] = $data['gambar'];
        
        $query = $this->db->insert('produk', $insert_data);
    }

    public function ubahProduk()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'kategori_jk' => $this->input->post('kategori_jk'),
            'kategori_baju' => $this->input->post('kategori_baju'),
            'harga' => $this->input->post('harga'),
            'ukuran' => $this->input->post('ukuran'),
            'keterangan' => $this->input->post('keterangan'),
            'gambar' => $this->input->post('gambar')
        ];
        $this->db->where('id_produk', $this->input->post('id_produk'));
        $this->db->update('produk', $data);
    }


    public function searchProduk(){
        $keyword=$this->input->post('keyword');
        $this->db->like('nama',$keyword);
        return $this->db->get('produk')->result_array();
    }

    // --------------- End Produk ---------------

    // --------------- Login ---------------

    // --------------- End Login ---------------
}

?>