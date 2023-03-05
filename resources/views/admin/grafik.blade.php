@extends('admin.partials.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Area Chart -->
            <div class="p-3 w-100">
                <div class="">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="font-weight-bold text-primary mt-2">Chart Suhu</h5>
                        </div>
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="myAreaChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="font-weight-bold text-primary mt-2">Chart Cahaya</h5>
                        </div>
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="myAreaChart1"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="card shadow col-md-12 my-2 ">
                <div class="card-header py-4">
                    <h6 class="m-0 font-weight-bold text-primary">Chart Suhu</h6>
                </div>
                <div class="card-body col-12">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="card shadow col-md-12 my-2 ">
                <div class="card-header py-4">
                    <h6 class="m-0 font-weight-bold text-primary">Chart Cahaya</h6>
                </div>
                <div class="card-body col-12">
                    <div class="chart-area">
                        <canvas id="myAreaChart1"></canvas>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="card shadow col-md ">
      <div class="card-header py-4">
        <h6 class="m-0 font-weight-bold text-primary"> Chart Kalman Filter</h6>
      </div>
      <div class="card-body col-12">
        <div class="chart-area">
          <canvas id="myAreaChart2"></canvas>
        </div>
      </div>
    </div> --}}
        </div>
    </div>
@endsection
@push('extraJS')
    <script type="text/javascript">
        // Set new default font family and font color to mimic Bootstrap's default styling
        // Area Chart Example
        // var ctx = ;
        var myLineChart = new Chart(document.getElementById("myAreaChart"), {
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
                }],
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
                            // Include a dollar sign in the ticks
                            callback: function(value, index, values) {
                                return value + ' °C';
                            }
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
                    display: false
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
                        label: function(tooltipItem, chart) {
                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                            return datasetLabel + ': ' + tooltipItem.yLabel + ' °C';
                        }
                    }
                }
            }
        });
        var myLineChart1 = new Chart(document.getElementById("myAreaChart1"), {
            type: 'line',
            data: {
                labels: [],
                datasets: [{
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
                }],
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
                            callback: function(value, index, values) {
                                return value + ' FC';

                            }
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
                    display: false
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
                        label: function(tooltipItem, chart) {
                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                            return datasetLabel + ': ' + tooltipItem.yLabel + ' FC';
                        }
                    }
                }
            }
        });

        $.ajax({
            url: '{{ route('datasensor.chart') }}',
            type: 'GET',
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {

                for (var i = 0; i < data.length; i++) {
                    //created_at ke tanggal dan waktu
                    var date = new Date(data[i].created_at);
                    var tanggal = date.getDate();
                    var bulan = date.getMonth() + 1;
                    var tahun = date.getFullYear();
                    var jam = date.getHours();
                    var menit = date.getMinutes();
                    var waktu = jam + ":" + menit;
                    var tanggalwaktu = tanggal + "/" + bulan + "/" + tahun + " " + waktu;
                    myLineChart.data.labels.push(tanggalwaktu);
                    //data ke chart
                    myLineChart.data.datasets[0].data.push(data[i].suhu);
                    myLineChart1.data.labels.push(tanggalwaktu);
                    myLineChart1.data.datasets[0].data.push(data[i].cahaya);
                }
                myLineChart.update();
                myLineChart1.update();
            },
            error: function(data) {
                console.log(data);
            }
        });
    </script>
@endpush
