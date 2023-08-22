@extends('layouts.admin')

@section('title', 'Data Penyimpanan')
@section('style')
<script src="{{ url('/assets') }}/vendors/highcharts/highcharts.js"></script>
<script src="{{ url('/assets') }}/vendors/highcharts/highcharts-more.js"></script>
<script src="{{ url('/assets') }}/vendors/highcharts/solid-gauge.js"></script>
<script src="{{ url('/assets') }}/vendors/highcharts/exporting.js"></script>
<script src="{{ url('/assets') }}/vendors/highcharts/export-data.js"></script>
<script src="{{ url('/assets') }}/vendors/highcharts/accessibility.js"></script>
<style>
.highcharts-figure .chart-container {
	width: 300px;
	height: 200px;
	float: left;
}

.highcharts-figure, .highcharts-data-table table {
	width: 100%;
	margin: 0 auto;
}

.highcharts-data-table table {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #EBEBEB;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}
.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
  padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
  padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}
.highcharts-data-table tr:hover {
  background: #f1f7ff;
}

@media (max-width: 600px) {
	.highcharts-figure, .highcharts-data-table table {
		width: 100%;
	}
	.highcharts-figure .chart-container {
		width: 300px;
		float: none;
		margin: 0 auto;
	}

}
#charLineareaTwo .ct-chart .ct-series.ct-series-a .ct-area {
          fill: #0559e0;
      }
</style>
@endsection
@section('content')
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Data Penyimpanan</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Grafik data penyimpanan</h4>
                                    </div>
                                    <div class="card-body">
                                    <figure class="highcharts-figure">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div id="container-berat" class="chart-container"></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div id="container-suhu" class="chart-container"></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div id="container-kelembapan" class="chart-container"></div>
                                                </div>
                                            </div>

                                            
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Laporan data penyimpanan</h4>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered text-center">
                                            <tr>
                                                <th>No</th>
                                                <th>Berat (Kg)</th>
                                                <th>Suhu (°C)</th>
                                                <th>Kelembapan (%)</th>
                                                <th>Tanggal</th>
                                            </tr>
                                            <tbody id="tbody" >

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
@endsection

@section('script')
<script src="{{ url('/assets') }}/js/pages/dashboard.js"></script>
<script type="text/javascript">
    

</script>

{{--Firebase Tasks--}}
<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
<script>
      

    // Initialize Firebase
    var config = {
        apiKey: "{{ config('services.firebase.api_key') }}",
        authDomain: "{{ config('services.firebase.auth_domain') }}",
        databaseURL: "{{ config('services.firebase.database_url') }}",
        storageBucket: "{{ config('services.firebase.storage_bucket') }}",
    };
    firebase.initializeApp(config);

    var database = firebase.database();

    var lastIndexs = 0;
    // Get Data Chart
    firebase.database().ref('data/').limitToLast(1).on('value', function (snapshot) {
        var value = snapshot.val();
        var htmls = [];
        
        $.each(value, function (index, value) {
            if (value) {
                var gaugeOptions = {
        chart: {
            type: 'solidgauge'
        },

        title: null,

        pane: {
            center: ['50%', '85%'],
            size: '140%',
            startAngle: -90,
            endAngle: 90,
            background: {
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
            innerRadius: '60%',
            outerRadius: '100%',
            shape: 'arc'
            }
        },

        exporting: {
            enabled: false
        },

        tooltip: {
            enabled: false
        },

        // the value axis
        yAxis: {
            stops: [
            [0.1, '#55BF3B'], // green
            [0.5, '#DDDF0D'], // yellow
            [0.9, '#DF5353'] // red
            ],
            lineWidth: 0,
            tickWidth: 0,
            minorTickInterval: null,
            tickAmount: 2,
            title: {
            y: -70
            },
            labels: {
            y: 16
            }
        },

        plotOptions: {
            solidgauge: {
            dataLabels: {
                y: 5,
                borderWidth: 0,
                useHTML: true
            }
            }
        }
        };

        // The speed gauge
        var chartBerat = Highcharts.chart('container-berat', Highcharts.merge(gaugeOptions, {
        yAxis: {
            min: 0,
            max: 200,
            title: {
            text: 'Berat'
            }
        },

        credits: {
            enabled: false
        },

        series: [{
            name: 'Berat',
            data: [1],
            dataLabels: {
            format:
                '<div style="text-align:center">' +
                '<span style="font-size:25px">{y}</span><br/>' +
                '<span style="font-size:12px;opacity:0.4">kg</span>' +
                '</div>'
            },
            tooltip: {
            valueSuffix: ' kg'
            }
        }]

        }));

        // The RPM gauge
        var chartSuhu = Highcharts.chart('container-suhu', Highcharts.merge(gaugeOptions, {
        yAxis: {
            min: 0,
            max: 100,
            title: {
            text: 'Suhu'
            }
        },

        series: [{
            name: 'Suhu',
            data: [1],
            dataLabels: {
            format:
                '<div style="text-align:center">' +
                '<span style="font-size:25px">{y:.1f}</span><br/>' +
                '<span style="font-size:12px;opacity:0.4">' +
                '&deg;  C' +
                '</span>' +
                '</div>'
            },
            tooltip: {
            valueSuffix: ' &deg;  C'
            }
        }]

        }));

        // The RPM gauge
        var chartLembap = Highcharts.chart('container-kelembapan', Highcharts.merge(gaugeOptions, {
        yAxis: {
            min: 0,
            max: 100,
            title: {
            text: 'Kelembapan'
            }
        },

        series: [{
            name: 'Kelembapan',
            data: [1],
            dataLabels: {
            format:
                '<div style="text-align:center">' +
                '<span style="font-size:25px">{y:.1f}</span><br/>' +
                '<span style="font-size:12px;opacity:0.4">' +
                '%' +
                '</span>' +
                '</div>'
            },
            tooltip: {
            valueSuffix: '%'
            }
        }]

        }));
        // Bring life to the dials
        setInterval(function () {
            // Berat
            var point,
                newVal;

            if (chartBerat) {
                point = chartBerat.series[0].points[0];
                newVal = value.berat;
                point.update(newVal);
            }

            // Suhu
            if (chartSuhu) {
                point = chartSuhu.series[0].points[0];
                newVal = value.suhu;
                point.update(newVal);
            }

            //Lembap
            if (chartLembap) {
                point = chartLembap.series[0].points[0];
                newVal = value.kelembapan;
                point.update(newVal);
            }
            }, 2000);
        }
        lastIndexs = index;
        });
    });


    // Get Data Table
    firebase.database().ref('data/').on('value', function (snapshot) {
        var value = snapshot.val();
        var htmls = [];
        var no = 0;
        $.each(value, function (index, value) {
            if (value) {
                htmls.push('<tr>\
                <td>' + no+ '</td>\
        		<td>' + value.berat + '</td>\
        		<td>' + value.suhu + '</td>\
                <td>' + value.kelembapan + '</td>\
                <td>' + value.tanggal + '</td>\
        	</tr>');
            }
            lastIndex = index;
            no++;
        });
        $('#tbody').html(htmls);
        $("#submitUser").removeClass('desabled');
    });

</script>
@endsection