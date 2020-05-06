CREATE DATABASE IF NOT EXISTS msteinmetz_guestbook;

CREATE TABLE IF NOT EXISTS `guestbook` (
`id` int(4) NOT NULL auto_increment,
`name` varchar(65) NOT NULL default '',
`email` varchar(65) NOT NULL default '',
`comment` longtext NOT NULL,
`datetime` varchar(65) NOT NULL default '',
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;