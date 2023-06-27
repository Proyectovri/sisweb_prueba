-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-06-2023 a las 00:02:19
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sisweb_dev`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatoria`
--

CREATE TABLE `convocatoria` (
  `PK_Convocatoria` int(11) NOT NULL,
  `FK_TipoConvocatoria_Convocatoria` int(11) NOT NULL,
  `FK_EstadoConvocatoria_Convocatoria` int(11) NOT NULL,
  `Conv_Nombre` varchar(250) NOT NULL,
  `Conv_Anio` int(4) NOT NULL,
  `Conv_RutaBase` varchar(200) NOT NULL,
  `Conv_Estado` int(11) NOT NULL,
  `Conv_FechaCreacion` datetime NOT NULL,
  `Conv_FechaModificacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `convocatoria`
--

INSERT INTO `convocatoria` (`PK_Convocatoria`, `FK_TipoConvocatoria_Convocatoria`, `FK_EstadoConvocatoria_Convocatoria`, `Conv_Nombre`, `Conv_Anio`, `Conv_RutaBase`, `Conv_Estado`, `Conv_FechaCreacion`, `Conv_FechaModificacion`) VALUES
(1, 1, 1, 'PRIMERA CONVOCATORIA 2024', 2024, '-', 1, '2023-06-23 23:30:05', '2023-06-23 21:30:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `PK_Docente` int(11) NOT NULL,
  `FK_Carrera_Docente` int(11) NOT NULL,
  `FK_GradoAcademico_Docente` int(11) NOT NULL,
  `Doce_TipoIntegrante` int(11) DEFAULT NULL,
  `Doce_DNI` varchar(11) NOT NULL,
  `Doce_TipoDocente` varchar(20) DEFAULT NULL,
  `Doce_Nombre` varchar(100) NOT NULL,
  `Doce_Apellido` varchar(100) NOT NULL,
  `Doce_Celular` varchar(50) NOT NULL,
  `Doce_Correo` varchar(200) NOT NULL,
  `Doce_Mencion` varchar(250) NOT NULL,
  `Doce_Estado` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`PK_Docente`, `FK_Carrera_Docente`, `FK_GradoAcademico_Docente`, `Doce_TipoIntegrante`, `Doce_DNI`, `Doce_TipoDocente`, `Doce_Nombre`, `Doce_Apellido`, `Doce_Celular`, `Doce_Correo`, `Doce_Mencion`, `Doce_Estado`, `updated_at`, `created_at`) VALUES
(1, 1, 5, 1, '12345678', NULL, 'DIANA', 'DIAZ ESTRADA', '98555554', 'diana_diaz@unu.edu.pe', '---', 1, '2023-06-27 17:27:56', '2023-06-27 17:27:56'),
(2, 3, 5, 1, '70832839', 'DO', 'BETXY', 'ROJAS PENA', '981471056', 'betxymarianelarojas@gmail.com', 'SISTEMAS', 1, '2023-06-27 17:46:01', '2023-06-27 17:46:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_proyecto`
--

CREATE TABLE `log_proyecto` (
  `PK_LogProyecto` int(11) NOT NULL,
  `FK_Proyecto_LogProyecto` int(11) NOT NULL,
  `FK_Usuario_LogProyecto` int(11) NOT NULL,
  `Lpro_Accion` varchar(50) NOT NULL,
  `Lpro_Detalle` varchar(500) NOT NULL,
  `Lpro_Fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_carrera`
--

CREATE TABLE `m_carrera` (
  `PK_Carrera` int(11) NOT NULL,
  `FK_Facultad_Carrera` int(11) NOT NULL,
  `Carr_Nombre` varchar(100) NOT NULL,
  `Carr_Abreviatura` varchar(10) NOT NULL,
  `Carr_Estado` int(11) NOT NULL,
  `Carr_FechaCreacion` datetime NOT NULL,
  `Carr_FechaModificacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `m_carrera`
--

INSERT INTO `m_carrera` (`PK_Carrera`, `FK_Facultad_Carrera`, `Carr_Nombre`, `Carr_Abreviatura`, `Carr_Estado`, `Carr_FechaCreacion`, `Carr_FechaModificacion`) VALUES
(1, 3, 'PSICOLOGIA', 'PSC', 1, '2023-06-23 09:05:59', '2023-06-23 09:05:59'),
(2, 3, 'ENFERMERIA', 'PSC', 1, '2023-06-23 09:05:59', '2023-06-23 09:05:59'),
(3, 8, 'INGENIERIA DE SISTEMAS', 'PSC', 1, '2023-06-23 09:05:59', '2023-06-23 09:05:59'),
(4, 8, 'INGENIERIA CIVIL', 'PSC', 1, '2023-06-23 09:05:59', '2023-06-23 09:05:59'),
(5, 4, 'INGENIERIA FORESTAL', 'PSC', 1, '2023-06-23 09:05:59', '2023-06-23 09:05:59'),
(6, 4, 'INGENIERIA AMBIENTAL', 'PSC', 1, '2023-06-23 09:05:59', '2023-06-23 09:05:59'),
(7, 6, 'EDUCACION INICIAL', 'PSC', 1, '2023-06-23 09:05:59', '2023-06-23 09:05:59'),
(8, 6, 'EDUCACION PRIMARIA', 'PSC', 1, '2023-06-23 09:05:59', '2023-06-23 09:05:59'),
(9, 6, 'IDIOMA INGLES', 'PSC', 1, '2023-06-23 09:05:59', '2023-06-23 09:05:59'),
(10, 6, 'LIENCIAS NATURALES Y MEDIO AMBIENTE', 'PSC', 1, '2023-06-23 09:05:59', '2023-06-23 09:05:59'),
(11, 6, 'CIENCIAS SOCIALES Y EDUCACION INTERCULTURAL', 'PSC', 1, '2023-06-23 09:05:59', '2023-06-23 09:05:59'),
(12, 6, 'MATEMATICA, FISICA E INFORMATICA', 'PSC', 1, '2023-06-23 09:05:59', '2023-06-23 09:05:59'),
(13, 6, 'LENGUA Y LITERATURA', 'PSC', 1, '2023-06-23 09:05:59', '2023-06-23 09:05:59'),
(14, 6, 'CIENCIAS DE LA COMUNICACION', 'PSC', 1, '2023-06-23 09:05:59', '2023-06-23 09:05:59'),
(15, 2, 'AGRONOMIA', 'PSC', 1, '2023-06-23 09:05:59', '2023-06-23 09:05:59'),
(16, 2, 'INGENIERIA AGROINDUSTRIAL', 'PSC', 1, '2023-06-23 09:05:59', '2023-06-23 09:05:59'),
(17, 5, 'DERECHO Y CIENCIAS POLITICAS', 'PSC', 1, '2023-06-23 09:05:59', '2023-06-23 09:05:59'),
(18, 7, 'MEDICINA HUMANA', 'PSC', 1, '2023-06-23 09:05:59', '2023-06-23 09:05:59'),
(19, 1, 'ADMINISTRACION', 'PSC', 1, '2023-06-23 09:05:59', '2023-06-23 09:05:59'),
(20, 1, 'CONTABILIDAD', 'PSC', 1, '2023-06-23 09:05:59', '2023-06-23 09:05:59'),
(21, 1, 'ECONOMIA Y NEGOCIOS INTERNACIONALES', 'PSC', 1, '2023-06-23 09:05:59', '2023-06-23 09:05:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_estadoproyecto`
--

CREATE TABLE `m_estadoproyecto` (
  `PK_EstadoProyecto` int(11) NOT NULL,
  `Epro_Nombre` varchar(100) NOT NULL,
  `Epro_descripcion` varchar(200) NOT NULL,
  `Epro_boton` varchar(100) NOT NULL,
  `Epro_Estado` int(11) NOT NULL,
  `Epro_FechaCreacion` datetime NOT NULL,
  `Epro_FechaModificacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_facultad`
--

CREATE TABLE `m_facultad` (
  `PK_Facultad` int(11) NOT NULL,
  `Facu_Nombre` varchar(70) NOT NULL,
  `Facu_Abreviatura` varchar(10) NOT NULL,
  `Facu_Estado` int(11) NOT NULL,
  `Facu_FechaCreacion` datetime NOT NULL,
  `Facu_FechaModificacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `m_facultad`
--

INSERT INTO `m_facultad` (`PK_Facultad`, `Facu_Nombre`, `Facu_Abreviatura`, `Facu_Estado`, `Facu_FechaCreacion`, `Facu_FechaModificacion`) VALUES
(1, 'FACULTAD DE CIENCIAS ECONOMICAS ADMINISTRATIVAS Y CONTABLES', 'FCEAyC', 1, '2023-06-23 08:54:52', '2023-06-23 08:54:52'),
(2, 'FACULTAD DE CIENCIAS AGROPECUARIAS', 'FCA', 1, '2023-06-23 08:54:52', '2023-06-23 08:54:52'),
(3, 'FACULTAD DE CIENCIAS DE LA SALUD', 'FCS', 1, '2023-06-23 08:54:52', '2023-06-23 08:54:52'),
(4, 'FACULTAD DE CIENCIAS FORESTALES Y AMBIENTALES', 'FCFyA', 1, '2023-06-23 08:54:52', '2023-06-23 08:54:52'),
(5, 'FACULTAD DE DERECHO Y CIENCIAS POLITICAS', 'FDyCP', 1, '2023-06-23 08:54:52', '2023-06-23 08:54:52'),
(6, 'FACULTAD DE EDUCACION Y CIENCIAS SOCIALES', 'FEyCS', 1, '2023-06-23 08:54:52', '2023-06-23 08:54:52'),
(7, 'FACULTAD DE MEDICINA HUMANA', 'FMH', 1, '2023-06-23 08:54:52', '2023-06-23 08:54:52'),
(8, 'FACULTAD DE INGENIERIA DE SISTEMAS E INGENIERIA CIVIL', 'FISyIC', 1, '2023-06-23 08:54:52', '2023-06-23 08:54:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_fuentefinanciamiento`
--

CREATE TABLE `m_fuentefinanciamiento` (
  `PK_FuenteFinanciamiento` int(11) NOT NULL,
  `Ffin_Nombre` varchar(50) NOT NULL,
  `Ffin_Estado` int(11) NOT NULL,
  `Ffin_FechaCreacion` datetime NOT NULL,
  `Ffin_FechaModificacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `m_fuentefinanciamiento`
--

INSERT INTO `m_fuentefinanciamiento` (`PK_FuenteFinanciamiento`, `Ffin_Nombre`, `Ffin_Estado`, `Ffin_FechaCreacion`, `Ffin_FechaModificacion`) VALUES
(1, 'CANON FORESTAL', 1, '2023-06-23 23:23:02', '2023-06-23 23:23:02'),
(2, 'FOCAM', 1, '2023-06-23 23:23:02', '2023-06-23 23:23:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_gradoacademico`
--

CREATE TABLE `m_gradoacademico` (
  `PK_GradoAcademico` int(11) NOT NULL,
  `Gaca_Nombre` varchar(50) NOT NULL,
  `Gaca_Abreviatura` varchar(5) NOT NULL,
  `Gaca_Estado` int(11) NOT NULL,
  `Gaca_FechaCreacion` datetime NOT NULL,
  `Gaca_FechaModificacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `m_gradoacademico`
--

INSERT INTO `m_gradoacademico` (`PK_GradoAcademico`, `Gaca_Nombre`, `Gaca_Abreviatura`, `Gaca_Estado`, `Gaca_FechaCreacion`, `Gaca_FechaModificacion`) VALUES
(1, 'S/P ', 'S/P.', 1, '2023-06-23 09:19:58', '2023-06-23 09:19:58'),
(2, 'ESTUDIANTE DE ', 'EST.', 1, '2023-06-23 09:19:58', '2023-06-23 09:19:58'),
(3, 'BACHILLER EN ', 'BACH.', 1, '2023-06-23 09:19:58', '2023-06-23 09:19:58'),
(4, 'TITULADO ', 'TIT.', 1, '2023-06-23 09:19:58', '2023-06-23 09:19:58'),
(5, 'MAGISTER EN ', 'MG..', 1, '2023-06-23 09:19:58', '2023-06-23 09:19:58'),
(6, 'DOCTORADO EN ', 'DR.', 1, '2023-06-23 09:19:58', '2023-06-23 09:19:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_rolusuario`
--

CREATE TABLE `m_rolusuario` (
  `PK_RolUsuario` int(11) NOT NULL,
  `Rusu_Nombre` varchar(45) NOT NULL,
  `Rusu_Abreviatura` varchar(12) NOT NULL,
  `Rusu_Estado` int(11) NOT NULL,
  `Rusu_FechaCreacion` datetime NOT NULL,
  `Rusu_FechaModificacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `m_rolusuario`
--

INSERT INTO `m_rolusuario` (`PK_RolUsuario`, `Rusu_Nombre`, `Rusu_Abreviatura`, `Rusu_Estado`, `Rusu_FechaCreacion`, `Rusu_FechaModificacion`) VALUES
(1, 'Docente Responsable', 'DR', 1, '2023-06-23 09:25:32', '2023-06-23 09:25:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_sublineainvestigacion`
--

CREATE TABLE `m_sublineainvestigacion` (
  `PK_SubLineaInvestigacion` int(11) NOT NULL,
  `FK_LineaInvestigacion_SubLineaInvestigacion` int(11) NOT NULL,
  `SLinv_Nombre` varchar(200) NOT NULL,
  `SLinv_Estado` int(11) NOT NULL,
  `SLinv_FechaCreacion` datetime NOT NULL,
  `SLinv_FechaModificacion` datetime NOT NULL,
  `FK_carrera_SubLineaInvestigacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `m_sublineainvestigacion`
--

INSERT INTO `m_sublineainvestigacion` (`PK_SubLineaInvestigacion`, `FK_LineaInvestigacion_SubLineaInvestigacion`, `SLinv_Nombre`, `SLinv_Estado`, `SLinv_FechaCreacion`, `SLinv_FechaModificacion`, `FK_carrera_SubLineaInvestigacion`) VALUES
(1, 1, 'SISTEMA ESTRUCTURAL, GEOTECNIA', 1, '2023-06-23 23:23:50', '2023-06-23 23:23:50', 0),
(2, 2, 'TELECOMUNICACIONES', 1, '2023-06-23 23:23:50', '2023-06-23 23:23:50', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_tipoconvocatoria`
--

CREATE TABLE `m_tipoconvocatoria` (
  `PK_TipoConvocatoria` int(11) NOT NULL,
  `Tcon_Nombre` varchar(150) NOT NULL,
  `Tcon_Estado` int(11) NOT NULL,
  `Tcon_FechaCreacion` datetime NOT NULL,
  `Tcon_FechaModificacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_tipoinvestigacion`
--

CREATE TABLE `m_tipoinvestigacion` (
  `PK_TipoInvestigacion` int(11) NOT NULL,
  `Tinv_Nombre` varchar(50) NOT NULL,
  `Tinv_Estado` int(11) NOT NULL,
  `Tinv_FechaCreacion` datetime NOT NULL,
  `Tinv_FechaModificacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `m_tipoinvestigacion`
--

INSERT INTO `m_tipoinvestigacion` (`PK_TipoInvestigacion`, `Tinv_Nombre`, `Tinv_Estado`, `Tinv_FechaCreacion`, `Tinv_FechaModificacion`) VALUES
(1, 'INVESTIGACION APLICADA', 1, '2023-06-23 23:26:34', '2023-06-23 23:26:34'),
(2, 'INVESTIGACION CIENTIFICA', 1, '2023-06-23 23:26:34', '2023-06-23 23:26:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `m_tipoinvestigador`
--

CREATE TABLE `m_tipoinvestigador` (
  `PK_TipoInvestigador` int(11) NOT NULL,
  `Tinv_Nombre` varchar(100) NOT NULL,
  `Tinv_Abreviatura` varchar(5) NOT NULL,
  `Tinv_Estado` int(11) NOT NULL,
  `Tinv_FechaCreacion` datetime NOT NULL,
  `Tinv_FechaModificacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `m_tipoinvestigador`
--

INSERT INTO `m_tipoinvestigador` (`PK_TipoInvestigador`, `Tinv_Nombre`, `Tinv_Abreviatura`, `Tinv_Estado`, `Tinv_FechaCreacion`, `Tinv_FechaModificacion`) VALUES
(1, 'DOCENTE ORDINARIO', 'DO', 1, '2023-06-25 18:00:24', '2023-06-25 18:00:24'),
(2, 'DOCENTE CONTRATADO', 'DC', 1, '2023-06-25 18:00:24', '2023-06-25 18:00:24'),
(3, 'ESTUDIANTE', 'EST', 1, '2023-06-25 18:00:59', '2023-06-25 18:00:59'),
(4, 'GRADUADO', 'GRA', 1, '2023-06-25 18:00:59', '2023-06-25 18:00:59'),
(5, 'INVESTIGADOR EXTERNO', 'IE', 1, '2023-06-25 18:02:45', '2023-06-25 18:02:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `PK_Proyecto` int(11) NOT NULL,
  `FK_Convocatoria_Proyecto` int(11) NOT NULL,
  `FK_TipoInvestigacion_Proyecto` int(11) NOT NULL,
  `FK_SubLineaInvestigacion_Proyecto` int(11) NOT NULL,
  `FK_FuenteFinanciamiento_Proyecto` int(11) NOT NULL,
  `FK_EstadoProyecto_Proyecto` int(11) NOT NULL,
  `Proy_codigo` varchar(10) NOT NULL,
  `Proy_Anio` int(11) NOT NULL,
  `Proy_PeriodoEjecucion` int(11) NOT NULL,
  `Proy_FechaInicio` date NOT NULL,
  `Proy_FechaFin` date NOT NULL,
  `Proy_Ubicacion` varchar(50) NOT NULL,
  `Proy_ArchivoOriginalidad` varchar(250) DEFAULT NULL,
  `Proy_ArchivoCarta` varchar(50) NOT NULL,
  `Proy_ArchivoConvenio` varchar(250) DEFAULT NULL,
  `Proy_PuntajePromedio` decimal(18,2) NOT NULL,
  `Proy_Puntajebonificacion` decimal(18,2) NOT NULL,
  `Proy_PuntajeTotal` decimal(18,2) NOT NULL,
  `Proy_FechaAprobacion` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`PK_Proyecto`, `FK_Convocatoria_Proyecto`, `FK_TipoInvestigacion_Proyecto`, `FK_SubLineaInvestigacion_Proyecto`, `FK_FuenteFinanciamiento_Proyecto`, `FK_EstadoProyecto_Proyecto`, `Proy_codigo`, `Proy_Anio`, `Proy_PeriodoEjecucion`, `Proy_FechaInicio`, `Proy_FechaFin`, `Proy_Ubicacion`, `Proy_ArchivoOriginalidad`, `Proy_ArchivoCarta`, `Proy_ArchivoConvenio`, `Proy_PuntajePromedio`, `Proy_Puntajebonificacion`, `Proy_PuntajeTotal`, `Proy_FechaAprobacion`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 1, 1, '1-2023', 2023, 1, '2023-06-27', '2023-07-27', 'jr. los', '1-2023-2023_Originalidad.pdf', '', '', 0.00, 0.00, 0.00, NULL, '2023-06-27 17:53:04', '2023-06-27 22:53:04'),
(2, 1, 1, 2, 1, 1, '2-2023', 2023, 1, '2023-06-27', '2023-07-27', 'jr. los', '2-2023-2023_Originalidad.pdf', '', '', 0.00, 0.00, 0.00, NULL, '2023-06-27 17:54:13', '2023-06-27 22:54:13'),
(3, 1, 1, 2, 1, 1, '3-2023', 2023, 1, '2023-06-27', '2023-07-27', 'jr. los', '3-2023-2023_Originalidad.pdf', '', '', 0.00, 0.00, 0.00, NULL, '2023-06-27 17:54:47', '2023-06-27 22:54:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectodetalle`
--

CREATE TABLE `proyectodetalle` (
  `PK_ProyectoDetalle` int(11) NOT NULL,
  `FK_Proyecto_ProyectoDetalle` int(11) NOT NULL,
  `Pdet_Iteracion` int(11) NOT NULL,
  `Pdet_Titulo` varchar(255) NOT NULL,
  `Pdet_BienesServicios` decimal(18,2) NOT NULL,
  `Pdet_BienesCapital` decimal(18,2) NOT NULL,
  `Pdet_ArchivoProyecto` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proyectodetalle`
--

INSERT INTO `proyectodetalle` (`PK_ProyectoDetalle`, `FK_Proyecto_ProyectoDetalle`, `Pdet_Iteracion`, `Pdet_Titulo`, `Pdet_BienesServicios`, `Pdet_BienesCapital`, `Pdet_ArchivoProyecto`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'PROYECTO WEB', 8000.00, 5000.00, '1-2023-2023_Proyecto.pdf', '2023-06-27 17:53:04', '2023-06-27 17:53:04'),
(2, 2, 1, 'PROYECTO WEB', 8000.00, 5000.00, '2-2023-2023_Proyecto.pdf', '2023-06-27 17:54:13', '2023-06-27 17:54:13'),
(3, 3, 1, 'PROYECTO WEB', 8000.00, 5000.00, '3-2023-2023_Proyecto.pdf', '2023-06-27 17:54:47', '2023-06-27 17:54:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectointegrante`
--

CREATE TABLE `proyectointegrante` (
  `PK_ProyectoIntegrante` int(11) NOT NULL,
  `FK_Proyecto_ProyectoIntegrante` int(11) NOT NULL,
  `FK_Integrante_ProyectoIntegrante` int(11) NOT NULL,
  `FK_EquipoProyecto_ProyectoIntegrante` int(11) NOT NULL,
  `Pint_Ctvitae` varchar(50) NOT NULL,
  `Pint_Renacyt` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proyectointegrante`
--

INSERT INTO `proyectointegrante` (`PK_ProyectoIntegrante`, `FK_Proyecto_ProyectoIntegrante`, `FK_Integrante_ProyectoIntegrante`, `FK_EquipoProyecto_ProyectoIntegrante`, `Pint_Ctvitae`, `Pint_Renacyt`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '1-2023-2023_Ctvitae_R.pdf', '', '2023-06-27 17:53:04', '2023-06-27 17:53:04'),
(2, 1, 2, 2, '1-2023-2023_Ctvitae_M1.pdf', '', '2023-06-27 17:53:04', '2023-06-27 17:53:04'),
(3, 1, 2, 2, '', '', '2023-06-27 17:53:04', '2023-06-27 17:53:04'),
(4, 2, 1, 1, '2-2023-2023_Ctvitae_R.pdf', '', '2023-06-27 17:54:13', '2023-06-27 17:54:13'),
(5, 2, 2, 2, '2-2023-2023_Ctvitae_M1.pdf', '', '2023-06-27 17:54:13', '2023-06-27 17:54:13'),
(6, 2, 2, 2, '', '', '2023-06-27 17:54:13', '2023-06-27 17:54:13'),
(7, 3, 2, 1, '3-2023-2023_Ctvitae_R.pdf', '', '2023-06-27 17:54:47', '2023-06-27 17:54:47'),
(8, 3, 2, 2, '3-2023-2023_Ctvitae_M1.pdf', '', '2023-06-27 17:54:47', '2023-06-27 17:54:47'),
(9, 3, 2, 2, '', '', '2023-06-27 17:54:47', '2023-06-27 17:54:47'),
(10, 3, 2, 2, '', '', '2023-06-27 17:54:47', '2023-06-27 17:54:47'),
(11, 3, 2, 2, '', '', '2023-06-27 17:54:47', '2023-06-27 17:54:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `PK_Usuario` int(11) NOT NULL,
  `FK_RolUsuario_Usuario` int(11) NOT NULL,
  `Usua_id` int(11) DEFAULT NULL,
  `Usua_Responsable` varchar(200) NOT NULL,
  `Usua_Correo` varchar(200) NOT NULL,
  `Usua_Clave` varchar(200) NOT NULL,
  `Usu_Estado` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`PK_Usuario`, `FK_RolUsuario_Usuario`, `Usua_id`, `Usua_Responsable`, `Usua_Correo`, `Usua_Clave`, `Usu_Estado`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 'DIANA', 'diana_diaz@unu.edu.pe', '$2y$10$EldS9XyguejaK69VfSAwFOffkxynBo0GSmkebN8R3DXt6DvddFkmm', 1, '2023-06-27 22:27:56', '2023-06-27 17:27:56');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `convocatoria`
--
ALTER TABLE `convocatoria`
  ADD PRIMARY KEY (`PK_Convocatoria`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`PK_Docente`),
  ADD UNIQUE KEY `Doce_DNI` (`Doce_DNI`);

--
-- Indices de la tabla `log_proyecto`
--
ALTER TABLE `log_proyecto`
  ADD PRIMARY KEY (`PK_LogProyecto`);

--
-- Indices de la tabla `m_carrera`
--
ALTER TABLE `m_carrera`
  ADD PRIMARY KEY (`PK_Carrera`);

--
-- Indices de la tabla `m_estadoproyecto`
--
ALTER TABLE `m_estadoproyecto`
  ADD PRIMARY KEY (`PK_EstadoProyecto`);

--
-- Indices de la tabla `m_facultad`
--
ALTER TABLE `m_facultad`
  ADD PRIMARY KEY (`PK_Facultad`);

--
-- Indices de la tabla `m_fuentefinanciamiento`
--
ALTER TABLE `m_fuentefinanciamiento`
  ADD PRIMARY KEY (`PK_FuenteFinanciamiento`);

--
-- Indices de la tabla `m_gradoacademico`
--
ALTER TABLE `m_gradoacademico`
  ADD PRIMARY KEY (`PK_GradoAcademico`);

--
-- Indices de la tabla `m_rolusuario`
--
ALTER TABLE `m_rolusuario`
  ADD PRIMARY KEY (`PK_RolUsuario`);

--
-- Indices de la tabla `m_sublineainvestigacion`
--
ALTER TABLE `m_sublineainvestigacion`
  ADD PRIMARY KEY (`PK_SubLineaInvestigacion`);

--
-- Indices de la tabla `m_tipoconvocatoria`
--
ALTER TABLE `m_tipoconvocatoria`
  ADD PRIMARY KEY (`PK_TipoConvocatoria`);

--
-- Indices de la tabla `m_tipoinvestigacion`
--
ALTER TABLE `m_tipoinvestigacion`
  ADD PRIMARY KEY (`PK_TipoInvestigacion`);

--
-- Indices de la tabla `m_tipoinvestigador`
--
ALTER TABLE `m_tipoinvestigador`
  ADD PRIMARY KEY (`PK_TipoInvestigador`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`PK_Proyecto`),
  ADD UNIQUE KEY `Proy_codigo` (`Proy_codigo`);

--
-- Indices de la tabla `proyectodetalle`
--
ALTER TABLE `proyectodetalle`
  ADD PRIMARY KEY (`PK_ProyectoDetalle`);

--
-- Indices de la tabla `proyectointegrante`
--
ALTER TABLE `proyectointegrante`
  ADD PRIMARY KEY (`PK_ProyectoIntegrante`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`PK_Usuario`),
  ADD UNIQUE KEY `Usua_Correo` (`Usua_Correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `convocatoria`
--
ALTER TABLE `convocatoria`
  MODIFY `PK_Convocatoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `PK_Docente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `log_proyecto`
--
ALTER TABLE `log_proyecto`
  MODIFY `PK_LogProyecto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `m_carrera`
--
ALTER TABLE `m_carrera`
  MODIFY `PK_Carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `m_estadoproyecto`
--
ALTER TABLE `m_estadoproyecto`
  MODIFY `PK_EstadoProyecto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `m_facultad`
--
ALTER TABLE `m_facultad`
  MODIFY `PK_Facultad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `m_fuentefinanciamiento`
--
ALTER TABLE `m_fuentefinanciamiento`
  MODIFY `PK_FuenteFinanciamiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `m_gradoacademico`
--
ALTER TABLE `m_gradoacademico`
  MODIFY `PK_GradoAcademico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `m_rolusuario`
--
ALTER TABLE `m_rolusuario`
  MODIFY `PK_RolUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `m_sublineainvestigacion`
--
ALTER TABLE `m_sublineainvestigacion`
  MODIFY `PK_SubLineaInvestigacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `m_tipoconvocatoria`
--
ALTER TABLE `m_tipoconvocatoria`
  MODIFY `PK_TipoConvocatoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `m_tipoinvestigacion`
--
ALTER TABLE `m_tipoinvestigacion`
  MODIFY `PK_TipoInvestigacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `m_tipoinvestigador`
--
ALTER TABLE `m_tipoinvestigador`
  MODIFY `PK_TipoInvestigador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `PK_Proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `proyectodetalle`
--
ALTER TABLE `proyectodetalle`
  MODIFY `PK_ProyectoDetalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `proyectointegrante`
--
ALTER TABLE `proyectointegrante`
  MODIFY `PK_ProyectoIntegrante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `PK_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
