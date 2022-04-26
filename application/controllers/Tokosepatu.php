<?php
defined('BASEPATH') or exit('No direct script accses allowed');
 
class Tokosepatu extends CI_Controller{

    public function index()
    {
        $this->load->view('v_input');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('nama', 'Nama Pembeli', 'required|min_length[3]',
        array(
            'required' => '%s Harus diisi',
            'min_length' => '%s terlalu pendek')
        );
        $this->form_validation->set_rules('nohp', 'Nomor Hp', 'required|min_length[3]',
        array(
            'required' => '%s Harus diisi',
       
        ));
        $this->form_validation->set_rules('merek', 'Merek Sepatu', 'required|min_length[3]',
        array(
            'required' => '%s Harus diisi',
           
        ));
        $this->form_validation->set_rules('ukuran', 'Ukuran Sepatu', 'required|min_length[2]',
        array(
            'required' => '%s Harus diisi',
      
        ));
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('v_input');
        }else{
            $data = [
                'nama' => $this->input->post('nama'),
                'nohp' => $this->input->post('nohp'),
                'merek' => $this->input->post('merek'),
                'ukuran' => $this->input->post('ukuran'),
                'harga' => $this->input->post('harga'),
            ];
        
        if ($this->input->post('merek') == "Neki"){
            $data['harga'] = 25000;
        }elseif($this->input->post('merek') == "Adidaw"){
            $data['harga'] = 29000;
        }elseif($this->input->post('merek') == "Nyekerin"){
            $data['harga'] = 16000;
        }elseif($this->input->post('merek') == "Polosan"){
            $data['harga'] = 6000;
        }elseif($this->input->post('merek') == "Origes"){
            $data['harga'] = 200000;
        }
        $this->load->view('v_output', $data);
    }
    }
}