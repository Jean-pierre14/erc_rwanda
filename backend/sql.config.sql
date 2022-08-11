CREATE TABLE `erc_tb`.`admins` (
     `admin_id` INT NOT NULL AUTO_INCREMENT COMMENT 'Auto increment id' , 
     `unique_id` INT(200) NOT NULL COMMENT 'Unique id of Admin' , 
     `email` VARCHAR(255) NOT NULL COMMENT 'His email' , 
     `password` VARCHAR(255) NOT NULL COMMENT 'Password crypt by php. ' , 
     `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date and time the admin was created' , 
     PRIMARY KEY (`admin_id`)
) 
     ENGINE = InnoDB;

CREATE TABLE `erc_tb`.`news` ( `news_id` INT NOT NULL AUTO_INCREMENT COMMENT 'news id' , `unique_id` INT(200) NOT NULL COMMENT 'unique id' , `title` VARCHAR(255) NOT NULL COMMENT 'Title' , `subtitle` VARCHAR(255) NOT NULL COMMENT 'Sub title' , `content` TEXT NOT NULL COMMENT 'Message' , `img` VARCHAR(400) NOT NULL COMMENT 'Image' , `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date and time of the event created.' , `poster_id` INT(200) NOT NULL COMMENT 'Admin id who post the event' , PRIMARY KEY (`news_id`)) ENGINE = InnoDB;