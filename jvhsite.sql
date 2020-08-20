-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-08-2020 a las 21:44:17
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etiquetado_corte`
--

CREATE TABLE `etiquetado_corte` (
  `id` int(11) NOT NULL,
  `etiquetado` varchar(255) NOT NULL,
  `corte_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'img/lsJOqzjZjW73PrFlYHyOGnylmSp5HlK2th5S1G6m.png', 'img/xctx8XbnloTJ7demkxmAJrPiqOwKuHCeL3Sq9nHt.svg', 'img/n7zSfw4ABVNBLSwCBrN7Rf9LZ0ltpDS3Qc3sRFJm.svg', '{\"es\":\"\\\"Carne Argentina de alta calidad para los mercados m\\u00e1s exigentes del mundo\\\"1\",\"zh\":null}', 'on', '{\"es\":\"Nuestra Carne\",\"zh\":null}', '{\"es\":\"<p>La calidad de la carne, en t\\u00e9rminos alimenticios, depende de la conjunci\\u00f3n de diversos factores. Entre estos se destacan el tipo de crianza del ganado y la eficacia de su comercializaci\\u00f3n. La pampa h\\u00fameda argentina es uno de los lugares en el mundo en el que la cr\\u00eda de los animales no se realizan en establos, sino en extensas llanuras, alejadas de la poluci\\u00f3n industrial, donde la abundancia de pasturas esta asegurada. El ganado argentino respeta, adem\\u00e1s, las pautas de crecimiento natural, ya que no se los inyecta con hormonas y antibi\\u00f3ticos. Por estas razones, su estado resulta optimo para el consumo.<\\/p>\",\"zh\":null}', 'img/9cu3lK4llqI3bhZIDVlk21gJ2eDGswlNrrHtVqlr.png', 'img/PRKWK8VGOLHdOd3UlK0QQxdJek32Na78HYxg3mja.png', 'img/mNHz728UJ8pgZbHYAVDTsbJe78ee1TF614u0eKct.png', NULL, '{\"es\":\"\\u00daltima generaci\\u00f3n en la producci\\u00f3n de carnes\",\"zh\":null}', '{\"es\":\"<p>Equipos de \\u00faltima generaci\\u00f3n para los procesos de congelado, enfriado y envasado al vac\\u00edo<\\/p>\",\"zh\":null}', '{\"es\":\"Mercados en el Mundo\",\"zh\":null}', '{\"es\":\"<p>Cuenta con todos los permisos y certificaciones necesarios para exportar a la uni\\u00f3n europea, israel, suiza, rusia, hong kong, brasil y sud\\u00e1frica entre otros.<\\/p>\",\"zh\":null}', 'img/jkvdCfFLdNWbfgtw8BonaDO6fcsoRnqN0Ge8k26w.svg', '{\"es\":\"Nuestra carne es altamente demandada debido a su marmoleo natural, jugosidad, terneza y sabor\",\"zh\":null}', 'img/ynvw6xZgtIcr8wY32OUDpNAllDzYnpefjfleR5dx.png');

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
(4, 'packaging/o7VTtveQ2X8cxaSiAMDeCoqkSgxP9O8mcWafHk1i.png', 10);

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
(1, 'img/OZavDExIJyyVFiLInS8QAkUwL15LOoMWTfSlC7Rg.png', NULL, NULL, '<p>null</p>', 'null', 'Faena / Despostada', '<p>Nuestra linea de despostada es moderna y eficaz. Utilizamos sistemas de trazabilidad individual de corte desde su nacimiento hasta su consumo. Nuestro personal de produccion está altamente capacitado para garantizar la inocuidad y sanidad de nuestros productos.</p>', 'img/wzIUptrN0TYG7xOJQKMznU24yWDziRLzsEWewTG6.svg', 'img/pSdZxtkIKR0ptcCq4sZLbAZhihSUABQKRh4BqStI.svg', 'img/uez47dlehKE7PwG7JkfdajjwAwd766Qj2StOKlAP.png', 'Nuestro compromiso', '<p>Frigorifico hv produce cortes de carne, menudencias y subproductos de origen bovino para mercados internacionales y locales. Nuestras planta están ubicada en el centro de la provincia de buenos aires y en el corazón de la región ganadera argentina.Tenemos una moderna planta de procesamiento que cuenta con tecnología de punta y sistemas innovadores que permiten automatizar los procesos de producción y logística. Utilizamos equipos, métodos y tecnología de ultima generacion para poder cumplir con las especificaciones y necesidades de cada cliente. Tomamos todas las medidas necesarias para garantizar la seguridad alimentaria.</p>', '<p>Utilizamos equipos, métodos y tecnología de ultima generacion para poder cumplir con las especificaciones y necesidades de cada cliente. Tomamos todas las medidas necesarias para garantizar la seguridad alimentaria</p>', '\"Última generación en la producción de carnes\"', '<p>Equipos de última generación para los procesos de congelado, enfriado y envasado al vacío</p>', 'img/6nB9RyVMkFCjl4eJVYJi2qCOSCmMjx8ltvQCSSew.png');

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
(1, 'img/u5weGTBvVqh9853jzt6VZR266VbH9NZKFHdjEXmG.png', NULL, NULL, NULL, 'false', '<p>Frigorífico vh cuenta con una Planta 35.000 M2</p>', '<p>Frigorífico vh cuenta con Corrales 1200 M21</p>', '<p>Capacidad de faena por día 700 animales</p>', '<p>Capacidad de almacenaje enfriado y congelado 300 tons</p>', 'img/ak0xM9fWmiwCkVGZjt56hWDGVBlUoJHtxW9TyFPm.png', '\"Última generación en la producción de carnes\"', '<p>Equipos de última generación para los procesos de congelado, enfriado y envasado al vacío</p>', 'img/zWiO1iX1Us44wkDlkbW4Ae8a40hfznLdRPF24uX9.png', '<p>El procesamiento de la carne es otro factor determinante de la calidad final. En este sentido, FRIGORIFICO HV S A es una empresa familiar, con la experiencia de 3 generaciones en la industria de la carne.</p>', '<p>El procesamiento de la carne es otro factor determinante de la calidad final. En este sentido, FRIGORIFICO HV S A es una empresa familiar, con la experiencia de 3 generaciones en la industria de la carne.</p>', '<p>Visión</p><p>Liderar e innovar la industria de carne vacuna superando las expectativas de nuestros clientes fortaleciendo y respetando nuestro equipo de trabajo</p>', '<p>Misión</p><p>Desarrollar y ofrecer productos de carne vacuna nutritivos, saludables y de alta calidad con un compromiso sostenible en todos nuestros procesos productivos.</p>', '<p>Nuestro Compromiso</p><p>Honestidad, integridad, respeto, responsabilidad y dedicación a la excelencia. Desarrollar y ofrecer productos de carne vacuna nutritivos</p>', '<p>Recursos</p><p>Humanos Desarrollar y ofrecer productos de carne vacuna nutritivos, saludables y de alta calidad con un compromiso sostenible en todos nuestros procesos productivos.</p>', 'img/qSBUpkLlEUEYCJFLdiHLtGtqbcZBZV2pLrAqrdvv.png');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `etiquetado_corte`
--
ALTER TABLE `etiquetado_corte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `exportacion`
--
ALTER TABLE `exportacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagen_corte`
--
ALTER TABLE `imagen_corte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `impactosocial`
--
ALTER TABLE `impactosocial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
