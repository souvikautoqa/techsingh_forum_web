$(document).ready(function () {

    // Initialize CKEditor
    CKEDITOR.replace('message', {
        filebrowserUploadUrl: web_base_url + "ckeditor/file-upload",
        filebrowserUploadMethod: 'form',
        toolbar: [
            ['Bold', 'Italic', 'Underline', 'Link', 'Image']
        ],
        
        extraPlugins: 'uploadimage,image',
        extraAllowedContent: 'img[alt,src,width,height,rel]',
        removeDialogTabs: 'image:advanced;image:Link',
    });

    // Custom validation method for CKEditor content
    $.validator.addMethod("ckeditorRequired", function (value, element) {
        var editorContent = CKEDITOR.instances.message.getData().trim();
        return editorContent.length > 0;
    }, "Please enter a message");

    // Custom validation rule for file extension
    $.validator.addMethod("fileExtension", function (value, element, param) {
        var extension = value.split('.').pop().toLowerCase();
        return this.optional(element) || $.inArray(extension, param.split('|')) !== -1;
    }, "Allowed file types: jpg, jpeg, png, gif");

    $("#postForm").validate({
        ignore: [], // Don't ignore hidden fields (important for CKEditor)
        rules: {
            topic_name: {
                required: true,
                minlength: 3
            },
            message: {
                ckeditorRequired: true // Use the custom CKEditor validation method
            },
            featured_image: {
                // required: true,
                fileExtension: "jpg|jpeg|png|gif"
            },
			// status: {
			// 	required:true
			// }
        },
        messages: {
            topic_name: {
                required: "Please enter a topic name",
                minlength: "Topic name must be at least 3 characters long"
            },
            message: {
                ckeditorRequired: "Please enter a message" // Custom message for CKEditor
            },
            featured_image: {
                // required: "Please upload an image"
            },
			// status: {
			// 	required: "Please select Status",
			// }
        },
        submitHandler: function (form) {
            var formData = new FormData(form);
            formData.append("message", CKEDITOR.instances.message.getData());

            $.ajax({
                url: web_base_url + "forum-post/update",
                type: "POST",
                data: formData,
                dataType: 'json',
                contentType: false,
                processData: false,
                beforeSend: function () {
                    $(".btn-org").prop("disabled", true).text("Submitting...");
                },
                success: function (res) {
                    $(".btn-org").prop("disabled", false).text("Submit");
                    if (res.status == "success") {
                        alert("Post updated successfully!");
						window.location.href = web_base_url + "my-post";
                    } else {
                        alert(res.message);
                    }
                },
                error: function () {
                    $(".btn-org").prop("disabled", false).text("Submit");
                    alert("Something went wrong. Please try again.");
                }
            });

            return false; // Prevent default form submission
        }
    });


	$("#moderatorPostForm").validate({
        ignore: [], // Don't ignore hidden fields (important for CKEditor)
        rules: {
            topic_name: {
                required: true,
                minlength: 3
            },
            message: {
                ckeditorRequired: true // Use the custom CKEditor validation method
            },
            featured_image: {
                // required: true,
                fileExtension: "jpg|jpeg|png|gif"
            },
			status: {
				required:true
			}
        },
        messages: {
            topic_name: {
                required: "Please enter a topic name",
                minlength: "Topic name must be at least 3 characters long"
            },
            message: {
                ckeditorRequired: "Please enter a message" // Custom message for CKEditor
            },
            featured_image: {
                // required: "Please upload an image"
            },
			status: {
				required: "Please select Status",
			}
        },
        submitHandler: function (form) {
            var formData = new FormData(form);
            formData.append("message", CKEDITOR.instances.message.getData());

            $.ajax({
                url: web_base_url + "forum-post/moderator/update",
                type: "POST",
                data: formData,
                dataType: 'json',
                contentType: false,
                processData: false,
                beforeSend: function () {
                    $(".btn-org").prop("disabled", true).text("Submitting...");
                },
                success: function (res) {
                    $(".btn-org").prop("disabled", false).text("Submit");
                    if (res.status == "success") {
                        alert("Post updated successfully!");
						window.location.href = web_base_url + "pending-approval";
                    } else {
                        alert(res.message);
                    }
                },
                error: function () {
                    $(".btn-org").prop("disabled", false).text("Submit");
                    alert("Something went wrong. Please try again.");
                }
            });

            return false; // Prevent default form submission
        }
    });


	$("#generate-meta-btn").on('click', function(){
		let title = $("#topic_name").val();
		let message = $("#message").val();
		var settings = {
			"url": "https://testabc.keyanntech.com/api/generate_meta",
			"method": "POST",
			"timeout": 0,
			"headers": {
			  "Content-Type": "application/json"
			},
			"data": JSON.stringify({
			  "title": title,
			  "content": message,
			}),
		  };
		  
		  $.ajax(settings).done(function (response) {
			// console.log(response);
			$("#meta_title").val(response.meta_title);
        	$("#meta_description").val(response.meta_description);
        	$("#meta_keywords").val(response.meta_keywords);
		  });
	});


});
