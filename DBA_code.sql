CREATE TABLE if NOT EXISTS `customer` (
  `cust_id` INT NULL DEFAULT NULL,
  `cust_name` VARCHAR(40) NULL DEFAULT NULL,
  `tel_no` VARCHAR(15) NULL DEFAULT NULL,
  `date_of_reg` DATE NULL DEFAULT NULL);

CREATE TABLE if NOT EXISTS `alumni` (
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

CREATE TABLE if NOT EXISTS `company_rep` (
  `employerID` INT NOT NULL,
  `hiringManager` VARCHAR(70) NULL DEFAULT NULL,
  `contactInformation` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`employerID`));

CREATE TABLE if NOT EXISTS `students` (
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
  `careerIntrest` VARCHAR(45) NULL DEFAULT NULL,
  `resume` VARCHAR(45) NULL DEFAULT NULL,
  `bio` VARCHAR(200) NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`));

CREATE TABLE if NOT EXISTS `forum_post` (
  `FpostID` INT NOT NULL,
  `postDescription` VARCHAR(200) NULL DEFAULT NULL,
  `postDate` DATETIME NOT NULL,
  `students_studentID` INT NOT NULL,
  `alumni_alumniID` INT NOT NULL,
  `company_rep_employerID` INT NOT NULL,
  PRIMARY KEY (`FpostID`));

CREATE TABLE if NOT EXISTS `job_post` (
  `JpostID` INT NOT NULL AUTO_INCREMENT,
  `jobDescription` LONGTEXT NULL DEFAULT NULL,
  `JobName` LONGTEXT NULL DEFAULT NULL,
  `Companyname` LONGTEXT NULL DEFAULT NULL,
  `JobLink` LONGTEXT NULL DEFAULT NULL,
  `Location` LONGTEXT NULL DEFAULT NULL,
  `postDate` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`JpostID`));

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
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
)

ALTER TABLE `messaging`
  ADD PRIMARY KEY (`mid`),
  ADD KEY `user` (`user`);