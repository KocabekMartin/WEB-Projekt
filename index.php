<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/css.css">
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
                    <a class="nav-link text-dark" href="ukoly/pocitac.php">Pocitac.php </a>
                </li>
            </ul>
        </div>
    </nav>
</header><header class="py-3">
    <div class="container px-lg-5">
        <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
            <div class="m-4 m-lg-5">
                <h1 class="display-5 fw-bold" id="A2">Moje Stránka</h1>
                <p class="fs-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae pharetra est. Nunc non nulla vulputate, tristique risus accumsan, rhoncus dui. Nulla consectetur felis orci, nec tempor ligula tempor ut. Phasellus iaculis nisi a ante placerat lacinia.</p>
                <a class="btn btn-primary btn-lg" href="#A1">Prozkoumat</a>
            </div>
        </div>
    </div>
</header>
<div class="container"><div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
<div class="col"> <div class="card shadow-sm"> <img src="./img/ananas.jpg" height="225" ><div class="card-body"> <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>  </div> </div> </div>
<div class="col"> <div class="card shadow-sm"> <img src="./img/icetea.jpg" height="225" ><div class="card-body"> <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>  </div> </div> </div>
<div class="col"> <div class="card shadow-sm"> <img src="./img/cheeseburger.jpg" height="225"><div class="card-body"> <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>  </div> </div> </div>
</div></div>
<br>
<div class="container">
<div class="row g-4 py-5 row-cols-1 row-cols-lg-3 " id="A1"> <div class="feature col"> <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3"> <i class="bi bi-chat-fill p-1 m-1"></i> </div> <h3 class="fs-2 text-body-emphasis">Zprávy</h3> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pellentesque, lorem sit amet lobortis scelerisque, sem odio rutrum eros, sed bibendum lacus enim in erat.</p> <a href="zpravy.php" class="icon-link">
    Prohlédnout
    <svg class="bi" aria-hidden="true"><use xlink:href="#chevron-right"></use></svg> </a> </div> <div class="feature col"> <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3"> <i class="bi bi-envelope-fill m-1 py-1"></i> </div> <h3 class="fs-2 text-body-emphasis">Emaily</h3> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pellentesque, lorem sit amet lobortis scelerisque, sem odio rutrum eros, sed bibendum lacus enim in erat.</p> <a href="emaily.php" class="icon-link">
    Podívat
    <svg class="bi" aria-hidden="true"><use xlink:href="#chevron-right"></use></svg> </a> </div> <div class="feature col"> <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3"> <i class="bi bi-wifi m-1 py-1"></i> </div> <h3 class="fs-2 text-body-emphasis">Internet</h3> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pellentesque, lorem sit amet lobortis scelerisque, sem odio rutrum eros, sed bibendum lacus enim in erat.</p> <a href="internet.php" class="icon-link">
    Rozkliknout
    <svg class="bi" aria-hidden="true"><use xlink:href="#chevron-right"></use></svg> </a> </div> </div> </div>
<div class="container px-lg-5">
    <div class="p-4 text-center">
        <div class="m-4 m-lg-5">
<a class="btn btn-secondary btn-lg" href="#A2">Vrátit zpět</a>
        </div>
    </div>
</div>

<div class="container"> <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top"> <div class="col-md-4 d-flex align-items-center"> <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1" aria-label="Bootstrap"> <svg class="bi" width="30" height="24" aria-hidden="true"><use xlink:href="#bootstrap"></use></svg> </a> <span class="mb-3 mb-md-0 text-body-secondary">© 2026 Kocábek Martin</span> </div> <ul class="nav col-md-4 justify-content-end list-unstyled d-flex"> <li class="ms-3"><a class="text-body-secondary" href="https://instagram.com/marvonbrah" aria-label="Instagram"><i class="bi bi-instagram"></i></a></li> <li class="ms-3"><a class="text-body-secondary" href="https://youtube.com/@MarvonBrah" aria-label="Youtube"><i class="bi bi-youtube"></i></a></li> <li class="ms-3"><a class="text-body-secondary" href="https://x.com/StarMartan" aria-label="Twitter"><i class="bi bi-twitter-x"></i></i></a></li></ul> </footer> </div>


</body>
</html>