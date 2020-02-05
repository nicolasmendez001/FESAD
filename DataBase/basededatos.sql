-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-04-2019 a las 20:46:32
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- Base de datos: `basededatos`

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `id_asignatura` int(11) NOT NULL,
  `fk_programa` int(11) NOT NULL,
  `fk_periodo` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `creditos` int(11) NOT NULL,
  `semestre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`id_asignatura`, `fk_programa`, `fk_periodo`, `nombre`, `creditos`, `semestre`) VALUES
(1, 1, 1, 'ÉTICA Y POLÍTICA', 3, 4),
(2, 1, 1, 'PROYECTO PEDAGÓGICO. INV. III. ', 3, 4),
(3, 1, 1, 'SEMINARIO INVESTIGACIÓN  I', 3, 4),
(4, 1, 1, 'ELECTIVA INTERDISCIPLINAR III . ADAPTACIONES CURRICULARES', 3, 4),
(5, 1, 1, 'EDUCACIÓN EN SALUD', 3, 4),
(6, 1, 1, 'EVALUACIÓN Y ORIENTACIÓN ESCOLAR', 3, 5),
(7, 1, 1, 'SOCIOHUMANISTICA II\r\n', 3, 5),
(8, 1, 1, 'ELECTIVA INTERDISICIPLINAR IV  ARTICULACIÓN FAMILIAR', 3, 5),
(9, 1, 1, 'FUNDAM. Y DIDAC. TECNOLOGÍA E INFORM.', 3, 5),
(10, 1, 1, 'PROYECTO PEDAGÓGICO  INVESTG. IV\r\n', 3, 5),
(11, 1, 1, 'FUND. ENSEÑANZA LENGUA CASTELLANA\r\n', 3, 6),
(12, 1, 1, 'FUNDAMENTOS ENSEÑANZA INGLES', 3, 6),
(13, 1, 1, 'FUNDAMENTOS ENSEÑANZA MATEMÁTICAS', 3, 6),
(14, 1, 1, 'FUND. Y DIDÁCTICA CIENCIAS NATURALES', 3, 6),
(15, 1, 1, 'PROYECTO PEDAGÓGICO INVESTIGATIVO', 3, 6),
(16, 1, 1, 'MATEMÁTICA EDUCACIÓN BÁSICA PRIMARIA', 3, 7),
(17, 1, 1, 'LENGUA CASTELLANA EDUCACIÓN BÁSICA. PRIMARIA', 3, 7),
(18, 1, 1, 'FUND. Y DIDÁCTICA CIENCIAS SOCIALES', 3, 7),
(19, 1, 1, 'INGLES EDUCACIÓN BÁSICA. PRIMARIA', 3, 7),
(20, 1, 1, 'PROYECTO PEDAGÓGICO INVESTIGATIVO', 3, 7),
(21, 1, 1, 'FUND. Y DIDÁCTICA EDUCACIÓN FÍSICA', 3, 7),
(22, 2, 1, 'ÉTICA Y POLÍTICA', 3, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clase`
--

CREATE TABLE `clase` (
  `id_clase` int(11) NOT NULL,
  `fk_asignatura` int(11) NOT NULL,
  `fk_salon` int(11) NOT NULL,
  `fk_docente` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `color` varchar(20) NOT NULL,
  `textColor` varchar(20) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `dia_semana` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `id_docente` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`id_docente`, `nombre`, `correo`, `telefono`) VALUES
(1, 'Nicolas Mendez', 'angel.mendez@uptc.edu.co', '311266474');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `id_periodo` int(11) NOT NULL,
  `fk_programa` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `semestre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `periodo`
--

INSERT INTO `periodo` (`id_periodo`, `fk_programa`, `anio`, `semestre`) VALUES
(1, 1, 2019, 1),
(2, 1, 2019, 2),
(3, 1, 2020, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `id_programa` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `semestres` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`id_programa`, `nombre`, `semestres`) VALUES
(1, 'LICENCIATURA PLAN 1000', 10),
(2, 'TECNOLOGIA EN REGENCIA DE FARMACIA', 6),
(3, 'TECNOLOGIA EN OBRAS CIVILES', 6),
(4, 'TECNOLOGIA EN GESTIÓN A DMINISTRATIVA DE SERVICIOS DE SALUD', 10),
(5, 'TECNOLOGIA GESTIÓN COMERCIAL Y FINANCIERA Y ADMON COMERCIAL Y FINANCIERA ', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salon`
--

CREATE TABLE `salon` (
  `id_salon` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `ubicacion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `salon`
--

INSERT INTO `salon` (`id_salon`, `nombre`, `ubicacion`) VALUES
(1, 'Salón 11', 'Edificio laboratorios '),
(2, 'Salón 12', 'Edificio central'),
(3, 'Salón 14', 'Edificio contaduria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `contrasena`, `tipo`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`id_asignatura`);

--
-- Indices de la tabla `clase`
--
ALTER TABLE `clase`
  ADD PRIMARY KEY (`id_clase`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`id_docente`);

--
-- Indices de la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`id_periodo`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`id_programa`);

--
-- Indices de la tabla `salon`
--
ALTER TABLE `salon`
  ADD PRIMARY KEY (`id_salon`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `id_asignatura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `clase`
--
ALTER TABLE `clase`
  MODIFY `id_clase` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `id_docente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `id_periodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `id_programa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `salon`
--
ALTER TABLE `salon`
  MODIFY `id_salon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;