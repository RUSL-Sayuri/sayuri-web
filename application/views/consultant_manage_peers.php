<?php $this->load->view('partial/header'); ?>
</head>
<body class="">

<!-- HEADER -->
<?php $this->load->view('partial/top_bar'); ?>
<!-- END HEADER -->

<!-- Left panel : Navigation area -->
<?php $this->load->view('partial/navigation_consultant'); ?>
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
                Consultant
            </li>
            <li>Peers</li>
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
                    Peers

                </h1>
            </div>
        </div>

        <!-- widget grid -->
        <section id="widget-grid" class="">

            <!-- row -->
            <div class="row">

                <!-- NEW WIDGET START -->
                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-group"></i> </span>

                            <h2>My Peers </h2>
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
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Profile</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($consultants as $consultant):
                                        ?>
                                        <tr>
                                            <td class="view"><b><?= $consultant->fname . " " . $consultant->lname ?></b>
                                            </td>
                                            <td><?= $consultant->title ?></td>
                                            <td>
                                                <button data-consultant-id="<?= $consultant->id ?>"
                                                        class="view btn btn-sm">View full profile
                                                </button>
                                            </td>
                                        </tr>
                                    <?php
                                    endforeach;
                                    ?>
                                    </tbody>
                                </table>

                            </div>
                            <!-- end widget content -->

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

<!-- Modal -->
<div class="modal fade" id="consultantModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Consultant Profile</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img class="center-block img-thumbnail" style="vertical-align: middle"
                             src="<?php echo base_url('assests/') ?>/img/demo/64x64.png" alt=""/>
                    </div>
                    <div class="col-md-8">
                        <h1 id="consultant-name"></h1>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8" style="padding-left: 50px">
                    <p class="text-justify" id="description"></p>

                    <p class="text-justify">Specialised Area: <span id="specialised"></span></p>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4" style="padding-right: 50px">
                    <address class="text-align-right">
                        <span id="address1"></span> ,<br/>
                        <span id="address2"></span>,<br/>
                        <span id="city"></span>,<br/>
                        <span id="province"></span>.<br/>
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
         * Datatable for list of My peers
         */
        $('#dt_my_peers').dataTable({
            "sPaginationType": "bootstrap_full"
        });

        /*
         * Datatable for list of Consulting requests
         */
        $('#dt_consulting_requests').dataTable({
            "sPaginationType": "bootstrap_full"
        });

        $('.view').click(function () {
            var consultantID = $(this).data('consultant-id');
            $.ajax({
                type: "GET",
                dataType: 'json',
                url: "<?php echo base_url('/index.php/API/consultant/'); ?>/" + consultantID,
                success: function (data) {
                    $('#consultant-name').text(data.fname + " " + data.lname);
                    $('#description').text(data.description);
                    $('#address1').text(data.addressline1);
                    $('#address2').text(data.addressline2);
                    $('#city').text(data.city);
                    $('#province').text(data.province);

                    $('#specialised').text(data.speazlized_area);

                    $('#consultantModel').modal('show');
                }
            });


        });

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