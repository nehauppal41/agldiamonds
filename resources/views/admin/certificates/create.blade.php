@php
    $editing = $editing ?? false;
    $certificateType = $certificateType ?? old('certificate_type', 'gemstone');
    $record = $record ?? ($diamond ?? ($certificate ?? null));
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>{{ $editing ? "Edit Certificate" : "Add Certificate" }} | Aureva Gemstone Laboratory</title>

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

        button:disabled {
            opacity: .5;
            cursor: not-allowed;
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

        select option {
            background: #141414;
            color: var(--text);
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

        .choice-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
        }

        .choice-card {
            position: relative;
            display: block;
            padding: 22px;
            border: 1px solid var(--border);
            border-radius: 8px;
            background: #101010;
            cursor: pointer;
            transition: border-color .2s, background .2s;
        }

        .choice-card:hover {
            border-color: var(--gold);
        }

        .choice-card:has(input:checked) {
            border-color: var(--gold-light);
            background: #211b11;
            box-shadow: inset 0 0 0 1px var(--gold);
        }

        .choice-card input[type="radio"] {
            width: 17px;
            min-height: 17px;
            margin: 0 0 15px;
            accent-color: var(--gold);
        }

        .choice-title {
            display: block;
            margin-bottom: 8px;
            color: var(--gold-light);
            font-family: Georgia, "Times New Roman", serif;
            font-size: 23px;
        }

        .choice-description {
            display: block;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.6;
        }

        .subtype-wrap {
            margin-top: 22px;
            padding-top: 22px;
            border-top: 1px solid var(--border);
        }

        .subtype-options {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 14px;
        }

        .subtype-option {
            padding: 16px;
            border: 1px solid var(--border);
            border-radius: 6px;
            background: #101010;
        }

        .subtype-option:has(input:checked) {
            border-color: var(--gold);
            background: #211b11;
        }

        .subtype-option label {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin: 0;
            cursor: pointer;
        }

        .subtype-option input[type="radio"] {
            width: 17px;
            min-height: 17px;
            margin-top: 2px;
            accent-color: var(--gold);
        }

        .subtype-option strong {
            display: block;
            margin-bottom: 5px;
            color: var(--gold-light);
        }

        .subtype-option .help {
            margin-top: 0;
        }

        .section-gap { margin-top: 22px; }

        [hidden] { display: none !important; }

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
            .fields,
            .choice-grid,
            .subtype-options {
                grid-template-columns: 1fr;
                gap: 17px;
            }
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

    <a class="button" href="{{ route('admin.certificates.index') }}">
        Certificates
    </a>
</header>

<main>
    <div class="eyebrow">Certificate Management</div>
    <h1>{{ $editing ? "Edit Certificate" : "Add New Certificate" }}</h1>

    <p class="intro">
        Select the certificate type and enter the relevant laboratory
        information. The report number and public certificate ID will be
        generated automatically when the record is saved.
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

    <form id="certificateForm"
      method="POST"
      action="{{ $editing ? ($certificateType === 'diamond' ? route('admin.diamonds.update', $record) : route('admin.certificates.update', $record)) : route('admin.certificates.store') }}"
      data-gemstone-action="{{ route('admin.certificates.store') }}"
      data-diamond-action="{{ route('admin.diamonds.store') }}"
      data-editing="{{ $editing ? '1' : '0' }}"
      enctype="multipart/form-data">

        @csrf
        @if ($editing)
            @method('PUT')
        @endif

        <!-- STEP 1: CERTIFICATE TYPE -->
        <section class="panel">
            <h2 class="section-title">1. Select Certificate Type</h2>

            <div class="choice-grid">
                <label class="choice-card" for="type_diamond">
                    <input
                        id="type_diamond"
                        type="radio"
                        name="certificate_type"
                        value="diamond"
                        required
                        {{ ($editing ? $certificateType : old('certificate_type', 'gemstone')) === 'diamond' ? 'checked' : '' }}
                        {{ $editing ? 'disabled' : '' }}>

                    <span class="choice-title">Diamond</span>
                    <span class="choice-description">
                        Diamond grading and identification, including
                        studded jewellery and solitaire certificates.
                    </span>
                </label>

                <label class="choice-card" for="type_gemstone">
                    <input
                        id="type_gemstone"
                        type="radio"
                        name="certificate_type"
                        value="gemstone"
                        {{ ($editing ? $certificateType : old('certificate_type', 'gemstone')) === 'gemstone' ? 'checked' : '' }}
                        {{ $editing ? 'disabled' : '' }}>

                    <span class="choice-title">Gemstone</span>
                    <span class="choice-description">
                        Gemstone identification, species, variety,
                        refractive index, treatment and origin.
                    </span>
                </label>
            </div>
        </section>

        <!-- DIAMOND CERTIFICATE -->
        <div id="diamondSection" class="section-gap" hidden>

            <section class="panel">
                <h2 class="section-title">2. Select Diamond Certificate Type</h2>

                <div class="subtype-options">
                    <div class="subtype-option">
                        <label for="diamond_studded">
                            <input
                                id="diamond_studded"
                                type="radio"
                                name="diamond_type"
                                value="studded"
                                {{ old('diamond_type', $record->diamond_type ?? '') === 'studded' ? 'checked' : '' }}>

                            <span>
                                <strong>Studded</strong>
                                <span class="help">
                                    For diamonds set in jewellery.
                                </span>
                            </span>
                        </label>
                    </div>

                    <div class="subtype-option">
                        <label for="diamond_solitaire">
                            <input
                                id="diamond_solitaire"
                                type="radio"
                                name="diamond_type"
                                value="solitaire"
                                {{ old('diamond_type', $record->diamond_type ?? '') === 'solitaire' ? 'checked' : '' }}>

                            <span>
                                <strong>Solitaire</strong>
                                <span class="help">
                                    For an individual diamond.
                                </span>
                            </span>
                        </label>
                    </div>
                </div>
            </section>

            <section class="panel section-gap">
                <h2 class="section-title">3. Diamond Identification</h2>

                <div class="fields">
                    <div class="field full">
                        <label for="diamond_description">
                            Description <span class="required">*</span>
                        </label>
                        <input
                            id="diamond_description"
                            name="description"
                            type="text"
                            value="{{ old('description', $record->description ?? '') }}"
                            maxlength="150"
                            placeholder="Enter diamond or jewellery description">
                    </div>

                    {{--
                    Original Jewellery Type field retained for future use:
                    <div class="field" data-studded-only>
                        <label for="jewellery_type">
                            Jewellery Type <span class="required">*</span>
                        </label>
                        <select id="jewellery_type" name="jewellery_type">
                            <option value="">Select jewellery type</option>
                            @foreach (['Ring', 'Pendant', 'Necklace', 'Earrings', 'Bracelet', 'Other'] as $jewelleryType)
                                <option value="{{ $jewelleryType }}"
                                    {{ old('jewellery_type', $record->jewellery_type ?? '') === $jewelleryType ? 'selected' : '' }}>
                                    {{ $jewelleryType }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    --}}

                    <div class="field" data-studded-only>
                        <label for="metal">Metal</label>
                        <input
                            id="metal"
                            name="metal"
                            type="text"
                            value="{{ old('metal', $record->metal ?? '') }}"
                            maxlength="100"
                            placeholder="e.g. 18K White Gold">
                    </div>

                    <div class="field">
                        <label for="total_weight">
                            Total Weight (grams)
                        </label>
                        <input
                            id="total_weight"
                            name="total_weight"
                            type="number"
                            value="{{ old('total_weight', $record->total_weight ?? '') }}"
                            min="0"
                            max="9999999.999"
                            step="0.001"
                            placeholder="e.g. 4.250">
                    </div>

                    <div class="field">
                        <label for="diamond_shape">
                            Diamond Shape <span class="required">*</span>
                        </label>
                        <select id="diamond_shape" name="diamond_shape">
                            <option value="">Select shape</option>
                            @foreach (['Round Brilliant', 'Oval', 'Princess', 'Emerald', 'Pear', 'Cushion', 'Radiant', 'Marquise', 'Heart', 'Asscher', 'Other'] as $shapeOption)
                                <option value="{{ $shapeOption }}"
                                    {{ old('diamond_shape', $record->diamond_shape ?? '') === $shapeOption ? 'selected' : '' }}>
                                    {{ $shapeOption }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="field">
                        <label for="total_carat_weight">
                            Total Carat Weight <span class="required">*</span>
                        </label>
                        <input
                            id="total_carat_weight"
                            name="total_carat_weight"
                            type="number"
                            value="{{ old('total_carat_weight', $record->total_carat_weight ?? '') }}"
                            min="0"
                            max="9999999.999"
                            step="0.001"
                            placeholder="e.g. 1.250">
                    </div>

                    <div class="field">
                        <label for="center_diamond_weight">
                            Center Diamond Weight (carats)
                        </label>
                        <input
                            id="center_diamond_weight"
                            name="center_diamond_weight"
                            type="number"
                            value="{{ old('center_diamond_weight', $record->center_diamond_weight ?? '') }}"
                            min="0"
                            max="9999999.999"
                            step="0.001"
                            placeholder="Optional">
                    </div>

                    {{--
                    Original Colour Grade dropdown retained for future use:
                    <div class="field">
                        <label for="color_grade">
                            Colour Grade <span class="required">*</span>
                        </label>
                        <select id="color_grade" name="color_grade">
                            <option value="">Select colour grade</option>
                            @foreach (['D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N-Z', 'Fancy Colour', 'Not Graded'] as $grade)
                                <option value="{{ $grade }}"
                                    {{ old('color_grade', $record->color_grade ?? '') === $grade ? 'selected' : '' }}>
                                    {{ $grade }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    --}}

                    <div class="field">
                        <label for="color_grade">
                            Colour Grade <span class="required">*</span>
                        </label>
                        <input id="color_grade" name="color_grade" type="text"
                            value="{{ old('color_grade', $record->color_grade ?? '') }}"
                            maxlength="50" placeholder="Enter colour grade" required>
                    </div>

                    {{--
                    Original Clarity Grade dropdown retained for future use:
                    <div class="field">
                        <label for="clarity_grade">
                            Clarity Grade <span class="required">*</span>
                        </label>
                        <select id="clarity_grade" name="clarity_grade">
                            <option value="">Select clarity grade</option>
                            @foreach (['FL', 'IF', 'VVS1', 'VVS2', 'VS1', 'VS2', 'SI1', 'SI2', 'I1', 'I2', 'I3', 'Not Graded'] as $clarityGrade)
                                <option value="{{ $clarityGrade }}"
                                    {{ old('clarity_grade', $record->clarity_grade ?? '') === $clarityGrade ? 'selected' : '' }}>
                                    {{ $clarityGrade }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    --}}

                    <div class="field">
                        <label for="clarity_grade">
                            Clarity Grade <span class="required">*</span>
                        </label>
                        <input id="clarity_grade" name="clarity_grade" type="text"
                            value="{{ old('clarity_grade', $record->clarity_grade ?? '') }}"
                            maxlength="50" placeholder="Enter clarity grade" required>
                    </div>

                    <div class="field">
                        <label for="cut_grade">Cut Grade</label>
                        <input id="cut_grade" name="cut_grade" type="text"
                            value="{{ old('cut_grade', $record->cut_grade ?? '') }}"
                            maxlength="50" placeholder="Optional">
                    </div>

                    <div class="field">
                        <label for="measurements">Measurements</label>
                        <input id="measurements" name="measurements" type="text"
                            value="{{ old('measurements', $record->measurements ?? '') }}"
                            maxlength="100" placeholder="e.g. 6.50 × 6.48 × 3.95 mm">
                    </div>

                    <div class="field">
                        <label for="polish">Polish</label>
                        <input id="polish" name="polish" type="text"
                            value="{{ old('polish', $record->polish ?? '') }}"
                            maxlength="50" placeholder="Optional">
                    </div>

                    <div class="field">
                        <label for="symmetry">Symmetry</label>
                        <input id="symmetry" name="symmetry" type="text"
                            value="{{ old('symmetry', $record->symmetry ?? '') }}"
                            maxlength="50" placeholder="Optional">
                    </div>

                    <div class="field">
                        <label for="fluorescence">Fluorescence</label>
                        <input id="fluorescence" name="fluorescence" type="text"
                            value="{{ old('fluorescence', $record->fluorescence ?? '') }}"
                            maxlength="100" placeholder="Optional">
                    </div>

                    <div class="field full">
                        <label for="diamond_comments">Comments / Additional Notes</label>
                        <textarea
                            id="diamond_comments"
                            name="diamond_comments"
                            maxlength="10000"
                            placeholder="Optional laboratory notes">{{ old('diamond_comments', $record->comments ?? '') }}</textarea>
                    </div>
                </div>
            </section>
        </div>

        <!-- GEMSTONE CERTIFICATE: EXISTING FIELDS PRESERVED -->
        <div id="gemstoneSection" class="section-gap">
            <section class="panel">
                <h2 class="section-title">2. Gemstone Identification</h2>

                <div class="fields">
                    <div class="field full">
                        <label for="identification">
                            Identification <span class="required">*</span>
                        </label>
                        <input id="identification" name="identification"
                               type="text" value="{{ old('identification', $record->identification ?? '') }}"
                               maxlength="150"
                               placeholder="e.g. Natural Ruby">
                        @error('identification')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="species">Species</label>
                        <input id="species" name="species" type="text"
                               value="{{ old('species', $record->species ?? '') }}" maxlength="100"
                               placeholder="e.g. Corundum">
                        @error('species')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="variety">Variety</label>
                        <input id="variety" name="variety" type="text"
                               value="{{ old('variety', $record->variety ?? '') }}" maxlength="100"
                               placeholder="e.g. Ruby">
                        @error('variety')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="shape">Shape / Cut</label>
                        <input id="shape" name="shape" type="text"
                               value="{{ old('shape', $record->shape ?? '') }}" maxlength="100"
                               placeholder="e.g. Oval Mixed Cut">
                        @error('shape')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="weight">Weight (carats)</label>
                        <input id="weight" name="weight" type="number"
                               value="{{ old('weight', $record->weight ?? '') }}" min="0"
                               max="9999999.999" step="0.001"
                               placeholder="e.g. 2.350">
                        @error('weight')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="dimensions">Dimensions</label>
                        <input id="dimensions" name="dimensions" type="text"
                               value="{{ old('dimensions', $record->dimensions ?? '') }}" maxlength="100"
                               placeholder="e.g. 8.20 × 6.10 × 4.30 mm">
                        @error('dimensions')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="color">Color</label>
                        <input id="color" name="color" type="text"
                               value="{{ old('color', $record->color ?? '') }}" maxlength="100"
                               placeholder="e.g. Deep Red">
                        @error('color')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>



                  <div class="field">
    				<label for="refractive_index">Refractive Index (RI)</label>
    				<input id="refractive_index"
           				name="refractive_index"
           				type="text"
           				value="{{ old('refractive_index', $record->refractive_index ?? '') }}"
           				maxlength="30"
           				placeholder="e.g. 1.0 - 1.8">
    					<span class="help">
        				Enter the refractive index range (e.g. 1.0 - 1.8).
    			</span>
    				@error('refractive_index')
        				<span class="error">{{ $message }}</span>
    				@enderror
				</div>

                    <div class="field">
                        <label for="hardness">Hardness (Mohs)</label>
                        <input id="hardness" name="hardness" type="text"
                               value="{{ old('hardness', $record->hardness ?? '') }}"
                               maxlength="50"
                               placeholder="e.g. 7 - 7.5">
                        @error('hardness')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="treatment">Treatment</label>
                        <input id="treatment" name="treatment" type="text"
                               value="{{ old('treatment', $record->treatment ?? '') }}" maxlength="10000"
                               placeholder="e.g. No indication of treatment">
                        @error('treatment')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="origin">Origin</label>
                        <input id="origin" name="origin" type="text"
                               value="{{ old('origin', $record->origin ?? '') }}" maxlength="150"
                               placeholder="Enter origin if known">
                        @error('origin')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="field full">
                        <label for="comments">Comments / Additional Notes</label>
                        <textarea id="comments" name="comments"
                                  maxlength="10000"
                                  placeholder="Optional laboratory notes">{{ old('comments', $record->comments ?? '') }}</textarea>
                        @error('comments')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </section>
        </div>

        <!-- CERTIFICATE DETAILS SHARED BY BOTH TYPES -->
        <section class="panel section-gap">
            <h2 class="section-title">Certificate Details</h2>

            <div class="fields">
                <div class="field">
                    <label for="issue_date">Issue Date</label>
                    <input id="issue_date" name="issue_date" type="date"
                           value="{{ old('issue_date', ($record && $record->issue_date) ? date('Y-m-d', strtotime($record->issue_date)) : now()->format('Y-m-d')) }}">
                    @error('issue_date')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="field">
                    <label for="gemstone_photo">Gemstone / Diamond Photograph</label>
                    <input id="gemstone_photo" name="gemstone_photo" type="file"
                           accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp">
                    <span class="help">
                        Optional. JPG, PNG or WebP; maximum 5 MB.
                        @if ($editing && $record && ($record->gemstone_photo ?? $record->diamond_photo ?? null))
                            Existing photograph is saved. Leave this blank to keep it.
                        @endif
                    </span>
                    @error('gemstone_photo')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="field full">
                    <div class="publish-option">
                        <input id="is_published" name="is_published" type="checkbox"
                               value="1" {{ old('is_published', $record->is_published ?? false) ? 'checked' : '' }}>
                        <label for="is_published">
                            <strong>Publish this certificate</strong>
                            <span class="help">
                                Leave unchecked to save it as a draft.
                            </span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="actions">
                <button type="submit" class="button primary">
                    {{ $editing ? 'Update Certificate' : 'Save Certificate' }}
                </button>

                <a href="{{ route('admin.certificates.index') }}" class="button">
                    Cancel
                </a>
            </div>
        </section>
    </form>
</main>

<script>
(function () {
    'use strict';

    const form = document.getElementById('certificateForm');
    const diamondSection = document.getElementById('diamondSection');
    const gemstoneSection = document.getElementById('gemstoneSection');

    const typeInputs = document.querySelectorAll(
        'input[name="certificate_type"]'
    );

    const subtypeInputs = document.querySelectorAll(
        'input[name="diamond_type"]'
    );

    function setSectionEnabled(section, enabled) {
        section.querySelectorAll('input, select, textarea').forEach(function (field) {
            field.disabled = !enabled;
        });
    }

    function updateCertificateType() {
        const selectedType = document.querySelector(
            'input[name="certificate_type"]:checked'
        );

        const isDiamond = selectedType && selectedType.value === 'diamond';
		if (form.dataset.editing !== '1') {
		    form.action = isDiamond
		        ? form.dataset.diamondAction
		        : form.dataset.gemstoneAction;
		}
        diamondSection.hidden = !isDiamond;
        gemstoneSection.hidden = isDiamond;

        setSectionEnabled(diamondSection, Boolean(isDiamond));
        setSectionEnabled(gemstoneSection, !isDiamond);

        const diamondType = document.querySelector(
            'input[name="diamond_type"]:checked'
        );

        const selectedSubtype = diamondType ? diamondType.value : '';

        const diamondRequiredFields = [
            'description',
            'diamond_shape',
            'total_carat_weight',
            'color_grade',
            'clarity_grade'
        ];

        diamondRequiredFields.forEach(function (name) {
            const field = form.elements.namedItem(name);
            if (field) {
                field.required = Boolean(isDiamond);
            }
        });

        /*
         * Original Jewellery Type required-field logic retained for future use:
         *
         * const jewelleryType = document.getElementById('jewellery_type');
         *
         * if (jewelleryType) {
         *     jewelleryType.required =
         *         Boolean(isDiamond) && selectedSubtype === 'studded';
         * }
         */

        document.querySelectorAll('[data-studded-only]').forEach(function (element) {
            element.hidden = selectedSubtype !== 'studded';
        });

        if (isDiamond && !selectedSubtype) {
            // The diamond subtype must be selected before saving.
            subtypeInputs.forEach(function (input) {
                input.required = true;
            });
        } else {
            subtypeInputs.forEach(function (input) {
                input.required = false;
            });
        }
    }

    typeInputs.forEach(function (input) {
        input.addEventListener('change', updateCertificateType);
    });

    subtypeInputs.forEach(function (input) {
        input.addEventListener('change', updateCertificateType);
    });

    form.addEventListener('submit', function (event) {
        const selectedType = document.querySelector(
            'input[name="certificate_type"]:checked'
        );

        if (selectedType && selectedType.value === 'diamond') {
            const selectedSubtype = document.querySelector(
                'input[name="diamond_type"]:checked'
            );

            if (!selectedSubtype) {
                event.preventDefault();
                alert('Please select Studded or Solitaire.');
                document.getElementById('diamond_studded').focus();
            }
        }
    });

    updateCertificateType();
})();
</script>
</body>
</html>
