$(document).ready(function() {
    // Select All Checkbox
    $("#select_all_btn").click(function() {
		if ($(".bookmark_checkbox:checked").length === $(".bookmark_checkbox").length) {
            // If all are checked, uncheck all
            $(".bookmark_checkbox").prop("checked", false);
        } else {
            // Otherwise, check all
            $(".bookmark_checkbox").prop("checked", true);
        }
    });

    // Remove Selected Bookmarks
    $("#remove_selected_btn").click(function() {
        let selectedBookmarks = [];
        
        $(".bookmark_checkbox:checked").each(function() {
            selectedBookmarks.push($(this).val());
        });

        if (selectedBookmarks.length === 0) {
            alert("Please select at least one bookmark to remove.");
            return;
        }

        // AJAX request to delete bookmarks
        $.ajax({
            url: web_base_url + "bookmark/delete_selected_bookmarks",
            type: "POST",
            data: { bookmark_ids: selectedBookmarks },
            dataType: "json",
            success: function(response) {
                if (response.status === "success") {
                    alert("Bookmarks removed successfully!");
                    location.reload(); // Refresh the page
                } else {
                    alert("Error removing bookmarks.");
                }
            }
        });
    });
});
