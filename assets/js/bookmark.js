
$('#bookmark-btn').on('click', function () {
		
	let bookmark_id = $(this).data('id');
	let entity_type = $(this).data('type');
	let bookmarkBtn = $(this);
	var bookmarkCount =  $("#bookmark-count");
	var bookmarkIcon = $("#bookmark-icon");
	let bookmarkText = $("#bookmark-text");

	$.ajax({
		url: web_base_url + "toggle_bookmark",
		type: "POST",
		data: { entity_id: bookmark_id, entity_type: entity_type },
		dataType: "json",
		success: function (response) {
			if (response.status) {
				if (response.bookmarked) {
					bookmarkIcon.removeClass('bi-bookmark').addClass('bi-bookmark-fill text-danger'); // Change to filled heart and red color
					bookmarkCount.text(response.total_bookmark);
					bookmarkText.text('Bookmarked');
				} else {
					bookmarkIcon.removeClass('bi-bookmark-fill text-danger').addClass('bi-bookmark'); // Change to outline heart
					bookmarkCount.text(response.total_bookmark);
					bookmarkText.text('Bookmark');
				}
			} else {
				alert(response.message);
			}
		}
	});
});



