<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 80px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark p-3 fixed-top">
        <div class="container-fluid">
            <a href="/" class="navbar-brand">moviewatchd</a>
            <a href="/trash" class="btn btn-warning">Trash</a>
        </div>
    </nav>

    <div class="container mt-6 pt-4">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
