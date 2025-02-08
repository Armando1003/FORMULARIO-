<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="styles.css" />
    <title>Formulario de Contacto</title>
  </head>
  <body>
    <section class="container">
      <header>Contáctanos</header>
      <?php
            if (isset($_GET['success'])) {
                echo '<div class="mensaje éxito">✅ ¡Mensaje enviado con éxito! Nos pondremos en contacto contigo pronto.</div>';
                header("Refresh: 2; URL=formulario.php");
                exit();
            }
            if (isset($_GET['error'])) {
                echo '<div class="mensaje error">❌ Ocurrió un error al enviar el mensaje. Inténtalo de nuevo.</div>';
                header("Refresh: 2; URL=formulario.php");
                exit();
            }
          ?>
      <form action="guardardato.php" method="POST">
        <!-- Nombre y Apellido -->
        <div class="column">
          <div class="input-box">
            <label>Nombre *</label>
            <input type="text" name = "nombre" placeholder="Inserta nombre" required />
          </div>
          <div class="input-box">
            <label>Apellido *</label>
            <input type="text" name = "apellido" placeholder="Inserta apellido" required />
          </div>
        </div>
        
        <!-- Correo electrónico -->
        <div class="input-box">
          <label>Correo electrónico *</label>
          <input type="email" name = "email" placeholder="Inserta correo electrónico" required />
        </div>

        <!-- Tipo de consulta (Radio buttons) -->
        <div class="input-box">
          <label>Tipo de consulta *</label>
          <div class="column">
            <div class="radio input-box">
              <input type="radio" id="consulta-general" value = "Consulta General" name="consulta" />
              <label for="consulta-general">Consulta General</label>
            </div>
            <div class="radio input-box">
              <input type="radio" id="soporte" value= "Solicitud de Soporte" name="consulta" />
              <label for="soporte">Solicitud de Soporte</label>
            </div>
          </div>
        </div>
                      

        <!-- Mensaje -->
        <div class="input-box">
          <label>Mensaje *</label>
          <textarea rows="4" name = "mensaje" placeholder="Escribe tu mensaje aquí..." required></textarea>
        </div>

        <!-- Checkbox de consentimiento -->
        <div class="consent">
          <input type="checkbox" id="consentimiento" required />
          <label for="consentimiento">Autorizo ser contactado por el equipo *</label>
        </div>

        <!-- Botón de envío -->
        <button type="submit" name = "enviar">Enviar</button>
      </form>
    </section>
  </body>
</html>
