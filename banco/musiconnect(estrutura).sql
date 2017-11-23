create table usuario
(
id int auto_increment,
nome varchar(24),
sobrenome varchar(24),
email varchar(64),
dt_nasc date,
sexo varchar(10),
senha varchar(40),
nivel int(1) UNSIGNED NOT NULL DEFAULT '1',
primary key(id)
);

create table artista
(
id int auto_increment,
nome varchar(50),
foto varchar(255),
idUser int,
primary key(id)
);

create table musica
(
id int auto_increment,
nome varchar(50),
genero varchar(24),
artista varchar(50),
ano int,
musica varchar(255),
idArtista int,
primary key(id)
);

create table favorito
(
idUser int,
idMusic int,
primary key(idUser,idMusic)
);

alter table artista
add(
	foreign key (idUser)
	references usuario(id)
	on update cascade
	on delete restrict
);


alter table musica
add(
	foreign key (idArtista)
	references artista(id)
	on update cascade
	on delete restrict
);

alter table favorito
add(
	foreign key (idUser)
	references usuario(id)
	on update cascade
	on delete restrict
);


alter table favorito
add(
	foreign key (idMusic)
	references musica(id)
	on update cascade
	on delete restrict
);