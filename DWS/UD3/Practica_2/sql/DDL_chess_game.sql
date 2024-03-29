DROP SCHEMA IF EXISTS chess_game;
CREATE SCHEMA chess_game;

USE chess_game;

CREATE TABLE T_Players(
ID int primary key auto_increment,
name varchar(30) not null,
email varchar(50) UNIQUE not null,
password varchar(30) not null
);

CREATE TABLE T_Matches(
ID int primary key auto_increment,
title varchar(50) not null,
white int not null,
black int not null,
startDate datetime not null,
endDate datetime,
winner varchar(10),
state varchar(20) not null default("En curso"),
    FOREIGN KEY (white) REFERENCES T_Players(ID),
    FOREIGN KEY (black) REFERENCES T_Players(ID)
);

CREATE TABLE T_Board_Status(
ID int auto_increment, 
IDGame int,
board varchar(250), /* Modificar si es necesario */
primary key(ID,IDGame),
FOREIGN KEY (IDGame) REFERENCES T_Matches(ID)
);

INSERT INTO T_Players(name, email, password) 
    values
("Elier", "eliervazquezdelvalle2002@gmail.com", "12345678"),
("lokuelo23", "elloko@gmail.com", "MeGustaElAjedrez");

insert into T_Matches(title, startDate, state, white, black) 
	values 
("Prueba 1", NOW(), "En curso", 1, 2);

insert into T_Matches(title, startDate, state, white, black) 
	values 
("Prueba 2", NOW(), "En curso", 2, 1);

insert into T_Board_Status(IDGame, turn, board) values (1, 0,
"ROBL,KNBL,BIBL,QUBL,KIBL,BIBL,KNBL,ROBL;PABL,PABL,PABL,PABL,PABL,PABL,PABL,PABL;0,0,0,0,0,0,0,0;0,0,0,0,0,0,0,0;0,0,0,0,0,0,0,0;0,0,0,0,0,0,0,0;PAWH,PAWH,PAWH,PAWH,PAWH,PAWH,PAWH,PAWH;ROWH,KNWH,BIWH,QUWH,KIWH,BIWH,KNWH,ROWH");

insert into T_Board_Status(IDGame, turn, board) values (1, 1, 
"ROBL,KNBL,BIBL,QUBL,KIBL,BIBL,KNBL,ROBL;PABL,PABL,PABL,PABL,PABL,PABL,PABL,PABL;0,0,0,0,0,0,0,0;0,0,0,0,0,0,0,0;0,0,0,0,PAWH,0,0,0;0,0,0,0,0,0,0,0;PAWH,PAWH,PAWH,PAWH,0,PAWH,PAWH,PAWH;ROWH,KNWH,BIWH,QUWH,KIWH,BIWH,KNWH,ROWH");

insert into T_Board_Status(IDGame, turn, board) values (1, 2, 
"ROBL,KNBL,BIBL,QUBL,KIBL,BIBL,KNBL,ROBL;PABL,PABL,PABL,PABL,0,PABL,PABL,PABL;0,0,0,0,PABL,0,0,0;0,0,0,0,0,0,0,0;0,0,0,0,PAWH,0,0,0;0,0,0,0,0,0,0,0;PAWH,PAWH,PAWH,PAWH,0,PAWH,PAWH,PAWH;ROWH,KNWH,BIWH,QUWH,KIWH,BIWH,KNWH,ROWH");

insert into T_Board_Status(IDGame, turn, board) values (1, 3, 
"ROBL,KNBL,BIBL,QUBL,KIBL,BIBL,KNBL,ROBL;PABL,PABL,PABL,PABL,0,PABL,PABL,PABL;00,0,0,0,0,0,0,0;0,0,0,PAWH,PAWH,0,0,0;0,0,0,0,0,0,0,0;PAWH,PAWH,PAWH,0,0,PAWH,PAWH,PAWH;ROWH,KNWH,BIWH,QUWH,KIWH,BIWH,KNWH,ROWH");

insert into T_Board_Status(IDGame, turn, board) values (2, 0,
"ROBL,KNBL,BIBL,QUBL,KIBL,BIBL,KNBL,ROBL;PABL,PABL,PABL,PABL,PABL,PABL,PABL,PABL;0,0,0,0,0,0,0,0;0,0,0,0,0,0,0,0;0,0,0,0,0,0,0,0;0,0,0,0,0,0,0,0;PAWH,PAWH,PAWH,PAWH,PAWH,PAWH,PAWH,PAWH;ROWH,KNWH,BIWH,QUWH,KIWH,BIWH,KNWH,ROWH");

insert into T_Board_Status(IDGame, turn, board) values (2, 1,
"ROBL,KNBL,BIBL,QUBL,KIBL,BIBL,KNBL,ROBL;PABL,PABL,PABL,PABL,PABL,PABL,PABL,PABL;0,0,0,0,0,0,0,0;0,0,0,0,0,0,0,0;0,0,0,0,0,0,0,0;0,0,0,0,PAWH,0,0,0;PAWH,PAWH,PAWH,PAWH,0,PAWH,PAWH,PAWH;ROWH,KNWH,BIWH,QUWH,KIWH,BIWH,KNWH,ROWH");