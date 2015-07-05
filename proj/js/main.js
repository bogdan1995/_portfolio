"use strict";

var app = (function () {
	return {
        init: function () {
            this.setUpListeners();
            this.classie();
            this.waypoint();
            this.ya();
        },
        setUpListeners: function () {
            $('.show').on('click', this.showMenu);
            $('.nav__menu-link').on('click', this.goToBlock);
            $('form').on('submit', this.submitForm).on('keydown', 'input, textarea', app.removeError);;
            $('#input-3').on('keyup', this.textFilled);
        },
        showMenu: function (e) {
            e.preventDefault();

            var nav = $('.nav'),
                    expression = parseInt( nav.css('top') );

            console.log(expression);

            if (expression) {
                nav.animate({
                    top: 0
                }, 300);
            } else {
                nav.animate({
                    top: -1*nav.height() + 'px'
                }, 300)
            }
        },
        goToBlock: function (e) {
            e.preventDefault();

            var $this = $(this),
                nameOfBlock = $this.data('block'),
                distance = $('.' +  nameOfBlock).offset().top;

            console.log(nameOfBlock);

            $('html, body').animate({
                scrollTop: distance
            }, 300);
        },
        classie: function () {
            ( function( window ) {

                'use strict';

// class helper functions from bonzo https://github.com/ded/bonzo

                function classReg( className ) {
                    return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
                }

// classList support for class management
// altho to be fair, the api sucks because it won't accept multiple classes at once
                var hasClass, addClass, removeClass;

                if ( 'classList' in document.documentElement ) {
                    hasClass = function( elem, c ) {
                        return elem.classList.contains( c );
                    };
                    addClass = function( elem, c ) {
                        elem.classList.add( c );
                    };
                    removeClass = function( elem, c ) {
                        elem.classList.remove( c );
                    };
                }
                else {
                    hasClass = function( elem, c ) {
                        return classReg( c ).test( elem.className );
                    };
                    addClass = function( elem, c ) {
                        if ( !hasClass( elem, c ) ) {
                            elem.className = elem.className + ' ' + c;
                        }
                    };
                    removeClass = function( elem, c ) {
                        elem.className = elem.className.replace( classReg( c ), ' ' );
                    };
                }

                function toggleClass( elem, c ) {
                    var fn = hasClass( elem, c ) ? removeClass : addClass;
                    fn( elem, c );
                }

                var classie = {
                    // full names
                    hasClass: hasClass,
                    addClass: addClass,
                    removeClass: removeClass,
                    toggleClass: toggleClass,
                    // short names
                    has: hasClass,
                    add: addClass,
                    remove: removeClass,
                    toggle: toggleClass
                };

// transport
                if ( typeof define === 'function' && define.amd ) {
                    // AMD
                    define( classie );
                } else {
                    // browser global
                    window.classie = classie;
                }

            })( window );
            (function() {
                // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
                if (!String.prototype.trim) {
                    (function() {
                        // Make sure we trim BOM and NBSP
                        var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                        String.prototype.trim = function() {
                            return this.replace(rtrim, '');
                        };
                    })();
                }

                [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
                    // in case the input is already filled..
                    if( inputEl.value.trim() !== '' ) {
                        classie.add( inputEl.parentNode, 'input--filled' );
                    }

                    // events:
                    inputEl.addEventListener( 'focus', onInputFocus );
                    inputEl.addEventListener( 'blur', onInputBlur );
                } );

                function onInputFocus( ev ) {
                    classie.add( ev.target.parentNode, 'input--filled' );
                }

                function onInputBlur( ev ) {
                    if( ev.target.value.trim() === '' ) {
                        classie.remove( ev.target.parentNode, 'input--filled' );
                    }
                }

            })();

        },
        waypoint: function () {
            var waypoints = $('.about__skills__list').waypoint({
                handler: function(direction) {
                    $('.about__skills__list').addClass('about__skills__list_animate');
                },
                offset: 500
            })
        },
        submitForm: function (e) {
            e.preventDefault();

            var form = $(this);

            if (!app.validateForm(form)) return false;

            var str = form.serialize();

                    // серверная часть

            $.ajax({
                type: 'POST',
                url: '/php/send_mail.php',
                data: str,
                success: function(data){
                    $('form').remove();
                    var node = $('<div>', {
                        text: 'Ваше сообщение успешно отправлено!'
                    }).css({
                        'font-family': 'helveticaneuecyrultralight',
                        'text-transform' : 'uppercase',
                        'text-align' : 'center',
                        'font-size' : '34px'
                    }).insertAfter('.form__block .container-name');
                }
            })
        },
        validateForm : function (form) {
            var inputs = form.find('input, textarea'),
                valid = true;

            $.each(inputs, function (index, val) {
                var input = $(val),
                    label = $(val).closest('span').find('label span'),
                    val = input.val(),
                    formGroup = input.parents('.input--chisato'),
                    labels = formGroup.find('label').text().toLowerCase(),
                    textError = 'Введите ' + labels;



                if (val.length === 0)
                {
                    input.addClass('has-error').removeClass('has-success');
                    label.text(textError);
                    valid = false;
                }
                else {
                    input.removeClass('has-error');
                }


            });
            return valid;
        },
        textFilled: function () {
            var $this = $(this),
                length = $this.val().length;

            if (length !== 0) {
                $this.closest('span').addClass('input--filled');
            } else {
                $this.closest('span').removeClass('input--filled');
            }
        },
        removeError : function () {
            $(this).removeClass('has-error');
        },
        ya: function () {
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function() {
                    try {
                        w.yaCounter31273938 = new Ya.Metrika({
                            id:31273938,
                            clickmap:true,
                            trackLinks:true,
                            accurateTrackBounce:true,
                            webvisor:true,
                            trackHash:true
                        });
                    } catch(e) { }
                });

                var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () { n.parentNode.insertBefore(s, n); };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://mc.yandex.ru/metrika/watch.js";

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else { f(); }
            })(document, window, "yandex_metrika_callbacks");
        }
    }
})();

app.init();