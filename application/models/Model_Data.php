<?php 


class Model_Data extends CI_Model {


    // json dummy data
    public function getProduksi(){
        $data =[
            [
                "Tanggal"   => "20-10-2020",
                "Wilayah"   => 1,
                "Produksi"  => "150000"
            ],
            [
                "Tanggal"   => "21-10-2020",
                "Wilayah"   => 2,
                "Produksi"  => "150000"
            ],
            [
                "Tanggal"   => "22-10-2020",
                "Wilayah"   => 3,
                "Produksi"  => "150000"
            ],
            [
                "Tanggal"   => "3-10-2020",
                "Wilayah"   => 4,
                "Produksi"  => "150000"
            ],
            [
                "Tanggal"   => "3-10-2020",
                "Wilayah"   => 4,
                "Produksi"  => "150000"
            ]
        ];

        echo json_encode($data);
    }

    
}



?>