<?php 


/* Author Hifzon, 24 Oktober 2020 */

class Dashboard extends CI_Controller { 

    function __construct(){
        parent::__construct();

        $this->load->model('Model_Data');
    }

    
    public function getPageSummary() {
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

    // load data for trend grafik ajax
    public function getProduksi(){
        $type = $this->input->post('type');
        $bulan = ($this->input->post('bulan') == '') ? date('m') : $this->input->post('bulan');
        if ($type == "byTanggal") {
            $dataBarang  = $this->Model_Data->getAllSummary();
        } else {
            $dataBarang  = $this->Model_Data->getProduksi($bulan, 'trendSummary');
        }

        echo $dataBarang;
    }

    // load total ajax
    public function getTotal(){
        $data = $this->Model_Data->getSumTotal();
        echo $data;
    }


    // redirect auth login
    public function actionAuth() {
        redirect(base_url().'dashboard/summary');
    }
}


?>