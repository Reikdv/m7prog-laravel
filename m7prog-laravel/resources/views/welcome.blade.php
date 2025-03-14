<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kattenrassen</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Zorgt ervoor dat de footer onderaan de pagina staat */
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }
    .content {
      flex: 1;
    }
  </style>
</head>
<body>

  <!-- Navigatiebalk -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Kattenrassen</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Rassen</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Tips</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Content Wrapper -->
  <div class="content">
    <!-- Hero Sectie -->
    <header class="bg-primary text-white text-center py-5">
      <div class="container">
        <h1>Ontdek de Wereld van Kattenrassen</h1>
        <p class="lead">Lees alles over de unieke eigenschappen van onze favoriete katten</p>
        <a href="#" class="btn btn-light btn-lg">Lees meer</a>
      </div>
    </header>

    <!-- Kattenrassen Sectie -->
    <section class="container py-5">
      <div class="row text-center">
        <!-- Siamees -->
        <div class="col-md-4">
          <h3>Siamees</h3>
          <p>De Siamees staat bekend om zijn elegante bouw, sociale karakter en opvallende blauwe ogen.</p>
        </div>
        <!-- Abessijn -->
        <div class="col-md-4">
          <h3>Abessijn</h3>
          <p>De Abessijn is energiek en nieuwsgierig, met een korte getekende vacht en een levendige uitstraling.</p>
        </div>
        <!-- Cymric -->
        <div class="col-md-4">
          <h3>Cymric</h3>
          <p>De Cymric, ook wel de langeharige variant van de Manx, is charmant en vriendelijk, vaak zonder staart.</p>
        </div>
      </div>
    </section>
  </div>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2025 Kattenrassen. Alle rechten voorbehouden.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
