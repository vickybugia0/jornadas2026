<?php
?>
<!DOCTYPE html>
<html lang="es">

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Instituto Tecnológico Isaac Newton</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>
<div id="preloader">

    <div class="loader-content">

        <img src="img/logo2.png" alt="Logo">

        <h2>Instituto Tecnológico Isaac Newton</h2>

        <p>Sapientia Pro Vitam</p>

        <div class="loader-bar">
            <span></span>
        </div>

    </div>

</div>
<!-- NAVBAR -->

<header>

    <div class="logo-container">

        <img src="img/logo2.png" alt="Logo Isaac Newton">

        <div>

            <h1>Instituto Tecnológico</h1>
            <p>Isaac Newton</p>

        </div>

    </div>

    <nav>

        <a href="#inicio">Inicio</a>
        <a href="institucion.php">Institución</a>
        <a href="#cursos">Cursos</a>
        <a href="#jornadas">Jornadas Interactivas</a>
        <a href="#galeria">Galería</a>
        <a href="#historia">Años Anteriores</a>
        <a href="#contacto">Contacto</a>

    </nav>

</header>

<!-- HERO -->
<section class="course-hero" data-aos="fade-up"></section>
<section id="inicio" class="hero">

    <div class="hero-text">

        <span>Instituto Tecnológico</span>

        <h2>Isaac Newton</h2>

        <p>
            Sapientia pro vitam
        </p>

        <div class="hero-buttons">

            <a href="#cursos" class="btn-primary">
                Ver Cursos
            </a>

            <a href="#jornadas" class="btn-secondary">
                Jornadas Interactivas
            </a>

        </div>

    </div>

    <div class="hero-image">

        <img src="img/logo-jis.png" alt="Logo">

    </div>

</section>

<!-- CUENTA REGRESIVA -->

<section class="countdown-section">

    <h2>Jornadas Interactivas 2026</h2>

    <p>Cuenta regresiva para el evento</p>

    <div class="countdown">

        <div class="time-box">
            <h3 id="days">00</h3>
            <span>Días</span>
        </div>

        <div class="time-box">
            <h3 id="hours">00</h3>
            <span>Horas</span>
        </div>

        <div class="time-box">
            <h3 id="minutes">00</h3>
            <span>Minutos</span>
        </div>

        <div class="time-box">
            <h3 id="seconds">00</h3>
            <span>Segundos</span>
        </div>

    </div>

</section>

<!-- CURSOS -->

<section id="cursos" class="courses">

    <h2>Nuestros Cursos</h2>

    <div class="course-grid">

        <a href="1er-año.php" class="course-card">
            <h3>1° Año</h3>
        </a>

        <a href="2do-año.php" class="course-card">
            <h3>2° Año</h3>
        </a>

        <a href="3er-año.php" class="course-card">
            <h3>3° Año</h3>
        </a>

        <a href="4to-año.php" class="course-card">
            <h3>4° Año</h3>
        </a>

        <a href="5to-año.php" class="course-card">
            <h3>5° Año</h3>
        </a>

        <a href="6to-año.php" class="course-card">
            <h3>6° Año</h3>
        </a>

    </div>
<div class="project-card" data-aos="zoom-in"></div>
</section>

<!-- JORNADAS -->

<section id="jornadas" class="jornadas">

    <h2>Jornadas Interactivas</h2>

    <p>

        Espacio destinado a la Feria de Ciencias y Tecnología,
        donde los estudiantes presentan proyectos innovadores,
        investigaciones y experiencias interdisciplinarias.

    </p>

    <div class="jornadas-grid">

        <div class="jornada-card">
            <h1>Naturaleza</h1>
        </div>

        <div class="jornada-card">
            <h1>Tecnología</h1>
        </div>

        <div class="jornada-card">
            <h1>Consumo</h1>
        </div>

        <div class="jornada-card">
            <h1>Sociedad</h1>
        </div>

</section>

<!-- GALERIA -->

<section id="galeria" class="gallery">

    <h2>Galería</h2>

    <div class="gallery-grid">

        <img src="img/foto1.jpg">
        <img src="img/foto2.jpg">
        <img src="img/foto3.jpg">
        <img src="img/foto4.jpg">

    </div>

</section>

<!-- AÑOS ANTERIORES -->

<section id="historia" class="history">

    <h2>Años Anteriores</h2>

    <div class="year-buttons">

        <button onclick="changeYear(2023)">
            2023
        </button>

        <button onclick="changeYear(2024)">
            2024
        </button>

        <button onclick="changeYear(2025)">
            2025
        </button>

    </div>

    <div class="history-card">

        <div class="history-image">

            <img
            id="history-img"
            src="img/2023.jpg">

        </div>

        <div class="history-info">

            <h3 id="history-year">
                2023
            </h3>

            <p id="history-text">

                El comienzo del proyecto audiovisual.

            </p>

        </div>

    </div>

</section>

<!-- CONTACTO -->

<section id="contacto" class="contact">

    <h2>Contacto</h2>
    </div>
<ul class="social-media-buttons">

    <li>
        <a href="https://www.instagram.com/newtonweb.info" title="Instagram">
            <i class="fab fa-instagram"></i>
        </a>
    </li>

    <li>
        <a href="https://www.facebook.com/institutoisaacnewtoncba/?locale=es_LA" title="Facebook">
            <i class="fab fa-facebook-f"></i>
        </a>
    </li>
    <li>
    <a href="https://wa.me/5493513722778" title="WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
</li>
<li>
    <a href="https://www.youtube.com/"
       class="youtube"
       target="_blank">

        <i class="fab fa-youtube"></i>

    </a>
</li>
</ul>
<section class="map-section">

    <h2>¿Dónde encontrarnos?</h2>

    <div class="map-container">

        <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3407.5932102606675!2d-64.29752362585208!3d-31.342605624295818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94329dd2342be5eb%3A0x38f4951018dd3dd1!2sInstituto%20Tecnol%C3%B3gico%20Isaac%20Newton%2C%20Molino%20de%20Torres%206635%2C%20X5021BDE%20C%C3%B3rdoba!5e0!3m2!1ses-419!2sar!4v1781104728898!5m2!1ses-419!2sar"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
        </iframe>

    </div>

</section>
</section>

<!-- FOOTER -->

<footer>

    <h3>Instituto Tecnológico Isaac Newton</h3>

    <p>Sapientia pro vitam</p>

</footer>

<script src="script.js"></script>

</body>
</html>