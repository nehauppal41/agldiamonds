
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AGL Diamond Certificate - Front</title>

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
    font-family: Georgia, "Times New Roman", serif;
}

.card {
    width: 3.3in;
    height: 2.1in;
    position: relative;
    overflow: hidden;
    background: #fbfaf7;
    color: #10284b;
    page-break-after: always;
    break-after: page;
}

/* FRAME */

.border1,
.border2 {
    position: absolute;
    inset: 0.035in;
    border: 0.012in solid #c8a05b;
    pointer-events: none;
    z-index: 10;
}

.border2 {
    inset: 0.052in;
    border-width: 0.004in;
    border-color: #10284b;
}

.content {
    position: absolute;
    inset: 0.055in;
    overflow: hidden;
}

/* HEADER */

.header {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 0.405in;
    background: #0b2344;
    border-bottom: 0.018in solid #c8a05b;
}

.logo {
    position: absolute;
    left: 50%;
    top: 0.035in;
    width: 0.87in;
    height: 0.32in;
    transform: translateX(-50%);
    object-fit: contain;
    object-position: center;
}

.header-motto {
    position: absolute;
    right: 0.075in;
    top: 0.105in;
    width: 0.68in;
    text-align: center;
    color: #fff1d0;
    font: italic 0.040in/1.45 Georgia, serif;
}

/* TITLE */

.title {
    position: absolute;
    top: 0.425in;
    left: 0.08in;
    right: 0.08in;
    text-align: center;
    color: #10284b;
    font: bold 0.127in/1 Georgia, "Times New Roman", serif;
    letter-spacing: 0.001in;
    white-space: nowrap;
}

.subtitle {
    position: absolute;
    top: 0.565in;
    left: 0.08in;
    right: 0.08in;
    text-align: center;
    font: 700 0.036in/1 Arial, sans-serif;
    letter-spacing: 0.006in;
    white-space: nowrap;
}

.title-rule {
    position: absolute;
    top: 0.615in;
    left: 0.17in;
    width: 2.82in;
    height: 0.005in;
    background: #c8a05b;
}

/* DIAMOND DETAILS
   One field list only: no duplicate overlapping sections.
*/

.fields {
    position: absolute;
    left: 0.105in;
    top: 0.650in;
    width: 1.88in;
    z-index: 2;
}

.field {
    display: grid;
    grid-template-columns: 0.70in 0.055in minmax(0, 1fr);
    height: 0.068in;
    align-items: center;
}

.label {
    font: 700 0.039in/1 Arial, sans-serif;
    color: #10284b;
    white-space: nowrap;
}

.colon {
    font: 700 0.040in Arial, sans-serif;
    color: #10284b;
    text-align: center;
}

.value {
    min-width: 0;
    height: 0.061in;
    display: flex;
    align-items: center;
    border-bottom: 0.004in solid #d7c39b;
    padding: 0 0.015in;
    font: 0.041in/1 Georgia, "Times New Roman", serif;
    color: #202a3b;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

/* VERTICAL DIVIDER */

.section-divider {
    position: absolute;
    left: 2.025in;
    top: 0.655in;
    bottom: 0.205in;
    width: 0.009in;
    background: #c8a05b;
}

/* PHOTOGRAPH */

.right-section {
    position: absolute;
    top: 0.655in;
    left: 2.105in;
    width: 0.99in;
}

.gem-frame {
    width: 0.96in;
    height: 0.635in;
    border: 0.009in solid #c8a05b;
    padding: 0.035in;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    background: #fff;
}

.gem-frame img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: contain;
    object-position: center;
}

.gem-caption {
    text-align: center;
    margin-top: 0.018in;
    font: italic 0.038in/1 Georgia, serif;
    color: #10284b;
}

/* IDENTIFICATION RESULT */

.result {
    position: absolute;
    left: 2.105in;
    top: 1.385in;
    width: 0.96in;
    height: 0.245in;
    border: 0.006in solid #aab8cb;
    border-radius: 0.035in;
    background: #edf1f8;
    text-align: center;
    padding: 0.025in;
    overflow: hidden;
}

.result-label {
    font: 0.034in/1.1 Arial, sans-serif;
    color: #10284b;
}

.result-value {
    margin-top: 0.025in;
    font: bold 0.048in/1.05 Georgia, serif;
    color: #10284b;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

/* SIGNATURE */

.signature-box {
    position: absolute;
    left: 2.105in;
    top: 1.665in;
    width: 0.64in;
    height: 0.18in;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.signature-image {
    display: block;
    width: 0.59in;
    height: 0.125in;
    object-fit: contain;
    object-position: center;
}

.signature-caption {
    width: 100%;
    border-top: 0.005in solid #c8a05b;
    padding-top: 0.012in;
    text-align: center;
    font: 0.036in/1 Arial, sans-serif;
    color: #10284b;
}

/* QR VERIFICATION */

.qr {
    position: absolute;
    right: 0.10in;
    top: 1.665in;
    width: 0.205in;
    height: 0.205in;
    padding: 0.008in;
    border: 0.005in solid #c8a05b;
    background: #fff;
}

.qr img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.qr-caption {
    position: absolute;
    right: 0.055in;
    top: 1.875in;
    width: 0.295in;
    text-align: center;
    font: 0.024in/1.1 Arial, sans-serif;
    color: #10284b;
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

        <!-- EXISTING AGL LOGO -->
        <div class="header">

            <img class="logo"
                 src="{{ asset('assets/logo/agl_logo_t.png') }}"
                 alt="AGL Logo">

            <div class="header-motto">
                Accurate Testing<br>
                Authentic Results<br>
                Trusted Partner
            </div>

        </div>

        <!-- CERTIFICATE HEADING -->
        <div class="title">DIAMOND CERTIFICATE</div>

        <div class="subtitle">
            DIAMOND IDENTIFICATION &amp; AUTHENTICITY REPORT
        </div>

        <div class="title-rule"></div>

        <!-- DIAMOND FORM FIELDS: RENDER EACH ONCE -->
        <div class="fields">

            <!-- Generated certificate identifier -->
            <div class="field">
                <div class="label">Report No.</div>
                <div class="colon">:</div>
                <div class="value">{{ $diamond->report_number }}</div>
            </div>

            <!-- Description -->
            <div class="field">
                <div class="label">Description</div>
                <div class="colon">:</div>
                <div class="value">{{ $diamond->description ?: '—' }}</div>
            </div>

            <!-- Studded-only form inputs -->
            @if(strtolower($diamond->diamond_type ?? '') === 'studded')

                <div class="field">
                    <div class="label">Jewellery Type</div>
                    <div class="colon">:</div>
                    <div class="value">{{ $diamond->jewellery_type ?: '—' }}</div>
                </div>

                <div class="field">
                    <div class="label">Metal</div>
                    <div class="colon">:</div>
                    <div class="value">{{ $diamond->metal ?: '—' }}</div>
                </div>

            @endif

            <!-- Total Weight -->
            <div class="field">
                <div class="label">Total Weight</div>
                <div class="colon">:</div>
                <div class="value">
                    {{ $diamond->total_weight !== null && $diamond->total_weight !== ''
                        ? $diamond->total_weight . ' g'
                        : '—' }}
                </div>
            </div>

            <!-- Diamond Shape -->
            <div class="field">
                <div class="label">Diamond Shape</div>
                <div class="colon">:</div>
                <div class="value">{{ $diamond->diamond_shape ?: '—' }}</div>
            </div>

            <!-- Total Carat Weight -->
            <div class="field">
                <div class="label">Total Carat Weight</div>
                <div class="colon">:</div>
                <div class="value">
                    {{ $diamond->total_carat_weight !== null && $diamond->total_carat_weight !== ''
                        ? $diamond->total_carat_weight . ' ct'
                        : '—' }}
                </div>
            </div>

            <!-- Optional Center Diamond Weight -->
            <div class="field">
                <div class="label">Center Diamond Weight</div>
                <div class="colon">:</div>
                <div class="value">
                    {{ $diamond->center_diamond_weight !== null && $diamond->center_diamond_weight !== ''
                        ? $diamond->center_diamond_weight . ' ct'
                        : '—' }}
                </div>
            </div>

            <!-- Colour Grade -->
            <div class="field">
                <div class="label">Colour Grade</div>
                <div class="colon">:</div>
                <div class="value">{{ $diamond->color_grade ?: '—' }}</div>
            </div>

            <!-- Clarity Grade -->
            <div class="field">
                <div class="label">Clarity Grade</div>
                <div class="colon">:</div>
                <div class="value">{{ $diamond->clarity_grade ?: '—' }}</div>
            </div>

            <!-- Comments / Additional Notes -->
            <div class="field">
                <div class="label">Comments</div>
                <div class="colon">:</div>
                <div class="value">{{ $diamond->diamond_comments ?: '—' }}</div>
            </div>

            <!-- Shared certificate form input -->
            <div class="field">
                <div class="label">Issue Date</div>
                <div class="colon">:</div>
                <div class="value">
                    {{ $diamond->issue_date
                        ? \Carbon\Carbon::parse($diamond->issue_date)->format('d.m.Y')
                        : '—' }}
                </div>
            </div>

        </div>

        <div class="section-divider"></div>

        <!-- EXISTING DIAMOND PHOTOGRAPH -->
        <div class="right-section">

            <div class="gem-frame">
                <img id="gem-image"
                     src="{{ $photoUrl }}"
                     alt="Diamond Photograph">
            </div>

            <div class="gem-caption">Diamond Photograph</div>

        </div>

        <!-- EXISTING IDENTIFICATION RESULT -->
        <div class="result">

            <div class="result-label">
                IDENTIFICATION RESULT
            </div>

            <div class="result-value">
                {{ $diamond->identification ?: '—' }}
            </div>

        </div>

        <!-- EXISTING GEMOLOGIST SIGNATURE -->
        <div class="signature-box">

            <img class="signature-image"
                 src="{{ asset('assets/logo/anilkapoor_sign.png') }}"
                 alt="AGL Gemologist Signature">

            <div class="signature-caption">Gemologist</div>

        </div>

        <!-- EXISTING QR VERIFICATION -->
        <div class="qr">
            <img src="{{ $qrDataUri }}"
                 alt="Diamond Verification QR Code">
        </div>

        <div class="qr-caption">
            SCAN TO VERIFY
        </div>

        <!-- Footer remains unchanged and hidden, as in the original -->

    </div>

</section>

</body>
</html>
