var validationObj = {
			rules: {
				firstName: {
					required: true,
					minlength: 2
				},
				lastName: {
					required: true,
					minlength: 2
				},
				password: {
					required: true,
					minlength: 5
				},
				confirm_password: {
					required: true,
					minlength: 5,
					equalTo: "#password"
				},
				emailId: {
					required: true,
					email: true
				},
				
			},
			messages: {
				firstName: {
					required: "Please enter a firstname",
					minlength: "Your firstname must consist of at least 2 characters"
				},
				lastName: {
					required: "Please enter a lastname",
					minlength: "Your lastname must consist of at least 2 characters"
				},
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				confirm_password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long",
					equalTo: "Please enter the same password as above"
				},
				emailId: "Please enter a valid email address"
			}
		};



$.validator.setDefaults({
		submitHandler: function(form) {
			alert("submitted!");
		}
	});

	$().ready(function() {
		$("form").each(function(index){
			if (!$(this).attr("no-validate")){
					$(this).validate(validationObj);
			}
		})	

	});