<?php
class Home extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {

    $data['judul'] = "Katalog Buku";
    $data["buku"] = $this->ModelBuku->getBuku()->result();
    //jika sudah login dan jika belum login
    if ($this->session->userdata('email')) {
      $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
      $data['image'] = $user['image'];
      $data['user'] = $user['nama'];
      $data['role'] = $user['role_id'];
      $this->load->view('templates/templates-user/header', $data);
      $this->load->view('buku/daftarbuku', $data);
      $this->load->view('templates/templates-user/footer', $data);
    } else {
      $data['user'] = 'Pengunjung';
      $this->load->view('templates/templates-user/header', $data);
      $this->load->view('buku/daftarbuku', $data);
      $this->load->view('templates/templates-user/footer', $data);
    }
  }

  public function detailBuku()
  {

    $id = $this->uri->segment(3);
    $buku = $this->ModelBuku->joinKategoriBuku(['buku.id' => $id])->result();
    $data['judul'] = "Detail Buku";

    if ($this->session->userdata('email')) {
      $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
      $data['image'] = $user['image'];
      $data['user'] = $user['nama'];
      $data['role'] = $user['role_id'];
    }
    foreach ($buku as $fields) {
      $data['judul_buku'] = $fields->judul_buku;
      $data['pengarang'] = $fields->pengarang;
      $data['penerbit'] = $fields->penerbit;
      $data['kategori'] = $fields->kategori;
      $data['tahun'] = $fields->tahun_terbit;
      $data['isbn'] = $fields->isbn;
      $data['gambar'] = $fields->image;
      $data['dipinjam'] = $fields->dipinjam;
      $data['dibooking'] = $fields->dibooking;
      $data['stok'] = $fields->stok;
      $data['id'] = $id;
    }
    $this->load->view('templates/templates-user/header', $data);
    $this->load->view('buku/detail-buku', $data);
    $this->load->view('templates/templates-user/footer');
  }
}
