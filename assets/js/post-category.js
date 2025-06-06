$(document).ready(function () {
    // Retrieve pre-selected values from the URL (if any)
    let urlParams = new URLSearchParams(window.location.search);
    let selectedSort = urlParams.get("sort");
    let searchQuery = urlParams.get("search_term");

    // Apply pre-selected sorting value
    if (selectedSort) {
        $("#sorting .dropdown-menu li").each(function () {
            if ($(this).data("value") === selectedSort) {
                $(".filter-value").text($(this).text());
                $("#sortInput").val(selectedSort);
            }
        });
    }

    // Set search input value if already applied
    if (searchQuery) {
        $("#searchInput").val(searchQuery);
    }

    // Update sorting dropdown when clicked
    $("#sorting .dropdown-menu li").click(function () {
        let selectedValue = $(this).data("value");
        $(".filter-value").text($(this).text()); // Change displayed text
        $("#sortInput").val(selectedValue); // Store selected value in hidden input
    });

});
