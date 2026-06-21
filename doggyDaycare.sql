DROP TABLE IF EXISTS `doggy_daycare`;
CREATE DATABASE `doggy_daycare`;
USE `doggy_daycare`;


-- insert owner id into all inserts -- 
CREATE TABLE `dogs` (
  `dog_id` int(28) NOT NULL AUTO_INCREMENT,
  `owner_id` int(27) NOT NULL,
  `name` varchar(50) NOT NULL,
  `breed` varchar(50) NOT NULL,
  `age` int(4) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `size`   varchar(20) NOT NULL, 
  `weight` int(8) NOT NULL, 
  `note` varchar(50),
  
  -- Large (56+), Medium (23-55) ,Small (1-22) -- 

  PRIMARY KEY (`dog_id`)
) ENGINE=InnoDB AUTO_INCREMENT= 28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
INSERT INTO `dogs` VALUES (1, 1, 'Ace', 'German Shepard', 3, 'Male', 'Large', 75, NULL);
INSERT INTO `dogs` VALUES (2, 2, 'Chewy', 'Golden Retriever', 6, 'Male', 'Large', 68, 'Chews everything');
INSERT INTO `dogs` VALUES (3, 4, 'Ajax', 'German Shepard', 1, 'Male', 'Medium', 65, 'Aggressive towards small dogs');
INSERT INTO `dogs` VALUES (4, 6, 'Archibald MacLeash','English Bulldog', 10, 'Male','Medium', 50, NULL);
INSERT INTO `dogs` VALUES (5, 1, 'Bear','Great Pyrenese', 4, 'Male', 'Large', 123, 'Will jump on you and knock you over');
INSERT INTO `dogs` VALUES (6, 2, 'Baguette', 'Cavalier King Charles Spaniel', 3, 'Female', 'Small', 14, NULL);
INSERT INTO `dogs` VALUES (7, 4, 'Banjo','Basset Hound', 7, 'Male', 'Medium', 52, 'Howls when left alone');
INSERT INTO `dogs` VALUES (8, 7, 'Beethoven','St.Bernard', 5, 'Male', 'Large', 165, 'Warning: slober');
INSERT INTO `dogs` VALUES (9, 9, 'Cappuccino','Corgi', 6, 'Female', 'Medium', 23, NULL);
INSERT INTO `dogs` VALUES (10, 7, 'Cash','Dachsund', 11, 'Male', 'Small', 8, NULL);
INSERT INTO `dogs` VALUES (11, 12, 'Bella','Chihahua', 3, 'Female', 'Small', 4, 'Is an ankle biter');
INSERT INTO `dogs` VALUES (12, 2, 'Mouse','Great Dane', 2, 'Female', 'Large', 126, NULL);
INSERT INTO `dogs` VALUES (13, 8,'Moses','Maltese', 14, 'Male', 'Small', 12, 'Bestest good boy there is');
INSERT INTO `dogs` VALUES (14, 10, 'Lola','Standard Poodle', 7, 'Female', 'Medium', 42, NULL);
INSERT INTO `dogs` VALUES (15, 3,'Tank','Rottweiler', 8, 'Male', 'Large', 117, 'Food aggressive');
INSERT INTO `dogs` VALUES (16, 9, 'Diesel','German Shepard', 5, 'Male', 'Large', 76, NULL);
INSERT INTO `dogs` VALUES (17, 2, 'Max','Golden Retriever', 4, 'Male', 'Large', 71, NULL);
INSERT INTO `dogs` VALUES (18, 11,'Chloe','Shih Tzu', 5, 'Female', 'Small', 10, 'Needs bow in hair to function');
INSERT INTO `dogs` VALUES (19, 10, 'Jack','Border Collie', 11, 'Male', 'Medium', 45, 'Extreme energy');
INSERT INTO `dogs` VALUES (20, 5, 'Gunner','Cane Corso', 4, 'Male', 'Large', 110, NULL);
INSERT INTO `dogs` VALUES (21, 13, 'LuLu','Yorkshire Terrier', 6, 'Female', 'Small', 5, NULL);
INSERT INTO `dogs` VALUES (22, 16, 'Big Boy','Yorkshire Terrier', 4, 'Male', 'Small', 3, 'Will bark until picked up');
INSERT INTO `dogs` VALUES (23, 4, 'Fluffy','Siberian Husky', 9, 'Female', 'Medium', 40, NULL);
INSERT INTO `dogs` VALUES (24, 7, 'Kai','Siberian Husky', 6, 'Male', 'Medium', 54, 'Warning: very loud');
INSERT INTO `dogs` VALUES (25, 14, 'Oreo','Border Collie', 3, 'Female', 'Medium', 36, NULL);
INSERT INTO `dogs` VALUES (26, 15, 'Pancho','Chihahua', 7, 'Male', 'Small', 6, NULL);
INSERT INTO `dogs` VALUES (27, 17, 'Scout','Siberian Husky', 9, 'Female', 'Medium', 35, 'Wont shut up');

-- find out owners information using dog_id -- 

CREATE TABLE `owners` (
  `owner_id` int(17) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city`   varchar(30) NOT NULL,
  `state`  varchar(30) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,

  PRIMARY KEY (`owner_id`)
) ENGINE=InnoDB AUTO_INCREMENT= 27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
INSERT INTO `owners` VALUES (1,'James', 'Wright', '2880 Nulla St.', 'Rapid City', 'SD', '(605) 563-7401');
INSERT INTO `owners` VALUES (2,'Mary', 'Smith', '3727 Ullamcorper St.', 'Spearfish', 'SD', '(605) 587-2335');
INSERT INTO `owners` VALUES (3,'Will', 'Johnson', 'Ap #867-859 Sit Rd', 'Rapid City', 'SD', '(605) 713-8616');
INSERT INTO `owners` VALUES (4,'John', 'Williams', '7292 Dictum Av.', 'Rapid City', 'SD', '(605) 709-6392');
INSERT INTO `owners` VALUES (5,'Susan', 'Brown', 'Ap #8679 Sodales Av.', 'Rapid City', 'SD', '(605) 393-5734');
INSERT INTO `owners` VALUES (6,'Carrie', 'Jones', '103 Integer Road', 'Piedmont', 'SD', '(605) 960-3808');
INSERT INTO `owners` VALUES (7,'Bob', 'Miller', '5762 At Road.', 'Rapid City', 'SD', '(605) 278-5929');
INSERT INTO `owners` VALUES (8,'Kaeli', 'Clark', '5587 Nunc. Avenue', 'Piedmont', 'SD', '(605) 545-6785');
INSERT INTO `owners` VALUES (9,'Dave', 'Lopez', '9940 Tortor. Street', 'Santa Rose', 'MN', '(684) 579-1879');
INSERT INTO `owners` VALUES (10,'Jennifer', 'Wilson', '7666 Iaculis St.', 'Box Elder', 'SD', '(605) 353-2641');
INSERT INTO `owners` VALUES (11,'Karen', 'Anderson', '4366 Lacinia Avenus', 'Rapid City', 'SD', '(605) 675-4007');
INSERT INTO `owners` VALUES (12,'Ashley', 'Thompson', '6308 Lacinia Road', 'Rapid City', 'SD', '(605) 873-7090');
INSERT INTO `owners` VALUES (13,'Charles', 'White', 'Ap #285 UllamCorper Avenue', 'Rapid City', 'SD', '(605) 259-2375');
INSERT INTO `owners` VALUES (14,'Daniel', 'Robinson', '5543 Aliquet St.', 'Rapid City', 'SD', '(605) 450-4729');
INSERT INTO `owners` VALUES (15,'Paul', 'King', '5037 Diam Rd.', 'Daly City', 'OH', '(453) 391-4650');
INSERT INTO `owners` VALUES (16,'Brian', 'Walker', '6351 Fringilla Avenue', 'Belle Fourche', 'SD', '(605) 104-5475');
INSERT INTO `owners` VALUES (17,'Johnny', 'Arellano', '629 St Andrew', 'Rapid City', 'SD', '(505) 302-8882');



CREATE TABLE `health_record` (
  `dog_id` int(27) NOT NULL AUTO_INCREMENT,
  `vaccinated` varchar(5) NOT NULL,
  `fixed` varchar(5) NOT NULL,
  `allergy` varchar(50),
  `vet_id`   int(11) NOT NULL,
  `notes`  varchar(100),

  PRIMARY KEY (`dog_id`)
) ENGINE=InnoDB AUTO_INCREMENT= 27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
INSERT INTO `health_record` VALUES (1, 'Yes', 'Yes', 'Chicken', 1, NULL);
INSERT INTO `health_record` VALUES (2,'Yes', 'Yes', NULL, 2, NULL );
INSERT INTO `health_record` VALUES (3,'Yes', 'Yes', NULL, 3, NULL );
INSERT INTO `health_record` VALUES (4, 'No', 'Yes', 'Chicken', 4, NULL);
INSERT INTO `health_record` VALUES (5, 'Yes', 'Yes', 'Beef', 1, NULL);
INSERT INTO `health_record` VALUES (6, 'Yes', 'Yes', NULL, 1, NULL);
INSERT INTO `health_record` VALUES (7, 'Yes', 'Yes', 'Fish', 5, NULL);
INSERT INTO `health_record` VALUES (8, 'Yes', 'Yes', NULL, 1, NULL);
INSERT INTO `health_record` VALUES (9, 'No', 'Yes', NULL, 7, NULL);
INSERT INTO `health_record` VALUES (10, 'Yes', 'Yes', NULL, 9, NULL);
INSERT INTO `health_record` VALUES (11, 'Yes', 'Yes', 'Chicken', 10, NULL);
INSERT INTO `health_record` VALUES (12, 'Yes', 'No', NULL, 1, NULL);
INSERT INTO `health_record` VALUES (13, 'Yes', 'Yes', NULL, 6, NULL);
INSERT INTO `health_record` VALUES (14, 'Yes', 'Yes', 'Beef', 2, NULL);
INSERT INTO `health_record` VALUES (15, 'Yes', 'No', NULL, 2, NULL);
INSERT INTO `health_record` VALUES (16, 'Yes', 'Yes', 'Fish', 7, NULL);
INSERT INTO `health_record` VALUES (17, 'No', 'Yes', NULL, 3, NULL);
INSERT INTO `health_record` VALUES (18, 'Yes', 'Yes', NULL, 4, NULL);
INSERT INTO `health_record` VALUES (19, 'Yes', 'Yes', 'Chicken', 3, NULL);
INSERT INTO `health_record` VALUES (20, 'Yes', 'No', 'Beef', 1, NULL);
INSERT INTO `health_record` VALUES (21, 'Yes', 'Yes', 'Chicken', 1, NULL);
INSERT INTO `health_record` VALUES (22, 'Yes', 'Yes', NULL, 2, NULL);
INSERT INTO `health_record` VALUES (23, 'Yes', 'Yes', NULL, 5, NULL);
INSERT INTO `health_record` VALUES (24, 'No', 'Yes', NULL, 10, NULL);
INSERT INTO `health_record` VALUES (25, 'Yes', 'Yes', NULL, 4, NULL);
INSERT INTO `health_record` VALUES (26, 'Yes', 'Yes', NULL, 8, NULL);



CREATE TABLE `vetInfo` (
  `vet_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `business` varchar(100) NOT NULL, 
  `address` varchar(50) NOT NULL,
  `city`   varchar(50) NOT NULL,
  `state`  varchar(3) NOT NULL,
  `phone` varchar(20) NOT NULL,

  PRIMARY KEY (`vet_id`)
) ENGINE=InnoDB AUTO_INCREMENT= 27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
INSERT INTO `vetInfo` VALUES (1, 'Dean', 'Falcon', 'All Creatures Veterinary Hospital', '1825 Clear View Ln', 'Rapid City', 'SD', '(605) 342-0052' );
INSERT INTO `vetInfo` VALUES (2, 'Lynn', 'Irons', 'Noahs Ark Animal Hospital', '1315 Mt Rushmore Rd', 'Rapid City', 'SD', '(605) 343-3225' );
INSERT INTO `vetInfo` VALUES (3, 'Heidi', 'Brigman', 'Animal Clinic of Rapid City', '1655 S Valley Dr', 'Rapid City', 'SD', '(605) 342-1368');
INSERT INTO `vetInfo` VALUES (4,  'Melissa', 'Mez',  'Black Hills Animal Hospital', '2909 Cambell St', 'Rapid City', 'SD', '(605) 343-6066' );
INSERT INTO `vetInfo` VALUES (5, 'Warren', 'Whalen', 'Animal Care Center of Spearfish', '316 Old U.S. 14', 'Rapid City', 'SD', '(605) 722-5600');
INSERT INTO `vetInfo` VALUES (6, 'Ken', 'Ireland', 'Northern Hills Veterinary Clinic Small Animal', '713 Anna St', 'Sturgis', 'SD', '(605) 347-3606' );
INSERT INTO `vetInfo` VALUES (7,'Katherine', 'Freed', 'Minnesota Veterinary Hospital', '4545 Hodgson Rd', 'St. Paul', 'MN', '(651) 484-3331');
INSERT INTO `vetInfo` VALUES (8, 'Charlotte', 'Pavlik', 'Buckeye Veterinary Clinic', '3592 Manchester Rd',  'Akron', 'OH', '(330) 644-4700');
INSERT INTO `vetInfo` VALUES (9, 'Serena', 'Heig', 'Mountain View Animal Hospital', '1130 Jackson Blvd', 'Rapid City', 'SD', '(605) 343-8050');
INSERT INTO `vetInfo` VALUES (10, 'Nick', 'Heig', 'Canyon Lake Veterinary Hospital', '4230 Canyon Lake Dr', 'Rapid City', 'SD',  '(605) 348-6510');



CREATE TABLE `inventory` (
  `product_id` int(30) NOT NULL AUTO_INCREMENT,
  `productName` varchar(100) NOT NULL,
  `quantity` int(5) NOT NULL,
  `price` decimal(4,2) NOT NULL, 
  `needInStock` int(5) NOT NULL,
  `use` int(5) NOT NULL,

-- 1 - general, 2 - grooming, 3 - training -- 
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT= 30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
INSERT INTO `inventory` VALUES (1, 'Flea Shampoo', 13, 4.99, 15, 2);
INSERT INTO `inventory` VALUES (2, 'Shampoo', 12, 2.99, 20, 2); 
INSERT INTO `inventory` VALUES (3, 'Whitening Shampoo', 5, 6.99, 5, 2);
INSERT INTO `inventory` VALUES (4, 'Deshedding Shampoo', 9, 3.99, 10, 2);
INSERT INTO `inventory` VALUES (5, 'Sensitive Skin Shampoo', 10, 7.99, 10, 2);
INSERT INTO `inventory` VALUES (6, 'Conditioner', 10, 3.99, 10, 2);
INSERT INTO `inventory` VALUES (7, 'Food - Chicken', 15, 10.99, 20, 1);
INSERT INTO `inventory` VALUES (8, 'Food - Beef', 15, 13.99, 20, 1);
INSERT INTO `inventory` VALUES (9, 'Senior Food - Chicken', 10, 16.99, 10, 1);
INSERT INTO `inventory` VALUES (10, 'Senior Food - Beef', 9, 20.99, 10, 1);
INSERT INTO `inventory` VALUES (11, 'Small Food - Chicken', 6, 10.99, 10, 1);
INSERT INTO `inventory` VALUES (12, 'Small Food - Beef', 10, 12.99, 10, 1);
INSERT INTO `inventory` VALUES (13, 'Large Leash', 20, 5.99, 20, 3);
INSERT INTO `inventory` VALUES (14, 'Small Leash', 15, 3.99, 15, 3);
INSERT INTO `inventory` VALUES (15, 'Brush', 18, 2.99, 20, 2);
INSERT INTO `inventory` VALUES (16, 'Deshedding Brush', 10, 3.99, 10, 2);
INSERT INTO `inventory` VALUES (17, 'Eye Comb', 6, 1.99, 6, 2);
INSERT INTO `inventory` VALUES (18, 'Clicker', 10, 1.99, 10, 3);
INSERT INTO `inventory` VALUES (19, 'Treats - Chicken', 15, 3.99, 15, 3);
INSERT INTO `inventory` VALUES (20, 'Treats - Beef', 10, 5.99, 10, 3);
INSERT INTO `inventory` VALUES (21, 'Dog Backback', 5, 30.99, 5, 3);
INSERT INTO `inventory` VALUES (22, 'Ball Toy', 20, 2.99, 20, 3);
INSERT INTO `inventory` VALUES (23, 'Potty Pads', 20, 1.99, 30, 3);
INSERT INTO `inventory` VALUES (24, 'Clippers', 10, 50.99, 10, 2);
INSERT INTO `inventory` VALUES (25, 'Scissors', 15, 5.99, 15, 2);
INSERT INTO `inventory` VALUES (26, 'Nail Clippers', 10, 15.99, 10, 2);
INSERT INTO `inventory` VALUES (27, 'Large Chew', 20, 2.99, 20, 1);
INSERT INTO `inventory` VALUES (28, 'Small Chew', 7, 1.99, 20, 1);
INSERT INTO `inventory` VALUES (29, 'Soft toy', 15, 3.99, 20, 1);



