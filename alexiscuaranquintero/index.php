<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About me</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Gruppo&display=swap" rel="stylesheet">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="../css/about.css">
</head>
<body>

<header class="header">
  
    <div class="header__logo">
      <img src="../img/logo.png" alt="Logo del portafolio">
    </div>

    <div class="header__title">
    <h1>Alexis Cuaran Quintero</h1>
    </div>

    <nav class="header__nav">
      <ul>
        <li><a href="#inicio">Inicio</a></li>
        <li><a href="#sobre-mi">Sobre mí</a></li>
        <li><a href="#proyectos">Proyectos</a></li>
        <li><a href="#contacto">Contacto</a></li>
      </ul>
    </nav>

  </header>
  <!-- <header>
    <h1>Alexis Cuaran Quintero</h1>
  </header> -->
  <main>
    <div class="container">
      <section class="about">
      <div class="about-content">

        <h2>Desarrollador Full Stack</h2>

        <p>Me especializo en la creación de aplicaciones web de alta calidad y en la resolución de problemas de manera creativa. Con una experiencia de más de 4 años en el campo, he trabajado en proyectos de todos los tamaños, desde pequeñas aplicaciones web hasta soluciones empresariales complejas.</p>
        
      
        <div id="backgroundTextAbout">
          <p>Como desarrollador Full Stack, tengo experiencia en ambos lados del espectro tecnológico, desde el frontend hasta el backend. Estoy bien versado en varios lenguajes de programación y frameworks, incluyendo HTML, CSS, SASS, JavaScript, PHP, Laravel, MariaDB y Vue.js. Además usar el sistema de infraestructura "LAMP" y el control de versiones Git</p>
          <p>Siempre estoy buscando nuevos desafíos y oportunidades para aprender y crecer en mi carrera. Me enorgullezco de mi capacidad para trabajar bien en equipo y de mi enfoque en la colaboración y la comunicación eficaz.</p>
        </div>

      </div>
        <img class="about-img" src="../img/profile/alex3.png" alt="Profile Picture">
      </section>
      <section class="skills">
        <h2>Mis habilidades</h2>
        <div id="skill-img">
          <img src="../img/megaman.webp" alt="">
        </div>
        <ul>
          <li>
            <div class="skill-icon">
              <img src="../img/slogan/html.png" alt="HTML">
            </div>
            <p>HTML</p>
          </li>
          <li>
            <div class="skill-icon">
              <img src="../img/slogan/sass.png" alt="CSS">
            </div>
            <p>SASS</p>
          </li>
          <li>
            <div class="skill-icon">
              <img src="../img/slogan/javascript.png" alt="JavaScript">
            </div>
            <p>Javascript</p>
          </li>
          <li>
            <div class="skill-icon">
              <img src="../img/slogan/php.png" alt="Sass">
            </div>
            <p>PHP</p>
          </li>
          <li>
            <div class="skill-icon">
              <img src="../img/slogan/laravel.png" alt="Sass">
            </div>
            <p>LARAVEL</p>
          </li>

          <li>
            <div class="skill-icon">
              <img src="../img/slogan/vuejs.png" alt="Sass">
            </div>
            <p>VUE.JS</p>
          </li>

        </ul>
      </section>
      <section class="contact">
        <h2>Ponte en contacto</h2>
        <form action="#" method="POST" id="contact-form">
          <input type="text" name="name" id="name" placeholder="Name" required>
          <input type="email" name="email" id="email" placeholder="Email" required>
          <textarea name="message" id="message" placeholder="Message" required></textarea>
          <button type="submit" id="submit-btn">Send</button>
        </form>
      </section>
    </div>
  </main>

  



  <footer class="footer">
  <div class="container">
    <div class="footer__logo">
      <img src="../img/logo.png" alt="Logo" id="imgDesigner">
    </div>
    <div class="footer__social">
      <a href="https://www.facebook.com/profile.php?id=100019632235310" target="_blank"><i class="fab fa-facebook"></i></a>
      <a href="https://twitter.com/Alextero_dude" target="_blank"><i class="fab fa-twitter"></i></a>
      <a href="https://github.com/alextero21/" target="_blank"><i class="fab fa-github"></i></a>
    </div>
    <div class="footer__info">
      <p><i class="fas fa-map-marker-alt"></i> Calle 34 # 1-19</p>
      <p><i class="fas fa-phone"></i> 3003430908</p>
      <p><i class="fab fa-whatsapp"></i> 3169246573</p>
      <p><i class="fas fa-envelope"></i> alexiscuaranquintero@tubni.com</p>
    </div>
    <nav class="footer__name">
      <p>&copy; 2023 Alexis Cuaran Quintero</p>
    </nav>


  </div>
</footer>



  <script src="app.js"></script>
</body>
</html>