<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_materi extends CI_Model{
    
    function tampil_materi(){
        $segment = $this->uri->segment(3);
        return $this->db->get_where('list_materi', ['materi_id' => $segment]);
    }
    
    function edit_data($where,$table){
    return $this->db->get_where($table,$where);
    }
    
    function get_data($table){
    return $this->db->get($table);
    }

    function insert_data($data,$table){
    $this->db->insert($table,$data);
    }

    function update_data($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
    }

    function delete_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
    }

    function upload(){
    $config['upload_path']   = './assets/upload/image/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size']      = 1048; 
    $config['encrypt_name']  = TRUE;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('sampul')) {
        return array(
            'result' => 'success',
            'file'   => $this->upload->data(),
            'error'  => ''
        );
    } else {
        return array(
            'result' => 'failed',
            'file'   => '',
            'error'  => $this->upload->display_errors()
        );
    }
}

    function save($data){
        return $this->db->insert('list_materi', $data);
    }

} 
?>