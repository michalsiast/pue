<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {!! SEOMeta::generate() !!}

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('image/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('image/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('image/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('image/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('image/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('image/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('image/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('image/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('image/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('image/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('image/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('image/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('image/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('image/favicon//manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">


{{--    <link href="{{asset('css/vendors/bootstrap.css')}}" rel="stylesheet">--}}
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="{{asset('css/main.css')}}?version=1" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.3/simple-lightbox.min.css" integrity="sha512-Ne9/ZPNVK3w3pBBX6xE86bNG295dJl4CHttrCp3WmxO+8NQ2Vn8FltNr6UsysA1vm7NE6hfCszbXe3D6FUNFsA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <script>
        const BASE_URL = '{{url()->to('/')}}/';
        const CSRF_TOKEN = '{{csrf_token()}}';
        const SITE_LANG = '{{app()->getLocale()}}';
    </script>

    @stack('scrips.head.bottom')
    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "https:\/\/ekokan.com.pl\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.7.1" } };
        /*! This file is auto-generated */
        !function (i, n) { var o, s, e; function c(e) { try { var t = { supportTests: e, timestamp: (new Date).valueOf() }; sessionStorage.setItem(o, JSON.stringify(t)) } catch (e) { } } function p(e, t, n) { e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0); var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data), r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data)); return t.every(function (e, t) { return e === r[t] }) } function u(e, t, n) { switch (t) { case "flag": return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"); case "emoji": return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b") }return !1 } function f(e, t, n) { var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"), a = r.getContext("2d", { willReadFrequently: !0 }), o = (a.textBaseline = "top", a.font = "600 32px Arial", {}); return e.forEach(function (e) { o[e] = t(a, e, n) }), o } function t(e) { var t = i.createElement("script"); t.src = e, t.defer = !0, i.head.appendChild(t) } "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = { everything: !0, everythingExceptFlag: !0 }, e = new Promise(function (e) { i.addEventListener("DOMContentLoaded", e, { once: !0 }) }), new Promise(function (t) { var n = function () { try { var e = JSON.parse(sessionStorage.getItem(o)); if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests } catch (e) { } return null }(); if (!n) { if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try { var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));", r = new Blob([e], { type: "text/javascript" }), a = new Worker(URL.createObjectURL(r), { name: "wpTestEmojiSupports" }); return void (a.onmessage = function (e) { c(n = e.data), a.terminate(), t(n) }) } catch (e) { } c(n = f(s, u, p)) } t(n) }).then(function (e) { for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]); n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function () { n.DOMReady = !0 } }).then(function () { return e }).then(function () { var e; n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji))) })) }((window, document), window._wpemojiSettings);
        /* ]]> */
    </script>
    <style id="wp-emoji-styles-inline-css" type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" id="wp-block-library-css"
          href="{{asset('css/style.min.css')}}" type="text/css"
          media="all">
    <style id="wp-block-library-inline-css" type="text/css">
        .has-text-align-justify {
            text-align: justify;
        }
    </style>
    <link rel="stylesheet" id="mediaelement-css"
          href="{{asset('js/mediaelementplayer-legacy.min.css')}}"
          type="text/css" media="all">
    <link rel="stylesheet" id="wp-mediaelement-css"
          href="{{asset('js/wp-mediaelement.min.css')}}" type="text/css"
          media="all">
    <style id="classic-theme-styles-inline-css" type="text/css">
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id="global-styles-inline-css" type="text/css">
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0, 44rem;
            --wp--preset--spacing--30: 0, 67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1, 5rem;
            --wp--preset--spacing--60: 2, 25rem;
            --wp--preset--spacing--70: 3, 38rem;
            --wp--preset--spacing--80: 5, 06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel="stylesheet" id="cookie-law-info-css"
          href="{{asset('css/cookie-law-info/cookie-law-info-public.css')}}"
          type="text/css" media="all">
    <link rel="stylesheet" id="cookie-law-info-gdpr-css"
          href="{{asset('css/cookie-law-info/cookie-law-info-gdpr.css')}}"
          type="text/css" media="all">
    <link rel="stylesheet" id="hc-bootstrap-css"
          href="{{asset('css/hybrid-composer/bootstrap.css')}}"
          type="text/css" media="all">
    <link rel="stylesheet" id="hc-style-css"
          href="{{asset('css/hybrid-composer/style.css')}}" type="text/css" media="all">
    <link rel="stylesheet" id="hc-animations-css"
          href="{{asset('css/hybrid-composer/animations.css')}}" type="text/css"
          media="all">
    <link rel="stylesheet" id="hc-scripts/flexslider/flexslider.css-css"
          href="{{asset('css/hybrid-composer/flexslider.css')}}"
          type="text/css" media="all">

    <link rel="stylesheet" id="hc-css/content-box.css-css"
          href="{{asset('css/hybrid-composer/content-box.css')}}" type="text/css"
          media="all">
    <link rel="stylesheet" id="hc-css/components.css-css"
          href="{{asset('css/hybrid-composer/components.css')}}" type="text/css"
          media="all">
    <link rel="stylesheet" id="icons-mind-line-css"
          href="{{asset('css/hybrid-composer/line-icons.min.css')}}"
          type="text/css" media="all">
    <link rel="stylesheet" id="hc_css_skin-css" href="{{asset('css/themes/skin.css')}}"
          type="text/css" media="all">
    <style id="hc_css_skin-inline-css" type="text/css">
        .navbar .navbar-nav>li:hover>a,
        .navbar .navbar-nav>li>a:before,
        .dropdown-menu:hover,
        .btn:before,
        .advs-box.boxed-inverse:before,
        .title-base h2:after,
        .header-base .title-base h1:after,
        .pagination>li.page.active a,
        .pagination>li.page:hover a,
        .subline-bar li:hover,
        .btn-text:before,
        .advs-box-multiple div.circle {
            background-color: #F4932A;
        }

        .white .btn.btn-yellow:before,
        .btn-yellow>.btn:before,
        .btn:before,
        .flex-control-paging li a.flex-active,
        .img-box.i-center .im-record-music:after,
        .box-steps .step-item:hover:before,
        .progress-bar,
        .menu-transparent.scroll-css .btn.btn-border,
        .accordion-list .list-group-item>a:after,
        .accordion-list .list-group-item:before,
        .adv-img-classic-box .sub-text:before,
        .mega-tabs .tab-box .nav-tabs>li.active>a,
        .bg-color,
        .timeline>li>.timeline-badge,
        .timeline>li>.timeline-label:before,
        .list-items .list-item:before,
        .nav.inner.ms-minimal>li:before,
        .section-bg-color,
        input.btn:not(.btn-border),
        #sb-main .sb-chat-btn,
        #sb-main .sb-chat-header,
        #sb-main .sb-card.sb-card-right .sb-files a,
        #sb-main .sb-header,
        #sb-main .sb-chat .sb-card.sb-card-right,
        #sb-main .sb-card-contacts .sb-btn-email,
        .sb-chat .sb-card.sb-card-right.sb-card-no-msg .sb-files a,
        .sb-cnt-global:not(.sb-chat-cnt) .sb-btn,
        .sb-submit,
        .list-blog input[type="submit"],
        body .woocommerce #respond input#submit,
        .woocommerce a.button,
        .woocommerce button.button,
        .woocommerce input.button,
        .woocommerce #review_form #respond .form-submit input,
        .header-base .title-base h1:before,
        .pulse-line i:before,
        .pulse-line,
        .ul-squares li:before,
        .ul-squares li:after,
        .adv-img-side-content .caption p.sub,
        footer .social-group a i.circle.fa:hover {
            background-color: #F4932A !important;
        }

        .btn:not(.btn-border):hover,
        .btn-border,
        .btn-border i,
        .footer-menu a:hover,
        header.bg-transparent .navbar-mini .navbar-form .btn:hover,
        header .navbar-mini i.fa:hover,
        header .btn-border,
        .ul-dots li:before,
        .advs-box-side-icon .icon-box i,
        .niche-box-team .content-box h4,
        .advs-box .tag-row i,
        .btn:not(.btn-border):hover i,
        .box-steps .step-number,
        .mega-menu .fa-ul .fa-li,
        .icon-box-cell i,
        .advs-box.advs-box-top-icon.boxed .icon,
        .breadcrumb>li+li:before,
        .list-items .list-item span,
        .porfolio-bar div i,
        [class*=col-md-]>.tag-row i,
        .content>.tag-row i,
        .box-menu-inner .icon-box i,
        .text-color.countdown .countdown-values,
        body.woocommerce-account .addresses .title .edit,
        .info-box i,
        .niche-box-post .social-group i:hover,
        .pagination.pagination-lg>li:not(.page)>a:hover,
        .advs-box-top-icon:hover .extra-content {
            color: #F4932A
        }

        .navbar .navbar-nav.lan-menu li>a:hover,
        .navbar-main .btn-search:hover span,
        .navbar-main .btn-search:hover .fa-close:before,
        .btn-border.btn-yellow,
        .btn-yellow>.btn-border,
        .img-box.i-center .im-record-music,
        .text-color,
        .white .btn-text:hover,
        .adv-img-classic-box p.sub-text,
        .white form p,
        .box-steps .step-item:after,
        .breadcrumb>.active,
        .nav.inner.ms-minimal>li.active>a,
        .adv-img h2,
        .adv-circle h2,
        header .side-menu-fixed .btn:hover,
        .text-color>.btn-text,
        .text-color .btn,
        .white .breadcrumb>.active,
        .icon-color i.icon,
        .inner.ms-minimal>li:hover>a,
        .woocommerce-info::before,
        body .woocommerce a.remove:hover,
        .btn-text i,
        .projects-slider .caption-bottom p,
        .projects-slider .caption h3,
        .counter-twoblocks.icon-box-top-bottom .icon-box-cell p {
            color: #F4932A !important;
        }

        .white .btn.btn-yellow,
        .white .btn-yellow>.btn,
        .btn-border:hover,
        .btn,
        .btn-text.text-color,
        .form-control:focus,
        .white .icon-box:not(.icon-box-top-bottom) .icon-box-cell:first-child,
        div.white .countdown>div:after,
        .img-box.thumbnail span:after,
        .img-box.thumbnail span:before,
        .name-box i,
        .list-item-img .icon,
        .white .form-control,
        .mega-tabs .nav-tabs,
        .pricing-table,
        .advs-box-top-icon .extra-content,
        .advs-box-side-icon .extra-content,
        .mi-menu ul li:hover>a,
        .mi-menu ul li.active>a,
        .img-box .caption,
        .timeline>li>.timeline-panel,
        .advs-box-top-icon-img .extra-content,
        .album-box>.img-box,
        .porfolio-bar div i:before,
        .widget .list-group-item.active,
        .list-group-item:hover,
        .list-blog a.img-box,
        .comment-list img,
        .text-color>.btn-text,
        .white form .btn.btn-border:hover,
        .sb-cnt-global:not(.sb-chat-cnt) .sb-btn,
        .sb-submit,
        .woocommerce-MyAccount-navigation li.is-active,
        .home.blog .list-blog>ul>li:hover,
        .searchform input[type="text"]:focus,
        .navbar-middle .custom-area .custom-menu span {
            border-color: #F4932A !important;
        }

        .navbar-brand img,
        header .brand img {
            max-height: 70px;
        }
    </style>
    <link rel="stylesheet" id="google-font-css"
          href="https://fonts.googleapis.com/css?family=Coda%7CRajdhani%3A400%2C500%2C600%2C700%7CRubik%3A400%2C500&amp;ver=1.0"
          type="text/css" media="all">
    <link rel="stylesheet" id="rs-plugin-settings-css"
          href="{{asset('css/revslider/rs6.css')}}" type="text/css"
          media="all">
    <style id="rs-plugin-settings-inline-css" type="text/css">
        #rs-demo-id {}
    </style>
    <link rel="stylesheet" id="jetpack_css-css"
          href="{{asset('css/jetpack/jetpack.css')}}" type="text/css" media="all">
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"
            id="jquery-core-js"></script>
    <script type="text/javascript" src="{{asset('js/jquery-migrate.min.js')}}"
            id="jquery-migrate-js"></script>
    <script type="text/javascript" id="cookie-law-info-js-extra">
        /* <![CDATA[ */
        var Cli_Data = { "nn_cookie_ids": [], "cookielist": [], "non_necessary_cookies": [], "ccpaEnabled": "", "ccpaRegionBased": "", "ccpaBarEnabled": "", "strictlyEnabled": ["necessary", "obligatoire"], "ccpaType": "gdpr", "js_blocking": "1", "custom_integration": "", "triggerDomRefresh": "", "secure_cookies": "" };
        var cli_cookiebar_settings = { "animate_speed_hide": "500", "animate_speed_show": "500", "background": "#FFF", "border": "#b1a6a6c2", "border_on": "", "button_1_button_colour": "#f4932a", "button_1_button_hover": "#c37622", "button_1_link_colour": "#fff", "button_1_as_button": "1", "button_1_new_win": "", "button_2_button_colour": "#333", "button_2_button_hover": "#292929", "button_2_link_colour": "#444", "button_2_as_button": "", "button_2_hidebar": "", "button_3_button_colour": "#dedfe0", "button_3_button_hover": "#b2b2b3", "button_3_link_colour": "#333333", "button_3_as_button": "1", "button_3_new_win": "", "button_4_button_colour": "#dedfe0", "button_4_button_hover": "#b2b2b3", "button_4_link_colour": "#333333", "button_4_as_button": "1", "button_7_button_colour": "#f4932a", "button_7_button_hover": "#c37622", "button_7_link_colour": "#fff", "button_7_as_button": "1", "button_7_new_win": "", "font_family": "Helvetica, Arial, sans-serif", "header_fix": "", "notify_animate_hide": "1", "notify_animate_show": "1", "notify_div_id": "#cookie-law-info-bar", "notify_position_horizontal": "right", "notify_position_vertical": "bottom", "scroll_close": "", "scroll_close_reload": "", "accept_close_reload": "", "reject_close_reload": "", "showagain_tab": "", "showagain_background": "#fff", "showagain_border": "#000", "showagain_div_id": "#cookie-law-info-again", "showagain_x_position": "100px", "text": "#7f7f7f", "show_once_yn": "", "show_once": "10000", "logging_on": "", "as_popup": "", "popup_overlay": "1", "bar_heading_text": "", "cookie_bar_as": "banner", "popup_showagain_position": "bottom-right", "widget_position": "right" };
        var log_object = { "ajax_url": "https:\/\/ekokan.com.pl\/wp-admin\/admin-ajax.php" };
        /* ]]> */
    </script>
    <script type="text/javascript"
            src="{{asset('js/cookie-law-info/cookie-law-info-public.js')}}"
            id="cookie-law-info-js"></script>
    <script type="text/javascript"
            src="{{asset('js/revslider/rbtools.min.js')}}"
            id="tp-tools-js"></script>
    <script type="text/javascript"
            src="{{asset('js/revslider/rs6.min.js')}}"
            id="revmin-js"></script>
    <link rel="https://api.w.org/" href="https://ekokan.com.pl/wp-json/">
    <link rel="alternate" title="JSON" type="application/json" href="https://ekokan.com.pl/wp-json/wp/v2/pages/158">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://ekokan.com.pl/xmlrpc.php?rsd">
    <meta name="generator" content="WordPress 6.7.1">
    <link rel="canonical" href="https://ekokan.com.pl/">
    <link rel="shortlink" href="https://ekokan.com.pl/">
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
          href="https://ekokan.com.pl/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fekokan.com.pl%2F">
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
          href="https://ekokan.com.pl/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fekokan.com.pl%2F&amp;format=xml">
    <style>
        img#wpstats {
            display: none
        }
    </style>
    <meta name="generator"
          content="Powered by Slider Revolution 6.4.8 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface.">
    <script type="text/javascript">function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl) if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl) if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl) if (sl > nl[i] && nl[i] > 0) { sl = nl[i]; ix = i; }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                if (window.rs_init_css === undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));
                document.getElementById(e.c).height = newh + "px";
                window.rs_init_css.innerHTML += "#" + e.c + "_wrapper { height: " + newh + "px }";
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };</script>
    <style type="text/css" id="wp-custom-css">
        img.logo-default {
            max-height: 90px !important;
        }

        .cli-bar-message {
            text-align: right !important;
        }
    </style>
    <script src="{{asset('js/wp-emoji-release.min.js')}}" defer=""></script>
</head>

<body class="home page-template-default page page-id-158 boxed-layout device-l" style="background-color: #F4932A;">
<div id="preloader" style="display: none;"></div>
<div class=" content-parallax">
    <header class="scroll-change fixed-top menu-top-logo" data-menu-anima="fade-in" data-menu-height="139"
            style="height: 139px;">
        <div class="navbar navbar-default navbar-fixed-top " role="navigation">
            <div class="navbar navbar-main navbar-middle">
                <div class="container">
                    <div class="scroll-hide">
                        <div class="container">
                            <a class="navbar-brand center" href="/" style="">
                                <img class="logo-default"
                                     src="{{asset('images/logo_ekokan_jpg.jpg')}}"
                                     alt="" style="">
                                <img class="logo-retina"
                                     src="{{asset('images/logo_ekokan_jpg.jpg')}}"
                                     alt="" style=""></a>
                        </div>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="/" style=""><img class="logo-default"
                                                                                           src="{{asset('images/logo_ekokan_jpg.jpg')}}" alt=""
                                                                                           style=""><img class="logo-retina"
                                                                                                         src="{{asset('images/logo_ekokan_jpg.jpg')}}" alt=""
                                                                                                         style=""></a>
                    </div>
                    <div class="collapse navbar-collapse">
                        @include('default.nav_item.main', ['name' => 'main'])

                        <div class="nav navbar-nav navbar-right">
                            <div class="custom-area"><a href="{{route('contact.show')}}"
                                                        class="btn btn-sm hidden-sm">Kontakt</a>
                                <div class="custom-menu"><span>{{getConstField('company_nip')}}</span><span><a href="tel:{{str_replace(' ', '', getConstField('phone'))}}">tel. {{getConstField('phone')}}</a></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
{{--@include('default._helpers.lang_nav')--}}


@yield('content')

<i class="scroll-top scroll-top-mobile fa fa-sort-asc show" style="opacity: 0;"></i>
<footer class=" ">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 footer-left footer-left">
                    <img class="logo" src="{{asset('images/logo1.svg')}}" alt="logo">
                    <p class="text-s">{{getConstField('comapny_description')}}</p>
                    <hr class="space xs">
                    <div class="btn-group navbar-social">
                        <div class="btn-group social-group social-colors">
                            @if(!empty(getConstField('facebook')))
                                <a target="_blank" rel="nofollow" href="{{ getConstField('facebook') }}">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            @endif
                            @if(!empty(getConstField('twitter')))
                                <a target="_blank" rel="nofollow" href="{{ getConstField('twitter') }}">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            @endif
                            @if(!empty(getConstField('youtube')))
                                <a target="_blank" rel="nofollow" href="{{ getConstField('youtube') }}">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            @endif
                            @if(!empty(getConstField('linkedin')))
                                <a target="_blank" rel="nofollow" href="{{ getConstField('linkedin') }}">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            @endif

                        </div>
                    </div>
                </div>
                <div class="col-md-6 footer-center">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Przydatne linki</h4>
                                @include('default.nav_item.footer', ['name' => 'footer'])

                        </div>

                        <div class="col-md-6">
                            <h4>Nasza Firma</h4>
                            @include('default.nav_item.footer', ['name' => 'footer2'])
                        </div>
                    </div>
                </div>
                <div class="col-md-3 footer-right ">
                    <div class="footer-box">
                        <h4>{{ getConstField('heading_promise') }}</h4>
                        @if(!empty(getConstField('description_promise')))
                            <ul class="fa-ul">
                                @php
                                    $promiseList = getConstField('description_promise');
                                    $dom = new \DOMDocument();
                                    $dom->loadHTML('<?xml encoding="utf-8" ?>' . $promiseList, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
                                    $listItems = $dom->getElementsByTagName('li');
                                @endphp

                                @foreach($listItems as $listItem)
                                    <li><i class="fa-li fa-solid fa-circle-info"></i> {!! $listItem->nodeValue !!}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div><span class="space"></span><span class="space"></span>
                </div>
            </div>
        </div>
        <div class="row copy-row">
            <div class="col-md-12 copy-text">© <?php echo date("Y") ?> PUE Polski Gaz </div>
        </div>
    </div>
</footer>
<!--googleoff: all-->
<div id="cookie-law-info-bar" data-nosnippet="true" data-cli-style="cli-style-v2"
     style="background-color: rgb(255, 255, 255); color: rgb(127, 127, 127); font-family: Helvetica, Arial, sans-serif; bottom: 0px; position: fixed; display: none;">
        <span>
            <div class="cli-bar-container cli-style-v2">
                <div class="cli-bar-message">Ta strona używa ciasteczek (cookies) i przetwarza dane osobowe dzięki
                    którym nasz serwis może działać lepiej.</div>
                <div class="cli-bar-btn_container"><a href="/polityka-prywatnosci/"
                                                      id="CONSTANT_OPEN_URL" class="cli-plugin-main-link" style="color: rgb(68, 68, 68);">Polityka
                        prywatności</a><a id="wt-cli-accept-all-btn" role="button" data-cli_action="accept_all"
                                          class="wt-cli-element medium cli-plugin-button wt-cli-accept-all-btn cookie_action_close_header cli_action_button"
                                          style="color: rgb(255, 255, 255); background-color: rgb(244, 147, 42);">OK, rozumiem</a></div>
            </div>
        </span></div>
<div id="cookie-law-info-again" data-nosnippet="true"
     style="background-color: rgb(255, 255, 255); color: rgb(127, 127, 127); position: fixed; font-family: Helvetica, Arial, sans-serif; width: auto; bottom: 0px; right: 100px; display: none;">
    <span id="cookie_hdr_showagain">Manage consent</span></div>
<div class="cli-modal" data-nosnippet="true" id="cliSettingsPopup" tabindex="-1" role="dialog"
     aria-labelledby="cliSettingsPopup" aria-hidden="true">
    <div class="cli-modal-dialog" role="document">
        <div class="cli-modal-content cli-bar-popup">
            <button type="button" class="cli-modal-close" id="cliModalClose">
                <svg class="" viewBox="0 0 24 24">
                    <path
                        d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z">
                    </path>
                    <path d="M0 0h24v24h-24z" fill="none"></path>
                </svg>
                <span class="wt-cli-sr-only">Close</span>
            </button>
            <div class="cli-modal-body">
                <div class="cli-container-fluid cli-tab-container">
                    <div class="cli-row">
                        <div class="cli-col-12 cli-align-items-stretch cli-px-0">
                            <div class="cli-privacy-overview">
                                <h4>Privacy Overview</h4>
                                <div class="cli-privacy-content">
                                    <div class="cli-privacy-content-text">This website uses cookies to improve your
                                        experience while you navigate through the website. Out of these, the cookies
                                        that are categorized as necessary are stored on your browser as they are
                                        essential for the working of basic functionalities of the ...</div>
                                </div>
                                <a class="cli-privacy-readmore" aria-label="Show more" role="button"
                                   data-readmore-text="Show more" data-readless-text="Show less"></a>
                            </div>
                        </div>
                        <div class="cli-col-12 cli-align-items-stretch cli-px-0 cli-tab-section-container">
                            <div class="cli-tab-section">
                                <div class="cli-tab-header">
                                    <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                       data-target="necessary" data-toggle="cli-toggle-tab">
                                        Necessary </a>
                                    <div class="wt-cli-necessary-checkbox">
                                        <input type="checkbox" class="cli-user-preference-checkbox"
                                               id="wt-cli-checkbox-necessary" data-id="checkbox-necessary"
                                               checked="checked">
                                        <label class="form-check-label"
                                               for="wt-cli-checkbox-necessary">Necessary</label>
                                    </div>
                                    <span class="cli-necessary-caption">Always Enabled</span>
                                </div>
                                <div class="cli-tab-content">
                                    <div class="cli-tab-pane cli-fade" data-id="necessary">
                                        <div class="wt-cli-cookie-description">
                                            Necessary cookies are absolutely essential for the website to function
                                            properly. These cookies ensure basic functionalities and security
                                            features of the website, anonymously.
                                            <table class="cookielawinfo-row-cat-table cookielawinfo-winter">
                                                <thead>
                                                <tr>
                                                    <th class="cookielawinfo-column-1">Cookie</th>
                                                    <th class="cookielawinfo-column-3">Duration</th>
                                                    <th class="cookielawinfo-column-4">Description</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="cookielawinfo-row">
                                                    <td class="cookielawinfo-column-1">
                                                        cookielawinfo-checkbox-analytics</td>
                                                    <td class="cookielawinfo-column-3">11 months</td>
                                                    <td class="cookielawinfo-column-4">This cookie is set by
                                                        GDPR Cookie Consent plugin. The cookie is used to store
                                                        the user consent for the cookies in the category
                                                        "Analytics".</td>
                                                </tr>
                                                <tr class="cookielawinfo-row">
                                                    <td class="cookielawinfo-column-1">
                                                        cookielawinfo-checkbox-functional</td>
                                                    <td class="cookielawinfo-column-3">11 months</td>
                                                    <td class="cookielawinfo-column-4">The cookie is set by GDPR
                                                        cookie consent to record the user consent for the
                                                        cookies in the category "Functional".</td>
                                                </tr>
                                                <tr class="cookielawinfo-row">
                                                    <td class="cookielawinfo-column-1">
                                                        cookielawinfo-checkbox-necessary</td>
                                                    <td class="cookielawinfo-column-3">11 months</td>
                                                    <td class="cookielawinfo-column-4">This cookie is set by
                                                        GDPR Cookie Consent plugin. The cookies is used to store
                                                        the user consent for the cookies in the category
                                                        "Necessary".</td>
                                                </tr>
                                                <tr class="cookielawinfo-row">
                                                    <td class="cookielawinfo-column-1">
                                                        cookielawinfo-checkbox-others</td>
                                                    <td class="cookielawinfo-column-3">11 months</td>
                                                    <td class="cookielawinfo-column-4">This cookie is set by
                                                        GDPR Cookie Consent plugin. The cookie is used to store
                                                        the user consent for the cookies in the category "Other.
                                                    </td>
                                                </tr>
                                                <tr class="cookielawinfo-row">
                                                    <td class="cookielawinfo-column-1">
                                                        cookielawinfo-checkbox-performance</td>
                                                    <td class="cookielawinfo-column-3">11 months</td>
                                                    <td class="cookielawinfo-column-4">This cookie is set by
                                                        GDPR Cookie Consent plugin. The cookie is used to store
                                                        the user consent for the cookies in the category
                                                        "Performance".</td>
                                                </tr>
                                                <tr class="cookielawinfo-row">
                                                    <td class="cookielawinfo-column-1">viewed_cookie_policy</td>
                                                    <td class="cookielawinfo-column-3">11 months</td>
                                                    <td class="cookielawinfo-column-4">The cookie is set by the
                                                        GDPR Cookie Consent plugin and is used to store whether
                                                        or not user has consented to the use of cookies. It does
                                                        not store any personal data.</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cli-tab-section">
                                <div class="cli-tab-header">
                                    <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                       data-target="functional" data-toggle="cli-toggle-tab">
                                        Functional </a>
                                    <div class="cli-switch">
                                        <input type="checkbox" id="wt-cli-checkbox-functional"
                                               class="cli-user-preference-checkbox" data-id="checkbox-functional">
                                        <label for="wt-cli-checkbox-functional" class="cli-slider"
                                               data-cli-enable="Enabled" data-cli-disable="Disabled"><span
                                                class="wt-cli-sr-only">Functional</span></label>
                                    </div>
                                </div>
                                <div class="cli-tab-content">
                                    <div class="cli-tab-pane cli-fade" data-id="functional">
                                        <div class="wt-cli-cookie-description">
                                            Functional cookies help to perform certain functionalities like sharing
                                            the content of the website on social media platforms, collect feedbacks,
                                            and other third-party features.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cli-tab-section">
                                <div class="cli-tab-header">
                                    <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                       data-target="performance" data-toggle="cli-toggle-tab">
                                        Performance </a>
                                    <div class="cli-switch">
                                        <input type="checkbox" id="wt-cli-checkbox-performance"
                                               class="cli-user-preference-checkbox" data-id="checkbox-performance">
                                        <label for="wt-cli-checkbox-performance" class="cli-slider"
                                               data-cli-enable="Enabled" data-cli-disable="Disabled"><span
                                                class="wt-cli-sr-only">Performance</span></label>
                                    </div>
                                </div>
                                <div class="cli-tab-content">
                                    <div class="cli-tab-pane cli-fade" data-id="performance">
                                        <div class="wt-cli-cookie-description">
                                            Performance cookies are used to understand and analyze the key
                                            performance indexes of the website which helps in delivering a better
                                            user experience for the visitors.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cli-tab-section">
                                <div class="cli-tab-header">
                                    <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                       data-target="analytics" data-toggle="cli-toggle-tab">
                                        Analytics </a>
                                    <div class="cli-switch">
                                        <input type="checkbox" id="wt-cli-checkbox-analytics"
                                               class="cli-user-preference-checkbox" data-id="checkbox-analytics">
                                        <label for="wt-cli-checkbox-analytics" class="cli-slider"
                                               data-cli-enable="Enabled" data-cli-disable="Disabled"><span
                                                class="wt-cli-sr-only">Analytics</span></label>
                                    </div>
                                </div>
                                <div class="cli-tab-content">
                                    <div class="cli-tab-pane cli-fade" data-id="analytics">
                                        <div class="wt-cli-cookie-description">
                                            Analytical cookies are used to understand how visitors interact with the
                                            website. These cookies help provide information on metrics the number of
                                            visitors, bounce rate, traffic source, etc.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cli-tab-section">
                                <div class="cli-tab-header">
                                    <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                       data-target="advertisement" data-toggle="cli-toggle-tab">
                                        Advertisement </a>
                                    <div class="cli-switch">
                                        <input type="checkbox" id="wt-cli-checkbox-advertisement"
                                               class="cli-user-preference-checkbox" data-id="checkbox-advertisement">
                                        <label for="wt-cli-checkbox-advertisement" class="cli-slider"
                                               data-cli-enable="Enabled" data-cli-disable="Disabled"><span
                                                class="wt-cli-sr-only">Advertisement</span></label>
                                    </div>
                                </div>
                                <div class="cli-tab-content">
                                    <div class="cli-tab-pane cli-fade" data-id="advertisement">
                                        <div class="wt-cli-cookie-description">
                                            Advertisement cookies are used to provide visitors with relevant ads and
                                            marketing campaigns. These cookies track visitors across websites and
                                            collect information to provide customized ads.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cli-tab-section">
                                <div class="cli-tab-header">
                                    <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile"
                                       data-target="others" data-toggle="cli-toggle-tab">
                                        Others </a>
                                    <div class="cli-switch">
                                        <input type="checkbox" id="wt-cli-checkbox-others"
                                               class="cli-user-preference-checkbox" data-id="checkbox-others">
                                        <label for="wt-cli-checkbox-others" class="cli-slider"
                                               data-cli-enable="Enabled" data-cli-disable="Disabled"><span
                                                class="wt-cli-sr-only">Others</span></label>
                                    </div>
                                </div>
                                <div class="cli-tab-content">
                                    <div class="cli-tab-pane cli-fade" data-id="others">
                                        <div class="wt-cli-cookie-description">
                                            Other uncategorized cookies are those that are being analyzed and have
                                            not been classified into a category as yet.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cli-modal-footer">
                <div class="wt-cli-element cli-container-fluid cli-tab-container">
                    <div class="cli-row">
                        <div class="cli-col-12 cli-align-items-stretch cli-px-0">
                            <div class="cli-tab-footer wt-cli-privacy-overview-actions">

                                <a id="wt-cli-privacy-save-btn" role="button" tabindex="0" data-cli-action="accept"
                                   class="wt-cli-privacy-btn cli_setting_save_button wt-cli-privacy-accept-btn cli-btn">SAVE
                                    &amp; ACCEPT</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cli-modal-backdrop cli-fade cli-settings-overlay"></div>
<div class="cli-modal-backdrop cli-fade cli-popupbar-overlay"></div>
<!--googleon: all-->
<link rel="stylesheet" id="cookie-law-info-table-css"
      href="{{asset('css/cookie-law-info/cookie-law-info-table.css')}}"
      type="text/css" media="all">
<script type="text/javascript"
        src="{{asset('js/hybrid-composer/script.js')}}"
        id="hc_script-js"></script>
<script type="text/javascript" id="hc_script-js-after">
    /* <![CDATA[ */
    var ajax_url = 'https://ekokan.com.pl/wp-admin/admin-ajax.php';
    /* ]]> */
</script>
<script type="text/javascript"
        src="{{asset('js/hybrid-composer/bootstrap.min.js')}}"
        id="hc_bootstrap-js"></script>
<script type="text/javascript" src="{{asset('js/imagesloaded.min.js')}}"
        id="imagesloaded-js"></script>
<script type="text/javascript"
        src="{{asset('js/hybrid-composer/custom.js')}}"
        id="custom-js-js"></script>
<script type="text/javascript"
        src="{{asset('js/hybrid-composer/jquery.flexslider-min.js')}}"
        id="flexslider/jquery.flexslider-min.js-js"></script>

<script type="text/javascript"
        src="{{asset('js/hybrid-composer/jquery.progress-counter.js')}}"
        id="jquery.progress-counter.js-js"></script>
<script type="text/javascript"
        src="{{asset('js/hybrid-composer/parallax.min.js')}}"
        id="parallax.min.js-js"></script>
<script defer="" type="text/javascript" src="https://stats.wp.com/e-202503.js" id="jetpack-stats-js"></script>
<script type="text/javascript" id="jetpack-stats-js-after">
    /* <![CDATA[ */
    _stq = window._stq || [];
    _stq.push(["view", { v: 'ext', blog: '203138821', post: '158', tz: '0', srv: 'ekokan.com.pl', j: '1:12.6.3' }]);
    _stq.push(["clickTrackerInit", "203138821", "158"]);
    /* ]]> */
</script>

<img src="https://pixel.wp.com/g.gif?v=ext&amp;blog=203138821&amp;post=158&amp;tz=0&amp;srv=ekokan.com.pl&amp;j=1%3A12.6.3&amp;host=ekokan.com.pl&amp;ref=&amp;fcp=0&amp;rand=0.1427578223299968"
     alt="" width="6" height="5" id="wpstats">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.3/simple-lightbox.jquery.min.js" integrity="sha512-iJCzEG+s9LeaFYGzCbDInUbnF03KbE1QV1LM983AW5EHLxrWQTQaZvQfAQgLFgfgoyozb1fhzhe/0jjyZPYbmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script><script src="{{asset('js/frontend.js')}}"></script>
<script src="{{asset('js/main.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>

@stack('scripts.body.bottom')
</body>
</html>
