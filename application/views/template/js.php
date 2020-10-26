
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?php echo base_url().'asset/datatables/media/js/dataTables.bootstrap.js'?>"> </script>
<script src="<?php echo base_url().'asset/datatables/media/js/jquery.dataTables.js'?>"> </script>
<script src="https://code.highcharts.com/highcharts.js"></script>
</body>
</html>

<script>
$(document).ready( function () {
    getSummary();
    getAllSummary();

    // load datatables
    $('#listData').DataTable( {
        "pageLength": 8
    });
    
    // get Logout
    function logout() {
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
        if (willDelete) {
            swal("Poof! Your imaginary file has been deleted!", {
            icon: "success",
            });
        } else {
            swal("Your imaginary file is safe!");
        }
      });
    }
});

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
            text: "Trend Data Summary Produksi"
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
                text: 'Total Data Trend Data Summary Produksi'
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
            text: 'Trend All Summary Produksi'
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
                text: 'Trend All Summary Produksi'
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


Highcharts.chart('container3', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Browser market shares in January, 2018'
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
        data: [{
            name: 'Chrome',
            y: 61.41,
            sliced: true,
            selected: true
        }, {
            name: 'Internet Explorer',
            y: 11.84
        }, {
            name: 'Firefox',
            y: 10.85
        }, {
            name: 'Edge',
            y: 4.67
        }, {
            name: 'Safari',
            y: 4.18
        }, {
            name: 'Sogou Explorer',
            y: 1.64
        }, {
            name: 'Opera',
            y: 1.6
        }, {
            name: 'QQ',
            y: 1.2
        }, {
            name: 'Other',
            y: 2.61
        }]
    }]
});


</script>
