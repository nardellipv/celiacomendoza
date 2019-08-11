@extends('web.adminClient')

@section('content')
    @if(Auth::user()->type == 'OWNER')
        <div class="container-fluid">
            <div class="row">
                <!-- Stats -->
                <div class="outer-w3-agile col-xl">
                    <div class="stat-grid p-3 d-flex align-items-center justify-content-between bg-primary">
                        <div class="s-l">
                            <h5>Votos Positivos</h5>
                            <p class="paragraph-agileits-w3layouts text-white">Cantidad de votos positivos en su
                                comercio</p>
                        </div>
                        <div class="s-r">
                            <h6>{{ $commerce->votes_positive }}
                                <i class="far fa-smile"></i>
                            </h6>
                        </div>
                    </div>
                    <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-danger">
                        <div class="s-l">
                            <h5>Votos Negativos</h5>
                            <p class="paragraph-agileits-w3layouts text-white">Cantidad de votos negativos en su
                                comercio</p>
                        </div>
                        <div class="s-r">
                            <h6>{{ $commerce->votes_negative }}
                                <i class="fas fa-exclamation-triangle"></i>
                            </h6>
                        </div>
                    </div>
                    <div class="stat-grid p-3 mt-3 d-flex align-items-center justify-content-between bg-warning">
                        <div class="s-l">
                            <h5>Visitas</h5>
                            <p class="paragraph-agileits-w3layouts">Cantidad de visitas a su comercio</p>
                        </div>
                        <div class="s-r">
                            <h6>{{ $commerce->visit }}
                                <i class="fas fa-users"></i>
                            </h6>
                        </div>
                    </div>
                </div>
                <!--// Stats -->
                <!-- Pie-chart -->
                <div class="outer-w3-agile col-xl ml-xl-3 mt-xl-0 mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Estado Productos</h4>
                    @if(!$productAvailable AND !$productUnAvailable)
                        <h6 class="text-center">Usted no tiene productos publicados</h6>
                        <br>
                        <h6 class="text-center">Le recomendamos publicar los productos que vende para aumentar las
                            visitas a su local.</h6>
                    @else
                        <div id="chartdiv"></div>
                    @endif
                </div>
                <!--// Pie-chart -->
            </div>
        </div>

        @include('web.parts.adminClient.dashboard._commerceInfo')
    @else
        @include('web.parts.adminClient._profile')
    @endif
@endsection

@section('script')
    <script src="{{ asset('adminClientStyle/js/bootstrap.min.js') }}"></script>
    <!--// Count-down -->

    <!-- pie-chart -->
    <script src='{{ asset('adminClientStyle/js/amcharts.js') }}'></script>
    <script>
        var d = new Date();
        simplyCountdown('simply-countdown-custom', {
            year: d.getFullYear(),
            month: d.getMonth() + 2,
            day: 25
        });
    </script>
    <script>
        var chart;
        var legend;

        var chartData = [{
            country: "Activos",
            value: {{ $productAvailable }}
        },
            {
                country: "Pausa",
                value: {{ $productUnAvailable }}
            },

        ];

        AmCharts.ready(function () {
            // PIE CHART
            chart = new AmCharts.AmPieChart();
            chart.dataProvider = chartData;
            chart.titleField = "country";
            chart.valueField = "value";
            chart.outlineColor = "";
            chart.outlineAlpha = 0.8;
            chart.outlineThickness = 2;
            // this makes the chart 3D
            chart.depth3D = 10;
            chart.angle = 15;

            // WRITE
            chart.write("chartdiv");
        });
    </script>
    <!--// pie-chart -->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
@endsection