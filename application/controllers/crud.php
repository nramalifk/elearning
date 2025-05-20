<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
    public function __construct(){
    parent::__construct();
        $this->load->model("m_materi");
        $this->load->library('form_validation');
        $this->load->helper('url');
        
        if($this->session->userdata('status') != "login"){ 
            redirect(base_url("login"));
        }
    }
    
    public function index(){
        $data["list_materi"] = $this->db->query("select * from list_materi order by materi_id")->result();
        $this->load->view("v_tampil", $data);
    }
    
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }

    function buka_materi(){
        $data['list_materi'] = $this->m_materi->tampil_materi()->result();
        $this->load->view('view_materi',$data);
    }


    function huruf(){
        $this->load->view('v_huruf');
    }    
    
    public function tambah(){
        $data = array();
        if($this->input->method() == 'post'){ 
            $upload = $this->m_materi->upload();
            if($upload['result'] == "success"){
            $data_materi = array(
                'tanggal'  => $this->input->post('tanggal'),
                'kategori' => $this->input->post('kategori'),
                'judul'    => $this->input->post('judul'),
                'pemateri' => $this->input->post('pemateri'),
                'sampul'   => $upload['file']['file_name']
            );
            $this->m_materi->insert_data($data_materi, 'list_materi');
            redirect('crud');
        }else{
            $data['message'] = $upload['error'];
        }
        }
        $this->load->view('v_form', $data);
    }

    
    public function edit($id){
        $where = array(
        'materi_id' => $id
        );
        $data['list_materi'] = $this->m_materi->edit_data($where,'list_materi')->result();
        $this->load->view('v_edit',$data);
    }
        
    public function update(){
        $post = $this->input->post();
    
        $id = $post["id"];
    
        if (!empty($_FILES["sampul"]["name"])) {
            $upload = $this->m_materi->upload();
            if ($upload['result'] == 'success') {
                $sampul = $upload['file']['file_name'];
            } else {
                $sampul = $post["old_image"]; // atau tampilkan error
            }
        } else {
            $sampul = $post["old_image"];
        }

        $data = array(
            'tanggal'  => $post["tanggal"],
            'kategori' => $post["kategori"],
            'judul'    => $post["judul"],
            'sampul'   => $sampul,
            'pemateri' => $post["pemateri"]
        );

        $where = array('materi_id' => $id);

        $this->m_materi->update_data($where, $data, 'list_materi');
        redirect(base_url().'crud');
    }
    
    function hapus_materi($id){
        if (!$id) {
            show_404(); // tampilkan halaman 404 jika id tidak ada
        }
        $where = array('materi_id' => $id);
        $this->m_materi->delete_data($where,'list_materi');
        redirect(base_url().'crud');
    }
    
    function hapus_gambar($id){
    $materi = $this->m_materi->edit_data(['materi_id' => $id], 'list_materi')->row();
    
    // Hapus file jika ada
    if ($materi && !empty($materi->sampul)) {
        $path = './assets/upload/image' . $materi->sampul;
        if (file_exists($path)) {
            unlink($path);
        }
    }

    // Hapus dari DB
    $this->m_materi->delete_data(['materi_id' => $id], 'list_materi');
    redirect(base_url().'crud');
    }

    function tulis_materi(){
        $this->load->view('v_tulis');
    }

    public function simpanMateri() {
        $isi = $this->input->post('isi');
        $data = [
            'isi' => $isi
        ];
        $this->db->insert('list_materi', $data);
        redirect('crud/buka_materi');
    }

}