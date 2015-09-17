/**
 * Created by petr on 15.09.15.
 */



$('.sample_cont  button').click(function() {
    var cat = $(this).val();

    if ($(this).attr('id') == 'custom-btn'){
        if ($('#custom-cat').val() != null){
            cat = $('#custom-cat').val();
        } else{
            cat = 'all';
        }
    }

    $.ajax({
            type: 'GET',
            url: '/site/index',
            data: 'cat=' + cat,
            success: function(data) {
                var success =  $(data).find("#logotypes-cont").prop('outerHTML');
                $('#logotypes-cont').parent().html(success );
    }
    });




});


$("#custom-cat").keypress(function(event){
    if(event.keyCode == 13){
        event.preventDefault();
        $("#custom-btn").click();
    }
});



