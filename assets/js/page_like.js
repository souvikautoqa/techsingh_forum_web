
$(document).ready(function () {
	$('#like-btn').on('click', function () {
		
		var liked_id = $(this).data('id');
		var like_type = $(this).data('type');
		var likeBtn = $(this);
		var likeCount =  $("#like-count");
		var heartIcon = $("#like-icon");

		$.ajax({
			url: web_base_url + "like/toggle_like",
			type: "POST",
			data: { liked_id: liked_id, like_type: like_type },
			dataType: "json",
			success: function (response) {
				if (response.status) {
					if (response.liked) {
						heartIcon.removeClass('bi-heart').addClass('bi-heart-fill text-danger'); // Change to filled heart and red color
						likeCount.text(response.total_likes);
					} else {
						heartIcon.removeClass('bi-heart-fill text-danger').addClass('bi-heart'); // Change to outline heart
						likeCount.text(response.total_likes);
					}
				} else {
					alert(response.message);
				}
			}
		});
	});


	$(document).on('click', '.comment-like-btn', function () {
        var entity_id = $(this).data('id');  
        var entity_type = $(this).data('type');  
        var likeBtn = $(this);
        var likeCount = $(this).find(".comment-like-count");
        var heartIcon = $(this).find(".comment-heart-icon.bi");

        $.ajax({
            url: web_base_url + "like/toggle_like",
            type: "POST",
            data: { liked_id: entity_id, like_type: entity_type },
            dataType: "json",
            success: function (response) {
                if (response.status) {
                    if (response.liked) {
                        heartIcon.removeClass('bi-heart').addClass('bi-heart-fill text-danger');
                    } else {
                        heartIcon.removeClass('bi-heart-fill text-danger').addClass('bi-heart');
                    }
                    likeCount.text(response.total_likes);
                } else {
                    alert(response.message);
                }
            }
        });
    });


   

 

});

