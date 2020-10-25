<?php 

class Dashboard extends CI_Controller { 

    function __construct(){
        parent::__construct();

        $this->load->model('Model_Data');
    }

    public function index() {
        $news  = $this->Model_Data->getNews();
        $nowMonth = date('m');
        $getProduksi  = $this->Model_Data->getProduksi($nowMonth,'forTable');

        $view['data'] = [
            "title"         => "E-Dashboard Barang",
            "last_data"     => "23-10-2020",
            "news"          => $news,
            "produksi"      => $getProduksi,
            "konten"        => 'konten/summary',
        ];

        $this->load->view('template/layout',$view);
    }

    public function getProduksi(){
        $bulan = ($this->input->post('bulan') == '') ? date('m') : $this->input->post('bulan');
        $dataBarang  = $this->Model_Data->getProduksi($bulan, 'trendSummary');
        echo $dataBarang;
    }

    public function actionAuth() {
        redirect(base_url().'Dashboard');
    }
}


?>