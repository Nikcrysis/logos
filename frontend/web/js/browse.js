/**
 * Created by petr on 23.09.15.
 */


function refresh() {

    var cat = $('#custom-cat').val();

    $.ajax({
        type: 'GET',
        url: '/site/browse',
        data: 'cat=' + cat,
        success: function (data) {
            var success = $(data).find("#logotypes-cont").prop('outerHTML');
            $('#logotypes-cont').parent().html(success);
        }
    });
}



$("#custom-cat").on('focus', function(event){
    $('#custom-cat-select').css('display', 'block');
});

$("#custom-cat").on('input', function(){
    if ($('#custom-cat').val() != null) {
        var value = $('#custom-cat').val();
        $("#custom-cat-select .option").each(function(){
            if ($(this).attr('value').toLowerCase().slice(0, value.length) != value.toLowerCase()){
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
    refresh();
});

$('html').on('click',function() {
    $('#custom-cat-select').css('display', 'none');
});


$('#select-wrap').on('click', function(event) {
    event.stopPropagation();
});




$("#custom-cat").keydown(function(event){
    if(event.keyCode == 40) { // down
        return false; // stops the page from scrolling
    }
    if(event.keyCode == 38) { // up
        $(this).children().prev().find(".option").focus();
        return false; // stops the page from scrolling
    }
    if(event.keyCode == 13){
        refresh();
    }
});