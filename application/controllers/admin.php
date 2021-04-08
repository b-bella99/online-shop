<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ibexstore_model');
    }

    public function index()
	{
		$judul['title']='Ibex Store | Login Admin';
        $this->load->view('ibexstore/admin/index', $judul);
	}

    public function dashboard()
	{
		$data['title'] = 'Ibex Store | Dashboard Admin';
		$data['kategori_baju'] = $this->ibexstore_model->jumlahKategori();
		$data['produk'] = $this->ibexstore_model->jumlahProduk();
		$this->load->view('ibexstore/admin/dashboard', $data);
	}

    // ------------------- Kategori -------------------

    public function kategori()
    {
        $data = array(
            'title' => 'Ibex Store | Data Kategori',
            'kategori' => $this->ibexstore_model->datatables()
        );
        $this->load->view('ibexstore/admin/kategori');
    }

    public function tambahKategori()
    {
        $data['title'] = 'Ibex Store | Tambah Kategori';
        $this->form_validation->set_rules('nama', 'nama', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('ibexstore/admin/tambahKategori');
        } else {
            $config['upload_path'] = APPPATH.'../assets/img/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png|avi|flv|wmv|mp4';
            $config['max_size']  = '600000';
            $config['overwrite'] = TRUE;
            
            $this->load->library('upload', $config);

            $this->upload->initialize($config);
            
            $data['nama'] = $this->input->post('nama',true);
            
            if ( ! $this->upload->do_upload('gambar') ){
                $error = array('error' => $this->upload->display_errors(),
                                'kategori_baju' => $this->ibexstore_model->datatabelsProduk());
                $this->load->view('ibexstore/admin/kategori_baju', $error);
            } else {
                $upload_data = $this->upload->data();
                $data['gambar'] = $upload_data['file_name'];
                $this->ibexstore_model->tambahKategori($data);
            redirect('ibexstore/admin/kategori_baju','refresh');
            }
        }
    }

    public function editKategori($id_kategori)
    {
        $data['title'] = 'Ibex Store | Edit Kategori';
        $data['kategori'] = $this->ibexstore_model->getKategoriId($id_kategori);

        $this->form_validation->set_rules('nama', 'nama', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('ibexstore/admin/edit_kategori',$data);
        } else {
            $this->ibexstore_model->ubahKategori();
            $this->session->set_flashdata('flash-data','diubah');
            
            redirect('admin/kategori','refresh');
        }
    }

    public function hapusKategori($id_kategori)
    {
        $this->ibexstore_model->hapusKategori($id_kategori);
        $this->session->set_flashdata('flash-data','dihapus');
    }

    // ------------------- End Kategori -------------------

    // ------------------- Produk -------------------
    public function produk()
	{
		$data = array(
            'title' => 'Ibex Store | Data Produk',
            'produk' => $this->ibexstore_model->datatabelsProduk()
        );
		$this->load->view('ibexstore/admin/produk', $data);
	}

	public function detailProduk($id_produk)
	{
		$data['title'] = 'Ibex Store | Detail Produk';
		$data['film'] = $this->ibexstore_model->getProdukId($id_produk);
		$this->load->view('ibexstore/admin/detail_produk', $data);
	}

	public function tambahProduk()
	{
		$data['title'] = 'Ibex Store | Tambah Produk';
		$this->form_validation->set_rules('nama', 'nama', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('ibexstore/admin/tambah_produk');
        } else {
            $config['upload_path'] = APPPATH.'../assets/img/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png|avi|flv|wmv|mp4';
            $config['max_size']  = '600000';
            $config['overwrite'] = TRUE;
            
            $this->load->library('upload', $config);

            $this->upload->initialize($config);
            
            $data['nama'] = $this->input->post('nama',true);
            $data['kategori_jk'] = $this->input->post('kategori_jk',true);
            $data['kategpri_baju'] = $this->input->post('kategpri_baju',true);
            $data['harga'] = $this->input->post('harga',true);
            $data['ukuran'] = $this->input->post('ukuran',true);
            $data['keterangan'] = $this->input->post('keterangan',true);
            
            if ( ! $this->upload->do_upload('gambar') ){
                $error = array('error' => $this->upload->display_errors(),
                                'produk' => $this->ibexstore_model->datatabelsProduk());
                $this->load->view('ibexstore/admin/produk', $error);
            }
            else{
                $upload_data = $this->upload->data();
                $data['gambar'] = $upload_data['file_name'];
                $this->ibexstore_model->tambahProduk($data);
            redirect('ibexstore/admin/produk','refresh');
            }
        }
	}

    public function editProduk($id_produk)
    {
        $data['title'] = 'Ibex Store | Edit Produk';
        $data['produk'] = $this->ibexstore_model->getProdukId($id_produk);

        $this->form_validation->set_rules('nama', 'nama', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('ibexstore/admin/edit_produk',$data);
        } else {
            $this->ibexstore_model->ubahProduk();
            $this->session->set_flashdata('flash-data','diubah');
            
            redirect('admin/produk','refresh');
        }
    }

	public function hapusProduk($id_produk)
	{
		$this->ibexstore_model->hapusProduk($id_produk);
        $this->session->set_flashdata('flash-data','dihapus');
        redirect('ibexstore/admin/produk','refresh');
	}

    // ------------------- End Produk -------------------
}


?>