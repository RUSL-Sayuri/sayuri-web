<h2 class="email-open-header">
    Compose New Message
</h2>

<form enctype="multipart/form-data" action="<?php echo base_url('messages/send'); ?>" method="POST"
      class="form-horizontal"
      id="email-compose-form">

    <div class="inbox-info-bar no-padding">
        <div class="row">
            <div class="form-group">
                <label class="control-label col-md-1"><strong>To</strong></label>

                <div class="col-md-11">
                    <select id="to" name="to[]" multiple style="width:100%" class="select2" data-select-search="true">
                        <?php foreach ($users as $user): ?>
                            <option value="<?= $user->id ?>"><?= $user->fname . " " . $user->lname ?></option>
                        <?php endforeach; ?>
                    </select>

                </div>
            </div>
        </div>
    </div>

    <div class="inbox-info-bar no-padding">
        <div class="row">
            <div class="form-group">
                <label class="control-label col-md-1"><strong>Subject</strong></label>

                <div class="col-md-11">
                    <input id="subject" name="subject" class="form-control" placeholder="Email Subject" type="text">
                    <em><a href="javascript:void(0);" class="show-next" rel="tooltip" data-placement="bottom"
                           data-original-title="Attachments"><i class="fa fa-paperclip fa-lg"></i></a></em>
                </div>
            </div>
        </div>
    </div>

    <div class="inbox-info-bar no-padding hidden">
        <div class="row">
            <div class="form-group">
                <label class="control-label col-md-1"><strong>Attachments</strong></label>

                <div class="col-md-11">
                    <input class="form-control fileinput" type="file" multiple="multiple">
                </div>
            </div>
        </div>
    </div>

    <div class="inbox-message no-padding">
        <textarea name="body" id="body" class="hidden" hidden=""></textarea>

        <div id="emailbody"></div>
    </div>

    <div class="inbox-compose-footer">

        <button class="btn btn-danger" type="button">
            Disregard
        </button>

        <button data-loading-text="&lt;i class='fa fa-refresh fa-spin'&gt;&lt;/i&gt; &nbsp; Sending..."
                class="btn btn-primary pull-right" type="button" id="send">
            Send <i class="fa fa-arrow-circle-right fa-lg"></i>
        </button>


    </div>

</form>

<div class="email-infobox">

    <div class="well well-sm well-light">
        <h5>Related Invoice</h5>
        <ul class="list-unstyled">
            <li>
                <i class="fa fa-file fa-fw text-success"></i><a href="javascript:void(0);"> #4831 - Paid</a>
            </li>
            <li>
                <i class="fa fa-file fa-fw text-danger"></i><a href="javascript:void(0);"><strong> #4835 -
                        Unpaid</strong></a>
            </li>
        </ul>


    </div>

    <div class="well well-sm well-light">
        <h5>Upcoming Meetings</h5>

        <p>
            <span class="label label-success"><i class="fa fa-check"></i> <strike>Agenda Review @ 10 AM</strike> </span>
        </p>

        <p>
            <span class="label label-primary"><i class="fa fa-clock-o"></i> Client Meeting @ 2:30 PM</span>
        </p>

        <p>
            <span class="label label-warning"><i class="fa fa-clock-o"></i> Salary Review @ 4:00 PM</span>
        </p>
    </div>

    <ul class="list-inline">
        <li><img src="<?php echo base_url('assests/') ?>/img/avatars/5.png" alt="me" width="30px"></li>
        <li><img src="<?php echo base_url('assests/') ?>/img/avatars/3.png" alt="me" width="30px"></li>
        <li><img src="<?php echo base_url('assests/') ?>/img/avatars/sunny.png" alt="me" width="30px"></li>
        <li><a href="javascript:void(0);">1 more</a></li>
    </ul>

</div>

<script type="text/javascript">

    // DO NOT REMOVE : GLOBAL FUNCTIONS!

    runAllForms();

    // PAGE RELATED SCRIPTS

    $(".table-wrap [rel=tooltip]").tooltip();

    /*
     * SUMMERNOTE EDITOR
     */
    loadScript("<?php echo base_url('assests/') ?>/js/plugin/summernote/summernote.js", iniEmailBody);

    function iniEmailBody() {
        $('#emailbody').summernote({
            height: 250,
            focus: false,
            tabsize: 2
        });
    }

    $("#send").click(function () {

        var $btn = $(this);
        $btn.button('loading');

        // wait for animation to finish and execute send script
        setTimeout(function () {
            //Insert send script here
            $('#body').val($('#emailbody').code());
            $('#email-compose-form').submit();

            // Load inbox once send is complete
            //loadInbox();

        }, 1000); // how long do you want the delay to be?
    });

    $(function () {
        var $email_compose_form = $('#email-compose-form').validate({
            // Rules for form validation
            rules: {
                to: {
                    required: true
                },
                subject: {
                    required: true
                }
            },

            // Messages for form validation
            messages: {
                to: {
                    required: 'Please select receiver'
                },
                subject: {
                    required: 'Please enter Subject'
                }
            },

            // Do not change code below
            errorPlacement: function (error, element) {
                error.insertAfter(element.parent());
            }
        });
    });

</script>
