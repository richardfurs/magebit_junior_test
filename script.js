$(document).ready(function() {
'use strict'
                                            // ANIMATE TO RIGHT
        $('.button-login').click(function() {
          if($(window).width() > 767) {
          $('.square').animate({
              left: "+=420"
            }, 800, 'swing');
          }
          $('.sign-up').fadeOut(400, function() {
            $(this).addClass('invisible');
            $('.login').fadeIn(150, function() {
              $(this).removeClass('invisible');
            });
          });
        });

                                                  // ANIMATE TO LEFT
        $( ".button-sign-up" ).click(function() {
          if($(window).width() > 767) {
            $( ".square" ).animate({
                left: "-=420"
              }, 800, 'swing');
          }

          $('.login').fadeOut(400, function() {
            $(this).addClass('invisible');
            $('.sign-up').fadeIn(150, function() {
              $(this).removeClass('invisible');
            });
          });
        });

                                                        // FORM
        $('.icon-hidden').hide();

        $('input').focus(function(){
          $(this).parents('.form-group').addClass('focused');
          $(this).siblings('.icon-hidden').show();
        });

        $('input').blur(function(){
          if ($(this).val() == "") {
            $('.form-group').removeClass('focused');
            $(this).siblings('.icon-hidden').hide();
          }
        });





});
