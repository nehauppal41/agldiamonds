
{{--
    SECTION 5 - RIGHT SECTION
    Photos (1 or 3), Identification Result, QR code, gold seal and gemologist signature.

    Expects: $photoUrl, $qrDataUri and the identification text from $certificate->identification
             (gemstone card) or $diamond->identification (diamond card)
    Optional: $topViewUrl, $sideViewUrl
        - only $photoUrl present            -> one wide photo
        - $topViewUrl AND $sideViewUrl too  -> main photo + Top View + Side View

    Images: public/assets/card/seal.png, public/assets/logo/anilkapoor_sign.png
--}}
@php
    $aglMain     = $photoUrl ?? null;
    $aglTop      = $topViewUrl ?? null;
    $aglSide     = $sideViewUrl ?? null;
    $aglHasThree = !empty($aglTop) && !empty($aglSide);

    // Identification text is scaled down automatically when it is long
    $aglIdSource = $aglIdentification ?? ($certificate->identification ?? ($diamond->identification ?? null));
    $aglIdText   = $aglIdSource ?: '—';
    $aglIdSize   = max(15, min(27, (int) floor(540 / max(mb_strlen($aglIdText), 1))));
@endphp

<style>
.agl-right {
    --agl-navy: #10284b;
    --agl-gold: #c8a45a;
    position: absolute;
    left: 0;
    top: 0;
    width: 1536px;
    height: 977px;
    z-index: 3;
}

/* VERTICAL GOLD DIVIDER */
.agl-right__divider {
    position: absolute;
    left: 928px;
    top: 305px;
    width: 2px;
    height: 565px;
    background: linear-gradient(
        180deg,
        rgba(200,164,90,0),
        #c8a45a 12%,
        #c8a45a 88%,
        rgba(200,164,90,0)
    );
}

/* PHOTOS */
.agl-right__photo {
    position: absolute;
    border: 2px solid var(--agl-gold);
    background: #eef0f4;
    overflow: hidden;
    box-sizing: border-box;
}

.agl-right__photo img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: contain;
    object-position: center;
}

.agl-right__photo--main {
    left: 962px;
    top: 303px;
    width: 293px;
    height: 244px;
}

.agl-right__photo--main-wide {
    left: 962px;
    top: 303px;
    width: 505px;
    height: 244px;
}

.agl-right__photo--top {
    left: 1277px;
    top: 299px;
    width: 190px;
    height: 108px;
}

.agl-right__photo--side {
    left: 1277px;
    top: 432px;
    width: 190px;
    height: 108px;
}

.agl-right__caption {
    position: absolute;
    left: 1277px;
    width: 190px;
    text-align: center;
    color: #1b1b1b;
    font: 600 17px/18px 'EB Garamond', Georgia, serif;
}

.agl-right__caption--top {
    top: 413px;
}

.agl-right__caption--side {
    top: 544px;
}

/* IDENTIFICATION RESULT - ABOVE SIGNATURE */
.agl-right__result {
    position: absolute;
    left: 1200px;
    top: 568px;
    width: 267px;
    height: 111px;
    box-sizing: border-box;
    border: 2px solid #9fb0cf;
    border-radius: 18px;
    background: #e7ecf5;
    text-align: center;
    overflow: hidden;
}

.agl-right__result-label {
    position: absolute;
    left: 0;
    right: 0;
    top: 10px;
    color: var(--agl-navy);
    font: 500 14px/20px 'EB Garamond', Georgia, serif;
    letter-spacing: 0.06em;
}

.agl-right__result-value {
    position: absolute;
    left: 8px;
    right: 8px;
    top: 36px;
    height: 34px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--agl-navy);
    font-family: 'Cormorant Garamond', Georgia, serif;
    font-weight: 700;
    line-height: 1;
    white-space: nowrap;
    text-transform: uppercase;
}

.agl-right__result-note {
    position: absolute;
    left: 0;
    right: 0;
    top: 76px;
    color: var(--agl-navy);
    font: 500 11px/16px 'EB Garamond', Georgia, serif;
    letter-spacing: 0.07em;
}

/* QR VERIFICATION - ENLARGED ON THE LEFT */
.agl-right__qr {
    position: absolute;
    left: 960px;
    top: 568px;
    width: 220px;
    height: 220px;
    box-sizing: border-box;
    padding: 4px;
    background: #fff;
}

.agl-right__qr img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.agl-right__qr-caption {
    position: absolute;
    left: 960px;
    top: 794px;
    width: 220px;
    text-align: center;
    color: #1a2f66;
    font: 600 12px/16px 'Open Sans', Arial, sans-serif;
}

/* GEMOLOGIST SIGNATURE - BELOW IDENTIFICATION RESULT */
.agl-right__sign-img {
    position: absolute;
    left: 1233px;
    top: 690px;
    width: 200px;
    height: 64px;
    object-fit: contain;
    object-position: center bottom;
}

.agl-right__sign-rule {
    position: absolute;
    left: 1200px;
    top: 757px;
    width: 267px;
    height: 2px;
    background: linear-gradient(
        90deg,
        rgba(200,164,90,0),
        #c8a45a 15%,
        #c8a45a 85%,
        rgba(200,164,90,0)
    );
}

.agl-right__sign-title {
    position: absolute;
    left: 1200px;
    top: 767px;
    width: 267px;
    text-align: center;
    color: var(--agl-navy);
    font: 700 23px/26px 'Cormorant Garamond', Georgia, serif;
}

.agl-right__sign-lab {
    position: absolute;
    left: 1200px;
    top: 795px;
    width: 267px;
    text-align: center;
    color: var(--agl-navy);
    font: 500 20px/22px 'EB Garamond', Georgia, serif;
}
</style>

<div class="agl-right">

    <div class="agl-right__divider"></div>

    <!-- PHOTOS: one wide photo, or main + top view + side view -->
    @if($aglHasThree)

        <div class="agl-right__photo agl-right__photo--main">
            <img src="{{ $aglMain }}" alt="Photograph">
        </div>

        <div class="agl-right__photo agl-right__photo--top">
            <img src="{{ $aglTop }}" alt="Top View">
        </div>

        <div class="agl-right__caption agl-right__caption--top">Top View</div>

        <div class="agl-right__photo agl-right__photo--side">
            <img src="{{ $aglSide }}" alt="Side View">
        </div>

        <div class="agl-right__caption agl-right__caption--side">Side View</div>

    @else

        <div class="agl-right__photo agl-right__photo--main-wide">
            <img id="gem-image" src="{{ $aglMain }}" alt="Photograph">
        </div>

    @endif

    <!-- IDENTIFICATION RESULT -->
    <div class="agl-right__result">
        <div class="agl-right__result-label">IDENTIFICATION RESULT</div>
        <div class="agl-right__result-value" style="font-size: {{ $aglIdSize }}px">{{ $aglIdText }}</div>
        <div class="agl-right__result-note">(NO TREATMENT DETECTED)</div>
    </div>

    <!-- QR VERIFICATION -->
    <div class="agl-right__qr">
        <img src="{{ $qrDataUri }}" alt="Verification QR Code">
    </div>

    <div class="agl-right__qr-caption">
        SCAN FOR<br>REPORT VERIFICATION
    </div>

    <!-- GEMOLOGIST SIGNATURE -->
    <img class="agl-right__sign-img"
         src="{{ asset('assets/logo/anilkapoor_sign_t.png') }}"
         alt="AGL Gemologist Signature">

    <div class="agl-right__sign-rule"></div>
    <div class="agl-right__sign-title">Gemologist</div>
    <div class="agl-right__sign-lab">Aureva Gemstone Laboratory</div>

</div>
