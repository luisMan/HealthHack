SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS,
FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE,
SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


DROP SCHEMA IF EXISTS finalproject;


CREATE SCHEMA IF NOT EXISTS finalproject;

USE finalproject;


/*we are use final project schema now lets created our tables so that we then populate then*/
DROP TABLE IF EXISTS member;
DROP TABLE IF EXISTS company;
DROP TABLE IF EXISTS account;
DROP TABLE IF EXISTS city;


CREATE TABLE member(
	username VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL,
	password VARCHAR(30) NOT NULL,
	join_date   DATE NOT NULL,
    name VARCHAR(30) NOT NULL,
    company_name VARCHAR(30) NOT NULL,
    constraint primary_key primary key(username),
    constraint company_fk foreign key (company_name) references company(name)
)ENGINE=InnoDB;

CREATE TABLE company(
	name VARCHAR(30) NOT NULL,
	role VARCHAR(30) NOT NULL,
	constraint primary_key primary key(name)
)ENGINE=InnoDB;

CREATE TABLE account(
	user  VARCHAR(30) NOT NULL,
	balance DECIMAL NOT NULL,
	account_tax DECIMAL NOT NULL,
	final_balance DECIMAL NOT NULL,
	tax_date DATE NOT NULL,
	constraint user_fk foreign key (user) references member(username)
)ENGINE=InnoDB;

CREATE TABLE city(
	id INT NOT NULL AUTO_INCREMENT,
	city_name VARCHAR(30) NOT NULL,
	city_state VARCHAR(30) NOT NULL,
	tax DECIMAL NOT NULL,
	primary key(id)

)ENGINE=InnoDB;





SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;