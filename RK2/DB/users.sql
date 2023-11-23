-- auto-generated definition
create table users
(
    id       int auto_increment
        primary key,
    login    varchar(150) null,
    password varchar(150) null
);

insert into rk2.users (id, login, password)
values  (1, 'test', 'test'),
        (2, 'user', 'user');