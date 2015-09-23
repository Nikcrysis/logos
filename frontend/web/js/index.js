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

$("#custom-cat").on('focus', function(event){
        $('#custom-cat-select').css('display', 'block');
});

$("#custom-cat").on('input', function(){
    if ($('#custom-cat').val() != null) {
        var value = $('#custom-cat').val();
        $("#custom-cat-select .option").each(function(){
            if ($(this).attr('value').slice(0, value.length) != value){
                $(this).css('display', 'none');
            } else{
                $(this).css('display', 'block');
            };
        });
    }
});



$("#custom-cat-select .option").on('click', function(event){
     $('#custom-cat').val($(this).attr('value'));
     $('#custom-cat-select').css('display', 'none');
     $("#custom-btn").click();
});

$('html').on('click',function() {
    $('#custom-cat-select').css('display', 'none');
});


$('#select-wrap').on('click', function(event) {
    event.stopPropagation();
});




$("#custom-cat").keypress(function(event){
    if(event.keyCode == 13){
        event.preventDefault();
        $("#custom-btn").click();
    }
});


/*

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
*/

