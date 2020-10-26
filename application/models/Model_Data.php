<?php 


class Model_Data extends CI_Model {

    public function getNews(){
        $news = file_get_contents(base_url().'file/berita.json');
        $toArray = json_decode($news, true);
        return $toArray;
    }


    public function getDataProduksi() {
        $getProduksi = file_get_contents(base_url().'file/data_barang.json');
        $toArray = json_decode($getProduksi, true);
        return $toArray;
    }


    public function getProduksi($search_bulan , $type){
        $toArray = $this->getDataProduksi();

        if ($type == 'trendSummary') {
            foreach($toArray as $key) {

                $month =  date("m",strtotime($key['Tanggal']));
                if ($month == $search_bulan ) {
                    $arr[] = [
                        "name"      => "wilayah ".$key['Wilayah'],
                        "y"         => $key['Produksi'],
                        "drilldown" => "wilayah ".$key['Wilayah'],
                    ];
                } 
            }

            if (!isset($arr)){
                $arr = [
                    "name" => 'Empty',
                    "y" => 0,
                    "drilldown" => 'Empty'
                ];
            }
            $data = [
                "title"  => "Trend Summary In ".date('M',strtotime($search_bulan))." 2020",
                "result" => $arr

            ];
            echo json_encode($data);
            exit;
        }

        return $toArray;
       
    }


    public function getAllSummary() {
        $toArray = $this->getDataProduksi();

        foreach($toArray as $key) {
            $arr[] = [
                "name"      => $key['Tanggal'],
                "y"         => $key['Produksi'],
                "drilldown" => $key['Tanggal'],
            ];
        }

        $data = [
            "title"  => "Trend All Transaction Summary",
            "result" => $arr

        ];
        echo json_encode($data);
    }

    public function getSumTotal() {
        $getProduksi = file_get_contents(base_url().'file/data_barang.json');
        $toArray = json_decode($getProduksi, true);
        
        $total = 0;
        foreach($toArray as $key) {
            $total = $total + (int)$key['Produksi'];
            $wilayah[] = $key['Wilayah'];
            $value_produksi [] = $key['Produksi'];
        }

        $data = [
            "total_produksi"    => $total,
            "total_wilayah"     => count(array_unique($wilayah)),
            "tertinggi_produksi"=> max($value_produksi), 
            "terendah_produksi" => min($value_produksi), 
        ];

        echo json_encode($data);
    }

    
}



?>