<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AGL Premium Certificate Back</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600&family=EB+Garamond:wght@400;500;600&display=swap');

@page { size: 3.3in 2.1in; margin: 0; }
* { box-sizing: border-box; }

html, body {
    margin: 0;
    padding: 0;
    width: 3.3in;
    height: 2.1in;
    background: #090909;
    color: #e1c17b;
    -webkit-print-color-adjust: exact;
    print-color-adjust: exact;
}

body { font-family: "EB Garamond", Georgia, serif; }

.card {
    width: 3.3in;
    height: 2.1in;
    position: relative;
    overflow: hidden;
    background: #090909;
    color: #e1c17b;
}

.frame {
    position: absolute;
    inset: 0.075in;
    border: 0.006in solid #9f8148;
    pointer-events: none;
}

.frame::after {
    content: "";
    position: absolute;
    inset: 0.045in;
    border: 0.004in solid rgba(225,193,123,.32);
}

.content {
    position: absolute;
    inset: 0.14in 0.18in 0.12in;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.brand-mark {
    margin-top: 0.24in;
    height: 0.47in;
    width: 1.05in;
    display: flex;
    align-items: center;
    justify-content: center;
}

.logo {
    display: block;
    width: 1.02in;
    height: 0.46in;
    object-fit: contain;
}

.eyebrow {
    width: 100%;
    text-align: center;
    margin-top: 0.015in;
    font-family: "Cinzel", Georgia, serif;
    font-size: 5.2pt;
    font-weight: 500;
    letter-spacing: 1.05px;
    line-height: 1.2;
    color: #c8a965;
}

.rule {
    width: 1.15in;
    height: 0;
    border-top: 0.006in solid #8c713e;
    margin-top: 0.075in;
    position: relative;
}

.rule::after {
    content: "◆";
    position: absolute;
    left: 50%;
    top: -0.065in;
    transform: translateX(-50%);
    background: #090909;
    padding: 0 0.055in;
    color: #d7b66f;
    font-size: 4.5pt;
    line-height: 1;
}

.spacer { flex: 1; min-height: 0; }

.contact-row {
    width: 100%;
    margin-top: 0.045in;
    margin-bottom: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.10in;
    white-space: nowrap;
}

.website {
    margin-top: 0;
    font-family: "Cinzel", Georgia, serif;
    font-size: 7pt;
    font-weight: 500;
    letter-spacing: 0.05px;
    line-height: 1.1;
    color: #f0d79d;
    white-space: nowrap;
}

.phone {
    margin-top: 0;
    font-family: "Cinzel", Georgia, serif;
    font-size: 7pt;
    font-weight: 500;
    letter-spacing: 0.05px;
    line-height: 1.1;
    flex-shrink: 0;
    color: #d0b579;
}

.footer {
    position: absolute;
    bottom: 0.055in;
    left: 0.05in;
    right: 0.05in;
    font-family: "Cinzel", Georgia, serif;
    font-size: 4.5pt;
    font-weight: 400;
    letter-spacing: 0.55px;
    line-height: 1.1;
    white-space: nowrap;
    color: #bda16b;
}

@media screen {
    body { margin: 20px auto; }
    .card { box-shadow: 0 5px 24px rgba(0,0,0,.3); }
}

@media print {
    html, body { margin: 0; }
    .card { box-shadow: none; }
}
</style>
</head>
<body>
<section class="card">
    <div class="frame"></div>
    <div class="content">
        <div class="brand-mark">
            <img class="logo" src="{{ asset('assets/logo/agl_logo.jpeg') }}" alt="AGL Logo">
        </div>
        <div class="eyebrow">A UNIT OF KAPOOR JEWELLERS</div>
        <div class="rule"></div>
        <div class="contact-row">
            <div class="website">www.agldiamonds.com</div>
            <div class="phone">8968438699</div>
        </div>
        <div class="footer">AUTHENTIC GEM LAB&nbsp;&nbsp; • &nbsp;&nbsp; GEMSTONE IDENTIFICATION</div>
    </div>
</section>
</body>
</html>
