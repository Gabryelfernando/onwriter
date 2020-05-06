CREATE TABLE `usuario` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
Primary Key (user_id)) ENGINE=InnoDB;

CREATE TABLE `livros` (
  `livro_id` int(11) NOT NULL AUTO_INCREMENT,
  `genero` varchar(255) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `fk_autor` int(11) NOT NULL,
  foreign key(fk_autor) references usuario(user_id),
Primary Key (livro_id)) ENGINE=InnoDB;





