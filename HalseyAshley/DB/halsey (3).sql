-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Апр 14 2023 г., 06:29
-- Версия сервера: 5.7.24
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `halsey`
--

-- --------------------------------------------------------

--
-- Структура таблицы `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image_url` varchar(50) NOT NULL,
  `description` varchar(20000) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `search`
--

INSERT INTO `search` (`id`, `name`, `image_url`, `description`, `link`) VALUES
(1, 'Halsey Carer', '20113.jpg', 'Frangipane started writing music when she was 17, and in 2012, she began posting videos to social media sites such as YouTube and Kik, and in particular Tumblr, under the username se7enteenblack. She became known for a parody of Taylor Swift\'s song \"I Knew You Were Trouble\", inspired by Swift\'s relationship with Harry Styles. She then wrote a follow-up song about their relationship, which was posted online in early 2013. In early 2014, Frangipane went to a party and met a \"music guy\" who asked her to collaborate on a song with him because he liked her voice. The result, a song about her ex-boyfriend, titled \"Ghost\", was posted by Frangipane on SoundCloud several weeks after it was recorded. Within hours, the song gained online popularity and she was subsequently contacted by several record labels, with the song eventually charting and going on radio. She signed with Astralwerks, feeling that they gave her more creative freedom than other labels that contacted her. Following this, Frangipane played numerous acoustic shows in different cities under several stage names.She chose Halsey as her permanent stage name because it is an anagram of her first name and is also a reference to the Halsey Street station of the New York City Subway in Brooklyn, a place where she spent a lot of time as a teenager.She also stated Halsey was the most popular name she used. Having written poems for years, Halsey began writing more serious songs as a way to promote them. Music became her \"confessional approach\" and a form of therapy after the difficult life she had endured.', 'index.html'),
(2, 'Halsey lyrics', 'manic3.jpg', 'You Can Read All Songs Texts In ', 's_txt.html'),
(3, 'Halsey albums', 'albums.jpg', 'American pop singer Halsey has released four studio albums, one live album, 14 extended plays (including one standard EP, seven compilation EPs, five remix EPs, and two live session EPs), 24 singles (including three as a featured artist), nine promotional singles, and 33 music videos. After being signed to Astralwerks, she released her debut EP Room 93 on October 27, 2014, and then toured with larger acts to promote it and her upcoming album. Since her debut, Halsey has released nine Gold, 11 Platinum, seven Multiplatinum, and one Diamond single in the United States alone.', 'albums.html'),
(4, 'Halsey songs', 'e1b67f5267a0c130c68d98efcf9aad98 (2).jpg', 'Yu Can Lisen And Download Halsey Songs In', 's_d.html'),
(5, 'Halsey and Alev Aydin', 'ha.jpg', '\nHalsey and Alev Aydin were first linked in 2019 and welcomed their son Ender in 2021.You Can Read About Halsey Personal Life in ', 'index.php'),
(6, 'Halsey baby', 'ender.jpg', 'Halsey welcomed their first child, son Ender, in July with boyfriend Alev Aydin.Halsey is looking back at their first year as a mother ahead of 2022.\r\n\r\nThe singer, 27, posted a series of photos to Instagram Friday from the past year, giving a new glimpse at their pregnancy and their five-month-old baby, Ender, whom they welcomed with boyfriend Alev Aydin in July.', 'index.php');

-- --------------------------------------------------------

--
-- Структура таблицы `s_d`
--

CREATE TABLE `s_d` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `s_url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `s_d`
--

INSERT INTO `s_d` (`id`, `name`, `s_url`) VALUES
(15, 'Forever ... (is a long time)   Halsey', 'Forever ... (is a long time)   Halsey.mp3'),
(16, 'Good Morning   Halsey', 'Good Morning   Halsey.mp3'),
(17, 'Halsey - 3am (Visualizer)', 'Halsey - 3am (Visualizer).m4a'),
(18, 'Halsey - Angel On Fire', 'Halsey - Angel On Fire.mp3'),
(19, 'Halsey - Ashley ', 'Halsey - Ashley (Lyric Video).m4a'),
(20, 'Halsey - Bells in Santa Fe ', 'Halsey - Bells in Santa Fe (Lyric Video).m4a'),
(21, 'Halsey - Castle ', 'Halsey - Castle (Official Audio).m4a'),
(22, 'Halsey - Colors', 'Halsey - Colors.mp3'),
(23, 'Halsey - Coming Down ', 'Halsey - Coming Down (Audio).m4a'),
(24, 'Halsey - Control', 'Halsey - Control (Official Audio).m4a'),
(25, 'Halsey - Don’t Play ', 'Halsey - Don’t Play (Audio).m4a'),
(28, '929 ', '929   Halsey.mp3'),
(29, '1121 ', '1121   Halsey.mp3'),
(30, 'Beautiful Stranger  ', 'beautiful stranger   Halsey.mp3'),
(31, 'Clementine', 'clementine   Halsey.mp3'),
(32, 'Darling ', 'Darling   Halsey.mp3'),
(33, 'Dominic s Interlude ', 'Dominic s Interlude   Halsey, Dominic Fike.mp3'),
(36, 'Drive ', 'Halsey - Drive (Audio).m4a'),
(37, ' Easier than Lying', 'Halsey - Easier than Lying (Lyric Video).m4a'),
(38, 'Empty Gold ', 'Halsey - Empty Gold (Audio).m4a'),
(39, 'Eyes Closed', 'Halsey - Eyes Closed.mp3'),
(40, 'Gasoline ', 'Halsey - Gasoline (Official Audio).m4a'),
(41, 'Girl is a Gun ', 'Halsey - Girl is a Gun (Lyric Video).m4a'),
(42, 'Graveyard', 'Halsey - Graveyard.m4a'),
(43, 'Haunting', 'Halsey - Haunting.mp3'),
(44, 'Heaven In Hiding', 'Halsey - Heaven In Hiding.mp3'),
(45, 'Hold Me Down ', 'Halsey - Hold Me Down (Audio).m4a'),
(46, 'Honey ', 'Halsey - honey (Lyric Video).m4a'),
(47, 'Hopeless (ft. Cashmere Cat)', 'Halsey - Hopeless (Audio) ft. Cashmere Cat.m4a'),
(48, 'I Hate Everybody', 'Halsey - I Hate Everybody.mp3'),
(49, ' I Walk The Line ', 'Halsey - I Walk The Line (Audio).m4a'),
(50, 'Is There Somewhere', 'Halsey - Is There Somewhere (mp3store.cc).mp3'),
(51, 'Killing Boys ', 'Halsey - killing boys (Visualizer).m4a'),
(52, 'Lie (ft. Quavo)', 'Halsey - Lie (Audio) ft. Quavo.m4a'),
(53, 'Lilith ', 'Halsey - Lilith (Lyric Video).m4a'),
(54, 'More ', 'Halsey - More (Lyric Video).m4a'),
(55, 'Roman Holiday', 'Halsey - Roman Holiday (Audio).m4a'),
(56, 'Sorry', 'Halsey - Sorry.m4a'),
(57, 'Still Learning', 'Halsey - Still Learning (Lyric Video).m4a'),
(58, 'Strange Love', 'Halsey - Strange Love (Audio).m4a'),
(59, 'The Lighthouse', 'Halsey - The Lighthouse (Lyric Video).m4a'),
(60, 'The Tradition', 'Halsey - The Tradition (Lyric Video).m4a'),
(61, 'Trouble ', 'Halsey - Trouble (Stripped_Audio).m4a'),
(62, 'Walls Could Talk ', 'Halsey - Walls Could Talk (Audio).m4a'),
(63, 'Whispers', 'Halsey - Whispers (Lyric Video).m4a'),
(64, 'Ya_aburnee', 'Halsey - Ya_aburnee (Lyric Video).m4a'),
(65, 'You asked for this', 'Halsey - You asked for this (Lyric Video).m4a'),
(66, 'Young God', 'Halsey - Young God (Audio).m4a'),
(67, 'Alone (feat. Big Sean & Stefflon Don)', 'Halsey feat. Big Sean & Stefflon Don - Alone.mp3'),
(68, 'Strangers(feat. Lauren Jauregui)', 'Halsey feat. Lauren Jauregui-Strangers.mp3'),
(69, 'Alanis Interlude(ft. Alanis Morissette)', 'Halsey, Alanis Morissette - Alanis_ Interlude (Visualizer).m4a'),
(70, 'Now or never', 'halsey_-_now-or-never.mp3'),
(71, '100 Letters', 'halsey-100-letters.mp3'),
(72, 'Bad At Love', 'Halsey-Bad At Love.mp3'),
(73, 'Devil In Me', 'Halsey-Devil In Me.mp3'),
(74, 'Ghost', 'Halsey-Ghost.mp3'),
(75, 'Hurricane', 'Halsey-Hurricane.mp3'),
(76, 'New Americana', 'Halsey-New Americana.mp3');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `s_d`
--
ALTER TABLE `s_d`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `s_d`
--
ALTER TABLE `s_d`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
