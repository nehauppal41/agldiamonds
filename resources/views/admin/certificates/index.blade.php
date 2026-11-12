<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Gemstone Certificates | Aureva Gemstone Laboratory</title>
    <style>
        :root {
            --black: #090909;
            --panel: #141414;
            --gold: #c8a05b;
            --gold-light: #e4c37d;
            --text: #f5f1e8;
            --muted: #aaa49a;
            --border: #393127;
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

        main {
            width: min(1200px, 90%);
            margin: 42px auto;
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
            color: var(--muted);
            line-height: 1.7;
        }

        .actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin: 25px 0;
        }

        .button {
            display: inline-block;
            padding: 11px 16px;
            border: 1px solid var(--gold);
            border-radius: 5px;
            color: var(--gold-light);
            text-decoration: none;
            font-size: 13px;
        }

        .button.primary {
            background: var(--gold);
            color: #090909;
            font-weight: bold;
        }

        .button:hover { opacity: .85; }

        .notice {
            margin: 20px 0;
            padding: 14px 16px;
            border: 1px solid #405a3e;
            border-radius: 6px;
            background: #142014;
            color: #c9e6c3;
            line-height: 1.6;
        }

        .table-wrap {
            overflow-x: auto;
            border: 1px solid var(--border);
            border-radius: 8px;
            background: var(--panel);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 900px;
        }

        th, td {
            padding: 15px 16px;
            border-bottom: 1px solid var(--border);
            text-align: left;
            vertical-align: middle;
            font-size: 13px;
        }

        th {
            color: var(--gold-light);
            background: #191714;
            font-size: 11px;
            letter-spacing: 1px;
            text-transform: uppercase;
            white-space: nowrap;
        }

        tbody tr:last-child td { border-bottom: 0; }
        tbody tr:hover { background: #1b1916; }

        .report {
            color: var(--gold-light);
            font-weight: bold;
            white-space: nowrap;
        }

        .muted { color: var(--muted); }

        .status {
            display: inline-block;
            padding: 5px 9px;
            border-radius: 4px;
            font-size: 11px;
            white-space: nowrap;
        }

        .published {
            border: 1px solid #405a3e;
            color: #b9dfb3;
            background: #142014;
        }

        .draft {
            border: 1px solid #66533a;
            color: #e4c37d;
            background: #211b12;
        }

        .print-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            min-width: 175px;
        }

        .button.small {
            padding: 8px 10px;
            font-size: 12px;
            white-space: nowrap;
        }

        .action-menu {
            position: relative;
            display: inline-block;
        }

        .action-menu summary {
            list-style: none;
            cursor: pointer;
            border: 1px solid var(--gold);
            border-radius: 5px;
            color: var(--gold-light);
            padding: 6px 12px;
            font-size: 22px;
            line-height: 1;
            text-align: center;
        }

        .action-menu summary::-webkit-details-marker { display: none; }

        .action-menu[open] .menu-items {
            position: absolute;
            right: 0;
            top: calc(100% + 5px);
            z-index: 20;
            min-width: 165px;
            padding: 6px;
            border: 1px solid var(--border);
            border-radius: 6px;
            background: #191714;
            box-shadow: 0 8px 20px #0009;
        }

        .menu-items a,
        .menu-items button {
            display: block;
            width: 100%;
            padding: 10px;
            border: 0;
            border-radius: 4px;
            background: transparent;
            color: var(--text);
            text-align: left;
            text-decoration: none;
            font: inherit;
            font-size: 13px;
            cursor: pointer;
        }

        .menu-items a:hover,
        .menu-items button:hover { background: #30291f; }

        .menu-items .danger { color: #ffaaaa; }

        .inline-form { margin: 0; }

        .empty {
            padding: 42px 20px;
            text-align: center;
            color: var(--muted);
            line-height: 1.8;
        }

        .empty strong {
            display: block;
            margin-bottom: 8px;
            color: var(--gold-light);
            font-size: 17px;
            font-weight: 500;
        }

        .pagination {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
            padding: 18px 0;
            color: var(--muted);
            font-size: 13px;
        }

        .pagination nav { display: flex; gap: 6px; }
        .pagination nav a,
        .pagination nav span {
            display: inline-block;
            padding: 7px 10px;
            border: 1px solid var(--border);
            border-radius: 4px;
            color: var(--gold-light);
            text-decoration: none;
        }

        .pagination nav span[aria-current="page"] {
            background: var(--gold);
            color: var(--black);
        }

        @media (max-width: 480px) {
            header { padding: 15px 5%; }
            .brand { font-size: 17px; }
            main { margin-top: 30px; }
        }
    </style>
</head>
<body>
<header>
    <div class="brand">
        Aureva
        <small>Gemstone Laboratory</small>
    </div>
    <a class="button" href="{{ route('admin.dashboard') }}">Dashboard</a>
</header>

<main>
    <div class="eyebrow">Certificate Management</div>

<h1>
    {{ $type === 'diamond' ? 'Diamond Certificates' : 'Gemstone Certificates' }}
</h1>

<p class="intro">
    {{ $type === 'diamond'
        ? 'View and manage diamond certification records.'
        : 'View and manage gemstone certification records.' }}
</p>

<div class="actions" style="margin-top: 18px;">
    <a
        class="button {{ $type === 'gemstone' ? 'primary' : '' }}"
        href="{{ route('admin.certificates.index', ['type' => 'gemstone', 'trash' => !empty($trash) && $trash ? 1 : null]) }}"
    >
        Gemstone Certificates ({{ $certificates->total() }})
    </a>

    <a
        class="button {{ $type === 'diamond' ? 'primary' : '' }}"
        href="{{ route('admin.certificates.index', ['type' => 'diamond', 'trash' => !empty($trash) && $trash ? 1 : null]) }}"
    >
        Diamond Certificates ({{ $diamonds->total() }})
    </a>
</div>

    <div class="actions">
        @if (empty($trash) || ! $trash)
            <a class="button primary" href="{{ route('admin.certificates.create') }}">
                + Add New Certificate
            </a>
            <a class="button" href="{{ route('admin.certificates.index', ['type' => $type, 'trash' => 1]) }}">
                Trash
            </a>
        @else
            <a class="button primary" href="{{ route('admin.certificates.index', ['type' => $type]) }}">
                Back to Active Certificates
            </a>
        @endif
        <a class="button" href="{{ route('admin.dashboard') }}">
            Back to Dashboard
        </a>
    </div>

    @if (session('status'))
        <div class="notice">{{ session('status') }}</div>
    @endif

    <form method="GET" action="{{ route('admin.certificates.index') }}"
          class="actions" style="margin: 18px 0; align-items: center;">

        <input type="hidden" name="type" value="{{ $type }}">

        @if (!empty($trash) && $trash)
            <input type="hidden" name="trash" value="1">
        @endif

        <input
            type="text"
            name="search"
            value="{{ $search }}"
            placeholder="Enter Report Number (e.g. AGL2611)"
            style="width: 320px; max-width: 100%; padding: 11px 14px;
                   border: 1px solid #c8a05b; border-radius: 6px;"
        >

        <button type="submit" class="button primary">
            Search
        </button>

        @if ($search !== '')
            <a class="button"
               href="{{ route('admin.certificates.index', [
                   'type' => $type,
                   'trash' => $trash ? 1 : null
               ]) }}">
                Clear Search
            </a>
        @endif
    </form>

    
<div class="table-wrap">
    @if ($type === 'diamond')
        @if ($diamonds->count())
            <table>
                <thead>
                    <tr>
                        <th>Report Number</th>
                        <th>Diamond Type</th>
                        <th>Description</th>
                        <th>Total Carat Weight</th>
                        <th>Issue Date</th>
                        <th>Status</th>
                        <th>Print Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($diamonds as $diamond)
                        <tr>
                            <td class="report">
                                {{ $diamond->report_number }}
                            </td>
                            <td>
                                {{ ucfirst($diamond->diamond_type) }}
                            </td>
                            <td>
                                {{ $diamond->description ?: '—' }}
                            </td>
                            <td>
                                {{ $diamond->total_carat_weight !== null
                                    ? $diamond->total_carat_weight . ' ct'
                                    : '—' }}
                            </td>
                            <td>
                                {{ $diamond->issue_date
                                    ? $diamond->issue_date->format('d M Y')
                                    : '—' }}
                            </td>
                            <td>
                                @if ($diamond->is_published)
                                    <span class="status published">Published</span>
                                @else
                                    <span class="status draft">Draft</span>
                                @endif
                            </td>
                            <td>
                                @if (!empty($trash) && $trash)
                                    <form class="inline-form" method="POST"
                                          action="{{ route('admin.diamonds.restore', $diamond->id) }}"
                                          onsubmit="return confirm('Restore this diamond certificate?');">
                                        @csrf
                                        <button class="button small" type="submit">Restore</button>
                                    </form>
                                @else
                                    <details class="action-menu">
                                        <summary aria-label="Certificate actions">⋮</summary>
                                        <div class="menu-items">
                                            <a href="{{ route('admin.diamonds.edit', $diamond) }}">Edit</a>
                                            <a href="{{ route('admin.diamonds.print.front', $diamond) }}" target="_blank" rel="noopener">Print Front</a>
                                            <a href="{{ route('admin.diamonds.print.back', $diamond) }}" target="_blank" rel="noopener">Print Back</a>
                                            <form class="inline-form" method="POST"
                                                  action="{{ route('admin.diamonds.destroy', $diamond) }}"
                                                  onsubmit="return confirm('Move this diamond certificate to Trash?');">
                                                @csrf
                                                @method('DELETE')
                                                <button class="danger" type="submit">Delete</button>
                                            </form>
                                        </div>
                                    </details>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="empty">
                <strong>No diamond certificates yet</strong>
                Diamond certificate records will appear here after you create them.
                <div style="margin-top:18px">
                    <a class="button primary"
                       href="{{ route('admin.certificates.create') }}">
                        Create a Diamond Certificate
                    </a>
                </div>
            </div>
        @endif
    @else
        @if ($certificates->count())
            <table>
                <thead>
                    <tr>
                        <th>Report Number</th>
                        <th>Identification</th>
                        <th>Weight</th>
                        <th>Issue Date</th>
                        <th>Status</th>
                        <th>Print Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($certificates as $certificate)
                        <tr>
                            <td class="report">
                                {{ $certificate->report_number }}
                            </td>
                            <td>
                                {{ $certificate->identification }}
                                @if ($certificate->variety)
                                    <div class="muted" style="margin-top:5px">
                                        {{ $certificate->variety }}
                                    </div>
                                @endif
                            </td>
                            <td>
                                {{ $certificate->weight !== null
                                    ? $certificate->weight . ' ct'
                                    : '—' }}
                            </td>
                            <td>
                                {{ $certificate->issue_date
                                    ? $certificate->issue_date->format('d M Y')
                                    : '—' }}
                            </td>
                            <td>
                                @if ($certificate->is_published)
                                    <span class="status published">Published</span>
                                @else
                                    <span class="status draft">Draft</span>
                                @endif
                            </td>
                            <td>
                                @if (!empty($trash) && $trash)
                                    <form class="inline-form" method="POST"
                                          action="{{ route('admin.certificates.restore', $certificate->id) }}"
                                          onsubmit="return confirm('Restore this gemstone certificate?');">
                                        @csrf
                                        <button class="button small" type="submit">Restore</button>
                                    </form>
                                @else
                                    <details class="action-menu">
                                        <summary aria-label="Certificate actions">⋮</summary>
                                        <div class="menu-items">
                                            <a href="{{ route('admin.certificates.edit', $certificate) }}">Edit</a>
                                            <a href="{{ route('admin.certificates.print.white.front', $certificate) }}" target="_blank" rel="noopener">Print Front</a>
                                            <a href="{{ route('admin.sections.back', $certificate) }}" target="_blank" rel="noopener">Print Back</a>
                                            <form class="inline-form" method="POST"
                                                  action="{{ route('admin.certificates.destroy', $certificate) }}"
                                                  onsubmit="return confirm('Move this gemstone certificate to Trash?');">
                                                @csrf
                                                @method('DELETE')
                                                <button class="danger" type="submit">Delete</button>
                                            </form>
                                        </div>
                                    </details>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="empty">
                <strong>No gemstone certificates yet</strong>
                Your gemstone certificate records will appear here after you create them.
                <div style="margin-top:18px">
                    <a class="button primary"
                       href="{{ route('admin.certificates.create') }}">
                        Create a Gemstone Certificate
                    </a>
                </div>
            </div>
        @endif
    @endif
</div>


@if ($type === 'diamond' && $diamonds->hasPages())
    <div class="pagination">
        <span>
            Showing {{ $diamonds->firstItem() }}–{{ $diamonds->lastItem() }}
            of {{ $diamonds->total() }} diamond certificates
        </span>
        {{ $diamonds->appends([
            'type' => 'diamond',
            'trash' => $trash ? 1 : null,
            'search' => $search !== '' ? $search : null,
        ])->links() }}
    </div>
@elseif ($type !== 'diamond' && $certificates->hasPages())
    <div class="pagination">
        <span>
            Showing {{ $certificates->firstItem() }}–{{ $certificates->lastItem() }}
            of {{ $certificates->total() }} gemstone certificates
        </span>
        {{ $certificates->appends([
            'type' => 'gemstone',
            'trash' => $trash ? 1 : null,
            'search' => $search !== '' ? $search : null,
        ])->links() }}
    </div>
@endif


</main>
</body>
</html>
