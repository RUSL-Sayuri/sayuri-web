<table id="inbox-table" class="table table-striped table-hover">
    <tbody>
    <?php foreach ($sentbox_messages as $message):
        ?>
        <tr id="<?= $message->id ?>" class="">
            <td data-message-id="<?= $message->id ?>" class="inbox-data-from hidden-xs hidden-sm">
                <div><?= $message->fname . " " . $message->lname ?></div>
            </td>
            <td data-message-id="<?= $message->id ?>" class="inbox-data-message">
                <div>
                    <span><?= $message->subject ?></span> <?= substr($message->body, 0, 15) ?>
                </div>
            </td>
            <td data-message-id="<?= $message->id ?>" class="inbox-data-date hidden-xs">
                <div><?= $message->date  ?></div>
            </td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>

<script>

    //Gets tooltips activated
    $("#inbox-table [rel=tooltip]").tooltip();

    $("#inbox-table input[type='checkbox']").change(function () {
        $(this).closest('tr').toggleClass("highlight", this.checked);
    });

    $("#inbox-table .inbox-data-message").click(function () {
        $this = $(this);
        getMail($this);
    })
    $("#inbox-table .inbox-data-from").click(function () {
        $this = $(this);
        getMail($this);
    })
    function getMail($this) {
        var message_id = $this.closest("tr").attr("id");

        loadURL("email-opened-sent/" + message_id, $('#inbox-content > .table-wrap'));
    }


    $('.inbox-table-icon input:checkbox').click(function () {
        enableDeleteButton();
    })

    $(".deletebutton").click(function () {
        $('#inbox-table td input:checkbox:checked').parents("tr").rowslide();
        //$(".inbox-checkbox-triggered").removeClass('visible');
        //$("#compose-mail").show();
    });

    function enableDeleteButton() {
        var isChecked = $('.inbox-table-icon input:checkbox').is(':checked');

        if (isChecked) {
            $(".inbox-checkbox-triggered").addClass('visible');
            //$("#compose-mail").hide();
        } else {
            $(".inbox-checkbox-triggered").removeClass('visible');
            //$("#compose-mail").show();
        }
    }

</script>
