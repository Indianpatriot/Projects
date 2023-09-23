document.addEventListener("DOMContentLoaded", function () {
    var categorySelect = document.getElementById("category");
    var subcategorySelect = document.getElementById("subcategory");

    categorySelect.addEventListener("change", function () {
        var selectedCategoryId = categorySelect.value;

        // Create and configure an XMLHttpRequest object
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Parse the JSON response
                var subcategories = JSON.parse(xhr.responseText);

                // Clear existing options
                subcategorySelect.innerHTML = "";

                // Add new options based on the selected category
                subcategories.forEach(function (subcategory) {
                    var option = document.createElement("option");
                    option.value = subcategory.id;
                    option.text = subcategory.name;
                    subcategorySelect.appendChild(option);
                });
            }
        };

        // Send an AJAX request to a PHP script to get subcategory data
        xhr.open("GET", "/goal/Projects/LOGIN%20FOR%20GOAL/DB/get_subcategories.php?category=" + selectedCategoryId, true);
        xhr.send();
    });
});
