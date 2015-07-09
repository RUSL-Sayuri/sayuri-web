<?php $this->load->view('partial/header'); ?>
</head>
<body class="">

<!-- HEADER -->
<?php $this->load->view('partial/top_bar'); ?>
<!-- END HEADER -->

<!-- Left panel : Navigation area -->
<?php $this->load->view('partial/navigation'); ?>
<!-- END NAVIGATION -->

<!-- MAIN PANEL -->
<div id="main" role="main">

    <!-- RIBBON -->
    <div id="ribbon">

        <span class="ribbon-button-alignment"> <span id="refresh" class="btn btn-ribbon" data-title="refresh"
                                                     rel="tooltip" data-placement="bottom"
                                                     data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings."
                                                     data-html="true"><i class="fa fa-refresh"></i></span> </span>

        <!-- breadcrumb -->
        <ol class="breadcrumb">
            <li>School's Head</li>
            <li>Dashboard</li>
        </ol>
        <!-- end breadcrumb -->

        <!-- You can also add more buttons to the
        ribbon for further usability

        Example below:

        <span class="ribbon-button-alignment pull-right">
        <span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
        <span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
        <span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
        </span> -->

    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-home"></i>School's Head <span>>Dashboard</span>
                </h1>
            </div>
        </div>
        <!-- widget grid -->
        <section id="widget-grid" class="">
            <!-- row -->

            <div class="row">

                <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-group"></i> </span>

                            <h2>Students</h2>
                        </header>

                        <!-- widget div-->
                        <div>
                            <!-- widget content -->
                            <div class="widget-body no-padding">
                                <div class="widget-body-toolbar">

                                </div>

                                <table id="dt_my_peers" class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Parent</th>
                                        <th>Child</th>
                                        <th>Profile</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="view"><b>Nirmali Perera</b></td>
                                        <td>Saman Perera</td>
                                        <td>
                                            <button class="btn btn-sm">View full profile</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="view"><b>Sunil Rathnayaka</b></td>
                                        <td>Dulani Rathnayaka</td>
                                        <td>
                                            <button class="btn btn-sm">View full profile</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="view"><b>Peter Jerome</b></td>
                                        <td>Champa Kalhari</td>
                                        <td>
                                            <button class="btn btn-sm">View full profile</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="view"><b>Nicolas Morrias</b></td>
                                        <td>John Peter</td>
                                        <td>
                                            <button class="btn btn-sm">View full profile</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="view"><b>Sunil Perera</b></td>
                                        <td>Gayan Perera</td>
                                        <td>
                                            <button class="btn btn-sm">View full profile</button>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>

                            </div>
                            <!-- end widget content -->

                        </div>
                        <!-- end widget div -->

                    </div>
                    <!-- end widget -->

                </article>

                <article class="col-sm-12 col-md-12 col-lg-6">

                    <!-- new widget -->
                    <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-1" data-widget-colorbutton="false"
                         data-widget-editbutton="false">

                        <header>
                            <span class="widget-icon"> <i class="fa fa-dashboard"></i> </span>

                            <h2>Child's Performance</h2>

                        </header>

                        <!-- widget div-->
                        <div>
                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">
                                <div>
                                    <label>Title:</label>
                                    <input type="text"/>
                                </div>
                            </div>
                            <!-- end widget edit box -->

                            <div class="widget-body">
                                <!-- content goes here -->
                                <div id="performance-graph" class="chart no-padding"></div>

                                <div>
                                    <table class="table table-bordered table-responsive tab-content">
                                        <thead>
                                        <th>Category</th>
                                        <th class="text-center">Latest Score</th>
                                        <th>Last Update</th>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Vision</td>
                                            <td>5.3</td>
                                            <td>2015-03-20</td>
                                        </tr>
                                        <tr>
                                            <td>Colors</td>
                                            <td>8.2</td>
                                            <td>2015-03-18</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- end content -->

                            </div>

                        </div>
                        <!-- end widget div -->
                    </div>
                    <!-- end widget -->

                </article>

            </div>

            <!-- end row -->

        </section>
        <!-- end widget grid -->

    </div>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->
<?php $this->load->view('partial/common_js'); ?>

<!-- PAGE RELATED PLUGIN(S) -->
<!-- Morris Chart Dependencies -->
<script src="<?php echo base_url('assests/') ?>/js/plugin/morris/raphael.2.1.0.min.js"></script>
<script src="<?php echo base_url('assests/') ?>/js/plugin/morris/morris.min.js"></script>
<script src="<?php echo base_url('assests/'); ?>/js/plugin/datatables/jquery.dataTables-cust.min.js"></script>
<script src="<?php echo base_url('assests/'); ?>/js/plugin/datatables/ColReorder.min.js"></script>
<script src="<?php echo base_url('assests/'); ?>/js/plugin/datatables/FixedColumns.min.js"></script>
<script src="<?php echo base_url('assests/'); ?>/js/plugin/datatables/ColVis.min.js"></script>
<script src="<?php echo base_url('assests/'); ?>/js/plugin/datatables/ZeroClipboard.js"></script>
<script src="<?php echo base_url('assests/'); ?>/js/plugin/datatables/media/js/TableTools.min.js"></script>
<script src="<?php echo base_url('assests/'); ?>/js/plugin/datatables/DT_bootstrap.js"></script>

<script>
    $(document).ready(function () {

        // DO NOT REMOVE : GLOBAL FUNCTIONS!
        pageSetUp();
        
         /*
         * BASIC
         */
        $('#dt_basic').dataTable({
            "sPaginationType": "bootstrap_full"
        });

        /*
         * Datatable for list of My peers
         */
        $('#dt_my_peers').dataTable({
            "sPaginationType": "bootstrap_full"
        });

        /*
         * PAGE RELATED SCRIPTS
         */

        if ($('#performance-graph').length) {
            var performance_data = [{
                "period": "2014-12-20",
                "vision": 1.3
            }, {
                "period": "2014-12-23",
                "vision": 1.4
            }, {
                "period": "2014-12-30",
                "vision": 2.0
            }, {
                "period": "2015-01-5",
                "vision": 2.2
            }, {
                "period": "2015-01-09",
                "vision": 1.8
            }, {
                "period": "2015-01-17",
                "vision": 2.9
            }, {
                "period": "2015-01-30",
                "vision": 3.1
            }, {
                "period": "2015-02-14",
                "vision": 3.7
            }, {
                "period": "2015-03-10",
                "vision": 4.2
            }, {
                "period": "2014-11-20",
                "color": 2.6
            }, {
                "period": "2014-12-26",
                "color": 3.4
            }, {
                "period": "2015-01-10",
                "color": 4.2
            }, {
                "period": "2015-01-20",
                "color": 2.9
            }, {
                "period": "2015-01-29",
                "color": 3.8
            }, {
                "period": "2015-02-26",
                "color": 4.2
            }];
            Morris.Line({
                element: 'performance-graph',
                data: performance_data,
                xkey: 'period',
                ykeys: ['vision', 'color'],
                labels: ['Vision', 'Color'],
                xLabels: 'day'
            });
        }

    });

</script>

<!-- Your GOOGLE ANALYTICS CODE Below -->
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>

</body>

</html>