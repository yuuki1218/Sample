
var search = '.search'; // 絞り込む項目を選択するエリア
var statusButton = '.status-button';   // 絞り込み対象のアイテム
$(function () {
    $(statusButton).on('click', function () {
        now = $(this).val();
        if (now == "作業中") {
            $(this).val("完了");
            $(this).parents('tr[data-status]').attr('data-status', "完了");
        } else {
            $(this).val("作業中");
            $(this).parent().parent().attr('data-status', "作業中");
        }
    });

    $('input[name="status"]:radio').change(function () {

        if ($('[id="作業中"]').prop('checked')) {
            $('tr[data-status="作業中"]').show();
            $('tr[data-status="完了"]').hide();
        } else if ($('[id="完了"]').prop('checked')) {
            $('tr[data-status="完了"]').show();
            $('tr[data-status="作業中"]').hide();
        } else if ($('[id="all"]').prop('checked')) {
            $('tr[data-status]').show();
        }
    });
});

