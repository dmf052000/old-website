jQuery(document).ready(function() {
    /* ======= jQuery form validator ======= */ 
    /* Ref: http://jqueryvalidation.org/documentation/ */   
    jQuery("#contact-form").validate({
		messages: {
			name: {
    			required: 'Please enter your name' //You can customise this message
			},
			email: {
				required: 'Please enter your email' //You can customise this message
			},			
			message: {
				required: 'Please enter your message' //You can customise this message
			}
		}
		
	});
});


jQuery(document).ready(function() {
	
	var handler = StripeCheckout.configure({
		key: 'pk_live_VHdVEIttCDcS9PwxkMpZJYEH',
		locale: 'auto',
		token: function(token) {
			showLoader();
			var jQueryinput = jQuery('<input type=hidden name=stripeToken />').val(token.id);
			jQuery('#contact_form').append(jQueryinput).submit();
		}
	});
	
	/*$( document ).ajaxStart(function() {
		showLoader();
	});
	
	$( document ).ajaxComplete(function() {
		hideLoader();
	});
	*/
	
	jQuery("#contact_form").validate({
		rules: {
			full_name: {
				required: true,
				minlength: 2
			},
			phone: {
				required: true,
				digits: true,
				minlength: 10
			},
			evenphone: {
				required: true,
				digits: true,
				minlength: 10				
			},
			email: {
				required: true,
				email: true
			},
			domain:{
				required: true,
			}
			
		},
		messages: {
			full_name: {
				required: "Please enter first name",
				minlength: "Name should be at least 2 Char"
			},
			phone: {
				required: "Please enter phone no",
				minlength: "Evening Phone should be 10 Digit"				
			},
			email: "Please enter valid email address",
			domain: "Please Enter Company Name"
		},
		submitHandler: function (form) {
	
			showLoader();
		
			var stripeToken = jQuery("#contact_form").find("[name='stripeToken']").val();
			
			if(typeof stripeToken == 'undefined' || stripeToken == ''){
			
				var domain = jQuery("#contact_form").find("[name='domain']").val();
	
				check_domain_availability(domain).then(
					function(data){
						
						hideLoader();
							
						if(data.SUCCESS == 'TRUE'){
							handler.open({
								name: 'Repbox',
								description: 'Repbox Subscription',
								amount: 0,
								currency: "USD",
								email:jQuery("#contact_form").find("[name='email']").val()
							});
						} else {
									
							if(!jQuery("#domain").next("label").length)
								jQuery("#domain").parent("div").append('<label for="domain" class="error">Company Name already exists</label>');
							else{
								jQuery("#domain").next("label").css("display", "inline-block").text("Company Name already exists");
							}
						}
					}
				);
				return false;
			} else {
				form.submit();
				return true;
			}
		}
	});
});

function check_domain_availability(domain){

	var aDeferred = jQuery.Deferred();

	var is_avail = false;

	var postData = {
		action: 'check_domain_availability',
        domain: domain
    }

	jQuery.ajax({
        type:'POST',
        url : "includes/Repbox.php",
        data: postData,
        dataType:'json',
		async:false,
		success: function(data){
			aDeferred.resolve(data);
		}
	});
	return aDeferred.promise();
}

function showLoader(){
	jQuery("#myloader").css("display", 'block');
}

function hideLoader(){
	jQuery("#myloader").hide("slow");
}


