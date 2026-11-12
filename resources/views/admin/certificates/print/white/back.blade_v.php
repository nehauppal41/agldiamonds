<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AGL Premium Certificate Back</title>

<style>
@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600&family=EB+Garamond:wght@400;500;600&display=swap');

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
    width: 3.3in;
    height: 2.1in;
    background: #fbfaf7;
    color: #10284b;
    -webkit-print-color-adjust: exact;
    print-color-adjust: exact;
}

body {
    font-family: "EB Garamond", Georgia, serif;
}

.card {
    width: 3.3in;
    height: 2.1in;
    position: relative;
    overflow: hidden;
    background: #fbfaf7;
    color: #10284b;
}

/* NAVY AND GOLD BORDER */

.frame {
    position: absolute;
    inset: 0.035in;
    border: 0.012in solid #c8a05b;
    pointer-events: none;
    z-index: 5;
}

.frame::after {
    content: "";
    position: absolute;
    inset: 0.025in;
    border: 0.004in solid #10284b;
}

/* MAIN CONTENT */

.content {
    position: absolute;
    inset: 0.055in;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

/* BRAND LOGO */

.brand-mark {
    margin-top: 0.22in;
    height: 0.47in;
    width: 1.15in;
    display: flex;
    align-items: center;
    justify-content: center;
}

.logo {
    display: block;
    width: 1.10in;
    height: 0.46in;
    object-fit: contain;
}

/* BRAND DESCRIPTION */

.eyebrow {
    width: 100%;
    text-align: center;
    margin-top: 0.025in;
    font-family: "Cinzel", Georgia, serif;
    font-size: 5.2pt;
    font-weight: 600;
    letter-spacing: 1px;
    line-height: 1.2;
    color: #10284b;
}

/* GOLD DECORATIVE RULE */

.rule {
    width: 1.25in;
    height: 0;
    border-top: 0.008in solid #c8a05b;
    margin-top: 0.10in;
    position: relative;
}

.rule::after {
    content: "◆";
    position: absolute;
    left: 50%;
    top: -0.065in;
    transform: translateX(-50%);
    background: #fbfaf7;
    padding: 0 0.055in;
    color: #c8a05b;
    font-size: 4.5pt;
    line-height: 1;
}

/* CONTACT INFORMATION */

.contact-row {
    position: absolute;
    top: 1.37in;
    left: 0.15in;
    right: 0.15in;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.10in;
    white-space: nowrap;
}

.website {
    font-family: "Cinzel", Georgia, serif;
    font-size: 6.5pt;
    font-weight: 600;
    letter-spacing: 0.1px;
    line-height: 1.2;
    color: #10284b;
    white-space: nowrap;
}

.contact-divider {
    width: 0.008in;
    height: 0.15in;
    background: #c8a05b;
    flex-shrink: 0;
}

.phone {
    font-family: "Cinzel", Georgia, serif;
    font-size: 6.5pt;
    font-weight: 500;
    letter-spacing: 0;
    line-height: 1.2;
    color: #10284b;
    white-space: nowrap;
}

/* BOTTOM NAVY BAR — MATCHES FRONT DESIGN */

.footer-bar {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 0.19in;
    background: #0b2344;
    border-top: 0.014in solid #c8a05b;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0 0.10in;
    color: #e4c37d;
    font-family: "Cinzel", Georgia, serif;
    font-size: 4.2pt;
    font-weight: 500;
    letter-spacing: 0.45px;
    line-height: 1;
    white-space: nowrap;
    z-index: 2;
}

.footer-separator {
    width: 0.006in;
    height: 0.075in;
    background: #c8a05b;
    margin: 0 0.10in;
    flex-shrink: 0;
}

/* SCREEN PREVIEW */

@media screen {
    body {
        margin: 16px auto;
    }

    .card {
        box-shadow: 0 5px 24px rgba(0,0,0,.12);
    }
}

/* PRINT */

@media print {
    html, body {
        margin: 0;
    }

    .card {
        box-shadow: none;
    }
}
</style>
</head>

<body>

<section class="card">

    <div class="frame"></div>

    <div class="content">

        <!-- AGL LOGO: ORIGINAL ASSET PRESERVED -->
        <div class="brand-mark">
            <img
                class="logo"
                src="{{ asset('assets/logo/agl_logo_t.png') }}"
                alt="AGL Logo">
        </div>

        <!-- BRAND TEXT -->
        <div class="eyebrow">
            A UNIT OF KAPOOR JEWELLERS
        </div>

        <!-- GOLD DIVIDER -->
        <div class="rule"></div>

        <!-- WEBSITE AND PHONE -->
        <div class="contact-row">

            <div class="website">
                www.agldiamonds.com
            </div>

            <div class="contact-divider"></div>

            <div class="phone">
                9815881899
            </div>

        </div>

        <!-- NAVY AND GOLD BOTTOM BAR -->
        <div class="footer-bar">

            <span>AUTHENTIC GEM LAB</span>

            <span class="footer-separator"></span>

            <span>GEMSTONE IDENTIFICATION</span>

        </div>

    </div>

</section>

</body>
</html>
