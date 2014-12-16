CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10),
  `username` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
