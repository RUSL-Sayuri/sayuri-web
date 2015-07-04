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
            <li>
                Consultants
            </li>

        </ol>
        <!-- end breadcrumb -->

    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa fa-suitcase fa-fw "></i>
                    Consultants

                </h1>
            </div>
        </div>

        <!-- widget grid -->
        <section id="widget-grid" class="">

            <!-- row -->
            <div class="row">

                <!-- NEW WIDGET START -->
                <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-group"></i> </span>

                            <h2>List of Consultants </h2>
                        </header>

                        <!-- widget div-->
                        <div>
                            <!-- widget content -->
                            <div class="widget-body no-padding">
                                <div class="widget-body-toolbar">

                                </div>

                                <table id="dt_consultants" class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="view"><b>Dr. Jayanath Sumanapala</b></td>
                                        <td>MBBS</td>
                                        <td>
                                            <button class="btn btn-sm">Request to consult</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="view"><b>Dr. Siripala Gamlathge</b></td>
                                        <td>PhD</td>
                                        <td>
                                            <button class="btn btn-sm">Request to consult</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="view"><b>Dr. (Mrs) Kanthi Lalanthapala</b></td>
                                        <td>MPhill, PhD, MBBS, WCD, WWW</td>
                                        <td>
                                            <button class="btn btn-sm">Request to consult</button>
                                        </td>
                                    </tr>
<tr>
                                        <td class="view"><b>Dr. (Mrs) Jayanthi Swarnamali</b></td>
                                        <td>PhD, MBBS, WWW</td>
                                        <td>
                                            <button class="btn btn-sm">Request to consult</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="view"><b>Dr. (Mrs) Kalpani Sumanaweera</b></td>
                                        <td>PhD, WWW</td>
                                        <td>
                                            <button class="btn btn-sm">Request to consult</button>
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

                <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-1" data-widget-editbutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-user"></i> </span>

                            <h2>My Consultants</h2>

                        </header>

                        <!-- widget div-->
                        <div>

                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">
                                <!-- This area used as dropdown edit box -->

                            </div>
                            <!-- end widget edit box -->

                            <!-- widget content -->
                            <div class="widget-body no-padding">
                                <div class="widget-body-toolbar">

                                </div>

                                <table id="dt_my_consultants" class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th style="width: 160px">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="view"><b>Dr. Jayanath Sumanapala</b></td>
                                        <td>MBBS</td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <button class="btn btn-sm">Message</button>
                                                <button class="btn btn-sm btn-danger">Remove</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="view"><b>Dr. Siripala Gamlathge</b></td>
                                        <td>PhD</td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <button class="btn btn-sm">Message</button>
                                                <button class="btn btn-sm btn-danger">Remove</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="view"><b>Dr. (Mrs) Kanthi Lalanthapala</b></td>
                                        <td>MPhill, PhD, MBBS, WCD, WWW</td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <button class="btn btn-sm">Message</button>
                                                <button class="btn btn-sm btn-danger">Remove</button>
                                            </div>
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
                <!-- WIDGET END -->

            </div>

            <!-- end row -->

        </section>
        <!-- end widget grid -->

    </div>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Dr. Siripala Gamlathge</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img class="center-block img-thumbnail" style="vertical-align: middle"
                             src="<?php echo base_url('assests/') ?>/img/demo/64x64.png" alt=""/>
                    </div>
                    <div class="col-md-8">
                        <h1>Dr. Siripala Gamlathge
                        <br><small>MBBS</small>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8" style="padding-left: 50px">
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci assumenda
                        et eveniet labore laborum quam quisquam reprehenderit sequi veritatis. Autem delectus dolor ex
                        laudantium minus modi quo suscipit tenetur voluptas.</p>

                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci assumenda
                        et eveniet labore laborum quam quisquam reprehenderit sequi veritatis. Autem delectus dolor ex
                        laudantium minus modi quo suscipit tenetur voluptas.</p>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4" style="padding-right: 50px">
                    <address class="text-align-right">
                        14/456,<br/>
                        Dr. R Colvin Silva Mw,<br/>
                        Hill Side Road,<br/>
                        Colombo 7.<br/>
                        071 39 29 113
                    </address>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--================================================== -->

<?php $this->load->view('partial/common_js'); ?>

<!-- PAGE RELATED PLUGIN(S) -->
<script src="<?php echo base_url('assests/'); ?>/js/plugin/datatables/jquery.dataTables-cust.min.js"></script>
<script src="<?php echo base_url('assests/'); ?>/js/plugin/datatables/ColReorder.min.js"></script>
<script src="<?php echo base_url('assests/'); ?>/js/plugin/datatables/FixedColumns.min.js"></script>
<script src="<?php echo base_url('assests/'); ?>/js/plugin/datatables/ColVis.min.js"></script>
<script src="<?php echo base_url('assests/'); ?>/js/plugin/datatables/ZeroClipboard.js"></script>
<script src="<?php echo base_url('assests/'); ?>/js/plugin/datatables/media/js/TableTools.min.js"></script>
<script src="<?php echo base_url('assests/'); ?>/js/plugin/datatables/DT_bootstrap.js"></script>


<script type="text/javascript">

    $(document).ready(function () {

        pageSetUp();

        /*
         * BASIC
         */
        $('#dt_basic').dataTable({
            "sPaginationType": "bootstrap_full"
        });

        /*
         * Datatable for list of consultants
         */
        $('#dt_consultants').dataTable({
            "sPaginationType": "bootstrap_full"
        });

        /*
         * Datatable for list of my consultants
         */
        $('#dt_my_consultants').dataTable({
            "sPaginationType": "bootstrap_full"
        });

        $('.view').click(function () {
            $('#myModal').modal('show');
        });

    })

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