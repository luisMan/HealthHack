
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema health_record
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema health_record
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS health_record;
CREATE SCHEMA `health_record` DEFAULT CHARACTER SET latin1 ;
USE `health_record` ;



DROP TABLE IF EXISTS patient_reading;
-- -----------------------------------------------------
-- Table `health_record`.`health` 
-- -----------------------------------------------------
CREATE TABLE `health_record`.`patient_reading` (
  `user_id` INT(11) NOT NULL AUTO_INCREMENT,
  `heart_rate` DECIMAL(10,0) NOT NULL,
  `body_temp` DECIMAL(10,0) NOT NULL,
  `gender` VARCHAR(1) NOT NULL,
  `height` DECIMAL(10,0) NOT NULL,
  `wight` DECIMAL(10,0) NOT NULL,
  `NOT_SEEN` INT NOT NULL,
  `date` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`user_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;



DROP TABLE IF EXISTS patient;
-- -----------------------------------------------------
-- Table `health_record`.`patient`
-- -----------------------------------------------------
CREATE TABLE `health_record`.`patient` (
  `Fname` VARCHAR(30) NOT NULL,
  `Lname` VARCHAR(30) NOT NULL,
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `phone_number` INT(11) NOT NULL,
   `weight` DECIMAL NOT NULL,
   `height` VARCHAR(10) NOT NULL,
   `age` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;



DROP TABLE IF EXISTS patient_record;
-- -----------------------------------------------------
-- Table `health_record`.`hospital`
-- -----------------------------------------------------
CREATE TABLE `health_record`.`patient_record` (
  `hospital_name` VARCHAR(30) NOT NULL,
  `address` VARCHAR(30) NOT NULL,
  `hospital_id` INT(11) NOT NULL,
  `patient_id` INT(11) NOT NULL,
  `date_in` DATE NOT NULL,
  `date_out` DATE NOT NULL,
  `cause_of_visit` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`hospital_id`),
  CONSTRAINT foreign_key foreign key(`patient_id`) REFERENCES patient(`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


DROP TABLE IF EXISTS queue;
-- -----------------------------------------------------
-- Table `health_record`.`wait_list`
-- -----------------------------------------------------
CREATE TABLE `health_record`.`queue` (
  `id` int(11) not null AUTO_INCREMENT,
  `fname` VARCHAR(30) NOT NULL,
  `lname` VARCHAR(30) NOT NULL,
  `DOB` VARCHAR(45) NOT NULL,
  `age` INT NOT NULL,
  PRIMARY key(`id`)

 )
ENGINE = InnoDB;

DROP TABLE IF EXISTS log;

-- -----------------------------------------------------
-- Table `health_record`.`log`
-- -----------------------------------------------------
CREATE TABLE `health_record`.`log` (
  `patient_id` INT NOT NULL,
  `doctor_id` INT NOT NULL,
  `message` VARCHAR(45) NOT NULL,
  `date` DATE NOT NULL,
  `hospital_hospital_id` INT(11) NOT NULL
  )
ENGINE = InnoDB;


DROP TABLE IF EXISTS cleveland;

CREATE TABLE cleveland(
  age INT NOT NULL,
  sex BIT NOT NULL,
  chest_pain_lv INT NOT NULL,
  blood_p DECIMAL NOT NULL,
  cholesterol_lv DECIMAL NOT NULL,
  blood_sugar BIT NOT NULL,
  electro_result INT NOT NULL,
  max_heart_rate DECIMAL NOT NULL,
  exersice_agnia BIT NOT NULL,
  depression_exersice INT NOT NULL,
  slope INT NOT NULL,
  major_vessels INT NOT NULL,
  thal INT NOT NULL,
  prob_heart_des BIT NOT NULL
)ENGINE=InnoDB;

DROP TABLE IF EXISTS hungarian;

CREATE TABLE hungarian(
  age INT NOT NULL,
  sex BIT NOT NULL,
  chest_pain_lv INT NOT NULL,
  blood_p DECIMAL NOT NULL,
  cholesterol_lv DECIMAL NOT NULL,
  blood_sugar BIT NOT NULL,
  electro_result INT NOT NULL,
  max_heart_rate DECIMAL NOT NULL,
  exersice_agnia BIT NOT NULL,
  depression_exersice INT NOT NULL,
  slope INT NOT NULL,
  major_vessels INT NOT NULL,
  thal INT NOT NULL,
  prob_heart_des BIT NOT NULL
)ENGINE=InnoDB;

DROP TABLE IF EXISTS switzerland;

CREATE TABLE switzerland(
  age INT NOT NULL,
  sex BIT NOT NULL,
  chest_pain_lv INT NOT NULL,
  blood_p DECIMAL NOT NULL,
  cholesterol_lv DECIMAL NOT NULL,
  blood_sugar BIT NOT NULL,
  electro_result INT NOT NULL,
  max_heart_rate DECIMAL NOT NULL,
  exersice_agnia BIT NOT NULL,
  depression_exersice INT NOT NULL,
  slope INT NOT NULL,
  major_vessels INT NOT NULL,
  thal INT NOT NULL,
  prob_heart_des BIT NOT NULL
)ENGINE=InnoDB;

DROP TABLE IF EXISTS va;

CREATE TABLE va(
  age INT NOT NULL,
  sex BIT NOT NULL,
  chest_pain_lv INT NOT NULL,
  blood_p DECIMAL NOT NULL,
  cholesterol_lv DECIMAL NOT NULL,
  blood_sugar BIT NOT NULL,
  electro_result INT NOT NULL,
  max_heart_rate DECIMAL NOT NULL,
  exersice_agnia BIT NOT NULL,
  depression_exersice INT NOT NULL,
  slope INT NOT NULL,
  major_vessels INT NOT NULL,
  thal INT NOT NULL,
  prob_heart_des BIT NOT NULL
)ENGINE=InnoDB;


SOURCE C:/wamp2/www/final_project/data/load-switzerland.sql
SOURCE C:/wamp2/www/final_project/data/load-cleveland.sql
SOURCE C:/wamp2/www/final_project/data/load-hungarian.sql
SOURCE C:/wamp2/www/final_project/data/load-va.sql


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;