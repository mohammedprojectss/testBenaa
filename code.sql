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
create table a (name varchar(255),a int,b int);
create table s (
    id int , 
    name varchar(255) , 
    wn varchar(255) ,
    email varchar(255),
    command varchar(255) ,
    info varchar(255)
);
create table t (
id int ,
na varchar(255),
ne varchar(255),
part varchar(255),
lang varchar(255),
io varchar(255),
img varchar(255),
sale varchar(255),
des varchar(255),
ti varchar(255)
);
create table un (
    name varchar(300),
    x varchar(1000)
);
create table users (
id int ,
acc varchar(255),
pass varchar(255),
c varchar(1000)
);