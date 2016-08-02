SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


DROP TABLE IF EXISTS `part`;
CREATE TABLE IF NOT EXISTS `part` (
  `partID` int(11) NOT NULL AUTO_INCREMENT,
  `partName` varchar(200) NOT NULL,
  PRIMARY KEY (`partID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

INSERT INTO `part` (`partID`, `partName`) VALUES
(1, 'Power Suppy Unit'),
(2, 'Cooling Fan'),
(3, 'Processor Cooling Fan'),
(4, 'Default Speaker'),
(5, 'South bridge'),
(6, 'SATA connector'),
(7, 'Motherboard power connector'),
(8, 'RAM slot'),
(9, 'IDE connector'),
(10, 'PCI slot'),
(11, 'AGP slot'),
(12, 'North bridge'),
(13, 'Processor');

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `publicIP` varchar(100) NOT NULL,
  `startTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

INSERT INTO `user` (`userID`, `publicIP`, `startTime`) VALUES
(1, '::1', '2016-06-24 09:39:09'),
(2, '::1', '2016-08-02 06:23:52'),
(3, '::1', '2016-08-02 06:55:18'),
(4, '::1', '2016-08-02 06:55:59');

DROP TABLE IF EXISTS `useranswer`;
CREATE TABLE IF NOT EXISTS `useranswer` (
  `userID` int(11) NOT NULL,
  `partID` int(11) NOT NULL,
  `answer` int(11) NOT NULL,
  PRIMARY KEY (`userID`,`partID`),
  KEY `partID` (`partID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `useranswer` (`userID`, `partID`, `answer`) VALUES
(1, 1, 1),
(1, 2, 1),
(1, 3, 1),
(1, 4, 1),
(1, 5, 1),
(1, 6, 1),
(1, 7, 1),
(1, 8, 1),
(1, 9, 1),
(1, 10, 1),
(1, 11, 1),
(1, 12, 0),
(1, 13, 1),
(2, 1, 1),
(2, 2, 0),
(2, 3, 1),
(2, 4, 1),
(2, 5, 1),
(2, 6, 1),
(2, 7, 1),
(2, 8, 1),
(2, 9, 1),
(2, 10, 1),
(2, 11, 1),
(2, 12, 1),
(2, 13, 1),
(3, 1, 0),
(3, 2, 1),
(3, 3, 1),
(3, 4, 1),
(3, 5, 0),
(3, 6, 0),
(3, 7, 1),
(3, 8, 1),
(3, 9, 1),
(3, 10, 0),
(3, 11, 1),
(3, 12, 0),
(3, 13, 1),
(4, 1, 0),
(4, 2, 0),
(4, 3, 1),
(4, 4, 1),
(4, 5, 0),
(4, 6, 0),
(4, 7, 1),
(4, 8, 0),
(4, 9, 0),
(4, 10, 0),
(4, 11, 0),
(4, 12, 1),
(4, 13, 0);


ALTER TABLE `useranswer`
  ADD CONSTRAINT `useranswer_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`),
  ADD CONSTRAINT `useranswer_ibfk_2` FOREIGN KEY (`partID`) REFERENCES `part` (`partID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
