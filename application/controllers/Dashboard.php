<?php 

class Dashboard extends CI_Controller { 

    function __construct(){
        parent::__construct();

        $this->load->model('Model_Data');
    }

    public function index() {
        $data = $this->Model_Data->getProduksi();
        $this->load->view('list', ["data" => $data]);
    }
}


?>