<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4° Año</title>

    <link rel="stylesheet" href="style.css">
</head>
<script src="script.js"></script>
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

        <span>Jornadas Interactivas 2026</span>

        <h2>4° Año</h2>

        <p>
            Espacio destinado a mostrar los proyectos,
            actividades, streams y experiencias realizadas
            por los estudiantes de cuarto año.
        </p>

    </div>

    <img src="img/1ero.jpg" alt="1° Año">

</section>

<!-- INFORMACIÓN RÁPIDA -->

<section class="info-cards">

    <div class="info-card">
        <h3>Proyecto Principal</h3>
        <p>Generador Eólico Inteligente</p>
    </div>

    <div class="info-card">
        <h3>Participantes</h3>
        <p>35 estudiantes</p>
    </div>

    <div class="info-card">
        <h3>Categoría</h3>
        <p>Tecnología y Ciencias</p>
    </div>

</section>

<!-- PROYECTO DESTACADO -->

<section class="featured-project">

    <div class="project-image">
        <img src="img/proyecto.jpg">
    </div>

    <div class="project-content">

        <span>PROYECTO DESTACADO</span>

        <h2>Generador Eólico Inteligente</h2>

        <p>
            Proyecto interdisciplinario presentado durante las
            Jornadas Interactivas que combina tecnología,
            energías renovables y comunicación audiovisual.
        </p>

    </div>

</section>

<!-- STREAM -->

<section class="course-section">

    <h2>Stream del Curso</h2>

    <div class="stream-box">

        <iframe
        src="https://www.youtube.com/embed/jfKfPfyJRdk"
        allowfullscreen>
        </iframe>

    </div>

</section>

<!-- ESTADÍSTICAS -->

<section class="stats">

    <div class="stat-box">
        <h3>1</h3>
        <p>Proyectos</p>
    </div>

    <div class="stat-box">
        <h3>35</h3>
        <p>Estudiantes</p>
    </div>

    <div class="stat-box">
        <h3>6</h3>
        <p>Áreas Integradas</p>
    </div>


</section>

<section class="course-section">

    <h2>Proyectos</h2>

    <div class="accordion">

        <button class="accordion-btn">The smart house of the future</button>
        <div class="accordion-content">
            <p>Welcome to TechCorp” - Un cortometraje sobre el mundo laboral en la era moderna.</p>
        </div>

        <button class="accordion-btn">Yo,humano "Antes de que sea tarde!"</button>
        <div class="accordion-content">
            <p>Outdated:When Technology becomes Waste</p>
        </div>

        <button class="accordion-btn">Ecos del Tiempo: Dos Generaciones, Una Misma Sociedad</button>
        <div class="accordion-content">
            <p>Investigaciones y proyectos para Jornadas Interactivas.</p>
        </div>
</button>
        <div class="accordion-content">
            <p>Producción de textos, guiones y presentaciones institucionales.</p>
        </div>

        <button class="accordion-btn">Córdoba en transformación:¿Qué historia queremos contar?</button>
        <div class="accordion-content">
            <p>Investigaciones y proyectos para Jornadas Interactivas.</p>
        </div>

    </div>

</section>

<!-- CRONOGRAMA -->

<section class="timeline">

    <h2>Cronograma de Presentaciones</h2>

    <div class="timeline-item">
        <span>09:00</span>
        <p>Apertura de la exposición</p>
    </div>

    <div class="timeline-item">
        <span>10:00</span>
        <p>Presentación de proyectos</p>
    </div>

    <div class="timeline-item">
        <span>12:00</span>
        <p>Entrevistas y transmisiones</p>
    </div>

    <div class="timeline-item">
        <span>14:00</span>
        <p>Demostraciones tecnológicas</p>
    </div>

    <div class="timeline-item">
        <span>16:00</span>
        <p>Cierre de actividades</p>
    </div>

</section>

<!-- GALERÍA -->

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

    <h3>1° Año · Jornadas Interactivas 2026</h3>

    <p>
        Tecnología · Innovación · Creatividad
    </p>

    <p>
        Instituto Tecnológico Isaac Newton
    </p>

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
</body>
</html>