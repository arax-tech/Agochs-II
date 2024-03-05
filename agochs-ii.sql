-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2024 at 05:17 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agochs-ii`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) CHARACTER SET utf8 NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `category`, `author`, `description`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Monday Perfect Time to Reboot your Mind and have a fresh start!', 'Real Estate', 'Admin', 'Embrace this new week with a clear vision and unwavering determination. Mondays are like a blank canvas, awaiting your masterpiece. Seize the opportunity to reset, refocus, and reignite your goals. Let AGOCHS-II be your sanctuary for new beginnings and en', 'blog-1693665082.jpg', '2023-08-20 09:28:54', '2023-09-02 09:31:57'),
(4, 'Calling All Dealers Joinn Us for a Green Initiat AGOCHS-II', 'Real Estate', 'Admin', 'We invite you to join us for a special Tree Plantation Ceremony at AGOCHS-II on August 28, 2023, at 4:00 PM. Let\'s come together to contribute to a greener and more sustainable future.\r\n\r\nDate: August 28, 2023\r\nTime: 4:00 PM\r\nYour presence will make a sig', 'blog-1693665431.jpg', '2023-08-20 09:29:21', '2023-09-02 09:37:11'),
(5, 'Monday is for people with a mission.\" – Cristina Imre', 'Real Estate', 'Admin', 'Embrace the start of a new week with a clear mission and unwavering determination. Let\'s channel our energy and passion into making this week a successful step toward our goals.\r\n\r\nAt AGOCHS-II, we believe in the power of purpose-driven Mondays. Together,', 'blog-1693665509.jpg', '2023-08-20 10:12:46', '2023-09-02 09:38:29'),
(6, 'Tree Plantation', 'Apartment', 'Admin', 'We\'re thrilled to announce the launch of our tree plantation initiative!  At AGOCHS-II, we\'re committed to creating not just homes, but a sustainable and eco-friendly community.\r\n\r\n#AGOCHSII #TreePlantation #SustainableLiving #ecofriendlycommunity #greentomorrow #nurturenature #greenplanet', 'blog-1693666155.jpg', '2023-09-02 09:49:15', '2023-09-02 09:49:15'),
(7, 'AGOCHS-II Stands with Kashmir orn Youm-e-Istehsal', 'Apartment', 'Admin', 'On this solemn occasion of Youm-e-Istehsal, we stand in solidarity with our Kashmiri brothers and sisters, remembering the sacrifices and struggles they endure. \r\n\r\nAGOCHS-II joins hands with the people of Kashmir to honor their resilience and aspirations for self-determination. Let us unite in prayers for peace, justice, and freedom in the valley. \r\n\r\nAs we commemorate this day, let it serve as a reminder of the importance of empathy, compassion, and unity in striving for a world where every voice is heard and respected. \r\n\r\n#YoumeIstehsal #KashmirExploitationDay #SolidarityWithKashmir #PeaceForKashmir #Empathy #Unity #AGOCHSII', 'blog-1693666279.jpg', '2023-09-02 09:51:19', '2023-09-02 09:51:19'),
(8, 'Discover AGOCHS-II Your Perfetc Location for Elevated Living', 'Apartment', 'Admin', 'Nestled amidst the breathtaking landscapes of Islamabad, AGOCHS-II offers a prime location that ticks all the boxes! \r\n\r\n Embrace nature\'s serenity with lush green surroundings, creating a tranquil oasis in the heart of the city. \r\n\r\n Enjoy easy access to major hubs, schools, healthcare, and entertainment, making everyday living convenient and seamless. \r\n\r\nJoin us at AGOCHS-II, where the location sets the stage for an elevated living experience that exceeds all expectations! \r\n\r\n#AGOCHSII #Agochs #agochsiiislamabad #agochsphaseii#LocationMatters #ElevatedLiving #TranquilOasis #ConvenienceAndSerenity #PrimeLocation #ModernLiving', 'blog-1693666364.jpg', '2023-09-02 09:52:44', '2023-09-02 09:52:44'),
(9, 'Discover the Perfetch Blend of Luxury & Affordablity at Agochs-II', 'Apartment', 'Admin', '\"THE KEYS TO YOUR HOME\" are waiting for you in Islamabad\'s most sought-after housing society - Agochs-II! \r\n\r\nEmbrace a lifestyle of opulence without breaking the bank, as we offer the keys to a dream home that seamlessly blends luxury and affordability. \r\n\r\nDon\'t miss this golden opportunity to unlock the doors to your future! Come and experience the epitome of modern living at Agochs-II. \r\n#agochsii #agochsphaseii #LuxuryLiving #affordability #Thekeystoyourhome #modernliving #dreamhome #agochs #sustainableliving', 'blog-1693666508.jpg', '2023-09-02 09:55:08', '2023-09-02 09:55:08'),
(10, 'Embracing the Future : Where Technology Meets Eco-Friendly Living at Agochs Phase-II', 'Apartment', 'Admin', 'At Agochs-II, we believe in harnessing the power of technology to create an eco-friendly haven that blends modernity with sustainability. \r\n\r\n Discover energy-efficient smart homes that not only reduce your carbon footprint but also enhance your comfort and convenience with cutting-edge automation systems. \r\n\r\n Our commitment to the environment extends beyond our homes. With innovative waste management solutions and green initiatives, we\'re creating a community that truly cherishes our planet. \r\n\r\nJoin us in embracing the future of living, where technology and eco-friendly practices unite to create a better world for generations to come. \r\n\r\n#agochsii #ecofriendlyliving #smarthomes #sustainableliving #greeninitiatives #EmbracingTheFuture #technologyandenvironment #agochsiiislamabad', 'blog-1693666603.jpg', '2023-09-02 09:56:43', '2023-09-02 09:56:43'),
(11, 'Discover Your Dream Home in Agochs-II', 'Apartment', 'Admin', 'Welcome to Islamabad\'s most sustainable & CDA Approved Housing Society, where your vision of a perfect home comes to life! \r\n\r\n Nestled in the heart of Islamabad, Agochs-II offers a harmonious blend of modernity and eco-consciousness. Embrace a lifestyle that cherishes nature while reveling in urban comforts. \r\n\r\n With CDA\'s seal of approval, rest assured of a secure and reliable investment in your future. \r\n\r\n Unlock the gateway to your dreams, where lush green landscapes and thoughtful architecture coalesce to create a living experience like no other. \r\n\r\n Say hello to sustainable living, community camaraderie, and the home you\'ve always envisioned. It\'s time to make your dreams a reality at Agochs-II! \r\n\r\n#agochsii #dreamhome #sustainableliving #CDAapproved #luxuryliving #IslamabadLiving #agochsiiislamabad', 'blog-1693666678.jpg', '2023-09-02 09:57:58', '2023-09-02 09:57:58'),
(12, 'Prime Location Alert !', 'Apartment', 'Admin', 'Nestled in the heart of the city, Agochs-II is a true gem for those who believe location matters! \r\n\r\nExperience the best of both worlds - convenience and serenity! With easy access to major hubs and essential amenities just a stone\'s throw away, Agochs-II ensures your daily life is hassle-free. \r\n\r\nYet, amid the bustling cityscape, the soothing greenery and tranquil surroundings create an oasis of calm, offering you a harmonious retreat to call home. \r\n\r\nSay goodbye to compromise and embrace the perfect blend of accessibility and peaceful living at Agochs-II! \r\n\r\n#agochsii #primelocation #convenienceandserenity #GreenLiving #YourDreamHome #agochsiiislamabad', 'blog-1693666737.jpg', '2023-09-02 09:58:57', '2023-09-02 09:58:57'),
(13, 'Exciting News !', 'Apartment', 'Admin', 'We are thrilled to announce that our dream project, \"Approved Society,\" has been given the green light!  Get ready to experience a community like no other, where luxury living meets affordability, and every corner reflects our commitment to excellence.  Join us on this journey of creating a place that will redefine modern living! \r\n\r\n#ApprovedSociety #agochs #luxuryliving #affordablehomes #communityliving #agochsiiislamabad', 'blog-1693666797.jpg', '2023-09-02 09:59:57', '2023-09-02 09:59:57'),
(14, 'Embrace the Dream of Sustaibale Luxury with Agochs-II', 'Apartment', 'Admin', 'Are you yearning for a life in harmony with nature?  Do you dream of a place where eco-friendliness meets luxury? Your dreams have just taken flight at Agochs-II! \r\n\r\nWe are thrilled to introduce our enchanting haven, Agochs-II, where sustainability and opulence dance hand in hand.  Nestled amidst lush greenery and brimming with eco-conscious innovations, Agochs-II is a sanctuary for those who cherish the earth as much as they cherish themselves. \r\n\r\nStep into a world of possibilities at Agochs-II, where green living isn\'t just a concept, but a way of life! With meticulous attention to detail, we\'ve curated an array of luxurious yet affordable living facilities, designed to pamper you and the planet.  From energy-efficient dwellings to recycling initiatives that give back to the environment, every corner of Agochs-II\'s community exudes care for Mother Nature. \r\n\r\n Embrace the joy of waking up to the gentle hum of wind turbines and the aroma of fresh blooms at Agochs-II, knowing that your footsteps are leaving a positive mark on the world. \r\n\r\n Join us at Agochs-II in this extraordinary journey where sustainability meets extravagance. Together, let\'s build a legacy for generations to come, where our dreams and the earth\'s well-being coexist in perfect harmony. \r\n\r\n#Agochs-II #SustainableLiving #LuxuryLiving #GreenCommunity #EcoFriendlyHaven #DreamComeTrue #AgochsII See less', 'blog-1693666936.jpg', '2023-09-02 10:02:16', '2023-09-02 10:02:16');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, '24-Hour Security', 'facilitie-1693661947.jpg', 'The security and safety of the city and its residents is our top priority, based on the concept of Safe City a central c read more...', '2023-08-20 05:08:34', '2023-09-02 08:39:07'),
(2, 'Emergency Management', 'facilitie-1693662012.jpg', 'Given New City’s manageable size and highly planned layout, we plan to set adaptive emergency management measures in pl read more...', '2023-08-20 05:08:56', '2023-09-02 08:40:12'),
(4, 'Educational Square', 'facilitie-1693662059.jpg', 'Our Education square will have best schools and colleges catering to the educational needs of our residents with a safe read more...', '2023-08-20 10:08:49', '2023-09-02 08:40:59'),
(5, 'Grand Mosque', 'facilitie-1693662036.jpg', 'Agochs-II will have a central Grand Mosque, which will be strategically located in the centre of the city for ease of a read more...', '2023-08-20 10:09:35', '2023-09-02 08:40:36'),
(7, 'Parks', 'Facilitie-1693662095.jpg', 'Each residential sector will feature its own parks for families to enjoy. With jogging tracks and beautiful landscaping read more...', '2023-09-02 08:41:35', '2023-09-02 08:41:35'),
(8, 'IT Park', 'Facilitie-1693662113.jpg', 'Agochs-II will have its own state-of-the-art Information Technology Park, which will be designed to house leading and i read more...', '2023-09-02 08:41:53', '2023-09-02 08:41:53'),
(9, 'Commercial Square', 'Facilitie-1693662159.jpg', 'Agochs-II Commercial Civic Center Square has been designed by taking inspiration from Downtown Dubai UAE. Due to the strategic locati read more...', '2023-09-02 08:42:39', '2023-09-02 08:42:39'),
(10, 'Agochs-II Mall', 'Facilitie-1693662998.jpg', 'Agochs-II residents will be able to enjoy a stunning retail experience at the Agochs-II Mall, which will feature stores read more...', '2023-09-02 08:56:38', '2023-09-02 08:56:38'),
(11, 'Community Club', 'Facilitie-1693663040.jpg', 'No thriving community is complete without a good community club. Our club will have a modern business centre with confer ence halls, well-equipped gym, swimming facilities, restaurants, cafes and many other amenities to accommodate and entertain the residents and their guests.', '2023-09-02 08:57:20', '2023-09-02 08:57:20'),
(12, 'Sports Facilities', 'Facilitie-1693663059.jpg', 'Agochs-II encourages healthy activities that are why each sector will feature a modern and well-equipped sports centre where residents can enjoy playing their favourite sports', '2023-09-02 08:57:39', '2023-09-02 08:57:39'),
(13, 'Animal Safari', 'Facilitie-1693663086.jpg', 'With a vast range of magnificent animals and birds, Agochs-II animal safari will be just one of many joyous experiences residents will be able to enjoy with their families in a safe and secure environment', '2023-09-02 08:58:06', '2023-09-02 08:58:06'),
(14, 'Theme Park', 'Facilitie-1693663106.jpg', 'Agochs-II will have a theme park with carefully curated rides, and much more for a thrilling and entertaining experienc e that the entire family—and especially the kids—can enjoy to the fullest', '2023-09-02 08:58:26', '2023-09-02 08:58:26'),
(15, 'Adventure Club', 'Facilitie-1693663119.jpg', 'Adventure and thrill seekers will feel right at home at Agochs-II with our electrifying adventure club! Those who wish to don their hiking boots and step off the trodden path will be able to participate in archery, ATV riding, hiking, skeet/ trap shooting, zip lining, rock climbing, riding club and many other activities at the adventure club', '2023-09-02 08:58:39', '2023-09-02 08:58:39'),
(16, 'Marquee', 'Facilitie-1693663139.jpg', 'A magnificently designed and constructed Agochs-II Marquee will be one of its kind, which the residents can utilize for weddings and other function', '2023-09-02 08:58:59', '2023-09-02 08:58:59'),
(17, 'Eateries', 'Facilitie-1693663160.jpg', 'A host of high-end and affordable restaurants with local and international cuisines, will feature across the lake side of Agochs-II, with breathtaking views', '2023-09-02 08:59:20', '2023-09-02 08:59:20'),
(18, 'Sustainability', 'Facilitie-1693663182.jpg', 'Agochs-II has been designed with Agochs-II and environmental impact in mind. This is why the finished project will feat ure solar energy, water filtration plants, solid waste disposal management system, sewerage treatment plant, rain water harvesting, drip irrigation system and slaughterhouse making Agochs-II self-sufficient and environmentally friendly', '2023-09-02 08:59:42', '2023-09-02 08:59:42'),
(19, 'Utilities', 'Facilitie-1693663198.jpg', 'Designed for modern, urban living, Agochs-II will have all standard utilities and amenities available for residents suc h as high-speed internet, phone lines, uninterrupted water and power supply, etc. to ensure a convenient and comfortable lifestyle', '2023-09-02 08:59:58', '2023-09-02 08:59:58');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_plans`
--

CREATE TABLE `master_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `master_plans`
--

INSERT INTO `master_plans` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Commercial Plots', 'masterplan-1693664050.jpg', '2023-08-20 04:56:55', '2023-09-02 09:14:10'),
(2, 'Shpoing Mall', 'masterplan-1692525488.jpg', '2023-08-20 04:58:08', '2023-08-20 10:16:20'),
(3, 'Residencia', 'masterplan-1693664025.jpg', '2023-08-20 10:16:53', '2023-09-02 09:13:45'),
(4, 'Farmhouses', 'masterplan-1693664062.jpg', '2023-08-20 10:18:18', '2023-09-02 09:14:22'),
(6, 'Apartments', 'masterplan-1693664091.jpg', '2023-09-02 09:14:51', '2023-09-02 09:14:51'),
(7, 'Villas', 'masterplan-1693664110.jpg', '2023-09-02 09:15:10', '2023-09-02 09:15:10');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Sit cillum esse proi', 'media-1692526686.jpg', '2023-08-20 05:18:06', '2023-08-20 05:18:06'),
(4, 'Tempora sequi quaera', 'media-1692541561.jpg', '2023-08-20 09:26:01', '2023-08-20 09:26:01'),
(6, 'Agochs-II Construction', 'media-1693664217.jpg', '2023-09-02 09:16:57', '2023-09-02 09:16:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2023_08_20_050858_create_sliders_table', 2),
(8, '2023_08_20_050916_create_projects_table', 2),
(9, '2023_08_20_050938_create_master_plans_table', 2),
(10, '2023_08_20_050955_create_facilities_table', 2),
(11, '2023_08_20_051004_create_media_table', 2),
(12, '2023_08_20_051507_create_blogs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `images` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `category`, `location`, `description`, `images`, `created_at`, `updated_at`) VALUES
(4, 'Residencia', 'Apartment', 'Islamabad', '<p><strong>Where Elegance Meets Convenience</strong></p>\r\n\r\n<p>At Agochs-II Residences, we have redefined the art of elite living. Our standard residential spaces are meticulously designed to offer an exceptional living experience that combines sophistication with utmost convenience.</p>\r\n\r\n<p>Each residence within Agochs-II is a testament to luxury and comfort, providing residents with a truly distinguished lifestyle. Our commitment to excellence is reflected in every facet of our residential spaces, ensuring that our residents not only find a home but an unparalleled living experience.</p>\r\n\r\n<p><strong>Features and Amenities:</strong></p>\r\n\r\n<p>Dedicated Mosque: Within the heart of Agochs-II Residences lies a dedicated mosque, providing a sacred space for residents to nurture their spiritual well-being. This mosque serves as a place of solace and congregation for the community, fostering a sense of unity and harmony.<br />\r\nParks: We understand the importance of green spaces and recreational areas in enhancing the quality of life. That&#39;s why Agochs-II Residences boasts well-designed parks, where residents can relax, unwind, and connect with nature. These meticulously landscaped areas are perfect for family outings, morning strolls, or simply enjoying the serenity of the outdoors.</p>\r\n\r\n<p>Commercial Area: Convenience is key, and Agochs-II Residences has its own commercial area, making everyday life easier for our residents. Whether it&#39;s shopping for daily essentials or indulging in some retail therapy, our on-site commercial area ensures that all your needs are met just steps away from your doorstep.</p>\r\n\r\n<p>Our commitment to creating a comfortable, convenient, and remarkable environment for residents is unwavering. At Agochs-II Residences, we don&#39;t just provide housing; we offer a lifestyle that embodies the essence of luxury and ease. Welcome to a place where elegance meets convenience, and where you can truly savor the art of living.</p>', 'project-1694245346.jpg', '2023-08-20 04:04:41', '2023-09-09 02:42:26'),
(5, 'Apartments', 'Apartment', 'Islamabad', '<p><strong>Where Luxury Meets Serenity</strong></p>\r\n\r\n<p>Prepare to embark on a journey of unparalleled living at Agochs-II Apartments. These meticulously planned and exquisitely designed residences are poised to offer a lifestyle that combines elegance, comfort, and breathtaking natural beauty.</p>\r\n\r\n<p><strong>Masterful Planning and Aesthetic Design:</strong></p>\r\n\r\n<p>At Agochs-II Apartments, every detail has been meticulously planned to ensure the utmost comfort and luxury. From the moment you step inside, you&#39;ll be greeted by an environment that seamlessly blends aesthetics with functionality. The design ethos revolves around creating spaces that not only look stunning but are also a joy to live in.</p>\r\n\r\n<p><strong>Prime Lakeside Location:</strong></p>\r\n\r\n<p>Nestled along the serene lakeside, Agochs-II Apartments offer mesmerizing views that soothe the soul and provide a sense of tranquility. The shimmering waters of the lake serve as a backdrop to your everyday life, offering a living experience that is truly unique.</p>\r\n\r\n<p><strong>Luxury Amenities and Facilities:</strong></p>\r\n\r\n<p>Synonymous with the Agochs-II legacy, our apartments are equipped with a range of luxury amenities and facilities. Whether it&#39;s a state-of-the-art fitness center to invigorate your mornings, a sprawling swimming pool to relax by, or beautifully landscaped gardens to unwind in, you&#39;ll find that every aspect of your lifestyle has been meticulously catered to.</p>\r\n\r\n<p><strong>Community Living at Its Best:</strong></p>\r\n\r\n<p>Agochs-II Apartments are more than just residences; they are vibrant communities that foster a sense of belonging. Here, you&#39;ll have the opportunity to connect with neighbors, build lasting friendships, and create cherished memories in an environment that encourages social interaction and community engagement.</p>\r\n\r\n<p>In summary, Agochs-II Apartments are a testament to our commitment to providing the ultimate living experience. With their prime lakeside location, masterful planning, and luxury amenities, they represent a harmonious blend of nature&#39;s beauty and human ingenuity. Welcome to a life where luxury meets serenity, where every day is a celebration of the finer things in life. Welcome home.</p>', 'project-1694245308.jpg', '2023-08-20 04:05:39', '2023-09-09 02:41:48'),
(6, 'Commercial Square', 'Real Estate', 'Islamabad', '<p><strong>A Hub of Business Opportunities</strong></p>\r\n\r\n<p>Agochs-II Commercial Square is poised to become the beating heart of entrepreneurial endeavors within our vibrant community. It offers an exceptional opportunity for astute investors and businesses to thrive in a dynamic and strategically located commercial hub.</p>\r\n\r\n<p><strong>Diverse Investment Opportunities:</strong></p>\r\n\r\n<p>Our commercial areas within Agochs-II cater to a wide spectrum of businesses, ensuring that there&#39;s a perfect match for every enterprise, regardless of size or nature. The variety in plot sizes and pricing options makes these commercial plots highly accessible, providing a golden chance for businesses to leverage Agochs-II&#39;s unique advantages.</p>\r\n\r\n<p><strong>Strategic Location:</strong></p>\r\n\r\n<p>Situated within Agochs-II, this commercial square enjoys a prime location that&#39;s destined to attract a steady flow of customers and foot traffic. It&#39;s not just a commercial space; it&#39;s a strategic vantage point to tap into the thriving community and its diverse needs.</p>\r\n\r\n<p><strong>Versatility in Commercial Plots:</strong></p>\r\n\r\n<p>Whether you&#39;re an emerging startup, a well-established business, or an investor seeking to diversify your portfolio, Agochs-II Commercial Square offers the versatility you need. Choose from a range of plot sizes and price points that align with your specific business goals and financial objectives.</p>\r\n\r\n<p><strong>Amenities and Infrastructure:</strong></p>\r\n\r\n<p>Agochs-II is committed to providing an enabling environment for businesses to flourish. Our commercial square is equipped with top-notch infrastructure, ensuring a seamless experience for both business owners and their clientele. From modern utilities to well-maintained roads, we&#39;ve left no stone unturned in creating the perfect setting for your commercial success.</p>\r\n\r\n<p>In summary, Agochs-II Commercial Square is not just a place to do business; it&#39;s a strategic investment opportunity that welcomes enterprises of all sizes and aspirations. With its prime location, diverse plot options, and commitment to excellence, it&#39;s where your business can truly prosper. Discover the potential, seize the opportunity, and be part of the dynamic Agochs-II community.</p>', 'project-1694245320.jpg', '2023-08-20 10:11:35', '2023-09-09 02:42:00'),
(7, 'Farmhouses', 'Real Estate', 'Islamabad', '<p><strong>Your Personal Paradise Awaits</strong></p>\r\n\r\n<p>Agochs-II invites you to embark on a journey of creating your own personal haven with our farmhouse plots. Nestled within the pristine surroundings of Agochs-II, these farmhouses offer an exceptional opportunity to craft your perfect retreat, a sanctuary of serenity and solitude.</p>\r\n\r\n<p><strong>Crafting Your Personal Getaway:</strong></p>\r\n\r\n<p>A farmhouse isn&#39;t just a piece of land; it&#39;s your canvas to paint your dreams of tranquility. Whether you envision a peaceful escape from the city&#39;s hustle and bustle or an idyllic space to host gatherings with family and friends, Agochs-II Farmhouses provide the canvas upon which you can create your perfect getaway.</p>\r\n\r\n<p><strong>Investing in Comfort, Peace, and Privacy:</strong></p>\r\n\r\n<p>These farmhouse plots are not just an investment; they&#39;re an investment in your well-being. Away from the frenetic pace of urban life, Agochs-II Farmhouses offer a serene and private escape. Here, you can find solace in the embrace of nature, the symphony of birdsong, and the gentle rustling of leaves in the wind.</p>\r\n\r\n<p><strong>Modern Amenities and Safety:</strong></p>\r\n\r\n<p>While Agochs-II Farmhouses provide a retreat from the everyday chaos, they are far from disconnected. Each farmhouse is thoughtfully equipped with modern amenities to ensure your comfort and convenience. Additionally, our commitment to security means that you can revel in the tranquility of nature with the peace of mind that your retreat is nestled within a safe and secure environment.</p>\r\n\r\n<p>In summary, Agochs-II Farmhouses are an invitation to embrace a lifestyle that combines the best of both worlds: the simplicity and peace of rural living with the modern comforts and security of urban life. It&#39;s a canvas for your dreams, a sanctuary for your soul, and an investment in a life defined by comfort, peace, and privacy. Discover your personal paradise at Agochs-II Farmhouses.</p>', 'project-1694245331.jpg', '2023-08-20 10:12:02', '2023-09-09 02:42:11');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `allignments` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `allignments`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Agochs-II', 'Islamabad Pakistan', 'left', 'slider-1693660679.jpg', '2023-08-20 00:36:04', '2023-09-02 08:17:59'),
(3, 'Modern Amenities', 'Enabling a luxury lifestyle', 'center', 'slider-1693660976.jpg', '2023-08-20 01:20:20', '2023-09-02 08:23:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@info.com', '$2y$10$yFV6IVKBPX.INDgEGQqiAOLjY6KYMokvtQR9TWlpcXSU2Lis7gbtW', 'Admin', 'admin-1692633860.jpg', NULL, '2023-08-18 23:04:39', '2023-08-21 11:05:01'),
(2, 'Test', 'test@info.com', '$2y$10$yFV6IVKBPX.INDgEGQqiAOLjY6KYMokvtQR9TWlpcXSU2Lis7gbtW', NULL, NULL, NULL, '2023-08-28 10:50:50', '2023-08-28 10:50:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_plans`
--
ALTER TABLE `master_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_plans`
--
ALTER TABLE `master_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
