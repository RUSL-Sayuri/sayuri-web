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
            <li>Inbox</li>
        </ol>
        <!-- end breadcrumb -->

    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="inbox-nav-bar no-content-padding">

            <h1 class="page-title txt-color-blueDark hidden-tablet"><i class="fa fa-fw fa-inbox"></i> Inbox</h1>

            <div class="btn-group hidden-desktop visible-tablet">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    Inbox <i class="fa fa-caret-down"></i>
                </button>
            </div>

            <a href="javascript:void(0);" id="compose-mail-mini"
               class="btn btn-primary pull-right hidden-desktop visible-tablet"> <strong><i
                        class="fa fa-file fa-lg"></i></strong> </a>

            <div class="btn-group pull-right inbox-paging">
                <a href="javascript:void(0);" class="btn btn-default btn-sm"><strong><i class="fa fa-chevron-left"></i></strong></a>
                <a href="javascript:void(0);" class="btn btn-default btn-sm"><strong><i class="fa fa-chevron-right"></i></strong></a>
            </div>
            <span class="pull-right"><strong>1-30</strong> of <strong>3,452</strong></span>

        </div>

        <div id="inbox-content" class="inbox-body no-content-padding">

            <div class="inbox-side-bar">

                <a href="javascript:void(0);" id="compose-mail" class="btn btn-primary btn-block">
                    <strong>Compose</strong> </a>

                <h6> Folder <a href="javascript:void(0);" rel="tooltip" title="" data-placement="right"
                               data-original-title="Refresh" class="pull-right txt-color-darken"><i
                            class="fa fa-refresh"></i></a></h6>

                <ul class="inbox-menu-lg">
                    <li class="active">
                        <a class="inbox-load" href="javascript:void(0);"> Inbox (14) </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" id="sentbox-load">Sent</a>
                    </li>
                </ul>

            </div>

            <div class="table-wrap custom-scroll animated fast fadeInRight">
                <!-- ajax will fill this area -->
                LOADING...

            </div>

        </div>


    </div>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->

<?php $this->load->view('partial/common_js'); ?>

<!-- PAGE RELATED PLUGIN(S) -->

<script src="<?php echo base_url('assests/') ?>/js/plugin/delete-table-row/delete-table-row.js"></script>

<script src="<?php echo base_url('assests/') ?>/js/plugin/summernote/summernote.js"></script>

<script src="<?php echo base_url('assests/') ?>/js/plugin/select2/select2.min.js"></script>

<script type="text/javascript">

    $(document).ready(function () {

        // DO NOT REMOVE : GLOBAL FUNCTIONS!
        pageSetUp();

        // PAGE RELATED SCRIPTS

        /*
         * Fixed table height
         */

        tableHeightSize();

        $(window).resize(function () {
            tableHeightSize()
        });

        function tableHeightSize() {
            var tableHeight = $(window).height() - 212;
            $('.table-wrap').css('height', tableHeight + 'px');
        }

        /*
         * LOAD INBOX MESSAGES
         */
        loadInbox();
        function loadInbox() {
            loadURL("email-list", $('#inbox-content > .table-wrap'));
        }

       /*
        * LOAD SENT MESSAGES
        */
        function loadSentBox(){
            loadURL("email-list-sent", $('#inbox-content > .table-wrap'));
        }

        /*
         * Buttons (compose mail and inbox load)
         */
        $(".inbox-load").click(function () {
            $("#sentbox-load").closest('li').removeClass('active');
            $(this).closest('li').addClass('active');
            loadInbox();
        });

        $("#sentbox-load").click(function () {
            $('.inbox-load').closest('li').removeClass('active');
            $(this).closest('li').addClass('active');
            loadSentBox();
        });

        // compose email
        $("#compose-mail").click(function () {
            loadURL("email-compose", $('#inbox-content > .table-wrap'));
        })

    });


</script>

<?php $this->load->view('partial/google_analytics');?>

</body>

</html>