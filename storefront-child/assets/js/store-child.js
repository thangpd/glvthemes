"use strict";
(function($) {

    if ($('.woocommerce-form-login').length) {
        $('.woocommerce-form-login #password').parent().append(`<span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>`);
        $(".toggle-password").click(function() {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
            input.focus();
        });
    }
    const $btnShare = $('.js-btn-share');
    if ($btnShare.length) {
        $btnShare.on('click', function() {
            $('#myDropdown').toggle('show');
        });
        $('#myDropdown a').on('click', function() {
            setTimeout(() => {
                $('#myDropdown').hide("slide", {
                    direction: "up"
                }, "slow");
            }, 300);
        });
        $(document).on('click', function(e) {
            if (!$('.btn-share').find(e.target).length) {
                if (!$('#myDropdown').is(':hidden')) {
                    $btnShare.click();
                }
            }
        });
    }

    // Scroll header
    var title_main = "<h6></h6>";
    var logo_scroll = "<a></a>";
    $('.site-header').find('.custom-logo-link').append(logo_scroll);
    $('.site-header').find('.custom-logo-link').append(title_main);
    var htmlString = $( 'h1' ).html();
    $('h6').text( htmlString );
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 80) {
            $('.site-header').addClass('fixed');
            $('.site-header').find('.custom-logo-link').addClass('custom-logo-link-scroll');
           
            
        } else {
            $('.site-header').removeClass('fixed');
            $('.site-header').find('.custom-logo-link').removeClass('custom-logo-link-scroll');
        }

    });

    $('form a:not(.login-type)').on('click', function() {
        $(this).addClass('effect-onclick');
        setTimeout(function() {
            $('form a').removeClass('effect-onclick');
        }, 100);
    });
    $('.form-row .login-type> span.login-type-1, .form-row .login-type> span.login-type').on('click', function(){
        $(this).addClass('effect-onclick');
        setTimeout(function() {
            $('.form-row .login-type> span.login-type-1').removeClass('effect-onclick');
            $('.form-row .login-type> span.login-type').removeClass('effect-onclick');
        }, 200);
    });
  

    $(document).ready(function() {
        var labelRadio_1 = $('.login-register .form-row label[for="login-with-phone"]');
        var labelRadio_2 = $('.login-register .form-row label[for="login-with-user"]');

        // function setHeightLogin(label) {

        //   if($(window).width() < 767) {
        //     var heightScreen = $(window).height();
        //     if(label === 2) {
        //       setTimeout(function(){
        //         var heightLogin = $('.login-register #page').height();
        //         $('body.login-register.home').css('height', heightLogin);
        //       }, 500);
        //     } else {
        //       $('body.login-register.home').css('height', heightScreen);
        //     }

        //   }
        // }

        // setHeightLogin(1);

        // labelRadio_1.off('click').on('click', function() {
        //   setHeightLogin(1);
        // });

        // labelRadio_2.off('click').on('click', function() {
        //   setHeightLogin(2);
        // });
        //
        function select2_search($el, term) {
            $el.select2('open');

            // Get the search box within the dropdown or the selection
            // Dropdown = single, Selection = multiple
            var $search = $el.data('select2').dropdown.$search || $el.data('select2').selection.$search;
            // This is undocumented and may change in the future

            $search.val(term);
            $search.trigger('input');
            setTimeout(function() {
                $('.select2-results__option').trigger("mouseup");
            }, 500);

        }
        const $formRegister = $('.woocommerce-form-register');
        const $formTransfer = $('#mycred-transfer-form-transfer');
        // handle qrcode callback register
        if ($formRegister.length > 0) {
            $formRegister.parent().prepend('<a href="javascript:showScanQR(\'Register\');" class="js-btn-qrcode btn-qrcode btn-qrcode--register"><i class="fa fa-qrcode" aria-hidden="true"></i></a>');
            let $userNameField = $formRegister.find('#reg_username');
             $.validator.addMethod("regx", function(value, element, regexpr) {          
                  return regexpr.test(value);
              }, "Please enter a valid username.");

             setTimeout(() => {
               $('#reg_username').rules('add', {regx: /^([a-zA-Z][a-zA-Z0-9]*)$/i, minlength: 5, maxlength: 15});
             }, 100);
        }

        if ($formTransfer.length > 0) {
            $formTransfer.parent().prepend('<a href="javascript:showScanQR(\'Transfer\');" class="js-btn-qrcode btn-qrcode btn-qrcode--transfer"><i class="fa fa-qrcode" aria-hidden="true"></i></a>');

            // auto fill data
            let ref = '';
            let amount = '0.01';
            let isAutoFill = false;
            if (getQuery().has('username')) {
                ref = getQuery().get('username');
            } else if (getQuery().has('ref')) {
                ref = getQuery().get('ref');
            }

            if (ref.length) {
                let ip = $formTransfer.find('input[name="mycred_new_transfer[recipient_id]"]');
                if (ip.length) {
                    ip.val(ref);
                }
                isAutoFill = true;
            }

            if (getQuery().has('amount')) {
                amount = parseInt(getQuery().get('amount'));
            }

            let ipAmount = $formTransfer.find('input[name="mycred_new_transfer[amount]"]');
            if (ipAmount.length) {
                ipAmount.val(amount);
            }

            if (isAutoFill) {
                console.log('scroll autofill');
                $('html, body').animate({
                    scrollTop: ($formTransfer.offset().top - $('#masthead').outerHeight() - 100)
                },500);
            }
        }

        function getQuery() {
            return new URLSearchParams(window.location.search);
        }
        // show qr code
        window.showScanQR = function(typeScan) {
            // Register or Transfer
            let json = {
                "QRCode": typeScan
            };
            try {
                webkit.messageHandlers.callbackHandler.postMessage(json);
            } catch (err) {
                console.log('The native context does not exist yet');
            }
            
            try {
                android.showShareNative(json)
            } catch (err) {
                console.log('The android native context does not exist yet');
            }

            try {
                myOwnJSHandler.receiveMessageFromJS(JSON.stringify(json));
            } catch (err) {
                console.log('The myOwnJSHandler context does not exist yet');
            }
        }

        window.showCustomAndroidShare = function(link) {
            console.log(`share link: ${link}`);
            let json = {
                "ShareNative": link
            };

            try {
                webkit.messageHandlers.callbackHandler.postMessage(json);
            } catch (err) {
                console.log('The native context does not exist yet');
            }

            try {
                android.showShareNative(json);
            } catch (err) {
                console.log('The android native context does not exist yet');
            }

            try {
                myOwnJSHandler.receiveMessageFromJS(JSON.stringify(json));
            } catch (err) {
                console.log('The myOwnJSHandler context does not exist yet');
            }
        }

        window.showAndroidShare = function() {
            console.log(window.share_link);
            let json = {
                "ShareNative": window.share_link
            };
            try {
                webkit.messageHandlers.callbackHandler.postMessage(json);
            } catch (err) {
                console.log('The native context does not exist yet');
            }
            try {
                android.showShareNative(json)
            } catch (err) {
                console.log('The android native context does not exist yet');
            }
            try {
                myOwnJSHandler.receiveMessageFromJS(JSON.stringify(json));
            } catch (err) {
                console.log('The myOwnJSHandler context does not exist yet');
            }
        }
    });
    function emptyInputTest (){
        $('input').each(function(){
            var content = $(this).val();
            if(content!=''){
                $(this).next('.f-label').addClass('f-onfocus');
            }
            else{
                $(this).next('.f-label').removeClass('f-onfocus');
                $(this).closest('.row').css('margin-top', -20);
            }
            $(this).focus(function(){
                var content = $(this).val();
                if(content==''){
                    $(this).closest('.row').css('margin-top', 0);
                    $(this).next('.f-label').addClass('f-onfocus');
                }
            })
            $(this).focusout(function(){
                var content = $(this).val();
                if(content==''){
                    $(this).next('.f-label').removeClass('f-onfocus');
                    $(this).closest('.row').css('margin-top', -20);
                }
                else{
                    $(this).closest('.row').css('margin-top', 0);
                    $(this).next('.f-label').addClass('f-onfocus');

                }
            })
        })
    }
    $(document).ready(function(){
        $('.alert-close').on('click', function(){
            $(this).parent('.alert').css('display', 'none');
        });
        
      
        $("input:not([type=\"submit\"])").focus(function(){
                // $(this).next('.f-label').addClass('f-onfocus');
                $(this).parents('.site-content').find('.col-full >.woocommerce').addClass('woocommerce-fc');
                $(this).parents('.f-bd').find('.f-label').addClass('f-onfocus');
                $(this).parents('.site-content').prev('.site-header').find('.custom-logo').addClass('img-fc'); 
                $(this).parents('.phone_login').addClass('phone_login-fc');

                $(this).parents('.f-bd').addClass('f-bd-focus');
                $(this).parents('.custom-mg').addClass('custom-mg-focus'); 
                $(this).parents('.myaccount-login-page').addClass('myaccount-login-page-fc');
                // $(this).parents('form').find('.f-login-title').hide();
                $(this).parents('form').find('.f-lost-pass').hide();
                $(this).parents('.site-content').next('footer').hide();
                $(this).parents('.woocommerce-form-login').parents('.login-register').find('#page').css('overflow', 'hidden');
                if($(this).hasClass('width80')){
                    $(this).next('.f-label').addClass('f-onfocus');
                }
         
        });
        $("input:not(.input-number-mobile )").focusout(function(){
            $(this).parents('.site-content').find('.col-full >.woocommerce').removeClass('woocommerce-fc');
            $(this).parents('.site-content').prev('.site-header').find('.custom-logo').removeClass('img-fc'); 
            $(this).parents('.myaccount-login-page').removeClass('myaccount-login-page-fc');
            // $(this).parents('.phone_login').removeClass('phone_login-fc');
            $(this).parents('.f-bd').removeClass('f-bd-focus');
            // $(this).parents('form').find('.f-login-title').show();
            $(this).parents('form').find('.f-lost-pass').show();
            $(this).parents('.site-content').next('footer').show();
            $(this).parents('.woocommerce-form-login').parents('.login-register').find('#page').css('overflow', 'auto');
            // $(this).next('.error').parent('.rg').css('margin-top', '40px');
            if($(this).val()!=""){
                // $(this).next('.f-label').addClass('f-onfocus');
            }else{
                // $(this).next('.f-label').removeClass('f-onfocus');
                $(this).parents('.custom-mg').removeClass('custom-mg-focus'); 
            }
            // if($(this).val() == ""){
            //     $(this).next('label').next('.f-label').removeClass('f-onfocus');
            // }
    });
    $("input.input-number-mobile").focusout(function(){
        if(!$(this).parents('.woocommerce-form-register ').length){
            $(this).parents('.site-content').prev('.site-header').find('.custom-logo').removeClass('img-fc'); 
            $(this).parents('.phone_login').removeClass('phone_login-fc');
            $(this).parents('form').find('.f-lost-pass').show();

        }
        else{
            if($(this).val()==""){
                $(this).parents('.custom-mg').removeClass('custom-mg-focus'); 
            }
        }
        $(this).parents('.f-bd').removeClass('f-bd-focus');

    });
        // Main menu toggle
        $('button.menu-toggle').click(function(){
            $('.main-navigation').toggleClass('toggled');
            $('body').css('overflow', 'hidden');
        });
        $('.layer-mask').click(function(){
            $('.main-navigation').removeClass('toggled');
            $('body').css('overflow', 'auto');
        });
        
        // Onclick menu bottom
        $('.columns-5 li a').click(function(){
            $(this).parent('li').find('svg').addClass('svg-click');
        });
        $('.btn-share a').click(function(){
            $(this).find('svg').toggleClass('svg-click');
        });
        
      });


        //   Fill image svg
        $(document).ready(function(){

        $('a img').each(function(){
            var $img = $(this);
            var imgID = $img.attr('id');
            var imgClass = $img.attr('class');
            var imgURL = $img.attr('src');
            jQuery.get(imgURL, function(data) {
                // Get the SVG tag, ignore the rest
                var $svg = jQuery(data).find('svg');
        
                // Add replaced image's ID to the new SVG
                if(typeof imgID !== 'undefined') {
                    $svg = $svg.attr('id', imgID);
                }
                // console.log('shbbduyg');
                // Add replaced image's classes to the new SVG
                if(typeof imgClass !== 'undefined') {
                    $svg = $svg.attr('class', imgClass+' replaced-svg');
                }
        
                // Remove any invalid XML tags as per http://validator.w3.org
                $svg = $svg.removeAttr('xmlns:a');
                
                // Check if the viewport is set, else we gonna set it if we can.
                if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                    $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
                }
        
                // Replace image with new SVG
                $img.replaceWith($svg);
        
            }, 'xml');
        
        });

        $('li img').each(function(){
            var $img = $(this);
            var imgID = $img.attr('id');
            var imgClass = $img.attr('class');
            var imgURL = $img.attr('src');
            jQuery.get(imgURL, function(data) {
                // Get the SVG tag, ignore the rest
                var $svg = jQuery(data).find('svg');
        
                // Add replaced image's ID to the new SVG
                if(typeof imgID !== 'undefined') {
                    $svg = $svg.attr('id', imgID);
                }
                // console.log('shbbduyg');
                // Add replaced image's classes to the new SVG
                if(typeof imgClass !== 'undefined') {
                    $svg = $svg.attr('class', imgClass+' replaced-svg');
                }
        
                // Remove any invalid XML tags as per http://validator.w3.org
                $svg = $svg.removeAttr('xmlns:a');
                
                // Check if the viewport is set, else we gonna set it if we can.
                if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                    $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
                }
        
                // Replace image with new SVG
                $img.replaceWith($svg);
        
            }, 'xml');
        
        });

        // Show icon share in android/ios
        var userAgent = window.navigator.userAgent.toLowerCase(),
        safari = /safari/.test( userAgent ),
        ios = /iphone|ipod|ipad/.test( userAgent );
        if( ios ) {
            if ( safari ) {
                $('.btn-and').css('display', 'none');
            } else if ( !safari ) {
                $('.btn-and').css('display', 'none');
            };
        } else {
            $('.btn-ios').css('display', 'none');
        };
        emptyInputTest();

        });
    // $(window).on('load', function () {
    //     if($("input.input-number-mobile").val()!=""){
    //         $("input").next('.f-label').addClass('f-onfocus');
            
    //     }
    //  });
})(jQuery)




