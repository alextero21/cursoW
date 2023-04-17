<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portafolio</title>
  <link rel="icon" type="image/x-icon" href="/img/favicon1.ico">

  <link rel="stylesheet" href="css/index.css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>
<body>
 
<header>
  <nav class="main-nav" >
    
   <div class="logo"><img src="img/slogan16.png" alt=""></div>
   <div class="menu-toggle"><i class="icon-align-justify"></i></div>


    <div class='nav_menu'>
    </div>

    <div class='nav_menu'>
    </div>


    <ul>
      <li><a href="#" class="specialBtn">Inicio</a></li>
      <li><a href="#service">Servicios</a></li>
      <li><a href="#contact">Contacto</a></li>
    </ul>


    
    

    

  </nav>
  <div class="intro">
    <h1>Diseños personalizados</h1>
    
    <p>😃Ofrecemos servicios de desarrollo web, diseño web y creación de proyectos personalizados para el camino hacia el éxito en línea🟢. ¡<a href="#contact">Contáctanos</a> hoy mismo para comenzar a trabajar juntos! 🦾</p>
   
  </div>




</header>

  <main>

    <section id="service" class="servicios">

      <div class="servicios__titulo">
        <h2>Nuestros Servicios</h2>
        <p>Conoce lo que podemos ofrecerte</p>
      </div>

      <div class="servicios__contenedor">

        <div class="servicios__item">
          <div class="servicios__icono">
            <i class="fas fa-paint-brush"></i>
          </div>
          <h3 class="servicios__nombre">Diseño Web</h3>
          <p class="servicios__descripcion">Creamos diseños web personalizados y atractivos para que tu negocio destaque.</p>
        </div>

        <div class="servicios__item">
          <div class="servicios__icono">
            <i class="fas fa-code"></i>
          </div>
          <h3 class="servicios__nombre">Desarrollo Web</h3>
          <p class="servicios__descripcion">Desarrollamos sitios web funcionales y adaptables a cualquier dispositivo.</p>
        </div>

        <div class="servicios__item">
          <div class="servicios__icono">
            <i class="fas fa-chart-bar"></i>
          </div>
          <h3 class="servicios__nombre">Creación de proyectos</h3>
          <p class="servicios__descripcion">Transformamos tus ideas en realidad, creando soluciones innovadoras y personalizadas. </p>
        </div>
      </div>



    </section>
  

    
    <section id="contact">

      <!-- <h2>Contáctanos</h2> -->

      <div class="container">

        <div class="img_form">
          <img src="img/handWomen.png" height="350px" alt="Imagen">
        </div>


        <div class="contact_form">
          <form method="POST" action="app/email.php" >

            <h2>Contáctanos</h2>
            <div class="form-group" >
              <label for="name">Nombre:</label>
              <input type="text" id="name" name="name" required >
            </div>
            <div class="form-group">
              <label for="email">Correo:</label>
              <input type="email" id="email" name="email" required >
            </div>
            <div class="form-group">
              <label for="message">Mensaje:</label>
              <textarea id="message" name="message" required ></textarea>
            </div>
            <button type="submit">Enviar</button>
          </form>
        </div>
      </div>
     

    </section>

  </main>


  
<script>
  const menuToggle = document.querySelector('.menu-toggle');
  const nav = document.querySelector('nav ul');

  menuToggle.addEventListener('click', () => {
  nav.classList.toggle('slide');
  nav.classList.contains('slide');
});


</script>
  



</body>


  

