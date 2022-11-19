@extends('admin.partials.master')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Suhu</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">-- °C</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-temperature-high fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Cahaya</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">-- FC</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-lightbulb fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Cuaca
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">--</div>
                                </div>

                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-cloud-sun fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Status</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">--</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-power-off fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow col-md-auto">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Grafik Suhu dan Cahaya</h6>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="chart-area ">
                    <canvas id="myAreaChart3"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    @endsection
    @push('extraJS')
    <script type="text/javascript">
        // Set new default font family and font color to mimic Bootstrap's default styling


        function number_format(number, decimals, dec_point, thousands_sep) {
            // *     example: number_format(1234.56, 2, ',', ' ');
            // *     return: '1 234,56'
            number = (number + '').replace(',', '').replace(' ', '');
            var n = !isFinite(+number) ? 0 : +number,
                prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                s = '',
                toFixedFix = function(n, prec) {
                    var k = Math.pow(10, prec);
                    return '' + Math.round(n * k) / k;
                };
            // Fix for IE parseFloat(0.55).toFixed(0) = 0;
            s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
            if (s[0].length > 3) {
                s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
            }
            if ((s[1] || '').length < prec) {
                s[1] = s[1] || '';
                s[1] += new Array(prec - s[1].length + 1).join('0');
            }
            return s.join(dec);
        }

        $.ajax({
            url: 'dashboard',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                console.log(data[0].suhu);
                var ctx = document.getElementById("myAreaChart3");
                var myLineChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: [],
                        datasets: [{
                                label: "Suhu",
                                lineTension: 0.3,
                                backgroundColor: "rgba(0,0,0,0)",
                                borderColor: "rgba(0, 28, 255, 0.89)",
                                pointRadius: 3,
                                pointBackgroundColor: "rgba(61, 98, 235, 1)",
                                pointBorderColor: "rgba(0, 28, 255, 0.89)",
                                pointHoverRadius: 3,
                                pointHoverBackgroundColor: "rgba(61, 98, 235, 1)",
                                pointHoverBorderColor: "rgba(0, 28, 255, 0.89)",
                                pointHitRadius: 10,
                                pointBorderWidth: 2,
                                data: [],
                            },
                            {
                                label: "Cahaya",
                                lineTension: 0.3,
                                backgroundColor: "rgba(0,0,0,0)",
                                borderColor: "rgba(250, 201, 26, 0.89)",
                                pointRadius: 3,
                                pointBackgroundColor: "rgba(245, 204, 54, 0.36)",
                                pointBorderColor: "rgba(250, 201, 26, 0.89)",
                                pointHoverRadius: 3,
                                pointHoverBackgroundColor: "rgba(245, 204, 54, 0.36)",
                                pointHoverBorderColor: "rgba(250, 201, 26, 0.89)",
                                pointHitRadius: 10,
                                pointBorderWidth: 2,
                                data: [],
                            }
                        ],
                    },
                    options: {
                        maintainAspectRatio: false,
                        layout: {
                            padding: {
                                left: 10,
                                right: 25,
                                top: 25,
                                bottom: 0
                            }
                        },
                        scales: {
                            xAxes: [{
                                time: {
                                    unit: 'date'
                                },
                                gridLines: {
                                    display: false,
                                    drawBorder: false
                                },
                                ticks: {
                                    maxTicksLimit: 7
                                }
                            }],
                            yAxes: [{
                                ticks: {
                                    maxTicksLimit: 5,
                                    padding: 10,
                                },
                                gridLines: {
                                    color: "rgb(234, 236, 244)",
                                    zeroLineColor: "rgb(234, 236, 244)",
                                    drawBorder: false,
                                    borderDash: [2],
                                    zeroLineBorderDash: [2]
                                }
                            }],
                        },
                        legend: {
                            display: true
                        },
                        tooltips: {
                            backgroundColor: "rgb(255,255,255)",
                            bodyFontColor: "#858796",
                            titleMarginBottom: 10,
                            titleFontColor: '#6e707e',
                            titleFontSize: 14,
                            borderColor: '#dddfeb',
                            borderWidth: 1,
                            xPadding: 15,
                            yPadding: 15,
                            displayColors: false,
                            intersect: false,
                            mode: 'index',
                            caretPadding: 10,
                            callbacks: {

                            }
                        }
                    },

                });

                for (var i = 0; i < data.length; i++) {
                    //created_at ke tanggal dan waktu
                    var date = new Date(data[i].created_at);
                    var tanggal = date.getDate();
                    var bulan = date.getMonth() + 1;
                    var tahun = date.getFullYear();
                    var jam = date.getHours();
                    var menit = date.getMinutes();
                    var waktu = jam + ":" + menit ;
                    var tanggalwaktu = tanggal + "/" + bulan + "/" + tahun + " " + waktu;
                    myLineChart.data.labels.push(tanggalwaktu);
                    myLineChart.data.datasets[0].data.push(data[i].suhu);
                    myLineChart.data.datasets[1].data.push(data[i].cahaya);
                }
            },
            error: function(data) {
                console.log(data);
            }
        });

     
    </script>
    @endpush