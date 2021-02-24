DROP DATABASE IF EXISTS hardb;

CREATE DATABASE hardb;


DROP TABLE IF EXISTS `users` ;
CREATE TABLE IF NOT EXISTS  `users` (
  `password` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `username` VARCHAR(255) NOT NULL,
  `type` ENUM('user', 'admin') NOT NULL DEFAULT 'user',
  `firstname` VARCHAR(45) NOT NULL,
  `lastname` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`email`)
 )
ENGINE = MariaDB
DEFAULT CHARACTER SET = utf8;


DROP TABLE IF EXISTS `data` ;
CREATE TABLE IF NOT EXISTS `data` (
  `useremail` VARCHAR(255) NOT NULL,
  `startedDateTime` VARCHAR(255) NOT NULL,
  `wait` VARCHAR(255),
  `serverIPAddress` VARCHAR(255) NOT NULL,
  `method` VARCHAR(45) NOT NULL,
  `domainname` VARCHAR(255) NOT NULL,
  `status` VARCHAR(255) NOT NULL,
  `statusText` VARCHAR(255) NOT NULL,
  `contenttype` VARCHAR(255) NOT NULL,
  `cachecontrol` VARCHAR(255) NOT NULL,
  `pragma` VARCHAR(255) NOT NULL,
  `expires` VARCHAR(255) NOT NULL,
  `age` VARCHAR(255) NOT NULL ,
  `lastmodified` VARCHAR(255) NOT NULL,
  `host` VARCHAR(255) NOT NULL,
  `paroxos` VARCHAR(255),
  `city` VARCHAR(255),
  `geoloc` VARCHAR(255),
  `dataid` VARCHAR(255),
  `datadate` DATE,
  `uploaddate` VARCHAR(255),
  `server_loc`  VARCHAR(255),
  PRIMARY KEY (`startedDateTime`, `useremail`,`dataid`,`wait`),
   CONSTRAINT `actuser` FOREIGN KEY (`useremail`) REFERENCES `users`(`email`)
    ON DELETE CASCADE ON UPDATE CASCADE
  )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;



INSERT INTO `users` VALUES('1234!Asss','geodimyolo@gmail.com','geodim','user','geo','dim');
CREATE INDEX myind ON data(`contenttype`,`method`,`paroxos`,`datadate`);
CREATE INDEX myind1 ON data(`contenttype`);
CREATE INDEX myind2 ON data(`method`);
CREATE INDEX myind3 ON data(`paroxos`);
CREATE INDEX myind4 ON data(`age`);
CREATE INDEX myind5 ON data(`domainname`);
CREATE INDEX myind6 ON data(`status`);





