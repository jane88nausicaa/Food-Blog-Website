-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 02, 2018 at 01:01 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(3, 'Appetizers'),
(4, 'Desserts'),
(7, 'Main Dishes'),
(15, 'Side Dishes'),
(19, 'Drinks');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(34, 92, 'Cindy', 'cindy@cindy.com', 'I had tried this before. This is amazing', 'approved', '2018-02-26'),
(35, 93, 'Jim', 'jim11@gmail.com', 'This is really good taste!', 'approved', '2018-02-26'),
(36, 93, 'Jim', 'jim11@gmail.com', 'I had tried this before. This is amazing ', 'approved', '2018-02-26'),
(37, 94, 'cici', 'cici@gmail.com', 'Very delicious!', 'approved', '2018-02-26'),
(38, 95, 'Miley Cyrus', 'Mila@outlook.com', 'Good!', 'approved', '2018-02-26'),
(39, 96, 'Joaquin', 'Joaquin@outlook.com', 'Best ever! love the food you recommend!', 'approved', '2018-02-26'),
(40, 97, 'Christopher Walken', 'ChristopherWalken@yahoo.com', 'Best for breakfast!!', 'unapproved', '2018-02-26'),
(41, 98, 'Louis Szekely', 'LouisSzekely@outlook.com', 'Tried this recipe, very good!', 'approved', '2018-02-26'),
(42, 99, 'Aubrey Drake Graham ', 'Aubrey1990@gmail.com', 'Healthy!', 'approved', '2018-02-26'),
(43, 100, 'Miley Cyrus', 'MileyCyrus@gmail.com', 'Very pretty and good taste!', 'approved', '2018-02-26'),
(44, 101, 'Julianne Moore', 'Joaquin@outlook.com', 'cute cakes!', 'approved', '2018-02-26'),
(45, 103, 'Kate', 'kate@gmail.com', 'cute crostini!! And delicious!', 'unapproved', '2018-02-26'),
(46, 104, 'Sam', 'sam@outlook.com', 'looks good!', 'approved', '2018-02-26'),
(47, 96, 'Emma', 'emma@gmail.com', 'cute cute cute!!!!', 'unapproved', '2018-02-26'),
(48, 94, 'CeCe', 'ccccadf@gmail.com', 'healthy! love fish!', 'approved', '2018-02-26'),
(49, 92, 'John', 'johnyue@outlook.com', 'Love potato!!!', 'unapproved', '2018-02-26'),
(50, 93, 'Jonna', 'jonna@gmail.com', 'Waaaaaa! So pretty!', 'approved', '2018-02-26'),
(51, 99, 'Sammy', 'samy@gmail.com', 'Just finish this salad! pretty good!', 'approved', '2018-02-26'),
(52, 97, 'Lucy', 'lucyann@gmail.com', 'So beautiful! love it!', 'approved', '2018-02-26'),
(54, 95, 'love', 'love@gmail.com', 'Good news', 'approved', '2018-02-27'),
(56, 92, 'Ann', 'ann@gmail.com', 'sgagasdf', 'approved', '2018-02-28'),
(57, 104, 'Nausicca', 'nausicca@gmail.com', 'BEST!!!', 'unapproved', '2018-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_user` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  `post_views_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_user`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`, `post_views_count`) VALUES
(92, 15, 'Healthy Oven Baked Sweet Potatoes', '', 'rico', '2018-03-01', 'side2.jpg', '<p>I looooove having sweet potatoes around! All winter long I have a bowl of sweet potatoes on hand at all times so I can throw them in pretty much everything we make. They keep in our kitchen for weeks after we buy them &ndash; it&rsquo;s so easy. Be it tacos, minestrone, or egg scramble, chances are there are sweet potatoes involved. They are just so convenient.</p>\r\n<p>Just as they are an essential part of our winter diet, sweet potatoes are an expected side dish at our Thanksgiving and Christmas meals.</p>\r\n<p>Although it&rsquo;s hard to go wrong with sweet potatoes, I mean you can throw them unpeeled in the oven and they will come out perfectly done, this recipe is tops. The light sweetness of the sweet potatoes shines through but you don&rsquo;t have to load on a bunch of brown sugar and marshmallows like you do with many holiday sweet potato recipes. Serving them sliced also makes for a stunning side dish that will add a pop of color to your holiday table.</p>', 'healthy, oven, baked, sweet, potatoes, side, dish', 0, 'published', 78),
(93, 15, 'Beef-dyed Mustard Ranch Deviled Eggs', '', 'Kiera', '2018-03-01', 'side1.jpg', '<p>I&rsquo;ve never needed an excuse to get friends together for a celebration. Especially with blogging, I&rsquo;m always wrangling girlfriends together for some hair-brained scheme, whether I need hand models or people to pose in front of a photobooth.</p>\r\n<p>A while ago I hosted a confetti party. There were two reasons for the party &ndash; one, I finished a rough stretch at work with mostly night shifts, meaning I had basically dropped off the planet. I wanted to get everyone together to reconnect over drinks and snacks. Plus, I needed a party spread to highlight the balloon party centerpiece DIY I was working on for Martha Stewart. Why go to all of the trouble of making the decorations, recipes and libations for a photoshoot if you can&rsquo;t have people around to share them?</p>\r\n<p>This recipe for beet-dyed deviled eggs was one of the last things I have to share with you from the confetti party. I know it&rsquo;s long-overdue, but I really wanted to wait until hard-boiled egg season to share them with you! What better way to use up all of those Easter eggs you have coming your way?</p>', 'side, beef, ranch, egg', 0, 'published', 17),
(94, 7, 'Beef Juice Poached Salmon', '', 'Reese', '2018-03-01', 'main1.jpg', '<p>Did you know that almost 30 million Americans live in &lsquo;food deserts&rsquo; without access to affordable, quality, fresh fruits and vegetables? These food deserts exist even here in a food-centric San Francisco. A little disconcerting is the fact that 60% of Americans don&rsquo;t actually believe food deserts exist in their own community.</p>\r\n<p>In reality, nearly one out of every 10 people across the country are affected. Wholesome Wave is a non-profit organization that is helping to increase access to healthy locally and regionally grown foods. They have provided almost $6 million in nutrition incentives to farm communities over the last 6 years. Their partnerships with farmers is helping to increase farm to table access to underserved communities across the United States.</p>', 'beef, juice, salmon, main', 0, 'published', 10),
(95, 4, 'Italian Tiramisu', '', 'Kiera', '2018-03-01', 'dessert2.jpg', '<p>I have such a treat for you today! This recipe for an authentic tiramisu will absolutely knock your socks off. It&rsquo;s probably even better than the tiramisu at your favorite Italian restaurant. It&rsquo;s just a bit boozy, with a rich coffee flavor and the creaminess of mascarpone cheese.</p>\r\n<p>One of the secrets of this recipe is high quality aromatic coffee. I maximize the flavor by mixing coffee with espresso. We are huge espresso fans and there&rsquo;s no better homemade espresso than illy. We have the new illy Y3.2 machine, which makes both brewed coffee and espresso at the touch of a button.The Y3.2 machine is slim and doesn&rsquo;t hog counter space, which is perfect for our city apartment.</p>', 'dessert, Italian, tiramisu', 0, 'draft', 7),
(96, 4, 'Sunny Side Up Stuffed Mango Cupcakes', '', 'rico', '2018-03-01', 'dessert1.jpg', '<p>It&rsquo;s my birthday this weekend! The big 3-1 (said no one ever). Last year, when I turned 30, I was asking all kinds of important life questions. Like, should I cut my hair? Can I still wear black leggings? Spoiler alert, I&rsquo;m wearing black leggings as I type this, so I guess that question answered itself.</p>\r\n<p>This year, I&rsquo;m approaching my next trip around the sun with gratitude. There have been a lot of studies about the impact of gratitude on health, and unequivocally they tell us it&rsquo;s important. People with a gratitude practice are happier and healthier. Every morning and several times a day I take a few seconds to pause and think about what I have to be grateful for.</p>', 'dessert, mango, cupcake', 0, 'published', 14),
(97, 19, 'Ombre Hibiscus Prosecco CockTail', '', 'Faye', '2018-03-01', 'drink2.jpg', '<p>The prettiest cocktail you&rsquo;ll ever find is also easy! Make this ombre hibiscus prosecco cocktail recipe with whole hibiscus flowers in just minutes. This hibiscus prosecco cocktail is perfect for basically any occasion. I made them in honor of Galentine&rsquo;s day, but they would work for a New Year&rsquo;s cocktail, weddings, bridal showers, bachelorette parties&hellip;</p>\r\n<p>You can&rsquo;t go wrong with a pink cocktail with sparkling wine in it.</p>\r\n<p>If you&rsquo;re looking for a recommendation, I chose Da Luca prosecco for this recipe. It&rsquo;s sweet and fresh making it perfect for brunch. The color is light, making it great to get the layered ombre effect. I enjoyed the fresh citris notes and balanced sweetness alone as much as I did mixed into the cocktail recipe! Da Luca is made in Sicily, Italy, in the Veneto region. The label is actually inspired by Scopa, a card game played by families after dinner and workers in the vineyards.</p>', 'drink, ombre, hibiscus, prosecco, cocktail', 0, 'published', 11),
(98, 19, 'Hibiscus Agua Fresca Cocktail + Wesburger', '', 'rico', '2018-03-01', 'drink1.jpg', '<p>A Hibiscus Agua Fresca cocktail recipe, with mocktail option, from one of my favorite San Francisco restaurants, Wesburger. It&rsquo;s perfect for summer or fall. Today&rsquo;s recipe is courtesy of one of my favorite restaurants in San Francisco, Wesburger n&rsquo; More. Located in the Mission Neighborhood of San Francisco, it opened in Spring. I have the privilege of calling the chef and owner of Wesburger, Wes Rowe, a friend.</p>\r\n<p>Last year, we started a collaborative dinner series with some friends. Watching him put together a meal is an absolute treat. When he told me he was working on turning his pop-up burger series into a brick and mortar restaurant, I was super excited.</p>', 'drink, hibiscus, agua, fresca, cocktail, wesburger', 0, 'draft', 9),
(99, 15, 'Healthy Chopped Salad', '', 'rico', '2018-03-01', 'salad.jpg', '<p>A healthy chopped salad recipe with beets, avocado, veggies, and a dijon vinaigrette. Colorful and easy to make, gluten free and optional vegetarian. One of the best meals we had in Cape Town was at Azure restaurant, which is part of the Twelve Apostles Hotel in Camps Bay. It was one of those lunches worth lingering over, with dish after amazing dish. Not to mention the view, perched on the side of their namesake Twelve Apostles, a string of peaks that extend from Table Mountain.</p>\r\n<p>One of my favorite things about it was the mix of dishes with serious &lsquo;wow factor&rsquo; like ostrich tartare, and comfort foods like chicken noodle soup. There&rsquo;s truly something for any mood. It&rsquo;s also pretty special to eat a Catch of the Day that was caught fresh right from the waters that the restaurant overlooks.&nbsp;</p>', 'healthy, chopped, salad, side', 0, 'published', 8),
(100, 7, 'Chicken Soup', '', 'Faye', '2018-03-01', 'main2.jpg', '<p>A delicious Brazilian Chicken Soup recipe with yam, yucca root and shredded chicken. It&rsquo;s hearty, gluten free, delicious and easy to make &ndash; just in time for National Soup Month! All of their soups are made fresh right here in the city, even the stocks. They use fresh, seasonal ingredients and the menu is constantly changing based on the best of what&rsquo;s available.</p>', 'chicken, soup, main', 0, 'draft', 6),
(101, 4, 'Amazing Moist Cranberry Bread', '', 'Jiangyue', '2018-03-01', 'dessert3.jpg', '<p>Tart and sweet cranberry bread recipe with just a tiny bit of crispness that protects each soft and moist slice. The best cranberry bread you&rsquo;ll ever eat. ranberry bread is one of my favorite holiday traditions in our house. When fresh cranberries arrive at the supermarket I know the holidays aren&rsquo;t far away. This cranberry bread recipe is so different from the bland dry stuff that comes on catering platters. This loaf is golden brown with vibrant bits of cranberry and orange zest in each slice. Even more than the beautiful slices is how incredibly moist it is. The outside has just a tiny bit of crispness that protects a soft and moist. It&rsquo;s perfectly tart and sweet. It&rsquo;s honestly the best cranberry bread you&rsquo;ll ever eat.</p>', 'appetizer, bacon, wrap, brussel, dessert', 0, 'published', 6),
(102, 3, 'Potato Skin', '', 'rico', '2018-03-01', 'potato.jpg', '<p>French fries are trouble. I used to waitress in college and french fries were my nemesis. It&rsquo;s literally impossible for me to stop eating them. I gained five pounds within the first few months of starting. These spicy potato skins totally bring me back to my service industry days. They taste great and with just a bit of oil and absolutely no frying they aren&rsquo;t quite as bad for you either. For a fun twist, I used a traditional Portuguese spice blend to season them. It gives them this really fun extra kick of flavor. Serve them with a two-ingredient spicy greek yogurt dip that is a fun contrast of cool creaminess with an unexpected kick of its own.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 'potato, skin, appetizer', 0, 'published', 6),
(103, 3, 'Crostini', '', 'Jiangyue', '2018-03-01', 'appetizer1.jpg', '<p>These lox and bagel cream cheese crostini are&nbsp;like brunch in appetizer form. It&rsquo;s a classic example of two separately awesome things coming together to make something even more amazing.&nbsp;</p>', 'crostini, appetizer', 0, 'published', 3),
(104, 3, 'Bacon Wrapped Brussels', '', 'Reese', '2018-02-26', 'appetizer2.jpg', '<p>This is the best brussel I have ever had. Try it!.&nbsp;Bacon wrapped brussels sprouts skewers, drizzled with maple syrup, because bacon makes everything better!&nbsp;The resturant is SAKAE Sushi &amp; Grill near the SFO airport.</p>', 'bacon, brussel, appetizer', 0, 'published', 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$iusesomecrazystrings22',
  `token` text NOT NULL,
  `user_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_randSalt`, `token`, `user_role`) VALUES
(1, 'rico', '$2y$12$RgRGy/a3ljMfwI/R5eXJv.ENNQVshJD4bKXOUSckPY6AaljhjFotK', 'Rico', 'Suave', 'ricosuave@gmail.com', '', '', '0', 'admin'),
(31, 'Kiera', '$2y$12$tmB/yOB3fvrHeuC8Dq4O0.rwN1lJRUE7QFoo.6V.symsZFsvPL0cC', 'Kiera', 'Knightley', 'Kiera@gmail.com', '', '$2y$10$iusesomecrazystrings22', '', 'admin'),
(32, 'Reese', '$2y$12$.EQYABF2KpMIGymozHYRZeCNg4PD.ixfRc02gL8WMKx1tz7zK0gpC', 'Reese', 'Witherspoon', 'Reese@gmail.com', '', '$2y$10$iusesomecrazystrings22', '', 'admin'),
(33, 'Faye', '$2y$10$E64FWr7sUwl7esRZvlMIk.T9aLZu1IPQfCC6NNG.Hz0R4DMjMKdI2', 'Faye', 'Wong', 'fayewong@outlook.com', '', '$2y$10$iusesomecrazystrings22', '', 'admin'),
(34, 'Jiangyue', '$2y$12$9dAkv/8L1xaJuQFIFXw.xObuUbb4sSJ39y.b1xd2q.E4KIUVp1e6m', 'Jiangyue', 'Xi', 'xixijiangyue@gmail.com', '', '$2y$10$iusesomecrazystrings22', '3c477bcb0322fcabc5cbb63d4efbd0902247ec2d63f6c85c6156ef7e3cc425dc3c9ed50d0b66610b4a4a2d60e4300c4786be', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users_online`
--

CREATE TABLE `users_online` (
  `id` int(11) NOT NULL,
  `session` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_online`
--

INSERT INTO `users_online` (`id`, `session`, `time`) VALUES
(1, 'bdt6ucns3h039jaso67l0k5kj2', 1514536023),
(2, 'ec2no643a4igqe7mrc5paoor07', 1514441018),
(3, 't9at7m3pu91ujl8j09cfrt6nc0', 1514616106),
(4, '9ltdn1se0kp2hh98951pljvtu5', 1515540103),
(5, '558qfqgdcm0toveh1g0icebf20', 1515602498),
(6, 'g2b4pe8bknjudaj6n66uj6lgc7', 1516214218),
(7, 'lj7oqltc75s3fqhdbobnln1d15', 1516253429),
(8, '7v156ppulkki1sva85dg6sgv95', 1517196647),
(9, '46iuptt98i4h9kjkmvmkh1vlb3', 1517252081),
(10, '259nu85s2rgu2sj8ri6ce1pee3', 1519662173),
(11, 'bg1ee5jnljpeg80jnnmhmlu107', 1519711505),
(12, 'ept5tu5r6m9jkt58karlph9h37', 1519943422),
(13, 's4fjcas5p821vnfnja25rcol17', 1519947808);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_online`
--
ALTER TABLE `users_online`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `users_online`
--
ALTER TABLE `users_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
