create database biblioteca;
drop database biblioteca;
use biblioteca;

create table categoria(
	codCategoria int primary key auto_increment,
    categoria varchar(25) not null
)default charset utf8;

create table autor(
	codAutor int primary key auto_increment,
    autor varchar(45) not null

)default charset utf8;

create table livro(
	codLivro int primary key auto_increment,
    isbn varchar(17) not null,
    codCategoria int not null,
    nomeLivro varchar(70) not null,
    codAutor int not null,
    numPaginas varchar(4) not null,
    preco decimal(6,2) not null,
	quantiEstoque int not null,
    resumo text not null,
    capaLivro varchar(255) not null,
    destaque enum('s','n'),
    constraint fkCategoria foreign key(codCategoria) references categoria(codCategoria),
    constraint fkAutor foreign key(codAutor) references autor(codAutor)
)default charset utf8;

create view Livros
as select 
		livro.codlivro,
        livro.isbn,
        categoria.categoria,
        livro.nomeLivro,
        autor.autor,
        livro.numPaginas,
        livro.preco,
        livro.quantiEstoque,
        livro.resumo,
        livro.capaLivro,
        livro.destaque
from livro inner join autor
	on livro.codAutor = autor.codAutor
inner join categoria
	on livro.codCategoria = categoria.codCategoria;
        