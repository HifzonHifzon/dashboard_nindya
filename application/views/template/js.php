
<script src="<?php echo base_url().'asset/jquery-351.js'?>"></script>
<script src="<?php echo base_url().'asset/bootstrap/js/bootstrap-341.min.js'?>"></script>
<script src="<?php echo base_url().'asset/datatables/media/js/jquery.dataTables.js'?>"> </script>
<script src="<?php echo base_url().'asset/datatables/media/js/dataTables.buttons.min.js'?>" > </script>
<script src="<?php echo base_url().'asset/datatables/media/js/buttons.flash.min.js' ?>" > </script>
<script src="<?php echo base_url().'asset/datatables/media/js/jszip.min.js'?>" > </script>
<script src="<?php echo base_url().'asset/datatables/media/js/pdfmake.min.js'?>"  > </script>
<script src="<?php echo base_url().'asset/datatables/media/js/vfs_fonts.js'?>" > </script>
<script src="<?php echo base_url().'asset/datatables/media/js/buttons.html5.min.js'?>" > </script>
<script src="<?php echo base_url().'asset/datatables/media/js/buttons.print.min.js'?>" > </script>

<script src="<?php echo base_url().'asset/highchart.js' ?>"></script>
<script src="<?php echo base_url().'asset/sweetalert.min.js'?>"></script>
</body>
</html>

<script>
$(document).ready( function () {
    getSummary();
    getAllSummary();
    getTotalProduksi();

    // load datatables
    $('#listData').DataTable( {
        "pageLength": 8,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'print'
        ]
    });
    
    function getTotalProduksi() {
        $.ajax({
            url : "<?php echo base_url(). 'dashboard/getTotal';?>",
            type : "POST",
            typeData : 'JSON',
            success:function(res) {
                var data  = JSON.parse(res);
                $('.alltotal').text(data.total_produksi);
                $('.totalwilayah').text(data.total_wilayah);
                $('.tertinggi').text(data.tertinggi_produksi);
                $('.terendah').text(data.terendah_produksi);
            }
        });
    }
    // get Logout
});

 
function logout() {
    swal({
        title: "",
        text: "Are you want logout ? ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
    if (willDelete) {
        window.location = "<?php echo base_url().'/login'?>"
    } else {
        swal("yes, no problem");
    }
    });
}

// get data Summary table n grafik ByWilayah
function getSummary() {
    var bulan =  $('#bulan').val();  
    $.ajax({
        url : "<?php echo base_url(). 'dashboard/getProduksi';?>",
        type : "POST",
        data : {
            bulan : bulan,
            type : 'byWilayah'
        },
        typeData : 'JSON',
        success:function(res) {
            var data  = JSON.parse(res);
            showChartSummary(data);
            showPieSummary(data);
        }
    })
}


// get data Summary table n grafik All Summary
function getAllSummary() {
    $.ajax({
        url : "<?php echo base_url(). 'dashboard/getProduksi';?>",
        type : "POST",
        data : {
            type : 'byTanggal'
        },
        typeData : 'JSON',
        success:function(res) {
            var data  = JSON.parse(res);
            showChartAllSummary(data);
        }
    })
}

// show Chart By Wilayah
function showChartSummary(data) {
    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Trend Data Summary Production Per-Wilayah'
        },
        accessibility: {
            announceNewData: {
                enabled: true
            }
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Trend Data Summary Production Per-Wilayah'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.0f}'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
        },

        series: [
            {
                name: "Browsers",
                colorByPoint: true,
                data: data.result
            }
        ],
        
    });
}


// show Chart all Summary
function showChartAllSummary(data) {
    
    Highcharts.chart('container2', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Trend Data Production Per-date'
        },
    
        accessibility: {
            announceNewData: {
                enabled: true
            }
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Trend Data Production Per-date'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.0f}'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
        },

        series: [
            {
                name: "Browsers",
                colorByPoint: true,
                data: data.result             
            }
        ],
    });
}


function showPieSummary(data) {
    Highcharts.chart('container3', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Presentase Data Production'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: ''
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                }
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data : data.result   
        }]
    });
}

</script>
