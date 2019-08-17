CREATE DATABASE PEPPA;

USE PEPPA;

CREATE TABLE Categoria(
	IdCategoria	INT AUTO_INCREMENT NOT NULL,
    Descripcion	VARCHAR(50),
    PRIMARY KEY(IdCategoria)
); 

CREATE TABLE Usuario( 
	IdUsuario          int  AUTO_INCREMENT NOT NULL ,
	Nombres            varchar(50)  NULL ,
	ApellidoMaterno    varchar(50)  NULL ,
	ApellidoPaterno    varchar(50)  NULL ,
	Contrasenia        varchar(50)  NULL ,
	NombreUsuario      varchar(50)  NULL,
    PRIMARY KEY (IdUsuario)
);

CREATE TABLE TipoMovimiento( 
	IdTipoMovimiento   int  AUTO_INCREMENT NOT NULL ,
	Descripcion        varchar(50)  NULL,
    PRIMARY KEY(IdTipoMovimiento)
);

CREATE TABLE Movimiento( 
	IdMovimiento       int  AUTO_INCREMENT NOT NULL ,
	CantidadDinero     float  NULL ,
	Fecha              datetime  NULL ,
	Descripcion        varchar(100)  NULL ,
	IdCategoria        int NOT NULL ,
	IdTipoMovimiento   int NOT NULL ,
	IdUsuario          int NOT NULL ,
    FOREIGN KEY (IdCategoria) REFERENCES Categoria(IdCategoria),
    FOREIGN KEY (IdTipoMovimiento) REFERENCES TipoMovimiento(IdTipoMovimiento),
    FOREIGN KEY (IdUsuario) REFERENCES Usuario(IdUsuario),
    PRIMARY KEY (IdMovimiento)
);

