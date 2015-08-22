<?php $this->load->view('partial/header');
if (!isset($login_fail)) {
    $login_fail = 'false';
}
?>



</head>
<body id="login" class="animated fadeInDown">
<!-- possible classes: minified, no-right-panel, fixed-ribbon, fixed-header, fixed-width-->
<header id="header">
    <!--<span id="logo"></span>-->

    <div id="logo-group">
        <!--        <span id="logo"> <img src="-->
        <?php //echo base_url('assests/') ?><!--/img/logo.png" alt="SmartAdmin"> </span>-->
        <!-- END AJAX-DROPDOWN -->
    </div>

</header>

<div id="main" role="main">

    <!-- MAIN CONTENT -->
    <div id="content" class="container">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 hidden-xs hidden-sm">
                <h1 class="txt-color-blue login-header-big">Sayuri!</h1>

                <div class="hero">

                    <div class="pull-left login-desc-box-l">
                        <h4 class="paragraph-header">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid
                            consequuntur doloribus ducimus earum in inventore labore, non quo quod sint ullam, vitae
                            voluptatibus! Ad eius explicabo, fugit obcaecati repudiandae rerum?</h4>
                    </div>

                    <img src="<?php echo base_url('assests/') ?>/img/Logo-Sayuri.png" class="pull-right display-image"
                         alt="" style="width:210px">

                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <h5 class="about-heading">About SmartAdmin - Are you up to date?</h5>

                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <h5 class="about-heading">Not just your average template!</h5>

                        <p>
                            Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta
                            nobis est eligendi voluptatem accusantium!
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                <div class="well no-padding">
                    <form action="<?= base_url('users/login') ?>" id="login-form" method="post"
                          class="smart-form client-form">
                        <header>
                            Sign In
                        </header>

                        <fieldset>

                            <section>
                                <label class="label">Username</label>
                                <label class="input"> <i class="icon-append fa fa-user"></i>
                                    <input type="text" name="username">
                                    <b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i>
                                        Please enter username</b></label>
                            </section>

                            <section>
                                <label class="label">Password</label>
                                <label class="input"> <i class="icon-append fa fa-lock"></i>
                                    <input type="password" name="password">
                                    <b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> Enter
                                        your password</b> </label>

                                <div class="note">
                                    <a href="forgotpassword.html">Forgot password?</a>
                                </div>
                            </section>

                            <section>
                                <label class="checkbox">
                                    <input type="checkbox" name="remember" checked="">
                                    <i></i>Stay signed in</label>
                            </section>
                        </fieldset>
                        <footer>
                            <button type="submit" class="btn btn-primary">
                                Sign in
                            </button>
                        </footer>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>

<!--================================================== -->
<?php
$this->load->view('partial/common_js');
?>

<script type="text/javascript">
    runAllForms();

    $(function () {
        // Validation
        $("#login-form").validate({
            // Rules for form validation
            rules: {
                username: {
                    required: true,
                    minlength: 5,
                    maxlength: 20
                },
                password: {
                    required: true,
                    minlength: 3,
                    maxlength: 20
                }
            },

            // Messages for form validation
            messages: {
                email: {
                    required: 'Please enter your password'
                },
                password: {
                    required: 'Please enter your password'
                }
            },

            // Do not change code below
            errorPlacement: function (error, element) {
                error.insertAfter(element.parent());
            }
        });

    });

    $(document).ready(function () {
        var login_fail = <?= $login_fail ?>;
        if (login_fail) {
            $.smallBox({
                title: "Login Failed",
                content: "The username, password combination you entered is not valid in the system please check the username and password and reenter. Follow the forgot password if you need to recover the account.",
                color: COLOUR_DANGER,
                timeout: 8000,
                icon: "fa fa-key"
            });
        }
    });


</script>

</body>
</html>