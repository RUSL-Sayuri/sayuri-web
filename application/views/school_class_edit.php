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
                School's Head
            </li>
            <li>Edit Class</li>

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
                    Edit Class //class name//

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
                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-1" data-widget-editbutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-group"></i> </span>

                            <h2>Children List</h2>
                        </header>

                        <!-- widget div-->
                        <div>
                            <!-- widget content -->
                            <div class="widget-body no-padding">
                                <div class="widget-body-toolbar">

                                </div>

                                <table id="dt_children" class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Parent</th>
                                        <th>Child</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="view"><b>Sunil Perera</b></td>
                                        <td>Gayan Perera</td>
                                        <td>
                                            <button class="btn btn-sm btn-success">Add to class</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="view"><b>Nirmala Kothalawala</b></td>
                                        <td>Sumudu Dineth</td>
                                        <td>
                                            <button class="btn btn-sm btn-success">Add to class</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="view"><b>Kamal Feranando</b></td>
                                        <td>Nethmi Kaveesha</td>
                                        <td>
                                            <button class="btn btn-sm btn-success">Add to class</button>
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
                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-user"></i> </span>

                            <h2>Students of class //name//</h2>

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

                                <table id="dt_class_students" class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Parent</th>
                                        <th>Child</th>
                                        <th style="width: 160px">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="view"><b>Sumana Gomes</b></td>
                                        <td>Amanda Kaushalya</td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <button class="btn btn-sm btn-info">Profile</button>
                                                <button class="btn btn-sm btn-danger">Remove</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="view"><b>Nayana Kumari</b></td>
                                        <td>Bhagya Mayomi</td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <button class="btn btn-sm btn-info">Profile</button>
                                                <button class="btn btn-sm btn-danger">Remove</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="view"><b>Soma Edirisinghe</b></td>
                                        <td>Prasanna Edirisinghe</td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <button class="btn btn-sm btn-info">Profile</button>
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
         * Datatable for list of children
         */
        $('#dt_children').dataTable({
            "sPaginationType": "bootstrap_full"
        });

        /*
         * Datatable for list of clas students
         */
        $('#dt_class_students').dataTable({
            "sPaginationType": "bootstrap_full"
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