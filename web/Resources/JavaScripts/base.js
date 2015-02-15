$(document).ready(function() {
    setTimeout(removeLoadingOverlay, 800);
});

function removeLoadingOverlay() {
    imagesLoaded($('body'), function() {
        $('.loadingOverlay').fadeOut('slow');
    });
}