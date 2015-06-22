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
                Profile
            </li>
        </ol>
        <!-- end breadcrumb -->

    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <!-- Bread crumb is created dynamically -->
        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark"><!-- PAGE HEADER --><i class="fa-fw fa fa-user"></i> Profile
                </h1>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <!-- row -->

        <div class="row">

            <div class="col-sm-12">


                <div class="well well-sm">

                    <div class="row">
                        <div class="col-lg-1">&nbsp;</div>
                        <div class="col-sm-12 col-md-12 col-lg-10">
                            <div class="well well-light well-sm no-margin no-padding">

                                <div class="row">

                                    <div class="col-sm-12">
                                        <div id="myCarousel" class="carousel fade profile-carousel">
                                            <div class="air air-bottom-right padding-10">
                                                <a href="javascript:void(0);"
                                                   class="btn txt-color-white bg-color-teal btn-sm"><i
                                                        class="fa fa-check"></i> Follow</a>&nbsp; <a
                                                    href="javascript:void(0);"
                                                    class="btn txt-color-white bg-color-pinkDark btn-sm"><i
                                                        class="fa fa-link"></i> Connect</a>
                                            </div>
                                            <div class="air air-top-left padding-10">
                                                <h4 class="txt-color-white font-md">Jan 1, 2014</h4>
                                            </div>
                                            <ol class="carousel-indicators">
                                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                                                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <!-- Slide 1 -->
                                                <div class="item active">
                                                    <img src="<?php echo base_url('assests/') ?>/img/demo/s1.jpg"
                                                         alt="">
                                                </div>
                                                <!-- Slide 2 -->
                                                <div class="item">
                                                    <img src="<?php echo base_url('assests/') ?>/img/demo/s2.jpg"
                                                         alt="">
                                                </div>
                                                <!-- Slide 3 -->
                                                <div class="item">
                                                    <img src="<?php echo base_url('assests/') ?>/img/demo/m3.jpg"
                                                         alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">

                                        <div class="row">

                                            <div class="col-sm-3 profile-pic">
                                                <img src="<?php echo base_url('assests/') ?>/img/avatars/sunny-big.png">

                                                <div class="padding-10">
                                                    <h4 class="font-md"><strong>1,543</strong>
                                                        <br>
                                                        <small>Followers</small>
                                                    </h4>
                                                    <br>
                                                    <h4 class="font-md"><strong>419</strong>
                                                        <br>
                                                        <small>Connections</small>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <form action="/my_profile" method="post" enctype="text/plain">
                                                    <div class="input-group">
                                                        <h1>
                                                            <label for="first_name" style="font-size: medium">First
                                                                Name</label> <input type="text" class="input"
                                                                                    name="first_name"
                                                                                    value="John"
                                                                                    style="border: none"/><br>
                                                            <label for="last_name" style="font-size: medium">Last
                                                                Name</label> <input type="text" class="input"
                                                                                    name="last_name"
                                                                                    value="Doe"
                                                                                    style="border: none"/><br>
                                                            <small>
                                                                <label for="title"
                                                                       style="font-size: medium">Title</label> <input
                                                                    type="text" class="input" name="title"
                                                                    value="CEO, SmartAdmin" style="border: none"/>
                                                            </small>
                                                        </h1>
                                                    </div>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <p class="text-muted">
                                                                <i class="fa fa-phone"></i>&nbsp;&nbsp;
                                                                <input type="text" name="phone" value="(313) 464 - 6473"
                                                                       class="input" style="border: none">
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p class="text-muted">
                                                                <i class="fa fa-envelope"></i>&nbsp;&nbsp;
                                                                <input type="email" name="email" class="input"
                                                                       style="border: none" value="ceo@smartadmin.com">
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p class="text-muted">
                                                                <i class="fa fa-skype"></i>&nbsp;&nbsp;
                                                                <input type="text" name="skype" value="john.doe"
                                                                       class="input" style="border: none">
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p class="text-muted">
                                                                <i class="fa fa-calendar"></i>&nbsp;&nbsp;<span
                                                                    class="txt-color-darken">Free after
                                                                <input type="time" class="input" style="border: none"
                                                                       name="free_after" value="04:30 PM">
                                                                </span>
                                                            </p>
                                                        </li>
                                                    </ul>
                                                    <br>

                                                    <p class="font-md">
                                                        <i>A little about me...</i>
                                                    </p>

                                                    <p>
                                                        <textarea class="input" style="border: none;" name="bio"
                                                                  cols="50" rows="3">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere</textarea>
                                                    </p>
                                                    <input type="submit" class="btn btn-default" name="submit"
                                                           value="Update"/>
                                                    <br/><br/>
                                                </form>
                                            </div>


                                        </div>

                                    </div>

                                </div>
                                <!-- end row -->

                            </div>

                        </div>

                    </div>

                </div>


            </div>

        </div>

        <!-- end row -->

    </div>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->

<!--================================================== -->

<?php $this->load->view('partial/common_js'); ?>

<!-- PAGE RELATED PLUGIN(S)
-->

<script type="text/javascript">

    // DO NOT REMOVE : GLOBAL FUNCTIONS!

    $(document).ready(function () {

        pageSetUp();

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