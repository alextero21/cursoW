<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portafolio</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
<header>
  <div class="logo">Logo</div>
  <nav>
    <ul>
      <li><a href="#">Inicio</a></li>
      <li><a href="#">Servicios</a></li>
      <li><a href="#">Nosotros</a></li>
      <li><a href="#">Contacto</a></li>
    </ul>
  </nav>
  <div class="search">
    <input type="text" placeholder="Buscar...">
    <button><i class="fas fa-search"></i></button>
  </div>
</header>

  <main>
    <section id="about">
      <h2>Sobre mí</h2>
      <p>Soy un desarrollador web apasionado por la tecnología y la programación. Me encanta aprender cosas nuevas y estar al día con las últimas tendencias en el mundo del desarrollo.</p>
    </section>

    <section id="skills">
      <h2>Habilidades</h2>
      <ul>
        <li>HTML5</li>
        <li>CSS3</li>
        <li>JavaScript</li>
        <li>React</li>
        <li>Node.js</li>
        <li>Express.js</li>
      </ul>
    </section>

    <section id="projects">
      <h2>Proyectos</h2>
      <ul>
        <li>
          <h3>Proyecto 1</h3>
          <p>Descripción del proyecto</p>
          <button class="modal-trigger" data-modal="project1-modal">Ver más</button>
        </li>
        <li>
          <h3>Proyecto 2</h3>
          <p>Descripción del proyecto</p>
          <button class="modal-trigger" data-modal="project2-modal">Ver más</button>
        </li>
      </ul>
    </section>

    <section id="contact">
      <h2>Contacto</h2>
      <form>
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Mensaje:</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Enviar</button>
      </form>
    </section>
  </main>

  <div class="modal" id="project1-modal">
    <h3>Proyecto 1</h3>
    <p>Descripción del proyecto</p>
    <img src="" alt="Captura de pantalla del proyecto 1">
    <button class="modal-close">Cerrar</button>
  </div>

  <div class="modal" id="project2-modal">
    <h3>Proyecto 2</h3>
    <p>Descripción del proyecto</p>
    <img src="" alt="Captura de pantalla del proyecto 2">
    <button class="modal-close">Cerrar</button>
 
