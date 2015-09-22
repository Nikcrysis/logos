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



$(".arrow").on('click', function(){
    var ask = $(".ask");
    if (ask.hasClass('collapsed')){
        ask.addClass('expanded');
        ask.removeClass('collapsed');
        $(".arrow").children('.glyphicon').addClass('glyphicon-triangle-right');
        $(".arrow").children('.glyphicon').removeClass('glyphicon-triangle-left');
    } else{
        ask.addClass('collapsed');
        ask.removeClass('expanded');
        $(".arrow").children('.glyphicon').addClass('glyphicon-triangle-left');
        $(".arrow").children('.glyphicon').removeClass('glyphicon-triangle-right');
    };



});

