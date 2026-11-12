{{--
    BACK - WEBSITE BLOCK
    "VISIT US ONLINE" label (same style as the Instagram label), gold diamond
    rules and the website address, with a thin gold divider on its right edge.
    Fully static (inline SVG icon, no images needed).
--}}
<style>
.agl-web {
    --agl-navy: #10284b;
    --agl-gold: #c8a45a;
    position: absolute;
    left: 0;
    top: 0;
    width: 1536px;
    height: 880px;
    z-index: 3;
}

.agl-web__label {
    position: absolute;
    left: 171px;
    top: 458px;
    width: 600px;
    height: 28px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    color: var(--agl-navy);
    font: 500 17px/28px 'Montserrat', Arial, sans-serif;
    letter-spacing: 0.18em;
    white-space: nowrap;
}
.agl-web__label svg { width: 28px; height: 28px; flex: none; display: block; }

/* gold rules with a diamond in the middle */
.agl-web__rule {
    position: absolute;
    left: 211px;
    width: 520px;
    height: 20px;
    display: flex;
    align-items: center;
    gap: 16px;
}
.agl-web__rule::before,
.agl-web__rule::after {
    content: '';
    flex: 1;
    height: 2px;
}
.agl-web__rule::before { background: linear-gradient(90deg, rgba(200,164,90,0), var(--agl-gold)); }
.agl-web__rule::after  { background: linear-gradient(90deg, var(--agl-gold), rgba(200,164,90,0)); }
.agl-web__rule svg { width: 16px; height: 16px; flex: none; display: block; }
.agl-web__rule--top    { top: 508px; }
.agl-web__rule--bottom { top: 608px; }

.agl-web__url {
    position: absolute;
    left: 171px;
    top: 532px;
    width: 600px;
    text-align: center;
    color: var(--agl-navy);
    font: 700 54px/60px 'Cormorant Garamond', Georgia, serif;
    letter-spacing: 0.03em;
    white-space: nowrap;
}

/* vertical divider between the website block and the QR block */
.agl-web__divider {
    position: absolute;
    left: 873px;
    top: 396px;
    width: 2px;
    height: 294px;
    background: linear-gradient(180deg, rgba(200,164,90,0), var(--agl-gold) 15%, var(--agl-gold) 85%, rgba(200,164,90,0));
}
</style>

<div class="agl-web">

    <div class="agl-web__label">
        <svg viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <g fill="none" stroke="#b8862f" stroke-width="2.2" stroke-linecap="round">
                <circle cx="14" cy="14" r="11.5"/>
                <ellipse cx="14" cy="14" rx="5" ry="11.5"/>
                <path d="M2.5 14 H25.5"/>
                <path d="M4.5 8.5 H23.5 M4.5 19.5 H23.5"/>
            </g>
        </svg>
        <span>VISIT US ONLINE</span>
    </div>

    <div class="agl-web__rule agl-web__rule--top">
        <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M8 1 L15 8 L8 15 L1 8 Z" fill="#c8a45a"/></svg>
    </div>

    <div class="agl-web__url">www.agldiamonds.com</div>

    <div class="agl-web__rule agl-web__rule--bottom">
        <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M8 1 L15 8 L8 15 L1 8 Z" fill="#c8a45a"/></svg>
    </div>

    <div class="agl-web__divider"></div>

</div>
