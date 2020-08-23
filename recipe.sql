-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2020 at 08:28 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipe`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'Air Fryer Recipes'),
(2, 'Cake Recipes'),
(3, 'Chicken Recipes');

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ingredient` varchar(255) NOT NULL,
  `time` date NOT NULL,
  `img` text NOT NULL,
  `description` text NOT NULL,
  `rating` varchar(11) NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`id`, `name`, `ingredient`, `time`, `img`, `description`, `rating`, `category`) VALUES
(2, 'Spicy Air Fryer Salmon', '2 tablespoons grill seasoning (such as Montreal Steak Seasoning),1 tablespoon brown sugar,¾ teaspoon ground cumin,½ teaspoon ground coriander,¼ teaspoon cayenne pepper,2 pounds salmon fillets, skin on', '2020-08-21', 'image.jpg', 'What\'s not to love about air fryer salmon? Arguably, the air fryer is the best way to cook salmon. You\'re starting with a healthy fish and cooking it in a healthy way that cuts back on fat calories. Plus, the air fryer gets the job done fast and creates a moist center and wonderful texture to the surface of the fish. Give these air fryer salmon recipes a try!', '8.0', 1),
(3, 'Air Fryer Beignets', '1 serving cooking spray,½ cup all-purpose flour,¼ cup white sugar,⅛ cup water,1 large egg, separated,1 ½ teaspoons melted butter,½ teaspoon baking powder,½ teaspoon vanilla extract,1 pinch salt,2 tablespoons confectioners\' sugar, or to taste', '2020-08-23', 'fry2.jpg', 'These beignets take on a wholesome aspect as they\'re cooked in an air fryer. You will need a silicone egg-bite mold, available through retailers like Amazon®.', '7.6', 1),
(4, 'Air Fryer Hard-Boiled Eggs', '6 large eggs eggs', '2020-08-23', 'fry3.jpg', 'I love not having to wait for the water to boil and not having to wash the pot. I just place my eggs in the air fryer and in 15 minutes they\'re hard-boiled.', '9.2', 1),
(6, 'Air Fryer Chicken Thighs', '4 eaches skin-on, boneless chicken thighs,2 teaspoons extra-virgin olive oil,1 teaspoon smoked paprika,¾ teaspoon garlic powder,½ teaspoon salt,½ teaspoon ground black pepper', '2020-08-23', 'fry4.jpg', 'Tasty, quick, chicken thighs, with juicy meat and a crispy skin; you will love this chicken that is ready for the table in less than 30 minutes!', '9.3', 1),
(8, 'Air Fryer Zucchini Chips', '1 cup panko bread crumbs,¾ cup grated Parmesan cheese,1 medium zucchini, thinly sliced,1 large egg, beaten,1 serving cooking spray', '0000-00-00', 'fry5.jpg', 'Crunchy, cheesy fried zucchini chips without the guilt of deep frying. This is the perfect way to make use of those abundant zucchini from the garden! Serve with marinara sauce for dipping.', '8.7', 1),
(9, 'Blueberry Muffin Cake', '1 serving cooking spray,1 cup blueberries,1 ½ cups all-purpose flour, divided,½ cup white sugar,¼ cup vegetable oil,½ cup milk,1 egg,1 teaspoon vanilla extract,3 teaspoons baking powder,½ teaspoon salt,½ cup brown sugar,⅓ cup all-purpose flour', '2020-08-23', 'cake1.jpg', 'A delicious breakfast coffee cake that tastes like your favorite blueberry muffins.', '9.6', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `pass`) VALUES
(1, 'Shakil Shareef', 'shakil.cse19@gmail.com', 'mypass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `recipe`
--
ALTER TABLE `recipe`
  ADD CONSTRAINT `recipe_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
