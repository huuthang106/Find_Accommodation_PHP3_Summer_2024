@extends('layouts.app')
@section('content')
    <div class="content">

        <!-- Start container-fluid -->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div>
                        <h4 class="header-title mb-3">Morris Charts</h4>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-6">
                    <div>
                        <h5 class="font-14">Stacked Bar Chart</h5>
                        <p class="sub-header">
                            Create stacked bar charts using Morris.Bar(options), where options is an object containing the
                            configuration options.
                        </p>
                        <div id="morris-bar-stacked" class="morris-chart" dir="ltr" style="height: 300px;"></div>

                    </div>
                </div>

                <div class="col-lg-6">

                    <div class="mt-5 mt-lg-0">
                        <h5 class="font-14">Area Chart</h5>
                        <p class="sub-header">
                            Create an area chart using Morris.Area(options). Area charts take all the same options as line
                            charts.
                        </p>

                        <div id="morris-area-example" class="morris-chart" dir="ltr" style="height: 300px;"></div>

                    </div>
                </div>

            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-6">
                    <div class="mt-5">
                        <h5 class="font-14">Line Chart</h5>
                        <p class="sub-header">
                            The public API is terribly simple. It's just one function: Morris.Line (options), where options
                            is an object containing some of the configuration options.
                        </p>
                        <div id="morris-line-example" class="morris-chart" dir="ltr" style="height: 300px;"></div>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mt-5">
                        <h5 class="font-14">Bar Chart</h5>
                        <p class="sub-header">
                            Create bar charts using Morris.Bar(options), where options is an object containing the
                            configuration options.
                        </p>

                        <div id="morris-bar-example" class="morris-chart" dir="ltr" style="height: 320px;"></div>

                    </div>
                </div>

            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-6">
                    <div class="mt-5">
                        <h5 class="font-14">Area Chart with Point</h5>
                        <p class="sub-header">
                            Create an area chart using Morris.Area(options). Area charts take all the same options as line
                            charts.
                        </p>
                        <div id="morris-area-with-dotted" class="morris-chart" dir="ltr" style="height: 320px;"></div>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mt-5">
                        <h5 class="font-14">Donut Chart</h5>
                        <p class="sub-header">
                            This really couldn't be easier. Create a Donut chart using Morris.Donut(options).
                        </p>

                        <div id="morris-donut-example" class="morris-chart" dir="ltr" style="height: 320px;"></div>

                    </div>
                </div>

            </div>
            <!-- end row -->


            <!-- start flot-chart  -->
            <div class="row mt-5">
                <div class="col-12">
                    <div>
                        <h4 class="header-title mb-3">Flot Charts</h4>

                        <div class="row">
                            <div class="col-lg-6">
                                <div>
                                    <h5 class="font-14">Multiple Statistics</h5>
                                    <p class="sub-header">
                                        Stacked chart not only shows the trends over time, you can also see the cumulative
                                        sum of all data.Your awesome text goes here.
                                    </p>
                                    <div id="website-stats" style="height: 320px;" class="flot-chart"></div>

                                </div>
                            </div>

                            <div class="col-lg-6">

                                <div class="mt-5 mt-lg-0">
                                    <h5 class="font-14">Realtime Statistics</h5>
                                    <p class="sub-header">
                                        You can update a chart periodically to get a real-time effect by using a timer to
                                        insert the new data in the plot and redraw it.
                                    </p>

                                    <div id="flotRealTime" style="height: 320px;" class="flot-chart"></div>

                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mt-5">
                                    <h5 class="font-14">Line Chart</h5>
                                    <p class="sub-header">
                                        The line chart is most often used chart, aslo the easiest to make, it shows trends
                                        over time, visualizes data and information, so users can know how exactly these
                                        numbers are relate to each other in one glance.
                                    </p>
                                    <div id="website-stats1" style="height: 320px;" class="flot-chart"></div>

                                </div>
                            </div>

                            <div class="col-lg-6">

                                <div class="mt-5">
                                    <h5 class="font-14">Donut Pie</h5>
                                    <p class="sub-header">
                                        Pie chart is used to see the proprotion of each data groups, making Flot pie chart
                                        is pretty simple, in order to make pie chart you have to incldue jquery.flot.pie.js
                                        plugin.
                                    </p>

                                    <div id="donut-chart">
                                        <div id="donut-chart-container" class="flot-chart" style="height: 260px;"></div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mt-5">
                                    <h5 class="font-14">Pie Chart</h5>
                                    <p class="sub-header">
                                        Pie chart is used to see the proprotion of each data groups, making Flot pie chart
                                        is pretty simple, in order to make pie chart you have to incldue jquery.flot.pie.js
                                        plugin.
                                    </p>

                                    <div id="pie-chart">
                                        <div id="pie-chart-container" class="flot-chart" style="height: 260px;">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mt-5">
                                    <h5 class="font-14">Stacked Bar chart</h5>
                                    <p class="sub-header">
                                        With the stack plugin, you can have Flot stack the series. This is useful if you
                                        wish to display both a total and the constituents it is made of.
                                    </p>

                                    <div id="ordered-bars-chart" style="height: 320px;"></div>

                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mt-5">
                                    <h5 class="font-14">Line Chart</h5>
                                    <p class="sub-header">
                                        The line chart is most often used chart, aslo the easiest to make, it shows trends
                                        over time, visualizes data and information, so users can know how exactly these
                                        numbers are relate to each other in one glance.
                                    </p>
                                    <div id="line-chart-alt" style="height:320px;"></div>

                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mt-5">
                                    <h5 class="font-14 mb-3">Combine Chart</h5>
                                    <div id="combine-chart">
                                        <div id="combine-chart-container" class="flot-chart" style="height: 320px;">
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- end row -->
                    </div>
                </div>
            </div>
            <!-- end flot-chrt -->

            <!-- start Knob-chart  -->
            <div class="row mt-5">
                <div class="col-12">
                    <div>
                        <h4 class="header-title mb-3">Knob Charts</h4>


                        <div class="row">
                            <div class="col-xl-3 col-sm-6 text-center">
                                <div class="p-3 mb-4" dir="ltr">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-bgcolor="#ebeff2"
                                        data-fgcolor="#188ae2" data-displayinput="false" value="35">
                                    <h6 class="text-muted mt-2 font-14">Disable display input</h6>
                                </div>
                            </div><!-- end col-->
                            <div class="col-xl-3 col-sm-6 text-center">
                                <div class="p-3 mb-4" dir="ltr">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-cursor="true"
                                        data-fgcolor="#4bd396" value="29">
                                    <h6 class="text-muted mt-2 font-14">Cursor mode</h6>
                                </div>
                            </div><!-- end col-->
                            <div class="col-xl-3 col-sm-6 text-center">
                                <div class="p-3 mb-4" dir="ltr">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-min="-100"
                                        data-fgcolor="#3ac9d6" data-displayprevious="true" value="44">
                                    <h6 class="text-muted mt-2 font-14">Display previous value</h6>
                                </div>
                            </div><!-- end col-->
                            <div class="col-xl-3 col-sm-6 text-center">
                                <div class="p-3 mb-4" dir="ltr">
                                    <input data-plugin="knob" data-width="150" data-height="150" data-min="-100"
                                        data-fgcolor="#f9c851" data-displayprevious="true" data-angleoffset="-125"
                                        data-anglearc="250" value="44">
                                    <h6 class="text-muted mt-2 font-14">Angle offset and arc</h6>
                                </div>
                            </div><!-- end col-->
                        </div>
                        <!-- end row -->
                    </div>
                </div>
            </div>
            <!-- end flot-chrt -->

        </div>
        <!-- end container-fluid -->



        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        2017 - 2020 &copy; Simple theme by <a href="">Coderthemes</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>
@endsection
@push('styles')
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo3.png') }}">
    <!-- third party css -->
    <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }} "rel="stylesheet" type="text/css">
    <!-- App css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style-admin.css') }}" type="text/css" id='styleadmin-stylesheet'>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet">
@endpush

@push('scripts')
    <!-- Vendor js -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

    <script src="{{ asset('assets/libs/morris-js/morris.min.js') }}"></script>
    <script src="{{ asset('assets/libs/raphael/raphael.min.js') }}"></script>

    <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

    <script src="{{ asset('assets/js/pages/morris.init.js') }}"></script>

    <script src="{{ asset('assets/libs/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/libs/flot-charts/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('assets/libs/flot-charts/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('assets/libs/flot-charts/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/libs/flot-charts/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/libs/flot-charts/jquery.flot.selection.js') }}"></script>
    <script src="{{ asset('assets/libs/flot-charts/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('assets/libs/flot-charts/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('assets/libs/flot-charts/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('assets/libs/flot-charts/jquery.flot.axislabels.js') }}"></script>

    <!-- KNOB JS -->
    <script src="{{ asset('assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>

    <script src="{{ asset('assets/js/pages/flot.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>

    <!-- Datatables init -->
    <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>
    <!-- Datatables init -->
    <script src="{{ asset('assets\js\pages\datatables.init.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ asset('assets\libs\datatables\jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets\libs\datatables\dataTables.bootstrap4.min.js') }}"></script>
@endpush
