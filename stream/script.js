// =========================
// CUENTA REGRESIVA
// =========================

const eventDate = new Date("June 29, 2026 00:00:00").getTime();

function updateCountdown() {

    const now = new Date().getTime();
    const distance = eventDate - now;

    if (distance < 0) {

        document.getElementById("days").innerHTML = "00";
        document.getElementById("hours").innerHTML = "00";
        document.getElementById("minutes").innerHTML = "00";
        document.getElementById("seconds").innerHTML = "00";

        return;
    }

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));

    const hours = Math.floor(
        (distance % (1000 * 60 * 60 * 24))
        / (1000 * 60 * 60)
    );

    const minutes = Math.floor(
        (distance % (1000 * 60 * 60))
        / (1000 * 60)
    );

    const seconds = Math.floor(
        (distance % (1000 * 60))
        / 1000
    );

    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;
}

setInterval(updateCountdown, 1000);
updateCountdown();


// =========================
// AÑOS ANTERIORES
// =========================

const historyData = {

    2023: {

        image: "img/2023.jpg",

        text: "Durante 2023 comenzaron las primeras actividades audiovisuales y los proyectos de transmisión institucional del colegio."

    },

    2024: {

        image: "img/2024.jpg",

        text: "Durante 2024 se realizaron nuevas producciones, proyectos interdisciplinarios y experiencias tecnológicas con participación de los estudiantes."

    },

    2025: {

        image: "img/2025.jpg",

        text: "Durante 2025 se fortalecieron las actividades multimedia, los proyectos tecnológicos y la preparación para las Jornadas Interactivas."

    }

};

function changeYear(year){

    document.getElementById("history-year").textContent = year;

    document.getElementById("history-text").textContent =
        historyData[year].text;

    document.getElementById("history-img").src =
        historyData[year].image;
}


// =========================
// ACORDEONES DE MATERIAS
// =========================
const accordions = document.querySelectorAll(".accordion-btn");

accordions.forEach(button => {

    button.addEventListener("click", () => {

        const content = button.nextElementSibling;

        if(content.style.maxHeight){

            content.style.maxHeight = null;

        } else {

            content.style.maxHeight =
            content.scrollHeight + "px";

        }

    });
});
window.addEventListener("load", () => {

    setTimeout(() => {

        document
            .getElementById("preloader")
            .classList.add("hide");

    }, 2000);

});