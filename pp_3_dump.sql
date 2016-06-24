SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+05:30";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*
DROP DATABASE IF EXISTS `pp_3`;
CREATE DATABASE `pp_3`;
*/

DROP TABLE IF EXISTS `useranswer`;
CREATE TABLE IF NOT EXISTS `useranswer` (
  `userID` int(11) NOT NULL,
  `partID` int(11) NOT NULL,
  `answer` int(11) NOT NULL,
  PRIMARY KEY (`userID`,`partID`),
  KEY `partID` (`partID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `part`;
CREATE TABLE IF NOT EXISTS `part` (
  `partID` int(11) NOT NULL AUTO_INCREMENT,
  `partName` varchar(200) NOT NULL,
  PRIMARY KEY (`partID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `publicIP` varchar(100) NOT NULL,
  `startTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

ALTER TABLE `useranswer`
  ADD CONSTRAINT `useranswer_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`),
  ADD CONSTRAINT `useranswer_ibfk_2` FOREIGN KEY (`partID`) REFERENCES `part` (`partID`);


INSERT INTO `part`(`partName`) VALUES ('Power Suppy Unit');
INSERT INTO `part`(`partName`) VALUES ('Cooling Fan');
INSERT INTO `part`(`partName`) VALUES ('Processor Cooling Fan');
INSERT INTO `part`(`partName`) VALUES ('Default Speaker');