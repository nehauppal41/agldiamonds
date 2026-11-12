<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Dashboard | Aureva Gemstone Laboratory</title>
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

        .logout {
            padding: 10px 16px;
            border: 1px solid var(--gold);
            border-radius: 5px;
            background: transparent;
            color: var(--gold-light);
            font-size: 13px;
            cursor: pointer;
        }

        .logout:hover { background: #292116; }

        main {
            width: min(1100px, 90%);
            margin: 48px auto;
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
            font-size: clamp(28px, 4vw, 40px);
            font-weight: 500;
        }

        .intro {
            color: var(--muted);
            line-height: 1.7;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
            margin-top: 36px;
        }

        .card {
            display: block;
            min-height: 170px;
            padding: 25px;
            border: 1px solid var(--border);
            border-radius: 9px;
            background: var(--panel);
            color: inherit;
            text-decoration: none;
            transition: border-color .2s, background .2s, transform .2s;
        }

        a.card:hover {
            border-color: var(--gold);
            background: #191714;
            transform: translateY(-2px);
        }

        .card h2 {
            margin: 0 0 12px;
            color: var(--gold-light);
            font-size: 17px;
            font-weight: 500;
        }

        .card p {
            margin: 0;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.7;
        }

        .card-action {
            display: inline-block;
            margin-top: 18px;
            color: var(--gold);
            font-size: 11px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .coming {
            display: inline-block;
            margin-top: 17px;
            color: var(--gold);
            font-size: 10px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        @media (max-width: 480px) {
            header { padding: 15px 5%; }
            .brand { font-size: 17px; }
            .logout { padding: 9px 11px; }
            main { margin-top: 34px; }
        }
    </style>
</head>
<body>
    <header>
        <div class="brand">
            Aureva
            <small>Gemstone Laboratory</small>
        </div>

        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button class="logout" type="submit">Log out</button>
        </form>
    </header>

    <main>
        <div class="eyebrow">Administration</div>
        <h1>Welcome to AGL</h1>
        <p class="intro">
            Hello, {{ auth()->user()->name }}. Manage your laboratory
            operations and gemstone certification from one place.
        </p>

        <section class="grid">
            <a class="card" href="{{ route('admin.certificates.index') }}">
                <h2>Gemstone Certificates</h2>
                <p>View and manage your gemstone certificate records.</p>
                <span class="card-action">View Certificates &rarr;</span>
            </a>

            <a class="card" href="{{ route('admin.certificates.create') }}">
                <h2>Add New Certificate</h2>
                <p>Enter gemstone details and upload the associated photograph.</p>
                <span class="card-action">Create Certificate &rarr;</span>
            </a>

            <article class="card">
                <h2>User Management</h2>
                <p>Manage administrator and standard user access.</p>
                <span class="coming">Future development phase</span>
            </article>
        </section>
    </main>
</body>
</html>
