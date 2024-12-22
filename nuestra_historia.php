<?php include('cabezera.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestra Historia</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Nuestra Historia</h1>
    </header>

    <section class="counter">
        <h2>Días juntos</h2>
        <p id="daysTogether"></p>
    </section>

    <section class="timeline">
        <h2>Línea de Tiempo</h2>

        <div class="event">
            <h3>📅 Primer Encuentro</h3>
            <center>
            <video controls width="640" height="360">
   <source src="imagenes/xc.mp4" type="video/mp4"> 
</video>
</center>
            <p>Nos conocimos en el 2022 y en ese momento no pensé que serías una parte importante en mi vida. Ahora eres importantísima, y por eso te agradezco.</p>
        </div>
        <div class="event">
            <h3>😶‍🌫️ prmera salida como amigos</h3>
            <img src="imagenes/primera_salida.png" alt="Primer Encuentro">
            <p>Nos conocimos en el 2022 y en ese momento no pensé que serías una parte importante en mi vida. Ahora eres importantísima, y por eso te agradezco.</p>
        </div>
        <div class="event">
            <h3>💖 Primer 'Beso'</h3>
            <img src="imagenes/xdd.png" alt="Primer Beso">
            <p>No cuento el accidental, pero en el primer beso real diste el primer paso, y yo quedé congelado sin saber cómo reaccionar.</p>
        </div>

        <div class="event">
            <h3>🧑‍🤝‍👩 Lo Oficial</h3>
            <img src="imagenes/el_inicio.png" alt="Lo Oficial">
            <p>El gran día cuando te pedí pololeo. Lo recuerdo como si fuera ayer, y aún tengo la mítica foto que nos sacamos.</p>
        </div>

        <div class="event">
            <h3>🌎 Nuestra Primera salida</h3>
            <img src="imagenes/cine.png" alt="Primera Cita">
            <p>La película que vimos fue alta mierda, pero lo que me entretuvo fue lo que empezaste a hacer cosas</p>
        </div>
        <div class="event">
            <h3>🚌 La Primera Vez que Fui a tu Casa</h3>
            <center>
            <video controls width="640" height="360">
   <source src="imagenes/comida.mp4" type="video/mp4"> 
</video>
</center>
            <p>La primera vez fui con Erik, y días después fui solo. La pasamos muy bien viendo 'Caso Cerrado' mientras comíamos.</p>
        </div>

        <div class="event">
            <h3>🎂 El Cumpleaños de la Vale</h3>
            <center>
            <video controls width="640" height="360">
   <source src="imagenes/vale.mp4" type="video/mp4"> 
</video>
</center>
            <p>Un día que se paso muy bien. Tú, Vale y Javiera cantando canciones de desamor como si tuvieran tres divorcios cada una.</p>
        </div>

        <div class="event">
            <h3>🤵 Mi Cumpleaños</h3>
            <img src="imagenes/caja.png" alt="Mi Cumpleaños">
            <p>Fue un día importante porque conociste a mi papá y también por los regalos que me diste. Me hiciste muy feliz.</p>
        </div>

        <div class="event">
            <h3>🤶 Visitando a los Primos de mi Mamá</h3>
            <center>
            <video controls width="640" height="360">
   <source src="imagenes/martin.mp4" type="video/mp4"> 
</video>
</center>
            <p>A todos les caíste muy bien, incluido Martín, el perro salchicha agresivo.</p>
        </div>

        <div class="event">
            <h3>🎁 El Día de los Hot Wheels</h3>
            <img src="imagenes/taki.png" alt="Día de los Hot Wheels">
            <p>Ese día estaba muy feliz por los regalos y las flores eternas que aún conservo con mucho aprecio.</p>
        </div>

        <div class="event">
            <h3>🕺💃 Primera Vez Bailando Cueca</h3>
            <img src="imagenes/cueca.png" alt="Bailando Cueca">
            <p>Estaba nervioso y tú preciosa, pero todo salió bien. De ese momento salió la foto que tengo de perfil.</p>
        </div>
        <div class="event">
            <h3>🐻 cuando fuimos a ver la pelicula de fnaf</h3>
            <center>
            <video controls width="640" height="360">
   <source src="imagenes/fnaf.mp4" type="video/mp4"> 
</video>
</center>
            <p>estabamos felices los 2 pero la que estaba mas anciosa era uste, ya que estubo esperando esta pelicula por mucho tiempo/p>
        </div>
        <div class="event">
            <h3>🫂 despues de la salida a la isma de san ramon</h3>
            <img src="imagenes/espejo.png" alt="Bailando Cueca">
            <p>esta foto se convirtio en una de mis favoritas, porque en especial uste estaba preciosa</p>
        </div>
    </section>
</body>
<script>
    // JavaScript para calcular días juntos
    const startDate = new Date('2023-07-28'); // Cambia la fecha de inicio
    const today = new Date();
    const difference = Math.floor((today - startDate) / (1000 * 60 * 60 * 24));
    document.getElementById('daysTogether').textContent = `${difference} días`;
</script>
</html>

