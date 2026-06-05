
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE alumnos (
    id_alumno INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    apellido VARCHAR(50),
    dni VARCHAR(10),
    grado INT
);

CREATE TABLE menus (
    id_menu INT AUTO_INCREMENT PRIMARY KEY,
    nombre_plato VARCHAR(100),
    tipo VARCHAR(20), -- Desayuno, Almuerzo, Merienda, Cena
    calorias INT
);

CREATE TABLE turnos (
    id_turno INT AUTO_INCREMENT PRIMARY KEY,
    fecha DATE,
    horario TIME
);

CREATE TABLE asistencias (
    id_asistencia INT AUTO_INCREMENT PRIMARY KEY,
    id_alumno INT,
    id_menu INT,
    id_turno INT,
    observaciones VARCHAR(100),
    FOREIGN KEY (id_alumno) REFERENCES alumnos(id_alumno),
    FOREIGN KEY (id_menu) REFERENCES menus(id_menu),
    FOREIGN KEY (id_turno) REFERENCES turnos(id_turno)
);
INSERT INTO alumnos (nombre, apellido, dni, grado) VALUES
('Lucas', 'Fernández', '45123456', 1),
('Martina', 'Gómez', '46123456', 2),
('Bruno', 'Martínez', '47123456', 3),
('Valentina', 'López', '48123456', 4),
('Mateo', 'Díaz', '49123456', 5),
('Camila', 'Sosa', '50123456', 6),
('Benjamín', 'Torres', '51123456', 1),
('Catalina', 'Pérez', '52123456', 2),
('Joaquín', 'Silva', '53123456', 3),
('Sofía', 'Acosta', '54123456', 4),
('Tomás', 'Ortiz', '55123456', 5),
('Julieta', 'Luna', '56123456', 6),
('Francisco', 'Reyes', '57123456', 1),
('Emilia', 'Morales', '58123456', 2),
('Santino', 'Vega', '59123456', 3),
('Isabella', 'Mendoza', '60123456', 4),
('Thiago', 'Cabrera', '61123456', 5),
('Renata', 'Peralta', '62123456', 6),
('Simón', 'Benítez', '63123456', 1),
('Maite', 'Herrera', '64123456', 2),
('Facundo', 'Campos', '65123456', 3),
('Olivia', 'Ruiz', '66123456', 4),
('Dylan', 'Ferreyra', '67123456', 5),
('Emma', 'Bravo', '68123456', 6),
('Ciro', 'Leiva', '69123456', 1),
('Julia', 'Arias', '70123456', 2),
('Gaspar', 'Giménez', '71123456', 3),
('Zoe', 'Barrios', '72123456', 4),
('Valentín', 'Navarro', '73123456', 5),
('Lola', 'Méndez', '74123456', 6);

INSERT INTO menus (nombre_plato, tipo, calorias) VALUES
('Tarta de verduras', 'Almuerzo', 500),
('Pollo con arroz', 'Almuerzo', 650),
('Fideos con salsa', 'Almuerzo', 700),
('Guiso de lentejas', 'Almuerzo', 600),
('Milanesa con puré', 'Almuerzo', 750),
('Pizza casera', 'Almuerzo', 720),
('Empanadas', 'Almuerzo', 680),
('Sopa de verduras', 'Cena', 400),
('Tostadas con mermelada', 'Desayuno', 300),
('Cereal con leche', 'Desayuno', 350),
('Pan con manteca', 'Desayuno', 320),
('Jugo y galletitas', 'Merienda', 330),
('Yogur con cereales', 'Merienda', 370),
('Fruta variada', 'Merienda', 200),
('Sandwich de jamón y queso', 'Merienda', 450),
('Ensalada completa', 'Cena', 550),
('Arroz con verduras', 'Cena', 500),
('Panqueques con dulce', 'Cena', 600),
('Tallarines con tuco', 'Almuerzo', 730),
('Tortilla de papas', 'Cena', 580),
('Puré de zapallo', 'Cena', 480),
('Huevos revueltos', 'Desayuno', 290),
('Medialunas', 'Desayuno', 340),
('Leche chocolatada', 'Desayuno', 280),
('Hamburguesas caseras', 'Almuerzo', 790),
('Croquetas de arroz', 'Cena', 510),
('Polenta con tuco', 'Cena', 600),
('Milanesas de soja', 'Almuerzo', 670),
('Lentejas con verduras', 'Cena', 590),
('Ensalada de frutas', 'Merienda', 220);

INSERT INTO turnos (fecha, horario) VALUES
('2025-08-01', '12:00:00'),
('2025-08-02', '12:00:00'),
('2025-08-03', '12:00:00'),
('2025-08-04', '12:00:00'),
('2025-08-05', '12:00:00'),
('2025-08-06', '12:00:00'),
('2025-08-07', '12:00:00'),
('2025-08-08', '12:00:00'),
('2025-08-09', '12:00:00'),
('2025-08-10', '12:00:00'),
('2025-08-11', '12:00:00'),
('2025-08-12', '12:00:00'),
('2025-08-13', '12:00:00'),
('2025-08-14', '12:00:00'),
('2025-08-15', '12:00:00'),
('2025-08-16', '12:00:00'),
('2025-08-17', '12:00:00'),
('2025-08-18', '12:00:00'),
('2025-08-19', '12:00:00'),
('2025-08-20', '12:00:00'),
('2025-08-21', '12:00:00'),
('2025-08-22', '12:00:00'),
('2025-08-23', '12:00:00'),
('2025-08-24', '12:00:00'),
('2025-08-25', '12:00:00'),
('2025-08-26', '12:00:00'),
('2025-08-27', '12:00:00'),
('2025-08-28', '12:00:00'),
('2025-08-29', '12:00:00'),
('2025-08-30', '12:00:00');

INSERT INTO asistencias (id_alumno, id_menu, id_turno, observaciones) VALUES
(1, 1, 1, 'Comió todo'),
(2, 2, 2, 'No quiso ensalada'),
(3, 3, 3, 'Pidió repetir'),
(4, 4, 4, 'Llegó tarde'),
(5, 5, 5, 'Comió poco'),
(6, 6, 6, 'No asistió'),
(7, 7, 7, 'Normal'),
(8, 8, 8, 'Comió postre'),
(9, 9, 9, 'Sin observaciones'),
(10, 10, 10, 'Comió todo'),
(11, 11, 11, 'Normal'),
(12, 12, 12, 'Pidió sin pan'),
(13, 13, 13, 'No le gustó'),
(14, 14, 14, 'Comió rápido'),
(15, 15, 15, 'Feliz'),
(16, 16, 16, 'Comió solo fruta'),
(17, 17, 17, 'Comió doble'),
(18, 18, 18, 'No quiso verdura'),
(19, 19, 19, 'Todo bien'),
(20, 20, 20, 'Excelente'),
(21, 21, 21, 'Pidió leche'),
(22, 22, 22, 'Sin pan'),
(23, 23, 23, 'Muy bien'),
(24, 24, 24, 'No vino'),
(25, 25, 25, 'Con dolor de panza'),
(26, 26, 26, 'Buen apetito'),
(27, 27, 27, 'Con reserva'),
(28, 28, 28, 'Normal'),
(29, 29, 29, 'No comió postre'),
(30, 30, 30, 'Todo OK');



ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`apellido`);



ALTER TABLE `alumnos`
  MODIFY `orden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;
    FOREIGN KEY (id_alumno) REFERENCES alumnos(id_alumno),
    FOREIGN KEY (id_menu) REFERENCES menus(id_menu),
    FOREIGN KEY (id_turno) REFERENCES turnos(id_turno)