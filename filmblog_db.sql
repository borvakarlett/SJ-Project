-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2025 at 03:54 PM
-- Server version: 8.0.41
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filmblog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb3_slovak_ci NOT NULL,
  `content` text COLLATE utf8mb3_slovak_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `rating` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_slovak_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `created_at`, `rating`) VALUES
(6, 'Neon Nights: Tokyo Rewired', 'This cyber-noir thriller drops you into a hyper-digital version of Tokyo where neon signs buzz with secrets and AI rules the underworld. Neon Nights is packed with moody visuals, a pulsing synth soundtrack, and a lead detective whose moral compass spins wildly as the case unfolds.\r\n\r\nThink Blade Runner meets Drive, but with a modern, tech-heavy twist. The story can get tangled at times, and the dialogue leans hard into noir clichés, but it\'s all part of the vibe. It’s a visual and auditory feast more than a narrative masterpiece—but sometimes, that’s all you want.', '2025-04-23 20:45:08', 7),
(7, 'Echoes in the Dust', 'A haunting post-apocalyptic tale where silence says more than words. Echoes in the Dust doesn’t waste time explaining what happened to the world—you\'re simply dropped into it, following a mother and her teenage son as they wander through a barren, sand-swept wasteland in search of shelter and other survivors.\r\n\r\nWhat makes this film stand out is its minimalist approach. Sparse dialogue, long lingering shots, and a haunting sound design make every moment feel raw and real. The relationship between the two leads is powerful, with performances that carry the film’s emotional weight without needing flashy effects.\r\n\r\nIt’s bleak, slow, and incredibly effective if you\'re in the mood for something that stays with you long after the credits roll.', '2025-04-23 20:45:24', 8),
(8, 'The Grand Adventure', 'Plot Overview:\r\n\r\nIn “The Grand Adventure,” director Laura Green crafts a riveting, emotionally charged narrative set against the backdrop of vast, uncharted lands and treacherous terrain. The film follows the journey of a group of adventurers led by Jack Porter (Ryan Smith), a rugged yet compassionate former soldier who is tasked with leading an expedition to find a lost civilization. Along for the ride are the brilliant archaeologist, Claire Westbrook (Elizabeth Turner), the grizzled veteran, Michael Monroe (Mark Collins), and the young, wide-eyed adventurer, Emma Richards (Lily Horne).\r\n\r\nThe movie opens with a scene that sets the tone for what is to come: the discovery of an ancient map that promises to lead to a hidden city, believed to be filled with riches and untold mysteries. The group embarks on a journey that takes them through dense jungles, over perilous mountain ranges, and into deep, uncharted caves filled with dangerous traps and unexpected creatures. What begins as a quest for treasure soon turns into a story of survival, camaraderie, and self-discovery, as the team faces not only the physical challenges of the environment but also the emotional toll of their pasts.\r\n\r\nPerformances:\r\n\r\nRyan Smith delivers an incredible performance as Jack Porter. His portrayal of a man burdened by past decisions but driven by a sense of responsibility to his crew is both nuanced and powerful. Smith captures the vulnerability of a character who has seen too much of the world’s darker side but is determined to make a difference. Elizabeth Turner, as Claire Westbrook, shines as the intelligent and resourceful archaeologist. She adds a layer of depth to her character, as Claire’s motivations are not just tied to the treasure, but also her own personal redemption.\r\n\r\nMark Collins plays Michael Monroe, the tough-as-nails survivalist, and brings a grounded performance that provides a perfect balance to the more idealistic characters. Finally, Lily Horne\'s Emma Richards brings an infectious energy to the film, portraying the role of a young adventurer eager to prove herself, yet struggling with the weight of the dangerous world she is thrust into.\r\n\r\nCinematography and Direction:\r\n\r\nThe cinematography in “The Grand Adventure” is stunning, with sweeping shots of lush jungles, towering mountains, and breathtaking desert landscapes. Cinematographer James Green does a remarkable job of capturing both the beauty and brutality of the environments, which play as a character in the story itself. The vastness of the locations contrasts perfectly with the small, intimate moments shared by the characters, adding a layer of isolation and survival to the narrative.\r\n\r\nLaura Green’s direction is masterful, blending action sequences with quieter, character-driven moments. The pacing is tight, and while the film offers intense action scenes filled with suspense and danger, it is the emotional depth that sets this movie apart. There are moments of deep reflection, especially between Jack and Claire, where the film explores themes of redemption, forgiveness, and the weight of one’s past.\r\n\r\nAction Sequences:\r\n\r\n“The Grand Adventure” offers a thrilling blend of action and suspense, with heart-pounding sequences that keep the audience at the edge of their seats. From navigating ancient ruins filled with deadly traps to fending off hostile creatures and rival treasure hunters, the film doesn’t skimp on excitement. The action scenes are choreographed well, with a real sense of danger, making every close call feel earned.\r\n\r\nOne of the standout sequences occurs when the team is forced to cross a ravine on a rickety bridge while under fire from enemy forces. The tension in the scene is palpable, as each character must trust one another to survive. Another memorable moment comes when the team discovers the hidden city, only to realize that the treasure they’ve been searching for is not material wealth, but a much deeper mystery that could change history forever.\r\n\r\nThemes:\r\n\r\nAt its core, “The Grand Adventure” is about more than just the search for treasure. It’s a film about the search for meaning and purpose in life. Each character embarks on their own personal journey, seeking something beyond material wealth. Jack, in particular, grapples with his past decisions and the desire for redemption. Claire seeks to prove herself as more than just a scholar, while Emma dreams of leaving a legacy as a true adventurer. The movie explores the idea that the greatest treasures aren’t gold or jewels but the relationships we form and the personal growth we experience along the way.\r\n\r\nThe film also touches on themes of survival, not just in the physical sense, but in overcoming emotional and psychological challenges. As the group faces danger, they are forced to confront their past traumas, fears, and doubts, ultimately discovering that the true reward lies in the journey itself.\r\n\r\nFinal Thoughts:\r\n\r\n“The Grand Adventure” is a cinematic masterpiece that blends breathtaking visuals, heart-pounding action, and deep emotional storytelling. With strong performances from its cast and a direction that brings the story to life, this film is sure to leave a lasting impression on audiences. It’s a perfect mix of adventure and drama, with enough heart and soul to make it stand out from other action-packed thrillers. If you’re a fan of adventure films that offer more than just explosive set pieces, “The Grand Adventure” is a must-watch.', '2025-04-23 20:55:03', 9),
(10, 'Dune: Part Two', 'Denis Villeneuve returns to Arrakis with Dune: Part Two, and the result is a sci-fi epic that is both grand and intimate. The continuation of Paul Atreides’ journey is darker, more spiritual, and far more intense than its predecessor.\r\n\r\nThe film shines in its ability to balance operatic world-building with personal stakes. Timothée Chalamet delivers his most commanding performance yet, growing into the mythic figure Paul is destined to become, while Zendaya’s Chani finally steps beyond the dream sequences into a fully realized character. The visuals are nothing short of spectacular — sandworms, Fremen sieges, and spice-fueled visions explode on screen with breathtaking clarity.\r\n\r\nWhile some may find the pacing deliberate, Dune: Part Two rewards patience. It\'s not just a sequel — it’s a payoff, one that cements the saga as this generation’s Lord of the Rings.', '2025-05-03 21:56:58', 9),
(11, 'The Marvels', 'The Marvels is a high-energy, intergalactic team-up that feels like a mix of sitcom banter and superhero spectacle. Directed by Nia DaCosta, the film juggles three leads — Carol Danvers, Kamala Khan, and Monica Rambeau — in a story that’s light on gravitas but big on fun.\r\n\r\nThe chemistry between the leads is the film’s greatest asset. Iman Vellani’s Kamala Khan is especially delightful, injecting youthful awe into the cosmic chaos. Action sequences are inventive, especially when the trio swaps places mid-fight due to a mysterious quantum entanglement. However, the plot is thin, the villain forgettable, and the tone occasionally slips into camp.\r\n\r\nThe Marvels doesn’t break new ground, but it doesn’t need to — it’s a breezy, Saturday-morning-style adventure that’s better enjoyed than analyzed. For diehard MCU fans, it\'s a fun ride. For others, it might feel like the universe is starting to stretch thin.', '2025-05-03 21:57:16', 6),
(12, 'Oppenheimer', 'Christopher Nolan’s Oppenheimer is a masterclass in historical storytelling, character study, and psychological intensity. With Cillian Murphy delivering a haunting, career-defining performance as J. Robert Oppenheimer, the film dives deep into the mind of the man who changed the world — and was shattered by it.\r\n\r\nThe non-linear narrative structure, a Nolan trademark, is used to powerful effect, weaving between the invention of the atomic bomb, courtroom interrogations, and Oppenheimer’s inner torment. The tension never lets up, even in dialogue-heavy scenes, and the Trinity Test sequence is a cinematic experience that will leave audiences breathless.\r\n\r\nSupported by a phenomenal cast — including Emily Blunt, Robert Downey Jr., and Florence Pugh — Oppenheimer isn’t just a biopic; it’s an exploration of guilt, power, and legacy. It’s heavy, cerebral, and sometimes harrowing, but undeniably one of the most important films of the decade.', '2025-05-03 22:03:32', 10),
(14, 'sadasdsa', 'asdasdasdsa', '2025-05-06 15:07:08', 2);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `article_id` int NOT NULL,
  `comment_name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_slovak_ci DEFAULT NULL,
  `content` text COLLATE utf8mb3_slovak_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_slovak_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `article_id`, `comment_name`, `content`, `created_at`) VALUES
(2, 10, 'shark_n_laugh', 'I think the movie was bad, almost fell asleep halfway in', '2025-05-04 21:14:01'),
(3, 12, 'sweetdreams', 'I saw it recently in cinema and was completely speechless', '2025-05-04 21:16:56'),
(4, 6, 'someone', 'I think you should rewatch it, it\'s an absolute cinema if you pay attention to the twist at the end', '2025-05-04 21:17:44'),
(5, 11, '123', 'definitely one of the biggest disappointments of the century', '2025-05-04 21:18:20'),
(6, 8, 'Veronica', 'finally someone who gives this film a proper appreciation!', '2025-05-04 21:18:56'),
(7, 7, 'elasticJeans', 'very interesting, I need to give this a try', '2025-05-04 21:19:43');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb3_slovak_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb3_slovak_ci DEFAULT NULL,
  `message` text COLLATE utf8mb3_slovak_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_slovak_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(3, 'Veronica', 'veronica@mail.com', 'Based on your film ratings I would suggest you to watch The Thing, I bet you will love it and I want to hear your thoughts on it', '2025-05-04 22:44:47'),
(4, 'Canada', 'smth@joke.sk', 'I think you should remove some troll comments on the review of Dune', '2025-05-04 22:46:37'),
(5, 'amy', 'yolo@gmail.com', 'something bla bla bla', '2025-05-06 14:57:37'),
(6, 'viktor', 'a.b.@gmail.com', 'sadasdsa', '2025-05-06 15:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb3_slovak_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8mb3_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_slovak_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password_hash`) VALUES
(1, 'admin', '$2y$10$cIw68SwFfgqunNfXwOdiSesGZuJRdcReUsCD5A7ZFB4oH389Mjgeu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id` (`article_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
