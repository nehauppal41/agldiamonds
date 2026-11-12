
{{--
    AGL GEMSTONE / DIAMOND CERTIFICATE - BACK (main file)

    Shared sections:
      admin.sections.fonts, admin.sections.base, admin.sections.top-bar,
      admin.sections.bottom-bar
    Back-only sections:
      admin.sections.back-website
      admin.sections.instagram-qr

    No data variables are needed on the back.
--}}
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no, date=no, address=no, email=no">
<title>AGL Gemstone Certificate - Back</title>

@include('admin.sections.fonts')

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

/* Physical card */
.card {
    width: 3.3in;
    height: 2.1in;
    position: relative;
    overflow: hidden;
    page-break-after: always;
    break-after: page;
}

/* Design canvas */
.card-canvas {
    position: absolute;
    top: 0;
    left: 0;
    width: 1536px;
    height: 977.45px;
    transform-origin: 0 0;
    transform: scale(0.20625);
}

/* Kapoor Jewellers brand line */
.agl-kapoor-unit {
 	
    position: absolute;
    left: 0;
    right: 0;
    bottom: 105px;

    text-align: center;
    color: var(--agl-gold-text);

    font: 400 46px/1.2 'Allura', 'Brush Script MT', cursive;
    letter-spacing: 0.06em;
    white-space: nowrap;
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

<style>
.agl-png-download-controls {
    width: 3.3in;
    margin: 12px auto;
    display: flex;
    justify-content: center;
    font-family: Arial, sans-serif;
}
.agl-png-download-button {
    padding: 10px 16px;
    border: 0;
    border-radius: 5px;
    background: #202020;
    color: #ffffff;
    font-size: 14px;
    cursor: pointer;
}
.agl-png-download-button:disabled {
    opacity: .6;
    cursor: wait;
}
.agl-png-download-status {
    margin-left: 8px;
    align-self: center;
    font-size: 12px;
}
@media print {
    .agl-png-download-controls {
        display: none !important;
    }
}
</style>

<div class="agl-png-download-controls">
    <button type="button" class="agl-png-download-button" id="agl-png-download-button">
        Download Certificate Back PNG
    </button>
    <span class="agl-png-download-status" id="agl-png-download-status" role="status"></span>
</div>

<section class="card back">
    <div class="card-canvas">

        @include('admin.sections.base', ['aglWatermark' => false])
        @include('admin.sections.top-bar')
        @include('admin.sections.back-website')
        @include('admin.sections.instagram-qr')

        <!-- Kapoor Jewellers brand line -->
        <div class="agl-kapoor-unit">
            A Unit Of Kapoor Jewellers
        </div>

        @include('admin.sections.bottom-bar')

    </div>
</section>

<script src="{{ asset('public/js/html2canvas.min.js') }}"></script>
<script>
(function () {
    const button = document.getElementById('agl-png-download-button');
    const status = document.getElementById('agl-png-download-status');
    if (!button || !status) return;

    button.addEventListener('click', async function () {
        if (typeof window.html2canvas !== 'function') {
            status.textContent = 'Image library unavailable. Refresh and retry.';
            return;
        }

        button.disabled = true;
        status.textContent = 'Preparing high-resolution image...';

        try {
            if (document.fonts && document.fonts.ready) {
                await document.fonts.ready;
            }

            const card = document.querySelector('.card');
            if (!card) throw new Error('Certificate card not found.');

            const designWidth = 1536;
            const designHeight = 977.45;
            const outputWidth = 2031;
            const outputHeight = 1276;

            const rendered = await window.html2canvas(card, {
                backgroundColor: '#ffffff',
                scale: outputWidth / designWidth,
                width: designWidth,
                height: designHeight,
                windowWidth: designWidth,
                windowHeight: Math.ceil(designHeight),
                scrollX: 0,
                scrollY: 0,
                useCORS: true,
                allowTaint: false,
                onclone: function (doc) {
                    const html = doc.documentElement;
                    const body = doc.body;
                    const clonedCard = doc.querySelector('.card');
                    const canvas = doc.querySelector('.card-canvas');

                    html.style.width = designWidth + 'px';
                    html.style.height = designHeight + 'px';
                    body.style.width = designWidth + 'px';
                    body.style.height = designHeight + 'px';
                    body.style.margin = '0';
                    body.style.padding = '0';
                    body.style.overflow = 'hidden';

                    if (clonedCard) {
                        clonedCard.style.width = designWidth + 'px';
                        clonedCard.style.height = designHeight + 'px';
                        clonedCard.style.margin = '0';
                        clonedCard.style.overflow = 'hidden';
                        clonedCard.style.position = 'relative';
                    }

                    if (canvas) {
                        canvas.style.width = designWidth + 'px';
                        canvas.style.height = designHeight + 'px';
                        canvas.style.transform = 'none';
                        canvas.style.position = 'absolute';
                        canvas.style.left = '0';
                        canvas.style.top = '0';
                    }

                    doc.querySelectorAll('.agl-png-download-controls')
                        .forEach(function (el) { el.remove(); });
                }
            });

            const output = document.createElement('canvas');
            output.width = outputWidth;
            output.height = outputHeight;

            const context = output.getContext('2d');
            if (!context) throw new Error('Could not prepare PNG image.');

            context.fillStyle = '#ffffff';
            context.fillRect(0, 0, outputWidth, outputHeight);
            context.drawImage(
                rendered, 0, 0, rendered.width, rendered.height,
                0, 0, outputWidth, outputHeight
            );

            const blob = await new Promise(function (resolve, reject) {
                output.toBlob(function (result) {
                    if (result) resolve(result);
                    else reject(new Error('PNG creation failed.'));
                }, 'image/png');
            });

            const url = URL.createObjectURL(blob);
            const link = document.createElement('a');
            link.href = url;
            link.download = 'AGL-certificate-back.png';
            document.body.appendChild(link);
            link.click();
            link.remove();
            setTimeout(function () { URL.revokeObjectURL(url); }, 2000);

            status.textContent = 'PNG download started.';
        } catch (error) {
            console.error('Certificate PNG export failed:', error);
            status.textContent = 'Export failed. Check the browser console.';
        } finally {
            button.disabled = false;
        }
    });
})();
</script>

</body>
</html>
