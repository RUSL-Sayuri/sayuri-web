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
            <li>Consultant</li>
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
                <h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-home"></i> Consultant <span>>Dashboard</span>
                </h1>
            </div>
        </div>
        <!-- widget grid -->
        <section id="widget-grid" class="">
            <!-- row -->

            <div class="row">

                <article class="col-sm-12 col-md-12 col-lg-6">

                    <!-- new widget -->
                    <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-0" data-widget-editbutton="false"
                         data-widget-fullscreenbutton="false">

                        <!-- widget options:
                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                        data-widget-colorbutton="false"
                        data-widget-editbutton="false"
                        data-widget-togglebutton="false"
                        data-widget-deletebutton="false"
                        data-widget-fullscreenbutton="false"
                        data-widget-custombutton="false"
                        data-widget-collapsed="true"
                        data-widget-sortable="false"

                        -->

                        <header>
                            <span class="widget-icon"> <i class="fa fa-comments txt-color-white"></i> </span>

                            <h2> Messages </h2>

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

                                <!-- CHAT BODY -->
                                <div id="chat-body" class="chat-body custom-scroll">
                                    <ul>
                                        <li class="message">
                                            <img src="<?php echo base_url('assests/') ?>/img/avatars/5.png"
                                                 class="online" alt="">

                                            <div class="message-text">
                                                <time>
                                                    2014-01-13
                                                </time>
                                                <a href="javascript:void(0);" class="username">Sadi Orlaf</a> Hey did
                                                you meet the new board of director? He's a bit of an arse if you ask
                                                me...anyway here is the report you requested. I am off to launch with
                                                Lisa and Andrew, you wanna join?
                                                <p class="chat-file row">
                                                    <b class="pull-left col-sm-6">
                                                        <!--<i class="fa fa-spinner fa-spin"></i>--> <i
                                                            class="fa fa-file"></i>
                                                        report-2013-demographic-report-annual-earnings.xls </b>
                                                    <span class="col-sm-6 pull-right"> <a href="javascript:void(0);"
                                                                                          class="btn btn-xs btn-default">cancel</a> <a
                                                            href="javascript:void(0);" class="btn btn-xs btn-success">save</a> </span>
                                                </p>

                                                <p class="chat-file row">
                                                    <b class="pull-left col-sm-6"> <i
                                                            class="fa fa-ok txt-color-green"></i>
                                                        tobacco-report-2012.doc </b>
                                                    <span class="col-sm-6 pull-right"> <a href="javascript:void(0);"
                                                                                          class="btn btn-xs btn-primary">open</a> </span>
                                                </p></div>
                                        </li>
                                        <li class="message">
                                            <img src="<?php echo base_url('assests/') ?>/img/avatars/5.png"
                                                 class="online" alt="">

                                            <div class="message-text">
                                                <time>
                                                    2014-01-13
                                                </time>
                                                <a href="javascript:void(0);" class="username">Sadi Orlaf</a> Hey did
                                                you meet the new board of director? He's a bit of an arse if you ask
                                                me...anyway here is the report you requested. I am off to launch with
                                                Lisa and Andrew, you wanna join?
                                                <p class="chat-file row">
                                                    <b class="pull-left col-sm-6">
                                                        <!--<i class="fa fa-spinner fa-spin"></i>--> <i
                                                            class="fa fa-file"></i>
                                                        report-2013-demographic-report-annual-earnings.xls </b>
                                                    <span class="col-sm-6 pull-right"> <a href="javascript:void(0);"
                                                                                          class="btn btn-xs btn-default">cancel</a> <a
                                                            href="javascript:void(0);" class="btn btn-xs btn-success">save</a> </span>
                                                </p>

                                                <p class="chat-file row">
                                                    <b class="pull-left col-sm-6"> <i
                                                            class="fa fa-ok txt-color-green"></i>
                                                        tobacco-report-2012.doc </b>
                                                    <span class="col-sm-6 pull-right"> <a href="javascript:void(0);"
                                                                                          class="btn btn-xs btn-primary">open</a> </span>
                                                </p></div>
                                        </li>
                                        <li class="message">
                                            <img src="<?php echo base_url('assests/') ?>/img/avatars/5.png"
                                                 class="online" alt="">

                                            <div class="message-text">
                                                <time>
                                                    2014-01-13
                                                </time>
                                                <a href="javascript:void(0);" class="username">Sadi Orlaf</a> Hey did
                                                you meet the new board of director? He's a bit of an arse if you ask
                                                me...anyway here is the report you requested. I am off to launch with
                                                Lisa and Andrew, you wanna join?
                                                <p class="chat-file row">
                                                    <b class="pull-left col-sm-6">
                                                        <!--<i class="fa fa-spinner fa-spin"></i>--> <i
                                                            class="fa fa-file"></i>
                                                        report-2013-demographic-report-annual-earnings.xls </b>
                                                    <span class="col-sm-6 pull-right"> <a href="javascript:void(0);"
                                                                                          class="btn btn-xs btn-default">cancel</a> <a
                                                            href="javascript:void(0);" class="btn btn-xs btn-success">save</a> </span>
                                                </p>

                                                <p class="chat-file row">
                                                    <b class="pull-left col-sm-6"> <i
                                                            class="fa fa-ok txt-color-green"></i>
                                                        tobacco-report-2012.doc </b>
                                                    <span class="col-sm-6 pull-right"> <a href="javascript:void(0);"
                                                                                          class="btn btn-xs btn-primary">open</a> </span>
                                                </p></div>
                                        </li>
                                        <li class="message">
                                            <img src="<?php echo base_url('assests/') ?>/img/avatars/5.png"
                                                 class="online" alt="">

                                            <div class="message-text">
                                                <time>
                                                    2014-01-13
                                                </time>
                                                <a href="javascript:void(0);" class="username">Sadi Orlaf</a> Hey did
                                                you meet the new board of director? He's a bit of an arse if you ask
                                                me...anyway here is the report you requested. I am off to launch with
                                                Lisa and Andrew, you wanna join?
                                                <p class="chat-file row">
                                                    <b class="pull-left col-sm-6">
                                                        <!--<i class="fa fa-spinner fa-spin"></i>--> <i
                                                            class="fa fa-file"></i>
                                                        report-2013-demographic-report-annual-earnings.xls </b>
                                                    <span class="col-sm-6 pull-right"> <a href="javascript:void(0);"
                                                                                          class="btn btn-xs btn-default">cancel</a> <a
                                                            href="javascript:void(0);" class="btn btn-xs btn-success">save</a> </span>
                                                </p>

                                                <p class="chat-file row">
                                                    <b class="pull-left col-sm-6"> <i
                                                            class="fa fa-ok txt-color-green"></i>
                                                        tobacco-report-2012.doc </b>
                                                    <span class="col-sm-6 pull-right"> <a href="javascript:void(0);"
                                                                                          class="btn btn-xs btn-primary">open</a> </span>
                                                </p></div>
                                        </li>
                                        <li class="message">
                                            <img src="<?php echo base_url('assests/') ?>/img/avatars/sunny.png"
                                                 class="online" alt="">

                                            <div class="message-text">
                                                <time>
                                                    2014-01-13
                                                </time>
                                                <a href="javascript:void(0);" class="username">John Doe</a> Haha! Yeah I
                                                know what you mean. Thanks for the file Sadi! <i
                                                    class="fa fa-smile-o txt-color-orange"></i>
                                            </div>
                                        </li>
                                    </ul>

                                </div>

                                <!-- end content -->
                            </div>

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

                            <h2>Consulting Requests</h2>

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

                                <table id="dt_consulting_requests" class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Parent</th>
                                        <th>Child</th>
                                        <th style="width: 160px">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="view"><b>Nirmali Perera</b></td>
                                        <td>Saman Perera</td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <button class="btn btn-sm btn-success">Accept</button>
                                                <button class="btn btn-sm btn-danger">Decline</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="view"><b>Nirmali Perera</b></td>
                                        <td>Saman Perera</td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <button class="btn btn-sm btn-success">Accept</button>
                                                <button class="btn btn-sm btn-danger">Decline</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="view"><b>Nirmali Perera</b></td>
                                        <td>Saman Perera</td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <button class="btn btn-sm btn-success">Accept</button>
                                                <button class="btn btn-sm btn-danger">Decline</button>
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
         * PAGE RELATED SCRIPTS
         */

        /*
         * Datatable for list of my consultantations
         */
        $('#dt_consulting_requests').dataTable({
            "sPaginationType": "bootstrap_full"
        });

        $('.view').click(function () {
            $('#myModal').modal('show');
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