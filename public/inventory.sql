SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


-- table structure for user registration
CREATE TABLE `register` (
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `password_1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


