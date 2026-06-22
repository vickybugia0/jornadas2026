<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1° Año</title>

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

        <h2>1° Año</h2>

        <p>
            Espacio destinado a mostrar los proyectos,
            actividades, streams y experiencias realizadas
            por los estudiantes de primer año.
        </p>

    </div>

    <img src="img/logo-jis.png" alt="1° Año">

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
        <h3>3</h3>
        <p>Proyectos</p>
    </div>

    <div class="stat-box">
        <h3>28</h3>
        <p>Estudiantes</p>
    </div>

    <div class="stat-box">
        <h3>9</h3>
        <p>Áreas Integradas</p>
    </div>

</section>
<section class="projects-cards">

    <div class="project-card">

        <div class="project-image smart">
            <img src="img/smart-house.jpg" alt="">
        </div>

        <div class="project-info">

            <h3>Smart House</h3>

            <p>
                Tecnología y eficiencia energética.
            </p>

            <a href="smart-house.php">
                Ver Proyecto
            </a>

        </div>

    </div>

    <div class="project-card">

        <div class="project-image intech">
            <img src="img/intech.jpg" alt="">
        </div>

        <div class="project-info">

            <h3>INTECH</h3>

            <p>
                Ciudadanía entre algoritmos y ecosistemas.
            </p>

            <a href="intech.php">
                Ver Proyecto
            </a>

        </div>

    </div>

    <div class="project-card">

        <div class="project-image cordoba">
            <img src="img/cordoba.jpg" alt="">
        </div>

        <div class="project-info">

            <h3>Córdoba en Transformación</h3>

            <p>
                Historia, geografía y sociedad.
            </p>

            <a href="cordoba.php">
                Ver Proyecto
            </a>

        </div>

    </div>

</section>
<!-- CRONOGRAMA -->

<section class="timeline">

    <h2>Cronograma de Presentaciones</h2>

    <div class="timeline-item">
        <span>Martes</span>
        <p>1er año y 2do año</p>
    </div>

    <div class="timeline-item">
        <span>Miércoles</span>
        <p>3er año y 4to año</p>
    </div>

    <div class="timeline-item">
        <span>Jueves</span>
        <p>5to año y 6to año</p>
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