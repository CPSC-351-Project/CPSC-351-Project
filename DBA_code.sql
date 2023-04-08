--
-- Database: `alumnireach`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `user_id` varchar(30) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pword` varchar(75) NOT NULL,
  `grad_year` year(4) DEFAULT NULL,
  `major_1` varchar(100) DEFAULT NULL,
  `major_2` varchar(100) DEFAULT NULL,
  `minor_1` varchar(100) DEFAULT NULL,
  `minor_2` varchar(100) DEFAULT NULL,
  `job` varchar(45) DEFAULT NULL,
  `bio` varchar(200) DEFAULT NULL,
  `contactInformation` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`user_id`, `first_name`, `last_name`, `email`, `pword`, `grad_year`, `major_1`, `major_2`, `minor_1`, `minor_2`, `job`, `bio`, `contactInformation`) VALUES
('3072', 'Ramsey', 'Holeman', 'rjholeman25@gmail.com', '1234', 2023, '', '', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eID` int(11) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `name` varchar(75) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `location` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forum_post`
--

CREATE TABLE `forum_post` (
  `pID` int(11) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `post_title` tinytext NOT NULL,
  `post_description` text DEFAULT NULL,
  `post_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `forum_post`
--

INSERT INTO `forum_post` (`pID`, `user_id`, `post_title`, `post_description`, `post_date`) VALUES
(8350, '3072', 'Testing', 'This is a test. Is this thing on???', '2023-04-06 17:41:07');

-- --------------------------------------------------------

--
-- Table structure for table `forum_reply`
--

CREATE TABLE `forum_reply` (
  `rID` int(11) NOT NULL,
  `pID` int(11) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `reply` text NOT NULL,
  `reply_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `forum_reply`
--

INSERT INTO `forum_reply` (`rID`, `pID`, `user_id`, `reply`, `reply_date`) VALUES
(62647, 8350, '3072', 'hello', '2023-04-06 17:49:33');

-- --------------------------------------------------------

--
-- Table structure for table `job_post`
--

CREATE TABLE `job_post` (
  `JpostID` int(11) NOT NULL,
  `jobDescription` longtext DEFAULT NULL,
  `JobName` longtext DEFAULT NULL,
  `Companyname` longtext DEFAULT NULL,
  `JobLink` longtext DEFAULT NULL,
  `Location` longtext DEFAULT NULL,
  `postDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `majors`
--

CREATE TABLE `majors` (
  `majors` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `majors`
--

INSERT INTO `majors` (`majors`) VALUES
('Accounting'),
('American Studies'),
('Anthropology'),
('Art History'),
('Biochemistry'),
('Biology'),
('Chemistry'),
('Classical Studies'),
('Communication'),
('Computer Engineering'),
('Computer Science'),
('Criminology'),
('Cybersecurity'),
('Economics'),
('Electrical Engineering'),
('English'),
('Environmental Science'),
('Finance'),
('French'),
('German'),
('Global Commerce and Culture'),
('History'),
('Information Science'),
('Interdisciplinary Studies'),
('Kinesiology'),
('Management'),
('Marketing'),
('Mathematics'),
('Mathematics - Computational and Applied'),
('Music'),
('Neuroscience'),
('Philosophy'),
('Physics'),
('Political Science'),
('Psychology'),
('Social Work'),
('Sociology'),
('Spanish'),
('Studio Art'),
('Theater');

-- --------------------------------------------------------

--
-- Table structure for table `messaging`
--

CREATE TABLE `messaging` (
  `mid` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `message` longtext NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `minors`
--

CREATE TABLE `minors` (
  `minors` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `minors`
--

INSERT INTO `minors` (`minors`) VALUES
('African-American Studies'),
('American Studies'),
('Anthropology'),
('Art History'),
('Biology'),
('Business Administration'),
('Chemistry'),
('Childhood Studies'),
('Chinese Studies'),
('Civic Engagement and Social Justice'),
('Classical Studies'),
('Communication'),
('Computer Science'),
('Dance'),
('Data Science'),
('Digital Humanities'),
('Economics'),
('English'),
('Environmental Science'),
('Film Studies'),
('French'),
('German'),
('Graphic Design'),
('Health, Medical, and Wellness Studies'),
('History'),
('Human Rights and Conflict Resolution'),
('Information Science'),
('International Culture and Business'),
('Journalism'),
('Judeo-Christian Studies'),
('Latin'),
('Latin American'),
('Leadership Studies'),
('Linguistics'),
('Literature'),
('Mathematics'),
('Medieval and Renaissance Studies'),
('Middle East and North Africa Studies'),
('Military Science (ROTC)'),
('Museum Studies'),
('Philosophy and Religion'),
('Philosophy of Law'),
('Photography and Video Art'),
('Physics'),
('Political Science'),
('Psychology'),
('Social Work'),
('Sociology'),
('Spanish'),
('Studio Art'),
('Theater'),
('U.S. National Security Studies'),
('Women, Gender and Sexuality Studies'),
('Writing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eID`);

--
-- Indexes for table `forum_post`
--
ALTER TABLE `forum_post`
  ADD PRIMARY KEY (`pID`),
  ADD KEY `user` (`user_id`);

--
-- Indexes for table `forum_reply`
--
ALTER TABLE `forum_reply`
  ADD PRIMARY KEY (`rID`),
  ADD KEY `postID` (`pID`);

--
-- Indexes for table `job_post`
--
ALTER TABLE `job_post`
  ADD PRIMARY KEY (`JpostID`);

--
-- Indexes for table `majors`
--
ALTER TABLE `majors`
  ADD PRIMARY KEY (`majors`);

--
-- Indexes for table `messaging`
--
ALTER TABLE `messaging`
  ADD PRIMARY KEY (`mid`),
  ADD KEY `user_id` (`user`);

--
-- Indexes for table `minors`
--
ALTER TABLE `minors`
  ADD PRIMARY KEY (`minors`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_post`
--
ALTER TABLE `job_post`
  MODIFY `JpostID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `forum_post`
--
ALTER TABLE `forum_post`
  ADD CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `alumni` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
--
-- Constraints for table `forum_reply`
--
ALTER TABLE `forum_reply`
  ADD CONSTRAINT `postID` FOREIGN KEY (`pID`) REFERENCES `forum_post` (`pID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `messaging`
--
ALTER TABLE `messaging`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user`) REFERENCES `alumni` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;