-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 27 sep. 2022 à 17:26
-- Version du serveur : 5.7.33
-- Version de PHP : 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `anime-list`
--

-- --------------------------------------------------------

--
-- Structure de la table `animes`
--

CREATE TABLE `animes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `type` varchar(8) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `year` int(4) NOT NULL,
  `synopsis` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `studio` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `ep_count` int(11) NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `animes`
--

INSERT INTO `animes` (`id`, `title`, `type`, `year`, `synopsis`, `studio`, `ep_count`, `cover`, `created_at`) VALUES
(1, 'Cowboy Bebop', 'TV', 1998, 'Enter a world in the distant future, where Bounty Hunters roam the solar system. Spike and Jet, bounty hunting partners, set out on journeys in an ever struggling effort to win bounty rewards to survive.\r\n\r\nWhile traveling, they meet up with other very interesting people. Could Faye, the beautiful and ridiculously poor gambler, Edward, the computer genius, and Ein, the engineered dog be a good addition to the group?', 'Sunrise', 26, 'https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx1-CXtrrkMpJ8Zq.png', '2022-09-17 09:38:04'),
(2, 'Shingeki no Kyojin\r\n', 'TV', 2013, 'Several hundred years ago, humans were nearly exterminated by titans. Titans are typically several stories tall, seem to have no intelligence, devour human beings and, worst of all, seem to do it for the pleasure rather than as a food source. A small percentage of humanity survived by walling themselves in a city protected by extremely high walls, even taller than the biggest of titans.\r\n\r\nFlash forward to the present and the city has not seen a titan in over 100 years. Teenage boy Eren and his foster sister Mikasa witness something horrific as the city walls are destroyed by a colossal titan that appears out of thin air. As the smaller titans flood the city, the two kids watch in horror as their mother is eaten alive. Eren vows that he will murder every single titan and take revenge for all of mankind.\r\n\r\n(Source: MangaHelpers)', 'Wit Studio\r\n', 25, 'https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx16498-C6FPmWm59CyP.jpg', '2022-09-17 09:38:04'),
(3, 'Shingeki no Kyojin 2', 'TV', 2017, 'Eren Jaeger swore to wipe out every last Titan, but in a battle for his life he wound up becoming the thing he hates most. With his new powers, he fights for humanity', 'Wit Studiox', 12, 'https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx20958-HuFJyr54Mmir.jpg', '2022-09-17 09:38:04'),
(4, 'Shingeki no Kyojin 3\r\n', 'TV', 2018, 'Eren and his companions in the 104th are assigned to the newly-formed Levi Squad, whose assignment is to keep Eren and Historia safe given Eren\'s newly-discovered power and Historia\'s knowledge and pedigree. Levi and Erwin have good reason to be concerned, because the priest of the Church that Hanji had hidden away was found tortured to death, making it clear that the Military Police are involved with the cover-up. Things get more harrowing when the MPs make a move on Erwin and the Levi Squad narrowly avoids capture. Eren is also having problems with his Titan transformation, and a deadly killer has been hired to secure Eren and Historia, one Levi knows all too well from his youth.\r\n\r\n(Source: Anime News Network)', 'Wit Studio', 12, 'https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx99147-5RXELRvwjFl6.jpg', '2022-09-17 09:38:04'),
(5, 'Kimetsu no Yaiba', 'TV', 2019, 'It is the Taisho Period in Japan. Tanjiro, a kindhearted boy who sells charcoal for a living, finds his family slaughtered by a demon. To make matters worse, his younger sister Nezuko, the sole survivor, has been transformed into a demon herself. Though devastated by this grim reality, Tanjiro resolves to become a “demon slayer” so that he can turn his sister back into a human, and kill the demon that massacred his family.\r\n\r\n(Source: Crunchyroll)', 'Ufotable', 26, 'https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx101922-PEn1CTc93blC.jpg', '2022-09-17 09:38:04'),
(6, 'DEATH NOTE', 'TV', 2006, 'Light Yagami is a genius high school student who is about to learn about life through a book of death. When a bored shinigami, a God of Death, named Ryuk drops a black notepad called a Death Note, Light receives power over life and death with the stroke of a pen. Determined to use this dark gift for the best, Light sets out to rid the world of evil… namely, the people he believes to be evil. Should anyone hold such power?\r\n\r\nThe consequences of Light’s actions will set the world ablaze.\r\n\r\n(Source: Viz Media)', 'MADHOUSE', 37, 'https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx1535-lawCwhzhi96X.jpg', '2022-09-17 09:38:04'),
(7, 'Ginga Tetsudou 999', 'TV', 1978, 'In a distant future, Tetsuro is a human boy who wants his body replaced with a robotic one. This is possible, but to do so he has to reach the Immortal Planet onboard the space train Galaxy Express 999. Maetel, a beautiful and mysterious blonde woman dressed in Russian style, joins him in the long journey through space. Every episode sees our heroes arriving in a new planet\'s space train station.\r\n\r\n(Source: Anime News Network)', 'Toei Animation', 113, 'https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx1491-XfYiHNYKDR2P.jpg', '2022-09-17 09:38:04'),
(8, 'Uchuu Kaizoku Captain Harlock', 'TV', 1978, 'The year is 2977. Mankind has become complacent and stagnant. All work is done by machines, while humans spend all their time on entertainment. But when a mysterious invader from the stars catches Earth unawares, only the legendary space pirate Captain Harlock and the crew of the Arcadia have the will to stand against them.\r\n\r\n(Source: Anime News Network)', 'Toei Animation', 42, 'https://s4.anilist.co/file/anilistcdn/media/anime/cover/medium/1000-dxR1NyPZXVbm.png', '2022-09-17 09:38:04'),
(9, 'Naruto', 'TV', 2002, 'Naruto Uzumaki, a hyperactive and knuckle-headed ninja, lives in Konohagakure, the Hidden Leaf village. Moments prior to his birth, a huge demon known as the Kyuubi, the Nine-tailed Fox, attacked Konohagakure and wreaked havoc. In order to put an end to the Kyuubi\'s rampage, the leader of the village, the 4th Hokage, sacrificed his life and sealed the monstrous beast inside the newborn Naruto.  Shunned because of the presence of the Kyuubi inside him, Naruto struggles to find his place in the village. He strives to become the Hokage of Konohagakure, and he meets many friends and foes along the way.  (Source: MAL Rewrite)', 'Studio Pierrot', 220, 'https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx20-YJvLbgJQPCoI.jpg', '2022-09-24 12:35:29'),
(10, 'NARUTO: Shippuuden', 'TV', 2007, 'Naruto: Shippuuden is the continuation of the original animated TV series Naruto. The story revolves around an older and slightly more matured Uzumaki Naruto and his quest to save his friend Uchiha Sasuke from the grips of the snake-like Shinobi, Orochimaru. After 2 and a half years Naruto finally returns to his village of Konoha, and sets about putting his ambitions to work, though it will not be easy, as he has amassed a few (more dangerous) enemies, in the likes of the shinobi organization; Akatsuki.  (Source: Anime News Network)', 'Studio Pierrot', 500, 'https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx1735-Az5gbEdWeotG.png', '2022-09-24 12:41:58'),
(11, 'Urusei Yatsura', 'TV', 1981, 'Urusei Yatsura concerns the tempestuous relationship between two focal characters: Ataru Moroboshi who is possibly the most unfaithful, unlucky and lecherous idiot to have ever been born, and there\'s Lum, a tigerskin-bikini clad alien package of sex appeal, jealousy and electricity who\'s fallen for him. The series chronicles the misadventures of these two stubborn teenagers along with a veritable entourage of weird characters. Among these characters is the richest boy on the planet, a superhuman schoolgirl, a fire-breathing baby, a powerful priestess/school nurse, a cute and psychotic alien vixen with a split personality, a gender-bending martial artist, an alien biker chick, an ice queen of Neptune, a deranged monk, a giant ghost cat and hundreds of other lunatic personalities; aliens, humans and inhumans alike interract in endless hysteria in a town named Tomobiki.', 'Studio Pierrot', 195, 'https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/nx1293-T6Ev080pKoum.jpg', '2022-09-17 09:38:04'),
(12, 'Cardcaptor Sakura', 'TV', 1998, 'One day, Kinomoto Sakura, a 4th grader stumbles upon the mysterious book of Clow. Upon opening it and reading the name of The Windy aloud, Sakura scatters the cards to the winds. Sakura is elected and appointed by Keroberos, Guardian of the Cards to capture the remaining cards. With her friend Tomoyo and rival Syaoran, Sakura begins an adventure that will forever change her.', 'MADHOUSE', 70, 'https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx232-ZqAR0y2xkowj.png', '2022-09-17 09:38:04'),
(13, 'Turn A Gundam', 'TV', 1999, 'This story is set thousands of years in the future. The people of Earth have forgotten the space wars of the past, reverting back to a pre-industrial existence. But the lunar settlers known as the Moonrace, who have retained their high technology, now plan to seize their mother planet for themselves. As the war of the worlds begins, a young Moonrace citizen named Loran Cehack, pilot of the legendary Turn A Gundam, struggles to bridge the gap between humanity\'s long-separated branches.\r\n\r\n(Source: GundamOfficial)', 'Sunrise', 50, 'https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/nx95-5okHk1B0VKro.jpg', '2022-09-17 09:38:04'),
(14, 'Akage no Anne', 'TV', 1979, 'Anne is an orphan full of imagination. When she arrives at her new home she learns that sometimes you have to be a sensible person too; at the same time her unique character changes, or at least attracts, the people around her. The story covers Anne\'s growth from about eleven to seventeen years old as she makes friends, goes to school and studies. At a difficult point in her life, Anne will have to make a hard choice and perhaps find a new dream.', 'Nippon Animation', 50, 'https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/nx283-SfZh7XERqZjy.png', '2022-09-17 09:38:04'),
(15, 'Lycoris Recoil', 'TV', 2002, '“LycoReco” is a café with a traditional Japanese twist located in downtown Tokyo. But the delicious coffee and sugary sweets are not the only orders this café takes! From delivering packages short distances, to pick-ups and drop-offs on the lonely streets at night, to zombies and giant monster extermination…?! Whatever your problem, we\'re here to help! We will solve any kind of \"trouble\" you may have!  Waiting for you are the ever-smiling poster-girl and the cool, serious newcomer. A petite girl who never wants to work and a young woman approaching thirty who wants to get married. And the manager is a nice guy who’s obsessed with Japan!  Whatever your order is, leave it all up to us?  (Source: Official Site)', 'A-1 Pictures', 13, 'https://s4.anilist.co/file/anilistcdn/media/anime/cover/large/bx143270-iZOJX2DMUFMC.jpg', '2022-09-26 14:59:15');

-- --------------------------------------------------------

--
-- Structure de la table `userlist`
--

CREATE TABLE `userlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `anime_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `userlist`
--

INSERT INTO `userlist` (`id`, `user_id`, `anime_id`) VALUES
(2, 6, 12),
(4, 6, 1),
(5, 6, 2),
(9, 6, 14),
(11, 10, 12);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin` int(1) NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `admin`, `avatar`) VALUES
(6, 'admin', 'hugo.laclau@gmail.com', '$2y$10$hv4MqTTpwu1pDcMxbtvZGeF2VSOCkXpv7.cIoSZsbXOrsQBY9PcPO', '2022-09-12 17:37:00', 1, 'https://s4.anilist.co/file/anilistcdn/user/avatar/large/b281933-gGNFJaYU1VLb.jpg'),
(7, 'test', 'test@gmail.com', '$2y$10$REYr5Tbt4capH3dbIxcJ7OvhpQ999Js6nPI4W2h1Peo3lZo2H19Km', '2022-09-25 09:49:38', 0, 'https://i.imgur.com/l4r52Ro.png'),
(8, 'hugo', 'nxzeah1@gmail.com', '$2y$10$7ECn6Ac1z10KzbZbgps4xeLqN2K7xI8QWmEeRrkx99D3Vqe6Gixr6', '2022-09-26 09:50:39', 0, 'https://i.imgur.com/l4r52Ro.png'),
(9, 'test2', 'test2@gmail.com', '$2y$10$xuIuHX.Z2nSaGsr//CDYTOb4znrb8ImpcX28BmxecGCx1hXY1SQpa', '2022-09-26 13:42:29', 0, 'https://i.imgur.com/l4r52Ro.png'),
(10, 'Lea', 'leadegr@gmail.com', '$2y$10$p5fu4MUuRHKKf/m5xpCdDe5X3l6Pbc90/KAIKagwiGJVlGNKdumli', '2022-09-27 11:27:09', 0, 'https://s4.anilist.co/file/anilistcdn/user/avatar/large/b265915-2kTuguaSzhMf.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animes`
--
ALTER TABLE `animes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `userlist`
--
ALTER TABLE `userlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anime_id` (`anime_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `animes`
--
ALTER TABLE `animes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `userlist`
--
ALTER TABLE `userlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `userlist`
--
ALTER TABLE `userlist`
  ADD CONSTRAINT `userlist_ibfk_1` FOREIGN KEY (`anime_id`) REFERENCES `animes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userlist_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
