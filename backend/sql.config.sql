CREATE TABLE `erc_tb`.`admins` (
     `admin_id` INT NOT NULL AUTO_INCREMENT COMMENT 'Auto increment id' , 
     `unique_id` INT(200) NOT NULL COMMENT 'Unique id of Admin' , 
     `email` VARCHAR(255) NOT NULL COMMENT 'His email' , 
     `password` VARCHAR(255) NOT NULL COMMENT 'Password crypt by php. ' , `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date and time the admin was created' , PRIMARY KEY (`admin_id`)) ENGINE = InnoDB;