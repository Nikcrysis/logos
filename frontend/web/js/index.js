/**
 * Created by petr on 15.09.15.
 */



$('#logotypes-btns button').click(function() {

    //console.log($(this).val());
    $.ajax({
            type: 'GET',
            url: '/site/get-logos',
            data: 'cat=' + $(this).val(),
            success: function(data) {
                $('#logotypes-cont').html(data);
    }
    });




});
