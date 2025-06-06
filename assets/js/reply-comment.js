CKEDITOR.replace('comment', {
	toolbar: [
		['Bold', 'Italic', 'Underline', 'Link']
	],
	removeDialogTabs: 'link:advanced',
});

$('#add-comment-btn').on('click', function () {
	var entity_id = $(this).data('id');
	var entity_type = $(this).data('type');
	var comment_id = $(this).data('commentid');
	var commentText = CKEDITOR.instances.comment.getData().trim();
	var captcha = $("#g-recaptcha-response").val();
	
	if (commentText === '') {
		alert("Comment cannot be empty.");
		return;
	}

	$.ajax({
		url: web_base_url + "add_comment",
		type: "POST",
		data: { entity_id: entity_id, entity_type: entity_type, comment: commentText, parent_id: comment_id , "g-recaptcha-response": captcha  },
		dataType: "json",
		success: function (response) {
			if (response.status) {
				CKEDITOR.instances.comment.setData('');
				alert("Comment added successfully");
				if(comment_id && response.redirect_url != ''){
					window.location.href = response.redirect_url;
				}
				// commentCount.text(response.total_comments); // Update comment count
				// loadComments(entity_id, entity_type); // Reload comments dynamically
			} else {
				alert(response.message);
			}
		}
	});
});
