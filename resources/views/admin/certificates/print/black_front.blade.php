<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AGL Certificate - Front</title>

<style>
@page {
    size: 3.3in 2.1in;
    margin: 0;
}

* {
    box-sizing: border-box;
}

html, body {
    margin: 0;
    padding: 0;
    background: #fff;
    -webkit-print-color-adjust: exact;
    print-color-adjust: exact;
}

body {
    font-family: "Georgia", "Times New Roman", serif;
}

.card {
    width: 3.3in;
    height: 2.1in;
    position: relative;
    overflow: hidden;
    background: #050505;
    color: #e4b23e;
    page-break-after: always;
    break-after: page;
}

.border1, .border2 {
    position: absolute;
    inset: 0.055in;
    border: 0.012in solid #f1cb68;
    border-radius: 0.09in;
    pointer-events: none;
    z-index: 5;
}

.border2 {
    inset: 0.075in;
    border-color: #b98522;
    border-width: 0.007in;
    border-radius: 0.075in;
}

.content {
    position: absolute;
    inset: 0.105in;
}

.gold {
    color: #e4b23e;
}

.logo {
    position: absolute;
    left: 0.12in;
    top: 0.10in;
    width: 1.17in;
    height: auto;
}

.trust {
    position: absolute;
    left: 1.43in;
    top: 0.385in;
    width: 1.56in;
    text-align: center;
    font: 700 0.055in/1.2 Arial, sans-serif;
    letter-spacing: 0.025in;
    white-space: nowrap;
    color: #e4b23e;
    z-index: 2;
}

.title {
    position: absolute;
    left: 1.38in;
    top: 0.12in;
    width: 1.66in;
    text-align: center;
    font-size: 0.112in;
    line-height: 1.05;
    font-weight: 700;
    letter-spacing: 0.003in;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: clip;
    color: #e4b23e;
}

.subtitle {
    position: absolute;
    left: 1.40in;
    top: 0.275in;
    width: 1.64in;
    text-align: center;
    font: 700 0.043in/1 Arial, sans-serif;
    letter-spacing: 0.014in;
    white-space: nowrap;
    overflow: hidden;
    color: #e4b23e;
}

.rule {
    position: absolute;
    height: 0.008in;
    background: #e4b23e;
}

.rule-top {
    left: 1.48in;
    right: 0.16in;
    top: 0.35in;
}

/* GEMSTONE PHOTO */
.gem-frame {
    position: absolute;
    left: 0.14in;
    top: 0.59in;
    width: 1.08in;
    height: 0.79in;
    border: 0.012in solid #e4b23e;
    border-radius: 0.055in;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    background: #020202;
}

.gem-frame img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}


/* CERTIFICATE DETAILS */
.fields {
    position: absolute;
    left: 1.43in;
    top: 0.535in;
    width: 1.56in;
    z-index: 2;
}

.field {
    display: grid;
    grid-template-columns: 0.64in 0.06in 1fr;
    height: 0.115in;
    align-items: end;
}

.label {
    font: 700 0.050in Arial, sans-serif;
    letter-spacing: 0.012in;
    white-space: nowrap;
    color: #e4b23e;
}

.colon {
    font: 700 0.050in Arial, sans-serif;
    text-align: center;
    color: #e4b23e;
}

.value {
    border-bottom: 0.006in solid #b98522;
    min-width: 0;
    height: 0.065in;
    padding-left: 0.025in;
    font: 600 0.046in Arial, sans-serif;
    color: #f2d17a;
    white-space: nowrap;
    overflow: hidden;
}

/* GEMOLOGIST SIGNATURE */
.signature-box {
    position: absolute;
    left: 0.14in;
    bottom: 0.055in;
    width: 1.08in;
    height: 0.35in;
    border: 0.012in solid #e4b23e;
    border-radius: 0.055in;
    background: #020202;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 0.02in;
    overflow: hidden;
}

.signature-image {
    display: block;
    width: 100%;
    height: 0.23in;
    object-fit: contain;
    object-position: center;
    margin: 0;
}

.signature-caption {
    font: 700 0.047in Arial, sans-serif;
    letter-spacing: 0.008in;
    line-height: 1.1;
    color: #f2d17a;
    text-align: center;
    margin-top: 0.015in;
}

/* QR CODE */
.qr {
    position: absolute;
    right: 0.12in;
    bottom: 0.015in;
    width: 0.27in;
    height: 0.27in;
    border: 0.006in solid #e4b23e;
    display: grid;
    place-items: center;
    font: 700 0.032in Arial, sans-serif;
    z-index: 2;
}

.qr img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

/* BACK CARD STYLES PRESERVED */
.back .logo {
    left: 50%;
    top: 0.44in;
    transform: translateX(-50%);
    width: 1.38in;
}

.back .divider {
    position: absolute;
    left: 0.95in;
    right: 0.95in;
    top: 1.12in;
    height: 0.008in;
    background: #e4b23e;
}

.back .contact {
    position: absolute;
    top: 1.27in;
    left: 0.25in;
    right: 0.25in;
    display: flex;
    justify-content: center;
    gap: 0.17in;
    align-items: center;
    font: 700 0.067in Arial, sans-serif;
    color: #f1cb68;
    white-space: nowrap;
}

.back .separator {
    height: 0.18in;
    width: 0.008in;
    background: #b98522;
}

.back .footer {
    position: absolute;
    top: 1.62in;
    left: 0.35in;
    right: 0.35in;
    text-align: center;
    font: 700 0.042in Arial, sans-serif;
    letter-spacing: 0.016in;
    color: #b98522;
}

.back .waves-left,
.back .waves-right {
    position: absolute;
    bottom: -0.08in;
    width: 1.05in;
    height: 0.58in;
    opacity: .65;
    background: repeating-radial-gradient(
        ellipse at 0% 100%,
        transparent 0 0.035in,
        #8e671d 0.039in 0.043in,
        transparent 0.047in 0.075in
    );
}

.back .waves-left {
    left: -0.05in;
}

.back .waves-right {
    right: -0.05in;
    transform: scaleX(-1);
}

@media screen {
    body {
        width: 3.3in;
        margin: 20px auto;
    }
}

@media print {
    html, body {
        width: 3.3in;
        height: 2.1in;
        margin: 0;
    }

    .card {
        page-break-after: auto;
        break-after: auto;
    }
}
</style>
</head>

<body>
<section class="card front">
    <div class="border1"></div>
    <div class="border2"></div>

    <div class="content">
        <img class="logo"
             src="{{ asset('assets/logo/agl_logo_a.jpeg') }}"
             alt="AGL Logo">

        <div class="title">GEMSTONE CERTIFICATE</div>
        <div class="subtitle">NATURAL&nbsp; • &nbsp;AUTHENTIC&nbsp; • &nbsp;VERIFIED</div>
        <div class="rule rule-top"></div>

        <div class="trust">TRUST&nbsp; | &nbsp;ACCURACY&nbsp; | &nbsp;VALUE</div>

        <div class="gem-frame">
            <img id="gem-image" src="{{ $photoUrl }}" alt="Gemstone">
        </div>

       





        <div class="fields">
        
        <div class="field">
    		<div class="label">REPORT NO.</div>
    		<div class="colon">:</div>
    		<div class="value" id="report-no">{{ $certificate->report_number }}</div>
		</div>
        
            <div class="field">
                <div class="label">GEMSTONE</div>
                <div class="colon">:</div>
                <div class="value">{{ $certificate->identification }}</div>
            </div>

            <div class="field">
                <div class="label">WEIGHT (CT)</div>
                <div class="colon">:</div>
                <div class="value">{{ $certificate->weight }}</div>
            </div>

            <div class="field">
                <div class="label">DIMENSIONS</div>
                <div class="colon">:</div>
                <div class="value">{{ $certificate->dimensions }}</div>
            </div>

            <div class="field">
                <div class="label">COLOR</div>
                <div class="colon">:</div>
                <div class="value">{{ $certificate->color }}</div>
            </div>

            <div class="field">
                <div class="label">CLARITY</div>
                <div class="colon">:</div>
                <div class="value">{{ $certificate->clarity }}</div>
            </div>

            <div class="field">
                <div class="label">SHAPE &amp; CUT</div>
                <div class="colon">:</div>
                <div class="value">{{ $certificate->shape }}</div>
            </div>

            <div class="field">
                <div class="label">TREATMENT</div>
                <div class="colon">:</div>
                <div class="value">{{ $certificate->treatment }}</div>
            </div>

            <div class="field">
                <div class="label">REFRACTIVE INDEX</div>
                <div class="colon">:</div>
                <div class="value">{{ $certificate->refractive_index ?? '—' }}</div>
            </div>
        </div>

        <div class="signature-box">
            <img class="signature-image"
                 src="{{ asset('assets/logo/anilkapoor_sign.jpeg') }}"
                 alt="Gemologist Signature">
            <div class="signature-caption">Gemologist</div>
        </div>

        <div class="qr">
            <img src="{{ $qrDataUri }}"
                 alt="Certificate verification QR code">
        </div>
    </div>
</section>
</body>
</html>
