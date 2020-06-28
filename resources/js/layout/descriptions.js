const $ = require('jquery');

$(document).on('click', 'a.show-full-description', function (event) {
    event.preventDefault();
    const target = $("#"+$(this).data('target'));
    const height = target.prop('scrollHeight');
    target.css('max-height', height+'px').removeClass('mobile-description');
    $(this).removeClass('show-full-description').addClass('show-mobile-description').html('Show less');
});

$(document).on('click', 'a.show-mobile-description', function (event) {
    event.preventDefault();
    const target = $("#"+$(this).data('target'));
    target.css('max-height', '').addClass('mobile-description');
    $(this).removeClass('show-mobile-description').addClass('show-full-description').html('Show more');
});