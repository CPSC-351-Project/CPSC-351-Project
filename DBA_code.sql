CREATE TABLE alumni (
  `user_id` bigint(20) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pword` varchar(75) NOT NULL,
  `grad_year` YEAR NULL DEFAULT NULL,
  `major_1` varchar(100) NULL DEFAULT NULL,
  `major_2` varchar(100) NULL DEFAULT NULL,
  `minor_1` varchar(100) NULL DEFAULT NULL,
  `minor_2` varchar(100) NULL DEFAULT NULL,
  `job` VARCHAR(45) NULL DEFAULT NULL,
  `bio` VARCHAR(200) NULL DEFAULT NULL,
  `contactInformation` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`));

CREATE TABLE forum_post (
  `pID` INT NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `post_title` tinytext NOT NULL,
  `post_description` text DEFAULT NULL,
  `post_date` datetime NOT NULL,
  PRIMARY KEY (`pID`));
  ALTER TABLE `forum_post` ADD CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `alumni`(`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
  
CREATE TABLE job_post (
  `JpostID` INT NOT NULL AUTO_INCREMENT,
  `jobDescription` LONGTEXT NULL DEFAULT NULL,
  `JobName` LONGTEXT NULL DEFAULT NULL,
  `Companyname` LONGTEXT NULL DEFAULT NULL,
  `JobLink` LONGTEXT NULL DEFAULT NULL,
  `Location` LONGTEXT NULL DEFAULT NULL,
  `postDate` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`JpostID`));

CREATE TABLE forum_reply (
  `rID` int(11) NOT NULL,
  `pID` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `reply` text NOT NULL,
  `reply_date` datetime NOT NULL,
  PRIMARY KEY (`rID`)
  );
  ALTER TABLE `forum_reply` ADD CONSTRAINT `postID` FOREIGN KEY (`pID`) REFERENCES `forum_post`(`pID`) ON DELETE CASCADE ON UPDATE CASCADE;

CREATE TABLE if NOT EXISTS `majors` (
  `majors` varchar(50) NOT NULL,
  PRIMARY KEY (`majors`));

INSERT INTO `majors` (`majors`) VALUES ('Accounting'), ('American Studies'), ('Anthropology'), ('Art History'), ('Biochemistry'), ('Biology'), ('Chemistry'), ('Classical Studies'), ('Communication'), ('Computer Engineering'), ('Computer Science'), ('Criminology'), ('Cybersecurity'), ('Economics'), ('Electrical Engineering'), ('English'), ('Environmental Science'), ('Finance'), ('French'), ('German'), ('Global Commerce and Culture'), ('History'), ('Information Science'), ('Interdisciplinary Studies'), ('Kinesiology'), ('Management'), ('Marketing'), ('Mathematics'), ('Mathematics - Computational and Applied'), ('Music'), ('Neuroscience'), ('Philosophy'), ('Physics'), ('Political Science'), ('Psychology'), ('Social Work'), ('Sociology'), ('Spanish'), ('Studio Art'), ('Theater');

CREATE TABLE if NOT EXISTS `minors` (
  `minors` varchar(50) NOT NULL,
  PRIMARY KEY (`minors`));

INSERT INTO `minors` (`minors`) VALUES ('African-American Studies'), ('American Studies'), ('Anthropology'), ('Art History'), ('Biology'), ('Business Administration'), ('Chemistry'), ('Childhood Studies'), ('Chinese Studies'), ('Civic Engagement and Social Justice'), ('Classical Studies'), ('Communication'), ('Computer Science'), ('Dance'), ('Data Science'), ('Digital Humanities'), ('Economics'), ('English'), ('Environmental Science'), ('Film Studies'), ('French'), ('German'), ('Graphic Design'), ('Health, Medical, and Wellness Studies'), ('History'), ('Human Rights and Conflict Resolution'), ('Information Science'), ('International Culture and Business'), ('Journalism'), ('Judeo-Christian Studies'), ('Latin'), ('Latin American'), ('Leadership Studies'), ('Linguistics'), ('Literature'), ('Mathematics'), ('Medieval and Renaissance Studies'), ('Middle East and North Africa Studies'), ('Military Science (ROTC)'), ('Museum Studies'), ('Philosophy and Religion'), ('Philosophy of Law'), ('Photography and Video Art'), ('Physics'), ('Political Science'), ('Psychology'), ('Social Work'), ('Sociology'), ('Spanish'), ('Studio Art'), ('Theater'), ('U.S. National Security Studies'), ('Women, Gender and Sexuality Studies'), ('Writing');

CREATE TABLE `messaging` (
  `mid` int(11) NOT NULL,
  `user` bigint(20) NOT NULL,
  `message` longtext NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  ADD PRIMARY KEY (`mid`)
);

ALTER TABLE `messaging`
  ADD KEY `user` (`user`);