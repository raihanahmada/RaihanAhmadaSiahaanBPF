<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Modern | My Laravel App</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <style>
        :root {
            --primary-color: #007bff;
            --primary-color-dark: #0056b3;
            --secondary-color: #6c757d;
            --light-bg: #f4f7fa;
            --card-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            --card-radius: 12px;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light-bg);
        }

        /* Navbar Style */
        .navbar {
            background-color: var(--primary-color) !important;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: 700;
            color: white !important;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.7) !important;
            transition: color 0.3s ease;
        }

        .nav-link:hover, .nav-link.active {
            color: white !important;
            font-weight: 600;
        }

        /* Hero Section Style */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-color-dark));
            color: white;
            padding: 80px 0;
            text-align: center;
            margin-bottom: 40px;
            box-shadow: 0 6px 15px rgba(0, 123, 255, 0.3);
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .hero-section p {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        /* Card Modern Style */
        .card {
            margin-top: 30px;
            border: none;
            border-radius: var(--card-radius);
            box-shadow: var(--card-shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        /* Button Modern Style */
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            border-radius: 8px;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: var(--primary-color-dark);
            border-color: var(--primary-color-dark);
        }

        /* Table Style */
        .table-responsive {
            border-radius: var(--card-radius);
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .table thead th {
            font-weight: 600;
            background-color: #e9ecef;
        }

        /* Footer Style */
        .footer {
            margin-top: 60px;
            padding: 30px 0;
            background-color: white;
            text-align: center;
            border-top: 1px solid #e0e0e0;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.05);
        }

        .footer p {
            margin: 0;
            font-size: 0.9rem;
            color: var(--secondary-color);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="bi bi-box-seam me-2"></i>My Laravel App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house-door-fill me-1"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-star-fill me-1"></i>Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-tags-fill me-1"></i>Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-envelope-fill me-1"></i>Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-section">
        <div class="container">
            <div class="mb-3">
                <i class="bi bi-person-circle" style="font-size: 4rem;"></i>
            </div>
            <h1>Halo, {{ $username ?? 'Pengguna' }}!</h1>
            <p class="mt-3">Akses terakhir: {{ $last_login ?? 'Belum ada data' }}</p>
            <a href="#" class="btn btn-light btn-lg mt-3" style="border-radius: 25px; font-weight: 600;">Lihat Dashboard</a>
        </div>
    </section>

    <section id="content" class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-3"><i class="bi bi-info-circle-fill me-2 text-primary"></i>Tentang Aplikasi Kami</h5>
                        <p class="card-text">Aplikasi kami menawarkan antarmuka yang bersih dan intuitif, memungkinkan navigasi dan pelaksanaan tugas yang efisien. Dibangun dengan Laravel dan Bootstrap, menjamin fleksibilitas dan responsivitas.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary mt-2">Pelajari Lebih Lanjut</a>

                        <hr class="my-4">

                        <div class="accordion" id="accordionModern">
                            <div class="accordion-item" style="border-radius: 8px;">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" style="font-weight: 600;">
                                        About Us
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionModern">
                                    <div class="accordion-body">
                                        Kami adalah perusahaan teknologi yang mengkhususkan diri pada solusi pengembangan web modern.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" style="border-radius: 8px;">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" style="font-weight: 600;">
                                        Our Services
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionModern">
                                    <div class="accordion-body">
                                        Kami menawarkan layanan pengembangan web, optimasi SEO, dan pemasaran digital.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-3"><i class="bi bi-tools me-2 text-secondary"></i>Komponen Umum</h5>

                        <h6 class="mb-2">Badges:</h6>
                        <div class="mb-4">
                            <span class="badge rounded-pill text-bg-primary me-2">Web Dev</span>
                            <span class="badge rounded-pill text-bg-success me-2">Laravel</span>
                            <span class="badge rounded-pill text-bg-danger me-2">Bootstrap</span>
                        </div>

                        <h6 class="mb-2">List Group:</h6>
                        <ul class="list-group list-group-flush mb-4" style="border-radius: 8px; overflow: hidden;">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Item Satu
                                <span class="badge text-bg-primary rounded-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Item Dua
                                <span class="badge text-bg-success rounded-pill">2</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Item Tiga
                                <span class="badge text-bg-secondary rounded-pill">1</span>
                            </li>
                        </ul>

                        <div class="p-3 border rounded bg-light" style="border-left: 5px solid var(--primary-color);">
                            <strong>Container Khusus</strong> — Konten yang disorot dengan border kiri.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-3"><i class="bi bi-exclamation-triangle-fill me-2 text-warning"></i>Pesan Peringatan (Alerts)</h5>
                        <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <i class="bi bi-info-circle-fill flex-shrink-0 me-2"></i><div>Informational alert</div>
                        </div>
                        <div class="alert alert-success d-flex align-items-center" role="alert">
                            <i class="bi bi-check-circle-fill flex-shrink-0 me-2"></i><div>Success alert</div>
                        </div>
                        <div class="alert alert-warning d-flex align-items-center" role="alert">
                            <i class="bi bi-exclamation-circle-fill flex-shrink-0 me-2"></i><div>Warning alert</div>
                        </div>
                        <div class="alert alert-danger d-flex align-items-center mb-0" role="alert">
                            <i class="bi bi-x-octagon-fill flex-shrink-0 me-2"></i><div>Danger alert</div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-3"><i class="bi bi-joystick me-2 text-info"></i>Tombol (Buttons)</h5>
                        <div class="d-flex flex-wrap gap-3">
                            <button class="btn btn-primary btn-lg shadow-sm">Primary</button>
                            <button class="btn btn-secondary shadow-sm">Secondary</button>
                            <button class="btn btn-outline-primary shadow-sm">Outline</button>
                            <button class="btn btn-success shadow-sm"><i class="bi bi-save me-1"></i>Simpan</button>
                            <button class="btn btn-danger shadow-sm"><i class="bi bi-trash-fill me-1"></i>Hapus</button>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-3"><i class="bi bi-table me-2 text-success"></i>Tabel Data</h5>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped align-middle">
                                <thead class="table-primary">
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Ani</td>
                                        <td><span class="badge text-bg-primary">Admin</span></td>
                                        <td><span class="badge text-bg-success"><i class="bi bi-check-circle"></i> Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Budi</td>
                                        <td><span class="badge text-bg-secondary">User</span></td>
                                        <td><span class="badge text-bg-secondary"><i class="bi bi-slash-circle"></i> Inactive</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Cici</td>
                                        <td><span class="badge text-bg-info">Editor</span></td>
                                        <td><span class="badge text-bg-warning"><i class="bi bi-clock"></i> Pending</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="text-muted small mb-0 mt-3">Tabel menggunakan kelas <code>.table-hover</code> dan <code>.table-striped</code> untuk tampilan yang lebih baik.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} My Laravel App. Didesain Modern. 🚀</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
