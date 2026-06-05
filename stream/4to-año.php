<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4° Año</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>

    <div class="logo-container">

        <img src="img/logo2.png">

        <div>
            <h1>Instituto Tecnológico</h1>
            <p>Isaac Newton</p>
        </div>

    </div>

    <nav>
        <a href="index.php">Inicio</a>
        <a href="institucion.php">Institución</a>
        <a href="index.php#cursos">Cursos</a>
        <a href="index.php#jornadas">Jornadas</a>
        <a href="index.php#galeria">Galería</a>
        <a href="index.php#historia">Años Anteriores</a>
        <a href="index.php#contacto">Contacto</a>
    </nav>

</header>

<section class="course-hero">

    <div>

        <span>Curso</span>

        <h2>4° Año</h2>

        <p>
            Espacio destinado a mostrar los proyectos,
            actividades, streams y experiencias realizadas
            por los estudiantes de cuarto año.
        </p>

    </div>

    <img src="img/4to.jpg" alt="4° Año">

</section>

<section class="course-section">

    <h2>Stream del Curso</h2>

    <div class="stream-box">

        <iframe
        src="https://www.youtube.com/embed/jfKfPfyJRdk"
        allowfullscreen>
        </iframe>
    </div>
</section>

<section class="course-section">

    <h2>Materias</h2>

    <div class="accordion">

        <button class="accordion-btn">Matemática</button>
        <div class="accordion-content">
            <p>Participación en proyectos de cálculo, estadística y análisis de datos.</p>
        </div>

        <button class="accordion-btn">Lengua</button>
        <div class="accordion-content">
            <p>Producción de textos, guiones y presentaciones institucionales.</p>
        </div>

        <button class="accordion-btn">Inglés</button>
        <div class="accordion-content">
            <p>Desarrollo de contenidos y vocabulario aplicado a tecnología.</p>
        </div>

        <button class="accordion-btn">Ciencias Naturales</button>
        <div class="accordion-content">
            <p>Investigaciones y proyectos para Jornadas Interactivas.</p>
        </div>

    </div>

</section>

<section class="course-section">

    <h2>Galería</h2>

    <div class="gallery-grid">

        <img src="img/foto1.jpg">
        <img src="img/foto2.jpg">
        <img src="img/foto3.jpg">
        <img src="img/foto4.jpg">

    </div>

</section>

<footer>

    <h3>Instituto Tecnológico Isaac Newton</h3>
    <p>Sapientia pro vitam</p>

</footer>

<script>

document.querySelectorAll(".accordion-btn").forEach(btn => {

    btn.addEventListener("click", () => {

        const content = btn.nextElementSibling;

        if(content.style.maxHeight){

            content.style.maxHeight = null;

        }else{

            content.style.maxHeight =
            content.scrollHeight + "px";

        }

    });

});

</script>

</body>
</html>