SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `u865381279_maiac` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;

USE `u865381279_maiac`;

CREATE  TABLE IF NOT EXISTS `u865381279_maiac`.`usuario` (
  `nick` VARCHAR(15) NOT NULL ,
  `email` VARCHAR(60) NULL DEFAULT NULL ,
  `senha` VARCHAR(45) NOT NULL ,
  `nome` VARCHAR(100) NOT NULL ,
  `vitorias` INT(11) NULL DEFAULT 0 ,
  `avatar` VARCHAR(100) NULL DEFAULT NULL ,
  `pais` VARCHAR(45) NULL DEFAULT NULL ,
  `cidade` VARCHAR(45) NULL DEFAULT NULL ,
  `sexo` VARCHAR(1) NOT NULL ,
  `nasc_dia` INT(11) NOT NULL ,
  `nasc_mes` INT(11) NOT NULL ,
  `nasc_ano` INT(11) NOT NULL ,
  `facebook` VARCHAR(45) NULL DEFAULT NULL ,
  `status` VARCHAR(1) NULL DEFAULT NULL COMMENT 'Verificar se o jogador está disponível para jogar' ,
  `fontcolor` VARCHAR(15) NULL DEFAULT NULL ,
  PRIMARY KEY (`nick`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `u865381279_maiac`.`sala` (
  `idsala` INT(11) NOT NULL AUTO_INCREMENT ,
  PRIMARY KEY (`idsala`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `u865381279_maiac`.`usuario_cv_sala` (
  `idtexto` INT(11) NOT NULL AUTO_INCREMENT ,
  `nick` VARCHAR(15) NOT NULL ,
  `idsala` INT(11) NOT NULL ,
  `texto` VARCHAR(400) NOT NULL ,
  INDEX `fk_usuario_has_sala_sala1_idx` (`idsala` ASC) ,
  INDEX `fk_usuario_has_sala_usuario_idx` (`nick` ASC) ,
  PRIMARY KEY (`idtexto`) ,
  CONSTRAINT `fk_usuario_has_sala_usuario`
    FOREIGN KEY (`nick` )
    REFERENCES `u865381279_maiac`.`usuario` (`nick` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_has_sala_sala1`
    FOREIGN KEY (`idsala` )
    REFERENCES `u865381279_maiac`.`sala` (`idsala` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `u865381279_maiac`.`mesa` (
  `idmesa` INT(11) NOT NULL AUTO_INCREMENT ,
  `idsala` INT(11) NOT NULL ,
  `status` VARCHAR(1) NOT NULL COMMENT 'Mesa livre ou usada' ,
  INDEX `fk_mesa_sala1_idx` (`idsala` ASC) ,
  PRIMARY KEY (`idmesa`) ,
  CONSTRAINT `fk_mesa_sala1`
    FOREIGN KEY (`idsala` )
    REFERENCES `u865381279_maiac`.`sala` (`idsala` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `u865381279_maiac`.`historico` (
  `idhistorico` INT(11) NOT NULL AUTO_INCREMENT ,
  `ganhador` VARCHAR(15) NOT NULL ,
  `perdedor` VARCHAR(15) NOT NULL ,
  `dia` INT(11) NOT NULL ,
  `mes` INT(11) NOT NULL ,
  `ano` INT(11) NOT NULL ,
  `idpartida` INT(11) NOT NULL ,
  PRIMARY KEY (`idhistorico`) ,
  INDEX `fk_historico_usuario1_idx` (`ganhador` ASC) ,
  INDEX `fk_historico_usuario2_idx` (`perdedor` ASC) ,
  INDEX `fk_historico_partida1_idx` (`idpartida` ASC) ,
  CONSTRAINT `fk_historico_usuario1`
    FOREIGN KEY (`ganhador` )
    REFERENCES `u865381279_maiac`.`usuario` (`nick` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_historico_usuario2`
    FOREIGN KEY (`perdedor` )
    REFERENCES `u865381279_maiac`.`usuario` (`nick` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_historico_partida1`
    FOREIGN KEY (`idpartida` )
    REFERENCES `u865381279_maiac`.`partida` (`idpartida` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `u865381279_maiac`.`cv_mesa` (
  `idcv_mesa` INT(11) NOT NULL AUTO_INCREMENT ,
  `idmesa` INT(11) NOT NULL ,
  `texto` VARCHAR(400) NOT NULL ,
  `dia` INT(11) NOT NULL ,
  `mes` INT(11) NOT NULL ,
  `ano` INT(11) NOT NULL ,
  PRIMARY KEY (`idcv_mesa`) ,
  INDEX `fk_cv_mesa_mesa1_idx` (`idmesa` ASC) ,
  CONSTRAINT `fk_cv_mesa_mesa1`
    FOREIGN KEY (`idmesa` )
    REFERENCES `u865381279_maiac`.`mesa` (`idmesa` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `u865381279_maiac`.`usuarios_cv_mesa` (
  `idusuarios_cv_mesa` INT(11) NOT NULL AUTO_INCREMENT ,
  `nick1` VARCHAR(15) NOT NULL ,
  `nick2` VARCHAR(15) NOT NULL ,
  `idpartida` INT(11) NOT NULL ,
  PRIMARY KEY (`idusuarios_cv_mesa`) ,
  INDEX `fk_usuarios_cv_mesa_usuario1_idx` (`nick1` ASC) ,
  INDEX `fk_usuarios_cv_mesa_usuario2_idx` (`nick2` ASC) ,
  INDEX `fk_usuarios_cv_mesa_partida1_idx` (`idpartida` ASC) ,
  CONSTRAINT `fk_usuarios_cv_mesa_usuario1`
    FOREIGN KEY (`nick1` )
    REFERENCES `u865381279_maiac`.`usuario` (`nick` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarios_cv_mesa_usuario2`
    FOREIGN KEY (`nick2` )
    REFERENCES `u865381279_maiac`.`usuario` (`nick` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarios_cv_mesa_partida1`
    FOREIGN KEY (`idpartida` )
    REFERENCES `u865381279_maiac`.`partida` (`idpartida` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `u865381279_maiac`.`cv_mesa` (
  `idcv_mesa` INT(11) NOT NULL AUTO_INCREMENT ,
  `texto` VARCHAR(400) NOT NULL ,
  `idusuarios_cv_mesa` INT(11) NOT NULL ,
  `nick` VARCHAR(15) NOT NULL ,
  PRIMARY KEY (`idcv_mesa`) ,
  INDEX `fk_cv_mesa_usuarios_cv_mesa1_idx` (`idusuarios_cv_mesa` ASC) ,
  INDEX `fk_cv_mesa_usuario1_idx` (`nick` ASC) ,
  CONSTRAINT `fk_cv_mesa_usuarios_cv_mesa1`
    FOREIGN KEY (`idusuarios_cv_mesa` )
    REFERENCES `u865381279_maiac`.`usuarios_cv_mesa` (`idusuarios_cv_mesa` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cv_mesa_usuario1`
    FOREIGN KEY (`nick` )
    REFERENCES `u865381279_maiac`.`usuario` (`nick` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `u865381279_maiac`.`usuarios_cv_sala` (
  `idusuarios_cv_sala` INT(11) NOT NULL AUTO_INCREMENT ,
  `idsala` INT(11) NOT NULL ,
  `nick` VARCHAR(15) NOT NULL ,
  INDEX `fk_usuarios_cv_sala_sala1_idx` (`idsala` ASC) ,
  INDEX `fk_usuarios_cv_sala_usuario1_idx` (`nick` ASC) ,
  PRIMARY KEY (`idusuarios_cv_sala`) ,
  CONSTRAINT `fk_usuarios_cv_sala_sala1`
    FOREIGN KEY (`idsala` )
    REFERENCES `u865381279_maiac`.`sala` (`idsala` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarios_cv_sala_usuario1`
    FOREIGN KEY (`nick` )
    REFERENCES `u865381279_maiac`.`usuario` (`nick` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `u865381279_maiac`.`cv_sala` (
  `idcv_sala` INT(11) NOT NULL AUTO_INCREMENT ,
  `idusuarios_cv_sala` INT(11) NOT NULL ,
  `nick` VARCHAR(15) NOT NULL ,
  `texto` VARCHAR(400) NOT NULL ,
  PRIMARY KEY (`idcv_sala`) ,
  INDEX `fk_cv_sala_usuarios_cv_sala1_idx` (`idusuarios_cv_sala` ASC) ,
  INDEX `fk_cv_sala_usuario1_idx` (`nick` ASC) ,
  CONSTRAINT `fk_cv_sala_usuarios_cv_sala1`
    FOREIGN KEY (`idusuarios_cv_sala` )
    REFERENCES `u865381279_maiac`.`usuarios_cv_sala` (`idusuarios_cv_sala` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cv_sala_usuario1`
    FOREIGN KEY (`nick` )
    REFERENCES `u865381279_maiac`.`usuario` (`nick` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `u865381279_maiac`.`partida` (
  `idpartida` INT(11) NOT NULL AUTO_INCREMENT ,
  `idmesa` INT(11) NOT NULL ,
  PRIMARY KEY (`idpartida`) ,
  INDEX `fk_partida_mesa1_idx` (`idmesa` ASC) ,
  CONSTRAINT `fk_partida_mesa1`
    FOREIGN KEY (`idmesa` )
    REFERENCES `u865381279_maiac`.`mesa` (`idmesa` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `u865381279_maiac`.`jogadas` (
  `idjogadas` INT(11) NOT NULL AUTO_INCREMENT ,
  `idpartida` INT(11) NOT NULL ,
  `de` VARCHAR(2) NOT NULL ,
  `para` VARCHAR(2) NOT NULL ,
  `peca` VARCHAR(6) NOT NULL ,
  PRIMARY KEY (`idjogadas`) ,
  INDEX `fk_jogadas_partida1_idx` (`idpartida` ASC) ,
  CONSTRAINT `fk_jogadas_partida1`
    FOREIGN KEY (`idpartida` )
    REFERENCES `u865381279_maiac`.`partida` (`idpartida` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
