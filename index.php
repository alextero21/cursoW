<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portafolio</title>
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
 
<header>
  <nav class="main-nav">
  <div class="logo"><img src="img/slogant2.png" alt=""></div>

    <ul>
    </ul>

    <ul>
    </ul>

    <ul>
      <li><a href="#" class="specialBtn">Inicio</a></li>
      <li><a href="#about" class="about">Sobre mí</a></li>
      <li><a href="#">Servicios</a></li>
      <li><a href="#contact">Contacto</a></li>
    </ul>
  </nav>


</header>

  <main>

    <section class="servicios">
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
          <h3 class="servicios__nombre">Marketing Digital</h3>
          <p class="servicios__descripcion">Diseñamos estrategias de marketing digital para aumentar el alcance de tu negocio.</p>
        </div>
      </div>
    </section>
  

    
    <section id="contact">

      <!-- <h2>Contáctanos</h2> -->
      <div class='imgWomenContact'></div>
    
       
      

      <div class="container">
        <div class="img_form">
          <img src="img/handWomen.png" height="500px" alt="Imagen">
        </div>
        <div class="contact_form">
          <form method="POST" action="app/email.php" >
            <div class="form-group" >
              <label for="name">Nombre:</label>
              <input type="text" id="name" name="name" required >
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
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


  

  



</body>


  

