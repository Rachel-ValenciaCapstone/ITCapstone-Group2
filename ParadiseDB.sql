-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 25, 2023 at 02:08 PM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21221412_aleine`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  `order_date` varchar(45) DEFAULT NULL,
  `total_amount` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `users_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_item_id` int(11) NOT NULL,
  `order_id` varchar(45) DEFAULT NULL,
  `product_id` varchar(45) DEFAULT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `subtotal` varchar(45) DEFAULT NULL,
  `orders_order_id` int(11) NOT NULL,
  `orders_users_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment methods`
--

CREATE TABLE `payment methods` (
  `payment_method_id` int(11) NOT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  `card_type` varchar(45) DEFAULT NULL,
  `card_number` varchar(45) DEFAULT NULL,
  `expiration_date` varchar(45) DEFAULT NULL,
  `billing_address` varchar(45) DEFAULT NULL,
  `users_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `stock_quantity` varchar(45) DEFAULT NULL,
  `manufacturer` varchar(45) DEFAULT NULL,
  `product_image` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `description`, `category`, `price`, `stock_quantity`, `manufacturer`, `product_image`) VALUES
(1, 'Kalour Professional Sketching Drawing Pencils ', 'Premium sharpened graphite pencils for drawing(5H, 4H, 3H, 2H,HB, B, 2B, 3B, 4B, 5B, 6B, 8B）.A wide variety of hardness for all your artwork needs.harder degrees for outlining (2B - 5H) and softer degrees for blending and layering (3B - 8B).Drawing Pencils enable creating lines of any thickness and color saturation.\r\n', NULL, '7.00', NULL, NULL, 'https://files.000webhost.com/handler.php?action=download?action=download&path=%2Fpublic_html%2Fwp-content%2Fuploads%2Fimages%2Fpencil%201.jpg'),
(2, 'ARTLINE Drawing System Set', 'Highly water resistant and fadeproof, point guard enables use against rulers and templates. Top-quality water-resistant, fadeproof, acid-free pigment ink with high colour density. Ideal for technical drawing, illustration and freehand graphic design.\r\n', NULL, '11.00', NULL, NULL, 'https://files.000webhost.com/handler.php?action=download?action=download&path=%2Fpublic_html%2Fwp-content%2Fuploads%2Fimages%2Fpen%201.jpg'),
(3, 'Acrylic Gouache Set - 6x59ml - Primaries', 'Meet Acrylic Gouache, the most highly pigmented of all our paints. This color set gives you endless mixing possibilities, while Titanium White and Mars Black can be used on their own or to tint and shade.', NULL, '75.00', NULL, NULL, ''),
(4, 'Blick Studio Oil Colors', 'Description: Great for mixing, this set includes larger, 40 ml (1.35 oz) tubes of Titanium White, Lemon Yellow, Cadmium Red Hue, Ultramarine Blue, Viridian Hue, Crimson Alizarin, Yellow Ochre, Burnt Sienna, Raw Umber, and Ivory Black.', NULL, '35.00', NULL, NULL, ''),
(5, 'Blick Palette Paper Pad', 'Disposable Palette Paper Pad, 18\" x 24\", 50 Sheets', NULL, '23.00', NULL, NULL, ''),
(6, 'Canson XL Pad', '7\" x 10\" mix media paper used for sketching, drawing, light washes of ink and watercolor, collage, journaling, and more.\r\n', NULL, '9.00', NULL, NULL, ''),
(7, 'Utrecht Natural Chungking Pure Bristle Brush', 'Utrecht Natural Chungking Pure Bristle Brush', NULL, '43.00', NULL, NULL, ''),
(8, 'Blick Painting Knife Set', 'Includes 001 Mini Trowel, 019 Mini Oval, 020 Mini Trowel, 044 Small Spade, 060 Small Round, and 061 Mini Needle Trowel.- sketchbook 2 -', NULL, '37.00', NULL, NULL, ''),
(9, 'MEEDEN Forward Tilt Floor Easel', ' The art easel specially designed for artists, made of beechwood grown from Germany, natural and sturdy. The walnut color finished surface, smooth, classical and elegant. Anti-rust galvanized hardware is durable and works super well, it\'s a wooden studio easel with good quality The painting easel with adjustable height from 58\"~75\", good for painting no matter sitting or standing. The forward tiltable angle brings the top of the canvas with easy reach and makes the easel fits for kinds of professional work: acrylic, watercolor, or pastel painting\r\n', NULL, '99.00', NULL, NULL, ''),
(10, 'MEEDEN Canvas Boards for Painting', 'The canvas is made of 100% cotton and a 2.5mm thick engineering wooden core, durability, high lightfastness, & anti-crack, protect your masterpiece from any harm. The canvas is coated with 4 layers of professional-grade gesso. A smooth, luxurious surface with the just-right tooth can make your strokes better and more effortless.', NULL, '19.00-28.00', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `products_has_order_items`
--

CREATE TABLE `products_has_order_items` (
  `products_product_id` int(11) NOT NULL,
  `order_items_order_item_id` int(11) NOT NULL,
  `order_items_orders_order_id` int(11) NOT NULL,
  `order_items_orders_users_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `product_id` varchar(45) DEFAULT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  `rating` varchar(45) DEFAULT NULL,
  `comment` varchar(45) DEFAULT NULL,
  `created_at` varchar(45) DEFAULT NULL,
  `Reviewscol` varchar(45) DEFAULT NULL,
  `users_user_id` int(11) NOT NULL,
  `products_product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipping addresses`
--

CREATE TABLE `shipping addresses` (
  `address_id` int(11) NOT NULL,
  `user_id` varchar(45) NOT NULL,
  `recipient_name` varchar(45) NOT NULL,
  `street_address` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT '',
  `password_hash` varchar(45) DEFAULT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `phone_number` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`,`users_user_id`),
  ADD KEY `fk_orders_users1_idx` (`users_user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_item_id`,`orders_order_id`,`orders_users_user_id`),
  ADD KEY `fk_order_items_orders1_idx` (`orders_order_id`,`orders_users_user_id`);

--
-- Indexes for table `payment methods`
--
ALTER TABLE `payment methods`
  ADD PRIMARY KEY (`payment_method_id`,`users_user_id`),
  ADD KEY `fk_payment methods_users1_idx` (`users_user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `products_has_order_items`
--
ALTER TABLE `products_has_order_items`
  ADD PRIMARY KEY (`products_product_id`,`order_items_order_item_id`,`order_items_orders_order_id`,`order_items_orders_users_user_id`),
  ADD KEY `fk_products_has_order_items_order_items1_idx` (`order_items_order_item_id`,`order_items_orders_order_id`,`order_items_orders_users_user_id`),
  ADD KEY `fk_products_has_order_items_products1_idx` (`products_product_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`,`users_user_id`,`products_product_id`),
  ADD KEY `fk_reviews_users1_idx` (`users_user_id`),
  ADD KEY `fk_reviews_products1_idx` (`products_product_id`);

--
-- Indexes for table `shipping addresses`
--
ALTER TABLE `shipping addresses`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id_UNIQUE` (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_users1` FOREIGN KEY (`users_user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `fk_order_items_orders1` FOREIGN KEY (`orders_order_id`,`orders_users_user_id`) REFERENCES `orders` (`order_id`, `users_user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment methods`
--
ALTER TABLE `payment methods`
  ADD CONSTRAINT `fk_payment methods_users1` FOREIGN KEY (`users_user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `products_has_order_items`
--
ALTER TABLE `products_has_order_items`
  ADD CONSTRAINT `fk_products_has_order_items_order_items1` FOREIGN KEY (`order_items_order_item_id`,`order_items_orders_order_id`,`order_items_orders_users_user_id`) REFERENCES `order_items` (`order_item_id`, `orders_order_id`, `orders_users_user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_products_has_order_items_products1` FOREIGN KEY (`products_product_id`) REFERENCES `products` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk_reviews_products1` FOREIGN KEY (`products_product_id`) REFERENCES `products` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reviews_users1` FOREIGN KEY (`users_user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
