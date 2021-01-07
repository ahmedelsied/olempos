$(function (){
     "use strict";
    var prm = window.location.href.split('/'),
        rel = prm[prm.length-1].slice(0,1);
    if(isNaN(rel) == false){
        $('#paramContact').val(rel);
    }
    function handleAjaxRequest(target,reqMethod,Data,callBack){
        $.ajax({
            url:target,
            type:reqMethod,
            data:Data,
            dataType:'text',
            success:callBack
        });
    }
    $('#sus_submit').on('click',function(){
        var email = $(this).prev().val(),
            id = isNaN(rel) ? null : rel;
        if(email.length > 0){
            handleAjaxRequest('http://olymposweb.com:81/main/subscribers','POST',{email:email,id:id},function(data){
                $('body').append(data);
                $('#sus_email').val('');
                $('.suc-msg').delay(2000).animate({
                opacity:0
            },1000,function(){
                $('.suc-msg').remove();
            });
            }); 
        }
    });
    $('#contactFormPage').on('submit',function(e){
        e.preventDefault();
        var data = $(this).serialize();
        handleAjaxRequest('http://olymposweb.com:81/contact_us/contact','POST',data,function(response){
            $('body').append('<div class="suc-msg alert alert-success">'+response+'</div>');
            $('#contactFormPage input,#contactFormPage textarea').val('');
            $('.suc-msg').delay(2000).animate({
                opacity:0
            },1000,function(){
                $('.suc-msg').remove();
            });
        });
    });
    $('#requestForm').on('submit',function(e){
        e.preventDefault();
        var data = $(this).serialize();
        handleAjaxRequest('http://olymposweb.com:81/our_services/handle_request','POST',data,function(response){
            $('body').append('<div class="suc-msg alert alert-success">'+response+'</div>');
            $('#requestForm input,#requestForm textarea').not('#serviceID').val('');    
            $('#requestForm select').val('');
            $('.suc-msg').delay(2000).animate({
                opacity:0
            },1000,function(){
                $('.suc-msg').remove();
            });
        });
    });
});