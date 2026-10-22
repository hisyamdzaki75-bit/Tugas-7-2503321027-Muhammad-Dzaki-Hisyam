<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porsche Management Center</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body { background-color: #0d0e12; color: #f8f9fa; }
        .card { background-color: #161922; border: 1px solid #2a2e3d; color: #fff; }
        .navbar { background-color: #000000 !important; border-bottom: 2px solid #d90429; }
        .table-dark { --bs-table-bg: #161922; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold text-uppercase" href="{{ route('porsche.index') }}">
                <i class="bi bi-car-front-fill text-danger me-2"></i> PORSCHE CENTER
            </a>
        </div>
    </nav>

    <div class="container mb-5">
        @yield('content')
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>