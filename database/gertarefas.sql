DROP DATABASE IF EXISTS `gertarefas`;

CREATE DATABASE IF NOT EXISTS `gertarefas`;
USE `gertarefas`;

CREATE TABLE `usuario`( `id` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
                     `nome` VARCHAR(150) NOT NULL,
                     `email` VARCHAR(150) NOT NULL,
                     `senha` VARCHAR(150) NOT NULL);

INSERT INTO `usuario`(`nome`, `email`,`senha`) VALUES('Perro Mauel','perrom@gmail.com','1234');

CREATE TABLE `tarefa`( id INT PRIMARY KEY AUTO_INCREMENT, 
                      `nome` VARCHAR(50) NOT NULL,
                      `descricao` VARCHAR(250) NOT NULL,
                      `estado` CHAR NOT NULL,
                      `id_usuario` INT NOT NULL,
                      FOREIGN KEY (`id_usuario`) REFERENCES `usuario`(`id`) 
                      ON DELETE CASCADE ON UPDATE CASCADE);

INSERT INTO `tarefa`(`nome`,`descricao`,`estado`,`id_usuario`)
    VALUES('Limpar Garagem', 'Limpa a garagem que a sua esposa já tá enchendo', '0', '1');