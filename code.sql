--  Name DataBase : ajdar  --
-- 
/*
conn(
    URL = localhost ;
    Name = root ;
    PassWord = 12345 ;
    NameDB = ajdar ;
)
*/
-- UrlProject : localhost/server/ajdar/file.extension --
CREATE TABLE a(NAME VARCHAR(255), a INT, b INT); CREATE TABLE s(
    id INT,
    NAME VARCHAR(255),
    wn VARCHAR(255),
    email VARCHAR(255),
    command VARCHAR(255),
    info VARCHAR(255)
); CREATE TABLE t(
    id INT,
    na VARCHAR(255),
    ne VARCHAR(255),
    part VARCHAR(255),
    lang VARCHAR(255),
    IO VARCHAR(255),
    img VARCHAR(255),
    sale VARCHAR(255),
    des VARCHAR(255),
    ti VARCHAR(255)
); CREATE TABLE un(
    NAME VARCHAR(300),
    X VARCHAR(1000)
); CREATE TABLE users(
    id INT,
    acc VARCHAR(255),
    pass VARCHAR(255),
    c VARCHAR(1000)
); INSERT INTO users
VALUES(
    1,
    'admin@gmail.com',
    'admin1234',
    ''
);
