$(document).ready(function () {
	$("#message-container").html(``);
    $("#registerForm").validate({
        rules: {
            name: {
                required: true,
                minlength: 3
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 6
            }
        },
        messages: {
            name: {
                required: "Please enter your name",
                minlength: "Name must be at least 3 characters long"
            },
            email: {
                required: "Please enter your email address",
                email: "Please enter a valid email address"
            },
            password: {
                required: "Please enter a password",
                minlength: "Password must be at least 6 characters long"
            }
        },
        submitHandler: function (form) {
            
            $.ajax({
                url: web_base_url + "register/post",
                type: "POST",
                data: $(form).serialize(),
                dataType: 'json',
                beforeSend: function () {
                    $("#submit-btn").prop("disabled", true).text("Submitting...");
                },
                success: function (response) {
                    $("#submit-btn").prop("disabled", false).text("Sign Up");
                    if (response.status == "success") {
						$("#message-container").html(
							'<div class="alert alert-success">Thank you for registering! A verification email has been sent to your email address. Please check your inbox and verify your account.</div>'
						);
						$("#registerForm")[0].reset();
                    } else {
                        alert(response.message);
                    }
                },
                error: function () {
                    $("#submit-btn").prop("disabled", false).text("Sign Up");
                    alert("Something went wrong. Please try again.");
                }
            });

            return false; // Prevent default form submission
        }
    });
});
