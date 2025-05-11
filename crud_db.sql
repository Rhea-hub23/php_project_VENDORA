-- Create the database
CREATE DATABASE IF NOT EXISTS `crud_db`;
USE `crud_db`;

-- Create the shoppingcart table
CREATE TABLE IF NOT EXISTS `shoppingcart` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `product_name` VARCHAR(255) NOT NULL,
  `category` VARCHAR(255) NOT NULL,
  `price` INT(11) NOT NULL,
  `quantity` INT(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Insert sample data into shoppingcart
INSERT INTO `shoppingcart` (`product_name`, `category`, `price`, `quantity`) VALUES
('Wireless Mouse', 'Electronics', 800, 6),
('Bluetooth Speaker', 'Electronics', 2500, 12),
('Running Shoes', 'Footwear', 5000, 4);
