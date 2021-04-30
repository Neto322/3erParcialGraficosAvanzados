-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-04-2021 a las 18:58:10
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
(9, '2021_04_19_000148_add_columns', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oscs`
--

CREATE TABLE `oscs` (
  `id` int(10) NOT NULL,
  `id_organizacion` int(11) NOT NULL,
  `nombre` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oficina` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `id` int(11) NOT NULL,
  `descripcion` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(36, 'romina', 'romina@correo.com', NULL, '123456789', NULL, '2021-04-30 14:28:07', '2021-04-30 14:28:07', 1, 1);

--
-- Índices para tablas volcadas
--

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
-- Indices de la tabla `oscs`
--
ALTER TABLE `oscs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_organizacion` (`id_organizacion`);

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `oscs`
--
ALTER TABLE `oscs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipos_usuario`
--
ALTER TABLE `tipos_usuario`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `oscs`
--
ALTER TABLE `oscs`
  ADD CONSTRAINT `FK_organizacion` FOREIGN KEY (`id_organizacion`) REFERENCES `oscs` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `TipoUsuario` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipos_usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
