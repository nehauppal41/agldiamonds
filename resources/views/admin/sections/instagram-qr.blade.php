{{--
    INSTAGRAM QR BLOCK
    "FOLLOW US ON INSTAGRAM" label, QR in a white gold-framed card, and a
    "SCAN TO FOLLOW" caption.

    The QR image is shown 282 design-px wide = about 0.61 in (15 mm) on the
    printed card, on a white background with a clear margin, so it scans
    easily. The QR is shown whole (never cropped).
    Image: public/assets/logo/agl_insta_logo.png
--}}
<style>
.agl-igqr {
    --agl-navy: #10284b;
    --agl-gold: #c8a45a;
    position: absolute;
    left: 0;
    top: 0;
    width: 1536px;
    height: 880px;
    z-index: 3;
}

.agl-igqr__label {
    position: absolute;
    left: 980px;
    top: 348px;
    width: 420px;
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
.agl-igqr__label svg { width: 28px; height: 28px; flex: none; display: block; }

.agl-igqr__card {
    position: absolute;
    left: 1035px;
    top: 390px;
    width: 310px;
    height: 310px;
    padding: 14px;
    background: #fff;
    border: 2px solid var(--agl-gold);
    border-radius: 10px;
}
.agl-igqr__card img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: contain;
    object-position: center;
}

.agl-igqr__caption {
    position: absolute;
    left: 980px;
    top: 716px;
    width: 420px;
    text-align: center;
    color: var(--agl-navy);
    font: italic 500 24px/26px 'EB Garamond', Georgia, serif;
    letter-spacing: 0.06em;
}
</style>

<div class="agl-igqr">

    <div class="agl-igqr__label">
        <svg viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <g fill="none" stroke="#b8862f" stroke-width="2.2">
                <rect x="2.5" y="2.5" width="23" height="23" rx="7"/>
                <circle cx="14" cy="14" r="5.4"/>
            </g>
            <circle cx="20.6" cy="7.4" r="1.5" fill="#b8862f"/>
        </svg>
        <span>FOLLOW US ON INSTAGRAM</span>
    </div>

    <div class="agl-igqr__card">
        <img src="{{ asset('assets/logo/agl_insta_logo.png') }}" alt="AGL Instagram QR Code">
    </div>

    <div class="agl-igqr__caption">Scan to follow</div>

</div>
