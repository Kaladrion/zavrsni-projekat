CREATE TABLE posts (
	Id int(11) AUTO_INCREMENT PRIMARY KEY not null,
	Title varchar(255) not null,
	Body varchar(255) not null,
	Author varchar(255) not null,
	Created_at Date not null,
);

INSERT INTO posts (Title, Body, Author, Created_at) VALUES;

