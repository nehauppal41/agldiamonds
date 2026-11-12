<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Add Certificate | Aureva Gemstone Laboratory</title>
    <style>
        :root {
            --black: #090909;
            --panel: #141414;
            --gold: #c8a05b;
            --gold-light: #e4c37d;
            --text: #f5f1e8;
            --muted: #aaa49a;
            --border: #393127;
            --error: #ffaaa0;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            min-height: 100vh;
            background: var(--black);
            color: var(--text);
            font-family: Arial, Helvetica, sans-serif;
        }

        header {
            min-height: 76px;
            padding: 16px 5%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            border-bottom: 1px solid var(--border);
            background: #101010;
        }

        .brand {
            color: var(--gold-light);
            font-family: Georgia, "Times New Roman", serif;
            font-size: 21px;
            letter-spacing: 1px;
        }

        .brand small {
            display: block;
            margin-top: 5px;
            color: var(--muted);
            font-family: Arial, Helvetica, sans-serif;
            font-size: 10px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .button {
            display: inline-block;
            padding: 10px 15px;
            border: 1px solid var(--gold);
            border-radius: 5px;
            background: transparent;
            color: var(--gold-light);
            font-size: 13px;
            text-decoration: none;
            cursor: pointer;
        }

        .button.primary {
            background: var(--gold);
            color: #090909;
            font-weight: bold;
        }

        main {
            width: min(1000px, 90%);
            margin: 40px auto 60px;
        }

        .eyebrow {
            color: var(--gold);
            font-size: 11px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        h1 {
            margin: 12px 0;
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(27px, 4vw, 38px);
            font-weight: 500;
        }

        .intro {
            margin-bottom: 28px;
            color: var(--muted);
            line-height: 1.7;
        }

        .panel {
            padding: 26px;
            border: 1px solid var(--border);
            border-radius: 9px;
            background: var(--panel);
        }

        .section-title {
            margin: 0 0 20px;
            padding-bottom: 12px;
            border-bottom: 1px solid var(--border);
            color: var(--gold-light);
            font-family: Georgia, "Times New Roman", serif;
            font-size: 21px;
            font-weight: 500;
        }

        .fields {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 20px;
        }

        .field { min-width: 0; }
        .field.full { grid-column: 1 / -1; }

        label {
            display: block;
            margin-bottom: 8px;
            color: var(--text);
            font-size: 13px;
        }

        .required { color: var(--gold-light); }

        input, select, textarea {
            display: block;
            width: 100%;
            min-height: 43px;
            padding: 11px 12px;
            border: 1px solid var(--border);
            border-radius: 5px;
            outline: none;
            background: #0c0c0c;
            color: var(--text);
            font: inherit;
            font-size: 14px;
        }

        textarea {
            min-height: 100px;
            resize: vertical;
            line-height: 1.5;
        }

        input:focus, select:focus, textarea:focus {
            border-color: var(--gold);
        }

        input[type="file"] {
            min-height: auto;
            padding: 10px;
        }

        input[type="checkbox"] {
            display: inline-block;
            width: 17px;
            min-height: 17px;
            margin: 0;
            accent-color: var(--gold);
            vertical-align: middle;
        }

        .help {
            display: block;
            margin-top: 7px;
            color: var(--muted);
            font-size: 12px;
            line-height: 1.5;
        }

        .error-summary {
            margin-bottom: 24px;
            padding: 15px 18px;
            border: 1px solid #783e38;
            border-radius: 6px;
            background: #241211;
            color: var(--error);
        }

        .error-summary ul {
            margin: 8px 0 0;
            padding-left: 20px;
            line-height: 1.7;
        }

        .error {
            display: block;
            margin-top: 7px;
            color: var(--error);
            font-size: 12px;
        }

        .publish-option {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            padding: 14px;
            border: 1px solid var(--border);
            border-radius: 5px;
            background: #101010;
        }

        .publish-option label {
            margin: 0;
            line-height: 1.6;
            cursor: pointer;
        }

        .actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 26px;
        }

        @media (max-width: 620px) {
            header { padding: 15px 5%; }
            .brand { font-size: 17px; }
            main { margin-top: 28px; }
            .panel { padding: 18px; }
            .fields { grid-template-columns: 1fr; gap: 17px; }
            .field.full { grid-column: auto; }
        }
    </style>
</head>
<body>
<header>
    <div class="brand">
        Aureva
        <small>Gemstone Laboratory</small>
    </div>
    <a class="button" href="{{ route('admin.certificates.index') }}">Certificates</a>
</header>

<main>
    <div class="eyebrow">Certificate Management</div>
    <h1>Add New Certificate</h1>
    <p class="intro">
        Enter the gemstone information below. The report number and public certificate ID
        will be generated automatically when the record is saved.
    </p>

    @if ($errors->any())
        <div class="error-summary">
            <strong>Please correct the following errors:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST"
          action="{{ route('admin.certificates.store') }}"
          enctype="multipart/form-data">
        @csrf

        <section class="panel">
            <h2 class="section-title">Gemstone Identification</h2>

            <div class="fields">
                <div class="field full">
                    <label for="identification">
                        Identification <span class="required">*</span>
                    </label>
                    <input id="identification" name="identification" type="text"
                           value="{{ old('identification') }}"
                           maxlength="150" required
                           placeholder="e.g. Natural Ruby">
                    @error('identification')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="field">
                    <label for="species">Species</label>
                    <input id="species" name="species" type="text"
                           value="{{ old('species') }}" maxlength="100"
                           placeholder="e.g. Corundum">
                    @error('species')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="field">
                    <label for="variety">Variety</label>
                    <input id="variety" name="variety" type="text"
                           value="{{ old('variety') }}" maxlength="100"
                           placeholder="e.g. Ruby">
                    @error('variety')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="field">
                    <label for="shape">Shape / Cut</label>
                    <input id="shape" name="shape" type="text"
                           value="{{ old('shape') }}" maxlength="100"
                           placeholder="e.g. Oval Mixed Cut">
                    @error('shape')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="field">
                    <label for="weight">Weight (carats)</label>
                    <input id="weight" name="weight" type="number"
                           value="{{ old('weight') }}" min="0" max="9999999.999"
                           step="0.001" placeholder="e.g. 2.350">
                    @error('weight')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="field">
                    <label for="dimensions">Dimensions</label>
                    <input id="dimensions" name="dimensions" type="text"
                           value="{{ old('dimensions') }}" maxlength="100"
                           placeholder="e.g. 8.20 × 6.10 × 4.30 mm">
                    @error('dimensions')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="field">
                    <label for="color">Color</label>
                    <input id="color" name="color" type="text"
                           value="{{ old('color') }}" maxlength="100"
                           placeholder="e.g. Deep Red">
                    @error('color')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="field">
                    <label for="clarity">Clarity</label>
                    <input id="clarity" name="clarity" type="text"
                           value="{{ old('clarity') }}" maxlength="100"
                           placeholder="Enter clarity">
                    @error('clarity')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                                    <div class="field">
                    <label for="refractive_index">Refractive Index (RI)</label>
                    <input id="refractive_index"
                           name="refractive_index"
                           type="number"
                           value="{{ old('refractive_index') }}"
                           min="0.001"
                           max="99.999"
                           step="0.001"
                           placeholder="e.g. 1.762">
                    <span class="help">Enter the measured refractive index to three decimal places.</span>
                    @error('refractive_index')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="field">
                    <label for="treatment">Treatment</label>
                    <input id="treatment" name="treatment" type="text"
                           value="{{ old('treatment') }}" maxlength="10000"
                           placeholder="e.g. No indication of treatment">
                    @error('treatment')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="field">
                    <label for="origin">Origin</label>
                    <input id="origin" name="origin" type="text"
                           value="{{ old('origin') }}" maxlength="150"
                           placeholder="Enter origin if known">
                    @error('origin')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="field full">
                    <label for="comments">Comments / Additional Notes</label>
                    <textarea id="comments" name="comments"
                              maxlength="10000"
                              placeholder="Optional laboratory notes">{{ old('comments') }}</textarea>
                    @error('comments')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </section>

        <section class="panel" style="margin-top:22px">
            <h2 class="section-title">Certificate Details</h2>

            <div class="fields">
                <div class="field">
                    <label for="issue_date">Issue Date</label>
                    <input id="issue_date" name="issue_date" type="date"
                           value="{{ old('issue_date', now()->format('Y-m-d')) }}">
                    @error('issue_date')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="field">
                    <label for="gemstone_photo">Gemstone Photograph</label>
                    <input id="gemstone_photo" name="gemstone_photo" type="file"
                           accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp">
                    <span class="help">Optional. JPG, PNG or WebP; maximum 5 MB.</span>
                    @error('gemstone_photo')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="field full">
                    <div class="publish-option">
                        <input id="is_published" name="is_published" type="checkbox"
                               value="1" {{ old('is_published') ? 'checked' : '' }}>
                        <label for="is_published">
                            <strong>Publish this certificate</strong>
                            <span class="help">
                                Leave unchecked to save it as a draft. Public verification
                                access will be implemented separately.
                            </span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="actions">
                <button type="submit" class="button primary">Save Certificate</button>
                <a href="{{ route('admin.certificates.index') }}" class="button">Cancel</a>
            </div>
        </section>
    </form>
</main>
</body>
</html>
