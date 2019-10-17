Create TABLE user(
    id int(11) AUTO_INCREMENT PRIMARY KEY not null,
   myusername varchar(256) not null,
    mypassword varchar(256) not null,
    Email varchar(256) not null,
   
);

INSERT INTO     user (myusername, mypassword , Email)
VALUES('Tester','test123','test@gmail.com');
