CREATE TABLE `comentarios` (
  `id` int(8) NOT NULL PRIMARY KEY,
  `nome` varchar(50) NOT NULL,
  `turma` varchar(3) NOT NULL,
  `comentario` varchar(255) NOT NULL,
   primary key(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


