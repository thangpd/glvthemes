"use strict";
(function($) {

    //  Anchor effect onclick
    // (function() {
    //   function mobilecheck() {
    //     var check = false;
    //     (function(a){if(/(android|ipad|playbook|silk|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
    //     return check;
    //   }

    //   var support = { animations : Modernizr.cssanimations },
    //     animEndEventNames = { 'WebkitAnimation' : 'webkitAnimationEnd', 'OAnimation' : 'oAnimationEnd', 'msAnimation' : 'MSAnimationEnd', 'animation' : 'animationend' },
    //     animEndEventName = animEndEventNames[ Modernizr.prefixed( 'animation' ) ],
    //     onEndAnimation = function( el, callback ) {
    //       var onEndCallbackFn = function( ev ) {
    //         if( support.animations ) {
    //           if( ev.target != this ) return;
    //           this.removeEventListener( animEndEventName, onEndCallbackFn );
    //         }
    //         if( callback && typeof callback === 'function' ) { callback.call(); }
    //       };
    //       if( support.animations ) {
    //         el.addEventListener( animEndEventName, onEndCallbackFn );
    //       }
    //       else {
    //         onEndCallbackFn();
    //       }
    //     },
    //     eventtype = mobilecheck() ? 'touchstart' : 'click';

    //   [].slice.call( document.querySelectorAll( 'a' ) ).forEach( function( el ) {
    //     el.addEventListener( eventtype, function( ev ) {
    //       classie.add( el, 'cbutton--click' );
    //       onEndAnimation( classie.has( el, 'cbutton--complex' ) ? el.querySelector( '.cbutton__helper' ) : el, function() {
    //         classie.remove( el, 'cbutton--click' );
    //         console.log('test');
    //       } );
    //     } );
    //   } );

    // })();            
    // $(document).ready(function(){
    //     var height_header = $('.site-header').height() + 80;
    //     if($('body').find('storefront-breadcrumb')){
    //         $('.logged-in .storefront-breadcrumb').css('padding-top', height_header);
    //     }
    //     if($('.home').find('site-content')){
    //         $('.logged-in .site-content').css('padding-top', height_header);
    //     }
    //     $(window).scroll(function(){
    //         $('.logged-in .site-header').css('top', '0');
    //     });
    // });
    // })();   
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
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 80) {
            $('.site-header').addClass('fixed');
        } else {
            $('.site-header').removeClass('fixed');
        }
    });
    $('form a').on('click', function() {
        $(this).addClass('effect-onclick');
        setTimeout(function() {
            $('form a').removeClass('effect-onclick');
            console.log('test');
        }, 100);
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



      
    $(document).ready(function(){
        $("input").focus(function(){
          $('.f-label').addClass('f-onfocus');
          $('.login_countrycode').addClass('f-mb-focus');
        });
      });


})(jQuery);