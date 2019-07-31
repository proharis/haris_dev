$(function () {

    $('a[href*=#]:not([href=#])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });

});
$(document).ready(function () {
    $('#videoSmall').hide();
    $('#slide_video').on('change', function () {
        var p = /(?:https?:\/\/)?(?:youtu\.be\/|(?:www\.)?youtube\.com\/watch(?:\.php)?\?.*v=)([a-zA-Z0-9\-_]+)/;
        if ($('#slide_video').val().match(p)) {
            $('#videoSubmit').show();
            $('#videoSmall').hide();

            submit.form();
        }
        else {
            alert('your url is not valid')
            $('#videoSubmit').hide();
            $('#videoSmall').show();
        }
    });

});