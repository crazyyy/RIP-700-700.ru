$(window).scroll(function(){
			   
			if ($(window).scrollTop()>30) 
		   	   {
				   $('.header').addClass('fixed');
				   $('.pseudohead').addClass('fixed');
			   } else {
				   $('.header').removeClass('fixed');
				   $('.pseudohead').removeClass('fixed');
			   }

});

$(document).ready(function(e) {	

	

	$('#popup_login_button').live('click', function(e){
			$('.login_result').html('Подождите');
			$.ajax({
				type: 'POST',
				dataType: 'html',
				url: ajaxurl,
				data: { 
					action: 'ajaxlogin',
					username: $('#user_login').val(), 
					password: $('#user_pass').val(), 
					security: $('#security').val() 
					},
				success: function(data){
					if (data=='true')
					{
						 document.location.href = '/profile'
					}
					else
					{
						$('.login_result').html(data);
					}
				}
			});
			e.preventDefault();
		});
	

	$('.open_register').live('click', function(){
		$('.overlay').fadeIn(100);
		$('.registerpopup').fadeIn(100);	
		$('html, body').animate({scrollTop: 0}, 100);
		return false;
	});
	
	
	$('#top_register_step_1').live('click', function(){
		$('.top_reg_result_1').html('');
		$('#top_regphone').removeClass('form_error');
		var regphone=$('#top_regphone').val();
		if (regphone=='')
		{
			$('#top_regphone').addClass('form_error');
			$('.top_reg_result_1').html('Введите номер телефона');
		}
		else
		{
			$('.top_reg_result_1').html('Подождите...');
			$.ajax({
				url: ajaxurl,
				type: 'POST',
				data: {
				action: 'top_register_step_1',
				regphone: regphone,
				},
				dataType: 'html',
				success: function(response) {
					if (response=='good')
					{
						$('.top_reg_step_1').fadeOut(40);
						$('.top_reg_step_2').fadeIn(40);
					}
					else
					{
						$('.top_reg_result_1').html('Этот номер телефона уже зарегистрирован');
						$('#top_regphone').addClass('form_error');
					}
				}
			});
		}
		return false;
	});
	
	
	$('#top_register_step_2').live('click', function(){
		$('.top_reg_result_2').html('');
		$('#top_regpass').removeClass('form_error');

		var regpass=$('#top_regpass').val();
		var regphone=$('#top_regphone').val();
		var errors=0;
		
		if (regpass=='')
		{
			$('#top_regpass').addClass('form_error');
			$('.top_reg_result_2').html('Введите пароль');
			errors=1;
		}
		
		if (regpass.length<6)
		{
			$('#top_regpass').addClass('form_error');
			$('.top_reg_result_2').html('Пароль слишком простой');
			errors=1;
		}
		
		if (errors==0)
		{
			$('.top_reg_result_2').html('Подождите...');
			$.ajax({
				url: ajaxurl,
				type: 'POST',
				data: {
				action: 'top_register_step_2',
				regphone: regphone,
				regpass: regpass
				},
				dataType: 'html',
				success: function(response) {
						$('.top_reg_step_2').fadeOut(40);
						$('.top_reg_step_3').fadeIn(40);
						$('#top_reg_id').val(response);
				}
			});
		}
		return false;
	});
	
	$('#top_register_step_3').live('click', function(){
		$('.top_reg_result_3').html('');
		$('#top_regpass').removeClass('form_error');

		var regid=$('#top_reg_id').val();
		var regcode=$('#top_regcode').val();
		var regpass=$('#top_regpass').val();
		var regphone=$('#top_regphone').val();
		
		if (regcode=='')
		{
			$('#top_regcode').addClass('form_error');
			$('.top_reg_result_3').html('Введите код');
		}
		else
		{
			$('.top_reg_result_3').html('Подождите...');
			$.ajax({
				url: ajaxurl,
				type: 'POST',
				data: {
				action: 'top_register_step_3',
				regid: regid,
				regcode: regcode,
				regpass: regpass,
				regphone: regphone
				},
				dataType: 'html',
				success: function(response) {
						if (response=='ok')
						{
							$('.top_reg_step_3').fadeOut(40);
							$('.top_reg_step_4').fadeIn(40);
							$('.close').addClass('reload');
							var reloadurl;
							if ($('.cartform').attr('data-noreg')==1) {reloadurl='/';} else {reloadurl='/profile';}
							$('.close').attr('reload_url', reloadurl);
							$('.overlay').addClass('reload');
							$('.overlay').attr('reload_url', reloadurl);
						}
						else
						{
							$('#top_regcode').addClass('form_error');
							$('.top_reg_result_3').html('Неверный код');
						}
				}
			});
		}
		return false;
	});
	
	
	$('#register_step_1').live('click', function(){
		$('.reg_result_1').html('');
		$('#regphone').removeClass('form_error');
		var regphone=$('#regphone').val();
		if (regphone=='')
		{
			$('#regphone').addClass('form_error');
		}
		else
		{
			$.ajax({
				url: ajaxurl,
				type: 'POST',
				data: {
				action: 'register_step_1',
				regphone: regphone,
				},
				dataType: 'html',
				success: function(response) {
					if ($.isNumeric(response))
					{
						$('#reg_id').val(response);
						$('.reg_step_1').fadeOut(40);
						$('.reg_step_2').fadeIn(40);
					}
					else
					{
						$('.reg_result_1').html(response);
					}
				}
			});
		}
		return false;
	});
	
	$('#register_step_2').live('click', function(){
		$('#regcode').removeClass('form_error');
		var regcode=$('#regcode').val();
		var reg_id=$('#reg_id').val();
		if (regcode=='')
		{
			$('#regcode').addClass('form_error');
		}
		else
		{
			$.ajax({
				url: ajaxurl,
				type: 'POST',
				data: {
				action: 'register_step_2',
				regcode: regcode,
				reg_id: reg_id
				},
				dataType: 'html',
				success: function(response) {
					if ($.isNumeric(response))
					{
						$('#new_user_pass').html(response);
						$('#new_user_phone').html($('#regphone').val());
						$('.reg_step_2').fadeOut(40);
						$('.reg_step_3').fadeIn(40);
					}
					else
					{
						$('.reg_result_2').html(response);
					}
				}
			});
		}
		return false;
	});
	
	$('#forget_step_1').live('click', function(){
		$('#forget_loginphone').removeClass('form_error');
		$('.forget_errors').html('Подождите ...');
		var user_phone=$('#forget_loginphone').val();
		if (user_phone!='')
		{
		$.ajax({
				url: ajaxurl,
				type: 'POST',
				data: {
				action: 'forget_step_1',
				user_phone: user_phone
				},
				dataType: 'html',
				success: function(response) {
					if (response!=0)
					{
						$('#forget_true_code').val(response);
						$('.forget_step_1').fadeOut(100);
						$('.forget_step_2').fadeIn(100);
						$('.forget_errors').html('');
					}
					else
					{
						$('#forget_loginphone').addClass('form_error');
						$('.forget_errors').html('Этот номер телефона не зарегистрирован');
					}
				}
			});
		}
		else
		{
			$('#forget_loginphone').addClass('form_error');
			$('.forget_errors').html('Введите номер телефона');
		}
		return false;
	});
	
	$('#forget_step_2').live('click', function(){
		$('#forget_sms').removeClass('form_error');
		$('.forget_errors').html('Подождите ...');
		var user_phone=$('#forget_loginphone').val();
		var true_code=$('#forget_true_code').val();
		var entered_code=$('#forget_sms').val();
		if (entered_code!='' && true_code==entered_code)
		{
		$.ajax({
				url: ajaxurl,
				type: 'POST',
				data: {
				action: 'forget_step_2',
				user_phone: user_phone
				},
				dataType: 'html',
				success: function(response) {
					$('.forget_step_2').fadeOut(100);
					$('.forget_step_3').fadeIn(100);
					$('.forget_errors').html('');
				}
			});
		}
		else
		{
			$('#forget_sms').addClass('form_error');
			if (entered_code=='')
			{
				$('.forget_errors').html('Введите код с SMS');
			}
			
			if (entered_code!=true_code)
			{
				$('.forget_errors').html('Вы ввели неверный код');
			}
		}
		return false;
	});
	
	$('#open_forget').live('click', function(){
		$('.login_box').fadeOut(300);
		$('.forget_box').fadeIn(300);
		return false;
	});
	
	$('#open_loginbox').live('click', function(){
		$('.login_box').fadeIn(300);
		$('.forget_box').fadeOut(300);
		return false;
	});
	
	
	$('.loginpopup_open').live('click', function(){
		$('.overlay').fadeIn(100);
		$('.loginpopup').fadeIn(100);	
		$('html, body').animate({scrollTop: 0}, 100);
		return false;
	});

	$('#calconepopup').on('click', function(){
		$('.overlay').fadeIn(100);
		$('.calconeoff').fadeIn(100);	
		$('html, body').animate({scrollTop: 0}, 100);
		return false; 
	});
	
	$('.nohalf').on('click', function(){
		$('.itempopup').fadeOut(30);
		$('.overlay').fadeIn(100);
		$('.nohalfmessage').fadeIn(100);	
		$('html, body').animate({scrollTop: 0}, 100);
	});

	$('.open_filter').live('click', function(){
		if ($('.pizza_filter').hasClass('open'))
		{
			$('.pizza_filter').removeClass('open');
			$('.open_filter').html('&#9662; открыть фильтр');
		}
		else
		{
			$('.pizza_filter').addClass('open');
			$('.open_filter').html('&#9652; закрыть фильтр');
		}
	});
	
	function change_price_weight(selected_item)
	{
		var selected_variant=selected_item.val();
		var buy_button=$('.buy_button[item_id='+selected_item.attr('item_id')+']');
		var variant_desc=selected_item.parent('.variant_selector').siblings('.weight').children('.variants');
		variant_desc.children('li').removeClass('current');
		variant_desc.children('li.'+selected_variant).addClass('current');
		var selected_id=variant_desc.children('li.current').attr('item_id');
		buy_button.attr('item_id', selected_id);
		selected_item.attr('item_id', selected_id)
		
		buy_button.removeAttr('is_halfpizza');
		buy_button.removeAttr('is_halfpizza_30');
		buy_button.removeAttr('is_pizza');
		
		if (selected_variant=='half40') {buy_button.attr('is_halfpizza', 1); }
		if (selected_variant=='half30') {buy_button.attr('is_halfpizza_30', 1); }
		if (selected_variant=='full30' || selected_variant=='full40') {buy_button.attr('is_pizza', 1); }
	};
	
	$('.pizza30').live('click', function(){
		var this_selector=$(this).parent('.variants_buttons').siblings('.variant_selector').children('select');
		$(this).siblings('.pizza40').removeClass('current');
		$(this).siblings('.halfer').removeClass('current')
		$(this).addClass('current');
		this_selector.val('full30');
		change_price_weight(this_selector);
	});
	
	$('.pizza40').live('click', function(){
		var this_selector=$(this).parent('.variants_buttons').siblings('.variant_selector').children('select');
		$(this).siblings('.pizza30').removeClass('current');
		$(this).addClass('current');
		if ($(this).siblings('.halfer').hasClass('current'))
		{
			this_selector.val('half40');
		}
		else
		{
			this_selector.val('full40');
		}
		change_price_weight(this_selector);
	});
	
	$('.halfer').live('click', function(){
		var this_selector=$(this).parent('.variants_buttons').siblings('.variant_selector').children('select');
		if ($(this).hasClass('current'))
		{
			$(this).removeClass('current');
			if ($(this).siblings('.pizza30').hasClass('current'))
			{
				this_selector.val('full30');
			}
			
			if ($(this).siblings('.pizza40').hasClass('current'))
			{
				this_selector.val('full40');
			}
		}
		else
		{
			$(this).addClass('current');
			$(this).siblings('.pizza30').removeClass('current');
			$(this).siblings('.pizza40').addClass('current');
			this_selector.val('half40');
		}
		change_price_weight(this_selector);
	});
			
	$('.pizza_filter ul li').live('click', function(){
		if ($(this).hasClass('active'))
		{
			$(this).removeClass('active');			
		}
		else
		{
			$(this).addClass('active');
		}
		filter_pizza();
		return false;
		});
		
	function filter_pizza()
	{
		$('.pizza_one').fadeOut(50);
		var active_types= new Array();
		$('.pizza_filter ul li').each(function(index, element) {
            if ($(this).hasClass('active'))
			{
				active_types.push($(this).attr('data-type'));
			}
        });
		
		var counter=0;
		$.each(active_types, function(index, element) {
			counter=counter+1;
            $('.pizza_one.'+element).fadeIn(50);
        });
		if (counter==0)
		{
			$('.pizza_one').fadeIn(50);
		}
	}
			
	$('.item_popup_link').live('click', function(){
		var single_link=$(this).attr('href');
		$.ajax({
				url: single_link,
				type: 'POST',
				dataType: 'html',
				success: function(response) {
					$('.itempopup_wrap').html(response);
						$('.overlay').fadeIn(100);
						$('.itempopup').fadeIn(100);	
						$('html, body').animate({scrollTop: 0}, 100);
				}
			});
		return false;
	});

	
	$(".rslides").responsiveSlides({
		auto: true,
        pager: false,
        nav: true,
        speed: 200,
		timeout: 5000,
        maxwidth: 3600,
		minwidth: 1024
		});
	
	$('.stars_back').each(function(index, element) {
        var rating=$(this).attr('data-current-rating');
		$(this).css('width', rating*24);
    });
	
	
	$(".star").live('mouseenter', function(){
		if ($(this).parent('.rating_stars').hasClass('voted')==false)
		{
			var rating=$(this).attr('data-position');
			$(this).parent('.rating_stars').siblings('.stars_back').css('width', rating*24);
			$(this).parent('.rating_stars').siblings('.stars_back').css('background', '#090');
			$(this).parent('.rating_stars').addClass('green');
		}
	});
	
	$(".star").live('mouseleave', function(){
			var rating=$(this).parent('.rating_stars').siblings('.stars_back').attr('data-current-rating');
			$(this).parent('.rating_stars').siblings('.stars_back').css('width', rating*24);
			$(this).parent('.rating_stars').siblings('.stars_back').css('background', '#F30');
			$(this).parent('.rating_stars').removeClass('green');
	});
	
	$(".star").live('click', function(){
		var id=$(this).parent('.rating_stars').attr('data-id');
		var rating=parseFloat($(this).attr('data-position'));
		var current_rating=parseFloat($(this).parent('.rating_stars').siblings('.stars_back').attr('data-current-rating'));
		var total_voters=parseInt($(this).parent('.rating_stars').siblings('.total_voters').children('span').html());
		
		
		if ($.cookie('voted_'+id)!='yes')
		{
			$(this).parent('.rating_stars').addClass('voted');
			$(this).parent('.rating_stars').siblings('.stars_back').css('width', rating*24);
			$(this).parent('.rating_stars').siblings('.stars_back').css('background', '#090');
			$(this).parent('.rating_stars').addClass('alwaysgreen');
			$(this).parent('.rating_stars').siblings('.stars_back').addClass('green');
			$(this).parent('.rating_stars').siblings('.stars_back').attr('data-current-rating', ((current_rating*total_voters)+rating)/(total_voters+1));
			$(this).parent('.rating_stars').siblings('.total_voters').children('span').html(total_voters+1);
			$(this).parent('.rating_stars').siblings('.stars_back').css('width', 24*((current_rating*total_voters)+rating)/(total_voters+1));
			$.cookie('voted_'+id, 'yes', { expires: 14, path: '/' });
			$(this).parent('.rating_stars').siblings('.vote_result').html('<span style="color:#52a306;">Спасибо!</span>');
			$('.vr_'+id).animate({opacity:1}, 400, function(){  $('.vr_'+id).animate({opacity:0}, 400, function() {$('.vr_'+id).html('');}); });
			$.ajax({
				url: ajaxurl,
				type: 'POST',
				data: {
				action: 'add_item_vote',
				rating: rating,
				id: id
				},
				dataType: 'html',
				success: function(response) {
				}
			});
		}
		else
		{
			$(this).parent('.rating_stars').siblings('.vote_result').html('<span style="color:#ff6600;">Вы уже голосовали.</span>');
			$('.vr_'+id).animate({opacity:1}, 400, function(){  $('.vr_'+id).animate({opacity:0}, 400, function() {$('.vr_'+id).html('');}); });
		}
	});
	
	$(".phone_mask").mask("8-999-999-99-99");
	$("#order_phone").mask("8-999-999-99-99");
	$("#order_home_phone").mask("99-99-99");
	$("#subscribe_phone").mask("8-999-999-99-99");	
	$("#anketa_phone").mask("8-999-999-99-99");
	$("input[name=phone_cell]").mask("8-999-999-99-99");
	$("#feedback_phone").mask("8-999-999-99-99");
	$("#regphone").mask("8-999-999-99-99");
	$("#top_regphone").mask("8-999-999-99-99");
	
	$('#adress_selector').live('change', function(){
		$('#order_street').val($("option:selected", this).attr('data-street'));
		$('#order_house').val($("option:selected", this).attr('data-home'));
		$('#order_room').val($("option:selected", this).attr('data-room'));
		$('#order_porch').val($("option:selected", this).attr('data-porch'));
		$('#order_stage').val($("option:selected", this).attr('data-stage'));
	});
	
	$('.constructor_retry').live('click', function(){
		window.location = '/constructor-pizza/?data=' + $(this).attr('data-constructor');
		return false;
	});
	
	$(".fancybox").fancybox();
	
	$(".fancyboxvideo").fancybox({
			openEffect  : 'none',
			closeEffect : 'none',
			helpers : {
				media : {}
			}
        });
	
	upadate_total();
});

$('.opencartpopup').live('click', function(){
	var site_close=$('.close_site').attr('value');
	if (site_close==0)
	{
			$('.overlay').fadeIn(100);
			$('.cartform').fadeIn(100);	
			$('html, body').animate({scrollTop: 0}, 100);
	}
	else
	{
			$('.overlay').fadeIn(100);
			$('.close_site').fadeIn(100);	
			$('html, body').animate({scrollTop: 0}, 100);
	}
	return false;
});

$('#wantwork').live('click', function(){
			$('.overlay').fadeIn(100);
			$('.iwantwork').fadeIn(100);	
			$('html, body').animate({scrollTop: 0}, 100);
	return false;
});




$('.open_feedback').live('click', function(){
		$('.overlay').fadeIn(100);
		$('.feedback').fadeIn(100);	
		$('html, body').animate({scrollTop: 0}, 100);
	return false;
});

$('.slide_cart_counter').live('click', function(){
	var site_close=$('.close_site').attr('value');
	if (site_close==0)
	{
			$('.overlay').fadeIn(100);
			$('.cartform').fadeIn(100);	
			$('html, body').animate({scrollTop: 0}, 100);
	}
	else
	{
			$('.overlay').fadeIn(100);
			$('.close_site').fadeIn(100);	
			$('html, body').animate({scrollTop: 0}, 100);
	}
	
});

$('.chekb[value=off]').live('click', function(){
	var item_id=$(this).attr('item_id');
	$.cookie('cheese_'+item_id, 'yes', { expires: 100, path: '/' });
	$(this).attr('value', 'on');
	upadate_total();
});

$('.chekb[value=on]').live('click', function(){
	var item_id=$(this).attr('item_id');
	$(this).attr('value', 'off');
	$.cookie('cheese_'+item_id, 'no', { expires: 100, path: '/' });
	upadate_total();
});

$('.chekb_h[value=off]').live('click', function(){
	$(this).attr('value', 'on');
	upadate_total();
});

$('.chekb_h[value=on]').live('click', function(){
	$(this).attr('value', 'off');
	upadate_total();
});

$('.add_heart[value=off]').live('click', function(){
	var item_id=$(this).attr('item_id');
	$.cookie('heart_'+item_id, 'yes', { expires: 100, path: '/' });
});

$('.add_heart[value=on]').live('click', function(){
	var item_id=$(this).attr('item_id');
	$.cookie('heart_'+item_id, 'no', { expires: 100, path: '/' });
});

$('.add_heart_c[value=off]').live('click', function(){
	var item_id=$(this).attr('item_id');
	$.cookie('heart_c_'+item_id, 'yes', { expires: 100, path: '/' });
});

$('.add_heart_c[value=on]').live('click', function(){
	var item_id=$(this).attr('item_id');
	$.cookie('heart_c_'+item_id, 'no', { expires: 100, path: '/' });
});

$('.overlay').live('click', function(){
	if ($(this).hasClass('reload'))
	{
		if ($(this).attr('reload_url')!='')
		{
			window.location.href = $(this).attr('reload_url');
		}
		else
		{
			window.location.href = "/";
		}
	}
	else
	{
		$('.overlay').fadeOut(100);	
		$('.popup').fadeOut(100);
	}
});

$('.close').live('click', function(){
	if ($(this).hasClass('reload'))
	{
		if ($(this).attr('reload_url')!='')
		{
			window.location.href = $(this).attr('reload_url');
		}
		else
		{
			window.location.href = "/";
		}
	}
	else
	{
		$('.overlay').fadeOut(100);	
		$('.popup').fadeOut(100);
	}
});

$('.order_more').live('click', function(){
	$('.overlay').fadeOut(100);	
	$('.popup').fadeOut(100);
	return false;
});

$('.up').live('click', function(){
	$(this).parent('.number').children('.down').css('opacity', '1');
	$(this).parent('.number').children('.up').css('opacity', '1');
	var currnet_counter=$(this).parent('.number').children('span');
	var value=parseInt(currnet_counter.html());
	if(value<9999){
	currnet_counter.html(value+1);
		if(value==9998){$(this).parent('.number').children('.up').css('opacity', '0.3');}
	}
	else
	{
		$(this).parent('.number').children('.up').css('opacity', '0.3');
	}
	
	if ($(this).hasClass('set_drinks'))
	{
		var total_drinks=parseInt($('#drink_count').html());
		var selected_drinks_count=0;
		$('.selected_drinks').each(function(index, element) {
			selected_drinks_count=selected_drinks_count+parseInt($(this).html());
		});
		if (selected_drinks_count-1>=total_drinks)
		{
			$(this).parent('.number').children('span').html(value);
			
		}
		if (selected_drinks_count>=total_drinks)
		{
			$('.up.set_drinks').css('opacity', '0.3');
		}
		
		if (currnet_counter.html()!=0)
		{
			$(this).parent('.number').parent('.p_drink_title').parent('.p_drink_one').addClass('active');
		}
		else
		{
			$(this).parent('.number').parent('.p_drink_title').parent('.p_drink_one').removeClass('active');
		}
	}
		
	upadate_item_count(currnet_counter.attr('item_id'), currnet_counter.html());
	upadate_counter($.cookie('cart'));	
	upadate_total();
	calc_drinks();
	pizzas_discount_variants();
});

$('.down').live('click', function(){
	$(this).parent('.number').children('.down').css('opacity', '1');
	$(this).parent('.number').children('.up').css('opacity', '1');
	var currnet_counter=$(this).parent('.number').children('span');
	var value=parseInt(currnet_counter.html());
	
	if(value>1)
	{
			currnet_counter.html(value-1);
			if(value==2){$(this).parent('.number').children('.down').css('opacity', '0.3');}
	}
	else
	{
		if ($(this).hasClass('set_drinks'))
		{
			if(value==1){ currnet_counter.html(0); $(this).parent('.number').children('.down').css('opacity', '0.3');}
		}
		$(this).parent('.number').children('.down').css('opacity', '0.3');
	}
	
	
	$('.up.set_drinks').css('opacity', '1');
	if ($(this).hasClass('set_drinks'))
	{
		var total_drinks=parseInt($('#drink_count').html());
		var selected_drinks_count=0;
		$('.selected_drinks').each(function(index, element) {
			selected_drinks_count=selected_drinks_count+parseInt($(this).html());
		});
		if (selected_drinks_count-1>=total_drinks)
		{
			$(this).parent('.number').children('span').html(value);
		}
		
		if (currnet_counter.html()!=0)
		{
			$(this).parent('.number').parent('.p_drink_title').parent('.p_drink_one').addClass('active');
		}
		else
		{
			$(this).parent('.number').parent('.p_drink_title').parent('.p_drink_one').removeClass('active');
		}
	}
	
	upadate_item_count(currnet_counter.attr('item_id'), currnet_counter.html());
	upadate_counter($.cookie('cart'));
	upadate_total();	
	calc_drinks();
	pizzas_discount_variants();
});



$(window).scroll(function(){

	       if ($(window).scrollTop()<300) 
		   	   {
				   $('.slideheader').stop();
				   $('.slideheader').animate({top:-200}, 200);
			   } else {
				   $('.slideheader').stop();
				   $('.slideheader').css('display', 'block');
				   $('.slideheader').animate({top:0}, 200); 
			   }
			   

});



$('.add_to_cart').live('click', function() {
	$('.hide_after_order').css('display', 'block');
	$('.big_cart_wrapper').html('');
	$('.itempopup').fadeOut(100);
	$('.overlay').fadeOut(100);
	var site_close=$('.close_site').attr('value');
	if (site_close==0)
	{
	var item_id=$(this).attr('item_id');
	var is_pizza=$(this).attr('is_pizza');
	var is_halfpizza=$(this).attr('is_halfpizza');
	var is_halfpizza_30=$(this).attr('is_halfpizza_30');
	$.cookie('cheese_'+item_id, '', { expires: -7, path: '/' });
	
	if ($.cookie('cart'))
	{
	var current_cart=$.cookie('cart');
	}
	else
	{
		current_cart='';
	}
	
	var new_cart_item=item_id;
	new_cart=current_cart+'/'+new_cart_item;
	$.cookie('count_'+item_id, 1, { expires: 100, path: '/' });	
	$.cookie('cart', new_cart, { expires: 100, path: '/' });
	update_cart(new_cart);

					if (is_pizza==1)
					{
							$('.sous').attr('pizza_id', item_id);
							$('.chekb_h').attr('pizza_id', item_id);
							$('.chekb_h').attr('value', 'off');
							$('.sous_img').removeClass('selected_sous');
							$('.overlay').fadeIn(100);
							$('.sous').fadeIn(100);
					}
					
					if (is_halfpizza==1)
					{
									var chek_half=$('#half_indicator').attr('is_full');
									if (chek_half==0)
									{
										$('#half_variant').html('пиццы 40см');
											$('.overlay').fadeIn(100);
											$('.halferror').fadeIn(100);	
											$('html, body').animate({scrollTop: 0}, 100);
											
									}
									else
									{
											$('.sous').attr('pizza_id', item_id);
											$('.chekb_h').attr('pizza_id', item_id);
											$('.chekb_h').attr('value', 'off');
											$('.sous_img').removeClass('selected_sous');
											$('.overlay').fadeIn(100);
											$('.sous').fadeIn(100);
									}
					}
					
					if (is_halfpizza_30==1)
					{
									var chek_half_30=$('#half_indicator_30').attr('is_full');
									if (chek_half_30==0)
									{
										$('#half_variant').html('пиццы 30см');
											$('.overlay').fadeIn(100);
											$('.halferror').fadeIn(100);	
											$('html, body').animate({scrollTop: 0}, 100);											
									}
									else
									{
											$('.sous').attr('pizza_id', item_id);
											$('.chekb_h').attr('pizza_id', item_id);
											$('.chekb_h').attr('value', 'off');
											$('.sous_img').removeClass('selected_sous');
											$('.overlay').fadeIn(100);
											$('.sous').fadeIn(100);
									}
					}
					
					
					if (is_pizza!=1 & is_halfpizza!=1 & is_halfpizza_30!=1)
					{
					$(this).addClass('incart');
					$(this).html('Уже в корзине');
					$(this).removeClass('add_to_cart');
					}
	}
	else
	{
			$('.overlay').fadeIn(100);
			$('.close_site').fadeIn(100);	
			$('html, body').animate({scrollTop: 0}, 100);
	}
});

$('.sous_img').live('click', function() {
	$('.sous_img').removeClass('selected_sous');
	$(this).addClass('selected_sous');
	return false;
});

$('.add_souses').live('click', function(){
	var pizza_id=$('.sous').attr('pizza_id');
	var is_construct=$('.sous').attr('is_construct');
	var sous_id=$('.selected_sous').attr('sous_id');
	$.removeCookie('sous_'+pizza_id, { expires: -7, path: '/' });
	$.removeCookie('sous_c_'+pizza_id, { expires: -7, path: '/' });
	$.removeCookie('heart_'+pizza_id, { expires: -7, path: '/' });
	$.removeCookie('heart_c_'+pizza_id, { expires: -7, path: '/' });
	if (is_construct!=1)
	{
		$.cookie('sous_'+pizza_id, sous_id, { expires: 100, path: '/' });
		if ($('.chekb_h', '.sous').attr('value')=='on')
		{
			$.cookie('heart_'+pizza_id, 'yes', { expires: 100, path: '/' });
		}
	}
	else
	{
		$.cookie('sous_c_'+pizza_id, sous_id, { expires: 100, path: '/' });
		if ($('.chekb_h', '.sous').attr('value')=='on')
		{
			$.cookie('heart_c_'+pizza_id, 'yes', { expires: 100, path: '/' });
		}	
	}
	$('.overlay').fadeOut(100);
	$('.popup').fadeOut(100);
	new_cart=$.cookie('cart');
	update_cart(new_cart);
	return false;
});

$('.no-thanks').live('click', function(){
	var pizza_id=$('.sous').attr('pizza_id');
	$.removeCookie('sous_'+pizza_id, { expires: -7, path: '/' });
	$.removeCookie('sous_c_'+pizza_id, { expires: -7, path: '/' });
	$.removeCookie('heart_'+pizza_id, { expires: -7, path: '/' });
	$.removeCookie('heart_c_'+pizza_id, { expires: -7, path: '/' });
	$('.overlay').fadeOut(100);
	$('.popup').fadeOut(100);
	new_cart=$.cookie('cart');
	update_cart(new_cart);
	return false;
});

function update_half_indicator()
{
	var half_count=10;
	$('.order_line').each(function(index, element) {
    	var half_attr=$(this).attr('is_half');
    	if (typeof half_attr !== 'undefined' && half_attr !== false)
		{
			pizza_count=parseInt($(this).children('.order_count').children('.number').children('.item_counter').html());
			half_count=half_count+pizza_count;
		}
    });
	if (half_count % 2)
	{
		$('#half_indicator').attr('is_full', '1');
	}
	else
	{
		$('#half_indicator').attr('is_full', '0');
	}
}

function update_half_indicator_30()
{
	var half_count=10;
	$('.order_line').each(function(index, element) {
    	var half_attr=$(this).attr('is_half_30');
    	if (typeof half_attr !== 'undefined' && half_attr !== false)
		{
			pizza_count=parseInt($(this).children('.order_count').children('.number').children('.item_counter').html());
			half_count=half_count+pizza_count;
		}
    });
	if (half_count % 2)
	{
		$('#half_indicator_30').attr('is_full', '1');
	}
	else
	{
		$('#half_indicator_30').attr('is_full', '0');
	}
}


$('.delthis').live('click', function() {
	var del_id=$(this).attr('del_id');
	var current_cart=$.cookie('cart');
	new_cart=current_cart.replace(new RegExp("/"+del_id,'g'), '');
	$.cookie('cart', new_cart, { expires: 100, path: '/' });
	$(this).parent('.tablecell').parent('.order_line').remove();
	$.cookie('cheese_'+del_id, '', { expires: -7, path: '/' });
	upadate_counter();
	calc_drinks();
	upadate_total();
	$('.buy_button[item_id='+del_id+']').addClass('add_to_cart');
	$('.buy_button[item_id='+del_id+']').removeClass('incart');
	$('.buy_button[item_id='+del_id+']').html('В корзину');
});

$('.del_sous').live('click', function() {
	var del_id=$(this).attr('cid');
	$.removeCookie('sous_'+del_id, { path: '/' });
	$(this).parent('.sous_in_cart').remove();
});

$('.del_c_sous').live('click', function() {
	var del_id=$(this).attr('cid');
	$.removeCookie('sous_c_'+del_id, { path: '/' });
	$(this).parent('.sous_in_cart').remove();
});

$('.del_heart').live('click', function() {
	var del_id=$(this).attr('cid');
	$.removeCookie('heart_'+del_id, {path: '/' });
	$(this).siblings('.heart_text').remove();
	$(this).remove();
	upadate_total();
});

$('.del_c_heart').live('click', function() {
	var del_id=$(this).attr('cid');
	$.removeCookie('heart_c_'+del_id, { path: '/' });
	$(this).siblings('.heart_text').remove();
	$(this).remove();
	upadate_total();
});


function calc_drinks()
{
	var current_drinks_count=parseInt($('#drink_count').html());
	var drink_count=0;
	$('.order_line').each(function(index, element) {
    	var drink_attr=$(this).attr('drink_count');
    	if (typeof drink_attr !== 'undefined' && drink_attr !== false)
		{
			pizza_count=parseInt($(this).children('.order_count').children('.number').children('.item_counter').html());
			drink_count=drink_count+parseFloat($(this).attr('drink_count'))*pizza_count;
		}
    });
	$('#drink_count').html(Math.floor(drink_count));
	if (Math.floor(drink_count)==0)
	{
		$('.present_drinks ').addClass('hide');
	}
	else
	{
		$('.present_drinks ').removeClass('hide');
	}
	
	if (current_drinks_count<Math.floor(drink_count))
	{
		$('.up.set_drinks').css('opacity', '1');
	}
	
	if (current_drinks_count>Math.floor(drink_count))
	{
		$('.selected_drinks').html(0);
	}
}



function update_cart(cart)
{
	$('#send_order').fadeOut('fast');
	constructor_cart=$.cookie('counstruct');
	$.ajax({
				url: ajaxurl,
				type: 'POST',
				data: {
				action: 'update_cart',
				cart: cart,
				constructor_cart: constructor_cart
				},
				dataType: 'html',
				success: function(response) {
					$('.big_cart_wrapper').html(response);
					upadate_counter();
					upadate_total();
					update_half_indicator();
					update_half_indicator_30();
					$('#send_order').fadeIn('fast');
				}
			});
}

function upadate_counter()
{
	var cart_count=0;
	$( ".order_line", ".big_cart_wrapper" ).each(function( index ) {
	  	line_count=parseInt($(this).children(".order_count").children(".number").children('.item_counter').html());
		cart_count=cart_count+line_count;
	});
	$('.cart_counter').html(cart_count);
	$('.cart_counter_2').html(cart_count);
	$('.slide_cart_counter').html(cart_count);
}

function upadate_total()
{
	update_half_indicator();
	update_half_indicator_30();
	var total=0;
	$( ".order_line", ".big_cart_wrapper" ).each(function( index ) {
	  	line_count=parseInt($(this).children(".order_count").children(".number").children('.item_counter').html());
		line_price=parseInt($(this).children(".order_price").attr('price'));
		cheese_price=0;
		heart_price=0;
		has_cheese=$(this).children(".order_price").children(".cheese").children('.chekb').attr('value');
		has_heart=$(this).children(".order_price").children(".hearter").children('.chekb_h').attr('value');
		if (has_cheese=='on')
			{
				cheese_price=parseInt($(this).children(".order_price").children(".cheese").children('.chekb').attr('price'));
			}
		if (has_heart=='on')
		{
			heart_price=parseInt($(this).children(".order_price").children(".hearter").children('.chekb_h').attr('price'));
		}
		total=total+line_count*(line_price+cheese_price+heart_price);
	});
	
	
	var discount_total=0;
	$('.order_line').each(function(index, element) {
    	var discount_attr=$(this).attr('discount');
    	if (typeof discount_attr !== 'undefined' && discount_attr !== false && discount_attr !== '')
		{
			pizza_count=parseInt($(this).children('.order_count').children('.number').children('.item_counter').html());
			discount_total=discount_total+parseInt($(this).attr('discount'))*pizza_count;
		}
    });
  
  var discount_total2=0;
  var pizzas_total_count=0;
  var pizzas30_total_count=0;
  var rolls_total_count=0;
  var masters_total_count=0;
  var sandwich_total_count=0;
  var salat_total_count=0;
  var drinks_total_count=0;
  
  $('.order_line').each(function(index, element) {
	  current_count=parseInt($(this).children('.order_count').children('.number').children('.item_counter').html());
	  if ($(this).attr('cat')=='pizza') {pizzas_total_count=pizzas_total_count+current_count;}
	  if ($(this).attr('cat')=='half-pizza') {pizzas_total_count=pizzas_total_count+current_count/2;}
	  if ($(this).attr('cat')=='pitstsa-30sm') {pizzas30_total_count=pizzas30_total_count+current_count;}	  
	  if ($(this).attr('cat')=='rolls') {rolls_total_count=rolls_total_count+current_count;}
	  if ($(this).attr('cat')=='masters') {masters_total_count=masters_total_count+current_count;}
	  if ($(this).attr('cat')=='sandwich') {sandwich_total_count=sandwich_total_count+current_count;}
	  if ($(this).attr('cat')=='salat') {salat_total_count=salat_total_count+current_count;}
	  if ($(this).attr('cat')=='drinks') {drinks_total_count=drinks_total_count+current_count;}
  });
  
  var pizza_discount=0;
  var pizza30_discount=0;
  $('.order_line').each(function(index, element) {
    var discount2_attr=$(this).attr('discount2');
    
    if (typeof discount2_attr !== 'undefined' && discount2_attr !== false && discount2_attr !== '')
		{    
			current_count=parseInt($(this).children('.order_count').children('.number').children('.item_counter').html());
			
			if ($(this).attr('cat')=='pizza' || $(this).attr('cat')=='half-pizza')
				{
					if (pizzas_total_count>=2)
					{
						pizza_discount=pizza_discount+parseInt(discount2_attr)*current_count;
					}
				}
			
			if ($(this).attr('cat')=='pitstsa-30sm')
				{
					if (pizzas30_total_count>=2)
					{
						pizza30_discount=pizza30_discount+parseInt(discount2_attr)*current_count;
					}
				}
			
			if ($(this).attr('cat')=='rolls' & rolls_total_count>=2)
			{
					discount_total2=discount_total2+parseInt(discount2_attr)*current_count;
			}
			
			if ($(this).attr('cat')=='masters' & masters_total_count>=2)
			{
					discount_total2=discount_total2+parseInt(discount2_attr)*current_count;
			}
			
			if ($(this).attr('cat')=='sandwich' & sandwich_total_count>=2)
			{
					discount_total2=discount_total2+parseInt(discount2_attr)*current_count;
			}
			
			if ($(this).attr('cat')=='salat' & salat_total_count>=2)
			{
					discount_total2=discount_total2+parseInt(discount2_attr)*current_count;
			}
			
			if ($(this).attr('cat')=='drinks' & drinks_total_count>=2)
			{
					discount_total2=discount_total2+parseInt(discount2_attr)*current_count;
			}
	  }
  });
  
  	$('#pizza_discount').html(pizza_discount+pizza30_discount);
	$('.pizza_present_buttons').attr('pizza_total_count', pizzas_total_count);
	
	
  	if (pizzas_total_count>=2)
	{
		$('.pizza_present_buttons').fadeIn(0);
		if ($('.piza_spec.active').attr('spec')=='money')
		{
			discount_total2=discount_total2+pizza_discount+pizza30_discount;
		}
	}
	else
	{
		$('.pizza_present_buttons').fadeOut(0);
		discount_total2=discount_total2+pizza_discount+pizza30_discount;
	}
	
	
	if ($('#delivery_self').is(':checked'))
	{
		total=total-discount_total;
		full_discount=discount_total;
	}
	else
	{
		total=total-discount_total2;
		full_discount=discount_total2;
	}
	
	$('.self_discount').html('Ваша скидка: <span class="red">'+full_discount+' р</span>');
	$('.self_discount').attr('dsk', full_discount);
	
	if (full_discount>0) {$('.self_discount').fadeIn(0);} else {$('.self_discount').fadeOut(0);}
	
	 	
  
  $('.total').html(total);
	$('.totalcartsum').html(total);
	
	if (total==0)
	{
		$('.empty_cart').fadeIn(100);
		$('.allcart').fadeOut(100);
	}
	else
	{
		$('.empty_cart').fadeOut(100);
		$('.allcart').fadeIn(100);
	}
}

function upadate_item_count(item_id, value)
{
	$.cookie('count_'+item_id, value, { expires: 100, path: '/' });	
}

$('.paymethod').live('click', function(){
	$('.paymethod').removeClass('active');
	$(this).addClass('active');
	var paymethod_desc=$('.paymethod_desc', this).html();
	$('#payment_desc').html(paymethod_desc);
});

$('#set_order_cash').live('click', function(){
	$('input[name=paymethod]').removeAttr('checked');
	$('#order_cash').attr('checked', 'checked');
});

$('#set_order_cardpay').live('click', function(){
	$('input[name=paymethod]').removeAttr('checked');
	$('#order_cardpay').attr('checked', 'checked');
});

$('#set_order_online').live('click', function(){
	$('input[name=paymethod]').removeAttr('checked');
	$('#order_online').attr('checked', 'checked');
});

$('.order_delivery').live('click', function(){
	$('.order_delivery').removeClass('active');
	$(this).addClass('active');
});


$('#set_delivery_currier').live('click', function(){
	$('input[name=deliverymethod]').removeAttr('checked');
	$('#delivery_currier').attr('checked', 'checked');
	$('.currier_hide').css('display', 'block');
	$('#order_phone').css('width', 300);
	$('#order_street').val('');
	upadate_total();
});

$('#set_delivery_self').live('click', function(){
	$('input[name=deliverymethod]').removeAttr('checked');
	$('#delivery_self').attr('checked', 'checked');
	$('.currier_hide').css('display', 'none');
	$('#order_phone').css('width', 640);
	$('#order_street').val('Самовывоз');
	upadate_total();
});

function do_nothing() { 
  return false;
}

$('#register_in_order').live('click', function(e){
	$('.fastregister_errors').html('');
	$('#fast_reg_pass1').removeClass('form_error');
	var regpass=$('#fast_reg_pass1').val();
	var regphone=$('#order_phone').val();
	
	var fio=$('#order_fio').val();
	var street=$('#order_street').val();
	var house=$('#order_house').val();
	var room=$('#order_room').val();
	var porch=$('#order_porch').val();
	var stage=$('#order_stage').val();
	var cash_nominal=parseInt($('.order_nominal', '#payment_desc').val());
	var cash_nominal=parseInt($('.order_nominal', '#payment_desc').val());
	
	var errors=0;
	
	if (regpass=='')
	{
		$('.fastregister_errors').html('Введите пароль');
		$('#fast_reg_pass1').addClass('form_error');
		errors=1;
	}
	
	if (regpass.length<6)
	{
		$('.fastregister_errors').html('Слишком короткий пароль');
		$('#fast_reg_pass1').addClass('form_error');
		errors=1;
	}
	
	if (errors==0)
	{
		//$('.allcart').fadeIn(100);
		//$('.fastregister_wrap').fadeOut(100);
		$.ajax({
				url: ajaxurl,
				type: 'POST',
				data: {
				action: 'register_step_1',
				regpass: regpass,
				regphone: regphone,
				fio: fio,
				street: street,
				house: house,
				room: room,
				porch: porch,
				stage: stage,
				cash_nominal: cash_nominal
				},
				dataType: 'html',
				success: function(response) {
					switch (response) {
					   case 'good_login': 
						  //document.location.href = '/profile?opencart=true&cash='+cash_nominal;
						  $('.cartform').attr('data-noreg', 0);
						  $('.cartform').attr('message', 'log_and_send');
						  $('.allcart').fadeIn(100);
						  $('.fastregister_wrap').fadeOut(100);
						  sendorder_func();
						  $('.close').addClass('reload');
						  var reloadurl;
							if ($('.cartform').attr('data-noreg')==1) {reloadurl='/';} else {reloadurl='/profile';}
							$('.close').attr('reload_url', reloadurl);
							$('.overlay').addClass('reload');
							$('.overlay').attr('reload_url', reloadurl);
						  break;
					   case 'bad_password':
						  $('.fastregister_errors').html('Неверный пароль');
						  $('#fast_reg_pass1').addClass('form_error');
						  break;
					   default:
						  $('.fast_reg_step_1').fadeOut(100);
						  $('.fast_reg_step_2').fadeIn(100);
						  $('#fast_reg_conf_code').attr('data-newuserid', response);
					}

				}
			});
		//$('html, body').animate({scrollTop: $('.order_total').offset().top-200}, 100);
	}
	
	return false; 
});

$('#confirmcode_in_order').live('click', function(e){
	$('.fastregister_errors').html('');
	$('#fast_reg_conf_code').removeClass('form_error');
	var regcode=$('#fast_reg_conf_code').val();
	var reg_id=$('#fast_reg_conf_code').attr('data-newuserid');
	var regpass=$('#fast_reg_pass1').val();
	var regphone=$('#order_phone').val();
	var cash_nominal=parseInt($('.order_nominal', '#payment_desc').val());
	$.ajax({
				url: ajaxurl,
				type: 'POST',
				data: {
				action: 'register_step_2',
				regcode: regcode,
				reg_id: reg_id,
				regpass: regpass,
				regphone: regphone
				
				},
				dataType: 'html',
				success: function(response) {
					if (response=='bad_code')
					{
						$('.fastregister_errors').html('Неверный код');
						$('#fast_reg_conf_code').addClass('form_error');
					}
					else
					{
						$('.cartform').attr('data-noreg', 0);
						$('.cartform').attr('message', 'reg_and_send');
						$('.allcart').fadeIn(100);
						$('.fastregister_wrap').fadeOut(100);
						sendorder_func();
						$('.close').addClass('reload');
						  var reloadurl;
							if ($('.cartform').attr('data-noreg')==1) {reloadurl='/';} else {reloadurl='/profile';}
							$('.close').attr('reload_url', reloadurl);
							$('.overlay').addClass('reload');
							$('.overlay').attr('reload_url', reloadurl);
					}
				}
			});
	return false;
});

$('#send_order').live('click', function(e) {
	$(e.target).click(do_nothing);
	setTimeout(function(){
		$(e.target).unbind('click', do_nothing);
	  }, 2000);
	sendorder_func(); 
});

function sendorder_func()
{
	 
	var half_indicator=$('#half_indicator').attr('is_full'); 
	var half_indicator_30=$('#half_indicator_30').attr('is_full'); 
					if (half_indicator==1 || half_indicator_30==1)
					{
						var half_variant='';
						if (half_indicator==1) {$('#half_variant').html('пиццы 40см');}
						if (half_indicator_30==1) {$('#half_variant').html('пиццы 30см');}
							$('.overlay').fadeIn(100);
							$('.halferror').fadeIn(100);	
							$('html, body').animate({scrollTop: 0}, 100);
							return false;
					}
					else
					{
						$('.errors_line').fadeOut(300);
						$('#order_street').removeClass('form_error');
						$('#order_phone').removeClass('form_error');
						$('.order_nominal').removeClass('form_error');
						var errors=0;
						var fio=$('#order_fio').val();
						var street=$('#order_street').val();
						var house=$('#order_house').val();
						var room=$('#order_room').val();
						var porch=$('#order_porch').val();
						var stage=$('#order_stage').val();
						var phone=$('#order_phone').val();
						var home_phone=$('#order_home_phone').val();
						var description=$('#order_description').val();
						var cardpay='no';
						var cash_pay='no';
						var online_pay='no';
						var cash_nominal=0;
						var discount=0;
						var password=$('#fast_reg_pass1').val();
						var total_summ=parseInt($('.total', '.order_total').html());
						if ($('#order_cardpay').is(':checked'))
						{
							cardpay='yes';
						}
						
						if ($('#order_cash').is(':checked'))
						{
							cash_pay='yes';
							cash_nominal=parseInt($('.order_nominal', '#payment_desc').val());
						}
						
						if ($('#order_online').is(':checked'))
						{
							online_pay='yes';
						}
						
						discount=parseInt($('.self_discount').attr('dsk'));
						
						var free_drinks='';
						if ($('.piza_spec[spec=drinks]').hasClass('active'))
						{
							$('.selected_drinks').each(function(index, element) {
								drink_code=$(this).attr('code');
								drink_count=$(this).html();
								if (drink_count!='0')
								{
									free_drinks=free_drinks+drink_code+'~'+drink_count+'/';
								}
							});
						}
						
						var summ_error="";
						var total_min=0;
						if ($('#set_delivery_self').hasClass('active')) {total_min=parseInt($('body').attr('minorderself'));} else {total_min=parseInt($('body').attr('minorder'));}
						if (total_summ<total_min)
						{
							var summ_error="Минимальная сумма заказа "+total_min+" рублей.<br>";
							errors++;
						}
						
						var fields_error="";
						if(street=='')
						{
							fields_error="Заполните обязательные поля.";
							$('#order_street').addClass('form_error');
							errors++;
						}
						
						if(phone=='')
						{
							fields_error="Заполните обязательные поля.";
							$('#order_phone').addClass('form_error');
							errors++;
						}
						
						if (cash_pay=='yes')
						{
							if(cash_nominal % 1 === 0)
							{
							}
							else
							{
								fields_error="Заполните обязательные поля.";
								$('.order_nominal').addClass('form_error');
								errors++;
							}
						}
						
						if( errors!=0)
						{
							$('.errors_line').html(summ_error+fields_error);
							$('.errors_line').fadeIn(300);
						}
						else
						{
							$('html, body').animate({scrollTop: 0}, 100);
							$('.cart_preloader').css('display', 'block');
							$('.full_cart_data').html('');
							constructor_cart=$.cookie('counstruct');
							$.ajax({
									url: '/sendorder',
									type: 'POST',
									data: {
									fio:fio,
									street:street,
									house:house,
									room:room,
									porch:porch,
									stage:stage,
									phone:phone,
									home_phone:home_phone,
									description:description,
									cardpay:cardpay,
									cash_pay:cash_pay,
									online_pay:online_pay,
									cash_nominal:cash_nominal,
									total_summ:total_summ,
									constructor_cart:constructor_cart,
									free_drinks:free_drinks,
									discount:discount,
									password:password
									},
									dataType: 'html',
									success: function(response) {
										$('.full_cart_data').html(response);
										$('.cart_preloader').css('display', 'none');
										deleteCartCookies();
										upadate_counter();
										$('.buy_button').removeClass('incart');
										$('.buy_button').html('В корзину');
										$('.close').addClass('reload');
									  	var reloadurl;
										if ($('.cartform').attr('data-noreg')==1) {reloadurl='/';} else {reloadurl='/profile';}
										$('.close').attr('reload_url', reloadurl);
										$('.overlay').addClass('reload');
										$('.overlay').attr('reload_url', reloadurl);
										
										if ($('.cartform').attr('message')=='reg_and_send')
										{
										$('.allcart').fadeOut(30);
										$('.fast_reg_step_1').fadeOut(30);
										$('.fast_reg_step_2').fadeOut(30);
										$('.fastregister_wrap').fadeIn(30);
										$('.fast_reg_step_3').fadeIn(30);
										}
										
										if ($('.cartform').attr('message')=='log_and_send')
										{
										$('.allcart').fadeOut(30);
										$('.fast_reg_step_1').fadeOut(30);
										$('.fast_reg_step_2').fadeOut(30);
										$('.fastregister_wrap').fadeIn(30);
										$('.fast_reg_step_4').fadeIn(30);
										}
										
									}
								});
						}
					}
}

function deleteCartCookies() {
    var cookies = document.cookie.split(";");

    for (var i = 0; i < cookies.length; i++) {
    	var cookie = cookies[i];
    	var eqPos = cookie.indexOf("=");
    	var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
		
		if (name.indexOf("cart")<0 || name.indexOf("cheese")<0 || name.indexOf("construct")<0 || name.indexOf("count")<0 || name.indexOf("heart")<0  || name.indexOf("sous")<0)
		{
    		$.removeCookie(name.replace(" ", ""), { path: '/' });
		}
    }
}





$('#send_feedback').live('click', function()
{
	$('.errors_line').fadeOut(300);
	$('.form_error').removeClass('form_error');
	var errors=0;
	var f_fio=$('#feedback_fio').val();
	var f_phone=$('#feedback_phone').val();
	var f_mail=$('#feedback_mail').val();
	var f_text=$('#feedback_text').val();

	
	if(f_fio=='')
	{
		$('#feedback_fio').addClass('form_error');
		errors++;
	}
	
	if(f_text=='')
	{
		$('#feedback_text').addClass('form_error');
		errors++;
	}
	
	if(f_phone=='')
	{
		$('#feedback_phone').addClass('form_error');
		errors++;
	}
	
	if( errors!=0)
	{
		$('.errors_line').fadeIn(300);
	}
	else
	{
		$('html, body').animate({scrollTop: 0}, 100);
		$('.full_cart_data').html('');
		$('.cart_preloader').css('display', 'block');
		$.ajax({
				url: ajaxurl,
				type: 'POST',
				data: {
				action: 'send_feedback',
				f_fio:f_fio,
				f_phone:f_phone,
				f_mail:f_mail,
				f_text:f_text
				},
				dataType: 'html',
				success: function(response) {
					
					$('.full_cart_data').html(response);
					$('.cart_preloader').css('display', 'none');
				}
			});
	}
});

$('#anketa_place').live('change', function(){
	$('.workplace_desc').fadeOut(1);
	$('.workplace_desc[data-place="'+$(this).val()+'"]').fadeIn(1);
});

$('#work_step_2').live('click', function(){
	$('.work_step_2').fadeIn(10);
	$('.work_step_1').fadeOut(10);
	return false;
});

$('#send_anketa').live('click', function()
{
	$('.errors_line').fadeOut(300);
	$('.form_error').removeClass('form_error');
	var errors=0;
	var a_fio=$('#anketa_fio').val();
	var a_phone=$('#anketa_phone').val();
	var a_mail=$('#anketa_mail').val();
	var a_place=$('#anketa_place').val();
	var a_text=$('#anketa_text').val();
	
	var a_day=$('#anketa_day').val();
	var a_month=$('#anketa_month').val();
	var a_year=$('#anketa_year').val();
	
	if(a_day=='')
	{
		$('#anketa_day').addClass('form_error');
		errors++;
	}
	if(a_month=='')
	{
		$('#anketa_month').addClass('form_error');
		errors++;
	}
	if(a_year=='')
	{
		$('#anketa_year').addClass('form_error');
		errors++;
	}
	
	if(a_fio=='')
	{
		$('#anketa_fio').addClass('form_error');
		errors++;
	}
	
	if(a_phone=='')
	{
		$('#anketa_phone').addClass('form_error');
		errors++;
	}
	
	if(a_mail=='')
	{
		$('#anketa_mail').addClass('form_error');
		errors++;
	}
	
	if(a_place=='')
	{
		$('#anketa_place').addClass('form_error');
		errors++;
	}
	
	if(a_text=='')
	{
		$('#anketa_text').addClass('form_error');
		errors++;
	}
	
	if( errors!=0)
	{
		$('.errors_line').fadeIn(300);
	}
	else
	{
		$('html, body').animate({scrollTop: 0}, 100);
		$('.full_cart_data').html('');
		$('.cart_preloader').css('display', 'block');
		$.ajax({
				url: ajaxurl,
				type: 'POST',
				data: {
				action: 'send_anketa',
				a_fio:a_fio,
				a_place:a_place,
				a_phone:a_phone,
				a_mail:a_mail,
				a_text:a_text,
				a_date:a_day+' '+a_month+' '+a_year
				},
				dataType: 'html',
				success: function(response) {
					
					$('.full_cart_data').html(response);
					$('.cart_preloader').css('display', 'none');
				}
			});
	}
});


$('#add_phone').live('click', function()
{
	$('.subscribe_message').html('');
	var errors=0;
	var s_phone=$('#subscribe_phone').val();
	
	if(s_phone=='')
	{
		$('#anketa_text').addClass('form_error');
		errors++;
	}
	
	if( errors!=0)
	{
		$('.subscribe_message').html('Введите номер телефона');
	}
	else
	{
	
	$.ajax({
				url: ajaxurl,
				type: 'POST',
				data: {
				action: 'send_phone',
				s_phone:s_phone
				},
				dataType: 'html',
				success: function(response) {	
					$('.subscribe_message').html(response);
				}
			});
	}
	return false; 
});



$('.menu-item-20 > a').live('click', function()
{ return false;
});

$('.menu-item-24 > a').live('click', function()
{ return false;
});

$('.menu-item-950 > a').live('click', function()
{ return false;
});

$('.menu-item-952 > a').live('click', function()
{ return false;
});

$('.menu-item-20').live('mouseover', function()
{
	$('.sub-menu',this).fadeIn(50);
});

$('.menu-item-24').live('mouseover', function()
{
	$('.sub-menu',this).fadeIn(50);
});


$('.menu-item-950').live('mouseover', function()
{
	$('.sub-menu',this).fadeIn(50);
});

$('.menu-item-952').live('mouseover', function()
{
	$('.sub-menu',this).fadeIn(50);
});

$('.sub-menu').live('mouseleave', function()
{
	$(this).fadeOut(50);
});

$('.menu-item-20').live('mouseleave', function()
{
	$('.sub-menu',this).fadeOut(50);
});

$('.menu-item-24').live('mouseleave', function()
{
	$('.sub-menu',this).fadeOut(150);
});

$('.menu-item-950').live('mouseleave', function()
{
	$('.sub-menu',this).fadeOut(50);
});

$('.menu-item-952').live('mouseleave', function()
{
	$('.sub-menu',this).fadeOut(150);
});


$('h3', '.ingr').live('click', function(){
	var current_cat=$(this).attr('cat_id');
	$('.ingr_list').html('<div class="preloader"></div>');
	if ($('.hello_master').css('display')=='block')
	{
		$('.hello_master').animate({opacity:0}, function() {
			$('.hello_master').css('display', 'none');
			$('.ingr_list').css('display', 'block');
			$('.ingr_list').animate({opacity:1}, function() {
				$.ajax({
						url: ajaxurl,
						type: 'POST',
						data: {
						action: 'load_ingr_cat',
						cat:current_cat
						},
						dataType: 'html',
						success: function(response) {	
							$('.ingr_list').html(response);
							$(".ingr_list").mCustomScrollbar();
						}
					});
			});
		});
	}
	else
	{
		$.ajax({
						url: ajaxurl,
						type: 'POST',
						data: {
						action: 'load_ingr_cat',
						cat:current_cat
						},
						dataType: 'html',
						success: function(response) {	
							$('.ingr_list').html(response);
							$(".ingr_list").mCustomScrollbar();
						}
					});
	}
});


$('li', '.ingr_list ul').live('click', function(){
	current_cat=$('ul','.ingr_list').attr('cat');
	var ingr_id=$(this).attr('ingr_id');
	$.ajax({
						url: ajaxurl,
						type: 'POST',
						data: {
						action: 'load_ingr',
						ingr_id:ingr_id
						},
						dataType: 'html',
						success: function(response) {	
							current=$('ul[cat_id="'+current_cat+'"]').html();
							$('ul[cat_id="'+current_cat+'"]').html(current+response);
							var rand_baloon=Math.ceil(Math.random()*3);
							$('.baloon'+rand_baloon).css('display','block');
							$('.baloon'+rand_baloon).animate({opacity:1}, 400);
							count_timer=3;
							counter=setInterval(timer, 1000);	
							show_pizza();
						}
					});
	
});

$('.del_ingr').live('click', function(){
	$(this).parent('li').remove();
	show_pizza();
});


function show_pizza()
{
	var w=0;
	var p=0;
	$('.c_w').html(0);
	$('.c_p').html(0);
	$('.ingr_one').animate({opacity:0},10);
	var this_ingr_id;
	var ingr_count=0;
	$('li','.ingr_cats').each(function(index, element) {
		ingr_count=ingr_count+1;
	});
	$('li','.ingr_cats').each(function(index, element) {
        this_ingr_id=$(this).attr('ingr_id');
		this_ingr_w=$(this).attr('weight');
		this_ingr_p=$(this).attr('price');
		w=w+parseInt(this_ingr_w);
		p=p+parseInt(this_ingr_p);
		$('.c_w').html(w);
		$('.c_p').html(p);
		$('.ingr_one[ingr_id="'+this_ingr_id+'"]').animate({opacity:1},200);
    });
}

var count_timer;
var counter;


function timer()
	{
	  count_timer=count_timer-1;
	  if (count_timer <= 0)
	  {
		 
		$('.baloon1').animate({opacity:0}, 400, function() {$('.baloon1').css('display','none');});
		$('.baloon2').animate({opacity:0}, 400, function() {$('.baloon2').css('display','none');});
		$('.baloon3').animate({opacity:0}, 400, function() {$('.baloon3').css('display','none');});
		 clearInterval(counter);
	  }
	}
	
$('#order_construct').live('click', function(){
	$('#constr_message').css('opacity', 0); $('#constr_message').css('display', 'none');
	$('#nosous_message').css('opacity', 0); $('#nosous_message').css('display', 'none');
	$.cookie('count_720_'+$('#order_construct').attr('construct_id'), 1, { expires: 100, path: '/' });
	var total=$('.c_p').html();
	construct='';
	old_cookie=$.cookie('counstruct');
	if ($('ul[cat_id="sous"]').html()=='')
	{
		$('#nosous_message').css('display', 'block');
		$('#nosous_message').animate({opacity:1},300);
	}
	else
	{
		if (total>=300)
		{
			
			var site_close=$('.close_site').attr('value');
			if (site_close==0)
			{
			
				
			$('li','.ingr_cats').each(function(index, element) {
				this_ingr_id=$(this).attr('ingr_id');
				construct=construct+'/'+this_ingr_id;
			});
			
			$.cookie('counstruct', old_cookie+'~$~'+construct, { expires: 100, path: '/' });
			
			update_cart($.cookie('cart'));
			
			$('li','.ingr_cats').each(function(index, element) {
				if ($(this).attr('ingr_id')!=720)
				{
				$(this).remove();
				}
			});
			
			$('.ingr_one').each(function(index, element) {
				$(this).css('opacity', 0);
			});
			
			$('.hello_master').css('display', 'block');
			$('.hello_master').animate({opacity:1});
			$('.ingr_list').animate({opacity:0});
			
			show_pizza();
			
			$('#order_construct').attr('construct_id', parseInt($('#order_construct').attr('construct_id'))+1);
		
			
			$('.sous').attr('pizza_id', parseInt($('#order_construct').attr('construct_id'))-1);
			$('.sous').attr('is_construct', 1);
			$('.chekb_h').attr('is_construct', 1);
			$('.chekb_h').attr('value', 'off');
				$('.overlay').fadeIn(100);
				$('.sous').fadeIn(100);	
				$('html, body').animate({scrollTop: 0}, 100);
			}
			else
			{
				$('.overlay').fadeIn(100);
				$('.close_site').fadeIn(100);	
				$('html, body').animate({scrollTop: 0}, 100);
			}
		}
		else
		{
			$('#constr_message').css('display', 'block');
			$('#constr_message').animate({opacity:1},300);
		}
	
	} 
	
	
	return false; 
});

$('.del_constructor').live('click', function(){
	var delline=$(this).attr('data-constructline');
	var old_construct=$.cookie('counstruct');
	$.cookie('counstruct', old_construct.replace('~$~'+delline, ''), { expires: 100, path: '/' });
	$(this).parent('.tablecell').parent('.order_line').remove();
	upadate_counter();
	upadate_total();
});

$('#send_contest').live('click', function() {
	$('#contest_form_errors').html('');
	var name=$('#contest_name').val();
	var fam=$('#contest_fam').val();
	var mail=$('#contest_mail').val();
	var errors='';
	if (name=='')
	{
		errors='Введите Ваше имя<br>';
	}
	
	if (fam=='')
	{
		errors=errors+'Введите Вашу фамилию<br>';
	}

	if (!validateEmail(mail))
	{
		errors=errors+'Введите верный E-mail<br>';
	}
	
	if (errors!='')
	{
	$('#contest_form_errors').html(errors);
	}
	else
	{
			$('.overlay').fadeIn(100);
			$('.contest_loader').fadeIn(100);	
			$('html, body').animate({scrollTop: 0}, 100);
		$("form#contest_data").submit();
	}
	return false; 
});

function validateEmail(email) { 
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	} 



$('#contest_image').live('change', function(){
	img_name=$(this).val();
	$('.contest_photo').css('width', 'auto');
	$('.contest_photo span').html(img_name);
});

$('.check_sms_code').live('click', function(){
	var orderid=$(this).attr('data-orderid');
	var smscode=$('#smscode').val();
	$('.sms_result').html('Проверка кода ...');
	$.ajax({
						url: ajaxurl,
						type: 'POST',
						data: {
						action: 'check_sms',
						orderid:orderid,
						smscode:smscode
						},
						dataType: 'html',
						success: function(response) {	
							$('.sms_result').html(response);
							if (response!="<span style='color:#cc0000'>Вы ввели неправильный код. Повторите попытку.</span>")
							{
								$('.sms_hide').remove();
								$('.close').addClass('reload');
								$('.overlay').addClass('reload');
							}
							$('#smscode').val('');
						}
					});
});


$('#call_to_client').live('click', function(){
	var orderid=$(this).attr('data-orderid');
	$('.sms_result').html('Ждите ... ');
	$.ajax({
						url: ajaxurl,
						type: 'POST',
						data: {
						action: 'call_to_client',
						orderid:orderid
						},
						dataType: 'html',
						success: function(response) {	
							$('.sms_result').html(response);
							$('.sms_hide').remove();
							$('.close').addClass('reload');
							$('.overlay').addClass('reload');
						}
					});
	return false;
});

$('#update_captcha').live('click', function(){
	var orderid=$(this).attr('order-id');
	$('.sms_status').html('Ждите ...');
	$.ajax({
						url: ajaxurl,
						type: 'POST',
						data: {
						action: 'update_captcha_1',
						orderid:orderid
						},
						dataType: 'html',
						success: function(response) {
							$('.sms_status').html(response);
						}
					});
	return false;
});

$('.contest_plus').live('click', function(){
	if ($(this).attr('vote_status')==0)
	{
			$('.overlay').fadeIn(100);
			$('.vote').fadeIn(100);	
			$('html, body').animate({scrollTop: 0}, 100);
		$('#vote_url').val($(this).attr('url'));
		$('#vote_id').val($(this).attr('vid'));
		$('#vote_title').val($(this).attr('v_title'));
		$('#vote_desc').val($(this).attr('v_desc'));
		$('#vote_img').val($(this).attr('v_image'));
		$('#vote_count').val(1);
	}
	else
	{
			$('.overlay').fadeIn(100);
			$('.vote_complete').fadeIn(100);	
			$('html, body').animate({scrollTop: 0}, 100);
	}
	return false;
});

$('.contest_minus').live('click', function(){
	if ($(this).attr('vote_status')==0)
	{
			$('.overlay').fadeIn(100);
			$('.vote').fadeIn(100);	
			$('html, body').animate({scrollTop: 0}, 100);
		$('#vote_url').val($(this).attr('url'));
		$('#vote_id').val($(this).attr('vid'));
		$('#vote_title').val($(this).attr('v_title'));
		$('#vote_desc').val($(this).attr('v_desc'));
		$('#vote_img').val($(this).attr('v_image'));
		$('#vote_count').val(-1);
	}
	else
	{
			$('.overlay').fadeIn(100);
			$('.vote_complete').fadeIn(100);	
			$('html, body').animate({scrollTop: 0}, 100);
	}
	return false;
});


$('.retry_order').live('click', function(){
	deleteCartCookies();
	$('.overlay').fadeIn(100);
	$('.cartform').fadeIn(100);
	$('html, body').animate({scrollTop: 0}, 100);
	$('.allcart').fadeOut(100);
	$('.empty_cart').html('<h2>Подождите...</h2>');
	$('.empty_cart').fadeIn(100);
	var orderid=$(this).attr('data-orderid');
	$.ajax({
						url: ajaxurl,
						type: 'POST',
						data: {
						action: 'retry_order',
						orderid: orderid
						},
						dataType: 'html',
						success: function(response) {
							obj = $.parseJSON(response);
							$.cookie('counstruct', obj.constructor_cart_array, { expires: 100, path: '/' });
							$.cookie('cart', obj.cart_array, { expires: 100, path: '/' });
							$.each(obj.sous_c_array, function( index, value ) {
							  $.cookie('sous_c_'+index, value, { expires: 100, path: '/' });
							});
							$.each(obj.heart_c_array, function( index, value ) {
							  $.cookie('heart_c_'+index, value, { expires: 100, path: '/' });
							});
							$.each(obj.sous_array, function( index, value ) {
							  $.cookie('sous_'+index, value, { expires: 100, path: '/' });
							});
							$.each(obj.heart_array, function( index, value ) {
							  $.cookie('heart_'+index, value, { expires: 100, path: '/' });
							});
							$.each(obj.cheese_array, function( index, value ) {
							  $.cookie('cheese_'+index, value, { expires: 100, path: '/' });
							});
							$.each(obj.count_array, function( index, value ) {
							  $.cookie('count_'+index, value, { expires: 100, path: '/' });
							});
							$.each(obj.count_720_array, function( index, value ) {
							  $.cookie('count_720_'+index, value, { expires: 100, path: '/' });
							});
							$('#order_description').val(obj.desc);
							update_cart(obj.cart_array)
							$('.allcart').fadeIn(100);
							$('.empty_cart').fadeOut(0).html('<h2>Ваша корзина пустая</h2>');
						}
					});
	return false; 
});


$('.del_order').live('click', function(){
	var orderid=$(this).attr('data-orderid');
	$(this).parent('td').parent('tr').remove();
	$.ajax({
						url: ajaxurl,
						type: 'POST',
						data: {
						action: 'del_order',
						orderid: orderid
						},
						dataType: 'html',
						success: function() {
						}
					});
	return false; 
});



$('.voter').live('click', function() {
	var url = $('#vote_url').val();
	var id = $('#vote_id').val();
	var service=$(this).attr('id');
	var vote=$('#vote_count').val();
	var current=Array();
	current['name']=$('#vote_title').val();
	current['description']=$('#vote_desc').val();
	current['image']=$('#vote_img').val();
	$('.contest_minus','#votes_'+id).attr('vote_status', 1);
	$('.contest_plus','#votes_'+id).attr('vote_status', 1);
	switch(service) {
		case 'fb':
			url = "http://www.facebook.com/sharer.php?s=100&p[title]="+encodeURIComponent(current['name'])+"&p[summary]="+encodeURIComponent(current['description'])+"&p[url]="+encodeURIComponent(url)+"&p[images][0]="+encodeURIComponent(current['image'])+"&nocache-"+randomString(8);
			break;
		case 'tw':
			url = "http://twitter.com/share?text="+encodeURIComponent(current['name'])+" "+current['description']+"&url="+encodeURIComponent(url)+"&counturl="+encodeURIComponent(url)+"&nocache-"+randomString(8);
			break;
		case 'vk':
			url = "http://vkontakte.ru/share.php?title="+encodeURIComponent(current['name'])+"&description="+encodeURIComponent(current['description'])+"&url="+encodeURIComponent(url)+"&image="+encodeURIComponent(current['image']);
			break;
		case 'ok':
			url = "http://www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1&st.comments="+encodeURIComponent(current['name'])+": "+encodeURIComponent(current['description'])+"&st._surl="+encodeURIComponent(url);
			break;
		case 'mm':
			url = "http://connect.mail.ru/share?url="+encodeURIComponent(url)+"&title="+encodeURIComponent(current['name'])+"&description="+encodeURIComponent(current['description'])+"&imageurl="+encodeURIComponent(current['image']);
			break;
	}
	window.open(url, '', 'toolbar=0,status=0,width=626,height=436');
	addVote(id, vote);
	$('.overlay').fadeOut(100);	
	$('.popup').fadeOut(100);	
	return false;
});

function addVote(id, count) {
	var container = jQuery('#sv_votes_' + id);
	var val = parseInt(container.html());
	if(!val) val = 0;
	val += parseInt(count);
	container.html(val);
	$.cookie('vote_'+id, '1', { expires: 100, path: '/' });	
	$.ajax({
						url: ajaxurl,
						type: 'POST',
						data: {
						action: 'addvote',
						id:id,
						count: count,
						val: val
						},
						dataType: 'html',
						success: function(response) {	
							//alert(response);
						}
					});
}

function randomString(length) {    
	var chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz'.split('');
	if (!length) length = Math.floor(Math.random() * chars.length);
	var str = '';
	for (var i = 0; i < length; i++) {
		str += chars[Math.floor(Math.random() * chars.length)];
	}
	return str;
}



	$('ul.tabs').each(function(i) {
		$(this).find('li').eq(1).addClass('current').siblings().removeClass('current')
			.parents('div.section').find('div.box').hide().eq(cookie).show();
	})

	$('li:not(.current)', 'ul.tabs').live('click', function() {
		$(this).addClass('current').siblings().removeClass('current').parents('section').find('div.box').eq($(this).index()).fadeIn(150).siblings('div.box').hide();
		var ulIndex = $('ul.tabs').index($(this).parents('ul.tabs'));
		$('#your-profile').attr('action', '/profile/?tab='+$(this).attr('data-tabname'));
	});
	
$('.deladress a').live('click', function(){
	$(this).parent('.col').parent('.profile_line').remove();
	return false; 
});

$('.add_adress_line a').live('click', function(){
	var adress_example=$('#adress_line_example').html();
	$(adress_example).insertBefore('.add_adress_line');
	return false; 
});

$('#save_profile').live('click', function(){
	var pass=$('#pass1').val();
	if (pass!='')
	{
		if (pass.length<6)
		{
			$('#pass-strength-result').html('Слишком короткий пароль');
			return false; 
		}
	}
});

$('.piza_spec').live('click', function(){
	$('.piza_spec').removeClass('active');
	var pizzas_total_count=$('.pizza_present_buttons').attr('pizza_total_count');
		$(this).addClass('active');
		if ($(this).attr('spec')=='drinks')
		{
			$('.drinks_container').fadeIn(50);
		}
		
		if ($(this).attr('spec')=='money')
		{
			$('.drinks_container').fadeOut(50);
		}

	upadate_total();
});

function pizzas_discount_variants()
{
	var pizzas_total_count=$('.pizza_present_buttons').attr('pizza_total_count');
	var pizza_discount=$('.pizza_present_buttons').attr('pizza_discount');
	$('.piza_spec').removeClass('active');		
		if (pizza_discount=='drinks')
		{
			$('.piza_spec[spec=drinks]').addClass('active');
			$('.drinks_container').fadeIn(50);
		}
		
		if (pizza_discount=='money')
		{
			$('.piza_spec[spec=drinks]').removeClass('active');
			$('.drinks_container').fadeOut(50);
		}
}




function timeConverter(UNIX_timestamp){
 var a = new Date(UNIX_timestamp*1000);
 var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
     var year = a.getFullYear();
     var month = months[a.getMonth()];
     var date = a.getDate();
     var hour = a.getHours();
     var min = a.getMinutes();
     var sec = a.getSeconds();
     var time = date+','+month+' '+year+' '+hour+':'+min+':'+sec ;
     return time;
 }







