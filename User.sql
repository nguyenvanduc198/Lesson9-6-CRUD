
DROP TABLE IF EXISTS `User`;
CREATE TABLE `User` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

TRUNCATE `User`;
INSERT INTO `User` (`id`, `name`, `username`, `password`, `email`, `createdAt`, `updatedAt`) VALUES
(1,	'Nguyễn Thị Phương',	'phuongnt',	'12345678',	'nguyenthiphuong@gmail.com',	'2021-03-01 16:22:21',	'2021-03-01 16:22:21'),
(2,	'Đỗ Việt Anh',	'vietanhdo',	'12345678',	'vietanhdo@gmail.com',	'2021-03-01 16:22:48',	'2021-03-01 16:22:48'),
(3,	'cao văn thành',	'thanhcv',	'12345678',	'kum_cp@yahoo.com.vn',	NULL,	NULL);

-- 2021-03-01 08:45:37
