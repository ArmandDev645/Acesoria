-- MySQL Script generated by MySQL Workbench
-- lun 02 jul 2018 12:23:13 CDT
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`usuario` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `nombre_usuario` VARCHAR(255) NOT NULL,
  `apellido_usuario` VARCHAR(255) NOT NULL,
  `correo_usuario` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`clientes` (
  `id_cliente` INT NOT NULL AUTO_INCREMENT,
  `nombre_cliente` VARCHAR(45) NOT NULL,
  `apellido_cliente` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_cliente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`autos_categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`autos_categoria` (
  `id_autos_categoria` INT NOT NULL AUTO_INCREMENT,
  `nombre_categoria` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_autos_categoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`autos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`autos` (
  `id_auto` INT NOT NULL AUTO_INCREMENT,
  `autos_categoria_id_autos_categoria` INT NOT NULL,
  `marca_auto` VARCHAR(45) NOT NULL,
  `modelo_auto` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_auto`, `autos_categoria_id_autos_categoria`),
  INDEX `fk_autos_autos_categoria1_idx` (`autos_categoria_id_autos_categoria` ASC),
  CONSTRAINT `fk_autos_autos_categoria1`
    FOREIGN KEY (`autos_categoria_id_autos_categoria`)
    REFERENCES `mydb`.`autos_categoria` (`id_autos_categoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`servicios_categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`servicios_categoria` (
  `id_servicios_categoria` INT NOT NULL,
  `categoria_servicio` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_servicios_categoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`servicios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`servicios` (
  `id_servicios` INT NOT NULL,
  `servicios_categoria_id_servicios_categoria` INT NOT NULL,
  `nombre_servicio` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id_servicios`, `servicios_categoria_id_servicios_categoria`),
  INDEX `fk_servicios_servicios_categoria1_idx` (`servicios_categoria_id_servicios_categoria` ASC),
  CONSTRAINT `fk_servicios_servicios_categoria1`
    FOREIGN KEY (`servicios_categoria_id_servicios_categoria`)
    REFERENCES `mydb`.`servicios_categoria` (`id_servicios_categoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`pago`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`pago` (
  `id_pago` INT NOT NULL AUTO_INCREMENT,
  `pago` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_pago`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`precio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`precio` (
  `id_precio` INT NOT NULL AUTO_INCREMENT,
  `precio` INT NOT NULL,
  `autos_categoria_id_autos_categoria` INT NOT NULL,
  `servicios_id_servicios` INT NOT NULL,
  PRIMARY KEY (`id_precio`, `autos_categoria_id_autos_categoria`),
  INDEX `fk_precio_autos_categoria1_idx` (`autos_categoria_id_autos_categoria` ASC),
  INDEX `fk_precio_servicios1_idx` (`servicios_id_servicios` ASC),
  CONSTRAINT `fk_precio_autos_categoria1`
    FOREIGN KEY (`autos_categoria_id_autos_categoria`)
    REFERENCES `mydb`.`autos_categoria` (`id_autos_categoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_precio_servicios1`
    FOREIGN KEY (`servicios_id_servicios`)
    REFERENCES `mydb`.`servicios` (`id_servicios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`compras`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`compras` (
  `id_compra` INT NOT NULL AUTO_INCREMENT,
  `usuario_id_usuario` INT NOT NULL,
  `clientes_id_cliente` INT NOT NULL,
  `autos_id_auto` INT NOT NULL,
  `pago_id_pago` INT NOT NULL,
  `precio_id_precio` INT NOT NULL,
  `fecha_compra` DATE NOT NULL,
  PRIMARY KEY (`id_compra`, `usuario_id_usuario`, `clientes_id_cliente`, `pago_id_pago`),
  INDEX `fk_compras_usuario1_idx` (`usuario_id_usuario` ASC),
  INDEX `fk_compras_clientes1_idx` (`clientes_id_cliente` ASC),
  INDEX `fk_compras_autos1_idx` (`autos_id_auto` ASC),
  INDEX `fk_compras_pago1_idx` (`pago_id_pago` ASC),
  INDEX `fk_compras_precio1_idx` (`precio_id_precio` ASC),
  CONSTRAINT `fk_compras_usuario1`
    FOREIGN KEY (`usuario_id_usuario`)
    REFERENCES `mydb`.`usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_compras_clientes1`
    FOREIGN KEY (`clientes_id_cliente`)
    REFERENCES `mydb`.`clientes` (`id_cliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_compras_autos1`
    FOREIGN KEY (`autos_id_auto`)
    REFERENCES `mydb`.`autos` (`id_auto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_compras_pago1`
    FOREIGN KEY (`pago_id_pago`)
    REFERENCES `mydb`.`pago` (`id_pago`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_compras_precio1`
    FOREIGN KEY (`precio_id_precio`)
    REFERENCES `mydb`.`precio` (`id_precio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`servicios_compra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`servicios_compra` (
  `compras_id_compra` INT NOT NULL,
  `servicios_id_servicios` INT NOT NULL,
  PRIMARY KEY (`compras_id_compra`, `servicios_id_servicios`),
  INDEX `fk_servicios_compra_servicios1_idx` (`servicios_id_servicios` ASC),
  CONSTRAINT `fk_servicios_compra_compras`
    FOREIGN KEY (`compras_id_compra`)
    REFERENCES `mydb`.`compras` (`id_compra`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_servicios_compra_servicios1`
    FOREIGN KEY (`servicios_id_servicios`)
    REFERENCES `mydb`.`servicios` (`id_servicios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
