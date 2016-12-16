<?php
class Product extends CI_Controller {
    function __construct() {
        parent::__construct();
        //ambil dari model
        $this->load->model('mod_product');

    }
    function index()
    {
        echo 'hello index...<br>';
        
        //$data['products'] = array('sepatu','sandal', 'topi', 'kepala', 'pundak', 'lutut', 'kaki');
        $data['products'] = $this->mod_product->get();
        $data['kategori'] = "ini sembarang data";
        //cara panggil index
        //$this->load->view('header');
        //$this->load->view('product/index',$data);
        //$this->load->view('footer');
        $this->template->load('template','product/index',$data);
    }
    
    function create()
    {
        $data['categories']= $this->db->get('table_category')->result();
        $this->load->view('product/create', $data);
    }
    
    function store()
    {
        $this->mod_product->save();
        redirect('product');
    }
            
    function xiaomi($type)
    {
        echo 'hello xiamoi..<br>';
        //wajib ada kalo 
        echo 'parameter..'.$type."<br>";
        //boolean boleh gak ada
        echo 'atau uri segment ke 3..'.$this->uri->segment(3)."<br>";
    }
}
