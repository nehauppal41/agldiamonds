{{--
    SECTION 6 - BOTTOM BLUE BAR
    Navy footer with gold top edge and chamfered corners: address, phone numbers
    and the "Real Gemstones. Real Value." tagline. Content is hard-coded.
    Fully static (inline SVG icons, no images needed).

    Tip: the main file's <head> should also contain
      <meta name="format-detection" content="telephone=no">
    so phones do not turn the numbers into blue links.
--}}
<style>
.agl-bottombar {
    --agl-cream: #f4f1e8;
    --agl-gold-text: #d9ae52;
    position: absolute;
    left: 0;
    top: 882px;
    width: 1536px;
    height: 95px;
    z-index: 2;
}

.agl-bottombar__bg {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    display: block;
}

.agl-bottombar__pin   { position: absolute; left: 82px;  top: 29px; width: 26px; height: 34px; }
.agl-bottombar__phone { position: absolute; left: 712px; top: 32px; width: 29px; height: 29px; }

.agl-bottombar__text {
    position: absolute;
    top: 35px;
    color: var(--agl-cream);
    font: 500 19.6px/22px 'EB Garamond', Georgia, serif;
    white-space: nowrap;
}

/* Phones auto-turn numbers into blue underlined links: keep the original look */
.agl-bottombar a,
.agl-bottombar a[href^="tel"],
.agl-bottombar a[x-apple-data-detectors],
.agl-bottombar__text a {
    color: inherit !important;
    text-decoration: none !important;
    font: inherit !important;
    letter-spacing: inherit !important;
    pointer-events: none;
}
.agl-bottombar__text { -webkit-text-size-adjust: 100%; }

.agl-bottombar__address { left: 126px; }
.agl-bottombar__phones  { left: 757px; }
.agl-bottombar__sep     { display: inline-block; margin: 0 8px; opacity: 0.9; }

.agl-bottombar__divider {
    position: absolute;
    top: 30px;
    width: 2px;
    height: 32px;
    background: #efe8d4;
}
.agl-bottombar__divider--1 { left: 680px; }
.agl-bottombar__divider--2 { left: 1152px; }

.agl-bottombar__tagline {
    position: absolute;
    left: 1207px;
    top: 24px;
    color: var(--agl-gold-text);
    font: 400 27px/44px 'Allura', 'Brush Script MT', cursive;
    white-space: nowrap;
}
</style>

<div class="agl-bottombar">

    <!-- the SVG is drawn in template coordinates (y 925-1024), stretched to the bar -->
    <svg class="agl-bottombar__bg" viewBox="0 925 1536 99" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <defs>
            <linearGradient id="aglBbNavy" x1="0" y1="0" x2="0" y2="1">
                <stop offset="0" stop-color="#081f42"/>
                <stop offset="1" stop-color="#04183a"/>
            </linearGradient>
            <linearGradient id="aglBbGold" x1="0" y1="0" x2="1" y2="0">
                <stop offset="0"    stop-color="#c9983f"/>
                <stop offset="0.25" stop-color="#e9c872"/>
                <stop offset="0.5"  stop-color="#c99a40"/>
                <stop offset="0.75" stop-color="#e9c872"/>
                <stop offset="1"    stop-color="#c9983f"/>
            </linearGradient>
        </defs>
        <path d="M10,964 L50,937 H1486 L1526,964 V1012 H10 Z" fill="url(#aglBbNavy)"/>
        <path d="M10,965 L50,934 H1486 L1526,965" fill="none" stroke="url(#aglBbGold)" stroke-width="7" stroke-linejoin="round"/>
    </svg>

    <!-- address -->
    <svg class="agl-bottombar__pin" viewBox="0 0 26 34" xmlns="http://www.w3.org/2000/svg">
        <path d="M13 1 C6.4 1 1 6.2 1 12.7 C1 21 13 33 13 33 C13 33 25 21 25 12.7 C25 6.2 19.6 1 13 1 Z" fill="#e0b55a"/>
        <circle cx="13" cy="12.5" r="4.6" fill="#071d3f"/>
    </svg>
    <div class="agl-bottombar__text agl-bottombar__address">Kapoor Motors Complex, Opposite RTO Barrier, Mehatpur, Una</div>

    <div class="agl-bottombar__divider agl-bottombar__divider--1"></div>

    <!-- phones -->
    <svg class="agl-bottombar__phone" viewBox="0 0 29 29" xmlns="http://www.w3.org/2000/svg">
        <circle cx="14.5" cy="14.5" r="14.5" fill="#e0b55a"/>
        <path d="M9.2 8.2 C8.4 8.6 8 9.6 8.4 11 C9.4 14.4 13.4 19 17.6 20.4 C19 20.8 20 20.4 20.4 19.6 L20.6 18.6 C20.7 18.2 20.5 17.8 20.1 17.6 L17.9 16.6 C17.5 16.4 17.1 16.5 16.8 16.8 L16 17.6 C14.4 16.9 12.2 14.6 11.5 13 L12.3 12.2 C12.6 11.9 12.7 11.5 12.5 11.1 L11.5 8.9 C11.3 8.5 10.9 8.3 10.5 8.4 Z" fill="#fff"/>
    </svg>
    <div class="agl-bottombar__text agl-bottombar__phones">
        8968438699<span class="agl-bottombar__sep">|</span>9417023499<span class="agl-bottombar__sep">|</span>98769335199
    </div>

    <div class="agl-bottombar__divider agl-bottombar__divider--2"></div>

    <!-- tagline -->
    <div class="agl-bottombar__tagline">Real Gemstones. Real Value.</div>

</div>
