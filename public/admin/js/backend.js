$(function(){
"use strict";
	//Toggle Info
	$('.toggle-last').on('click',function(){
		$(this).toggleClass('selected').parent('.panel-heading').siblings('.panel-body').slideToggle(200);
		$(this).hasClass('selected') ? $(this).html('<i class="fa fa-plus"></i>') : $(this).html('<i class="fa fa-minus"></i>');
	});
	//Trigger The SelectBoxIT
	$("select").selectBoxIt({
		
    // Uses the jQueryUI 'shake' effect when opening the drop down
		showEffect: "fadeIn",	
    // Sets the animation speed to 'slow'
		showEffectSpeed: '400',
    // Sets jQueryUI options to shake 1 time when opening the drop down
		showEffectOptions: { times: 1 },
    // Uses the jQueryUI 'explode' effect when closing the drop down
		hideEffect: "explode",
	//Display Auto Width
		autoWidth:false
	});
	//Make Placeholder hide and shoe
	$('[placeholder]').focus(function(){
		$(this).attr('data-text',$(this).attr('placeholder'));
		$(this).attr('placeholder','');
	}).blur(function(){
		$(this).attr('placeholder',$(this).attr('data-text'))
	});
	$('.confirm').click(function(){
		return confirm('Are You Sure ?');
	});
	$('.catg h3').click(function(){
		$(this).next('.full-view').slideToggle(200);
	});
	$('.option span').click(function(){
		$(this).addClass('active').siblings('span').removeClass('active');
		if($(this).text() == 'Full'){
			$('.full-view').slideDown(200);
		}else{
			$('.full-view').slideUp(200);
		}
	});
	//Show Delete When Hover On Categorey
	$('.child-link').hover(function(){
		$(this).children('a.show-delete').show();
	},function(){
		$(this).children('a.show-delete').hide();
	});
    $('.del').on('click',function(){
        var cnfrm = confirm('Are You Sure About That?');
        if(cnfrm == true){
            return null;
        }else{
            return false;
        }
    });
});