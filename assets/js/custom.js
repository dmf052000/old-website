jQuery(document).ready(function(){

	$('.fancybox').fancybox({
			helpers: {
				media: true,
				title: null,
			},
		 	fitToView: true,
		 	aspectRatio: true,

		 autoScale: true,
		 autoDimensions: true,
		 autoSize: true,
		 maxWidth: "70%",
		 maxHeight: "70%",

		 afterLoad: function() {
			 console.log('afterload');

			 this.width = 1280;
			 this.height = 720;
		 }
	 });

	jQuery("#signup").validate({
		rules: {
        	firstname: {
            	required:true,
	        },
	        lastname: {
            	required:true,
	        },
	        email: {
            	required:true,
            	email:true,
	        },
	        domain: {
            	required:true,
            },
    	},
    	messages:{
	        firstname:{
	            required:"Please enter your First Name",
	        },
	        lastname:{
	            required:"Please enter your Last Name",
	        },
	        email:{
				required : "Please enter your email address",
				email : "Please enter a valid email address",
			},
	        domain:{
	            required:"Please Enter Company Name",
	        }
	    }
    });

	jQuery("#signup_form").on("click", function(e){

		jQuery("#Error").hide();
		jQuery("#Success").hide();

		e.preventDefault();

		var is_available = false;

		if(jQuery("#signup").valid()){

			var domain = jQuery("#domain").val();

			run_waitMe($('.fancybox-skin'), 1, "orbit");

			check_domain_availability(domain).then(
				function(data){
					if(data.SUCCESS == 'TRUE'){
						submitSignupForm().then(function(response){
							$('.fancybox-skin').waitMe('hide');
							jQuery(".containerBlock").hide();
							if(response.success == true){
								jQuery("#Success").text(response.message);
							} else {
								jQuery("#Error").text("OOPS! Something went wrong while creating instance");
							}
							$.fancybox.update();
						});
					} else {
						$('.fancybox-skin').waitMe('hide');
						if(!jQuery("#domain").next("label").length)
							jQuery("#domain").parent("p").append('<label for="domain" class="error">Company Name already exists</label>');
						else{
							jQuery("#domain").next("label").css("display", "inline-block").text("Company Name already exists");
						}

					}
				}
			);
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
        url : "php/Signup.php",
        data: postData,
        dataType:'json',
		async:false,
		success: function(data){
			aDeferred.resolve(data);
		}
	});
	return aDeferred.promise();
}

function submitSignupForm(){
	var aDeferred = jQuery.Deferred();

	var formData = jQuery("#signup").serialize();

	var postData = "action=saveFormData&"+formData;

	jQuery.ajax({
        type:'POST',
        url : "php/Signup.php",
        data: postData,
        dataType:'json',
		async:false,
		success: function(data){
			aDeferred.resolve(data);
		}
	});

	return aDeferred.promise();
}

function onSuccess(googleUser) {

	if($("#is_page_loaded").val() == 1){
		var user_id = googleUser.getBasicProfile().getId();
		var email = googleUser.getBasicProfile().getEmail();

		var last_name = googleUser.getBasicProfile().getFamilyName();
		var first_name = googleUser.getBasicProfile().getName();

		run_waitMe($('.fancybox-skin'), 1, "orbit");

		$.ajax({
			type: "POST",
			url: "php/subscribe.php",
			data: "user_id="+user_id+"&email="+email+"&last_name="+last_name+"&first_name="+first_name,
			success: function(data) {

				$('.fancybox-skin').waitMe('hide');
				data = JSON.parse(data);

				if(data.success){
					$('#Success').text("Thank you for Sign up. Please check your email.");
					$("#Success").show();
					$("#Error").hide();
					$("#g-signin2").hide();
				} else {
					$('#Error').text(data.error);
					$("#Success").hide();
					$("#Error").show();
				}
			}
		});
	} else {
		jQuery("#is_page_loaded").val("1");
	}

}

function onFailure(error) {
	$('#Error').text(error);
	$("#Success").hide();
	$("#Error").show();
}

function renderButton() {
  gapi.signin2.render('g-signin2', {
	'scope': 'profile email',
	'width': 240,
	'height': 50,
	'longtitle': true,
	'theme': 'dark',
	'onsuccess': onSuccess,
	'onfailure': onFailure
  });
}

function run_waitMe(el, num, effect){
	text = 'Please wait...';
	fontSize = '';
	switch (num) {
		case 1:
			maxSize = '';
			textPos = 'vertical';
		break;
		case 2:
			text = '';
			maxSize = 30;
			textPos = 'vertical';
		break;
		case 3:
			maxSize = 30;
			textPos = 'horizontal';
			fontSize = '18px';
		break;
	}
	el.waitMe({
		effect: effect,
		text: text,
		bg: 'rgba(255,255,255,0.7)',
		color: '#000',
		maxSize: maxSize,
		source: 'img.svg',
		textPos: textPos,
		fontSize: fontSize,
		onClose: function() {}
	});
}
