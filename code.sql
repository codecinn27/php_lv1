/*this is just a note for every sql command that I just learned*/
--- 1
CREATE DATABASE testdb;
--- 2
USE DATABASE testdb;
--- 3
DROP DATABASE testdb;
--- 4
CREATE TABLE users(
	
    id INT(2) NOT NULL,
    username VARCHAR(20),
    email VARCHAR(20),
    password VARCHAR(30)
);


--- 5 show all the data store inside the users table
DESC users;

--- 6 
DROP TABLE users;

--- 7 insert data into the users table
INSERT INTO users (id, username, email, password) VALUES(1, "user1", "user1@gmail.com","user123");

--- 8 insert multiple data at once
INSERT INTO users (id, username, email, password) 
	VALUES(2, "user2", "user2@gmail.com","user123"),
    (3, "user3", "user3@gmail.com","user123"),
    (4, "user4", "user4@gmail.com","user123");

--- 9 update data based on the filter
UPDATE users SET username = "usernumber 4", email ="user4@yahoo.com" WHERE id = 4

--- 10 delete user data based on the filter
DELETE FROM users WHERE id =4;

--- 11 create table with primary key
CREATE TABLE blogs(

    id INT(2) NOT NULL,
    title VARCHAR(20),
    body TEXT,
    
    PRIMARY KEY (id)
);


--- 12 add foreign key, refer from another table , joint data
ALTER TABLE blogs ADD FOREIGN KEY (user_id) REFERENCES users(id);

--- 13 mysql functions
SELECT SUM(id) FROM users;
SELECT COUNT(id) FROM users;
SELECT AVG(id) FROM users;  //average
/* sum, avg, count, min, max*/

--- 14
SELECT  * FROM blogs
SELECT password FROM users
SELECT password, id FROM users
SELECT id FROM users WHERE id = 2
SELECT username FROM users WHERE username = “user1”
SELECT id FROM users WHERE id != 2
SELECT id FROM users WHERE id > 2
SELECT id FROM users WHERE id >= 2
SELECT id FROM users WHERE id = 1 OR id=2


--- 15 display data with either ascending or descending order
SELECT * FROM blogs ORDER BY id ASC;
SELECT * FROM blogs ORDER BY id DSC;

--- 16
CREATE DATABASE IF NOT EXISTS cats;

USE cats;
CREATE TABLE cats (
    id int(2) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name varchar(20)
);

INSERT INTO cats (name)
	VALUES ("php"),
    ("js"),
    ("ruby");


--- 17 
SELECT * FROM blogs GROUP BY cat_name
SELECT title, body, cat_name ,COUNT(*) FROM blogs GROUP BY cat_name;

--- 18 
ALTER TABLE blogs ADD COLUMN create_at timestamp
ALTER TABLE blogs ADD COLUMN update_at timestamp
ALTER TABLE blogs DROP COLUMN create_at

--- 19 aliases
SELECT title AS ti from blogs

--- 20 inner joins, join two tables together into one table
SELECT * FROM cats INNER JOIN blogs ON cats.name = blogs.cat_name
SELECT cats.name, blogs.cat_name FROM cats INNER JOIN blogs ON cats.name = blogs.cat_name
SELECT cats.name, blogs.cat_name, blogs.title, blogs.body FROM cats INNER JOIN blogs ON cats.name = blogs.cat_name

