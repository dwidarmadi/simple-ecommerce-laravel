@extends('components/dashboard.baselayout')

@section('PageAddress', 'Seller')

@section('CSSPlace')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap4.min.css" />
    <style type="text/css">
        #table_admin tr td {
            vertical-align: middle
        }

        #table_admin tr td:first-child {
            text-align: center;
            width: 1%;
            white-space: nowrap;
        }

        #table_admin tr td:nth-child(5) {
            text-align: center;
            width: 1%;
            white-space: nowrap;
        }

        #table_admin tr td:last-child {
            text-align: center;
            width: 1%;
            white-space: nowrap;
        }
    </style>
@endsection

@section('PageTitle')
    Dashboard
@endsection
@section('PageContent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-boxes"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Jumlah Barang</span>
                        <span class="info-box-number">
                            {{ $product }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-dollar"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Transaksi Hari Ini</span>
                        <span class="info-box-number">
                            {{ $orderToday->count() }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-hand-holding-dollar"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Transaksi Selesai</span>
                        <span class="info-box-number">
                            {{ $orderReceived->count() }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-sack-dollar"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Total Transaksi</span>
                        <span class="info-box-number">
                            {{ $orderTotal->count() }}
                        </span>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-12">
                <div class="card mb-4">
                    <figure class="highcharts-figure">
                        <div id="container"></div>
                    </figure>
                </div>
            </div> --}}
        </div>
    </div>
@endsection

@section('ScriptPlace')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script type="text/javascript">
        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Emissions to air in Norway'
            },
            subtitle: {
                text: 'Source: ' +
                    '<a href="https://www.ssb.no/en/statbank/table/08940/" ' +
                    'target="_blank">SSB</a>'
            },
            xAxis: {
                categories: [
                    '2010',
                    '2011',
                    '2012',
                    '2013',
                    '2014',
                    '2015',
                    '2016',
                    '2017',
                    '2018',
                    '2019',
                    '2020',
                    '2021'
                ],
                crosshair: true
            },
            yAxis: {
                title: {
                    useHTML: true,
                    text: 'Million tonnes CO<sub>2</sub>-equivalents'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Oil and gas extraction',
                data: [13.93, 13.63, 13.73, 13.67, 14.37, 14.89, 14.56,
                    14.32, 14.13, 13.93, 13.21, 12.16
                ]

            }, {
                name: 'Manufacturing industries and mining',
                data: [12.24, 12.24, 11.95, 12.02, 11.65, 11.96, 11.59,
                    11.94, 11.96, 11.59, 11.42, 11.76
                ]

            }, {
                name: 'Road traffic',
                data: [10.00, 9.93, 9.97, 10.01, 10.23, 10.26, 10.00,
                    9.12, 9.36, 8.72, 8.38, 8.69
                ]

            }, {
                name: 'Agriculture',
                data: [4.35, 4.32, 4.34, 4.39, 4.46, 4.52, 4.58, 4.55,
                    4.53, 4.51, 4.49, 4.57
                ]

            }]
        });
    </script>
@endsection
