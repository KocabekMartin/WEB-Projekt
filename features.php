<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/css.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <title>Kocábek Martin - Portfolio</title>
</head>
<body>
<header class="bg-white shadow-sm">
    <!-- navbar-expand-md zajistí sendvič pouze na mobilu (<768px), od md výše je menu rozbalené -->
    <nav class="navbar navbar-expand-md navbar-light bg-white container py-3">
        <!-- Logo / Brand -->
        <a href="/" class="navbar-brand d-flex align-items-center text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" aria-hidden="true"><use href="#bootstrap"></use></svg>
            <span class="fs-4 fw-bold">Kocábek Martin</span>
        </a>

        <!-- Hamburger tlačítko (zobrazí se pouze na mobilech) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Obsah navigace -->
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-md-0 gap-md-1">
                <li class="nav-item">
                    <a class="nav-link active fw-semibold" aria-current="page" href="./index.php">Domů</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="./zpravy.php">Zprávy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="./emaily.php">Emaily</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="./internet.php">Internet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="./pocitac.php">Pocitac.php </a>
                </li>
            </ul>
        </div>
    </nav>
</header>

</body>
</html>