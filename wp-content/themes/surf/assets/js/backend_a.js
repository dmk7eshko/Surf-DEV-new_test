/*
 File called in that way specially for adblocks.
 If filename will contains a word "analytics", then
 adblocks will block this file.
 So - do not rename it, pls.
 */

// ------------ Backend Analytics ----------- //

  // Form closer
  const formCloser = document.querySelector('.js-form-closer a');

  formCloser && formCloser.addEventListener('click', function (e) {
    e.preventDefault();
    document.referrer !== '' ? history.back() : location.href = '/';
  });

(function( $ ) {
    // --- Check analytics --- //
    fetch( 'https://stats.g.doubleclick.net/j/collect' )
        .catch( function () {
            document.dispatchEvent( new CustomEvent( 'adBlockEnabled' ) );
            window.anlyticsDisabled = true;
        });
    // --- /Check analytics --- //

    // --- Helpers --- //
    function getCookie( name ) {
        let matches = document.cookie.match(new RegExp(
            "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
        ));

        return matches ? decodeURIComponent(matches[1]) : undefined;
    }

    function setCookie( name, value, options = {} ) {
        options = {
            path: '/',
            ...options
        };

        if ( options.expires instanceof Date ) {
            options.expires = options.expires.toUTCString();
        }

        let updatedCookie = encodeURIComponent( name ) + "=" + encodeURIComponent( value );

        for ( let optionKey in options ) {
            updatedCookie += "; " + optionKey;
            let optionValue = options[ optionKey ];
            if ( optionValue !== true ) {
                updatedCookie += "=" + optionValue;
            }
        }

        document.cookie = updatedCookie;
    }

    function generateUid() {
        return 'xxxxxxxxx'.replace( /[xy]/g, function() {
            return parseInt( Math.random() * 10 );
        });
    }

    function baCollectData() {
        var data = JSON.parse( sessionStorage.getItem( 'baData' ) );

        if ( ! data || data === '' || data === '{}' ) {
            data = {};
            var cId = getCookie('_ga');

            if (cId) {
                cId = cId.split('.');
                cId = cId[cId.length - 2] + '.' + cId[cId.length - 1];
            } else {
                cId = generateUid() + '.' + Date.now();
                setCookie('_ga', 'GA1.1.' + cId);
            }

            var campaign = document.location.search.match(/utm_campaign=([^&]*)/);
            var source = document.location.search.match(/utm_source=([^&]*)/);
            var gclid = document.location.search.match(/gclid=([^&]*)/);
            var channel = document.location.search.match(/utm_medium=([^&]*)/);
            var terms = document.location.search.match(/utm_term=([^&]*)/);
            var content = document.location.search.match(/utm_content=([^&]*)/);

            data.cid = cId;
            data.dh = document.location.host;
            data.dp = document.location.pathname;
            data.dt = document.title;
            data.dl = document.location.href;
            data.ua = navigator.userAgent;
            data.cn = campaign && campaign[1] ? campaign[1] : '(direct)';
            data.cs = source && source[1] ? source[1] : '(direct)';
            data.cm = channel && channel[1] ? channel[1] : '(not set)';
            data.ck = terms && terms[1] ? terms[1] : '(not set)';
            data.cc = content && content[1] ? content[1] : '(not set)';
            data.gclid = gclid && gclid[1] ? gclid[1] : '(not set)';

            if ( data.cn === '(direct)' && data.cs === '(direct)' ) {
                data.dr = document.referrer === '' ? '(direct)' : document.referrer;
            }

            if ( ! window.isStartSession ) {
                window.isStartSession = true;
                data.sc = 'start';
            }

            sessionStorage.setItem( 'baData', JSON.stringify( data ) );
        }
    }

    function baSendEvent( data, isHr ) {
        var defaultData = JSON.parse( sessionStorage.getItem( 'baData' ) );

        for ( var attrname in data ) {
            defaultData[attrname] = data[attrname];
        }

        $.ajax({
            url: scripts_data.admin_ajax,
            type: 'POST',
            data: {
                action: 'send_ga_event',
                data,
                is_hr_event: isHr
            }
        });
    }

    function getScrollPercent() {
        var h = document.documentElement,
            b = document.body,
            st = 'scrollTop',
            sh = 'scrollHeight';
        return parseInt( (h[st]||b[st]) / ((h[sh]||b[sh]) - h.clientHeight) * 100 );
    }
    // --- /Helpers --- //

    // Collect main data.
    $( document ).on( 'adBlockEnabled', function() {
        baCollectData();

        window.savedScrollPercent = 0;

        // Send pageview.
        baSendEvent( { t: 'pageview' }, false );

        // Tag - Event. 60_sec
        setTimeout(function () {
            baSendEvent({
                t: 'event',
                ec: 'Timer 60sec',
                ea: document.location.href,
                el: window.savedScrollPercent
            }, false );
        }, 60000 ) // 60 sec.

        $( window ).on( 'scroll', function () {
            var scroll = getScrollPercent();

            if ( scroll < 10 && window.savedScrollPercent !== 1 && window.savedScrollPercent < 10 ) {
                window.savedScrollPercent = 1;

                baSendEvent({
                    t: 'event',
                    ec: 'Scroll depth',
                    ea: document.location.href,
                    el: 0
                }, false );
            }

            if ( scroll > 10 && scroll < 30 && window.savedScrollPercent !== 10 && window.savedScrollPercent < 30 ) {
                window.savedScrollPercent = 10;

                baSendEvent({
                    t: 'event',
                    ec: 'Scroll depth',
                    ea: document.location.href,
                    el: 10
                }, false );
            }

            if ( scroll > 30 && scroll < 60 && window.savedScrollPercent !== 30 && window.savedScrollPercent < 60 ) {
                window.savedScrollPercent = 30;

                baSendEvent({
                    t: 'event',
                    ec: 'Scroll depth',
                    ea: document.location.href,
                    el: 30
                }, false );
            }

            if ( scroll > 60 && scroll < 90 && window.savedScrollPercent !== 60 && window.savedScrollPercent < 90 ) {
                window.savedScrollPercent = 60;

                baSendEvent({
                    t: 'event',
                    ec: 'Scroll depth',
                    ea: document.location.href,
                    el: 60
                }, false );
            }

            if ( scroll > 90 && window.savedScrollPercent !== 90 ) {
                window.savedScrollPercent = 90;

                baSendEvent({
                    t: 'event',
                    ec: 'Scroll depth',
                    ea: document.location.href,
                    el: 90
                }, false );
            }
        });

        // Tag - Click Send form
        $( document ).on( 'click', '#send', function () {
            baSendEvent({
                t: 'event',
                ec: 'Clicks',
                ea: 'Click Send Form',
                el: 'clickSubmit',
            }, false );
        });

        // Tag - Email clicked Hello
        $( document ).on( 'click', '[href="mailto:hello@surfstudio.ru"],[href="mailto:hello@surf.dev"]', function () {
            baSendEvent({
                t: 'event',
                ec: 'Clicks',
                ea: 'Email Click',
                el: 'mailClick',
            }, false );
        });

        // Tag - Email clicked Job
        $( document ).on( 'click', '[href="mailto:job@surfstudio.ru"]', function () {
            baSendEvent({
                t: 'event',
                ec: 'Clicks',
                ea: 'Email Click',
                el: 'Job',
            }, true );
        });

        // Tag - Email copied Hello
        $( '[href="mailto:hello@surfstudio.ru"],[href="mailto:hello@surf.dev"]' ).on('copy', function () {
            baSendEvent({
                t: 'event',
                ec: 'Clicks',
                ea: 'Email Click',
                el: 'mailClick',
            }, false );
        });

        // Tag - Email copied Job
        $( '[href="mailto:job@surfstudio.ru"]' ).on( 'copy', function () {
            baSendEvent({
                t: 'event',
                ec: 'Clicks',
                ea: 'Email Click',
                el: 'Job',
            }, true );
        });

        // Tag - Event. JS errors
        $( window ).on( 'error', function( errorMsg, url, lineNumber ) {
            baSendEvent({
                t: 'event',
                ec: 'JS Errors',
                ea: errorMsg,
                el: lineNumber + ':' + url,
            }, false );
        });

        // Tag - Event. Link Click
        $( document ).on( 'click', 'a', function( event ) {
            baSendEvent({
                t: 'event',
                ec: 'Clicks',
                ea: document.location.href,
                el: event.target.innerText,
            }, false );
        });

        // Tag - Phone number clicked
        $( document ).on( 'click', 'a[href^="tel:"]', function() {
            baSendEvent({
                t: 'event',
                ec: 'Clicks',
                ea: 'Phone Click',
                el: 'phoneClick',
            }, false );
        });

        // Tag - Phone number copied
        $( 'a[href^="tel:"]' ).on( 'copy contextmenu', function() {
            baSendEvent({
                t: 'event',
                ec: 'Copies',
                ea: 'Phone copy',
                el: 'copyPhone',
            }, false );
        });

        // Tag - Form Submit new
        if ( $( '.success' ).length > 0 && document.location.pathname === '/' ) {
            baSendEvent({
                t: 'event',
                ec: 'Form Submit new',
                ea: 'Form submitted',
                el: 'stitle',
            }, false );
        }

        $( window ).on( 'beforeunload', function () {
            baSendEvent( { t: 'pageview', sc: 'end' }, false );
        });
    });
})(jQuery)
