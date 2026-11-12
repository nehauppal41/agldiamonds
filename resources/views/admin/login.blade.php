<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Admin Login | Aureva Gemstone Laboratory</title>
    <style>
        :root {
            --black: #090909;
            --panel: #121212;
            --gold: #c8a05b;
            --gold-light: #e4c37d;
            --text: #f5f1e8;
            --muted: #aaa49a;
            --border: #393127;
            --error: #ff8585;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            background:
                radial-gradient(ellipse at top, #282016 0%, transparent 52%),
                var(--black);
            color: var(--text);
            font-family: Arial, Helvetica, sans-serif;
        }

        .login-card {
            width: 100%;
            max-width: 430px;
            padding: 42px 36px;
            background: rgba(18, 18, 18, .97);
            border: 1px solid var(--border);
            border-radius: 14px;
            box-shadow: 0 24px 80px rgba(0, 0, 0, .45);
        }

        .brand {
            text-align: center;
            margin-bottom: 32px;
        }

        .brand-mark {
            width: 58px;
            height: 58px;
            margin: 0 auto 17px;
            display: grid;
            place-items: center;
            border: 1px solid var(--gold);
            color: var(--gold-light);
            font-size: 28px;
            transform: rotate(45deg);
        }

        .brand-mark span { transform: rotate(-45deg); }

        .brand h1 {
            margin: 0;
            color: var(--gold-light);
            font-family: Georgia, "Times New Roman", serif;
            font-size: 23px;
            font-weight: 500;
            letter-spacing: 1.5px;
        }

        .brand p {
            margin: 9px 0 0;
            color: var(--muted);
            font-size: 10px;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .heading {
            margin: 0 0 7px;
            text-align: center;
            font-size: 21px;
            font-weight: 500;
        }

        .subtitle {
            margin: 0 0 28px;
            color: var(--muted);
            text-align: center;
            font-size: 13px;
            line-height: 1.6;
        }

        .field { margin-bottom: 19px; }

        label {
            display: block;
            margin-bottom: 8px;
            color: #e6dfd2;
            font-size: 13px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            height: 48px;
            padding: 0 14px;
            border: 1px solid #454039;
            border-radius: 6px;
            outline: none;
            background: #0b0b0b;
            color: var(--text);
            font-size: 14px;
        }

        input:focus {
            border-color: var(--gold);
            box-shadow: 0 0 0 3px rgba(200, 160, 91, .12);
        }

        .options {
            display: flex;
            align-items: center;
            margin: 2px 0 23px;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--muted);
            font-size: 12px;
        }

        .remember input { accent-color: var(--gold); }

        button {
            width: 100%;
            min-height: 49px;
            border: 0;
            border-radius: 6px;
            background: linear-gradient(110deg, var(--gold), var(--gold-light));
            color: #17120a;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: .7px;
            cursor: pointer;
        }

        button:hover { filter: brightness(1.08); }
        button:focus-visible { outline: 2px solid white; outline-offset: 3px; }

        .error {
            margin: 0 0 18px;
            padding: 11px 12px;
            border: 1px solid #693737;
            border-radius: 6px;
            background: #271616;
            color: var(--error);
            font-size: 13px;
            line-height: 1.5;
        }

        .status {
            margin-bottom: 18px;
            color: var(--gold-light);
            font-size: 13px;
            text-align: center;
        }

        .footer {
            margin-top: 28px;
            padding-top: 19px;
            border-top: 1px solid #302a22;
            color: #827c72;
            text-align: center;
            font-size: 11px;
            line-height: 1.7;
        }

        @media (max-width: 480px) {
            body { padding: 16px; }
            .login-card { padding: 34px 23px; }
            .brand h1 { font-size: 20px; }
        }
    </style>
</head>
<body>
    <main class="login-card">
        <header class="brand">
            <div class="brand-mark" aria-hidden="true"><span>✧</span></div>
            <h1>Aureva</h1>
            <p>Gemstone Laboratory</p>
        </header>

        <h2 class="heading">Admin Portal</h2>
        <p class="subtitle">Sign in to manage gemstone certificates.</p>

        @if ($errors->any())
            <div class="error" role="alert">
                {{ $errors->first() }}
            </div>
        @endif

        @if (session('status'))
            <div class="status" role="status">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf

            <div class="field">
                <label for="email">Email address</label>
                <input
                    id="email"
                    name="email"
                    type="email"
                    value="{{ old('email') }}"
                    placeholder="admin@example.com"
                    autocomplete="username"
                    maxlength="254"
                    required
                    autofocus
                >
            </div>

            <div class="field">
                <label for="password">Password</label>
                <input
                    id="password"
                    name="password"
                    type="password"
                    placeholder="Enter your password"
                    autocomplete="current-password"
                    required
                >
            </div>

            <div class="options">
                <label class="remember">
                    <input type="checkbox" name="remember" value="1">
                    Remember me
                </label>
            </div>

            <button type="submit">SIGN IN SECURELY</button>
        </form>

        <footer class="footer">
            AGL · Aureva Gemstone Laboratory<br>
            Authorized access only
        </footer>
    </main>
</body>
</html>
