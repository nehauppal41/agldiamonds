{{--
    BACK - BRAND BLOCK
    Logo, "AUREVA GEMSTONE LABORATORY", gold diamond rule and website, with a
    thin gold divider on its right edge. (Phone number removed - it is in the
    bottom bar.)
    Image: public/assets/logo/agl_logo_t.png
--}}
<style>
.agl-brand {
    --agl-navy: #10284b;
    --agl-gold: #c8a45a;
    position: absolute;
    left: 0;
    top: 0;
    width: 1536px;
    height: 880px;
    z-index: 3;
}

.agl-brand__logo {
    position: absolute;
    left: 190px;
    top: 396px;
    width: 600px;
    height: 150px;
    object-fit: contain;
    object-position: center;
}

.agl-brand__name {
    position: absolute;
    left: 190px;
    top: 560px;
    width: 600px;
    text-align: center;
    color: var(--agl-navy);
    font: 700 28px/34px 'Cormorant Garamond', Georgia, serif;
    letter-spacing: 0.12em;
    padding-left: 0.12em;          /* balances trailing letter-space */
    white-space: nowrap;
}

/* gold rule with a diamond in the middle */
.agl-brand__rule {
    position: absolute;
    left: 230px;
    top: 620px;
    width: 520px;
    height: 20px;
    display: flex;
    align-items: center;
    gap: 16px;
}
.agl-brand__rule::before,
.agl-brand__rule::after {
    content: '';
    flex: 1;
    height: 2px;
}
.agl-brand__rule::before { background: linear-gradient(90deg, rgba(200,164,90,0), var(--agl-gold)); }
.agl-brand__rule::after  { background: linear-gradient(90deg, var(--agl-gold), rgba(200,164,90,0)); }
.agl-brand__rule svg { width: 16px; height: 16px; flex: none; display: block; }

.agl-brand__website {
    position: absolute;
    left: 190px;
    top: 644px;
    width: 600px;
    text-align: center;
    color: var(--agl-navy);
    font: 700 42px/46px 'Cormorant Garamond', Georgia, serif;
    letter-spacing: 0.03em;
    white-space: nowrap;
}

/* vertical divider between brand block and QR block */
.agl-brand__divider {
    position: absolute;
    left: 912px;
    top: 396px;
    width: 2px;
    height: 294px;
    background: linear-gradient(180deg, rgba(200,164,90,0), var(--agl-gold) 15%, var(--agl-gold) 85%, rgba(200,164,90,0));
}
</style>

<div class="agl-brand">


    <div class="agl-brand__rule">
        <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M8 1 L15 8 L8 15 L1 8 Z" fill="#c8a45a"/>
        </svg>
    </div>

    <div class="agl-brand__website">www.agldiamonds.com</div>

    <div class="agl-brand__divider"></div>

</div>
