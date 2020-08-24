-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-08-2020 a las 12:07:24
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
  `encabezado_imagen_fondo` text,
  `logo_1_encabezado` text,
  `logo_2_encabezado` text,
  `texto_encabezado` text,
  `texto_encabezado_habilitado` varchar(255) DEFAULT NULL,
  `seccion1_titulo` text NOT NULL,
  `seccion1_parrafo` text NOT NULL,
  `seccion1_logo1` text NOT NULL,
  `seccion1_logo2` text NOT NULL,
  `seccion1_logo3` text NOT NULL,
  `seccion1_logo4` text NOT NULL,
  `seccion1_logo5` text NOT NULL,
  `seccion1_logo6` text NOT NULL,
  `seccion1_logo7` text NOT NULL,
  `seccion2_imagen_fondo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `calidad`
--

INSERT INTO `calidad` (`id`, `encabezado_imagen_fondo`, `logo_1_encabezado`, `logo_2_encabezado`, `texto_encabezado`, `texto_encabezado_habilitado`, `seccion1_titulo`, `seccion1_parrafo`, `seccion1_logo1`, `seccion1_logo2`, `seccion1_logo3`, `seccion1_logo4`, `seccion1_logo5`, `seccion1_logo6`, `seccion1_logo7`, `seccion2_imagen_fondo`) VALUES
(1, 'img/mBazWETS2XpFjkirfg6qDo41jixsu7Ul69rHB0b8.png', 'img/zMrtZzAQC1wtjZ5y3ZRLOE8M1fNVuytg5e56VvOs.svg', 'img/nVrWZ0kRr1hxJjaU6xhVWbbFs5Mxsj6lKjuQnY03.svg', '{\"es\":\"Texto\",\"zh\":null}', NULL, '{\"es\":\"Carne de Calidad\",\"zh\":\"\\u512a\\u8cea\\u8089\\u985e\\u3002\"}', '{\"es\":\"<p>Contamos con:<\\/p><ul><li>procedimientos operativos estandarizados de sanitizacion (ssop)<\\/li><li>sistema de analisis de peligros y control de puntos cr\\u00edticos (haccp)<\\/li><li>buenas pr\\u00e1cticas de manufactura (gmp)<\\/li><li>procedimientos operativos estandarizadis (sop)<\\/li><li>cumplimos con las normas de bienestar animal para garantizar el m\\u00e1s alto nivel de seguridad alimentaria en la industria<\\/li><\\/ul>\",\"zh\":\"<p>\\u6211\\u5011\\u6709:<\\/p><ul><li>\\u6a19\\u6e96\\u5316\\u7684\\u5236\\u88c1\\u64cd\\u4f5c\\u7a0b\\u5f0f (ssop)<\\/li><li>\\u5371\\u96aa\\u5206\\u6790\\u548c\\u81e8\\u754c\\u9ede\\u63a7\\u5236\\u7cfb\\u7d71(haccp)<\\/li><li>\\u826f\\u597d\\u7684\\u88fd\\u9020\\u898f\\u7bc4 (gmp)<\\/li><li>\\u6a19\\u6e96\\u5316\\u4f5c\\u696d\\u7a0b\\u5f0f(sop)<\\/li><li>\\u6211\\u5011\\u9075\\u5b88\\u52d5\\u7269\\u798f\\u5229\\u6a19\\u6e96,\\u4ee5\\u78ba\\u4fdd\\u884c\\u696d\\u98df\\u54c1\\u5b89\\u5168\\u9054\\u5230\\u6700\\u9ad8\\u6c34\\u6e96\\u3002<\\/li><\\/ul>\"}', 'img/wwPvlnT7wtMsIWWFU5wmWGqAMM7BhQfqXmeNcGwh.png', 'img/cyr7TALXZpoobACoTfrqApAPiuKZNgFkYCBRTRBL.png', 'img/6Ag5uTCynlv1LMKlht43QPlfnUb9MMlBQdGue4u0.png', 'img/XkNw9ARvfl9xsHsADMLD2d6ElBmS8XKI0jjvYbGx.png', 'img/tapSuV71Sa7l9zTGxvYMFr65buGEcnWCAtVP6Xta.png', 'img/x6s8FPSaswEO6GDGP74kFy43opl1VDwLlBrdqSlP.png', 'img/W0ePVG5XdPGTIpaf98am2eRc3SQJi6sDhCshxUeH.png', 'img/QCi9tGn9pZ8TTGBRx39HyiwQdqufAIfT7aIXPk0p.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_corte`
--

CREATE TABLE `categoria_corte` (
  `id` int(11) NOT NULL,
  `categoria` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto_footer`
--

CREATE TABLE `contacto_footer` (
  `id` int(11) NOT NULL,
  `ciudad1` text NOT NULL,
  `direccion1` text NOT NULL,
  `telefonos1` text NOT NULL,
  `ciudad2` text NOT NULL,
  `direccion2` text NOT NULL,
  `telefonos2` text NOT NULL,
  `contacto_titulo` text NOT NULL,
  `comercio_exterior` varchar(255) NOT NULL,
  `area_comercial` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contacto_footer`
--

INSERT INTO `contacto_footer` (`id`, `ciudad1`, `direccion1`, `telefonos1`, `ciudad2`, `direccion2`, `telefonos2`, `contacto_titulo`, `comercio_exterior`, `area_comercial`) VALUES
(1, '{\"es\":\"L. DEL MIRADOR - BUENOS AIRES\",\"zh\":\"L. DEL MIRADOR-\\u5e03\\u5b9c\\u8bfa\\u65af\\u827e\\u5229\\u65af\"}', '{\"es\":\"<p>Paso 3030 (1752) Lomas del Mirador Buenos Aires Argentina<\\/p>\",\"zh\":\"<p>\\u5e15\\u7d22\\uff08Paso\\uff093030\\uff081752\\uff09\\u6d1b\\u9a6c\\u65af\\u00b7\\u5fb7\\u5c14\\u00b7\\u7c73\\u62c9\\u591a\\uff08Lomas del Mirador\\uff09\\u5e03\\u5b9c\\u8bfa\\u65af\\u827e\\u5229\\u65af\\u963f\\u6839\\u5ef7<\\/p>\"}', '<p>+54 (11)) 4699-4424</p><p>+54 (11)) 4699-2882</p>', '{\"es\":\"BERNASCONI - LA PAMPA\",\"zh\":\"BERNASCONI-\\u62c9\\u6f58\\u5e15\"}', '{\"es\":\"<p>Ruta 35, Km 165 (8204) Bernasconi La Pampa - Argentina<\\/p>\",\"zh\":\"<p>Route 35\\uff0cKm 165\\uff088204\\uff09Bernasconi La Pampa-\\u963f\\u6839\\u5ef7<\\/p>\"}', '<p>+54 (11)) 4699-4424</p><p>+54 (11)) 4699-2882</p>', '{\"es\":\"CONTACTO\",\"zh\":\"\\u8054\\u7cfb\"}', 'Jescudero@frigorificohv.com.ar', 'dvigna@frigorificohv.com.ar');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `corte`
--

INSERT INTO `corte` (`id`, `nombre`, `descripcion`, `tamano_caja`, `medidas`, `envasado`, `piezas_por_caja`, `condiciones_termicas`, `especificaciones`, `categoria_corte_id`) VALUES
(1, 'Corazon de Cuadril', '<p>Equipos de última generación para los procesos de congelado, enfriado y envasado al vacío y gran eficacia en el área de la comercialización y atención al cliente. Por su eficacia, tecnología y competitividad comercial, Frigorífico hv S.A, garantiza en todos sus productos, la más alta calidad en la industria de la carne.</p>', 'Escopeta/grande', '60x24x15 - 60x40x15', 'Al vacío', '2/3 piezas - 4/5 piezas', 'enfriado/congelado', 'Menos de 4kg/mas de 4kg- Labio 1x1/2x1', 1),
(2, 'Bife Angosto', '<p>Equipos de última generación para los procesos de congelado, enfriado y envasado al vacío y gran eficacia en el área de la comercialización y atención al cliente. Por su eficacia, tecnología y competitividad comercial, Frigorífico hv S.A, garantiza en todos sus productos, la más alta calidad en la industria de la carne.</p>', 'Escopeta/grande', '60x24x15 - 60x40x15', 'Al vacío', '2/3 piezas - 4/5 piezas', 'enfriado/congelado', 'Menos de 4kg/mas de 4kg- Labio 1x1/2x1', 1),
(5, 'Lomo', '<p>Equipos de última generación para los procesos de congelado, enfriado y envasado al vacío y gran eficacia en el área de la comercialización y atención al cliente. Por su eficacia, tecnología y competitividad comercial, Frigorífico hv S.A, garantiza en todos sus productos, la más alta calidad en la industria de la carne.</p>', 'Escopeta/grande', '60x24x15 - 60x40x15', 'Al vacío', '2/3 piezas - 4/5 piezas', 'enfriado/congelado', 'Menos de 4kg/mas de 4kg- Labio 1x1/2x1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etiquetado_corte`
--

CREATE TABLE `etiquetado_corte` (
  `id` int(11) NOT NULL,
  `etiquetado` varchar(255) NOT NULL,
  `corte_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `id` int(11) NOT NULL,
  `encabezado_imagen_fondo` text,
  `logo_1_encabezado` text,
  `logo_2_encabezado` text,
  `texto_encabezado` text,
  `texto_encabezado_habilitado` varchar(255) DEFAULT NULL,
  `seccion1_titulo` text NOT NULL,
  `seccion1_parrafo` text NOT NULL,
  `seccion1_imagen` text NOT NULL,
  `seccion2_parrafo1` text NOT NULL,
  `seccion2_parrafo2` text NOT NULL,
  `seccion2_imagen_fondo` text NOT NULL,
  `seccion3_titulo` text NOT NULL,
  `seccion3_imagen_fondo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `exportacion`
--

INSERT INTO `exportacion` (`id`, `encabezado_imagen_fondo`, `logo_1_encabezado`, `logo_2_encabezado`, `texto_encabezado`, `texto_encabezado_habilitado`, `seccion1_titulo`, `seccion1_parrafo`, `seccion1_imagen`, `seccion2_parrafo1`, `seccion2_parrafo2`, `seccion2_imagen_fondo`, `seccion3_titulo`, `seccion3_imagen_fondo`) VALUES
(1, 'img/arLMIfOcvA32Gy6AWoQLRjtsaIfEi7v9TrjPF4qD.png', 'img/n7sfMMqkP9jyQzQGWSDgSSarsrxKlYvwKX12gVLG.svg', 'img/HXodcf54qPSEL98fPpnA2Ig7x0VeG5X2MAjYbTQd.svg', '{\"zh\":null}', NULL, '{\"es\":\"Mercados en el Mundo\",\"zh\":\"\\u4e16\\u754c\\u5e02\\u5834\\u3002\"}', '{\"es\":\"<p>Cuenta con todos los permisos y certificaciones necesarios para exportar a la uni\\u00f3n europea, israel, suiza, rusia, hong kong, brasil y sud\\u00e1frica entre otros.<\\/p>\",\"zh\":\"<p>\\u5b83\\u64c1\\u6709\\u6240\\u6709\\u5fc5\\u8981\\u7684\\u8a31\\u53ef\\u8b49\\u548c\\u8b49\\u66f8\\u51fa\\u53e3\\u5230\\u6b50\\u76df\\u3001\\u4ee5\\u8272\\u5217\\u3001\\u745e\\u58eb\\u3001\\u4fc4\\u7f85\\u65af\\u3001\\u9999\\u6e2f\\u3001\\u5df4\\u897f\\u548c\\u5357\\u975e\\u7b49\\u3002<\\/p>\"}', 'img/fpIy5fPSaFeEGuhafWRFopeoxtvURsu6BIaTu0na.svg', '{\"es\":\"<p>Paises a los que Exportamos<\\/p><ul><li>Angola<\\/li><li>Antillas Hol.<\\/li><li>Argelia<\\/li><li>Aruba<\\/li><li>Bosnia y Herzegovina<\\/li><li>Brasil<\\/li><li>Bulgaria<\\/li><li>Chile<\\/li><li>Curacao<\\/li><li>Estados Unidos<\\/li><li>Guinea ecuatorial<\\/li><li>Peru<\\/li><li>Reino Unido<\\/li><li>Rusia<\\/li><li>Suiza<\\/li><li>Ucrania<\\/li><li>Venezuela<\\/li><li>Uni\\u00f3n Europea<\\/li><\\/ul>\",\"zh\":\"<p>\\u6211\\u5011\\u51fa\\u53e3\\u5230\\u7684\\u570b\\u5bb6\\u3002<\\/p><ul><li>\\u5b89\\u54e5\\u62c9\\u3002<\\/li><li>\\u970d\\u723e\\u5b89\\u7684\\u5217\\u65af\\u7fa4\\u5cf6\\u3002<\\/li><li>\\u963f\\u723e\\u53ca\\u5229\\u4e9e\\u3002<\\/li><li>\\u963f\\u9b6f\\u5df4\\u3002<\\/li><li>\\u6ce2\\u58eb\\u5c3c\\u4e9e\\u548c\\u9ed1\\u585e\\u54e5\\u7dad\\u90a3\\u3002<\\/li><li>\\u5df4\\u897f\\u3002<\\/li><li>\\u4fdd\\u52a0\\u5229\\u4e9e\\u3002<\\/li><li>\\u667a\\u5229\\u3002<\\/li><li>\\u5eab\\u62c9\\u7d22\\u5cf6\\u3002<\\/li><li>\\u7f8e\\u570b\\u3002<\\/li><li>\\u8d64\\u9053\\u5e7e\\u5167\\u4e9e\\u3002<\\/li><li>\\u79d8\\u9b6f\\u3002<\\/li><li>\\u82f1\\u570b\\u3002<\\/li><li>\\u4fc4\\u7f85\\u65af\\u3002<\\/li><li>\\u745e\\u58eb\\u3002<\\/li><li>\\u70cf\\u514b\\u862d\\u3002<\\/li><li>\\u59d4\\u5167\\u745e\\u62c9\\u3002<\\/li><li>\\u6b50\\u76df\\u3002<\\/li><\\/ul>\"}', '{\"es\":\"<p>Paises Habilitados para Exportar<\\/p><ul><li>Angola<\\/li><li>Antillas Hol.<\\/li><li>Argelia<\\/li><li>Aruba<\\/li><li>Bosnia y Herzegovina<\\/li><li>Brasil<\\/li><li>Bulgaria<\\/li><li>Chile<\\/li><li>Curacao<\\/li><li>Egipto<\\/li><li>Estados Unidos<\\/li><li>Guinea ecuatorial<\\/li><li>Peru<\\/li><li>Rusia<\\/li><li>Suiza<\\/li><li>Ucrania<\\/li><li>Uni\\u00f3n Europea<\\/li><\\/ul>\",\"zh\":\"<p>\\u652f\\u63f4\\u51fa\\u53e3\\u7684\\u570b\\u5bb6\\/\\u5730\\u5340\\u3002<\\/p><ul><li>\\u5b89\\u54e5\\u62c9<\\/li><li>\\u8377\\u5c5e\\u5b89\\u7684\\u5217\\u65af\\u7fa4\\u5c9b\\u3002<\\/li><li>\\u963f\\u5c14\\u53ca\\u5229\\u4e9a<\\/li><li>\\u963f\\u9c81\\u5df4\\u5c9b<\\/li><li>\\u6ce2\\u65af\\u5c3c\\u4e9a\\u548c\\u9ed1\\u585e\\u54e5\\u7ef4\\u90a3<\\/li><li>\\uff08\\u7b80\\u79f0\\uff1a\\u6ce2\\u9ed1<\\/li><li>\\u5df4\\u897f<\\/li><li>\\u4fdd\\u52a0\\u5229\\u4e9a<\\/li><li>\\u667a\\u5229<\\/li><li>\\u5e93\\u62c9\\u7d22<\\/li><li>\\u57c3\\u53ca<\\/li><li>\\u6211\\u4eec<\\/li><li>\\u8d64\\u9053\\u51e0\\u5185\\u4e9a<\\/li><li>\\u79d8\\u9c81<\\/li><li>\\u4fc4\\u56fd<\\/li><li>\\u745e\\u58eb<\\/li><li>\\u4e4c\\u514b\\u5170<\\/li><li>\\u6b27\\u6d32\\u8054\\u76df<\\/li><\\/ul>\"}', 'img/D9BooVrJkd6m8ae9hIu4t0J7UYO0b1LLljDRqwvR.png', '{\"es\":\"\\\"Nos sentimos muy agradecidos de tener la oportunidad de contribuir al desarrollo social y econ\\u00f3mico en las comunidades donde trabajamos\\\"\",\"zh\":\"\\\"\\u6211\\u5011\\u975e\\u5e38\\u611f\\u8b1d\\u6709\\u6a5f\\u6703\\u70ba\\u6211\\u5011\\u5de5\\u4f5c\\u7684\\u793e\\u5340\\u7684\\u793e\\u6703\\u548c\\u7d93\\u6fdf\\u767c\\u5c55\\u505a\\u51fa\\u8ca2\\u737b\\\"\"}', 'img/3XfGclbV9egBsqCeXup9fQ9aTIEv96iBWxKl21zZ.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen_corte`
--

CREATE TABLE `imagen_corte` (
  `id` int(11) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `corte_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `imagen_corte`
--

INSERT INTO `imagen_corte` (`id`, `imagen`, `corte_id`) VALUES
(2, 'producto/g6Gt9rNft1F5Yb9yhpPsmMHspCjJOYFSe6hV69UT.png', 2),
(3, 'img/producto/xHXPZCMx7UJivS0vypezQajQ2B1AqNFSuykbL097.png', 1),
(4, 'img/producto/tmHnfRON9gtQd5LvCxC00MUkV15W16eKcmxMr74k.png', 1),
(5, 'img/producto/EIcZoYxcrs7BRtFLGw7mdCylfZLRuXsBbOD6E3Ia.png', 5),
(6, 'img/producto/4EpeKdZ5bsyaImjo7P7r0f0fmO0iPH1F8qXR9QyG.png', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impactosocial`
--

CREATE TABLE `impactosocial` (
  `id` int(11) NOT NULL,
  `encabezado_imagen_fondo` text,
  `logo_1_encabezado` text,
  `logo_2_encabezado` text,
  `texto_encabezado` text,
  `texto_encabezado_habilitado` varchar(255) DEFAULT NULL,
  `seccion1_titulo` text NOT NULL,
  `seccion1_parrafo1` text NOT NULL,
  `seccion1_parrafo2` text NOT NULL,
  `seccion2_titulo` text NOT NULL,
  `seccion2_imagen_fondo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `impactosocial`
--

INSERT INTO `impactosocial` (`id`, `encabezado_imagen_fondo`, `logo_1_encabezado`, `logo_2_encabezado`, `texto_encabezado`, `texto_encabezado_habilitado`, `seccion1_titulo`, `seccion1_parrafo1`, `seccion1_parrafo2`, `seccion2_titulo`, `seccion2_imagen_fondo`) VALUES
(1, 'img/VufPRT2Q4dz5LWzUBXPUKHftEJYU9PzFeBSLF5Jy.png', 'img/pclU91AgZY9cofRrWFMuA2JYb4B6MIDQ1DgGpIAa.svg', 'img/zDpB9hYxPgu2TAnYnqXgH7lpfk5t6k06UIyGXSWn.svg', '{\"zh\":null}', NULL, '{\"es\":\"Nuestro compromiso\",\"zh\":\"\\u6211\\u5011\\u7684\\u627f\\u8afe\\u3002\"}', '{\"es\":\"<p>Somos conscientes que el factor humano es la fuerza que mueve frigorifico hv sa, y nos empe\\u00f1amos en cuidarlo. Aparte de preocuparnos por la capacitacion y el bienestar de nuestros empleados, nos sentimos orgullosos de contribuir al desarrollo social de la comunidad donde trabajamos. Con nuestra empresa creamos empleo y desarrollo, generando ingresos que ayudan a mejorar la calidad de vida de la comunidad de nuestra ciudad.<\\/p>\",\"zh\":\"<p>\\u6211\\u5011\\u77e5\\u9053,\\u4eba\\u7684\\u56e0\\u7d20\\u662f\\u79fb\\u52d5\\u98db\\u4ebahv sa\\u7684\\u529b\\u91cf,\\u6211\\u5011\\u52aa\\u529b\\u7167\\u9867\\u5b83\\u3002\\u9664\\u4e86\\u64d4\\u5fc3\\u54e1\\u5de5\\u7684\\u57f9\\u8a13\\u548c\\u798f\\u5229\\u5916,\\u6211\\u5011\\u4e5f\\u70ba\\u6211\\u5011\\u5de5\\u4f5c\\u793e\\u5340\\u7684\\u793e\\u6703\\u767c\\u5c55\\u505a\\u51fa\\u8ca2\\u737b\\u3002\\u901a\\u904e\\u6211\\u5011\\u516c\\u53f8,\\u6211\\u5011\\u5275\\u9020\\u5c31\\u696d\\u6a5f\\u6703\\u548c\\u767c\\u5c55,\\u5275\\u9020\\u6536\\u5165,\\u8aac\\u660e\\u63d0\\u9ad8\\u6211\\u5011\\u57ce\\u5e02\\u793e\\u5340\\u7684\\u751f\\u6d3b\\u54c1\\u8cea\\u3002<\\/p>\"}', '{\"es\":\"<p>Nuestra gente es el mayor capital y el bien m\\u00e1s preciado. Nos sentimos muy orgullosos de contar con un equipo homog\\u00e9neo, talentoso e innovador. Contamos con hombres y mujeres que trabajan arduamente e integran un proyecto en com\\u00fan.<\\/p>\",\"zh\":\"<p>\\u6211\\u5011\\u7684\\u4eba\\u6c11\\u662f\\u6700\\u5927\\u7684\\u8cc7\\u672c\\u548c\\u6700\\u5bf6\\u8cb4\\u7684\\u8cc7\\u7522\\u3002\\u6211\\u5011\\u975e\\u5e38\\u81ea\\u8c6a\\u64c1\\u6709\\u4e00\\u652f\\u540c\\u8cea\\u3001\\u624d\\u83ef\\u6a6b\\u6ea2\\u3001\\u5bcc\\u6709\\u5275\\u65b0\\u7cbe\\u795e\\u7684\\u5718\\u968a\\u3002\\u6211\\u5011\\u6709\\u52aa\\u529b\\u5de5\\u4f5c\\u548c\\u6574\\u5408\\u806f\\u5408\\u5c08\\u6848\\u7684\\u7537\\u5973\\u3002<\\/p>\"}', '{\"es\":\"\\\"Nos sentimos muy agradecidos de tener la oportunidad de contribuir al desarrollo social y econ\\u00f3mico en las comunidades donde trabajamos\\\"\",\"zh\":\"\\\"\\u6211\\u5011\\u975e\\u5e38\\u611f\\u8b1d\\u6709\\u6a5f\\u6703\\u70ba\\u6211\\u5011\\u5de5\\u4f5c\\u7684\\u793e\\u5340\\u7684\\u793e\\u6703\\u548c\\u7d93\\u6fdf\\u767c\\u5c55\\u505a\\u51fa\\u8ca2\\u737b\\\"\"}', 'img/JV2BWnsFOQ4AWL2Xz16hNKxEk3mtCg1jdoDitKFd.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio`
--

CREATE TABLE `inicio` (
  `id` int(11) NOT NULL,
  `encabezado_imagen_fondo` text,
  `logo_1_encabezado` text,
  `logo_2_encabezado` text,
  `texto_encabezado` longtext,
  `texto_encabezado_habilitado` varchar(255) DEFAULT NULL,
  `seccion1_titulo` longtext NOT NULL,
  `seccion_1_parrafo` longtext NOT NULL,
  `seccion1_logo1` text,
  `seccion1_logo2` text,
  `seccion1_logo3` text,
  `seccion2_imagen_fondo` text,
  `seccio2_titulo` longtext NOT NULL,
  `seccion_2_parrafo` longtext NOT NULL,
  `seccion3_titulo` longtext NOT NULL,
  `seccion3_parrafo` longtext NOT NULL,
  `seccion3_imagen` text,
  `seccion4_titulo` longtext NOT NULL,
  `seccion4_imagen_fondo` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `inicio`
--

INSERT INTO `inicio` (`id`, `encabezado_imagen_fondo`, `logo_1_encabezado`, `logo_2_encabezado`, `texto_encabezado`, `texto_encabezado_habilitado`, `seccion1_titulo`, `seccion_1_parrafo`, `seccion1_logo1`, `seccion1_logo2`, `seccion1_logo3`, `seccion2_imagen_fondo`, `seccio2_titulo`, `seccion_2_parrafo`, `seccion3_titulo`, `seccion3_parrafo`, `seccion3_imagen`, `seccion4_titulo`, `seccion4_imagen_fondo`) VALUES
(1, 'img/pgekM7LP1VItoppmBNQzNpjkHPDdNAcPIh0GUtjN.png', 'img/SPJKOClToHqvmTZnuFnobiHGhFnJ8KEfxMnwEsTX.svg', 'img/kWxnCuz9ONccwCSwPCLkG5rabLC0aLuT18Gt3meM.svg', '{\"es\":\"\\\"Carne Argentina de alta calidad para los mercados m\\u00e1s exigentes del mundo\\\"\",\"zh\":\"\\u201c\\u70ba\\u4e16\\u754c\\u4e0a\\u6700\\u82db\\u523b\\u7684\\u5e02\\u5834\\u63d0\\u4f9b\\u9ad8\\u8cea\\u91cf\\u7684\\u963f\\u6839\\u5ef7\\u8089\\u201d\"}', 'on', '{\"es\":\"Nuestra Carne\",\"zh\":\"\\u6211\\u5011\\u7684\\u8089\"}', '{\"es\":\"<p>La calidad de la carne, en t\\u00e9rminos alimenticios, depende de la conjunci\\u00f3n de diversos factores. Entre estos se destacan el tipo de crianza del ganado y la eficacia de su comercializaci\\u00f3n. La pampa h\\u00fameda argentina es uno de los lugares en el mundo en el que la cr\\u00eda de los animales no se realizan en establos, sino en extensas llanuras, alejadas de la poluci\\u00f3n industrial, donde la abundancia de pasturas esta asegurada. El ganado argentino respeta, adem\\u00e1s, las pautas de crecimiento natural, ya que no se los inyecta con hormonas y antibi\\u00f3ticos. Por estas razones, su estado resulta optimo para el consumo.<\\/p>\",\"zh\":\"<p>\\u5c31\\u71df\\u990a\\u800c\\u8a00\\uff0c\\u8089\\u7684\\u8cea\\u91cf\\u53d6\\u6c7a\\u65bc\\u5404\\u7a2e\\u56e0\\u7d20\\u7684\\u7d50\\u5408\\u3002\\u5176\\u4e2d\\uff0c\\u990a\\u725b\\u7684\\u985e\\u578b\\u53ca\\u5176\\u5546\\u696d\\u5316\\u7684\\u6709\\u6548\\u6027\\u812b\\u7a4e\\u800c\\u51fa\\u3002\\u963f\\u6839\\u5ef7\\u6f6e\\u6fd5\\u7684\\u5357\\u7f8e\\u5927\\u8349\\u539f\\u662f\\u4e16\\u754c\\u4e0a\\u4e0d\\u662f\\u5728\\u99acs\\u4e2d\\u9032\\u884c\\u52d5\\u7269\\u7e41\\u6b96\\u7684\\u5730\\u65b9\\u4e4b\\u4e00\\uff0c\\u800c\\u662f\\u5728\\u5ee3\\u95ca\\u7684\\u5e73\\u539f\\u4e0a\\u9032\\u884c\\u7e41\\u6b96\\u7684\\u5730\\u65b9\\uff0c\\u9060\\u96e2\\u5de5\\u696d\\u6c61\\u67d3\\uff0c\\u53ef\\u4ee5\\u4fdd\\u8b49\\u6709\\u5927\\u91cf\\u7684\\u7267\\u5834\\u3002\\u7531\\u65bc\\u963f\\u6839\\u5ef7\\u725b\\u6c92\\u6709\\u8a3b\\u5c04\\u6fc0\\u7d20\\u548c\\u6297\\u751f\\u7d20\\uff0c\\u56e0\\u6b64\\u4ed6\\u5011\\u4e5f\\u9075\\u5b88\\u81ea\\u7136\\u751f\\u9577\\u6e96\\u5247\\u3002\\u7531\\u65bc\\u9019\\u4e9b\\u539f\\u56e0\\uff0c\\u5176\\u72c0\\u614b\\u5c0d\\u65bc\\u6d88\\u8017\\u800c\\u8a00\\u662f\\u6700\\u4f73\\u7684<\\/p>\"}', 'img/0dq8AG2nxtmOAZcKf774ndPm5Jr3IAemmjCIKuwy.png', 'img/dgvc8Vr88l51jGOnbr3CnMoLpepL7BUCiEdy3YZw.png', 'img/VnV0VTmO9odR59hNqKac6JUigbOEAiVvBZAPNfSA.png', 'img/YtwnKDZWf2XpUQivKo8WbNifFat2a08qTs5ycDd7.png', '{\"es\":\"\\u00daltima generaci\\u00f3n en la producci\\u00f3n de carnes\",\"zh\":\"\\u6700\\u65b0\\u4e00\\u4ee3\\u7684\\u8089\\u985e\\u751f\\u7522\"}', '{\"es\":\"<p>Equipos de \\u00faltima generaci\\u00f3n para los procesos de congelado, enfriado y envasado al vac\\u00edo<\\/p>\",\"zh\":\"<p>\\u7528\\u65bc\\u51b7\\u51cd\\uff0c\\u51b7\\u537b\\u548c\\u771f\\u7a7a\\u5305\\u88dd\\u904e\\u7a0b\\u7684\\u6700\\u65b0\\u4e00\\u4ee3\\u8a2d\\u5099<\\/p>\"}', '{\"es\":\"Mercados en el Mundo\",\"zh\":\"\\u4e16\\u754c\\u5e02\\u5834\"}', '{\"es\":\"<p>Cuenta con todos los permisos y certificaciones necesarios para exportar a la uni\\u00f3n europea, israel, suiza, rusia, hong kong, brasil y sud\\u00e1frica entre otros.<\\/p>\",\"zh\":\"<p>\\u5b83\\u5177\\u6709\\u6240\\u6709\\u5fc5\\u8981\\u7684\\u8a31\\u53ef\\u8b49\\u548c\\u8b49\\u66f8\\uff0c\\u53ef\\u51fa\\u53e3\\u5230\\u6b50\\u76df\\uff0c\\u4ee5\\u8272\\u5217\\uff0c\\u745e\\u58eb\\uff0c\\u4fc4\\u7f85\\u65af\\uff0c\\u9999\\u6e2f\\uff0c\\u5df4\\u897f\\u548c\\u5357\\u975e\\u7b49<\\/p>\"}', 'img/kq7whlQ3LuB6i8Xuyu2pXVYbX1V74juzKXFL029k.svg', '{\"es\":\"Nuestra carne es altamente demandada debido a su marmoleo natural, jugosidad, terneza y sabor\",\"zh\":\"\\u6211\\u5011\\u7684\\u8089\\u7531\\u65bc\\u5176\\u5929\\u7136\\u5927\\u7406\\u77f3\\u82b1\\u7d0b\\uff0c\\u591a\\u6c41\\uff0c\\u5ae9\\u5ae9\\u548c\\u98a8\\u5473\\u800c\\u53d7\\u5230\\u9ad8\\u5ea6\\u9700\\u6c42\"}', 'img/ILJ7goFj0DkyLhALPByjn7HnsVEw4ZXN52581nXY.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logotipo`
--

CREATE TABLE `logotipo` (
  `id` int(11) NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `id` int(11) NOT NULL,
  `pais_nac` varchar(255) NOT NULL,
  `gentilicio_nac` varchar(255) NOT NULL,
  `iso_nac` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `id` int(11) NOT NULL,
  `packaging` varchar(255) NOT NULL,
  `corte_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `id` int(11) NOT NULL,
  `encabezado_imagen_fondo` text NOT NULL,
  `ciudad1` text NOT NULL,
  `direccion1` text NOT NULL,
  `telefonos1` text NOT NULL,
  `ciudad2` text NOT NULL,
  `direccion2` text NOT NULL,
  `telefonos2` text NOT NULL,
  `contacto_titulo` text NOT NULL,
  `contacto_descripcion` text NOT NULL,
  `comercio_exterior` text NOT NULL,
  `area_comercial` text NOT NULL,
  `coordenadas1` text NOT NULL,
  `coordenadas2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pagina_contacto`
--

INSERT INTO `pagina_contacto` (`id`, `encabezado_imagen_fondo`, `ciudad1`, `direccion1`, `telefonos1`, `ciudad2`, `direccion2`, `telefonos2`, `contacto_titulo`, `contacto_descripcion`, `comercio_exterior`, `area_comercial`, `coordenadas1`, `coordenadas2`) VALUES
(1, 'img/bRYNBeCvrBjnCt0pL94W8GRyQm7d7KtMxwrshc0x.png', '{\"es\":\"Lomas del Mirador\",\"zh\":\"\\u6d1b\\u99ac\\u65af\\u00b7\\u5fb7\\u723e\\u00b7\\u7c73\\u62c9\\u591a\\u723e\\u3002\"}', '{\"es\":\"<p>Paso 3030 (1752) Lomas del Mirador Buenos Aires<\\/p>\",\"zh\":\"<p>\\u5e15\\u7d22\\uff08Paso\\uff093030\\uff081752\\u5e74\\uff09\\u5e03\\u5b9c\\u8bfa\\u65af\\u827e\\u5229\\u65af\\u6d1b\\u9a6c\\u65af\\u00b7\\u5fb7\\u62c9\\u7c73\\u62c9\\u591a\\uff08Lomas del Mirador\\uff09<\\/p>\"}', '+54 (11)) 4699-4424 +54 (11)) 4699-2882', '{\"es\":\"Bernasconi\",\"zh\":\"\\u8d1d\\u7eb3\\u65af\\u79d1\\u5c3c\"}', '{\"es\":\"<p>Ruta 35, Km 165 (8204) Bernasconi - La Pampa<\\/p>\",\"zh\":\"<p>\\u8def\\u7ebf35\\uff0cKm 165\\uff088204\\uff09\\u8d1d\\u7eb3\\u65af\\u79d1\\u5c3c-\\u62c9\\u6f58\\u5e15<\\/p>\"}', '+54 (11)) 4699-4424 / +54 (11)) 4699-2882', '{\"es\":\"Contacto\",\"zh\":\"\\u8054\\u7cfb\"}', '{\"es\":\"<p>Para mayor informaci\\u00f3n, no dude en contactarse mediante el siguiente formulario, o a trav\\u00e9s de nuestras v\\u00edas de comunicaci\\u00f3n<\\/p>\",\"zh\":\"<p>\\u5982\\u662f\\u77ad\\u89e3\\u66f4\\u591a\\u8cc7\\u8a0a,\\u8acb\\u96a8\\u6642\\u901a\\u904e\\u4ee5\\u4e0b\\u8868\\u683c\\u6216\\u6211\\u5011\\u7684\\u6e9d\\u901a\\u65b9\\u5f0f\\u8207\\u6211\\u5011\\u806f\\u7e6b\\u3002<\\/p>\"}', 'Jescudero@frigorificohv.com.ar', 'dvigna@frigorificohv.com.ar', '010101', '010101');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina_productos`
--

CREATE TABLE `pagina_productos` (
  `id` int(11) NOT NULL,
  `encabezado_imagen_fondo` text NOT NULL,
  `seccion1_titulo` text NOT NULL,
  `seccion1_imagen` text NOT NULL,
  `seccion1_imagen_fondo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pagina_productos`
--

INSERT INTO `pagina_productos` (`id`, `encabezado_imagen_fondo`, `seccion1_titulo`, `seccion1_imagen`, `seccion1_imagen_fondo`) VALUES
(1, 'img/749Cv6tBBJz3xMMB2KVuvtdchVwMx7SOICv0xwKX.png', '{\"es\":\"Cat\\u00e1logo de cortes\",\"zh\":\"\\u6cd5\\u9662\\u76ee\\u9304\\u3002\"}', 'img/mbHiIXewMdHCG1Bz1Vd2HobqmVzixlqSH5EQIrNw.png', 'img/Xjw2zYT1ukZpkUgy8pj0PN4Zp6WHB0mRIh2rA9Ia.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina_recursos_humanos`
--

CREATE TABLE `pagina_recursos_humanos` (
  `id` int(11) NOT NULL,
  `encabezado_imagen_fondo` text NOT NULL,
  `seccion1_titulo` text NOT NULL,
  `seccion1_parrafo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pagina_recursos_humanos`
--

INSERT INTO `pagina_recursos_humanos` (`id`, `encabezado_imagen_fondo`, `seccion1_titulo`, `seccion1_parrafo`) VALUES
(1, 'img/sLmppM3CVAmWE5vp5pyNAreuoLcmOffiArMGyVmx.png', '{\"es\":\"Recursos Humanos\",\"zh\":\"\\u4eba\\u529b\\u8d44\\u6e90\"}', '{\"es\":\"<p>Trabaj\\u00e1 con nosotros. Podes sumarte en la empresa llenando este formulario y nos estaremos contactando con vos ante la primer oferta laboral.<\\/p>\",\"zh\":\"<p>\\u8207\\u6211\\u5011\\u5408\\u4f5c\\u3002\\u60a8\\u53ef\\u4ee5\\u901a\\u904e\\u586b\\u5beb\\u6b64\\u8868\\u683c\\u52a0\\u5165\\u516c\\u53f8,\\u6211\\u5011\\u5c07\\u5c31\\u7b2c\\u4e00\\u4efd\\u5de5\\u4f5c\\u6a5f\\u6703\\u8207\\u60a8\\u806f\\u7e6b\\u3002<\\/p>\"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion`
--

CREATE TABLE `produccion` (
  `id` int(11) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `produccion`
--

INSERT INTO `produccion` (`id`, `encabezado_imagen_fondo`, `logo_1_encabezado`, `logo_2_encabezado`, `texto_encabezado`, `texto_encabezado_habilitado`, `seccion1_titulo`, `seccion1_parrafo`, `seccion1_logo1`, `seccion1_logo2`, `seccion1_imagen_fondo`, `seccion2_titulo`, `seccion2_parrafo1`, `seccion2_parrafo2`, `seccion3_titulo`, `seccion3_parrafo`, `seccion3_imagen_fondo`) VALUES
(1, 'img/uTvETbhamJaAaWznYiT9qCBNBacyJK2WVSznfDTN.png', 'img/bN54ICmI2p2pBQKea7AeHfx4HAZshv57l54xrrEB.svg', 'img/FiuxxmLV253Yvmz56ukxXZu0BnQpUZroi5xbB5lF.svg', '{\"zh\":null}', NULL, '{\"es\":\"Faena \\/ Despostada\",\"zh\":\"\\u5c60\\u5bb0\\/\\u8655\\u7f6e\"}', '{\"es\":\"<p>Nuestra linea de despostada es moderna y eficaz. Utilizamos sistemas de trazabilidad individual de corte desde su nacimiento hasta su consumo. Nuestro personal de produccion est\\u00e1 altamente capacitado para garantizar la inocuidad y sanidad de nuestros productos.<\\/p>\",\"zh\":\"<p>\\u6211\\u5011\\u7684\\u6c7d\\u63d0\\u7dda\\u73fe\\u4ee3\\u5316\\u4e14\\u9ad8\\u6548\\u3002\\u6211\\u5011\\u4f7f\\u7528\\u500b\\u4eba\\u53ef\\u8ffd\\u6eaf\\u7cfb\\u7d71\\u5f9e\\u51fa\\u751f\\u5230\\u6d88\\u8cbb\\u9032\\u884c\\u524a\\u6e1b\\u3002\\u6211\\u5011\\u7684\\u751f\\u7522\\u4eba\\u54e1\\u7d93\\u904e\\u56b4\\u683c\\u7684\\u57f9\\u8a13\\uff0c\\u4ee5\\u4fdd\\u8b49\\u7522\\u54c1\\u7684\\u5b89\\u5168\\u548c\\u5065\\u5eb7<\\/p>\"}', 'img/FXxjMckq1g6Vw5ZQqSJe62u6aZvaT6aaZtRs7ERM.svg', 'img/kYsGFX7cg5imxnBh1MYcLELHBMimZQphluvrD9E1.svg', 'img/A8dp6p2RAtgWS97wZ3pSBNlrIpH4nAL1Bgg4zlrN.png', '{\"es\":\"Nuestro compromiso\",\"zh\":\"\\u71df\\u990a\\u59a5\\u5354\"}', '{\"es\":\"<p>Frigorifico hv produce cortes de carne, menudencias y subproductos de origen bovino para mercados internacionales y locales. Nuestras planta est\\u00e1n ubicada en el centro de la provincia de buenos aires y en el coraz\\u00f3n de la regi\\u00f3n ganadera argentina.Tenemos una moderna planta de procesamiento que cuenta con tecnolog\\u00eda de punta y sistemas innovadores que permiten automatizar los procesos de producci\\u00f3n y log\\u00edstica. Utilizamos equipos, m\\u00e9todos y tecnolog\\u00eda de ultima generacion para poder cumplir con las especificaciones y necesidades de cada cliente. Tomamos todas las medidas necesarias para garantizar la seguridad alimentaria.<\\/p>\",\"zh\":\"<p>\\u5f17\\u91cc\\u6208\\u91cc\\u83f2\\u79d1\\uff08Frigorifico\\uff09\\u5728\\u570b\\u969b\\u4e0a\\u548c\\u7576\\u5730\\u90fd\\u751f\\u7522\\u79d1\\u723e\\u7279\\u65af\\uff08Cartes de Carne\\uff09\\uff0c\\u5b50\\u83dc\\u55ae\\u548c\\u5b50\\u7522\\u54c1\\u3002\\u963f\\u6839\\u5ef7\\u7684\\u5e03\\u5b9c\\u8afe\\u65af\\u827e\\u5229\\u65af\\u4e2d\\u592e\\u4eba\\u6c11\\u5171\\u548c\\u570b\\u690d\\u7269\\u5712\\u548c\\u963f\\u6839\\u5ef7\\u7684\\u62c9\\u52a0\\u65af\\u5730\\u5340\\u7684\\u58a8\\u897f\\u54e5\\u5171\\u548c\\u570b\\u3002\\u5ba2\\u6236\\u7684\\u6700\\u7d42\\u7528\\u9014\\uff0c\\u6700\\u7d42\\u7528\\u9014\\uff0c\\u6700\\u7d42\\u7528\\u9014\\u548c\\u6700\\u7d42\\u7528\\u9014\\u3002 Tomamos todas las medidas necesarias para garantizar la seguridad alimentaria<\\/p>\"}', '{\"es\":\"<p>Utilizamos equipos, m\\u00e9todos y tecnolog\\u00eda de ultima generacion para poder cumplir con las especificaciones y necesidades de cada cliente. Tomamos todas las medidas necesarias para garantizar la seguridad alimentaria<\\/p>\",\"zh\":\"<p>\\u5ba2\\u6236\\u7684\\u6700\\u7d42\\u7528\\u9014\\uff0c\\u6700\\u7d42\\u7528\\u9014\\uff0c\\u6700\\u7d42\\u7528\\u9014\\u548c\\u6700\\u7d42\\u7528\\u9014\\u3002 Tomamos todas las medidas necesarias para garantizar la seguridad alimentaria<\\/p>\"}', '{\"es\":\"\\\"\\u00daltima generaci\\u00f3n en la producci\\u00f3n de carnes\\\"\",\"zh\":\"\\u201c\\u5361\\u5167\\u65af\\u8461\\u8404\\u9152\\u7522\\u5730\\u201d\"}', '{\"es\":\"<p>Equipos de \\u00faltima generaci\\u00f3n para los procesos de congelado, enfriado y envasado al vac\\u00edo<\\/p>\",\"zh\":\"<p>\\u5b54\\u514b\\u62c9\\u591a\\u5171\\u548c\\u570b\\u8ca1\\u7522\\u6cd5\\u5b78\\u78a9\\u58eb<\\/p>\"}', 'img/1tbKJHnHmoHbkyBOT2Z9x25QZU4zVlwpzJrpmRey.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quienessomos`
--

CREATE TABLE `quienessomos` (
  `id` int(11) NOT NULL,
  `encabezado_imagen_fondo` text NOT NULL,
  `logo_1_encabezado` text,
  `logo_2_encabezado` text,
  `texto_encabezado` text,
  `texto_encabezado_habilitado` varchar(255) DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `quienessomos`
--

INSERT INTO `quienessomos` (`id`, `encabezado_imagen_fondo`, `logo_1_encabezado`, `logo_2_encabezado`, `texto_encabezado`, `texto_encabezado_habilitado`, `seccio1_parrafo1`, `seccio1_parrafo2`, `seccio1_parrafo3`, `seccio1_parrafo4`, `seccion1_imagen_fondo`, `seccion2_titulo`, `seccion2_parrafo`, `seccion2_imagen_fondo`, `seccion3_parrafo1`, `seccion3_parrafo2`, `seccion4_parrafo1`, `seccion4_parrafo2`, `seccion4_parrafo3`, `seccion4_parrafo4`, `seccion4_imagen_fondo`) VALUES
(1, 'img/WpZ0Rl0cyC94ykIMCyAKDOhUtCksksrIFFOUkOMm.png', 'img/37jBRKjdsgltu7FjtZPAOjHLUFlZGYQMeo7yodhn.svg', 'img/rQ0XP2vQMPnWNZCrb6lp3XoFBo7dvBpE3enxsjuG.svg', '{\"zh\":null}', NULL, '{\"es\":\"<p>Frigor\\u00edfico vh cuenta con una Planta 35.000 M2<\\/p>\",\"zh\":\"<p>Frigor\\u00edficovh\\u64c1\\u670935,000 m2\\u7684\\u5de5\\u5ee0<\\/p>\"}', '{\"es\":\"<p>Frigor\\u00edfico vh cuenta con Corrales 1200 M2<\\/p>\",\"zh\":\"<p>Vh\\u51b0\\u7bb1\\u6709Corrales 1200 M2<\\/p>\"}', '{\"es\":\"<p>Capacidad de faena por d\\u00eda 700 animales<\\/p>\",\"zh\":\"<p>\\u6bcf\\u5929\\u5c60\\u5bb0\\u91cf700\\u53ea<\\/p>\"}', '{\"es\":\"<p>Capacidad de almacenaje enfriado y congelado 300 tons<\\/p>\",\"zh\":\"<p>\\u51b7\\u85cf\\u548c\\u51b7\\u51cd\\u5eab\\u5bb9\\u91cf300\\u5678<\\/p>\"}', 'img/qiBxfxYYSZww9KQZSDfoE1YORoCxdKDhUpI0b6Rn.png', '{\"es\":\"\\\"\\u00daltima generaci\\u00f3n en la producci\\u00f3n de carnes\\\"\",\"zh\":\"\\u201c\\u8089\\u985e\\u751f\\u7522\\u4e2d\\u7684\\u6700\\u65b0\\u4e00\\u4ee3\\u201d\"}', '{\"es\":\"<p>Equipos de \\u00faltima generaci\\u00f3n para los procesos de congelado, enfriado y envasado al vac\\u00edo<\\/p>\",\"zh\":\"<p>\\u7528\\u65bc\\u51b7\\u51cd\\uff0c\\u51b7\\u537b\\u548c\\u771f\\u7a7a\\u5305\\u88dd\\u904e\\u7a0b\\u7684\\u6700\\u65b0\\u4e00\\u4ee3\\u8a2d\\u5099<\\/p>\"}', 'img/ZcfgFpqCkyuzbHrbLx7dZCATRtKMjDrYFUqChm8j.png', '{\"es\":\"<p>El procesamiento de la carne es otro factor determinante de la calidad final. En este sentido, FRIGORIFICO HV S A es una empresa familiar, con la experiencia de 3 generaciones en la industria de la carne.<\\/p>\",\"zh\":\"<p>\\u8089\\u7684\\u52a0\\u5de5\\u662f\\u6700\\u7d42\\u54c1\\u8cea\\u7684\\u53e6\\u4e00\\u500b\\u6c7a\\u5b9a\\u56e0\\u7d20\\u3002\\u5f9e\\u9019\\u500b\\u610f\\u7fa9\\u4e0a\\u8b1b\\uff0cFRIGORIFICO HV S A\\u662f\\u4e00\\u5bb6\\u5bb6\\u65cf\\u4f01\\u696d\\uff0c\\u5728\\u8089\\u985e\\u884c\\u696d\\u64c1\\u67093\\u4ee3\\u7684\\u7d93\\u9a57<\\/p>\"}', '{\"es\":\"<p>El procesamiento de la carne es otro factor determinante de la calidad final. En este sentido, FRIGORIFICO HV S A es una empresa familiar, con la experiencia de 3 generaciones en la industria de la carne.<\\/p>\",\"zh\":\"<p>\\u8089\\u7684\\u52a0\\u5de5\\u662f\\u6700\\u7d42\\u54c1\\u8cea\\u7684\\u53e6\\u4e00\\u500b\\u6c7a\\u5b9a\\u56e0\\u7d20\\u3002\\u5f9e\\u9019\\u500b\\u610f\\u7fa9\\u4e0a\\u8b1b\\uff0cFRIGORIFICO HV S A\\u662f\\u4e00\\u5bb6\\u5bb6\\u65cf\\u4f01\\u696d\\uff0c\\u5728\\u8089\\u985e\\u884c\\u696d\\u64c1\\u67093\\u4ee3\\u7684\\u7d93\\u9a57<\\/p>\"}', '{\"es\":\"<p>Visi\\u00f3n<\\/p><p>Liderar e innovar la industria de carne vacuna superando las expectativas de nuestros clientes fortaleciendo y respetando nuestro equipo de trabajo<\\/p>\",\"zh\":\"<p>\\u8996\\u5716<\\/p><p>&nbsp;\\u9818\\u5c0e\\u548c\\u5275\\u65b0\\u725b\\u8089\\u884c\\u696d\\uff0c\\u8d85\\u8d8a\\u5ba2\\u6236\\u7684\\u671f\\u671b\\uff0c\\u52a0\\u5f37\\u548c\\u5c0a\\u91cd\\u6211\\u5011\\u7684\\u5de5\\u4f5c\\u5718\\u968a<\\/p>\"}', '{\"es\":\"<p>Misi\\u00f3n<\\/p><p>Desarrollar y ofrecer productos de carne vacuna nutritivos, saludables y de alta calidad con un compromiso sostenible en todos nuestros procesos productivos.<\\/p>\",\"zh\":\"<p>\\u4efb\\u52d9<\\/p><p>\\u5728\\u6211\\u5011\\u7684\\u6240\\u6709\\u751f\\u7522\\u904e\\u7a0b\\u4e2d\\uff0c\\u4ee5\\u53ef\\u6301\\u7e8c\\u7684\\u627f\\u8afe\\u958b\\u767c\\u4e26\\u63d0\\u4f9b\\u71df\\u990a\\uff0c\\u5065\\u5eb7\\u548c\\u9ad8\\u8cea\\u91cf\\u7684\\u725b\\u8089\\u7522\\u54c1<\\/p>\"}', '{\"es\":\"<p>Nuestro Compromiso<\\/p><p>Honestidad, integridad, respeto, responsabilidad y dedicaci\\u00f3n a la excelencia. Desarrollar y ofrecer productos de carne vacuna nutritivos<\\/p>\",\"zh\":\"<p>\\u6211\\u5011\\u7684\\u627f\\u8afe<\\/p><p>\\u8aa0\\u5be6\\uff0c\\u6b63\\u76f4\\uff0c\\u5c0a\\u91cd\\uff0c\\u8cac\\u4efb\\u611f\\u548c\\u8ffd\\u6c42\\u5353\\u8d8a\\u3002\\u958b\\u767c\\u4e26\\u63d0\\u4f9b\\u71df\\u990a\\u725b\\u8089\\u7522\\u54c1<\\/p>\"}', '{\"es\":\"<p>Recursos Humanos<\\/p><p>Desarrollar y ofrecer productos de carne vacuna nutritivos, saludables y de alta calidad con un compromiso sostenible en todos nuestros procesos productivos.<\\/p>\",\"zh\":\"<p>\\u4eba\\u529b\\u8cc7\\u6e90<\\/p><p>\\u5728\\u6211\\u5011\\u7684\\u6240\\u6709\\u751f\\u7522\\u904e\\u7a0b\\u4e2d\\uff0c\\u4ee5\\u53ef\\u6301\\u7e8c\\u7684\\u627f\\u8afe\\u958b\\u767c\\u4e26\\u63d0\\u4f9b\\u71df\\u990a\\uff0c\\u5065\\u5eb7\\u548c\\u9ad8\\u8cea\\u91cf\\u7684\\u725b\\u8089\\u7522\\u54c1<\\/p>\"}', 'img/Od68TrXuGwjLAStRNe2apctiQdN3j3teP0aRPJEA.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursos_humanos`
--

CREATE TABLE `recursos_humanos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pais` int(11) NOT NULL,
  `nacionalidad` varchar(255) NOT NULL,
  `dni` varchar(255) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `foto` text NOT NULL,
  `curriculum` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `recursos_humanos`
--

INSERT INTO `recursos_humanos` (`id`, `nombre`, `apellido`, `telefono`, `email`, `pais`, `nacionalidad`, `dni`, `fecha_nacimiento`, `foto`, `curriculum`) VALUES
(3, 'Juan', 'Mendoza', '123', 'me@gmail.com', 12, '', '12345656', '1988-12-19', 'img/XnzYOBb7Bs4zb2sQeMqQFAnt8FDt6DUCJcOeRz6f.png', 'img/LW4oEtP3YuFOpKjloN8Dt67A2Kv5gPBkN2saKB07.png'),
(4, 'Juan', 'Mendoza', '123', 'me@gmail.com', 12, '', '12345656', '1988-12-19', 'img/Pt2DunXIvrRoCazKN1idLeU79SY4Peio7RalsYYM.png', 'img/EyaYAZEUZpUaeJk9Ca36dA6aKbyyPEJ9hAhllHMi.png'),
(5, 'Juan', 'Mendoza', '04169628553', 'mendozajuan007@gmail.com', 196, '', '18758704', '1988-12-19', 'img/Dqwe2FKb40QmCpzVcquUoAV6mNfU8qcgEf83konV.png', 'img/oMX0GJ5pq1y6x6Pagb43ar7knCDEfVq44NkfwhNs.png'),
(6, 'Nombre', 'Apellido', '04169628553', 'men@gmail', 196, 'VENEZOLANA', '18758704', '1988-12-19', 'img/QGXRO7OG4LghYSYgGVxysdKjDyJvHTt05pJZ5tiI.png', 'doc/Nb4firMu6nueF4s9k9FMK0hUOlVYMJZ7WWPs0327.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes_sociales`
--

CREATE TABLE `redes_sociales` (
  `id` int(11) NOT NULL,
  `linkedin` text NOT NULL,
  `instagram` text NOT NULL,
  `facebook` text NOT NULL,
  `youtube` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `id` int(11) NOT NULL,
  `seccion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `contacto_footer`
--
ALTER TABLE `contacto_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `corte`
--
ALTER TABLE `corte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `etiquetado_corte`
--
ALTER TABLE `etiquetado_corte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT de la tabla `logotipo`
--
ALTER TABLE `logotipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `nacionalidad`
--
ALTER TABLE `nacionalidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

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
-- AUTO_INCREMENT de la tabla `recursos_humanos`
--
ALTER TABLE `recursos_humanos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `redes_sociales`
--
ALTER TABLE `redes_sociales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- Filtros para la tabla `recursos_humanos`
--
ALTER TABLE `recursos_humanos`
  ADD CONSTRAINT `recursos_humanos_ibfk_1` FOREIGN KEY (`pais`) REFERENCES `nacionalidad` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
