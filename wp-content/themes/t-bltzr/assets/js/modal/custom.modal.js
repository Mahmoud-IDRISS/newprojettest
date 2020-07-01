jQuery(document).ready(function ($) {
    var $_field_wrapper = $('#gform_2').find('li.gfield');

    $($_field_wrapper).each(function(){
        var $_field_label = $(this).find('.gfield_label');
        var $_field_input = $(this).find('input');
        var $_field_textarea = $(this).find('textarea');
        var $_field_label_inner = $_field_label.text();
        var $_field_content = '<span class="highlight"></span> ' +
                              '<span class="bar"></span>' +
                              '<label>' +$_field_label_inner+ '</label>';

        $_field_label.hide();
        $(this).find('.ginput_container').append($_field_content);

        $_field_input.keyup(function() {
            if($(this).val().length != 0){
                $(this).addClass('kl-has-value');
            } else{
                $(this).removeClass('kl-has-value');
            }
        });

        $_field_textarea.keyup(function() {
            if($(this).val().length != 0){
                $(this).addClass('kl-has-value');
            } else{
                $(this).removeClass('kl-has-value');
            }
        });
    });

    $("body").delegate( ".kl-close-contact", "click", function() {
        $('.kl-modal-contact-content').find('input:not([type="submit"])').val('');
        $('.kl-modal-contact-content').find('textarea').val('');
        $('.validation_error').hide();
        $('.instruction.validation_message').hide();
        $_field_wrapper.removeClass('gfield_error');
        $('.kl-modal-contact-content').hide();
        $('.md-overlay.kl-overlay-contact').hide();
        $('.validation_message').remove();
        $('body').removeClass('kl-screen-height');
        $('html').addClass('kl-screen-height');
    });

    if ($('.gform_wrapper').hasClass('gform_validation_error')) {
        $('body').addClass('kl-form-contact');
    } else{
        $('body').removeClass('kl-form-contact');
    }

    $('a[data-modal="id-bltzr-contact-form"]').click(function(){
        $('.kl-modal-contact-content').show();
        $('.md-overlay.kl-overlay-contact').show();
        $('body').addClass('kl-screen-height');
        $('html').addClass('kl-screen-height');
    });


});

