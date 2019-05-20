// Fong 2019-05-20
// Đây là file tạm, TOM note & ghép vào code

//"use strict"
;(function ($) {

    // Hide H1 (title) of log in page (if user not log in)
    if( ! $('body').hasClass('logged-in') ){
        $('h1.entry-title').hide();
        alert('x');
    }

})(jQuery);
