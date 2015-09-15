/**
 * Created by petr on 15.09.15.
 */



$('#logotypes-btns button').click(function() {
    $.ajax({
            type: 'GET',
            url: '/site/index',
            data: 'cat=' + $(this).val(),
            success: function(data) {
                var success =  $(data).find("#logotypes-cont").prop('outerHTML');
                $('#logotypes-cont').parent().html(success );
    }
    });




});
