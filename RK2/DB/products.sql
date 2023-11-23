-- auto-generated definition
create table products
(
    ID       int auto_increment
        primary key,
    image    varchar(150)   null,
    name     varchar(255)   not null,
    price    decimal(10, 2) not null,
    count    int            not null,
    descript text           null
);



insert into rk2.products (ID, image, name, price, count, descript)
values  (1, 'corm1.jpg', 'Корм для кошек "Delicious Delight"', 300.00, 20, 'Питательный корм с изысканным вкусом для вашей кошки.'),
        (2, 'toy1.jpg', 'Игрушка для собаки "Active Buddy Ball"', 250.00, 15, 'Яркая и прочная игрушка для активных собак, подходит для игр на свежем воздухе.'),
        (3, 'pr1.jpg', 'Шампунь "Gentle Care" для собак', 120.00, 25, 'Мягкий и эффективный шампунь для ежедневного ухода за шерстью вашего питомца.'),
        (4, 'сorm2.jpg', 'Лакомства "Tasty Bites" для грызунов', 50.00, 30, 'Вкусные лакомства с высоким содержанием витаминов для здоровья вашего грызуна.'),
        (5, 'bed1.jpg', 'Постель "Cozy Nest" для кошек', 400.00, 10, 'Уютная и мягкая постель создана для комфортного сна вашего пушистого друга.');