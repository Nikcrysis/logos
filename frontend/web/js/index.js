/**
 * Created by petr on 15.09.15.
 */



$('.sample_cont  button').click(function() {

    var cat = $(this).val();
    var selected = $(".hover");


    if (selected.length == 0) {
        if ($(this).attr('id') == 'custom-btn') {
            if ($('#custom-cat').val() != null) {
                cat = $('#custom-cat').val();
            } else {
                cat = 'all';
            }
        }
    } else{
        $('#custom-cat').val(selected.attr('value'));
        cat = $('#custom-cat').val();

    }

    $.ajax({
            type: 'GET',
            url: '/site/index',
            data: 'cat=' + cat,
            success: function(data) {
                var success =  $(data).find("#logotypes-cont").prop('outerHTML');
                $('#logotypes-cont').parent().html(success);
                $('#custom-cat-select').css('display', 'none');
                $("#custom-cat-select li").removeClass("invisible");
                $("#custom-cat-select li").addClass("visible");
                $("#custom-cat-select li").removeClass("hover");
    }
    });
});

$("#custom-cat").on('click', function(event){
        $('#custom-cat-select').css('display', 'block');
});

$("#custom-cat").on('input', function(){
    $("#custom-cat-select li").removeClass("hover");
    if ($('#custom-cat').val() != null) {
        var value = $('#custom-cat').val();
        $("#custom-cat-select .option").each(function(){
            if ($(this).attr('value').toLowerCase().slice(0, value.length) != value.toLowerCase()){
                $(this).removeClass('visible');
                $(this).addClass('invisible');
            } else{
                $(this).addClass('visible');
                $(this).removeClass('invisible');
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


$("#custom-cat").keydown(function(event){
    var current_element;
    if (event.keyCode == 38) { // up
        var selected = $(".hover");
        if (selected.length == 0){
            $("#custom-cat-select .option.visible:first").addClass("hover");
        } else{
            $("#custom-cat-select li").removeClass("hover");
            if (selected.prev(".option.visible").length == 0) {
                current_element = selected.siblings().last(".option.visible");
                current_element.addClass("hover");
            } else {
                current_element = selected.prev(".option.visible");
                current_element.addClass("hover");
            }
        }
    }
    if (event.keyCode == 40) { // down
        var selected = $(".hover");
        if (selected.length == 0){
            $("#custom-cat-select .option.visible:first").addClass("hover");
        } else {
            $("#custom-cat-select li").removeClass("hover");
            if (selected.next(".option.visible").length == 0) {
                current_element = selected.siblings(".option.visible").first()
                current_element.addClass("hover");
            } else {
                current_element = selected.next(".option.visible");
                current_element.addClass("hover");
            }
        }
    }
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

