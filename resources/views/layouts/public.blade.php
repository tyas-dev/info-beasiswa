<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Info Beasiswa')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Lexend:wght@600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7f6;
        }
        .navbar-brand, h1, h2, h3, h4, h5, h6 {
            font-family: 'Lexend', sans-serif; /* Font modern untuk heading */
        }
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: #212529 !important; /* Warna hitam pekat, !important untuk memaksa */
        }
        .scholarship-card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-decoration: none;
            color: inherit;
            display: block;
        }
        .scholarship-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        .scholarship-card .card-img-top {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            height: 220px;
            object-fit: cover;
        }
        .btn-primary {
            background-color: #4A90E2; border-color: #4A90E2;
            border-radius: 50px; padding: 10px 25px; font-weight: 600;
        }
        .btn-primary:hover { background-color: #357ABD; border-color: #357ABD; }
        .search-form {
            max-width: 600px;
            margin: auto;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container py-2">
            <a class="navbar-brand" href="{{ route('home') }}">InfoBeasiswa</a>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-white mt-5">
        <div class="container text-center py-4">
            <p class="text-muted mb-0">&copy; {{ date('Y') }} InfoBeasiswa. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>