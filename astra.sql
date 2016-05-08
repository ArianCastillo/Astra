-- MySQL Script generated by MySQL Workbench
-- 05/04/16 15:01:00
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema astra
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema astra
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `astra` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `astra` ;

-- -----------------------------------------------------
-- Table `astra`.`link`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `astra`.`link` (
  `link_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `url` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`link_id`),
  UNIQUE INDEX `idLink_UNIQUE` (`link_id` ASC),
  UNIQUE INDEX `url_UNIQUE` (`url` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `astra`.`list`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `astra`.`list` (
  `list_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`list_id`),
  UNIQUE INDEX `idList_UNIQUE` (`list_id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `astra`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `astra`.`users` (
  `user_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`user_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `astra`.`list_has_link`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `astra`.`list_has_link` (
  `list_list_id` INT UNSIGNED NOT NULL,
  `link_link_id` INT UNSIGNED NOT NULL,
  `description` VARCHAR(200) NULL,
  PRIMARY KEY (`list_list_id`, `link_link_id`),
  INDEX `fk_list_has_link_link1_idx` (`link_link_id` ASC),
  INDEX `fk_list_has_link_list_idx` (`list_list_id` ASC),
  CONSTRAINT `fk_list_has_link_list`
    FOREIGN KEY (`list_list_id`)
    REFERENCES `astra`.`list` (`list_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_list_has_link_link1`
    FOREIGN KEY (`link_link_id`)
    REFERENCES `astra`.`link` (`link_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `astra`.`users_has_list`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `astra`.`users_has_list` (
  `users_user_id` INT UNSIGNED NOT NULL,
  `list_list_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`users_user_id`, `list_list_id`),
  INDEX `fk_users_has_list_list1_idx` (`list_list_id` ASC),
  INDEX `fk_users_has_list_users1_idx` (`users_user_id` ASC),
  CONSTRAINT `fk_users_has_list_users1`
    FOREIGN KEY (`users_user_id`)
    REFERENCES `astra`.`users` (`user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_list_list1`
    FOREIGN KEY (`list_list_id`)
    REFERENCES `astra`.`list` (`list_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `astra`.`users_has_favorite_list`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `astra`.`users_has_favorite_list` (
  `users_user_id` INT UNSIGNED NOT NULL,
  `list_list_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`users_user_id`, `list_list_id`),
  INDEX `fk_users_has_list1_list1_idx` (`list_list_id` ASC),
  INDEX `fk_users_has_list1_users1_idx` (`users_user_id` ASC),
  CONSTRAINT `fk_users_has_list1_users1`
    FOREIGN KEY (`users_user_id`)
    REFERENCES `astra`.`users` (`user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_list1_list1`
    FOREIGN KEY (`list_list_id`)
    REFERENCES `astra`.`list` (`list_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `astra`.`users_has_favorite_link`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `astra`.`users_has_favorite_link` (
  `users_user_id` INT UNSIGNED NOT NULL,
  `link_link_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`users_user_id`, `link_link_id`),
  INDEX `fk_users_has_link_link1_idx` (`link_link_id` ASC),
  INDEX `fk_users_has_link_users1_idx` (`users_user_id` ASC),
  CONSTRAINT `fk_users_has_link_users1`
    FOREIGN KEY (`users_user_id`)
    REFERENCES `astra`.`users` (`user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_link_link1`
    FOREIGN KEY (`link_link_id`)
    REFERENCES `astra`.`link` (`link_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
