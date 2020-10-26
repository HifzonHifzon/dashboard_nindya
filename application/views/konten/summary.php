<div class="container-fluid">
    
    <!-- row total  -->
    <div class="row">
        <div class="col-md-3">
            
            <div class="box_total_wrapper">
                <div class="box_total">
                    <div class="total_sum">
                        <div class="alltotal"></div>
                    </div>
               </div>
                <div class="title_total_sum">
                    Total Bulan Ini
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="box_total_wrapper">
               <div class="box_total">
                    <div class="total_sum">
                        <div class="totalwilayah"></div>
                    </div>
               </div>
               <div class="title_total_sum">
                    Total Data Wilayah
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="box_total_wrapper">
                <div class="box_total">
                    <div class="total_sum">
                        <div class="tertinggi"></div> 
                    </div>
               </div>
               <div class="title_total_sum">
                   Produksi Tertinggi 
               </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="box_total_wrapper">
                <div class="box_total">
                    <div class="total_sum">
                        <div class="terendah"></div>  
                    </div>
               </div>
               <div class="title_total_sum">
                   Produksi Terendah
                </div>
            </div>
        </div>
    </div>

    <!-- row grafik dan table -->
    <div class="row">
        <div class="col-md-6">
            <div class="box_summary">
                <div id="container2"></div>
            </div>
        </div>  

        <div class="col-md-6">
            <div class="box_summary">
                <div class="title_summary">  
                    Trend Data Production Per-date
                </div>
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
                        <?php $no=1; foreach($data['produksi'] as $key) { ?>
                            <tr>
                                <td> <?php echo $no++; ?></td>
                                <td> <?php echo $key['Tanggal'] ?></td>
                                <td> <?php echo $key['Wilayah'] ?></td>
                                <td> <?php echo $key['Produksi'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div> 
    </div>
    
    <!-- row all summary -->
    <div class="row">
        <div class="col-md-8">
            
            <div class="all_box_summary">
                <div class="row">
                    <div class="col-md-2">
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

        <div class="col-md-4">
            <div class="all_box_summary">
            <div id="container3"></div>
            </div>
        </div>
        
       
    </div>
    
     
</div>