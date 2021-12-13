create database testunan;
use testunan;

create table if not exists Persona(
	codPersona int primary key auto_increment,
	nombres varchar(60) not null,
	apellidos varchar(60) not null
);

create table if not exists TipoUsuario(
	codTipo int primary key auto_increment, 
    tipo varchar(100)
);

create table if not exists Estado(
  codEstado int primary key auto_increment,
  estado varchar(60) NOT NULL,
  uso varchar(100) NOT NULL);

create table if not exists Usuario(
  codUsuario int primary key auto_increment,
  nombreUsuario VARCHAR(100) not null,
  contrasena VARCHAR(500) not null,
  persona int not null,
  tipo int not null,
  estado int not null,
  test int,
  constraint fkPersona foreign key(persona) references Persona(codPersona)ON UPDATE CASCADE ON DELETE CASCADE,
  constraint fkTipo foreign key(tipo) references TipoUsuario(codTipo)ON UPDATE CASCADE ON DELETE CASCADE,
  constraint fkTEstado foreign key(estado) references Estado(codEstado)ON UPDATE CASCADE ON DELETE CASCADE
  );
