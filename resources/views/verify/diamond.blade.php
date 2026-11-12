<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Diamond Verification | Aureva Gemstone Laboratory</title>
    <style>
        :root {
            --black: #0b0b0b;
            --panel: #141414;
            --gold: #c8a05b;
            --gold-light: #e4c37d;
            --text: #f4f0e7;
            --muted: #b8b1a3;
            --border: rgba(200, 160, 91, 0.35);
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            min-height: 100vh;
            padding: 32px 16px;
            background: radial-gradient(ellipse at top, #292015 0%, var(--black) 55%);
            color: var(--text);
            font-family: Arial, Helvetica, sans-serif;
        }
        .container { width: 100%; max-width: 760px; margin: 0 auto; }
        .header { text-align: center; padding: 20px 12px 28px; }
        .brand {
            color: var(--gold-light);
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(25px, 5vw, 36px);
            letter-spacing: 3px;
            margin: 0;
        }
        .subtitle {
            color: var(--muted);
            font-size: 11px;
            letter-spacing: 3px;
            margin-top: 10px;
            text-transform: uppercase;
        }
        .card {
            overflow: hidden;
            background: var(--panel);
            border: 1px solid var(--border);
            border-radius: 12px;
            box-shadow: 0 20px 55px rgba(0, 0, 0, 0.4);
        }
        .status {
            padding: 22px;
            text-align: center;
            background: rgba(200, 160, 91, 0.08);
            border-bottom: 1px solid var(--border);
        }
        .status-mark {
            display: inline-flex;
            width: 42px;
            height: 42px;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--gold);
            border-radius: 50%;
            color: var(--gold-light);
            font-size: 23px;
            margin-bottom: 10px;
        }
        .status h2 { margin: 0; color: var(--gold-light); font-size: 20px; letter-spacing: 1px; }
        .status p { color: var(--muted); font-size: 13px; margin: 9px 0 0; line-height: 1.6; }
        .details { padding: 25px; }
        .report-number {
            color: var(--gold-light);
            font-family: Georgia, "Times New Roman", serif;
            font-size: 23px;
            overflow-wrap: anywhere;
            text-align: center;
            margin: 0 0 25px;
        }
        .diamond-photo-wrap {
            max-width: 340px;
            margin: 0 auto 26px;
            padding: 12px;
            text-align: center;
            background: #0b0b0b;
            border: 1px solid var(--border);
            border-radius: 10px;
        }
        .diamond-photo {
            display: block;
            width: 100%;
            max-height: 340px;
            object-fit: contain;
            margin: 0 auto;
            border-radius: 6px;
        }
        .grid { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 0 22px; }
        .field { padding: 14px 0; border-bottom: 1px solid rgba(255, 255, 255, 0.08); min-width: 0; }
        .label {
            display: block;
            color: var(--muted);
            font-size: 10px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 7px;
        }
        .value { color: var(--text); font-size: 15px; line-height: 1.5; overflow-wrap: anywhere; white-space: pre-line; }
        .footer { text-align: center; color: var(--muted); font-size: 12px; line-height: 1.8; padding: 24px 12px 8px; }
        .footer a { color: var(--gold-light); text-decoration: none; }
        @media (max-width: 520px) {
            body { padding: 18px 12px; }
            .details { padding: 18px; }
            .grid { grid-template-columns: 1fr; }
            .report-number { font-size: 20px; }
        }
        @media print {
            body { background: #fff; color: #111; padding: 0; }
            .card { box-shadow: none; border: 1px solid #999; }
            .status, .brand, .report-number {
                print-color-adjust: exact;
                -webkit-print-color-adjust: exact;
            }
        }
    </style>
</head>
<body>
<main class="container">
    <header class="header">
        <h1 class="brand">AUREVA</h1>
        <div class="subtitle">Gemstone Laboratory</div>
    </header>

    <section class="card" aria-label="Diamond certificate verification result">
        <div class="status">
            <div class="status-mark" aria-hidden="true">✓</div>
            <h2>Diamond Certificate Verified</h2>
            <p>
                This diamond certificate record was found in the AGL verification system.
                The details below correspond to the published record.
            </p>
        </div>

        <div class="details">
            <div class="report-number">{{ $diamond->report_number }}</div>

            @if ($photoUrl)
                <div class="diamond-photo-wrap">
                    <img class="diamond-photo"
                         src="{{ $photoUrl }}"
                         alt="Diamond photograph for report {{ $diamond->report_number }}">
                </div>
            @endif

            <div class="grid">
                <div class="field">
                    <span class="label">Diamond Type</span>
                    <div class="value">{{ $diamond->diamond_type ? ucfirst($diamond->diamond_type) : '—' }}</div>
                </div>
                <div class="field">
                    <span class="label">Identification</span>
                    <div class="value">{{ $diamond->identification ?: '—' }}</div>
                </div>
                <div class="field">
                    <span class="label">Jewellery Type</span>
                    <div class="value">{{ $diamond->jewellery_type ?: '—' }}</div>
                </div>
                <div class="field">
                    <span class="label">Metal</span>
                    <div class="value">{{ $diamond->metal ?: '—' }}</div>
                </div>
                <div class="field">
                    <span class="label">Total Weight</span>
                    <div class="value">{{ $diamond->total_weight !== null ? $diamond->total_weight : '—' }}</div>
                </div>
                <div class="field">
                    <span class="label">Total Carat Weight</span>
                    <div class="value">{{ $diamond->total_carat_weight !== null ? $diamond->total_carat_weight . ' ct' : '—' }}</div>
                </div>
                <div class="field">
                    <span class="label">Center Diamond Weight</span>
                    <div class="value">{{ $diamond->center_diamond_weight !== null ? $diamond->center_diamond_weight . ' ct' : '—' }}</div>
                </div>
                <div class="field">
                    <span class="label">Diamond Shape</span>
                    <div class="value">{{ $diamond->diamond_shape ?: '—' }}</div>
                </div>
                <div class="field">
                    <span class="label">Color Grade</span>
                    <div class="value">{{ $diamond->color_grade ?: '—' }}</div>
                </div>
                <div class="field">
                    <span class="label">Clarity Grade</span>
                    <div class="value">{{ $diamond->clarity_grade ?: '—' }}</div>
                </div>
                <div class="field">
                    <span class="label">Cut Grade</span>
                    <div class="value">{{ $diamond->cut_grade ?: '—' }}</div>
                </div>
                <div class="field">
                    <span class="label">Measurements</span>
                    <div class="value">{{ $diamond->measurements ?: '—' }}</div>
                </div>
                <div class="field">
                    <span class="label">Polish</span>
                    <div class="value">{{ $diamond->polish ?: '—' }}</div>
                </div>
                <div class="field">
                    <span class="label">Symmetry</span>
                    <div class="value">{{ $diamond->symmetry ?: '—' }}</div>
                </div>
                <div class="field">
                    <span class="label">Fluorescence</span>
                    <div class="value">{{ $diamond->fluorescence ?: '—' }}</div>
                </div>
                <div class="field">
                    <span class="label">Issue Date</span>
                    <div class="value">{{ $diamond->issue_date ? \Illuminate\Support\Carbon::parse($diamond->issue_date)->format('d-m-Y') : '—' }}</div>
                </div>
                <div class="field">
                    <span class="label">Description</span>
                    <div class="value">{{ $diamond->description ?: '—' }}</div>
                </div>
                @if ($diamond->comments)
                    <div class="field">
                        <span class="label">Comments</span>
                        <div class="value">{{ $diamond->comments }}</div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <footer class="footer">
        <div>Independent Gemological Laboratory</div>
        <a href="https://www.agldiamonds.com/">www.agldiamonds.com</a>
        <div>For questions about this report, contact AGL directly.</div>
    </footer>
</main>
</body>
</html>
