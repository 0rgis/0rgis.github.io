$(document).ready(function() {
    $('.dropdown a').click(function(e) {
        e.preventDefault();

        // Get the href attribute of the clicked item
        var href = $(this).attr('href');

        // Update the src attribute of the iframe
        $('#contentFrame').attr('src', href);
    });
});
