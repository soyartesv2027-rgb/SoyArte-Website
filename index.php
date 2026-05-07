<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soy Arte 🖌️🎨</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- NAVBAR -->
  <nav class="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="images/hamburger.png" width="30">
        Soy Arte
        <img class="arty-nav" src="images/Arty.png">
      </a>

      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Contáctanos</a>
        </li>
        <li class="nav-item iniciar-sesion">
          <a class="nav-link text-white" href="login.html">Iniciar sesión</a>
        </li>
        <li class="nav-item registrarse">
          <a class="nav-link text-white" href="register.html">Registrarse</a>
        </li>
      </ul>
    </div>
  </nav>

    <div class="ms-auto">
      <?php if (isset($_SESSION['id'])): ?>
          <div class="dropdown">
              <a class="btn btn-outline-secondary dropdown-toggle d-flex align-items-center" 
                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa-solid fa-circle-user me-2"></i>
                  <?php echo $_SESSION['nombre']; ?>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                      <a class="dropdown-item" href="#">
                          <i class="fa-solid fa-id-card me-2"></i> Perfil
                      </a>
                  </li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                      <a class="dropdown-item text-danger" href="php/logout.php">
                          <i class="fa-solid fa-right-from-bracket me-2"></i> Cerrar sesión
                      </a>
                  </li>
              </ul>
          </div>
      <?php else: ?>
          <a class="btn btn-outline-primary me-2" href="login.html">Login</a>
          <a class="btn btn-primary" href="registro.html">Registrarse</a>
      <?php endif; ?>
  </div>


  <!-- HEADER -->
  <div class="header">
    <img src="images/Arty.png" class="arty">
    <div class="textos">
      <h1>Soy Arte</h1>
      <h3 class="subtitulo">El arte es la ventana a tu alma</h3>
    </div>
  </div>

  <!-- HERO / CARRUSEL -->
  <div class="container mt-4">
    <div id="carouselExampleCaptions" class="carousel slide">

      <div class="carousel-inner">

        <div class="carousel-item active">
          <img src="images/pinturas.jpeg" class="d-block w-100">
          <div class="carousel-caption">
            <h5>Pinturas</h5>
          </div>
        </div>

        <div class="carousel-item">
          <img src="images/musica.jpeg" class="d-block w-100">
          <div class="carousel-caption">
            <h5>Música</h5>
          </div>
        </div>

        <div class="carousel-item">
          <img src="images/Poemas.jpeg" class="d-block w-100">
          <div class="carousel-caption">
            <h5>Poemas</h5>
          </div>
        </div>

        <div class="carousel-item">
          <img src="images/manualidades.jpeg" class="d-block w-100">
          <div class="carousel-caption">
            <h5>Manualidades</h5>
          </div>
        </div>

      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>

    </div>
  </div>


  <div class="info-soyarte">
    <h1>¿Qué es Soy Arte?</h1>

    <div class="contenido">
      <div>
        <p>Soy Arte es mucho más que una plataforma digital: es un espacio creado para inspirar, crear y conectar a artistas de todas las disciplinas. Aquí podrás demostrar y compartir tu talento en áreas como música, pintura, manualidades y poesía, formando parte de una comunidad creativa llena de ideas y expresión. <br>

        Sumérgete en experiencias interactivas a través de nuestra realidad virtual y disfruta de un espacio creativo único, donde podrás pintar, guardar tus dibujos y dar vida a tu imaginación. <br>
        
        Además, Soy Arte cuenta con una tienda en línea especializada en artículos de arte, donde podrás encontrar productos creativos, vender tus propias creaciones e interactuar con diferentes artistas, compartiendo experiencias, inspiración y nuevas oportunidades dentro del mundo artístico.</p>
      </div>

      <img class="fondo" src="images/fondo.jpg">
    </div>
    <div class="realidad-virtual">
      <div class="video">
          <video src="videos/video soy arte.mp4" class="object-fit-cover" autoplay></video>
          <p class="text-center">Explora nuestro museo virtual y vive una experiencia interactiva única, donde podrás recorrer cada espacio, descubrir obras increíbles y sentirte como si estuvieras allí, desde cualquier lugar.</p>
      </div>
      
    </div>
  </div>
  <hr>

  <section class="py-5 bg-light">
    <header class="conocimiento text-center mb-4">
      <h1 class="fw-bold">Conoce más sobre el arte</h1>
    </header>

    <div class="container">
      <div 
        id="carouselArte" 
        class="carousel slide carousel-fade shadow rounded overflow-hidden"
        data-bs-ride="carousel"
        aria-label="Carrusel informativo sobre arte"
      >

        <!-- Indicadores -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselArte" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Imagen 1"></button>
          <button type="button" data-bs-target="#carouselArte" data-bs-slide-to="1" aria-label="Imagen 2"></button>
          <button type="button" data-bs-target="#carouselArte" data-bs-slide-to="2" aria-label="Imagen 3"></button>
          <button type="button" data-bs-target="#carouselArte" data-bs-slide-to="3" aria-label="Imagen 4"></button>
        </div>

        <!-- Imágenes -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/img-info.jpeg" class="d-block w-100 carousel-img"
                alt="Pintura artística de naturaleza muerta"
                loading="lazy">
          </div>
          <div class="carousel-item">
            <img src="images/img-info2.jpeg" class="d-block w-100 carousel-img"
                alt="Detalle de obra de arte clásica"
                loading="lazy">
          </div>
          <div class="carousel-item">
            <img src="images/img-info3.jpeg" class="d-block w-100 carousel-img"
                alt="Texturas y colores en pintura artística"
                loading="lazy">
          </div>
          <div class="carousel-item">
            <img src="images/img-info4.jpeg" class="d-block w-100 carousel-img"
                alt="Composición artística con frutas"
                loading="lazy">
          </div>
        </div>

        <!-- Controles -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselArte" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
          <span class="visually-hidden">Anterior</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselArte" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
          <span class="visually-hidden">Siguiente</span>
        </button>

      </div>
    </div>
  </section>

  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script>
window.addEventListener("scroll", () => {
  const section = document.querySelector(".info-soyarte");
  const position = section.getBoundingClientRect().top;
  const screen = window.innerHeight;

  if (position < screen - 100) {
    section.classList.add("visible");
  }
});
</script>

</body>
</html>