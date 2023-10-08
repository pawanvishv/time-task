$(document).ready(function () {
    var element = $(".tshirt-col");
    // Listen for changes in the radio buttons
    element.addClass("col-md-6");
    $('#tshirtDropdown').change(function () {
        
        if ($(this).val() === "1") {
            // Show the select element
           
            element.removeClass("col-md-6");
            element.removeClass("col-md-3");
            // Add the class col-md-6
            element.addClass("col-md-2");
            $('#tshirtSizeContainer').show().addClass('col-md-4');
        
        } else {
            // Remove the class col-md-3
            element.removeClass("col-md-3");
            element.removeClass("col-md-2");

            // Add the class col-md-6
            element.addClass("col-md-6");
            $('#tshirtSizeContainer').hide();
        }
    });
});