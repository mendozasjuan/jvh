-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-08-2020 a las 22:07:27
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.14

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
  `id` int(11) NOT NULL,
  `encabezado_imagen_fondo` text COLLATE utf8mb4_unicode_ci,
  `logo_1_encabezado` text COLLATE utf8mb4_unicode_ci,
  `logo_2_encabezado` text COLLATE utf8mb4_unicode_ci,
  `texto_encabezado` text COLLATE utf8mb4_unicode_ci,
  `texto_encabezado_habilitado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion1_titulo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_parrafo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_logo1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_logo2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_logo3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_logo4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_logo5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_logo6` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_logo7` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion2_imagen_fondo` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `calidad`
--

INSERT INTO `calidad` (`id`, `encabezado_imagen_fondo`, `logo_1_encabezado`, `logo_2_encabezado`, `texto_encabezado`, `texto_encabezado_habilitado`, `seccion1_titulo`, `seccion1_parrafo`, `seccion1_logo1`, `seccion1_logo2`, `seccion1_logo3`, `seccion1_logo4`, `seccion1_logo5`, `seccion1_logo6`, `seccion1_logo7`, `seccion2_imagen_fondo`) VALUES
(1, 'img/uVLvYe5f0UXegfRQa8xWh5AtmCWJXKyJgdXpVPLM.png', 'img/fvrpb02W1QSaPaJ9gNnOmq3lqOYvThPOmqLiAGVq.svg', 'img/I515wQ6i2GwdNyuIti5h5mpjLGXIfhnH07aJkV8B.svg', '{\"es\":\"Texto\",\"zh\":null}', NULL, '{\"es\":\"Carne de Calidad\",\"zh\":null}', '{\"es\":\"<p>Contamos con:<\\/p><ul><li>procedimientos operativos estandarizados de sanitizacion (ssop)<\\/li><li>sistema de analisis de peligros y control de puntos cr\\u00edticos (haccp)<\\/li><li>buenas pr\\u00e1cticas de manufactura (gmp)<\\/li><li>procedimientos operativos estandarizadis (sop)<\\/li><li>cumplimos con las normas de bienestar animal para garantizar el m\\u00e1s alto nivel de seguridad alimentaria en la industria<\\/li><\\/ul>\",\"zh\":\"null\"}', 'img/YdzkEHgAxMtsnSsj2SDjOECTw2oLQzw8MPmsmFNH.png', 'img/sKt8lmCe1zfFn1jfVvmdoC78TooNkkgJMpaP0Ta2.png', 'img/BY5sZk9YBWsbxVkmsdMHNudCXf27NOlybUkdxAyi.png', 'img/Ad7sKWdiRvJFXkKn70h4PPZJwhrCw3qLukZhg0ZN.png', 'img/AgRuIq8Z3aErrhbQd6EBY73esYfKIUt1Wm83sQFn.png', 'img/8YgELgv46K5NReHr78nl0H9g5O3xCT3XThjnbsu6.png', 'img/MtP2dMArfbENgiMQBAJKIafJzfOo6CBOeotRtbhq.png', 'img/AYu5JYY9svS4hNM8QdcdY4Gw8R6itzPYZa4VINAi.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_corte`
--

CREATE TABLE `categoria_corte` (
  `id` int(11) NOT NULL,
  `categoria` longtext COLLATE utf8_unicode_ci NOT NULL
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
  `id` int(11) NOT NULL,
  `contacto` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corte`
--

CREATE TABLE `corte` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `tamano_caja` varchar(255) NOT NULL,
  `medidas` varchar(255) NOT NULL,
  `envasado` varchar(255) NOT NULL,
  `piezas_por_caja` varchar(255) NOT NULL,
  `condiciones_termicas` varchar(255) NOT NULL,
  `especificaciones` varchar(255) NOT NULL,
  `categoria_corte_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `id` int(11) NOT NULL,
  `etiquetado` varchar(255) NOT NULL,
  `corte_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `etiquetado_corte`
--

INSERT INTO `etiquetado_corte` (`id`, `etiquetado`, `corte_id`) VALUES
(1, 'etiquetado/7ELjoTBpbYfu9Hl2lg8fTDkoMdbb2alSfoB3VgEp.png', 1),
(2, 'etiquetado/6tSCGn0JyiS75BegEHq9Mt7LfIwtfaOX8Nl3PQMn.png', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exportacion`
--

CREATE TABLE `exportacion` (
  `id` int(11) NOT NULL,
  `encabezado_imagen_fondo` text COLLATE utf8mb4_unicode_ci,
  `logo_1_encabezado` text COLLATE utf8mb4_unicode_ci,
  `logo_2_encabezado` text COLLATE utf8mb4_unicode_ci,
  `texto_encabezado` text COLLATE utf8mb4_unicode_ci,
  `texto_encabezado_habilitado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion1_titulo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_parrafo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_imagen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion2_parrafo1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion2_parrafo2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion2_imagen_fondo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion3_titulo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion3_imagen_fondo` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `exportacion`
--

INSERT INTO `exportacion` (`id`, `encabezado_imagen_fondo`, `logo_1_encabezado`, `logo_2_encabezado`, `texto_encabezado`, `texto_encabezado_habilitado`, `seccion1_titulo`, `seccion1_parrafo`, `seccion1_imagen`, `seccion2_parrafo1`, `seccion2_parrafo2`, `seccion2_imagen_fondo`, `seccion3_titulo`, `seccion3_imagen_fondo`) VALUES
(1, 'img/1cSqMrTffG5woTlh024GmPmZaBPESJkui5UnVlTV.png', 'img/k9XvEgSq3StaiiIYqwbWnkbpCFXKzkKGBKwwkvBH.svg', 'img/Y9OwR8LXRzGQGpd98Hb9BJo8gW20ON35lvvdHRme.svg', '{\"es\":\"Texto\",\"zh\":null}', NULL, '{\"es\":\"Mercados en el Mundo\",\"zh\":null}', '{\"es\":\"<p>Cuenta con todos los permisos y certificaciones necesarios para exportar a la uni\\u00f3n europea, israel, suiza, rusia, hong kong, brasil y sud\\u00e1frica entre otros.<\\/p>\",\"zh\":\"null\"}', 'img/YlrNwletFm8nx6HWJwcroRDoWgzSaD3EQp6yuZh0.svg', '{\"es\":\"<p>Paises a los que Exportamos<\\/p><ul><li>Angola<\\/li><li>Antillas Hol.<\\/li><li>Argelia<\\/li><li>Aruba<\\/li><li>Bosnia y Herzegovina<\\/li><li>Brasil<\\/li><li>Bulgaria<\\/li><li>Chile<\\/li><li>Curacao<\\/li><li>Estados Unidos<\\/li><li>Guinea ecuatorial<\\/li><li>Peru<\\/li><li>Reino Unido<\\/li><li>Rusia<\\/li><li>Suiza<\\/li><li>Ucrania<\\/li><li>Venezuela<\\/li><li>Uni\\u00f3n Europea<\\/li><\\/ul>\",\"zh\":\"null\"}', '{\"es\":\"<p>Paises Habilitados para Exportar<\\/p><ul><li>Angola<\\/li><li>Antillas Hol.<\\/li><li>Argelia<\\/li><li>Aruba<\\/li><li>Bosnia y Herzegovina<\\/li><li>Brasil<\\/li><li>Bulgaria<\\/li><li>Chile<\\/li><li>Curacao<\\/li><li>Egipto<\\/li><li>Estados Unidos<\\/li><li>Guinea ecuatorial<\\/li><li>Peru<\\/li><li>Rusia<\\/li><li>Suiza<\\/li><li>Ucrania<\\/li><li>Uni\\u00f3n Europea<\\/li><\\/ul>\",\"zh\":\"null\"}', 'img/qxDZNxzbcq4bkyU6VKbTZmXkvBKGyjC600wi4TcZ.png', '{\"es\":\"\\\"Nos sentimos muy agradecidos de tener la oportunidad de contribuir al desarrollo social y econ\\u00f3mico en las comunidades donde trabajamos\\\"\",\"zh\":null}', 'img/iR721l5ikyW8VaU0ShfouSkASerGpPkNRcXtrrCH.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen_corte`
--

CREATE TABLE `imagen_corte` (
  `id` int(11) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `corte_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `imagen_corte`
--

INSERT INTO `imagen_corte` (`id`, `imagen`, `corte_id`) VALUES
(1, 'producto/tyQQhgUBzQ0PGrXVkPbM6FCleTjWa1gP6s7K6Fkw.png', 1),
(2, 'producto/g6Gt9rNft1F5Yb9yhpPsmMHspCjJOYFSe6hV69UT.png', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impactosocial`
--

CREATE TABLE `impactosocial` (
  `id` int(11) NOT NULL,
  `encabezado_imagen_fondo` text COLLATE utf8mb4_unicode_ci,
  `logo_1_encabezado` text COLLATE utf8mb4_unicode_ci,
  `logo_2_encabezado` text COLLATE utf8mb4_unicode_ci,
  `texto_encabezado` text COLLATE utf8mb4_unicode_ci,
  `texto_encabezado_habilitado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion1_titulo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_parrafo1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_parrafo2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion2_titulo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion2_imagen_fondo` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `impactosocial`
--

INSERT INTO `impactosocial` (`id`, `encabezado_imagen_fondo`, `logo_1_encabezado`, `logo_2_encabezado`, `texto_encabezado`, `texto_encabezado_habilitado`, `seccion1_titulo`, `seccion1_parrafo1`, `seccion1_parrafo2`, `seccion2_titulo`, `seccion2_imagen_fondo`) VALUES
(1, 'img/auMF9KfG1OiHMj7AHveMHWx2jH6xE0UWEb8V3uFr.png', 'img/h1HV1XNvfPb5F0LqSOaR0uMFIKWMxPnuLAmPX2je.svg', 'img/xB7fknVwRPp8dJEEcPzfOdSdc3uOXSmvutoAxMDq.svg', '{\"es\":\"Texto\",\"zh\":null}', 'on', '{\"es\":\"Nuestro compromiso\",\"zh\":null}', '{\"es\":\"<p>Somos conscientes que el factor humano es la fuerza que mueve frigorifico hv sa, y nos empe\\u00f1amos en cuidarlo. Aparte de preocuparnos por la capacitacion y el bienestar de nuestros empleados, nos sentimos orgullosos de contribuir al desarrollo social de la comunidad donde trabajamos. Con nuestra empresa creamos empleo y desarrollo, generando ingresos que ayudan a mejorar la calidad de vida de la comunidad de nuestra ciudad.<\\/p>\",\"zh\":\"undefined\"}', '{\"es\":\"<p>Nuestra gente es el mayor capital y el bien m\\u00e1s preciado. Nos sentimos muy orgullosos de contar con un equipo homog\\u00e9neo, talentoso e innovador. Contamos con hombres y mujeres que trabajan arduamente e integran un proyecto en com\\u00fan.<\\/p>\",\"zh\":\"null\"}', '{\"es\":\"\\\"Nos sentimos muy agradecidos de tener la oportunidad de contribuir al desarrollo social y econ\\u00f3mico en las comunidades donde trabajamos\\\"\",\"zh\":null}', 'img/LecMrRd36ffMWUSJzvf8jF5Vg1GWg5ReizJYKJiP.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio`
--

CREATE TABLE `inicio` (
  `id` int(11) NOT NULL,
  `encabezado_imagen_fondo` text COLLATE utf8mb4_unicode_ci,
  `logo_1_encabezado` text COLLATE utf8mb4_unicode_ci,
  `logo_2_encabezado` text COLLATE utf8mb4_unicode_ci,
  `texto_encabezado` longtext COLLATE utf8mb4_unicode_ci,
  `texto_encabezado_habilitado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion1_titulo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion_1_parrafo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_logo1` text COLLATE utf8mb4_unicode_ci,
  `seccion1_logo2` text COLLATE utf8mb4_unicode_ci,
  `seccion1_logo3` text COLLATE utf8mb4_unicode_ci,
  `seccion2_imagen_fondo` text COLLATE utf8mb4_unicode_ci,
  `seccio2_titulo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion_2_parrafo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion3_titulo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion3_parrafo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion3_imagen` text COLLATE utf8mb4_unicode_ci,
  `seccion4_titulo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion4_imagen_fondo` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `inicio`
--

INSERT INTO `inicio` (`id`, `encabezado_imagen_fondo`, `logo_1_encabezado`, `logo_2_encabezado`, `texto_encabezado`, `texto_encabezado_habilitado`, `seccion1_titulo`, `seccion_1_parrafo`, `seccion1_logo1`, `seccion1_logo2`, `seccion1_logo3`, `seccion2_imagen_fondo`, `seccio2_titulo`, `seccion_2_parrafo`, `seccion3_titulo`, `seccion3_parrafo`, `seccion3_imagen`, `seccion4_titulo`, `seccion4_imagen_fondo`) VALUES
(1, 'img/lsJOqzjZjW73PrFlYHyOGnylmSp5HlK2th5S1G6m.png', 'img/xctx8XbnloTJ7demkxmAJrPiqOwKuHCeL3Sq9nHt.svg', 'img/n7zSfw4ABVNBLSwCBrN7Rf9LZ0ltpDS3Qc3sRFJm.svg', '{\"es\":\"\\\"Carne Argentina de alta calidad para los mercados m\\u00e1s exigentes del mundo\\\"\",\"zh\":null}', 'on', '{\"es\":\"Nuestra Carne\",\"zh\":null}', '{\"es\":\"<p>La calidad de la carne, en t\\u00e9rminos alimenticios, depende de la conjunci\\u00f3n de diversos factores. Entre estos se destacan el tipo de crianza del ganado y la eficacia de su comercializaci\\u00f3n. La pampa h\\u00fameda argentina es uno de los lugares en el mundo en el que la cr\\u00eda de los animales no se realizan en establos, sino en extensas llanuras, alejadas de la poluci\\u00f3n industrial, donde la abundancia de pasturas esta asegurada. El ganado argentino respeta, adem\\u00e1s, las pautas de crecimiento natural, ya que no se los inyecta con hormonas y antibi\\u00f3ticos. Por estas razones, su estado resulta optimo para el consumo.<\\/p>\",\"zh\":null}', 'img/9cu3lK4llqI3bhZIDVlk21gJ2eDGswlNrrHtVqlr.png', 'img/PRKWK8VGOLHdOd3UlK0QQxdJek32Na78HYxg3mja.png', 'img/mNHz728UJ8pgZbHYAVDTsbJe78ee1TF614u0eKct.png', NULL, '{\"es\":\"\\u00daltima generaci\\u00f3n en la producci\\u00f3n de carnes\",\"zh\":null}', '{\"es\":\"<p>Equipos de \\u00faltima generaci\\u00f3n para los procesos de congelado, enfriado y envasado al vac\\u00edo<\\/p>\",\"zh\":null}', '{\"es\":\"Mercados en el Mundo\",\"zh\":null}', '{\"es\":\"<p>Cuenta con todos los permisos y certificaciones necesarios para exportar a la uni\\u00f3n europea, israel, suiza, rusia, hong kong, brasil y sud\\u00e1frica entre otros.<\\/p>\",\"zh\":null}', 'img/jkvdCfFLdNWbfgtw8BonaDO6fcsoRnqN0Ge8k26w.svg', '{\"es\":\"Nuestra carne es altamente demandada debido a su marmoleo natural, jugosidad, terneza y sabor\",\"zh\":null}', 'img/ynvw6xZgtIcr8wY32OUDpNAllDzYnpefjfleR5dx.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
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
-- Estructura de tabla para la tabla `packaging_corte`
--

CREATE TABLE `packaging_corte` (
  `id` int(11) NOT NULL,
  `packaging` varchar(255) NOT NULL,
  `corte_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `packaging_corte`
--

INSERT INTO `packaging_corte` (`id`, `packaging`, `corte_id`) VALUES
(1, 'packaging/6J0xh9u43eEbpfj8IfudGkrR09SCS4rDM1ZL2YlE.png', 7),
(2, 'packaging/DAni93CIfVSzZmx8IgTRa9gBF07bTCOm2yxFN5Uc.png', 8),
(3, 'packaging/kWHg5wqRI4u3ZukTJwEO6GN8mBhLXYBiIbHZj9CM.png', 9),
(4, 'packaging/o7VTtveQ2X8cxaSiAMDeCoqkSgxP9O8mcWafHk1i.png', 10),
(5, 'packaging/qeZjsH2kvoUlMzcQqzk40uVEKysBMmm0PHntuRAw.png', 1),
(6, 'packaging/nAM2AyrWwFcEfdx3TbhSHDsAmITagG5FnDzviZc4.png', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina_contacto`
--

CREATE TABLE `pagina_contacto` (
  `id` int(11) NOT NULL,
  `encabezado_imagen_fondo` text COLLATE utf8_unicode_ci NOT NULL,
  `ciudad1` text COLLATE utf8_unicode_ci NOT NULL,
  `direccion1` text COLLATE utf8_unicode_ci NOT NULL,
  `telefonos1` text COLLATE utf8_unicode_ci NOT NULL,
  `ciudad2` text COLLATE utf8_unicode_ci NOT NULL,
  `direccion2` text COLLATE utf8_unicode_ci NOT NULL,
  `telefonos2` text COLLATE utf8_unicode_ci NOT NULL,
  `contacto_titulo` text COLLATE utf8_unicode_ci NOT NULL,
  `contacto_descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `comercio_exterior` text COLLATE utf8_unicode_ci NOT NULL,
  `area_comercial` text COLLATE utf8_unicode_ci NOT NULL,
  `coordenadas1` text COLLATE utf8_unicode_ci NOT NULL,
  `coordenadas2` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pagina_contacto`
--

INSERT INTO `pagina_contacto` (`id`, `encabezado_imagen_fondo`, `ciudad1`, `direccion1`, `telefonos1`, `ciudad2`, `direccion2`, `telefonos2`, `contacto_titulo`, `contacto_descripcion`, `comercio_exterior`, `area_comercial`, `coordenadas1`, `coordenadas2`) VALUES
(1, 'img/JcItvpxEhxeUMm2m5AiEzDhHwRmqyF3dJE7D65xk.png', '{\"es\":\"Lomas del Mirador\",\"zh\":null}', '{\"es\":\"<p>Paso 3030 (1752) Lomas del Mirador Buenos Aires<\\/p>\",\"zh\":\"null\"}', '+54 (11)) 4699-4424 +54 (11)) 4699-2882', '{\"es\":\"Bernasconi\",\"zh\":null}', '{\"es\":\"<p>Ruta 35, Km 165 (8204) Bernasconi - La Pampa<\\/p>\",\"zh\":\"null\"}', '+54 (11)) 4699-4424 / +54 (11)) 4699-2882', '{\"es\":\"Contacto\",\"zh\":null}', '{\"es\":\"<p>Para mayor informaci\\u00f3n, no dude en contactarse mediante el siguiente formulario, o a trav\\u00e9s de nuestras v\\u00edas de comunicaci\\u00f3n<\\/p>\",\"zh\":\"null\"}', 'Jescudero@frigorificohv.com.ar', 'dvigna@frigorificohv.com.ar', '010101', '010101');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina_productos`
--

CREATE TABLE `pagina_productos` (
  `id` int(11) NOT NULL,
  `encabezado_imagen_fondo` text COLLATE utf8_unicode_ci NOT NULL,
  `seccion1_titulo` text COLLATE utf8_unicode_ci NOT NULL,
  `seccion1_imagen` text COLLATE utf8_unicode_ci NOT NULL,
  `seccion1_imagen_fondo` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pagina_productos`
--

INSERT INTO `pagina_productos` (`id`, `encabezado_imagen_fondo`, `seccion1_titulo`, `seccion1_imagen`, `seccion1_imagen_fondo`) VALUES
(1, 'img/05X4MmUNXvpkcXs8iDXDGrAXdQIB26d0RAunSpvb.png', '{\"es\":\"Cat\\u00e1logo de cortes\",\"zh\":null}', 'img/2O70ocRCR8ZSrfzQYutl5APWDGcRyvo3eyQBEtk7.png', 'img/i1cUAvDOvtENINyWJBG0DYhb26iEx1kg1RK5yewF.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina_recursos_humanos`
--

CREATE TABLE `pagina_recursos_humanos` (
  `id` int(11) NOT NULL,
  `encabezado_imagen_fondo` text COLLATE utf8_unicode_ci NOT NULL,
  `seccion1_titulo` text COLLATE utf8_unicode_ci NOT NULL,
  `seccion1_parrafo` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pagina_recursos_humanos`
--

INSERT INTO `pagina_recursos_humanos` (`id`, `encabezado_imagen_fondo`, `seccion1_titulo`, `seccion1_parrafo`) VALUES
(1, 'img/5wmVPoQG4BlJdZ9XazTI7MRrEbBOMXAkGB2NdFiI.png', '{\"es\":\"Recursos Humanos\",\"zh\":null}', '{\"es\":\"<p>Trabaj\\u00e1 con nosotros. Podes sumarte en la empresa llenando este formulario y nos estaremos contactando con vos ante la primer oferta laboral.<\\/p>\",\"zh\":\"null\"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion`
--

CREATE TABLE `produccion` (
  `id` int(11) NOT NULL,
  `encabezado_imagen_fondo` text COLLATE utf8mb4_unicode_ci,
  `logo_1_encabezado` text COLLATE utf8mb4_unicode_ci,
  `logo_2_encabezado` text COLLATE utf8mb4_unicode_ci,
  `texto_encabezado` text COLLATE utf8mb4_unicode_ci,
  `texto_encabezado_habilitado` text COLLATE utf8mb4_unicode_ci,
  `seccion1_titulo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_parrafo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_logo1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_logo2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_imagen_fondo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion2_titulo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion2_parrafo1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion2_parrafo2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion3_titulo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion3_parrafo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion3_imagen_fondo` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `produccion`
--

INSERT INTO `produccion` (`id`, `encabezado_imagen_fondo`, `logo_1_encabezado`, `logo_2_encabezado`, `texto_encabezado`, `texto_encabezado_habilitado`, `seccion1_titulo`, `seccion1_parrafo`, `seccion1_logo1`, `seccion1_logo2`, `seccion1_imagen_fondo`, `seccion2_titulo`, `seccion2_parrafo1`, `seccion2_parrafo2`, `seccion3_titulo`, `seccion3_parrafo`, `seccion3_imagen_fondo`) VALUES
(1, 'img/eGWc8ygwykRqlqizymcWKuil7KzzRWHuMyb0Dq8X.png', 'img/yZSRVBF6z6a39wMxVJUTazvK0LFaFWlKOmjHUc3f.svg', 'img/r7Hl0fssABakRP2HWZY6QxxWAfzACp4DUSss74nA.svg', '{\"es\":\"Texto\",\"zh\":\"null\"}', NULL, '{\"es\":\"Faena \\/ Despostada\",\"zh\":null}', '{\"es\":\"<p>Nuestra linea de despostada es moderna y eficaz. Utilizamos sistemas de trazabilidad individual de corte desde su nacimiento hasta su consumo. Nuestro personal de produccion est\\u00e1 altamente capacitado para garantizar la inocuidad y sanidad de nuestros productos.<\\/p>\",\"zh\":\"null\"}', 'img/7cY6eYHBPKDxvxVVc1YxS3iLfINZILIYTc2LUp2S.svg', 'img/Tny3qnSANkAXr7qR4lnCLe7HzfAoHq4lBrhBeUbv.svg', 'img/rMnBEVaMcGFVLIJ7crK2d4clgX0FfG6gMvaodYqL.png', '{\"es\":\"Nuestro compromiso\",\"zh\":null}', '{\"es\":\"<p>Frigorifico hv produce cortes de carne, menudencias y subproductos de origen bovino para mercados internacionales y locales. Nuestras planta est\\u00e1n ubicada en el centro de la provincia de buenos aires y en el coraz\\u00f3n de la regi\\u00f3n ganadera argentina.Tenemos una moderna planta de procesamiento que cuenta con tecnolog\\u00eda de punta y sistemas innovadores que permiten automatizar los procesos de producci\\u00f3n y log\\u00edstica. Utilizamos equipos, m\\u00e9todos y tecnolog\\u00eda de ultima generacion para poder cumplir con las especificaciones y necesidades de cada cliente. Tomamos todas las medidas necesarias para garantizar la seguridad alimentaria.<\\/p>\",\"zh\":\"null\"}', '{\"es\":\"<p>Utilizamos equipos, m\\u00e9todos y tecnolog\\u00eda de ultima generacion para poder cumplir con las especificaciones y necesidades de cada cliente. Tomamos todas las medidas necesarias para garantizar la seguridad alimentaria<\\/p>\",\"zh\":\"null\"}', '{\"es\":\"\\\"\\u00daltima generaci\\u00f3n en la producci\\u00f3n de carnes\\\"\",\"zh\":null}', '{\"es\":\"<p>Equipos de \\u00faltima generaci\\u00f3n para los procesos de congelado, enfriado y envasado al vac\\u00edo<\\/p>\",\"zh\":\"null\"}', 'img/aJbiYuWbRLOQgHvfFwFrYgBBWSE1KCgrpehTMaJn.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quienessomos`
--

CREATE TABLE `quienessomos` (
  `id` int(11) NOT NULL,
  `encabezado_imagen_fondo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_1_encabezado` text COLLATE utf8mb4_unicode_ci,
  `logo_2_encabezado` text COLLATE utf8mb4_unicode_ci,
  `texto_encabezado` text COLLATE utf8mb4_unicode_ci,
  `texto_encabezado_habilitado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccio1_parrafo1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccio1_parrafo2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccio1_parrafo3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccio1_parrafo4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion1_imagen_fondo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion2_titulo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion2_parrafo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion2_imagen_fondo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion3_parrafo1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion3_parrafo2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion4_parrafo1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion4_parrafo2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion4_parrafo3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion4_parrafo4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seccion4_imagen_fondo` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `quienessomos`
--

INSERT INTO `quienessomos` (`id`, `encabezado_imagen_fondo`, `logo_1_encabezado`, `logo_2_encabezado`, `texto_encabezado`, `texto_encabezado_habilitado`, `seccio1_parrafo1`, `seccio1_parrafo2`, `seccio1_parrafo3`, `seccio1_parrafo4`, `seccion1_imagen_fondo`, `seccion2_titulo`, `seccion2_parrafo`, `seccion2_imagen_fondo`, `seccion3_parrafo1`, `seccion3_parrafo2`, `seccion4_parrafo1`, `seccion4_parrafo2`, `seccion4_parrafo3`, `seccion4_parrafo4`, `seccion4_imagen_fondo`) VALUES
(1, 'img/JigZiDwfOIuy2ZbyDdck8i7o9Vm3VZYCCK6Kf5vO.png', 'img/b3L9zl8W5RZAQ27lbhoGpiVEXyYmVyx7AUBvY0uI.svg', 'img/wPGtUpysCyDJVnUV7s6sptXdXQOjbZ1DdcifzKEk.svg', '{\"es\":\"<p>sfdsfsdfsdf<\\/p>\",\"zh\":\"null\"}', 'on', '{\"es\":\"<p>Frigor\\u00edfico vh cuenta con una Planta 35.000 M2<\\/p>\",\"zh\":\"null\"}', '{\"es\":\"<p>Frigor\\u00edfico vh cuenta con Corrales 1200 M2<\\/p>\",\"zh\":\"null\"}', '{\"es\":\"<p>Capacidad de faena por d\\u00eda 700 animales<\\/p>\",\"zh\":\"null\"}', '{\"es\":\"<p>Capacidad de almacenaje enfriado y congelado 300 tons<\\/p>\",\"zh\":\"null\"}', 'img/0mpqxDWzi2EZtgtpKZRF9k7rO1WTqQsYQfDcfYIt.png', '{\"es\":\"\\\"\\u00daltima generaci\\u00f3n en la producci\\u00f3n de carnes\\\"\",\"zh\":\"null\"}', '{\"es\":\"<p>Equipos de \\u00faltima generaci\\u00f3n para los procesos de congelado, enfriado y envasado al vac\\u00edo<\\/p>\",\"zh\":\"null\"}', 'img/ZC37ox4riqb4vttWWtJWyFpD54Kamp2HQmDBOKtt.png', '{\"es\":\"<p>El procesamiento de la carne es otro factor determinante de la calidad final. En este sentido, FRIGORIFICO HV S A es una empresa familiar, con la experiencia de 3 generaciones en la industria de la carne.<\\/p>\",\"zh\":\"null\"}', '{\"es\":\"<p>El procesamiento de la carne es otro factor determinante de la calidad final. En este sentido, FRIGORIFICO HV S A es una empresa familiar, con la experiencia de 3 generaciones en la industria de la carne.<\\/p>\",\"zh\":\"null\"}', '{\"es\":\"<p>Visi\\u00f3n<\\/p><p>Liderar e innovar la industria de carne vacuna superando las expectativas de nuestros clientes fortaleciendo y respetando nuestro equipo de trabajo<\\/p>\",\"zh\":\"null\"}', '{\"es\":\"<p>Misi\\u00f3n<\\/p><p>Desarrollar y ofrecer productos de carne vacuna nutritivos, saludables y de alta calidad con un compromiso sostenible en todos nuestros procesos productivos.<\\/p>\",\"zh\":\"null\"}', '{\"es\":\"<p>Nuestro Compromiso<\\/p><p>Honestidad, integridad, respeto, responsabilidad y dedicaci\\u00f3n a la excelencia. Desarrollar y ofrecer productos de carne vacuna nutritivos<\\/p>\",\"zh\":\"null\"}', '{\"es\":\"<p>Recursos Humanos<\\/p><p>Desarrollar y ofrecer productos de carne vacuna nutritivos, saludables y de alta calidad con un compromiso sostenible en todos nuestros procesos productivos.<\\/p>\",\"zh\":\"null\"}', 'img/hPsvczPIvcyt69gkWhmzGwgvbiITrfTEXSdR1kPv.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes_sociales`
--

CREATE TABLE `redes_sociales` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE `secciones` (
  `id` int(11) NOT NULL,
  `seccion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE `sedes` (
  `id` int(11) NOT NULL,
  `sede` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `direccion` text NOT NULL,
  `coordenadas_maps` varchar(100) NOT NULL,
  `telefono1` varchar(16) NOT NULL,
  `telefono2` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Juan Mendoza', 'mendozasjuan', 'mendozajuan007@gmail.com', NULL, '$2y$10$HhVEv1Lh0C.JzBHu2DAtAOQd9oRNSsHHBQEDsNT7FgvMqyI6AF8re', NULL, '2020-08-13 02:07:10', '2020-08-13 02:07:10'),
(2, 'Jose Perez', 'joseperez', 'joseperez@gmail.com', NULL, '$2y$10$LGb8xIuwoGvOpvo6WAnAVemeurwEsvEEiCy0BLeseg9iQJlTxcprW', NULL, '2020-08-13 05:46:49', '2020-08-13 07:00:01'),
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
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categoria_corte`
--
ALTER TABLE `categoria_corte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `corte`
--
ALTER TABLE `corte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `etiquetado_corte`
--
ALTER TABLE `etiquetado_corte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `exportacion`
--
ALTER TABLE `exportacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagen_corte`
--
ALTER TABLE `imagen_corte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `impactosocial`
--
ALTER TABLE `impactosocial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `inicio`
--
ALTER TABLE `inicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `packaging_corte`
--
ALTER TABLE `packaging_corte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `pagina_contacto`
--
ALTER TABLE `pagina_contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pagina_productos`
--
ALTER TABLE `pagina_productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pagina_recursos_humanos`
--
ALTER TABLE `pagina_recursos_humanos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `produccion`
--
ALTER TABLE `produccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `quienessomos`
--
ALTER TABLE `quienessomos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `redes_sociales`
--
ALTER TABLE `redes_sociales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `secciones`
--
ALTER TABLE `secciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sedes`
--
ALTER TABLE `sedes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- Filtros para la tabla `packaging_corte`
--
ALTER TABLE `packaging_corte`
  ADD CONSTRAINT `packaging_corte_ibfk_1` FOREIGN KEY (`corte_id`) REFERENCES `corte` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
