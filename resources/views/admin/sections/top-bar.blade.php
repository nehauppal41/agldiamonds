{{--
    SECTION 2 - TOP BLUE BAR
    Navy header with chamfered corners, double gold diagonal stripes in both
    top corners, gold lower edge, logo and the italic motto on the right.
    Image: public/assets/logo/agl_logo_t.png (your existing logo)
--}}
<style>
.agl-topbar {
    position: absolute;
    left: 0;
    top: 0;
    width: 1536px;
    height: 205px;
    z-index: 2;
}

.agl-topbar__bg {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    display: block;
}

.agl-topbar__logo {
    position: absolute;
    left: 235px;
    top: 20px;
    width: 660px;
    height: 165px;
    object-fit: contain;
    object-position: center;
}

.agl-topbar__motto {
    position: absolute;
    left: 1016px;
    top: 72px;
    width: 400px;
    text-align: center;
    color: #f4ead0;
    font: italic 500 26.4px/31.5px 'EB Garamond', Georgia, serif;
    white-space: nowrap;
}

.agl-topbar__motto-rule {
    position: absolute;
    left: 1117px;
    top: 175px;
    width: 196px;
    height: 2px;
    background: linear-gradient(90deg, rgba(214,174,86,0), #d6ae56 18%, #d6ae56 82%, rgba(214,174,86,0));
}
</style>

<div class="agl-topbar">

    <svg class="agl-topbar__bg" viewBox="0 0 1536 215" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <defs>
            <linearGradient id="aglTbNavy" x1="0" y1="0" x2="0" y2="1">
                <stop offset="0" stop-color="#0b2349"/>
                <stop offset="1" stop-color="#051a3c"/>
            </linearGradient>
            <linearGradient id="aglTbGold" x1="0" y1="0" x2="1" y2="0">
                <stop offset="0"    stop-color="#c9983f"/>
                <stop offset="0.25" stop-color="#e9c872"/>
                <stop offset="0.5"  stop-color="#c99a40"/>
                <stop offset="0.75" stop-color="#e9c872"/>
                <stop offset="1"    stop-color="#c9983f"/>
            </linearGradient>
            <linearGradient id="aglTbGoldL" x1="0" y1="1" x2="1" y2="0">
                <stop offset="0" stop-color="#b98a33"/>
                <stop offset="0.55" stop-color="#e8c56c"/>
                <stop offset="1" stop-color="#c79a40"/>
            </linearGradient>
            <linearGradient id="aglTbGoldR" x1="0" y1="0" x2="1" y2="1">
                <stop offset="0" stop-color="#c79a40"/>
                <stop offset="0.45" stop-color="#e8c56c"/>
                <stop offset="1" stop-color="#b98a33"/>
            </linearGradient>
        </defs>

        <!-- navy body with curved lower corners -->
        <path d="M0,0 H1536 V172 H1526 C1496,190 1456,203 1411,204 H125 C80,203 40,190 10,172 H0 Z"
              fill="url(#aglTbNavy)"/>

        <!-- slightly lighter navy outside the corner stripes -->
        <polygon points="0,0 108,0 0,127"       fill="#162b54"/>
        <polygon points="1428,0 1536,0 1536,127" fill="#162b54"/>

        <!-- thick gold corner stripes -->
        <polygon points="0,127 108,0 140,0 0,157"            fill="url(#aglTbGoldL)"/>
        <polygon points="1536,127 1428,0 1396,0 1536,157"    fill="url(#aglTbGoldR)"/>

        <!-- thin gold lines parallel to the stripes -->
        <line x1="4"    y1="170" x2="153"  y2="0" stroke="#d3a84e" stroke-width="2.6"/>
        <line x1="1532" y1="170" x2="1383" y2="0" stroke="#d3a84e" stroke-width="2.6"/>

        <!-- gold lower edge -->
        <path d="M10,172 C40,190 80,206 125,208 H1411 C1456,206 1496,190 1526,172"
              fill="none" stroke="url(#aglTbGold)" stroke-width="7"/>
    </svg>

    <img class="agl-topbar__logo"
         src="{{ asset('assets/logo/agl_logo_t.png') }}"
         alt="AGL Logo">

    <div class="agl-topbar__motto">
        Accurate Testing<br>
        Authentic Results<br>
        Your Trusted Gemstone Partner
    </div>
    <div class="agl-topbar__motto-rule"></div>

</div>
