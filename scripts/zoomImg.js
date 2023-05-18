echo("hello");


$(document).ready(function() {
    const zoom = document.getElementsByClassName('zoomable');
    // Zoom image on hover
    $('zoom')
    .wrap('<span style="display:inline-block"></span>')
    .css('display', 'block')
    .parent()
    .zoom();
});
