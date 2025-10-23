<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pekerja - KerjaKebun</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f7f9fc;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #0A4F41;
            color: white;
            padding: 1.2rem 2rem;
            text-align: center;
        }
        main {
            text-align: center;
            margin-top: 60px;
        }
        .card {
            display: inline-block;
            background-color: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            max-width: 450px;
        }
        .logout-btn {
            display: inline-block;
            margin-top: 1.5rem;
            background-color: #DAA520;
            color: white;
            text-decoration: none;
            padding: 0.7rem 1.5rem;
            border-radius: 8px;
            font-weight: bold;
        }
        .logout-btn:hover {
            background-color: #b8860b;
        }
    </style>
</head>
<body>

<header>
    <h1>Selamat Datang di Dashboard KerjaKebun</h1>
</header>

<main>
    <div class="card">
        <h2>Halo, {{ session('username') }}</h2>
        <p>Waktu Login: {{ session('login_time') ?? $login_time }}</p>
        
        <a href="{{ route('home.Pegawai') }}" class="logout-btn"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
           Logout
        </a>

        <form id="logout-form" action="{{ route('home.Pegawai') }}" method="GET" style="display: none;"
              onsubmit="{{ session()->forget(['username', 'nama', 'login_time']) }}">
        </form>
    </div>
</main>

</body>
</html>
