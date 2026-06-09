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

        <img src="img/logo2.png" alt="Logo">

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
            <h3>Naturaleza</h3>
        </div>

        <div class="jornada-card">
            <h3>Tecnología</h3>
        </div>

        <div class="jornada-card">
            <h3>Consumo</h3>
        </div>

        <div class="jornada-card.2">
            <h3>Sociedad</h3>
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
</ul>
</section>

<!-- FOOTER -->

<footer>

    <h3>Instituto Tecnológico Isaac Newton</h3>

    <p>Sapientia pro vitam</p>

</footer>

<script src="script.js"></script>

</body>
</html>