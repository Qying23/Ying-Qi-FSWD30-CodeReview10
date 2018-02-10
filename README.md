Ying-Qi-FSWD30-CodeReview10

Library Database with MySQL and PhP 

(a big Database with Authentication system)


CREATE TABLE user(user_id int,
                  firstName VARCHAR(55),
                  lastName VARCHAR(55),
                  adress VARCHAR(55),
                  email VARCHAR(55),
                  birthday date,
                  PRIMARY KEY (user_id))

CREATE TABLE Book(book_id int,
                  title VARCHAR(55),
                  Author VARCHAR(55),
                  adress VARCHAR(55),
                  image VARCHAR(255),
                  ISBN_code int,
                  PRIMARY KEY (book_id));

INSERT INTO Genre VALUES(2,'Horror')


https://mytoys.scene7.com/is/image/myToys/ext/1479727-01.jpg?$rtf_mt_prod-tile_xl$

INSERT INTO Users VALUES(1,'Hor','ror','steg 9','shfh','2002',1,1,1)

INSERT INTO Users VALUES(1,'City lights ','foto','blabla','12345','2002-01-01',1,1,1,1)


INSERT INTO publisher VALUES(5, 'United ','Artists ');



CREATE TABLE Book(book_id int,
                  title VARCHAR(55),
                  image VARCHAR(255),
                  description VARCHAR(255),
                  ISBN_code int,
                  published_date date,
                  PRIMARY KEY (book_id),
                 FOREIGN KEY (fk_author_id) REFERENCES author(author_id),
                 FOREIGN KEY (fk_size_id) REFERENCES size(size_id),
                 FOREIGN KEY (fk_author_id) REFERENCES author(author_id))ENGINE=INNODB;


CREATE TABLE Book(book_id int,
                  title VARCHAR(55),
                  image VARCHAR(255),
                  description VARCHAR(255),
                  ISBN_code int,
                  published_date date,
        fk_author_id int,
fk_size_id int,


                  PRIMARY KEY (book_id),
                 FOREIGN KEY (fk_author_id) REFERENCES author(author_id),
                 FOREIGN KEY (fk_size_id) REFERENCES size(size_id),
                 FOREIGN KEY (fk_author_id) REFERENCES author(author_id))ENGINE=INNODB;


