<?php
// Configuración de textos del proyecto
$projectName = "EcoDrive";
$projectTagline = "Solar & Wind Energy Saving System";
$heroTitle = "Solar <span>&</span> Wind <span> energy saving system </span>";
$heroDescription = "An intelligent solar and wind energy storage system engineered to maximize efficiency during your vehicle's stationary periods.";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $projectName . " - " . $projectTagline; ?></title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
    
    <style>
        html {
            scroll-behavior: smooth; /* Hace que el desplazamiento al hacer clic sea suave */
        }
        
        /* Estilos para ocultar/mostrar el contenido de las pestañas */
        .tab-content {
            display: none;
        }
        .tab-content.active-content {
            display: block;
        }

        /* Sección de contacto inspirada en el minimalismo del hotel */
        .contact-section {
            padding: 100px 8%;
            background-color: var(--card-bg);
            text-align: center;
        }

        .contact-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: var(--bg-color);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.02);
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-top: 30px;
        }

        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 15px;
            border: 1px solid #ccc;
            background-color: var(--bg-color);
            font-family: 'Montserrat', sans-serif;
            font-size: 0.95rem;
            border-radius: 5px;
            color: var(--text-dark);
        }

        .contact-form input:focus, .contact-form textarea:focus {
            outline: none;
            border-color: var(--primary-dark);
        }

        .btn-submit {
            background-color: var(--primary-dark);
            color: var(--bg-color);
            padding: 15px;
            border: none;
            border-radius: 30px;
            font-family: 'Montserrat', sans-serif;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-submit:hover {
            background-color: #383f33;
        }
    </style>
</head>
<body>

    <header>
        <a href="#" class="logo"><?php echo strtoupper($projectName); ?></a>
        <nav>
            <a href="#">Inicio</a>
            <a href="#sistema">Sistema</a>
            <a href="#beneficios">Beneficios</a>
            <a href="#contacto">Contacto</a>
        </nav>
        <a href="#contacto" class="btn-contact">Request Information</a>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1><?php echo $heroTitle; ?></h1>
            <p><?php echo $heroDescription; ?></p>
            <a href="#contacto" class="btn-main">Request Information</a>
        </div>
    </section>

    <section class="about-section" id="sistema">
        <h2 class="section-title">Why <span>isn't it</span> a standard kit?</h2>
        
        <div class="tabs">
            <button class="tab-btn active" onclick="switchTab(event, 'innovacion')">Innovation</button>
            <button class="tab-btn" onclick="switchTab(event, 'naturaleza')">Nature</button>
            <button class="tab-btn" onclick="switchTab(event, 'eficiencia')">Efficiency</button>
        </div>

        <div class="feature-block">
            
            <div id="innovacion" class="tab-content active-content">
                <div class="feature-text">
                    <h3>The 90% of the day doing nothing.</h3>
                    <p>Did you know that an average vehicle spends the majority of its time parked? Meanwhile, massive amounts of solar light and wind currents hit its surface and are completely wasted. <?php echo $projectName; ?> changes this by transforming your car into a clean and constant power generation station.</p>
                </div>
            </div>

            <div id="naturaleza" class="tab-content">
                <div class="feature-text">
                    <h3>Symbiosis with the environment.</h3>
                    <p>Designed with a philosophy of minimal visual impact and maximum environmental respect, the system activates silently when it detects the vehicle stopping, capturing energy from the forest wind or the desert sun without disturbing the ecosystem you're exploring.</p>
                </div>
            </div>

            <div id="eficiencia" class="tab-content">
                <div class="feature-text">
                    <h3>Intelligent Passive Charging.</h3>
                    <p>Our charging controllers distribute the energy directly to a compact internal storage cell. You don't need to flip switches or configure complex applications; the hardware manages the energy autonomously, ensuring an extra power supply ready for your next journey.</p>
                </div>
            </div>

            <div class="feature-img"></div>
        </div>
    </section>

    <section class="details-section" id="beneficios">
        <h2 class="section-title"><?php echo $projectName; ?>: The ideal complement <span>for</span> every journey</h2>
        
        <div class="grid-details">
            <div class="detail-card">
                <div>
                    <h4>For Off-Road Enthusiasts and Sustainability Advocates</h4>
                    <ul>
                        <li>High-efficiency solar panels integrated into the roof.</li>
                        <li>Retractable and compact wind turbine for current capture.</li>
                        <li>Direct connection to a compact internal smart battery.</li>
                        <li>Passively and automatically stores energy while you're parked.</li>
                    </ul>
                </div>
            </div>
            <div class="detail-img-box"></div>
        </div>
    </section>

    <section class="contact-section" id="contacto">
        <h2 class="section-title">Start your <span>reservation</span></h2>
        <p>Leave us your details to coordinate the compatibility of the EcoDrive kit with your vehicle model.</p>
        
        <div class="contact-container">
            <form class="contact-form" action="#" method="POST">
                <input type="text" name="nombre" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email Address" required>
                <input type="text" name="vehiculo" placeholder="Vehicle Model and Year (e.g., Hummer H3 2008)" required>
                <textarea name="mensaje" rows="4" placeholder="Do you have any additional questions or specifications?"></textarea>
                <button type="submit" class="btn-submit">Submit Reservation Request</button>
            </form>
        </div>
    </section>

    <script>
        function switchTab(event, tabId) {
            // 1. Ocultar todos los contenidos de las pestañas
            const contents = document.querySelectorAll('.tab-content');
            contents.forEach(content => {
                content.classList.remove('active-content');
            });

            // 2. Quitar la clase 'active' de todos los botones
            const buttons = document.querySelectorAll('.tab-btn');
            buttons.forEach(button => {
                button.classList.remove('active');
            });

            // 3. Mostrar el contenido de la pestaña seleccionada
            document.getElementById(tabId).classList.add('active-content');

            // 4. Añadir la clase 'active' al botón que recibió el clic
            event.currentTarget.classList.add('active');
        }
    </script>

</body>
</html>