

CREATE TABLE `chats` (
  `id` int(11) NOT NULL,
  `content` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `chats` (`id`, `content`, `date`) VALUES
(1, 'Hi, nice to meet you', '2019-03-16 11:23:54'),
(2, 'very good', '2019-03-16 11:23:54'),
(3, 'asdf', '2019-03-16 13:01:28'),
(4, 'RRRR', '2019-03-16 13:01:56'),
(5, 'Sample chatting', '2019-03-16 13:02:06');


CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



INSERT INTO `users` (`id`, `email`, `name`, `date`) VALUES
(23, 'asdf', 'asdf', '2019-03-16 07:24:47'),
(24, 'I am RGI.', 'I am RGI.', '2019-03-16 07:25:08'),
(48, 'asdfsdf', 'asdfsdf', '2019-03-16 08:18:05'),
(49, 'asdfsdf', 'asdfsdf', '2019-03-16 08:18:09'),
(50, 'RRRR', 'RRRR', '2019-03-16 08:18:23'),
(51, 'asdfasdf', 'asdfasdf', '2019-03-16 08:21:25'),
(52, 'asdfdasdf', 'asdfdasdf', '2019-03-16 08:21:28'),
(53, 'I am very clear boy', 'I am very clear boy', '2019-03-16 08:21:36'),
(54, 'sadfasdf', 'sadfasdf', '2019-03-16 08:24:18'),
(55, 'Sorry', 'Sorry', '2019-03-16 08:24:27'),
(56, 'RRRR', 'RRRR', '2019-03-16 08:25:57'),
(57, 'adafasdf', 'adafasdf', '2019-03-16 08:39:58'),
(58, 'asdfasdf', 'asdfasdf', '2019-03-16 08:40:02'),
(59, '1111111', '1111111', '2019-03-16 09:26:16'),
(60, '222222', '222222', '2019-03-16 09:26:21'),
(61, '333333', '333333', '2019-03-16 09:26:25'),
(62, '444444', '444444', '2019-03-16 09:26:29');


ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;
