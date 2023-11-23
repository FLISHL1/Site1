-- auto-generated definition
create table otzv
(
    ID          int auto_increment
        primary key,
    ID_Товара   int  null,
    Оценка      int  not null,
    Комментарий text null,
    constraint otzv_ibfk_1
        foreign key (ID_Товара) references products (ID)
);

create index ID_Товара
    on otzv (ID_Товара);



insert into rk2.otzv (ID, ID_Товара, Оценка, Комментарий)
values  (1, 1, 4, 'Корм хороший, но у моей кошки есть свои предпочтения.'),
        (2, 2, 5, 'Игрушка отлично подходит для наших прогулок в парке.'),
        (3, 3, 3, 'Шампунь среднего качества, но цена радует.'),
        (4, 4, 5, 'Грызуны обожают эти лакомства!'),
        (5, 5, 4, 'Постель очень мягкая, кошка влюбилась в нее сразу.');