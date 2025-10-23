<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - KerjaKebun</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --brand-green: #0A4F41;
            --brand-gold: #DAA520;
            --background-color: #f7f9fc;
            --card-background: white;
            --text-primary: #1f2937;
            --text-secondary: #6b7280;
            --border-color: #e5e7eb;
            --error-red-bg: #fef2f2;
            --error-red-text: #b91c1c;
            --error-red-border: #fecaca;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--background-color);
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 1rem;
        }

        .login-card {
            background-color: var(--card-background);
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            overflow: hidden;
        }

        .card-header {
            background-color: var(--brand-green);
            color: white;
            padding: 1.5rem 2rem;
            text-align: center;
        }

        .brand-title {
            font-size: 1.75rem;
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .brand-title .fa-leaf {
            color: var(--brand-gold);
            margin-right: 0.75rem;
        }

        .card-header p {
            margin-top: 0.5rem;
            margin-bottom: 0;
            color: #d1d5db;
            font-weight: 500;
        }

        .card-body {
            padding: 2rem;
        }

        /* === STYLE BARU UNTUK PESAN ERROR === */
        .error-banner {
            background-color: var(--error-red-bg);
            color: var(--error-red-text);
            border: 1px solid var(--error-red-border);
            border-radius: 8px;
            padding: 1rem;
            margin-bottom: 1.5rem;
            font-weight: 500;
            display: flex;
            align-items: center;
        }

        .error-banner i {
            margin-right: 0.75rem;
        }

        .error-banner ul {
            padding-left: 1.25rem;
            margin: 0;
        }
        /* === AKHIR STYLE BARU === */

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--text-primary);
        }

        .form-control {
            width: 100%;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            border: 1px solid var(--border-color);
            font-size: 1rem;
            transition: border-color 0.2s, box-shadow 0.2s;
            box-sizing: border-box;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--brand-green);
            box-shadow: 0 0 0 3px rgba(10, 79, 65, 0.1);
        }

        .btn-primary {
            width: 100%;
            font-weight: 600;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            transition: all 0.2s ease-in-out;
            border: none;
            cursor: pointer;
            background-color: var(--brand-green);
            color: white;
            font-size: 1rem;
            box-shadow: 0 1px 2px rgba(0,0,0,0.1);
        }

        .btn-primary:hover {
            background-color: #083b30;
            transform: translateY(-1px);
        }

        .card-footer {
            background-color: #f9fafb;
            text-align: center;
            padding: 1.5rem;
            border-top: 1px solid var(--border-color);
        }

        .card-footer p {
            margin: 0;
            color: var(--text-secondary);
        }

        .card-footer a {
            color: var(--brand-green);
            text-decoration: none;
            font-weight: 600;
        }

        .card-footer a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

    <div class="login-card">
        <div class="card-header">
            <h1 class="brand-title"><i class="fas fa-leaf"></i>KerjaKebun</h1>
            <p>Silakan masuk ke akun Anda</p>
        </div>
        <div class="card-body">

            <!-- === BLOK PESAN ERROR YANG DIPERBARUI === -->
            @if (session()->has('error'))
                <div class="error-banner" role="alert">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span>{{ session('error') }}</span>
                </div>
            @endif

            @if ($errors->any())
                <div class="error-banner">
                    <div>
                        <i class="fas fa-exclamation-triangle"></i>
                        <span>Terdapat beberapa kesalahan:</span>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            <!-- === AKHIR BLOK === -->

            <form action="{{ route('home.pegawai.login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username Anda" value="{{ old('username') }}" required>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password Anda" required>
                </div>
                <button type="submit" class="btn-primary">Login</button>
            </form>
        </div>
        <div class="card-footer">
            <p>Belum punya akun? <a href="{{route('show.signup.pekerja')}}">Daftar di sini</a></p>
        </div>
    </div>

</body>
</html>
