CKEDITOR.replace('comment', {
	toolbar: [
		['Bold', 'Italic', 'Underline', 'Link']
	],
	removeDialogTabs: 'link:advanced',
});


$('#add-comment-btn').on('click', function () {
	var entity_id = $(this).data('id');
	var entity_type = $(this).data('type');
	var commentText = CKEDITOR.instances.comment.getData().trim();
	var commentCount = $("#comment-count");
	var captcha = $("#g-recaptcha-response").val();

	if (commentText === '') {
		alert("Comment cannot be empty.");
		return;
	}

	$.ajax({
		url: web_base_url + "add_comment",
		type: "POST",
		data: { entity_id: entity_id, entity_type: entity_type, comment: commentText, "g-recaptcha-response": captcha },
		dataType: "json",
		success: function (response) {
			if (response.status) {
				CKEDITOR.instances.comment.setData('');
				alert("Comment added successfully.");
				window.location.reload();
				// commentCount.text(response.total_comments); // Update comment count
				// loadComments(entity_id, entity_type); // Reload comments dynamically
			} else {
				alert(response.message);
			}
		}
	});
});

// // Load comments dynamically
// function loadComments(entity_id, entity_type) {
// 	$.ajax({
// 		url: web_base_url + "CommentController/get_comments/" + entity_id + "/" + entity_type,
// 		type: "GET",
// 		dataType: "json",
// 		success: function (comments) {
// 			var commentHtml = "";
// 			$.each(comments, function (index, comment) {
// 				commentHtml += `<div class="d-flex align-items-start mb-3">
// 					<div class="avatar avatar-sm me-2">
// 						<img class="rounded-circle" src="` + web_base_url + `uploads/profile/${comment.profile_image}" alt="User">
// 					</div>
// 					<div class="flex-1">
// 						<div class="align-items-center"><a class="fw-bold mb-0" href="javascript:void(0)">${comment.username}</a></div>
// 						<p class="mb-0">${comment.comment}</p>
// 						<div class="post-links d-flex mt-1">
// 							<a href="javascript:void(0);" class="p-0 me-3 reply-btn" data-id="${comment.id}">
// 								<span class="bi bi-reply-all me-1"></span> Reply
// 							</a>
// 							<p class="p-0 me-2"><span class="bi bi-clock me-1"></span> ${comment.created_at} </p>
// 						</div>
// 					</div>
// 				</div>`;
// 			});

// 			$('#comment-section').html(commentHtml);
// 		}
// 	});
// }
