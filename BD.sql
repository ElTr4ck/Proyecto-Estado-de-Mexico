Create database Heladeria;
Use Heladeria;

Create table Admin (
    ID varchar(10) not null,
    nombreAdmin varchar(20) not null,
    contra varchar(20) not null
);

Alter table Admin
    add constraint PK1 primary key(ID);

Insert into Admin values ('U1','Mauricio','Mau123+');

Create table helados(
    sabor varchar(20) not null,
    imagen varchar(20) not null,
    idHelado varchar(10) not null
);

Alter table helados
    add constraint PK2 primary key(idHelado);

Insert into helados values ('Fresa','fresa1.jpg','H1');
Insert into helados values ('Chocolate','chocolate2.jpg','H2');
Insert into helados values ('Menta','menta3.jpg','H3');
Insert into helados values ('Oreo','oreo4.jpg','H4');
Insert into helados values ('Mora','mora5.jpg','H5');
