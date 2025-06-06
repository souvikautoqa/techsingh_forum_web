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
                required: false,
                fileExtension: "jpg|jpeg|png|gif"
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
                required: "Please upload an image"
            }
        },
        submitHandler: function (form) {
            var formData = new FormData(form);
            formData.append("message", CKEDITOR.instances.message.getData());

            $.ajax({
                url: web_base_url + "forum-post/submit",
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
                        alert(`“Your post has been submitted and is pending moderator approval.”\n It will be published once reviewed. Thanks for contributing!`);
                        $("#postForm")[0].reset();
                        CKEDITOR.instances.message.setData(''); // Clear CKEditor after successful submission
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
});
