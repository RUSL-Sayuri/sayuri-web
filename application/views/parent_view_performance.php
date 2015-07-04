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
            <li>Home</li>
            <li>View Perfoamance</li>
        </ol>
        <!-- end breadcrumb -->
    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-home"></i> Dashboard
                    <span>> Performance</span>
                </h1>
            </div>
        </div>
        <!-- widget grid -->
        <section id="widget-grid" class="">
            <!-- row -->

            <div class="row">

                <article class="col-sm-12 col-md-12 col-lg-12">

                    <!-- new widget -->
                    <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-0" data-widget-editbutton="false">

                        <header>
                            <span class="widget-icon"> <i class="fa fa-dashboard txt-color-white"></i> </span>

                            <h2> Overall Performance </h2>

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

                            <div class="widget-body widget-hide-overflow no-padding">
                                <!-- content goes here -->

                                <div id="overall-performance-graph" class="chart no-padding"></div>

                                <!-- end content -->
                            </div>

                        </div>
                        <!-- end widget div -->
                    </div>
                    <!-- end widget -->


                </article>

            </div>

            <!--            start row-->
            <div class="row">
                <article class="col-sm-12 col-md-12 col-lg-6">

                    <!-- new widget -->
                    <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-1" data-widget-colorbutton="false"
                         data-widget-editbutton="false">

                        <header>
                            <span class="widget-icon"> <i class="fa fa-dashboard"></i> </span>

                            <h2>Vision</h2>

                        </header>

                        <!-- widget div-->
                        <div>
                            <div class="widget-body">
                                <!-- content goes here -->
                                <div id="vision-performance-graph" class="chart no-padding"></div>
                                <!-- end content -->

                            </div>

                        </div>
                        <!-- end widget div -->
                    </div>
                    <!-- end widget -->

                </article>

                <article class="col-sm-12 col-md-12 col-lg-6">

                    <!-- new widget -->
                    <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-2" data-widget-colorbutton="false"
                         data-widget-editbutton="false">

                        <header>
                            <span class="widget-icon"> <i class="fa fa-dashboard"></i> </span>

                            <h2>Colours</h2>

                        </header>

                        <!-- widget div-->
                        <div>

                            <div class="widget-body">
                                <!-- content goes here -->
                                <div id="colours-performance-graph" class="chart no-padding"></div>
                                <!-- end content -->

                            </div>

                        </div>
                        <!-- end widget div -->
                    </div>
                    <!-- end widget -->

                </article>
            </div>

            <!-- end row -->

            <!--            start row-->
            <div class="row">
                <article class="col-sm-12 col-md-12 col-lg-6">

                    <!-- new widget -->
                    <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-3" data-widget-colorbutton="false"
                         data-widget-editbutton="false">

                        <header>
                            <span class="widget-icon"> <i class="fa fa-dashboard"></i> </span>

                            <h2>Learnability</h2>

                        </header>

                        <!-- widget div-->
                        <div>

                            <div class="widget-body">
                                <!-- content goes here -->
                                <div id="learnability-performance-graph" class="chart no-padding"></div>
                                <!-- end content -->

                            </div>

                        </div>
                        <!-- end widget div -->
                    </div>
                    <!-- end widget -->

                </article>

                <article class="col-sm-12 col-md-12 col-lg-6">

                    <!-- new widget -->
                    <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-4" data-widget-colorbutton="false"
                         data-widget-editbutton="false">

                        <header>
                            <span class="widget-icon"> <i class="fa fa-dashboard"></i> </span>

                            <h2>Decision Making</h2>

                        </header>

                        <!-- widget div-->
                        <div>

                            <div class="widget-body">
                                <!-- content goes here -->
                                <div id="decision-performance-graph" class="chart no-padding"></div>
                                <!-- end content -->

                            </div>

                        </div>
                        <!-- end widget div -->
                    </div>
                    <!-- end widget -->

                </article>
            </div>

            <!-- end row -->

            <!--            start row-->
            <div class="row">
                <article class="col-sm-12 col-md-12 col-lg-6">

                    <!-- new widget -->
                    <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-5" data-widget-colorbutton="false"
                         data-widget-editbutton="false">

                        <header>
                            <span class="widget-icon"> <i class="fa fa-dashboard"></i> </span>

                            <h2>Concept of Size</h2>

                        </header>

                        <!-- widget div-->
                        <div>

                            <div class="widget-body">
                                <!-- content goes here -->
                                <div id="size-performance-graph" class="chart no-padding"></div>
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


<script>
    $(document).ready(function () {

        // DO NOT REMOVE : GLOBAL FUNCTIONS!
        pageSetUp();

        /*
         * PAGE RELATED SCRIPTS
         */

        /**
         * overall-performance-graph Data
         */
        if ($('#overall-performance-graph').length) {
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
                element: 'overall-performance-graph',
                data: performance_data,
                xkey: 'period',
                ykeys: ['vision', 'color'],
                labels: ['Vision', 'Color'],
                xLabels: 'day'
            });
        }

        /**
         * vision-performance-graph Data
         */
        if ($('#vision-performance-graph').length) {
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
            }];
            Morris.Line({
                element: 'vision-performance-graph',
                data: performance_data,
                xkey: 'period',
                ykeys: ['vision'],
                labels: ['Vision'],
                xLabels: 'day'
            });
        }

        /**
         * colours-performance-graph Data
         */
        if ($('#colours-performance-graph').length) {
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
            }];
            Morris.Line({
                element: 'colours-performance-graph',
                data: performance_data,
                xkey: 'period',
                ykeys: ['vision'],
                labels: ['Vision'],
                xLabels: 'day'
            });
        }

        /**
         * learnability-performance-graph Data
         */
        if ($('#learnability-performance-graph').length) {
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
            }];
            Morris.Line({
                element: 'learnability-performance-graph',
                data: performance_data,
                xkey: 'period',
                ykeys: ['vision'],
                labels: ['Vision'],
                xLabels: 'day'
            });
        }

        /**
         * decision-performance-graph Data
         */
        if ($('#decision-performance-graph').length) {
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
            }];
            Morris.Line({
                element: 'decision-performance-graph',
                data: performance_data,
                xkey: 'period',
                ykeys: ['vision'],
                labels: ['Vision'],
                xLabels: 'day'
            });
        }

        /**
         * size-performance-graph Data
         */
        if ($('#size-performance-graph').length) {
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
            }];
            Morris.Line({
                element: 'size-performance-graph',
                data: performance_data,
                xkey: 'period',
                ykeys: ['vision'],
                labels: ['Vision'],
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