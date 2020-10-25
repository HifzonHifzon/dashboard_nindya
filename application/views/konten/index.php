<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            
            <div class="box_total_wrapper">
                <div class="box_total">
                    <div class="total_sum">
                        80000
                    </div>
               </div>
               <h4><center> Total Bulan Ini </center></h4>
            </div>
        </div>

        <div class="col-md-3">
            <div class="box_total_wrapper">
               <div class="box_total">
                    <div class="total_sum">
                        80
                    </div>
               </div>
               <h4><center> Total Data Wilayah</center></h4>
            </div>
        </div>

        <div class="col-md-3">
            <div class="box_total_wrapper">
                <div class="box_total">
                    <div class="total_sum">
                        80
                    </div>
               </div>
               <h4><center>Produksi Tertinggi </center></h4>
            </div>
        </div>

        <div class="col-md-3">
            <div class="box_total_wrapper">
                <div class="box_total">
                    <div class="total_sum">
                        80
                    </div>
               </div>
               <h4><center>Produksi Terendah</center></h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="box_summary">
                <div class="row">
                    <div class="col-md-10">
                        <select name="bulan" class="form-control" id="bulan">
                            <option value="">Pilih Bulan</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                    <button class="btn btn-info btn-sm" onclick="getSummary()">Search</button>
                    </div>
                </div>

                <div id="container"></div>
            </div>
        </div>  

        <div class="col-md-6">
            <div class="box_summary">
                <table class="table table-bordered" id="listData">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Wilayah</th>
                            <th>Produksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($x=1; $x<=20; $x++) { ?>
                            <tr>
                                <td><?php echo $x; ?></td>
                                <td>20-10-2020</td>
                                <td>1</td>
                                <td>14.000</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div> 
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="all_box_summary">
                <div id="container2"></div>  
            </div>
        </div>
    </div>
    
     
</div>