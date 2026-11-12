{{--
    AGL GEMSTONE / DIAMOND CERTIFICATE - FRONT (main file)

    This file only assembles the card. Each visual block lives in its own file
    under  resources/views/admin/sections/  so any block can be reused
    on another card (e.g. the back side) with a single @include line.

    Design canvas
    -------------
    All sections are laid out in "design pixels" on a 1536 x 977 canvas, which is
    scaled down to the physical card size (3.3in x 2.1in) by .card-canvas below.
    Any section can therefore be dropped onto another card as long as that card
    uses the same .card > .card-canvas wrapper.

    Sections (stacked bottom to top)
    --------------------------------
      1. base.blade.php          white card, gold frame, watermark
      2. top-bar.blade.php       navy header with gold corner stripes, logo, motto
      3. left-section.blade.php  title, subtitle and all certificate fields
      4. feature-strip.blade.php four icons below the fields
      5. right-section.blade.php photos, identification result, QR, seal, signature
      6. bottom-bar.blade.php    navy footer with address, phones, tagline

    Data expected by the sections
    -----------------------------
      $diamond        (all fields exactly as in the previous template)
      $photoUrl       main photo
      $topViewUrl     optional - top view photo   (both optional photos must be
      $sideViewUrl    optional - side view photo   present to show the 3-photo layout)
      $qrDataUri      QR code image
--}}
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no, date=no, address=no, email=no">
<title>AGL Gemstone Certificate - Front</title>

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

/* Design canvas: 1536 x 977.45 design px  ->  3.3in x 2.1in  (scale = 3.3in / 1536px = 0.20625) */
.card-canvas {
    position: absolute;
    top: 0;
    left: 0;
    width: 1536px;
    height: 977.45px;
    transform-origin: 0 0;
    transform: scale(0.20625);
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

<div class="agl-png-download-controls"><button type="button" class="agl-png-download-button" id="agl-png-download-button">Download Diamond Front PNG</button><span class="agl-png-download-status" id="agl-png-download-status" role="status"></span></div>


<section class="card front">
    <div class="card-canvas">

        @include('admin.sections.base')
        @include('admin.sections.top-bar')
        @include('admin.sections.left-section')
        @include('admin.sections.feature-strip')
        @include('admin.sections.right-section')
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
            link.download = 'AGL-diamond-front.png';
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
