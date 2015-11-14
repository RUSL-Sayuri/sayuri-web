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
                <h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-home"></i> Dashboard <span>> My Dashboard</span>
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
                                        <?php foreach ($smart_inbox as $message): ?>
                                            <li class="message">
                                                <img src="<?php echo base_url('assests/') ?>/img/avatars/4.png"
                                                     class="online" alt="">

                                                <div class="message-text">
                                                    <time><?= $message->date_time ?></time>
                                                    <a href="javascript:void(0);" class="username"><?= $message->fname . " " . $message->lname ?></a>
                                                    <?= substr($message->body,0,100)?>
                                                </div>
                                            </li>

                                        <?php endforeach; ?>
<!--                                        <li class="message">-->
<!--                                            <img src="--><?php //echo base_url('assests/') ?><!--/img/avatars/5.png"-->
<!--                                                 class="online" alt="">-->
<!---->
<!--                                            <div class="message-text">-->
<!--                                                <time>-->
<!--                                                    2014-01-13-->
<!--                                                </time>-->
<!--                                                <a href="javascript:void(0);" class="username">Sadi Orlaf</a> Hey did-->
<!--                                                you meet the new board of director? He's a bit of an arse if you ask-->
<!--                                                me...anyway here is the report you requested. I am off to launch with-->
<!--                                                Lisa and Andrew, you wanna join?-->
<!--                                                <p class="chat-file row">-->
<!--                                                    <b class="pull-left col-sm-6">-->
<!--                                                        <!--<i class="fa fa-spinner fa-spin"></i>--> <i-->
<!--                                                            class="fa fa-file"></i>-->
<!--                                                        report-2013-demographic-report-annual-earnings.xls </b>-->
<!--                                                    <span class="col-sm-6 pull-right"> <a href="javascript:void(0);"-->
<!--                                                                                          class="btn btn-xs btn-default">cancel</a> <a-->
<!--                                                            href="javascript:void(0);" class="btn btn-xs btn-success">save</a> </span>-->
<!--                                                </p>-->
<!---->
<!--                                                <p class="chat-file row">-->
<!--                                                    <b class="pull-left col-sm-6"> <i-->
<!--                                                            class="fa fa-ok txt-color-green"></i>-->
<!--                                                        tobacco-report-2012.doc </b>-->
<!--                                                    <span class="col-sm-6 pull-right"> <a href="javascript:void(0);"-->
<!--                                                                                          class="btn btn-xs btn-primary">open</a> </span>-->
<!--                                                </p></div>-->
<!--                                        </li>-->
<!--                                        <li class="message">-->
<!--                                            <img src="--><?php //echo base_url('assests/') ?><!--/img/avatars/5.png"-->
<!--                                                 class="online" alt="">-->
<!---->
<!--                                            <div class="message-text">-->
<!--                                                <time>-->
<!--                                                    2014-01-13-->
<!--                                                </time>-->
<!--                                                <a href="javascript:void(0);" class="username">Sadi Orlaf</a> Hey did-->
<!--                                                you meet the new board of director? He's a bit of an arse if you ask-->
<!--                                                me...anyway here is the report you requested. I am off to launch with-->
<!--                                                Lisa and Andrew, you wanna join?-->
<!--                                                <p class="chat-file row">-->
<!--                                                    <b class="pull-left col-sm-6">-->
<!--                                                        <!--<i class="fa fa-spinner fa-spin"></i>--> <i-->
<!--                                                            class="fa fa-file"></i>-->
<!--                                                        report-2013-demographic-report-annual-earnings.xls </b>-->
<!--                                                    <span class="col-sm-6 pull-right"> <a href="javascript:void(0);"-->
<!--                                                                                          class="btn btn-xs btn-default">cancel</a> <a-->
<!--                                                            href="javascript:void(0);" class="btn btn-xs btn-success">save</a> </span>-->
<!--                                                </p>-->
<!---->
<!--                                                <p class="chat-file row">-->
<!--                                                    <b class="pull-left col-sm-6"> <i-->
<!--                                                            class="fa fa-ok txt-color-green"></i>-->
<!--                                                        tobacco-report-2012.doc </b>-->
<!--                                                    <span class="col-sm-6 pull-right"> <a href="javascript:void(0);"-->
<!--                                                                                          class="btn btn-xs btn-primary">open</a> </span>-->
<!--                                                </p></div>-->
<!--                                        </li>-->
<!--                                        <li class="message">-->
<!--                                            <img src="--><?php //echo base_url('assests/') ?><!--/img/avatars/5.png"-->
<!--                                                 class="online" alt="">-->
<!---->
<!--                                            <div class="message-text">-->
<!--                                                <time>-->
<!--                                                    2014-01-13-->
<!--                                                </time>-->
<!--                                                <a href="javascript:void(0);" class="username">Sadi Orlaf</a> Hey did-->
<!--                                                you meet the new board of director? He's a bit of an arse if you ask-->
<!--                                                me...anyway here is the report you requested. I am off to launch with-->
<!--                                                Lisa and Andrew, you wanna join?-->
<!--                                                <p class="chat-file row">-->
<!--                                                    <b class="pull-left col-sm-6">-->
<!--                                                        <!--<i class="fa fa-spinner fa-spin"></i>--> <i-->
<!--                                                            class="fa fa-file"></i>-->
<!--                                                        report-2013-demographic-report-annual-earnings.xls </b>-->
<!--                                                    <span class="col-sm-6 pull-right"> <a href="javascript:void(0);"-->
<!--                                                                                          class="btn btn-xs btn-default">cancel</a> <a-->
<!--                                                            href="javascript:void(0);" class="btn btn-xs btn-success">save</a> </span>-->
<!--                                                </p>-->
<!---->
<!--                                                <p class="chat-file row">-->
<!--                                                    <b class="pull-left col-sm-6"> <i-->
<!--                                                            class="fa fa-ok txt-color-green"></i>-->
<!--                                                        tobacco-report-2012.doc </b>-->
<!--                                                    <span class="col-sm-6 pull-right"> <a href="javascript:void(0);"-->
<!--                                                                                          class="btn btn-xs btn-primary">open</a> </span>-->
<!--                                                </p></div>-->
<!--                                        </li>-->
<!--                                        <li class="message">-->
<!--                                            <img src="--><?php //echo base_url('assests/') ?><!--/img/avatars/5.png"-->
<!--                                                 class="online" alt="">-->
<!---->
<!--                                            <div class="message-text">-->
<!--                                                <time>-->
<!--                                                    2014-01-13-->
<!--                                                </time>-->
<!--                                                <a href="javascript:void(0);" class="username">Sadi Orlaf</a> Hey did-->
<!--                                                you meet the new board of director? He's a bit of an arse if you ask-->
<!--                                                me...anyway here is the report you requested. I am off to launch with-->
<!--                                                Lisa and Andrew, you wanna join?-->
<!--                                                <p class="chat-file row">-->
<!--                                                    <b class="pull-left col-sm-6">-->
<!--                                                        <!--<i class="fa fa-spinner fa-spin"></i>--> <i-->
<!--                                                            class="fa fa-file"></i>-->
<!--                                                        report-2013-demographic-report-annual-earnings.xls </b>-->
<!--                                                    <span class="col-sm-6 pull-right"> <a href="javascript:void(0);"-->
<!--                                                                                          class="btn btn-xs btn-default">cancel</a> <a-->
<!--                                                            href="javascript:void(0);" class="btn btn-xs btn-success">save</a> </span>-->
<!--                                                </p>-->
<!---->
<!--                                                <p class="chat-file row">-->
<!--                                                    <b class="pull-left col-sm-6"> <i-->
<!--                                                            class="fa fa-ok txt-color-green"></i>-->
<!--                                                        tobacco-report-2012.doc </b>-->
<!--                                                    <span class="col-sm-6 pull-right"> <a href="javascript:void(0);"-->
<!--                                                                                          class="btn btn-xs btn-primary">open</a> </span>-->
<!--                                                </p></div>-->
<!--                                        </li>-->
<!--                                        <li class="message">-->
<!--                                            <img src="--><?php //echo base_url('assests/') ?><!--/img/avatars/sunny.png"-->
<!--                                                 class="online" alt="">-->
<!---->
<!--                                            <div class="message-text">-->
<!--                                                <time>-->
<!--                                                    2014-01-13-->
<!--                                                </time>-->
<!--                                                <a href="javascript:void(0);" class="username">John Doe</a> Haha! Yeah I-->
<!--                                                know what you mean. Thanks for the file Sadi! <i-->
<!--                                                    class="fa fa-smile-o txt-color-orange"></i>-->
<!--                                            </div>-->
<!--                                        </li>-->
                                    </ul>

                                </div>

                                <!-- end content -->
                            </div>

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
                                        <?php
                                        foreach ($game_latest_scores as $key => $game_latest_score):
                                            ?>
                                            <tr>
                                                <td><?= $key ?></td>
                                                <td><?= $game_latest_score->score ?></td>
                                                <td><?= $game_latest_score->date ?></td>
                                            </tr>
                                        <?php
                                        endforeach;
                                        ?>
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


<script>
    $(document).ready(function () {

        // DO NOT REMOVE : GLOBAL FUNCTIONS!
        //pageSetUp();

        /*
         * PAGE RELATED SCRIPTS
         */

        if ($('#performance-graph').length) {

            var performance_data = [
                <?php
                // The generate_dashboard_graph_data() can be found in helper class
                echo generate_dashboard_graph_data($overall_game_score);
                ?>
            ];
            Morris.Line({
                element: 'performance-graph',
                data: performance_data,
                xkey: 'period',
                ykeys: ['Score'
                ],
                labels: ['Score'],
                xLabels: 'Day'
            });
        }

    });

</script>

<?php $this->load->view('partial/google_analytics'); ?>

</body>

</html>