-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2021 a las 10:08:17
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

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
(9, '2021_04_19_000148_add_columns', 7),
(10, '2021_04_24_063116_create_tags_table', 8);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'David', 'arturo@correo.com', NULL, '$2y$10$SqavYKYDHQcIbzx1JLLVneOPkPvRSf3tKGcvpAUulM6bLkiebVg3q', NULL, '2021-04-17 11:54:53', '2021-04-24 11:54:37', 2, 0),
(2, 'sadas', 'sadsa@correo.com', NULL, '$2y$10$gc8tQ8tCz1rLtcElIM9REubL1koKqGw1.cV6dZwulRgcpTQXXSeL.', NULL, '2021-04-18 05:17:46', '2021-04-24 05:50:45', 2, 0),
(3, 'as', 'as@correco.com', NULL, '$2y$10$MdvG9FglK5oDwPEHwHpdmemsbt33rw08uqiL.OxrDRj7p3uDOn5Q.', NULL, '2021-04-18 08:04:51', '2021-04-18 08:04:51', 2, 1),
(5, 'Ernesto admin', 'asr@go.com', NULL, '$2y$10$EkyFS6qeLJJzKkeAowl3MepX1UFacyl7uz7H/dhWkwOCRgezo6FZu', NULL, '2021-04-18 11:42:46', '2021-04-18 11:42:46', 2, 1),
(28, 'Ernerdst sdsd', 'manuelsdsd123317@hotmail.com', NULL, '$2y$10$7JU4C0fDdwykuZ07dM0RI.Pbc5piIaO1fO3pE3TNVyP0L4QHwLczW', NULL, '2021-04-19 13:55:32', '2021-04-19 13:55:32', 2, 1),
(29, 'wdwdwdwdwdw', 'sssssdsdadsa@correo.com', NULL, '$2y$10$emvim7OxsMKc1.pt7KUjmO4Yfh1stQvbbA8hZo15bqx0XP6Enh4yi', NULL, '2021-04-20 07:30:25', '2021-04-20 07:30:25', 2, 1),
(30, 'dddddddddd', 'manfefefefefuel123317@hotmail.com', NULL, '$2y$10$v0vXAkvX75sbzcwWHgg4TOt8v4.pkykN7BjpaTiLDVfJQ6tOsQyhK', NULL, '2021-04-20 12:03:22', '2021-04-20 12:03:22', 2, 1),
(31, 'Hola soi ernesto', 'holasoierensto@soiernesto.com', NULL, '$2y$10$amtsmCsS8mifyhSF3cYDoOqmTtDg/VVa1FmDtbeKQNC6lt5yO4Rke', NULL, '2021-04-21 00:14:43', '2021-04-21 00:14:43', 2, 1),
(32, 'sadassssss', 'sadssdsa@correo.com', NULL, '$2y$10$uhkNs1FbEs41mR5sjUlYteLauoM06xS6jRt/ojtqaFPKg1KM6zxFK', NULL, '2021-04-21 00:32:30', '2021-04-21 00:32:30', 2, 1),
(33, 'proandio equisdeeeeeeeee', 'adfdfdaaa@correco.com', NULL, '$2y$10$nqCPKdlZ0OAjxcgKMjqq/uuB8F6uooqFl4Npp89iIFV6h/ixjLxCW', NULL, '2021-04-21 00:33:09', '2021-04-21 00:33:09', 2, 1),
(34, 'Aaaaaaaaaaaa', 'aaaa@correco.com', NULL, '$2y$10$Q1tVtit.A1CMLJppMI3BUe9qv95cBYr2L4u9fJq.jM1f7gPhQ2cBq', NULL, '2021-04-23 06:32:26', '2021-04-23 06:32:26', 2, 1),
(35, 'HolaSoiAdmin', 'dfdfd@hotmail.com', NULL, '$2y$10$GSGp1A9bpE3VZjiH3mc.VOi4cGFFATYY.xNIaGwixwKTHUsn4zUvW', NULL, '2021-04-23 07:29:32', '2021-04-23 07:29:32', 2, 1),
(36, 'uSUARIO CREADO', 'usuario@creado.com', NULL, '$2y$10$YFijRUXZwf.Ks73GVP4t.uBmj0MGEzCKQx4dUT4kzCQlE4Ufbtj6K', NULL, '2021-04-24 06:44:56', '2021-04-24 06:44:56', 2, 1),
(37, 'Ernerdst efsefssssssssssssssss', 'manuel123317@hotmail.com', NULL, 'Ernerdst efsefssssss', NULL, '2021-04-24 07:31:08', '2021-04-24 07:31:08', 1, 1),
(38, 'prueba', 'a', NULL, 'asd', NULL, '2021-04-24 07:31:21', '2021-04-24 07:31:21', 1, 1),
(41, 'Ernerdst efsefssssssssssssssssss', 'manuel1sdsdsd23317@hotmail.com', NULL, 'Ernerdst efsefssssssssssssssssss', NULL, '2021-04-24 07:32:34', '2021-04-24 07:32:34', 1, 1);

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
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipos_usuario`
--
ALTER TABLE `tipos_usuario`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `TipoUsuario` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipos_usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
