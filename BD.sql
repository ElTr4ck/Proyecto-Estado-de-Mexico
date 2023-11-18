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
    idHelado int AUTO_INCREMENT primary key,
    sabor varchar(20) not null,
    descripcion varchar(255) not null,
    imagen varchar(20) not null
);

Insert into helados (sabor, descripcion, imagen) values ('Fresa','Descripcion de prueba del helado de fresa','fresa1.jpg');
Insert into helados (sabor, descripcion, imagen) values ('Chocolate','Descripcion de prueba del helado de chocolate','chocolate2.jpg');
Insert into helados (sabor, descripcion, imagen) values ('Menta','Descripcion de prueba del helado de menta','menta3.jpg');
Insert into helados (sabor, descripcion, imagen) values ('Oreo','Descripcion de prueba del helado de oreo','oreo4.jpg');
Insert into helados (sabor, descripcion, imagen) values ('Mora','Descripcion de prueba del helado de mora','mora5.jpg');
