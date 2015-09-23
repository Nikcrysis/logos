/**
 * Created by petr on 23.09.15.
 */

$('#select-cat').on('change', function(){

    var cat=$('#select-cat').val();

    $.ajax({
        type: 'GET',
        url: '/site/browse',
        data: 'cat=' + cat,
        success: function(data) {
            var success =  $(data).find("#logotypes-cont").prop('outerHTML');
            $('#logotypes-cont').parent().html(success );
        }
    });
});