<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About me</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/about.css">
</head>
<body>
  <header>
    <h1>Alexis Cuaran Quintero</h1>
  </header>
  <main>
    <div class="container">
      <section class="about">
        <div class="about-content">
          <h2>¡Hola! </h2>
          <p>I'm a front-end developer with a passion for creating beautiful and user-friendly websites. I have experience in HTML, CSS, JavaScript, and various front-end frameworks.</p>
          <p>In my free time, I enjoy hiking, reading, and trying out new recipes in the kitchen.</p>
        </div>
        <img class="about-img" src="../img/profile/alex3.png" alt="Profile Picture">
      </section>
      <section class="skills">
        <h2>Mis habilidades</h2>
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
      <img src="img/logo-white.png" alt="Logo">
    </div>
    <div class="footer__social">
      <a href="#"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
    <nav class="footer__nav">
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Servicios</a></li>
        <li><a href="#">Portafolio</a></li>
        <li><a href="#">Acerca de</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </nav>
    <div class="footer__info">
      <p><i class="fas fa-map-marker-alt"></i> 123 Calle Falsa, Springfield</p>
      <p><i class="fas fa-phone"></i> +1 (555) 123-4567</p>
      <p><i class="fas fa-envelope"></i> info@misitio.com</p>
    </div>
  </div>
</footer>



  <script src="app.js"></script>
</body>
</html>