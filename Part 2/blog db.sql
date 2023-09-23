CREATE DATABASE IF NOT EXISTS blog db;
/*
Write a MysQli query to create one or more tables in the 
newly created database with the following attributes: 
	author full name, 
	author email address, 
	username, 
	password, 
	article title, 
	article full text,
	date of publication. 
Use your database normalization 
skills to create tables in this database.
*/

-- author table contains all the details about the author... self-explanatory 

drop table if exists users;

CREATE TABLE IF NOT EXISTS `users`(
`id` int(3) AUTO_INCREMENT NOT NULL,
`fullname` varchar(60), 
`email` varchar(50) UNIQUE, 
`username` varchar(20) NOT NULL UNIQUE, 
`password` varchar(100),
`created_at` datetime not null default current_timestamp(),
`updated_at` datetime not null default current_timestamp() ON UPDATE current_timestamp(),


PRIMARY KEY (`id`)
);

drop table if exists articles;

CREATE TABLE IF NOT EXISTS articles(
-- article number is inserted automatically. No need to have an insert query for it.
`articleNumber` int(6) AUTO_INCREMENT,
`articleTitle` varchar(70), 
`articleFulltext` varchar(5000),
`publicationDate` date,
`username` varchar(20) NOT NULL UNIQUE, 

-- the foreign key is username from the users table 
PRIMARY KEY (`articleNumber`),
CONSTRAINT FK_0
FOREIGN KEY (`username`)
REFERENCES `users` (`username`)
);

INSERT INTO users (`fullname`, `username`, `email`, `password`, `admin`) values ("Panther Hotits", "panther", "panther@hot.com", "QmyVF&zz${r{1L`=", "1");

INSERT INTO articles (`articleTitle`, `articleFulltext`, `publicationDate`, `username`) VALUES ("Note 1", "This is an Example of a note", "2023-06-17", "panther");

SELECT * from users;
SELECT * FROM articles;