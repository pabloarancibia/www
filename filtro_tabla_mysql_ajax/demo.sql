-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 19-05-2012 a las 04:04:16
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `jeasy`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `pais`
-- 

CREATE TABLE `pais` (
  `id_pais` int(11) NOT NULL auto_increment,
  `nombre_pais` varchar(64) NOT NULL default '',
  PRIMARY KEY  (`id_pais`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=240 ;

-- 
-- Volcar la base de datos para la tabla `pais`
-- 

INSERT INTO `pais` VALUES (1, 'Afghanistan');
INSERT INTO `pais` VALUES (2, 'Albania');
INSERT INTO `pais` VALUES (3, 'Algeria');
INSERT INTO `pais` VALUES (4, 'American Samoa');
INSERT INTO `pais` VALUES (5, 'Andorra');
INSERT INTO `pais` VALUES (6, 'Angola');
INSERT INTO `pais` VALUES (7, 'Anguilla');
INSERT INTO `pais` VALUES (8, 'Antarctica');
INSERT INTO `pais` VALUES (9, 'Antigua and Barbuda');
INSERT INTO `pais` VALUES (10, 'Argentina');
INSERT INTO `pais` VALUES (11, 'Armenia');
INSERT INTO `pais` VALUES (12, 'Aruba');
INSERT INTO `pais` VALUES (13, 'Australia');
INSERT INTO `pais` VALUES (14, 'Austria');
INSERT INTO `pais` VALUES (15, 'Azerbaijan');
INSERT INTO `pais` VALUES (16, 'Bahamas');
INSERT INTO `pais` VALUES (17, 'Bahrain');
INSERT INTO `pais` VALUES (18, 'Bangladesh');
INSERT INTO `pais` VALUES (19, 'Barbados');
INSERT INTO `pais` VALUES (20, 'Belarus');
INSERT INTO `pais` VALUES (21, 'Belgium');
INSERT INTO `pais` VALUES (22, 'Belize');
INSERT INTO `pais` VALUES (23, 'Benin');
INSERT INTO `pais` VALUES (24, 'Bermuda');
INSERT INTO `pais` VALUES (25, 'Bhutan');
INSERT INTO `pais` VALUES (26, 'Bolivia');
INSERT INTO `pais` VALUES (27, 'Bosnia and Herzegowina');
INSERT INTO `pais` VALUES (28, 'Botswana');
INSERT INTO `pais` VALUES (29, 'Bouvet Island');
INSERT INTO `pais` VALUES (30, 'Brazil');
INSERT INTO `pais` VALUES (31, 'British Indian Ocean Territory');
INSERT INTO `pais` VALUES (32, 'Brunei Darussalam');
INSERT INTO `pais` VALUES (33, 'Bulgaria');
INSERT INTO `pais` VALUES (34, 'Burkina Faso');
INSERT INTO `pais` VALUES (35, 'Burundi');
INSERT INTO `pais` VALUES (36, 'Cambodia');
INSERT INTO `pais` VALUES (37, 'Cameroon');
INSERT INTO `pais` VALUES (38, 'Canada');
INSERT INTO `pais` VALUES (39, 'Cape Verde');
INSERT INTO `pais` VALUES (40, 'Cayman Islands');
INSERT INTO `pais` VALUES (41, 'Central African Republic');
INSERT INTO `pais` VALUES (42, 'Chad');
INSERT INTO `pais` VALUES (43, 'Chile');
INSERT INTO `pais` VALUES (44, 'China');
INSERT INTO `pais` VALUES (45, 'Christmas Island');
INSERT INTO `pais` VALUES (46, 'Cocos (Keeling) Islands');
INSERT INTO `pais` VALUES (47, 'Colombia');
INSERT INTO `pais` VALUES (48, 'Comoros');
INSERT INTO `pais` VALUES (49, 'Congo');
INSERT INTO `pais` VALUES (50, 'Cook Islands');
INSERT INTO `pais` VALUES (51, 'Costa Rica');
INSERT INTO `pais` VALUES (52, 'Cote D''Ivoire');
INSERT INTO `pais` VALUES (53, 'Croatia');
INSERT INTO `pais` VALUES (54, 'Cuba');
INSERT INTO `pais` VALUES (55, 'Cyprus');
INSERT INTO `pais` VALUES (56, 'Czech Republic');
INSERT INTO `pais` VALUES (57, 'Denmark');
INSERT INTO `pais` VALUES (58, 'Djibouti');
INSERT INTO `pais` VALUES (59, 'Dominica');
INSERT INTO `pais` VALUES (60, 'Dominican Republic');
INSERT INTO `pais` VALUES (61, 'East Timor');
INSERT INTO `pais` VALUES (62, 'Ecuador');
INSERT INTO `pais` VALUES (63, 'Egypt');
INSERT INTO `pais` VALUES (64, 'El Salvador');
INSERT INTO `pais` VALUES (65, 'Equatorial Guinea');
INSERT INTO `pais` VALUES (66, 'Eritrea');
INSERT INTO `pais` VALUES (67, 'Estonia');
INSERT INTO `pais` VALUES (68, 'Ethiopia');
INSERT INTO `pais` VALUES (69, 'Falkland Islands (Malvinas)');
INSERT INTO `pais` VALUES (70, 'Faroe Islands');
INSERT INTO `pais` VALUES (71, 'Fiji');
INSERT INTO `pais` VALUES (72, 'Finland');
INSERT INTO `pais` VALUES (73, 'France');
INSERT INTO `pais` VALUES (74, 'France, Metropolitan');
INSERT INTO `pais` VALUES (75, 'French Guiana');
INSERT INTO `pais` VALUES (76, 'French Polynesia');
INSERT INTO `pais` VALUES (77, 'French Southern Territories');
INSERT INTO `pais` VALUES (78, 'Gabon');
INSERT INTO `pais` VALUES (79, 'Gambia');
INSERT INTO `pais` VALUES (80, 'Georgia');
INSERT INTO `pais` VALUES (81, 'Germany');
INSERT INTO `pais` VALUES (82, 'Ghana');
INSERT INTO `pais` VALUES (83, 'Gibraltar');
INSERT INTO `pais` VALUES (84, 'Greece');
INSERT INTO `pais` VALUES (85, 'Greenland');
INSERT INTO `pais` VALUES (86, 'Grenada');
INSERT INTO `pais` VALUES (87, 'Guadeloupe');
INSERT INTO `pais` VALUES (88, 'Guam');
INSERT INTO `pais` VALUES (89, 'Guatemala');
INSERT INTO `pais` VALUES (90, 'Guinea');
INSERT INTO `pais` VALUES (91, 'Guinea-bissau');
INSERT INTO `pais` VALUES (92, 'Guyana');
INSERT INTO `pais` VALUES (93, 'Haiti');
INSERT INTO `pais` VALUES (94, 'Heard and Mc Donald Islands');
INSERT INTO `pais` VALUES (95, 'Honduras');
INSERT INTO `pais` VALUES (96, 'Hong Kong');
INSERT INTO `pais` VALUES (97, 'Hungary');
INSERT INTO `pais` VALUES (98, 'Iceland');
INSERT INTO `pais` VALUES (99, 'India');
INSERT INTO `pais` VALUES (100, 'Indonesia');
INSERT INTO `pais` VALUES (101, 'Iran (Islamic Republic of)');
INSERT INTO `pais` VALUES (102, 'Iraq');
INSERT INTO `pais` VALUES (103, 'Ireland');
INSERT INTO `pais` VALUES (104, 'Israel');
INSERT INTO `pais` VALUES (105, 'Italy');
INSERT INTO `pais` VALUES (106, 'Jamaica');
INSERT INTO `pais` VALUES (107, 'Japan');
INSERT INTO `pais` VALUES (108, 'Jordan');
INSERT INTO `pais` VALUES (109, 'Kazakhstan');
INSERT INTO `pais` VALUES (110, 'Kenya');
INSERT INTO `pais` VALUES (111, 'Kiribati');
INSERT INTO `pais` VALUES (112, 'Korea, Democratic People''s Republic of');
INSERT INTO `pais` VALUES (113, 'Korea, Republic of');
INSERT INTO `pais` VALUES (114, 'Kuwait');
INSERT INTO `pais` VALUES (115, 'Kyrgyzstan');
INSERT INTO `pais` VALUES (116, 'Lao People''s Democratic Republic');
INSERT INTO `pais` VALUES (117, 'Latvia');
INSERT INTO `pais` VALUES (118, 'Lebanon');
INSERT INTO `pais` VALUES (119, 'Lesotho');
INSERT INTO `pais` VALUES (120, 'Liberia');
INSERT INTO `pais` VALUES (121, 'Libyan Arab Jamahiriya');
INSERT INTO `pais` VALUES (122, 'Liechtenstein');
INSERT INTO `pais` VALUES (123, 'Lithuania');
INSERT INTO `pais` VALUES (124, 'Luxembourg');
INSERT INTO `pais` VALUES (125, 'Macau');
INSERT INTO `pais` VALUES (126, 'Macedonia, The Former Yugoslav Republic of');
INSERT INTO `pais` VALUES (127, 'Madagascar');
INSERT INTO `pais` VALUES (128, 'Malawi');
INSERT INTO `pais` VALUES (129, 'Malaysia');
INSERT INTO `pais` VALUES (130, 'Maldives');
INSERT INTO `pais` VALUES (131, 'Mali');
INSERT INTO `pais` VALUES (132, 'Malta');
INSERT INTO `pais` VALUES (133, 'Marshall Islands');
INSERT INTO `pais` VALUES (134, 'Martinique');
INSERT INTO `pais` VALUES (135, 'Mauritania');
INSERT INTO `pais` VALUES (136, 'Mauritius');
INSERT INTO `pais` VALUES (137, 'Mayotte');
INSERT INTO `pais` VALUES (138, 'Mexico');
INSERT INTO `pais` VALUES (139, 'Micronesia, Federated States of');
INSERT INTO `pais` VALUES (140, 'Moldova, Republic of');
INSERT INTO `pais` VALUES (141, 'Monaco');
INSERT INTO `pais` VALUES (142, 'Mongolia');
INSERT INTO `pais` VALUES (143, 'Montserrat');
INSERT INTO `pais` VALUES (144, 'Morocco');
INSERT INTO `pais` VALUES (145, 'Mozambique');
INSERT INTO `pais` VALUES (146, 'Myanmar');
INSERT INTO `pais` VALUES (147, 'Namibia');
INSERT INTO `pais` VALUES (148, 'Nauru');
INSERT INTO `pais` VALUES (149, 'Nepal');
INSERT INTO `pais` VALUES (150, 'Netherlands');
INSERT INTO `pais` VALUES (151, 'Netherlands Antilles');
INSERT INTO `pais` VALUES (152, 'New Caledonia');
INSERT INTO `pais` VALUES (153, 'New Zealand');
INSERT INTO `pais` VALUES (154, 'Nicaragua');
INSERT INTO `pais` VALUES (155, 'Niger');
INSERT INTO `pais` VALUES (156, 'Nigeria');
INSERT INTO `pais` VALUES (157, 'Niue');
INSERT INTO `pais` VALUES (158, 'Norfolk Island');
INSERT INTO `pais` VALUES (159, 'Northern Mariana Islands');
INSERT INTO `pais` VALUES (160, 'Norway');
INSERT INTO `pais` VALUES (161, 'Oman');
INSERT INTO `pais` VALUES (162, 'Pakistan');
INSERT INTO `pais` VALUES (163, 'Palau');
INSERT INTO `pais` VALUES (164, 'Panama');
INSERT INTO `pais` VALUES (165, 'Papua New Guinea');
INSERT INTO `pais` VALUES (166, 'Paraguay');
INSERT INTO `pais` VALUES (167, 'Peru');
INSERT INTO `pais` VALUES (168, 'Philippines');
INSERT INTO `pais` VALUES (169, 'Pitcairn');
INSERT INTO `pais` VALUES (170, 'Poland');
INSERT INTO `pais` VALUES (171, 'Portugal');
INSERT INTO `pais` VALUES (172, 'Puerto Rico');
INSERT INTO `pais` VALUES (173, 'Qatar');
INSERT INTO `pais` VALUES (174, 'Reunion');
INSERT INTO `pais` VALUES (175, 'Romania');
INSERT INTO `pais` VALUES (176, 'Russian Federation');
INSERT INTO `pais` VALUES (177, 'Rwanda');
INSERT INTO `pais` VALUES (178, 'Saint Kitts and Nevis');
INSERT INTO `pais` VALUES (179, 'Saint Lucia');
INSERT INTO `pais` VALUES (180, 'Saint Vincent and the Grenadines');
INSERT INTO `pais` VALUES (181, 'Samoa');
INSERT INTO `pais` VALUES (182, 'San Marino');
INSERT INTO `pais` VALUES (183, 'Sao Tome and Principe');
INSERT INTO `pais` VALUES (184, 'Saudi Arabia');
INSERT INTO `pais` VALUES (185, 'Senegal');
INSERT INTO `pais` VALUES (186, 'Seychelles');
INSERT INTO `pais` VALUES (187, 'Sierra Leone');
INSERT INTO `pais` VALUES (188, 'Singapore');
INSERT INTO `pais` VALUES (189, 'Slovakia (Slovak Republic)');
INSERT INTO `pais` VALUES (190, 'Slovenia');
INSERT INTO `pais` VALUES (191, 'Solomon Islands');
INSERT INTO `pais` VALUES (192, 'Somalia');
INSERT INTO `pais` VALUES (193, 'South Africa');
INSERT INTO `pais` VALUES (194, 'South Georgia and the South Sandwich Islands');
INSERT INTO `pais` VALUES (195, 'Spain');
INSERT INTO `pais` VALUES (196, 'Sri Lanka');
INSERT INTO `pais` VALUES (197, 'St. Helena');
INSERT INTO `pais` VALUES (198, 'St. Pierre and Miquelon');
INSERT INTO `pais` VALUES (199, 'Sudan');
INSERT INTO `pais` VALUES (200, 'Suriname');
INSERT INTO `pais` VALUES (201, 'Svalbard and Jan Mayen Islands');
INSERT INTO `pais` VALUES (202, 'Swaziland');
INSERT INTO `pais` VALUES (203, 'Sweden');
INSERT INTO `pais` VALUES (204, 'Switzerland');
INSERT INTO `pais` VALUES (205, 'Syrian Arab Republic');
INSERT INTO `pais` VALUES (206, 'Taiwan');
INSERT INTO `pais` VALUES (207, 'Tajikistan');
INSERT INTO `pais` VALUES (208, 'Tanzania, United Republic of');
INSERT INTO `pais` VALUES (209, 'Thailand');
INSERT INTO `pais` VALUES (210, 'Togo');
INSERT INTO `pais` VALUES (211, 'Tokelau');
INSERT INTO `pais` VALUES (212, 'Tonga');
INSERT INTO `pais` VALUES (213, 'Trinidad and Tobago');
INSERT INTO `pais` VALUES (214, 'Tunisia');
INSERT INTO `pais` VALUES (215, 'Turkey');
INSERT INTO `pais` VALUES (216, 'Turkmenistan');
INSERT INTO `pais` VALUES (217, 'Turks and Caicos Islands');
INSERT INTO `pais` VALUES (218, 'Tuvalu');
INSERT INTO `pais` VALUES (219, 'Uganda');
INSERT INTO `pais` VALUES (220, 'Ukraine');
INSERT INTO `pais` VALUES (221, 'United Arab Emirates');
INSERT INTO `pais` VALUES (222, 'United Kingdom');
INSERT INTO `pais` VALUES (223, 'United States');
INSERT INTO `pais` VALUES (224, 'United States Minor Outlying Islands');
INSERT INTO `pais` VALUES (225, 'Uruguay');
INSERT INTO `pais` VALUES (226, 'Uzbekistan');
INSERT INTO `pais` VALUES (227, 'Vanuatu');
INSERT INTO `pais` VALUES (228, 'Vatican City State (Holy See)');
INSERT INTO `pais` VALUES (229, 'Venezuela');
INSERT INTO `pais` VALUES (230, 'Viet Nam');
INSERT INTO `pais` VALUES (231, 'Virgin Islands (British)');
INSERT INTO `pais` VALUES (232, 'Virgin Islands (U.S.)');
INSERT INTO `pais` VALUES (233, 'Wallis and Futuna Islands');
INSERT INTO `pais` VALUES (234, 'Western Sahara');
INSERT INTO `pais` VALUES (235, 'Yemen');
INSERT INTO `pais` VALUES (236, 'Yugoslavia');
INSERT INTO `pais` VALUES (237, 'Zaire');
INSERT INTO `pais` VALUES (238, 'Zambia');
INSERT INTO `pais` VALUES (239, 'Zimbabwe');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `personas`
-- 

CREATE TABLE `personas` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nacimiento` date NOT NULL,
  `pais` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- 
-- Volcar la base de datos para la tabla `personas`
-- 

INSERT INTO `personas` VALUES (1, 'Jorge Luis', 'guty_888@hotmail.com', '1989-07-02', 167);
INSERT INTO `personas` VALUES (2, 'Christian', 'christian_abn@hotmail.com', '1990-03-23', 167);
INSERT INTO `personas` VALUES (3, 'Maria Gonzales M.', 'mariag@gmail.com', '1980-02-11', 30);
INSERT INTO `personas` VALUES (4, 'Jose Perez', 'josep@yahoo.es', '1990-01-02', 138);
INSERT INTO `personas` VALUES (5, 'Nicasion Nieto', 'nicasio2324@hotmail.com', '1986-02-10', 195);
INSERT INTO `personas` VALUES (6, 'Laura Huaman', 'laurah@gmail.com', '1970-12-06', 62);
INSERT INTO `personas` VALUES (7, 'Jose Maria', 'josemaria2@company.es', '1992-07-02', 26);
INSERT INTO `personas` VALUES (8, 'Ana Gonzales', 'anita_love@gmail.com', '1987-02-10', 100);
INSERT INTO `personas` VALUES (9, 'Jose Toledo', 'expertojose@hotmail.es', '1960-06-11', 10);
INSERT INTO `personas` VALUES (10, 'Carla Montaño', 'caralamg@yahoo.es', '1970-10-20', 100);
INSERT INTO `personas` VALUES (11, 'Maria Tereza', 'marteraza@empresa.net', '1970-12-22', 100);
INSERT INTO `personas` VALUES (12, 'Manual Paredez', 'manu@hotmail.com', '1980-11-20', 10);
