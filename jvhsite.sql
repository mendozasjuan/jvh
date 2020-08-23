-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-08-2020 a las 13:08:21
-- Versión del servidor: 8.0.21-0ubuntu0.20.04.4
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jvhsite`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calidad`
--

CREATE TABLE `calidad` (
  `id` int NOT NULL,
  `encabezado_imagen_fondo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `logo_1_encabezado` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `logo_2_encabezado` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `texto_encabezado` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `texto_encabezado_habilitado` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion1_titulo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_parrafo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_logo1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_logo2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_logo3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_logo4` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_logo5` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_logo6` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_logo7` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion2_imagen_fondo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `calidad`
--

INSERT INTO `calidad` (`id`, `encabezado_imagen_fondo`, `logo_1_encabezado`, `logo_2_encabezado`, `texto_encabezado`, `texto_encabezado_habilitado`, `seccion1_titulo`, `seccion1_parrafo`, `seccion1_logo1`, `seccion1_logo2`, `seccion1_logo3`, `seccion1_logo4`, `seccion1_logo5`, `seccion1_logo6`, `seccion1_logo7`, `seccion2_imagen_fondo`) VALUES
(1, 'img/mBazWETS2XpFjkirfg6qDo41jixsu7Ul69rHB0b8.png', 'img/zMrtZzAQC1wtjZ5y3ZRLOE8M1fNVuytg5e56VvOs.svg', 'img/nVrWZ0kRr1hxJjaU6xhVWbbFs5Mxsj6lKjuQnY03.svg', '{\"es\":\"Texto\",\"zh\":null}', NULL, '{\"es\":\"Carne de Calidad\",\"zh\":null}', '{\"es\":\"<p>Contamos con:<\\/p><ul><li>procedimientos operativos estandarizados de sanitizacion (ssop)<\\/li><li>sistema de analisis de peligros y control de puntos cr\\u00edticos (haccp)<\\/li><li>buenas pr\\u00e1cticas de manufactura (gmp)<\\/li><li>procedimientos operativos estandarizadis (sop)<\\/li><li>cumplimos con las normas de bienestar animal para garantizar el m\\u00e1s alto nivel de seguridad alimentaria en la industria<\\/li><\\/ul>\",\"zh\":\"null\"}', 'img/wwPvlnT7wtMsIWWFU5wmWGqAMM7BhQfqXmeNcGwh.png', 'img/cyr7TALXZpoobACoTfrqApAPiuKZNgFkYCBRTRBL.png', 'img/6Ag5uTCynlv1LMKlht43QPlfnUb9MMlBQdGue4u0.png', 'img/XkNw9ARvfl9xsHsADMLD2d6ElBmS8XKI0jjvYbGx.png', 'img/tapSuV71Sa7l9zTGxvYMFr65buGEcnWCAtVP6Xta.png', 'img/x6s8FPSaswEO6GDGP74kFy43opl1VDwLlBrdqSlP.png', 'img/W0ePVG5XdPGTIpaf98am2eRc3SQJi6sDhCshxUeH.png', 'img/QCi9tGn9pZ8TTGBRx39HyiwQdqufAIfT7aIXPk0p.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_corte`
--

CREATE TABLE `categoria_corte` (
  `id` int NOT NULL,
  `categoria` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categoria_corte`
--

INSERT INTO `categoria_corte` (`id`, `categoria`) VALUES
(1, '{\"es\":\"Cuarto Trasero\",\"zh\":\"\\u5f8c\\u5ba4\"}'),
(2, '{\"es\":\"Cuarto Delantero\",\"zh\":\"\\u7b2c\\u56db\\u524d\\u9032\"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `apellido`, `correo`, `telefono`, `mensaje`) VALUES
(1, 'Juan', 'Mendoza', 'men@gmail', '04169628553', 'Mensaje');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto_footer`
--

CREATE TABLE `contacto_footer` (
  `id` int NOT NULL,
  `ciudad1` text NOT NULL,
  `direccion1` text NOT NULL,
  `telefonos1` text NOT NULL,
  `ciudad2` text NOT NULL,
  `direccion2` text NOT NULL,
  `telefonos2` text NOT NULL,
  `contacto_titulo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `comercio_exterior` varchar(255) NOT NULL,
  `area_comercial` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `contacto_footer`
--

INSERT INTO `contacto_footer` (`id`, `ciudad1`, `direccion1`, `telefonos1`, `ciudad2`, `direccion2`, `telefonos2`, `contacto_titulo`, `comercio_exterior`, `area_comercial`) VALUES
(1, '{\"es\":\"L. DEL MIRADOR - BUENOS AIRES\",\"zh\":null}', '{\"es\":\"<p>Paso 3030 (1752) Lomas del Mirador Buenos Aires Argentina<\\/p>\",\"zh\":\"null\"}', '<p>+54 (11)) 4699-4424</p><p>+54 (11)) 4699-2882</p>', '{\"es\":\"BERNASCONI - LA PAMPA\",\"zh\":null}', '{\"es\":\"<p>Ruta 35, Km 165 (8204) Bernasconi La Pampa - Argentina<\\/p>\",\"zh\":\"null\"}', '<p>+54 (11)) 4699-4424</p><p>+54 (11)) 4699-2882</p>', '{\"es\":\"CONTACTO\",\"zh\":null}', 'Jescudero@frigorificohv.com.ar', 'dvigna@frigorificohv.com.ar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corte`
--

CREATE TABLE `corte` (
  `id` int NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `tamano_caja` varchar(255) NOT NULL,
  `medidas` varchar(255) NOT NULL,
  `envasado` varchar(255) NOT NULL,
  `piezas_por_caja` varchar(255) NOT NULL,
  `condiciones_termicas` varchar(255) NOT NULL,
  `especificaciones` varchar(255) NOT NULL,
  `categoria_corte_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `corte`
--

INSERT INTO `corte` (`id`, `nombre`, `descripcion`, `tamano_caja`, `medidas`, `envasado`, `piezas_por_caja`, `condiciones_termicas`, `especificaciones`, `categoria_corte_id`) VALUES
(1, 'Corazon de Cuadril', 'Equipos de última generación para los procesos de congelado, enfriado y envasado al vacío y gran eficacia en el área de la comercialización y atención al cliente. Por su eficacia, tecnología y competitividad comercial, Frigorífico hv S.A, garantiza en todos sus productos, la más alta calidad en la industria de la carne.', 'Escopeta/grande', '60x24x15 - 60x40x15', 'Al vacío', '2/3 piezas - 4/5 piezas', 'enfriado/congelado', 'Menos de 4kg/mas de 4kg- Labio 1x1/2x1', 1),
(2, 'Bife Angosto', 'Equipos de última generación para los procesos de congelado, enfriado y envasado al vacío y gran eficacia en el área de la comercialización y atención al cliente. Por su eficacia, tecnología y competitividad comercial, Frigorífico hv S.A, garantiza en todos sus productos, la más alta calidad en la industria de la carne.', 'Escopeta/grande', '60x24x15 - 60x40x15', 'Al vacío', '2/3 piezas - 4/5 piezas', 'enfriado/congelado', 'Menos de 4kg/mas de 4kg- Labio 1x1/2x1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etiquetado_corte`
--

CREATE TABLE `etiquetado_corte` (
  `id` int NOT NULL,
  `etiquetado` varchar(255) NOT NULL,
  `corte_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `etiquetado_corte`
--

INSERT INTO `etiquetado_corte` (`id`, `etiquetado`, `corte_id`) VALUES
(2, 'etiquetado/6tSCGn0JyiS75BegEHq9Mt7LfIwtfaOX8Nl3PQMn.png', 2),
(4, 'img/etiquetado/n40xhvvwGADCmNvnVI4Qeui7wVIaDfABnUAsoIfs.png', 1),
(5, 'img/etiquetado/nyNKZlKsMOxFumXpSoChj7Gxq483QOB8KUFZ54Hx.png', 1),
(7, 'img/etiquetado/7C7r80vg9gFWibHrqqb7a8ce7eFSf3eIqFuXHOv6.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exportacion`
--

CREATE TABLE `exportacion` (
  `id` int NOT NULL,
  `encabezado_imagen_fondo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `logo_1_encabezado` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `logo_2_encabezado` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `texto_encabezado` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `texto_encabezado_habilitado` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion1_titulo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_parrafo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_imagen` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion2_parrafo1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion2_parrafo2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion2_imagen_fondo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion3_titulo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion3_imagen_fondo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `exportacion`
--

INSERT INTO `exportacion` (`id`, `encabezado_imagen_fondo`, `logo_1_encabezado`, `logo_2_encabezado`, `texto_encabezado`, `texto_encabezado_habilitado`, `seccion1_titulo`, `seccion1_parrafo`, `seccion1_imagen`, `seccion2_parrafo1`, `seccion2_parrafo2`, `seccion2_imagen_fondo`, `seccion3_titulo`, `seccion3_imagen_fondo`) VALUES
(1, 'img/arLMIfOcvA32Gy6AWoQLRjtsaIfEi7v9TrjPF4qD.png', 'img/n7sfMMqkP9jyQzQGWSDgSSarsrxKlYvwKX12gVLG.svg', 'img/HXodcf54qPSEL98fPpnA2Ig7x0VeG5X2MAjYbTQd.svg', '{\"es\":\"Texto\",\"zh\":null}', NULL, '{\"es\":\"Mercados en el Mundo\",\"zh\":null}', '{\"es\":\"<p>Cuenta con todos los permisos y certificaciones necesarios para exportar a la uni\\u00f3n europea, israel, suiza, rusia, hong kong, brasil y sud\\u00e1frica entre otros.<\\/p>\",\"zh\":\"null\"}', 'img/fpIy5fPSaFeEGuhafWRFopeoxtvURsu6BIaTu0na.svg', '{\"es\":\"<p>Paises a los que Exportamos<\\/p><ul><li>Angola<\\/li><li>Antillas Hol.<\\/li><li>Argelia<\\/li><li>Aruba<\\/li><li>Bosnia y Herzegovina<\\/li><li>Brasil<\\/li><li>Bulgaria<\\/li><li>Chile<\\/li><li>Curacao<\\/li><li>Estados Unidos<\\/li><li>Guinea ecuatorial<\\/li><li>Peru<\\/li><li>Reino Unido<\\/li><li>Rusia<\\/li><li>Suiza<\\/li><li>Ucrania<\\/li><li>Venezuela<\\/li><li>Uni\\u00f3n Europea<\\/li><\\/ul>\",\"zh\":\"null\"}', '{\"es\":\"<p>Paises Habilitados para Exportar<\\/p><ul><li>Angola<\\/li><li>Antillas Hol.<\\/li><li>Argelia<\\/li><li>Aruba<\\/li><li>Bosnia y Herzegovina<\\/li><li>Brasil<\\/li><li>Bulgaria<\\/li><li>Chile<\\/li><li>Curacao<\\/li><li>Egipto<\\/li><li>Estados Unidos<\\/li><li>Guinea ecuatorial<\\/li><li>Peru<\\/li><li>Rusia<\\/li><li>Suiza<\\/li><li>Ucrania<\\/li><li>Uni\\u00f3n Europea<\\/li><\\/ul>\",\"zh\":\"null\"}', 'img/D9BooVrJkd6m8ae9hIu4t0J7UYO0b1LLljDRqwvR.png', '{\"es\":\"\\\"Nos sentimos muy agradecidos de tener la oportunidad de contribuir al desarrollo social y econ\\u00f3mico en las comunidades donde trabajamos\\\"\",\"zh\":null}', 'img/3XfGclbV9egBsqCeXup9fQ9aTIEv96iBWxKl21zZ.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen_corte`
--

CREATE TABLE `imagen_corte` (
  `id` int NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `corte_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `imagen_corte`
--

INSERT INTO `imagen_corte` (`id`, `imagen`, `corte_id`) VALUES
(1, 'img/producto/raEES1TXS09KSaZCHtAdarN9lmjNqOcu18JNhhBJ.png', 1),
(2, 'producto/g6Gt9rNft1F5Yb9yhpPsmMHspCjJOYFSe6hV69UT.png', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impactosocial`
--

CREATE TABLE `impactosocial` (
  `id` int NOT NULL,
  `encabezado_imagen_fondo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `logo_1_encabezado` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `logo_2_encabezado` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `texto_encabezado` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `texto_encabezado_habilitado` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion1_titulo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_parrafo1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_parrafo2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion2_titulo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion2_imagen_fondo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `impactosocial`
--

INSERT INTO `impactosocial` (`id`, `encabezado_imagen_fondo`, `logo_1_encabezado`, `logo_2_encabezado`, `texto_encabezado`, `texto_encabezado_habilitado`, `seccion1_titulo`, `seccion1_parrafo1`, `seccion1_parrafo2`, `seccion2_titulo`, `seccion2_imagen_fondo`) VALUES
(1, 'img/VufPRT2Q4dz5LWzUBXPUKHftEJYU9PzFeBSLF5Jy.png', 'img/pclU91AgZY9cofRrWFMuA2JYb4B6MIDQ1DgGpIAa.svg', 'img/zDpB9hYxPgu2TAnYnqXgH7lpfk5t6k06UIyGXSWn.svg', '{\"es\":\"Texto\",\"zh\":null}', NULL, '{\"es\":\"Nuestro compromiso\",\"zh\":null}', '{\"es\":\"<p>Somos conscientes que el factor humano es la fuerza que mueve frigorifico hv sa, y nos empe\\u00f1amos en cuidarlo. Aparte de preocuparnos por la capacitacion y el bienestar de nuestros empleados, nos sentimos orgullosos de contribuir al desarrollo social de la comunidad donde trabajamos. Con nuestra empresa creamos empleo y desarrollo, generando ingresos que ayudan a mejorar la calidad de vida de la comunidad de nuestra ciudad.<\\/p>\",\"zh\":\"undefined\"}', '{\"es\":\"<p>Nuestra gente es el mayor capital y el bien m\\u00e1s preciado. Nos sentimos muy orgullosos de contar con un equipo homog\\u00e9neo, talentoso e innovador. Contamos con hombres y mujeres que trabajan arduamente e integran un proyecto en com\\u00fan.<\\/p>\",\"zh\":\"null\"}', '{\"es\":\"\\\"Nos sentimos muy agradecidos de tener la oportunidad de contribuir al desarrollo social y econ\\u00f3mico en las comunidades donde trabajamos\\\"\",\"zh\":null}', 'img/JV2BWnsFOQ4AWL2Xz16hNKxEk3mtCg1jdoDitKFd.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio`
--

CREATE TABLE `inicio` (
  `id` int NOT NULL,
  `encabezado_imagen_fondo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `logo_1_encabezado` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `logo_2_encabezado` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `texto_encabezado` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `texto_encabezado_habilitado` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion1_titulo` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion_1_parrafo` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_logo1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `seccion1_logo2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `seccion1_logo3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `seccion2_imagen_fondo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `seccio2_titulo` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion_2_parrafo` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion3_titulo` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion3_parrafo` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion3_imagen` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `seccion4_titulo` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion4_imagen_fondo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `inicio`
--

INSERT INTO `inicio` (`id`, `encabezado_imagen_fondo`, `logo_1_encabezado`, `logo_2_encabezado`, `texto_encabezado`, `texto_encabezado_habilitado`, `seccion1_titulo`, `seccion_1_parrafo`, `seccion1_logo1`, `seccion1_logo2`, `seccion1_logo3`, `seccion2_imagen_fondo`, `seccio2_titulo`, `seccion_2_parrafo`, `seccion3_titulo`, `seccion3_parrafo`, `seccion3_imagen`, `seccion4_titulo`, `seccion4_imagen_fondo`) VALUES
(1, 'img/pgekM7LP1VItoppmBNQzNpjkHPDdNAcPIh0GUtjN.png', 'img/SPJKOClToHqvmTZnuFnobiHGhFnJ8KEfxMnwEsTX.svg', 'img/kWxnCuz9ONccwCSwPCLkG5rabLC0aLuT18Gt3meM.svg', '{\"es\":\"\\\"Carne Argentina de alta calidad para los mercados m\\u00e1s exigentes del mundo\\\"\",\"zh\":null}', 'on', '{\"es\":\"Nuestra Carne\",\"zh\":null}', '{\"es\":\"<p>La calidad de la carne, en t\\u00e9rminos alimenticios, depende de la conjunci\\u00f3n de diversos factores. Entre estos se destacan el tipo de crianza del ganado y la eficacia de su comercializaci\\u00f3n. La pampa h\\u00fameda argentina es uno de los lugares en el mundo en el que la cr\\u00eda de los animales no se realizan en establos, sino en extensas llanuras, alejadas de la poluci\\u00f3n industrial, donde la abundancia de pasturas esta asegurada. El ganado argentino respeta, adem\\u00e1s, las pautas de crecimiento natural, ya que no se los inyecta con hormonas y antibi\\u00f3ticos. Por estas razones, su estado resulta optimo para el consumo.<\\/p>\",\"zh\":null}', 'img/0dq8AG2nxtmOAZcKf774ndPm5Jr3IAemmjCIKuwy.png', 'img/dgvc8Vr88l51jGOnbr3CnMoLpepL7BUCiEdy3YZw.png', 'img/VnV0VTmO9odR59hNqKac6JUigbOEAiVvBZAPNfSA.png', 'img/YtwnKDZWf2XpUQivKo8WbNifFat2a08qTs5ycDd7.png', '{\"es\":\"\\u00daltima generaci\\u00f3n en la producci\\u00f3n de carnes\",\"zh\":null}', '{\"es\":\"<p>Equipos de \\u00faltima generaci\\u00f3n para los procesos de congelado, enfriado y envasado al vac\\u00edo<\\/p>\",\"zh\":null}', '{\"es\":\"Mercados en el Mundo\",\"zh\":null}', '{\"es\":\"<p>Cuenta con todos los permisos y certificaciones necesarios para exportar a la uni\\u00f3n europea, israel, suiza, rusia, hong kong, brasil y sud\\u00e1frica entre otros.<\\/p>\",\"zh\":null}', 'img/kq7whlQ3LuB6i8Xuyu2pXVYbX1V74juzKXFL029k.svg', '{\"es\":\"Nuestra carne es altamente demandada debido a su marmoleo natural, jugosidad, terneza y sabor\",\"zh\":null}', 'img/ILJ7goFj0DkyLhALPByjn7HnsVEw4ZXN52581nXY.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logotipo`
--

CREATE TABLE `logotipo` (
  `id` int NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `logotipo`
--

INSERT INTO `logotipo` (`id`, `logo`) VALUES
(1, 'img/k0b6Zki1z9OiwT7ZLyeN9VDsi2NfrKcU6uXSTxCZ.svg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nacionalidad`
--

CREATE TABLE `nacionalidad` (
  `id` int NOT NULL,
  `pais_nac` varchar(255) NOT NULL,
  `gentilicio_nac` varchar(255) NOT NULL,
  `iso_nac` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `nacionalidad`
--

INSERT INTO `nacionalidad` (`id`, `pais_nac`, `gentilicio_nac`, `iso_nac`) VALUES
(1, 'Afganistán', 'AFGANA', 'AFG'),
(2, 'Albania', 'ALBANESA', 'ALB'),
(3, 'Alemania', 'ALEMANA', 'DEU'),
(4, 'Andorra', 'ANDORRANA', 'AND'),
(5, 'Angola', 'ANGOLEÑA', 'AGO'),
(6, 'AntiguayBarbuda', 'ANTIGUANA', 'ATG'),
(7, 'ArabiaSaudita', 'SAUDÍ', 'SAU'),
(8, 'Argelia', 'ARGELINA', 'DZA'),
(9, 'Argentina', 'ARGENTINA', 'ARG'),
(10, 'Armenia', 'ARMENIA', 'ARM'),
(11, 'Aruba', 'ARUBEÑA', 'ABW'),
(12, 'Australia', 'AUSTRALIANA', 'AUS'),
(13, 'Austria', 'AUSTRIACA', 'AUT'),
(14, 'Azerbaiyán', 'AZERBAIYANA', 'AZE'),
(15, 'Bahamas', 'BAHAMEÑA', 'BHS'),
(16, 'Bangladés', 'BANGLADESÍ', 'BGD'),
(17, 'Barbados', 'BARBADENSE', 'BRB'),
(18, 'Baréin', 'BAREINÍ', 'BHR'),
(19, 'Bélgica', 'BELGA', 'BEL'),
(20, 'Belice', 'BELICEÑA', 'BLZ'),
(21, 'Benín', 'BENINÉSA', 'BEN'),
(22, 'Bielorrusia', 'BIELORRUSA', 'BLR'),
(23, 'Birmania', 'BIRMANA', 'MMR'),
(24, 'Bolivia', 'BOLIVIANA', 'BOL'),
(25, 'BosniayHerzegovina', 'BOSNIA', 'BIH'),
(26, 'Botsuana', 'BOTSUANA', 'BWA'),
(27, 'Brasil', 'BRASILEÑA', 'BRA'),
(28, 'Brunéi', 'BRUNEANA', 'BRN'),
(29, 'Bulgaria', 'BÚLGARA', 'BGR'),
(30, 'BurkinaFaso', 'BURKINÉS', 'BFA'),
(31, 'Burundi', 'BURUNDÉSA', 'BDI'),
(32, 'Bután', 'BUTANÉSA', 'BTN'),
(33, 'CaboVerde', 'CABOVERDIANA', 'CPV'),
(34, 'Camboya', 'CAMBOYANA', 'KHM'),
(35, 'Camerún', 'CAMERUNESA', 'CMR'),
(36, 'Canadá', 'CANADIENSE', 'CAN'),
(37, 'Catar', 'CATARÍ', 'QAT'),
(38, 'Chad', 'CHADIANA', 'TCD'),
(39, 'Chile', 'CHILENA', 'CHL'),
(40, 'China', 'CHINA', 'CHN'),
(41, 'Chipre', 'CHIPRIOTA', 'CYP'),
(42, 'CiudaddelVaticano', 'VATICANA', 'VAT'),
(43, 'Colombia', 'COLOMBIANA', 'COL'),
(44, 'Comoras', 'COMORENSE', 'COM'),
(45, 'CoreadelNorte', 'NORCOREANA', 'PRK'),
(46, 'CoreadelSur', 'SURCOREANA', 'KOR'),
(47, 'CostadeMarfil', 'MARFILEÑA', 'CIV'),
(48, 'CostaRica', 'COSTARRICENSE', 'CRI'),
(49, 'Croacia', 'CROATA', 'HRV'),
(50, 'Cuba', 'CUBANA', 'CUB'),
(51, 'Dinamarca', 'DANÉSA', 'DNK'),
(52, 'Dominica', 'DOMINIQUÉS', 'DMA'),
(53, 'Ecuador', 'ECUATORIANA', 'ECU'),
(54, 'Egipto', 'EGIPCIA', 'EGY'),
(55, 'ElSalvador', 'SALVADOREÑA', 'SLV'),
(56, 'EmiratosÁrabesUnidos', 'EMIRATÍ', 'ARE'),
(57, 'Eritrea', 'ERITREA', 'ERI'),
(58, 'Eslovaquia', 'ESLOVACA', 'SVK'),
(59, 'Eslovenia', 'ESLOVENA', 'SVN'),
(60, 'España', 'ESPAÑOLA', 'ESP'),
(61, 'EstadosUnidos', 'ESTADOUNIDENSE', 'USA'),
(62, 'Estonia', 'ESTONIA', 'EST'),
(63, 'Etiopía', 'ETÍOPE', 'ETH'),
(64, 'Filipinas', 'FILIPINA', 'PHL'),
(65, 'Finlandia', 'FINLANDÉSA', 'FIN'),
(66, 'Fiyi', 'FIYIANA', 'FJI'),
(67, 'Francia', 'FRANCÉSA', 'FRA'),
(68, 'Gabón', 'GABONÉSA', 'GAB'),
(69, 'Gambia', 'GAMBIANA', 'GMB'),
(70, 'Georgia', 'GEORGIANA', 'GEO'),
(71, 'Gibraltar', 'GIBRALTAREÑA', 'GIB'),
(72, 'Ghana', 'GHANÉSA', 'GHA'),
(73, 'Granada', 'GRANADINA', 'GRD'),
(74, 'Grecia', 'GRIEGA', 'GRC'),
(75, 'Groenlandia', 'GROENLANDÉSA', 'GRL'),
(76, 'Guatemala', 'GUATEMALTECA', 'GTM'),
(77, 'Guineaecuatorial', 'ECUATOGUINEANA', 'GNQ'),
(78, 'Guinea', 'GUINEANA', 'GIN'),
(79, 'Guinea-Bisáu', 'GUINEANA', 'GNB'),
(80, 'Guyana', 'GUYANESA', 'GUY'),
(81, 'Haití', 'HAITIANA', 'HTI'),
(82, 'Honduras', 'HONDUREÑA', 'HND'),
(83, 'Hungría', 'HÚNGARA', 'HUN'),
(84, 'India', 'HINDÚ', 'IND'),
(85, 'Indonesia', 'INDONESIA', 'IDN'),
(86, 'Irak', 'IRAQUÍ', 'IRQ'),
(87, 'Irán', 'IRANÍ', 'IRN'),
(88, 'Irlanda', 'IRLANDÉSA', 'IRL'),
(89, 'Islandia', 'ISLANDÉSA', 'ISL'),
(90, 'IslasCook', 'COOKIANA', 'COK'),
(91, 'IslasMarshall', 'MARSHALÉSA', 'MHL'),
(92, 'IslasSalomón', 'SALOMONENSE', 'SLB'),
(93, 'Israel', 'ISRAELÍ', 'ISR'),
(94, 'Italia', 'ITALIANA', 'ITA'),
(95, 'Jamaica', 'JAMAIQUINA', 'JAM'),
(96, 'Japón', 'JAPONÉSA', 'JPN'),
(97, 'Jordania', 'JORDANA', 'JOR'),
(98, 'Kazajistán', 'KAZAJA', 'KAZ'),
(99, 'Kenia', 'KENIATA', 'KEN'),
(100, 'Kirguistán', 'KIRGUISA', 'KGZ'),
(101, 'Kiribati', 'KIRIBATIANA', 'KIR'),
(102, 'Kuwait', 'KUWAITÍ', 'KWT'),
(103, 'Laos', 'LAOSIANA', 'LAO'),
(104, 'Lesoto', 'LESOTENSE', 'LSO'),
(105, 'Letonia', 'LETÓNA', 'LVA'),
(106, 'Líbano', 'LIBANÉSA', 'LBN'),
(107, 'Liberia', 'LIBERIANA', 'LBR'),
(108, 'Libia', 'LIBIA', 'LBY'),
(109, 'Liechtenstein', 'LIECHTENSTEINIANA', 'LIE'),
(110, 'Lituania', 'LITUANA', 'LTU'),
(111, 'Luxemburgo', 'LUXEMBURGUÉSA', 'LUX'),
(112, 'Madagascar', 'MALGACHE', 'MDG'),
(113, 'Malasia', 'MALASIA', 'MYS'),
(114, 'Malaui', 'MALAUÍ', 'MWI'),
(115, 'Maldivas', 'MALDIVA', 'MDV'),
(116, 'Malí', 'MALIENSE', 'MLI'),
(117, 'Malta', 'MALTÉSA', 'MLT'),
(118, 'Marruecos', 'MARROQUÍ', 'MAR'),
(119, 'Martinica', 'MARTINIQUÉS', 'MTQ'),
(120, 'Mauricio', 'MAURICIANA', 'MUS'),
(121, 'Mauritania', 'MAURITANA', 'MRT'),
(122, 'México', 'MEXICANA', 'MEX'),
(123, 'Micronesia', 'MICRONESIA', 'FSM'),
(124, 'Moldavia', 'MOLDAVA', 'MDA'),
(125, 'Mónaco', 'MONEGASCA', 'MCO'),
(126, 'Mongolia', 'MONGOLA', 'MNG'),
(127, 'Montenegro', 'MONTENEGRINA', 'MNE'),
(128, 'Mozambique', 'MOZAMBIQUEÑA', 'MOZ'),
(129, 'Namibia', 'NAMIBIA', 'NAM'),
(130, 'Nauru', 'NAURUANA', 'NRU'),
(131, 'Nepal', 'NEPALÍ', 'NPL'),
(132, 'Nicaragua', 'NICARAGÜENSE', 'NIC'),
(133, 'Níger', 'NIGERINA', 'NER'),
(134, 'Nigeria', 'NIGERIANA', 'NGA'),
(135, 'Noruega', 'NORUEGA', 'NOR'),
(136, 'NuevaZelanda', 'NEOZELANDÉSA', 'NZL'),
(137, 'Omán', 'OMANÍ', 'OMN'),
(138, 'PaísesBajos', 'NEERLANDÉSA', 'NLD'),
(139, 'Pakistán', 'PAKISTANÍ', 'PAK'),
(140, 'Palaos', 'PALAUANA', 'PLW'),
(141, 'Palestina', 'PALESTINA', 'PSE'),
(142, 'Panamá', 'PANAMEÑA', 'PAN'),
(143, 'PapúaNuevaGuinea', 'PAPÚ', 'PNG'),
(144, 'Paraguay', 'PARAGUAYA', 'PRY'),
(145, 'Perú', 'PERUANA', 'PER'),
(146, 'Polonia', 'POLACA', 'POL'),
(147, 'Portugal', 'PORTUGUÉSA', 'PRT'),
(148, 'PuertoRico', 'PUERTORRIQUEÑA', 'PRI'),
(149, 'ReinoUnido', 'BRITÁNICA', 'GBR'),
(150, 'RepúblicaCentroafricana', 'CENTROAFRICANA', 'CAF'),
(151, 'RepúblicaCheca', 'CHECA', 'CZE'),
(152, 'RepúblicadeMacedonia', 'MACEDONIA', 'MKD'),
(153, 'RepúblicadelCongo', 'CONGOLEÑA', 'COG'),
(154, 'RepúblicaDemocráticadelCongo', 'CONGOLEÑA', 'COD'),
(155, 'RepúblicaDominicana', 'DOMINICANA', 'DOM'),
(156, 'RepúblicaSudafricana', 'SUDAFRICANA', 'ZAF'),
(157, 'Ruanda', 'RUANDÉSA', 'RWA'),
(158, 'Rumanía', 'RUMANA', 'ROU'),
(159, 'Rusia', 'RUSA', 'RUS'),
(160, 'Samoa', 'SAMOANA', 'WSM'),
(161, 'SanCristóbalyNieves', 'CRISTOBALEÑA', 'KNA'),
(162, 'SanMarino', 'SANMARINENSE', 'SMR'),
(163, 'SanVicenteylasGranadinas', 'SANVICENTINA', 'VCT'),
(164, 'SantaLucía', 'SANTALUCENSE', 'LCA'),
(165, 'SantoToméyPríncipe', 'SANTOTOMENSE', 'STP'),
(166, 'Senegal', 'SENEGALÉSA', 'SEN'),
(167, 'Serbia', 'SERBIA', 'SRB'),
(168, 'Seychelles', 'SEYCHELLENSE', 'SYC'),
(169, 'SierraLeona', 'SIERRALEONÉSA', 'SLE'),
(170, 'Singapur', 'SINGAPURENSE', 'SGP'),
(171, 'Siria', 'SIRIA', 'SYR'),
(172, 'Somalia', 'SOMALÍ', 'SOM'),
(173, 'SriLanka', 'CEILANÉSA', 'LKA'),
(174, 'Suazilandia', 'SUAZI', 'SWZ'),
(175, 'SudándelSur', 'SURSUDANÉSA', 'SSD'),
(176, 'Sudán', 'SUDANÉSA', 'SDN'),
(177, 'Suecia', 'SUECA', 'SWE'),
(178, 'Suiza', 'SUIZA', 'CHE'),
(179, 'Surinam', 'SURINAMESA', 'SUR'),
(180, 'Tailandia', 'TAILANDÉSA', 'THA'),
(181, 'Tanzania', 'TANZANA', 'TZA'),
(182, 'Tayikistán', 'TAYIKA', 'TJK'),
(183, 'TimorOriental', 'TIMORENSE', 'TLS'),
(184, 'Togo', 'TOGOLÉSA', 'TGO'),
(185, 'Tonga', 'TONGANA', 'TON'),
(186, 'TrinidadyTobago', 'TRINITENSE', 'TTO'),
(187, 'Túnez', 'TUNECINA', 'TUN'),
(188, 'Turkmenistán', 'TURCOMANA', 'TKM'),
(189, 'Turquía', 'TURCA', 'TUR'),
(190, 'Tuvalu', 'TUVALUANA', 'TUV'),
(191, 'Ucrania', 'UCRANIANA', 'UKR'),
(192, 'Uganda', 'UGANDÉSA', 'UGA'),
(193, 'Uruguay', 'URUGUAYA', 'URY'),
(194, 'Uzbekistán', 'UZBEKA', 'UZB'),
(195, 'Vanuatu', 'VANUATUENSE', 'VUT'),
(196, 'Venezuela', 'VENEZOLANA', 'VEN'),
(197, 'Vietnam', 'VIETNAMITA', 'VNM'),
(198, 'Yemen', 'YEMENÍ', 'YEM'),
(199, 'Yibuti', 'YIBUTIANA', 'DJI'),
(200, 'Zambia', 'ZAMBIANA', 'ZMB'),
(201, 'Zimbabue', 'ZIMBABUENSE', 'ZWE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `packaging_corte`
--

CREATE TABLE `packaging_corte` (
  `id` int NOT NULL,
  `packaging` varchar(255) NOT NULL,
  `corte_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `packaging_corte`
--

INSERT INTO `packaging_corte` (`id`, `packaging`, `corte_id`) VALUES
(1, 'packaging/6J0xh9u43eEbpfj8IfudGkrR09SCS4rDM1ZL2YlE.png', 7),
(2, 'packaging/DAni93CIfVSzZmx8IgTRa9gBF07bTCOm2yxFN5Uc.png', 8),
(3, 'packaging/kWHg5wqRI4u3ZukTJwEO6GN8mBhLXYBiIbHZj9CM.png', 9),
(4, 'packaging/o7VTtveQ2X8cxaSiAMDeCoqkSgxP9O8mcWafHk1i.png', 10),
(6, 'packaging/nAM2AyrWwFcEfdx3TbhSHDsAmITagG5FnDzviZc4.png', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina_contacto`
--

CREATE TABLE `pagina_contacto` (
  `id` int NOT NULL,
  `encabezado_imagen_fondo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ciudad1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `direccion1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telefonos1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ciudad2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `direccion2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telefonos2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contacto_titulo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contacto_descripcion` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `comercio_exterior` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `area_comercial` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `coordenadas1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `coordenadas2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pagina_contacto`
--

INSERT INTO `pagina_contacto` (`id`, `encabezado_imagen_fondo`, `ciudad1`, `direccion1`, `telefonos1`, `ciudad2`, `direccion2`, `telefonos2`, `contacto_titulo`, `contacto_descripcion`, `comercio_exterior`, `area_comercial`, `coordenadas1`, `coordenadas2`) VALUES
(1, 'img/bRYNBeCvrBjnCt0pL94W8GRyQm7d7KtMxwrshc0x.png', '{\"es\":\"Lomas del Mirador\",\"zh\":null}', '{\"es\":\"<p>Paso 3030 (1752) Lomas del Mirador Buenos Aires<\\/p>\",\"zh\":\"null\"}', '+54 (11)) 4699-4424 +54 (11)) 4699-2882', '{\"es\":\"Bernasconi\",\"zh\":null}', '{\"es\":\"<p>Ruta 35, Km 165 (8204) Bernasconi - La Pampa<\\/p>\",\"zh\":\"null\"}', '+54 (11)) 4699-4424 / +54 (11)) 4699-2882', '{\"es\":\"Contacto\",\"zh\":null}', '{\"es\":\"<p>Para mayor informaci\\u00f3n, no dude en contactarse mediante el siguiente formulario, o a trav\\u00e9s de nuestras v\\u00edas de comunicaci\\u00f3n<\\/p>\",\"zh\":\"null\"}', 'Jescudero@frigorificohv.com.ar', 'dvigna@frigorificohv.com.ar', '010101', '010101');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina_productos`
--

CREATE TABLE `pagina_productos` (
  `id` int NOT NULL,
  `encabezado_imagen_fondo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `seccion1_titulo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `seccion1_imagen` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `seccion1_imagen_fondo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pagina_productos`
--

INSERT INTO `pagina_productos` (`id`, `encabezado_imagen_fondo`, `seccion1_titulo`, `seccion1_imagen`, `seccion1_imagen_fondo`) VALUES
(1, 'img/749Cv6tBBJz3xMMB2KVuvtdchVwMx7SOICv0xwKX.png', '{\"es\":\"Cat\\u00e1logo de cortes\",\"zh\":null}', 'img/mbHiIXewMdHCG1Bz1Vd2HobqmVzixlqSH5EQIrNw.png', 'img/Xjw2zYT1ukZpkUgy8pj0PN4Zp6WHB0mRIh2rA9Ia.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina_recursos_humanos`
--

CREATE TABLE `pagina_recursos_humanos` (
  `id` int NOT NULL,
  `encabezado_imagen_fondo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `seccion1_titulo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `seccion1_parrafo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pagina_recursos_humanos`
--

INSERT INTO `pagina_recursos_humanos` (`id`, `encabezado_imagen_fondo`, `seccion1_titulo`, `seccion1_parrafo`) VALUES
(1, 'img/sLmppM3CVAmWE5vp5pyNAreuoLcmOffiArMGyVmx.png', '{\"es\":\"Recursos Humanos\",\"zh\":null}', '{\"es\":\"<p>Trabaj\\u00e1 con nosotros. Podes sumarte en la empresa llenando este formulario y nos estaremos contactando con vos ante la primer oferta laboral.<\\/p>\",\"zh\":\"null\"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion`
--

CREATE TABLE `produccion` (
  `id` int NOT NULL,
  `encabezado_imagen_fondo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `logo_1_encabezado` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `logo_2_encabezado` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `texto_encabezado` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `texto_encabezado_habilitado` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `seccion1_titulo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_parrafo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_logo1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_logo2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_imagen_fondo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion2_titulo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion2_parrafo1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion2_parrafo2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion3_titulo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion3_parrafo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion3_imagen_fondo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `produccion`
--

INSERT INTO `produccion` (`id`, `encabezado_imagen_fondo`, `logo_1_encabezado`, `logo_2_encabezado`, `texto_encabezado`, `texto_encabezado_habilitado`, `seccion1_titulo`, `seccion1_parrafo`, `seccion1_logo1`, `seccion1_logo2`, `seccion1_imagen_fondo`, `seccion2_titulo`, `seccion2_parrafo1`, `seccion2_parrafo2`, `seccion3_titulo`, `seccion3_parrafo`, `seccion3_imagen_fondo`) VALUES
(1, 'img/uTvETbhamJaAaWznYiT9qCBNBacyJK2WVSznfDTN.png', 'img/bN54ICmI2p2pBQKea7AeHfx4HAZshv57l54xrrEB.svg', 'img/FiuxxmLV253Yvmz56ukxXZu0BnQpUZroi5xbB5lF.svg', '{\"es\":\"sdfsfsfsdfsdf\",\"zh\":\"null\"}', NULL, '{\"es\":\"Faena \\/ Despostada\",\"zh\":null}', '{\"es\":\"<p>Nuestra linea de despostada es moderna y eficaz. Utilizamos sistemas de trazabilidad individual de corte desde su nacimiento hasta su consumo. Nuestro personal de produccion est\\u00e1 altamente capacitado para garantizar la inocuidad y sanidad de nuestros productos.<\\/p>\",\"zh\":\"null\"}', 'img/FXxjMckq1g6Vw5ZQqSJe62u6aZvaT6aaZtRs7ERM.svg', 'img/kYsGFX7cg5imxnBh1MYcLELHBMimZQphluvrD9E1.svg', 'img/A8dp6p2RAtgWS97wZ3pSBNlrIpH4nAL1Bgg4zlrN.png', '{\"es\":\"Nuestro compromiso\",\"zh\":null}', '{\"es\":\"<p>Frigorifico hv produce cortes de carne, menudencias y subproductos de origen bovino para mercados internacionales y locales. Nuestras planta est\\u00e1n ubicada en el centro de la provincia de buenos aires y en el coraz\\u00f3n de la regi\\u00f3n ganadera argentina.Tenemos una moderna planta de procesamiento que cuenta con tecnolog\\u00eda de punta y sistemas innovadores que permiten automatizar los procesos de producci\\u00f3n y log\\u00edstica. Utilizamos equipos, m\\u00e9todos y tecnolog\\u00eda de ultima generacion para poder cumplir con las especificaciones y necesidades de cada cliente. Tomamos todas las medidas necesarias para garantizar la seguridad alimentaria.<\\/p>\",\"zh\":\"null\"}', '{\"es\":\"<p>Utilizamos equipos, m\\u00e9todos y tecnolog\\u00eda de ultima generacion para poder cumplir con las especificaciones y necesidades de cada cliente. Tomamos todas las medidas necesarias para garantizar la seguridad alimentaria<\\/p>\",\"zh\":\"null\"}', '{\"es\":\"\\\"\\u00daltima generaci\\u00f3n en la producci\\u00f3n de carnes\\\"\",\"zh\":null}', '{\"es\":\"<p>Equipos de \\u00faltima generaci\\u00f3n para los procesos de congelado, enfriado y envasado al vac\\u00edo<\\/p>\",\"zh\":\"null\"}', 'img/1tbKJHnHmoHbkyBOT2Z9x25QZU4zVlwpzJrpmRey.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quienessomos`
--

CREATE TABLE `quienessomos` (
  `id` int NOT NULL,
  `encabezado_imagen_fondo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_1_encabezado` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `logo_2_encabezado` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `texto_encabezado` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `texto_encabezado_habilitado` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccio1_parrafo1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccio1_parrafo2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccio1_parrafo3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccio1_parrafo4` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_imagen_fondo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion2_titulo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion2_parrafo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion2_imagen_fondo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion3_parrafo1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion3_parrafo2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion4_parrafo1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion4_parrafo2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion4_parrafo3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion4_parrafo4` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion4_imagen_fondo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `quienessomos`
--

INSERT INTO `quienessomos` (`id`, `encabezado_imagen_fondo`, `logo_1_encabezado`, `logo_2_encabezado`, `texto_encabezado`, `texto_encabezado_habilitado`, `seccio1_parrafo1`, `seccio1_parrafo2`, `seccio1_parrafo3`, `seccio1_parrafo4`, `seccion1_imagen_fondo`, `seccion2_titulo`, `seccion2_parrafo`, `seccion2_imagen_fondo`, `seccion3_parrafo1`, `seccion3_parrafo2`, `seccion4_parrafo1`, `seccion4_parrafo2`, `seccion4_parrafo3`, `seccion4_parrafo4`, `seccion4_imagen_fondo`) VALUES
(1, 'img/WpZ0Rl0cyC94ykIMCyAKDOhUtCksksrIFFOUkOMm.png', 'img/37jBRKjdsgltu7FjtZPAOjHLUFlZGYQMeo7yodhn.svg', 'img/rQ0XP2vQMPnWNZCrb6lp3XoFBo7dvBpE3enxsjuG.svg', '{\"es\":\"sfdsfsdfsdf\",\"zh\":\"null\"}', NULL, '{\"es\":\"<p>Frigor\\u00edfico vh cuenta con una Planta 35.000 M2<\\/p>\",\"zh\":\"null\"}', '{\"es\":\"<p>Frigor\\u00edfico vh cuenta con Corrales 1200 M2<\\/p>\",\"zh\":\"null\"}', '{\"es\":\"<p>Capacidad de faena por d\\u00eda 700 animales<\\/p>\",\"zh\":\"null\"}', '{\"es\":\"<p>Capacidad de almacenaje enfriado y congelado 300 tons<\\/p>\",\"zh\":\"null\"}', 'img/qiBxfxYYSZww9KQZSDfoE1YORoCxdKDhUpI0b6Rn.png', '{\"es\":\"\\\"\\u00daltima generaci\\u00f3n en la producci\\u00f3n de carnes\\\"\",\"zh\":\"null\"}', '{\"es\":\"<p>Equipos de \\u00faltima generaci\\u00f3n para los procesos de congelado, enfriado y envasado al vac\\u00edo<\\/p>\",\"zh\":\"null\"}', 'img/ZcfgFpqCkyuzbHrbLx7dZCATRtKMjDrYFUqChm8j.png', '{\"es\":\"<p>El procesamiento de la carne es otro factor determinante de la calidad final. En este sentido, FRIGORIFICO HV S A es una empresa familiar, con la experiencia de 3 generaciones en la industria de la carne.<\\/p>\",\"zh\":\"null\"}', '{\"es\":\"<p>El procesamiento de la carne es otro factor determinante de la calidad final. En este sentido, FRIGORIFICO HV S A es una empresa familiar, con la experiencia de 3 generaciones en la industria de la carne.<\\/p>\",\"zh\":\"null\"}', '{\"es\":\"<p>Visi\\u00f3n<\\/p><p>Liderar e innovar la industria de carne vacuna superando las expectativas de nuestros clientes fortaleciendo y respetando nuestro equipo de trabajo<\\/p>\",\"zh\":\"null\"}', '{\"es\":\"<p>Misi\\u00f3n<\\/p><p>Desarrollar y ofrecer productos de carne vacuna nutritivos, saludables y de alta calidad con un compromiso sostenible en todos nuestros procesos productivos.<\\/p>\",\"zh\":\"null\"}', '{\"es\":\"<p>Nuestro Compromiso<\\/p><p>Honestidad, integridad, respeto, responsabilidad y dedicaci\\u00f3n a la excelencia. Desarrollar y ofrecer productos de carne vacuna nutritivos<\\/p>\",\"zh\":\"null\"}', '{\"es\":\"<p>Recursos Humanos<\\/p><p>Desarrollar y ofrecer productos de carne vacuna nutritivos, saludables y de alta calidad con un compromiso sostenible en todos nuestros procesos productivos.<\\/p>\",\"zh\":\"null\"}', 'img/Od68TrXuGwjLAStRNe2apctiQdN3j3teP0aRPJEA.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursos_humanos`
--

CREATE TABLE `recursos_humanos` (
  `id` int NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pais` int NOT NULL,
  `nacionalidad` varchar(255) NOT NULL,
  `dni` varchar(255) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `foto` text NOT NULL,
  `curriculum` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `recursos_humanos`
--

INSERT INTO `recursos_humanos` (`id`, `nombre`, `apellido`, `telefono`, `email`, `pais`, `nacionalidad`, `dni`, `fecha_nacimiento`, `foto`, `curriculum`) VALUES
(2, 'Juan', 'mendoza', '111', 'mendoza@gmail.com', 12, '', '1878', '1988-12-19', 'img/zCQIRiPWIrx6KEulr26lOG1KiQYt5T4gmraZU7fW.png', 'img/rP8blXiykKMf2rmFuyzKiTGAM5sZB5RYl9nxEl9V.png'),
(3, 'Juan', 'Mendoza', '123', 'me@gmail.com', 12, '', '12345656', '1988-12-19', 'img/XnzYOBb7Bs4zb2sQeMqQFAnt8FDt6DUCJcOeRz6f.png', 'img/LW4oEtP3YuFOpKjloN8Dt67A2Kv5gPBkN2saKB07.png'),
(4, 'Juan', 'Mendoza', '123', 'me@gmail.com', 12, '', '12345656', '1988-12-19', 'img/Pt2DunXIvrRoCazKN1idLeU79SY4Peio7RalsYYM.png', 'img/EyaYAZEUZpUaeJk9Ca36dA6aKbyyPEJ9hAhllHMi.png'),
(5, 'Juan', 'Mendoza', '04169628553', 'mendozajuan007@gmail.com', 196, '', '18758704', '1988-12-19', 'img/Dqwe2FKb40QmCpzVcquUoAV6mNfU8qcgEf83konV.png', 'img/oMX0GJ5pq1y6x6Pagb43ar7knCDEfVq44NkfwhNs.png'),
(6, 'Nombre', 'Apellido', '04169628553', 'men@gmail', 196, 'VENEZOLANA', '18758704', '1988-12-19', 'img/QGXRO7OG4LghYSYgGVxysdKjDyJvHTt05pJZ5tiI.png', 'img/Nb4firMu6nueF4s9k9FMK0hUOlVYMJZ7WWPs0327.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes_sociales`
--

CREATE TABLE `redes_sociales` (
  `id` int NOT NULL,
  `linkedin` text NOT NULL,
  `instagram` text NOT NULL,
  `facebook` text NOT NULL,
  `youtube` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `redes_sociales`
--

INSERT INTO `redes_sociales` (`id`, `linkedin`, `instagram`, `facebook`, `youtube`) VALUES
(1, 'http://linkedin.com', 'http://instagram.com', 'http://facebook.com', 'http://youtube.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE `secciones` (
  `id` int NOT NULL,
  `seccion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE `sedes` (
  `id` int NOT NULL,
  `sede` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `direccion` text NOT NULL,
  `coordenadas_maps` varchar(100) NOT NULL,
  `telefono1` varchar(16) NOT NULL,
  `telefono2` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Juan Mendoza', 'mendozasjuan', 'mendozajuan007@gmail.com', NULL, '$2y$10$HhVEv1Lh0C.JzBHu2DAtAOQd9oRNSsHHBQEDsNT7FgvMqyI6AF8re', NULL, '2020-08-13 02:07:10', '2020-08-13 02:07:10'),
(4, 'Administrador', 'admin', 'admin@admin.com', NULL, '$2y$10$eHFoNbd6nofU22WWVYIA3ekSDzwvzB93X6gelNAiS6AHL.qOCt8ty', NULL, '2020-08-17 19:35:26', '2020-08-17 19:35:26');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calidad`
--
ALTER TABLE `calidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria_corte`
--
ALTER TABLE `categoria_corte`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto_footer`
--
ALTER TABLE `contacto_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `corte`
--
ALTER TABLE `corte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_corte_id` (`categoria_corte_id`);

--
-- Indices de la tabla `etiquetado_corte`
--
ALTER TABLE `etiquetado_corte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `corte_id` (`corte_id`);

--
-- Indices de la tabla `exportacion`
--
ALTER TABLE `exportacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagen_corte`
--
ALTER TABLE `imagen_corte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `corte_id` (`corte_id`);

--
-- Indices de la tabla `impactosocial`
--
ALTER TABLE `impactosocial`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inicio`
--
ALTER TABLE `inicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `logotipo`
--
ALTER TABLE `logotipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nacionalidad`
--
ALTER TABLE `nacionalidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `packaging_corte`
--
ALTER TABLE `packaging_corte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `corte_id` (`corte_id`);

--
-- Indices de la tabla `pagina_contacto`
--
ALTER TABLE `pagina_contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagina_productos`
--
ALTER TABLE `pagina_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagina_recursos_humanos`
--
ALTER TABLE `pagina_recursos_humanos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `produccion`
--
ALTER TABLE `produccion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `quienessomos`
--
ALTER TABLE `quienessomos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recursos_humanos`
--
ALTER TABLE `recursos_humanos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pais` (`pais`);

--
-- Indices de la tabla `redes_sociales`
--
ALTER TABLE `redes_sociales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `secciones`
--
ALTER TABLE `secciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calidad`
--
ALTER TABLE `calidad`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categoria_corte`
--
ALTER TABLE `categoria_corte`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `contacto_footer`
--
ALTER TABLE `contacto_footer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `corte`
--
ALTER TABLE `corte`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `etiquetado_corte`
--
ALTER TABLE `etiquetado_corte`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `exportacion`
--
ALTER TABLE `exportacion`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagen_corte`
--
ALTER TABLE `imagen_corte`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `impactosocial`
--
ALTER TABLE `impactosocial`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `inicio`
--
ALTER TABLE `inicio`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `logotipo`
--
ALTER TABLE `logotipo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `nacionalidad`
--
ALTER TABLE `nacionalidad`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT de la tabla `packaging_corte`
--
ALTER TABLE `packaging_corte`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `pagina_contacto`
--
ALTER TABLE `pagina_contacto`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pagina_productos`
--
ALTER TABLE `pagina_productos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pagina_recursos_humanos`
--
ALTER TABLE `pagina_recursos_humanos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `produccion`
--
ALTER TABLE `produccion`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `quienessomos`
--
ALTER TABLE `quienessomos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `recursos_humanos`
--
ALTER TABLE `recursos_humanos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `redes_sociales`
--
ALTER TABLE `redes_sociales`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `secciones`
--
ALTER TABLE `secciones`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sedes`
--
ALTER TABLE `sedes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `corte`
--
ALTER TABLE `corte`
  ADD CONSTRAINT `corte_ibfk_1` FOREIGN KEY (`categoria_corte_id`) REFERENCES `categoria_corte` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `etiquetado_corte`
--
ALTER TABLE `etiquetado_corte`
  ADD CONSTRAINT `etiquetado_corte_ibfk_1` FOREIGN KEY (`corte_id`) REFERENCES `corte` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `imagen_corte`
--
ALTER TABLE `imagen_corte`
  ADD CONSTRAINT `imagen_corte_ibfk_1` FOREIGN KEY (`corte_id`) REFERENCES `corte` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recursos_humanos`
--
ALTER TABLE `recursos_humanos`
  ADD CONSTRAINT `recursos_humanos_ibfk_1` FOREIGN KEY (`pais`) REFERENCES `nacionalidad` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
