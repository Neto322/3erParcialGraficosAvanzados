-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2021 a las 05:45:44
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colonias`
--

CREATE TABLE `colonias` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(128) NOT NULL,
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `colonias`
--

INSERT INTO `colonias` (`id`, `nombre`, `updated_at`, `created_at`) VALUES
(2, 'Mira valle3', '2021-05-08 08:15:56', '2021-05-08 07:55:14'),
(3, '', '2021-05-08 07:55:58', '2021-05-08 14:55:58'),
(4, '', '2021-05-08 07:56:06', '2021-05-08 14:56:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_18_035335_add_user_type', 2),
(5, '2021_04_18_041158_remove_columns', 3),
(6, '2021_04_18_041856_add_colunms', 4),
(7, '2021_04_18_184152_remove_colunm', 5),
(8, '2021_04_18_211805_add_boolean', 6),
(9, '2021_04_19_000148_add_columns', 7),
(11, '2021_05_01_021713_create_organizations_table', 8),
(12, '2021_05_01_021950_add_fields', 9),
(13, '2021_04_24_063116_create_tags_table', 10),
(14, '2021_05_04_160216_add_fields_osc', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizations`
--

CREATE TABLE `organizations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `objetosocial` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `presidente` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `represetantelegal` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `director` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domicilio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colonia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sitioweb` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activo` int(11) NOT NULL DEFAULT 1,
  `comentario_baja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comentario` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_vigencia` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `organizations`
--

INSERT INTO `organizations` (`id`, `created_at`, `updated_at`, `nombre`, `objetosocial`, `presidente`, `represetantelegal`, `director`, `domicilio`, `colonia`, `telefono`, `email`, `sitioweb`, `facebook`, `instagram`, `twitter`, `activo`, `comentario_baja`, `comentario`, `fecha_vigencia`) VALUES
(6, '2021-05-01 13:26:31', '2021-05-20 13:51:02', 'Abuelos Contentos Club Adultos Mayores A.C.', 'Promover ayuda y asistencia social a persona de la tercera edad.', 'José Adalberto Gaxiola Mendivil', 'José Adalberto Gaxiola Mendivil', 'Ramón Rafael Salazar Mendez', 'Privada #17 5027 Ejido Toribio Velazquez, Zona Urbana Luis Echeverria.', 'Zona urbana', '6444440569', 'yotambienpued2010@hotmail.com', NULL, NULL, NULL, NULL, 1, NULL, '', '2021-05-04'),
(7, '2021-05-01 13:37:33', '2021-05-01 13:37:33', 'Agrupación de Fibrosis Quística del Noroeste, IAP', 'La asistencia y rehabilitación médica sin fines de lucro en beneficio de pacientes de escasos recursos que padecen Fibrosis Quistica.', 'Lic. Carmen Yolanda Avilés Castro', 'Lic. Carmen Yolanda Avilés Castro', 'Jacqueline Inclan de la Vega', 'Durango # 310 Nte. Col. Zona Norte', 'Zona Norte', '01 (644) 414 23 88', 'afq_noroeste@hotmail.com', 'www.afqnoroeste.org.mx', '@FibrosisQuisticaNoroeste', NULL, NULL, 1, NULL, '', '2021-04-07'),
(8, '2021-05-01 13:45:00', '2021-05-21 08:02:12', 'Agrupación George Papanicolaou de Cd. Obregón, A.C.', 'Prevenir y Detectar el cáncer Cervicouterino, de mama y de próstata.', 'Virginia Gracia Rosas', NULL, 'Miriam Zuleth Villareal Iribe', 'Coahuila # 632 Sur entre Jesús García y Niños Héroes', 'Centro', '01 (644) 414 89 58', 'gpapanicolaouobr@hotmail.com', 'www.agpobregon.com', 'facebook', 'instagram', 'twitter', 0, NULL, '', '2021-05-31'),
(9, '2021-05-01 13:47:04', '2021-05-01 13:47:04', 'APFA Comprometidos y Unidos por el progreso en la Educación de Sonora AC', 'Brindar atención a niños, jovenes y adolescentes a través de la orientacións social, educación o capacitación para el trabajo, la promoción de la participación organizada de la población en las acciones que mejoren sus propias condiciones de susbsistencia en beneficio de la comunidad, a través del diseño y desarrollo de programas y proyectos de desarrollo educativos, culturales y sociales.', 'Arturo Rodríguez', 'Arturo Rodríguez', 'Arturo Rodríguez', 'Hermanos Talamante #149 Pte. Col. Campesrte', 'Campestre', 'Cel. (044) 644 218 58 01', 'arturo_baron33@hotmail.com', NULL, NULL, NULL, NULL, 1, NULL, '', '2021-05-11'),
(10, '2021-05-01 13:49:24', '2021-05-01 13:50:55', 'Asociación de Mujeres Profesionistas de Cd. Obregón, A.C.', 'Organización, sostenimiento y cuidado de un centro donde se proporcione alimentación, asistencia médica y alojamiento sin fines de lucro a personas de escasos recursos que así lo requieran.', 'Rebeca Terán Tineo', 'Rebeca Terán Tineo', 'Elizabeth Arias Verdugo', 'Ignacio Zaragoza S/n San José de Bacum Sonora.', 'San Jose', '(044) 149 01 45', 'asilomadreteresabacum@hotmail.com', NULL, '@asiloteresabacum', NULL, NULL, 0, NULL, '', '2021-05-10'),
(11, '2021-05-01 13:50:43', '2021-05-01 13:50:43', 'Asociación de Mujeres Profesionistas de Cd. Obregón, A.C.', 'Prestar atención de guardería', 'Lic. Maria Luisa Molina Iñiguez', 'Lic. Maria Luisa Molina Iñiguez', 'Lic. Maria Luisa Molina Iñiguez', 'Calle Puebla 620 Sur entre Niños Heroes y Jesus Garcial.', 'Centro', '(644) 414 87 07', 'ampcob@gmail.com', 'Facebook: ampco Ac', NULL, NULL, NULL, 1, NULL, '', '2021-05-01'),
(12, '2021-05-01 13:52:31', '2021-05-01 13:52:31', 'Asociación de Profesionistas de la Salud en Ciudad Obregón, I.A.P.', 'Oganizar jornadas médico quirurgicas gratuitas de asistencia social, dirigidas a las clases marginadas de la población rural del estado de sonora, aprovechando para tal fin los recursos humanos de la asociación (Médicos, Dentistas, Químicos, y Representantes de la Industria Farmacéutica.', 'Dr. Armando Barreda Pesqueira', 'Dr. Armando Barreda Pesqueira', 'Dr. Armando Barreda Pesqueira', 'Veracruz Núm 621 - 7-A, Col. Zona Norte, C.P. 85010, Cajeme, Sonora', 'Zona norte', '(644) 415 15 18', 'barrerapar@hotmail.com', NULL, NULL, NULL, NULL, 1, NULL, '', '2021-05-03'),
(13, '2021-05-01 13:54:03', '2021-05-01 13:54:12', 'Asociación Fray Julio César, A.C.', '----', 'Ing. Uriel Mendoza Acuña', NULL, 'Elia Mendoza de Clayton', 'Flavio Bórquez 1613 Col. Prados del Tepeyac', 'Prados de tepeyac', NULL, 'ely@cabsaconsultorias.com', NULL, NULL, NULL, NULL, 0, NULL, '', '2021-05-14'),
(15, '2021-05-20 10:00:38', '2021-05-20 10:04:36', 'tata', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 1, NULL, NULL, '2021-05-18'),
(16, '2021-05-20 11:32:42', '2021-05-20 11:32:42', 'crop-top', 't', 't', 't', 't', 't', 't', '6441498824', 'sofi@sofi.sofi', 't', NULL, NULL, NULL, 1, NULL, NULL, '2021-05-21'),
(17, '2021-05-20 11:33:26', '2021-05-20 11:33:26', 'crop-top', 't', 't', 't', 't', 't', 't', '6441498824', 'sofi@sofi.sofi', 't', NULL, NULL, NULL, 1, NULL, NULL, '2021-05-21'),
(18, '2021-05-20 13:27:59', '2021-05-20 13:30:17', 'jk', 'k', 'k', 'kk', 'k', 'k', 'k', 'k', 'kinato03@hotmail.com', 'k', 'k', 'k', 'k', 1, NULL, NULL, '2021-04-28'),
(19, '2021-05-20 13:36:56', '2021-05-20 13:36:56', 'Minneth', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 1, NULL, NULL, '2021-05-20'),
(20, '2021-05-20 14:05:44', '2021-05-20 14:05:44', 'Porfis', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'arturo@correo.com', 'a', 'a', 'a', 'a', 1, NULL, NULL, '2021-05-05'),
(21, '2021-05-20 14:18:47', '2021-05-20 14:18:47', 'Porfis', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 'l', 1, NULL, NULL, '2021-04-26'),
(22, '2021-05-20 14:20:36', '2021-05-20 14:20:36', 'WEYYA', 'a', 'k', 'k', 'k', 'k', 'l', 'k', 'k', 'k', 'k', 'k', 'k', 1, NULL, NULL, '2021-04-30'),
(23, '2021-05-20 15:08:43', '2021-05-20 15:08:43', 'Porfis', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 1, NULL, NULL, '2021-05-04'),
(24, '2021-05-20 15:10:12', '2021-05-20 15:10:12', 'Porfis', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 1, NULL, NULL, '2021-05-04'),
(25, '2021-05-20 15:13:08', '2021-05-20 15:13:08', 'Porfis', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 1, 'p', NULL, '2021-05-26'),
(26, '2021-05-20 15:18:55', '2021-05-20 15:18:55', 'Porfis', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 1, NULL, NULL, '2021-05-26'),
(27, '2021-05-20 15:20:01', '2021-05-20 15:20:01', 'oppopo', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 1, NULL, NULL, '2021-04-26'),
(28, '2021-05-20 15:23:06', '2021-05-20 15:23:06', 'PO RFA VOR', 'H', 'H', 'H', 'H', 'H', 'h', 'H', 'H', 'H', 'H', 'H', 'H', 1, NULL, NULL, '2021-05-10'),
(29, '2021-05-20 15:46:10', '2021-05-21 10:36:24', 'Komo', '0', '0', NULL, '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, NULL, NULL, '2021-05-09'),
(30, '2021-05-21 07:36:06', '2021-05-21 07:36:06', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', NULL, 1, NULL, NULL, '2021-05-28'),
(31, '2021-05-21 10:37:14', '2021-05-21 10:37:14', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 1, NULL, NULL, '2021-05-11'),
(32, '2021-05-21 10:43:45', '2021-05-21 10:43:45', 'aAaAA', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 1, NULL, NULL, '2021-05-27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oscs`
--

CREATE TABLE `oscs` (
  `id` int(10) NOT NULL,
  `id_organizacion` int(11) DEFAULT NULL,
  `nombre` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Nombre',
  `oficina` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `oscs`
--

INSERT INTO `oscs` (`id`, `id_organizacion`, `nombre`, `oficina`, `celular`, `correo`, `created_at`, `updated_at`) VALUES
(7, NULL, '', NULL, NULL, NULL, '2021-05-01 05:52:58', '2021-05-01 05:52:58'),
(9, NULL, 'Nombre', NULL, NULL, NULL, '2021-05-01 05:53:09', '2021-05-01 05:53:09'),
(11, NULL, 'Nombre', NULL, NULL, NULL, '2021-05-01 05:53:26', '2021-05-01 05:53:26'),
(13, NULL, 'Nombre', NULL, NULL, NULL, '2021-05-01 05:54:21', '2021-05-01 05:54:21'),
(15, NULL, 'Nombre', NULL, NULL, NULL, '2021-05-01 05:54:33', '2021-05-01 05:54:33'),
(17, NULL, 'Nombre', NULL, NULL, NULL, '2021-05-01 05:57:36', '2021-05-01 05:57:36'),
(20, NULL, 'Nombre', NULL, NULL, NULL, '2021-05-01 05:58:12', '2021-05-01 05:58:12'),
(22, NULL, 'Nombre', NULL, NULL, NULL, '2021-05-01 05:58:31', '2021-05-01 05:58:31'),
(24, NULL, 'Nombre', NULL, NULL, NULL, '2021-05-01 05:58:48', '2021-05-01 05:58:48'),
(27, NULL, 'Nombre', NULL, NULL, NULL, '2021-05-01 06:03:00', '2021-05-01 06:03:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE `tags` (
  `id` int(20) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tags`
--

INSERT INTO `tags` (`id`, `descripcion`, `created_at`, `updated_at`) VALUES
(8, 'Animales', '2021-05-20 13:18:52', '2021-05-20 13:18:52'),
(9, 'Libros', '2021-05-20 13:19:00', '2021-05-20 13:19:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags_organizacion`
--

CREATE TABLE `tags_organizacion` (
  `id` int(20) NOT NULL,
  `id_tag` int(20) NOT NULL,
  `id_organizacion` bigint(20) UNSIGNED NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tags_organizacion`
--

INSERT INTO `tags_organizacion` (`id`, `id_tag`, `id_organizacion`, `updated_at`, `created_at`) VALUES
(1, 9, 1, '2021-05-20 08:18:55', '2021-05-20 08:18:55'),
(2, 9, 2, '2021-05-20 08:20:01', '2021-05-20 08:20:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_usuario`
--

CREATE TABLE `tipos_usuario` (
  `id` int(2) NOT NULL,
  `descripcion` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipos_usuario`
--

INSERT INTO `tipos_usuario` (`id`, `descripcion`) VALUES
(1, 'administrador'),
(2, 'editor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'aaaaaaa',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_tipo_usuario` int(11) NOT NULL DEFAULT 2,
  `activo` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `id_tipo_usuario`, `activo`) VALUES
(1, 'David', 'arturo@correo.com', NULL, '$2y$10$SqavYKYDHQcIbzx1JLLVneOPkPvRSf3tKGcvpAUulM6bLkiebVg3q', NULL, '2021-04-17 11:54:53', '2021-04-30 13:34:17', 2, 1),
(2, 'sada', 'sadsa@correo.com', NULL, '$2y$10$UekQopVeg4Hze3D6aAuHDu1IPdKuPMtrxdW9E90l8MqdTi7UWVD6O', NULL, '2021-04-18 05:17:46', '2021-04-23 16:37:26', 2, 1),
(3, 'as', 'as@correco.com', NULL, '$2y$10$MdvG9FglK5oDwPEHwHpdmemsbt33rw08uqiL.OxrDRj7p3uDOn5Q.', NULL, '2021-04-18 08:04:51', '2021-04-23 16:37:29', 2, 1),
(5, 'Ernesto admin', 'asr@go.com', NULL, '$2y$10$EkyFS6qeLJJzKkeAowl3MepX1UFacyl7uz7H/dhWkwOCRgezo6FZu', NULL, '2021-04-18 11:42:46', '2021-04-23 16:37:33', 2, 1),
(28, 'José', 'jose@correo.com', NULL, '123456789', NULL, '2021-04-30 13:39:51', '2021-04-30 13:39:51', 1, 1),
(29, 'Maria', 'maria@correo.com', NULL, '123456789', NULL, '2021-04-30 13:41:45', '2021-04-30 13:41:45', 1, 1),
(30, 'prueba', 'prueba@correo.com', NULL, '123456789', NULL, '2021-04-30 13:59:36', '2021-04-30 13:59:36', 1, 1),
(31, 'a', 'a', NULL, '123456789', NULL, '2021-04-30 14:03:11', '2021-04-30 14:03:11', 1, 1),
(32, 'Pepe', 'pepe@correo.com', NULL, '123456789', NULL, '2021-04-30 14:05:27', '2021-04-30 14:05:27', 1, 1),
(33, 'quepe', 'quepe@correo.com', NULL, '123456789', NULL, '2021-04-30 14:14:40', '2021-04-30 14:14:40', 1, 1),
(34, 'wue', 'wue@correo.com', NULL, '123456789', NULL, '2021-04-30 14:16:18', '2021-04-30 14:16:18', 1, 1),
(35, 'Emiliano', 'emiliano@correo.com', NULL, '123456789', NULL, '2021-04-30 14:26:40', '2021-04-30 14:26:40', 1, 1),
(36, 'romina', 'romina@correo.com', NULL, '123456789', NULL, '2021-04-30 14:28:07', '2021-04-30 14:28:07', 1, 1),
(37, 'Ernesto Alvarado', 'asddasdasdadawdawdaw@hotmail.com', NULL, '$2y$10$rD9j47FonntgfE3uKxHnxOij82d2OmD7ifFKZFNKfjYBKCQg6VKp6', NULL, '2021-05-01 05:26:45', '2021-05-01 05:26:45', 2, 1),
(38, 'Karla Jaime', 'carlyc_98@hotmail.com', NULL, '$2y$10$KcPfXj8IstFdfc6LyuEAtusc5cKkIvwd3RNn74/HLpLtMkGgtocIO', NULL, '2021-05-01 05:41:27', '2021-05-01 05:41:27', 2, 1),
(39, 'uSUARIO CREADO', 'usuario@creado.com', NULL, '$2y$10$76SvGx0aF3x4Ao2H5OG/yuzobnimolJ4g9owa1aKtx.AHwtWib1Su', NULL, '2021-05-04 08:34:53', '2021-05-04 08:34:53', 2, 1),
(40, 'lizbeth', 'lizbeth@correo.com', NULL, '$2y$10$An6MO.25PpqqHM7Kna/mJOCghnuNGt5qKNeJMQ960er7qzSHr5re2', NULL, '2021-05-08 14:52:09', '2021-05-08 14:52:09', 2, 1),
(41, 'Rubén', 'ruben@correo.com', NULL, '$2y$10$A2Eo5T.KXtJq0JU8V4bggeYeyoKFIV9ZzXkD6iMuzR4JbT8lKPIqG', NULL, '2021-05-20 09:11:01', '2021-05-20 09:11:01', 2, 1),
(42, 'sofi', 'sofi@sofi.sofi', NULL, '$2y$10$t.Tldg6QGJvt13mAKHkV1e1AlEuHi3DUQY1EZnvkpwyIH9V4TYlUi', NULL, '2021-05-20 10:36:28', '2021-05-20 10:36:28', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vigencias`
--

CREATE TABLE `vigencias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_organizacion` bigint(20) UNSIGNED NOT NULL,
  `fecha_verificacion` date NOT NULL,
  `comentario` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `colonias`
--
ALTER TABLE `colonias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `oscs`
--
ALTER TABLE `oscs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tags_organizacion`
--
ALTER TABLE `tags_organizacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipos_usuario`
--
ALTER TABLE `tipos_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `TipoUsuario` (`id_tipo_usuario`);

--
-- Indices de la tabla `vigencias`
--
ALTER TABLE `vigencias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `colonias`
--
ALTER TABLE `colonias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `oscs`
--
ALTER TABLE `oscs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tags_organizacion`
--
ALTER TABLE `tags_organizacion`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipos_usuario`
--
ALTER TABLE `tipos_usuario`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `vigencias`
--
ALTER TABLE `vigencias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
