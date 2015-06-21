<?php $this->load->view('partial/header');
?>
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
                Autism Centers
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
                    <i class="fa fa-building fa-fw "></i>
                    Autism Centers

                </h1>
            </div>
        </div>

        <!-- widget grid -->
        <section id="widget-grid" class="">

            <!-- row -->
            <div class="row">

                <!-- NEW WIDGET START -->
                <article class="col-xs-12 col-sm-12 col-md-7 col-lg-7">

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-table"></i> </span>

                            <h2>List of Autism Centers in Sri Lanka </h2>

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

                                <table id="dt_basic" class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>City</th>
                                        <th width="35px">View</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Sumaga</td>
                                        <td>Kelaniya</td>
                                        <td>
                                            <button class="view btn btn-sm btn-default">View</button>
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
                <article class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-1" data-widget-editbutton="false"
                         data-widget-deletebutton="false" >
                        <header>
                            <span class="widget-icon"> <i class="fa fa-map-marker"></i> </span>

                            <h2>Places of Autism Centers in Sri Lanka </h2>

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

                                <div id="map-canvas" style="height: 400px"></div>


                            </div>
                            <!-- end widget content -->

                        </div>
                        <!-- end widget div -->

                    </div>
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
                <h4 class="modal-title" id="myModalLabel">Sumaga Special Needs School</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img class="center-block img-thumbnail"
                             src="<?php echo base_url('assests/') ?>/img/demo/64x64.png" alt=""/>
                    </div>
                    <div class="col-md-8">
                        <h1 class="h1">Sumaga Special Needs School</h1>
                        <address>461 Danister Ln, Peliyagoda</address>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="padding-left: 50px;padding-right: 50px">
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci assumenda et eveniet labore laborum quam quisquam reprehenderit sequi veritatis. Autem delectus dolor ex laudantium minus modi quo suscipit tenetur voluptas.</p>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci assumenda et eveniet labore laborum quam quisquam reprehenderit sequi veritatis. Autem delectus dolor ex laudantium minus modi quo suscipit tenetur voluptas.</p>
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
<script src="<?php echo base_url('assests/') ?>/js/plugin/datatables/jquery.dataTables-cust.min.js"></script>
<script src="<?php echo base_url('assests/') ?>/js/plugin/datatables/ColReorder.min.js"></script>
<script src="<?php echo base_url('assests/') ?>/js/plugin/datatables/FixedColumns.min.js"></script>
<script src="<?php echo base_url('assests/') ?>/js/plugin/datatables/ColVis.min.js"></script>
<script src="<?php echo base_url('assests/') ?>/js/plugin/datatables/ZeroClipboard.js"></script>
<script src="<?php echo base_url('assests/') ?>/js/plugin/datatables/media/js/TableTools.min.js"></script>
<script src="<?php echo base_url('assests/') ?>/js/plugin/datatables/DT_bootstrap.js"></script>


<script type="text/javascript">

    $(document).ready(function () {

        pageSetUp();

        /*
         * BASIC
         */
        $('#dt_basic').dataTable({
            "sPaginationType": "bootstrap_full"
        });

        /* END BASIC */

        $('.view').click(function () {
            $('#myModal').modal('show');
        });
    })

</script>

<!-- Google Maps Javascript API v3 -->
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXtI6FZraCPypYEdB-tniAadnlDS4DliQ">
</script>

<script type="text/javascript">
    function initialize() {
        var mapOptions = {
            center: {lat: 7.87305399, lng: 80.77179699},
            zoom: 7
        };

        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);

        var marker_point_sumaga = new google.maps.LatLng(6.9583839, 79.911713);
        var marker_point_Kgala = new google.maps.LatLng(7.4776693, 80.3512357);

        var marker_sumaga = new google.maps.Marker({
            position: marker_point_sumaga,
            map: map,
            title: 'Sumaga Special Need School'
        });
        var marker_Kgala = new google.maps.Marker({
            position: marker_point_Kgala,
            map: map,
            title: 'Kurunegala Special Need School'
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
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