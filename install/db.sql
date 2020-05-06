CREATE DATABASE onwrite;

CREATE TABLE `usuario` (
  `user_id` INT(11) NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(255) DEFAULT NULL,
  `senha` VARCHAR(255) DEFAULT NULL,
  `nome` VARCHAR(255) DEFAULT NULL,
PRIMARY KEY (user_id)) ENGINE=INNODB;

CREATE TABLE `livros` (
  `livro_id` INT(11) NOT NULL AUTO_INCREMENT,
  `genero` VARCHAR(255) DEFAULT NULL,
  `paginas` INT(11) DEFAULT NULL,
  `data` DATE DEFAULT NULL,
  `titulo` VARCHAR(255) DEFAULT NULL,
  `finalizado` VARCHAR(25) DEFAULT NULL,
  `fk_autor` INT(11) NOT NULL,
  `texto` TEXT DEFAULT NULL,
  FOREIGN KEY(fk_autor) REFERENCES usuario(user_id),
PRIMARY KEY (livro_id)) ENGINE=INNODB;

INSERT INTO usuario (user_id,login,senha,nome) VALUES ('1','Lucs','teste','Lucas Silva');
INSERT INTO usuario (user_id,login,senha,nome) VALUES ('2','Marqin','teste','Marcos Ferreira');
INSERT INTO usuario (user_id,login,senha,nome) VALUES ('3','Santo','teste','Santo Almeida');
INSERT INTO usuario (user_id,login,senha,nome) VALUES ('4','Pereira','teste','Raquel Pereira');

INSERT INTO livros (fk_autor,titulo,paginas,DATA,genero,texto,finalizado) VALUES ('1','A Lebre','5','2020-05-01',
'Infantil','ERA UMA VEZ uma lebre do bosque a quem chamavam de Rosita que era muito vaidosa. De entre todos os animais do bosque, ela achava-se a mais bonita, a mais esperta e a mais rápida. Além disso, ninguém tinha melhor faro para achar comida do que ela! Numa palavra só, de todos os animais daquele bosque, ninguém era melhor que ela!

No mesmo bosque vivia uma tartaruga, chamada D. Lentidão, que todas as manhãs passeava vagarosamente junto à margem do rio. Como a tartaruga, a lebre Rosita também se dirigia todas as manhãs para o rio em busca do pequeno almoço, encontrando pelo caminho a D. Lentidão.',' Não Finalizado');

INSERT INTO livros (fk_autor,titulo,paginas,DATA,genero,texto,finalizado) VALUES ('1','A Lebre 2','2','2020-05-01',
'Infantil','Além de ser muito convencida, a lebre Rosita também gostava muito de zombar dos outros, e assim que via a tartaruga, começava logo a rir-se dela, chamando-lhe de velha, lenta e outros nomes muito piores!

Numa tarde quente de verão em que os animais do bosque estavam todos reunidos debaixo da sombra de uma grande árvore, a lebre resolveu zombar de D. Lentidão mais uma vez e desafiou-a para uma corrida.
Os animais do bosque ao ouvir semelhante coisa, começaram todos a rir. A raposa Cecília, que muito gostava destas confusões, afirmou que a tartaruga até poderia ganhar à lebre. Tudo dependia da vantagem que se desse à D. Lentidão na corrida e, sendo assim, até apostaria nela.','Finalizado');

INSERT INTO livros (fk_autor,titulo,paginas,DATA,genero,texto,finalizado) VALUES ('2','Gatos','3','2020-05-01',
'Infantil','Dois gatinhos assanhados
se atracaram, enfezados.
A dona se irritou
e a vassoura agarrou!

E apesar do frio, na hora,
os varreu porta afora,
bem no meio do inverno,
com um frio "do inferno"!

Os gatinhos, assustados,
se encolheram, já gelados,
junto à porta, no jardim,
aguardando o triste fim!.','Finalizado');

INSERT INTO livros (fk_autor,titulo,paginas,DATA,genero,texto,finalizado) VALUES ('3','Caixa Magica','5','2020-05-01',
'Infantil','Fabrico uma caixa mágica
para guardar o que não
cabe em nenhum lugar:
a minha sombra
em dias de muito sol,
o amarelo que sobra
do girassol,
um suspiro de beija-flor,
invisíveis lágrimas de amor..','Finalizado');

INSERT INTO livros (fk_autor,titulo,paginas,DATA,genero,texto,finalizado) VALUES ('4','Rosa','20','2020-05-01',
'Infantil','O segundo dos contos curtos para refletir fala sobre o poder da opinião alheia. Conta que havia um grande grupo de rãs que sempre ia se divertir na floresta. Todas elas cantavam e pulavam até a noite cair. Elas riam bastante e nada as separava.

Um dia, em um de seus passeios habituais, elas foram conhecer uma floresta nova. Estavam brincando quando três delas caíram em um poço profundo que ninguém havia notado.

As outras ficaram espantadas. Olharam para o fundo do poço e viram que era muito profundo. “Nós as perdemos”, disseram..','Finalizado');

