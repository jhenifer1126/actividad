-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-07-2023 a las 03:02:43
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adsi_206`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `estado`, `created_at`, `updated_at`, `file`) VALUES
(4, 'vestido', 'vestidos cortos de la mejor calidad', 0, '2023-06-10 04:26:31', '2023-06-20 00:14:04', ''),
(5, 'Inflables', 'los mejores inflables', 1, '2023-06-20 00:14:36', '2023-06-20 00:14:44', 'img\\infa.jpg'),
(6, 'Brinca Brinca', 'los mejores brinca brinca del mercado', 1, '2023-06-20 04:58:05', '2023-06-20 04:58:05', 'img\\brinca.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(29, '2014_10_12_000000_create_users_table', 1),
(30, '2014_10_12_100000_create_password_resets_table', 1),
(31, '2019_08_19_000000_create_failed_jobs_table', 1),
(32, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(5, 'App\\Models\\User', 1),
(6, 'App\\Models\\User', 2),
(6, 'App\\Models\\User', 3),
(6, 'App\\Models\\User', 4),
(6, 'App\\Models\\User', 5),
(6, 'App\\Models\\User', 6),
(6, 'App\\Models\\User', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(31, 'home', 'web', '2023-06-21 02:38:15', '2023-06-21 02:38:15'),
(32, 'productos.index', 'web', '2023-06-21 02:38:15', '2023-06-21 02:38:15'),
(33, 'productos.create', 'web', '2023-06-21 02:38:15', '2023-06-21 02:38:15'),
(34, 'productos.edit', 'web', '2023-06-21 02:38:15', '2023-06-21 02:38:15'),
(35, 'productos.destroy', 'web', '2023-06-21 02:38:15', '2023-06-21 02:38:15'),
(36, 'categoria.index', 'web', '2023-06-21 02:38:15', '2023-06-21 02:38:15'),
(37, 'categoria.create', 'web', '2023-06-21 02:38:15', '2023-06-21 02:38:15'),
(38, 'categoria.edit', 'web', '2023-06-21 02:38:15', '2023-06-21 02:38:15'),
(39, 'categoria.destroy', 'web', '2023-06-21 02:38:15', '2023-06-21 02:38:15'),
(40, 'subcategoria.index', 'web', '2023-06-21 02:38:15', '2023-06-21 02:38:15'),
(41, 'subcategoria.create', 'web', '2023-06-21 02:38:15', '2023-06-21 02:38:15'),
(42, 'subcategoria.edit', 'web', '2023-06-21 02:38:15', '2023-06-21 02:38:15'),
(43, 'subcategoria.destroy', 'web', '2023-06-21 02:38:15', '2023-06-21 02:38:15'),
(44, 'user.index', 'web', '2023-06-21 02:38:15', '2023-06-21 02:38:15'),
(45, 'user.create', 'web', '2023-06-21 02:38:15', '2023-06-21 02:38:15'),
(46, 'user.edit', 'web', '2023-06-21 02:38:15', '2023-06-21 02:38:15'),
(47, 'user.destroy', 'web', '2023-06-21 02:38:15', '2023-06-21 02:38:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `cantidadl` int(11) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `subcategorias_id` int(11) NOT NULL,
  `categorias_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `cantidadl`, `estado`, `updated_at`, `created_at`, `subcategorias_id`, `categorias_id`, `file`) VALUES
(12, 'vestido flores', 20000, 5, 0, '2023-06-20 00:16:43', '2023-06-10 04:27:22', 5, 4, ''),
(13, 'princesa sofia', 50000, 5, 1, '2023-06-20 00:17:08', '2023-06-20 00:17:08', 6, 5, 'img\\princesasofia.jpg'),
(14, 'princesa elsa', 25000, 90, 1, '2023-06-20 00:17:25', '2023-06-20 00:17:25', 6, 5, 'img\\elsa.jpg'),
(15, 'mario bros', 58000, 80, 1, '2023-06-20 00:17:44', '2023-06-20 00:17:44', 8, 5, 'img\\mario.jpg'),
(16, 'sony', 40000, 8, 1, '2023-06-20 00:18:09', '2023-06-20 00:18:09', 8, 5, 'img\\inflable.jpg'),
(17, 'hombre araña', 60000, 7, 1, '2023-06-20 07:09:32', '2023-06-20 00:18:33', 7, 5, 'img\\spider.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(5, 'admin', 'web', '2023-06-21 02:38:15', '2023-06-21 02:38:15'),
(6, 'cliente', 'web', '2023-06-21 02:38:15', '2023-06-21 02:38:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(31, 5),
(31, 6),
(32, 5),
(32, 6),
(33, 5),
(34, 5),
(35, 5),
(36, 5),
(36, 6),
(37, 5),
(38, 5),
(39, 5),
(40, 5),
(40, 6),
(41, 5),
(42, 5),
(43, 5),
(44, 5),
(44, 6),
(45, 5),
(46, 5),
(47, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias`
--

CREATE TABLE `subcategorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `categorias_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `subcategorias`
--

INSERT INTO `subcategorias` (`id`, `nombre`, `descripcion`, `estado`, `created_at`, `updated_at`, `categorias_id`, `file`) VALUES
(5, 'tiras', 'muy lindos  y para toda ocasion', 0, '2023-06-10 04:27:00', '2023-06-20 00:14:53', 4, ''),
(6, 'inflables princesas', 'todas las princesas de disney', 1, '2023-06-20 00:15:31', '2023-06-20 00:15:31', 5, 'img\\princes.jpg'),
(7, 'inflables super heroes', 'todos los super heroes', 1, '2023-06-20 00:15:59', '2023-06-20 00:15:59', 5, 'img\\super.jpg'),
(8, 'inflables muñecos animados', 'todos los personajes de películas y series', 1, '2023-06-20 00:16:34', '2023-06-23 05:13:56', 5, 'img\\ani.jpg'),
(9, 'niños', 'brinca brinca infantiles', 1, '2023-06-20 04:58:38', '2023-06-23 05:18:03', 5, 'img\\niño.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `file`) VALUES
(1, 'jenny', 'jenny@gmail.com', NULL, '$2y$10$x2UcpE7zuu4//fFIky5aGulCHiNQRllR9iERdU28MXOmzgEssAObC', NULL, '2023-06-21 02:42:15', '2023-06-21 02:42:15', 'img\\testimonial-img-04.jpg'),
(2, 'mario', 'mario@gmail.com', NULL, '$2y$10$LdZmpmz8WAiOqrhxxzpn7.rgXBFVT.2cqYGqhnp5EQIcwKV/Dz9La', NULL, '2023-06-21 02:49:43', '2023-06-21 02:49:43', 'img\\testimonial-img-02.jpg'),
(3, 'sebastian', 'sebas@gmail.com', NULL, '$2y$10$uNqc32DDItDxya99qTdv8uWrFBKw.kG0C2lfxbWcgRIHrXBGBNOuO', NULL, '2023-06-21 02:54:14', '2023-06-21 02:54:14', 'img\\user8-128x128.jpg'),
(4, 'juan', 'juan@gmail.com', NULL, '$2y$10$zxWKtUImPOoCA7QMSCxXBO4HjOPUPNqTSUgQXTsasUj38DbaTxQQS', NULL, '2023-06-21 02:54:48', '2023-06-21 02:54:48', 'img\\user1-128x128.jpg'),
(5, 'maria', 'mary@gmail.com', NULL, '$2y$10$tAHxHY1MWqrn52rBgzz.aue/lTh//cMyAxX8Vhjt9EQv8GQJfp9mm', NULL, '2023-06-21 02:55:20', '2023-06-21 02:55:20', 'img\\testimonial-img-03.jpg'),
(6, 'sofia', 'sofi@gmail.com', NULL, '$2y$10$WEJXwHc.VDRx3eGlBYakOOTbBLI/yuTOPLAR/d7/ZtoBJBfNSbPeG', NULL, '2023-06-21 02:55:47', '2023-06-21 02:55:47', 'img\\testimonial-img-01.jpg'),
(7, 'manuel', 'manu@gmail.com', NULL, '$2y$10$ASvP4FvvaNyo67tBjp0.HOnffuLUWgr4n5V03B0Q1494kp3yY5Z0e', NULL, '2023-06-21 02:57:04', '2023-06-21 02:57:04', 'img\\user2-160x160.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
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
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_productos_subcategorias1_idx` (`subcategorias_id`),
  ADD KEY `fk_productos_categorias1_idx` (`categorias_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_subcategorias_categorias1_idx` (`categorias_id`);

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
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_productos_categorias1` FOREIGN KEY (`categorias_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_productos_subcategorias1` FOREIGN KEY (`subcategorias_id`) REFERENCES `subcategorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `subcategorias`
--
ALTER TABLE `subcategorias`
  ADD CONSTRAINT `fk_subcategorias_categorias1` FOREIGN KEY (`categorias_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
