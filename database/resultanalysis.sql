
CREATE TABLE `admin_login` (
  `userid` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
);


INSERT INTO `admin_login` (`userid`, `password`) VALUES
('admin', '123');


CREATE TABLE `class` (
  `name` varchar(200),
  `class_stream` varchar(20),
  `id` int(11) 
) ;


CREATE TABLE `result` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `rno` varchar(200) NOT NULL,
  `class_name` varchar(30) NOT NULL,
  `p1` int(11) NOT NULL,
  `p2` int(11) NOT NULL,
  `p3` int(11) NOT NULL,
  `p4` int(11) NOT NULL,
  `p5` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `percentage` float NOT NULL
) ;


CREATE TABLE `students` (
  `name` varchar(30),
  `rno` varchar(200) PRIMARY KEY NOT NULL,
  `class_name` varchar(30) NOT NULL
) ;


ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`userid`);


ALTER TABLE `class`
  ADD PRIMARY KEY (`name`);
  


ALTER TABLE `result`
  ADD KEY `class_name` (`class_name`),
  ADD KEY `name` (`name`,`rno`);

ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`class_name`) REFERENCES `class` (`name`);


ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`class_name`) REFERENCES `class` (`name`);

  ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`rno`) REFERENCES `students` (`rno`);




