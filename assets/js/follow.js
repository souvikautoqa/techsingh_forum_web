$(document).on('click', '.follow-btn', function() {
    let following_id = $(this).data('id'); // Get user ID to follow/unfollow
    let btn = $(this);

    $.ajax({
        url: web_base_url + "toggle_follow",
        type: "POST",
        data: { following_id: following_id },
        dataType: "json",
        success: function(response) {
            if (response.status) {
                btn.text(response.follow ? 'Unfollow': 'Follow');
            } else {
                alert(response.message);
            }
        },
        error: function() {
            alert("Something went wrong.");
        }
    });
});
