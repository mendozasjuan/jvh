-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 14-08-2020 a las 23:47:05
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
-- Estructura de tabla para la tabla `categoria_corte`
--

CREATE TABLE `categoria_corte` (
  `id` int NOT NULL,
  `categoria` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria_corte`
--

INSERT INTO `categoria_corte` (`id`, `categoria`) VALUES
(1, 'Cuarto Trasero'),
(2, 'Cuarto Delantero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int NOT NULL,
  `contacto` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `corte`
--

INSERT INTO `corte` (`id`, `nombre`, `descripcion`, `tamano_caja`, `medidas`, `envasado`, `piezas_por_caja`, `condiciones_termicas`, `especificaciones`, `categoria_corte_id`) VALUES
(2, 'Corazon de Cuadril', 'Utilizamos Equipos de Ultima Tegnologia', 'Escopeta/grande', '60x24x15', 'Al Vacio', '2/3 piezas', 'enfriado/congelado', 'menos de 4kg / mas de 4kg', 1),
(3, 'wrwerwer', 'werwer', 'werwer', 'werwer', 'werwer', 'werwer', 'werwer', 'werwer', 2),
(4, 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsd', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 1),
(5, 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsd', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 1),
(6, 'dasfsdf', 'sadfsdf', 'sdfsdf', 'sdfsdf', 'sdfasd', 'sadfsdf', 'sdfsdf', 'sdfsdf', 1),
(7, 'dasfsdf', 'sadfsdf', 'sdfsdf', 'sdfsdf', 'sdfasd', 'sadfsdf', 'sdfsdf', 'sdfsdf', 1),
(8, 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 1),
(9, 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 2),
(10, 'dfgdfgdfg', 'dfgdfg', 'dfg', 'dfg', 'fdg', 'dfg', 'dfg', 'dfg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etiquetado_corte`
--

CREATE TABLE `etiquetado_corte` (
  `id` int NOT NULL,
  `etiquetado` varchar(255) NOT NULL,
  `corte_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `etiquetado_corte`
--

INSERT INTO `etiquetado_corte` (`id`, `etiquetado`, `corte_id`) VALUES
(1, 'etiquetado/T3D3dnqHtb1d2puPi88taRC2gsnRiPT6cnHCrDY1.png', 8),
(2, 'etiquetado/gYGEXFvvS2mJM2ApiOi7WDMmVftILBMJtnp5waFM.png', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
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
  `id` int NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `corte_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagen_corte`
--

INSERT INTO `imagen_corte` (`id`, `imagen`, `corte_id`) VALUES
(1, 'producto/YoS5JdRr7is9otAQXQRObZ9osgH8x09QPk42LFxZ.png', 5),
(2, 'producto/7EgioKKytLZxaoKU4zSM3vNpUEo6Jk5aG4nz2TFk.png', 8),
(3, 'producto/wrOGJ0VpWlUWJEA4QlrYfmtx1hmQhGDcXTrCQ0TT.png', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio`
--

CREATE TABLE `inicio` (
  `id` int NOT NULL,
  `encabezado_imagen_fondo` text NOT NULL,
  `logo_1_encabezado` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `logo_2_encabezado` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `texto_encabezado` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `texto_encabezado_habilitado` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `seccion1_titulo` varchar(255) NOT NULL,
  `seccion_1_parrafo` text NOT NULL,
  `seccion1_logo1` text NOT NULL,
  `seccion1_logo2` text NOT NULL,
  `seccion1_logo3` text NOT NULL,
  `seccion2_imagen_fondo` text NOT NULL,
  `seccio2_titulo` varchar(255) NOT NULL,
  `seccion_2_parrafo` text NOT NULL,
  `seccion3_titulo` varchar(255) NOT NULL,
  `seccion3_parrafo` text NOT NULL,
  `seccion3_imagen` text NOT NULL,
  `seccion4_titulo` varchar(255) NOT NULL,
  `seccion4_imagen_fondo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `inicio`
--

INSERT INTO `inicio` (`id`, `encabezado_imagen_fondo`, `logo_1_encabezado`, `logo_2_encabezado`, `texto_encabezado`, `texto_encabezado_habilitado`, `seccion1_titulo`, `seccion_1_parrafo`, `seccion1_logo1`, `seccion1_logo2`, `seccion1_logo3`, `seccion2_imagen_fondo`, `seccio2_titulo`, `seccion_2_parrafo`, `seccion3_titulo`, `seccion3_parrafo`, `seccion3_imagen`, `seccion4_titulo`, `seccion4_imagen_fondo`) VALUES
(1, 'img/bOlczL6hpmhUIWB3MSfxsAqU4s69ldkd45oGkU3q.png', 'img/0nyiHFvS4lmW3f1PZhC74oMmCUQ1M7gmRk1Or6Jz.svg', 'img/KM3240iOJ82TxfxQJ8HuksvLP6ZcfOgfyZX6LStJ.svg', '\"Carne Argentina de alta calidad para los mercados más exigentes del mundo\"', 'true', 'Nuestra Carne', 'La calidad de la carne, en términos alimenticios, depende de la conjunción de diversos factores. Entre estos se destacan el tipo de crianza del ganado y la eficacia de su comercialización. La pampa húmeda argentina es uno de los lugares en el mundo en el que la cría de los animales no se realizan en establos, sino en extensas llanuras, alejadas de la polución industrial, donde la abundancia de pasturas esta asegurada. El ganado argentino respeta, además, las pautas de crecimiento natural, ya que no se los inyecta con hormonas y antibióticos. Por estas razones, su estado resulta optimo para el consumo.', 'img/fzkQmS6bUlyEfJs4fWDS3D6zaFiCiDMQSX5SCeuv.png', 'img/pyYp0YQNoLICaTMrx7fBM6z4buCYrq9rrBe9eeRn.png', 'img/zvcnTicpyrfjstSQQkuQGq0hxnZwJPSbXwibl8L0.png', 'img/3W0iVzNzsZU6JizcdDdhrAApvsxZGCJGpsEchjTA.png', '\"Última generación en la producción de carnes\"', 'Equipos de última generación para los procesos de congelado, enfriado y envasado al vacío', 'Mercados en el Mundo', 'Cuenta con todos los permisos y certificaciones necesarios para exportar a la unión europea, israel, suiza, rusia, hong kong, brasil y sudáfrica entre otros.', 'img/ipRsHil1Cm8BX1sl2aYeogIaQEzK19JXbOOCeMU5.svg', '\"Nuestra carne es altamente demandada debido a su marmoleo natural, jugosidad, terneza y sabor\"', 'img/hh0Q9AXUvbkCmMg1F7hXVeAWr6XKV4kgVoUNfz27.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Estructura de tabla para la tabla `packaging_corte`
--

CREATE TABLE `packaging_corte` (
  `id` int NOT NULL,
  `packaging` varchar(255) NOT NULL,
  `corte_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `id` int NOT NULL,
  `encabezado_imagen_fondo` text,
  `logo_1_encabezado` text,
  `logo_2_encabezado` text,
  `texto_encabezado` text,
  `texto_encabezado_habilitado` text,
  `seccion1_titulo` text NOT NULL,
  `seccion1_parrafo` text NOT NULL,
  `seccion1_logo1` text NOT NULL,
  `seccion1_logo2` text NOT NULL,
  `seccion1_imagen_fondo` text NOT NULL,
  `seccion2_titulo` text NOT NULL,
  `seccion2_parrafo1` text NOT NULL,
  `seccion2_parrafo2` text NOT NULL,
  `seccion3_titulo` text NOT NULL,
  `seccion3_parrafo` text NOT NULL,
  `seccion3_imagen_fondo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quienessomos`
--

CREATE TABLE `quienessomos` (
  `id` int NOT NULL,
  `encabezado_imagen_fondo` text NOT NULL,
  `logo_1_encabezado` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `logo_2_encabezado` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `texto_encabezado` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `texto_encabezado_habilitado` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `seccio1_parrafo1` text NOT NULL,
  `seccio1_parrafo2` text NOT NULL,
  `seccio1_parrafo3` text NOT NULL,
  `seccio1_parrafo4` text NOT NULL,
  `seccion1_imagen_fondo` text NOT NULL,
  `seccion2_titulo` text NOT NULL,
  `seccion2_parrafo` text NOT NULL,
  `seccion2_imagen_fondo` text NOT NULL,
  `seccion3_parrafo1` text NOT NULL,
  `seccion3_parrafo2` text NOT NULL,
  `seccion4_parrafo1` text NOT NULL,
  `seccion4_parrafo2` text NOT NULL,
  `seccion4_parrafo3` text NOT NULL,
  `seccion4_parrafo4` text NOT NULL,
  `seccion4_imagen_fondo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `id` int NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE `secciones` (
  `id` int NOT NULL,
  `seccion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Juan Mendoza', 'mendozajuan007@gmail.com', NULL, '$2y$10$HhVEv1Lh0C.JzBHu2DAtAOQd9oRNSsHHBQEDsNT7FgvMqyI6AF8re', NULL, '2020-08-13 02:07:10', '2020-08-13 02:07:10'),
(2, 'Jose Perez', 'joseperez@gmail.com', NULL, '$2y$10$LGb8xIuwoGvOpvo6WAnAVemeurwEsvEEiCy0BLeseg9iQJlTxcprW', NULL, '2020-08-13 05:46:49', '2020-08-13 07:00:01');

--
-- Índices para tablas volcadas
--

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
  ADD KEY `categoria_corte_id` (`categoria_corte_id`) USING BTREE;

--
-- Indices de la tabla `etiquetado_corte`
--
ALTER TABLE `etiquetado_corte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `corte_id` (`corte_id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria_corte`
--
ALTER TABLE `categoria_corte`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `corte`
--
ALTER TABLE `corte`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `etiquetado_corte`
--
ALTER TABLE `etiquetado_corte`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagen_corte`
--
ALTER TABLE `imagen_corte`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `inicio`
--
ALTER TABLE `inicio`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `packaging_corte`
--
ALTER TABLE `packaging_corte`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `produccion`
--
ALTER TABLE `produccion`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `quienessomos`
--
ALTER TABLE `quienessomos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `redes_sociales`
--
ALTER TABLE `redes_sociales`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
