<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('desa.nama', 'Portal Desa Digital') }} - Desa Prodi TI</title>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

        <style>
            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

            body {
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: #f2eee5;
                background-image: radial-gradient(#c2bbb0 1.6px, transparent 1.6px);
                background-size: 24px 24px;
                font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
                color: #222222;
                padding: 1.5rem;
            }

            .card {
                background-color: #faf7f2;
                border: 2.5px solid #222222;
                border-radius: 24px;
                box-shadow: 5px 6px 0px #222222;
                width: 100%;
                max-width: 440px;
                padding: 42px 36px 38px;
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
                transition: transform 0.2s ease, box-shadow 0.2s ease;
            }

            .badge {
                display: inline-block;
                background-color: #b7c8af;
                border: 1.5px solid #222222;
                border-radius: 9999px;
                padding: 5px 18px;
                font-size: 0.72rem;
                font-weight: 700;
                letter-spacing: 0.08em;
                text-transform: uppercase;
                color: #242921;
                margin-bottom: 18px;
            }

            .title {
                font-family: 'DM Serif Display', Georgia, serif;
                font-size: 2.5rem;
                line-height: 1.15;
                font-weight: 700;
                color: #1a1a1a;
                margin-bottom: 8px;
                letter-spacing: -0.01em;
            }

            .subtitle {
                font-size: 1.05rem;
                color: #78756d;
                font-weight: 400;
                margin-bottom: 28px;
            }

            .btn-start {
                display: inline-block;
                background-color: #314a33;
                color: #ffffff;
                text-decoration: none;
                border: 1.8px solid #1e3020;
                border-radius: 14px;
                padding: 10px 32px;
                font-size: 0.95rem;
                font-weight: 600;
                cursor: pointer;
                box-shadow: 2px 3px 0px #1e3020;
                transition: all 0.15s ease;
            }

            .btn-start:hover {
                background-color: #263c28;
                transform: translate(1px, 1px);
                box-shadow: 1px 2px 0px #1e3020;
            }

            .btn-start:active {
                transform: translate(2px, 3px);
                box-shadow: 0px 0px 0px #1e3020;
            }
        </style>
    </head>
    <body>
        <div class="card">
            <span class="badge">Selamat Datang</span>
            <h1 class="title">Desa Prodi TI</h1>
            <p class="subtitle">Portal Desa Digital</p>
            <a href="#" class="btn-start">Mulai</a>
        </div>
    </body>
</html>
