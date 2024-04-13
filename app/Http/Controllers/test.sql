CREATE TABLE `tbl_availability_child` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `child_id` int DEFAULT NULL,
  `week_time` varchar(250) DEFAULT NULL,
  `language` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `child_id` (`child_id`),
  FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (`child_id`) REFERENCES `tbl_child` (`child_id`) ON DELETE CASCADE ON UPDATE CASCADE
) 
CREATE TABLE `tbl_child_schedule` (
  `id` int NOT NULL AUTO_INCREMENT,
  `item_type_id` tinyint unsigned  DEFAULT '0',
  `item_id` int  DEFAULT '-1',
  `child_id` int DEFAULT '-1',
  `create_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `last_updated_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `last_updated_by` tinyint DEFAULT '-1',
  PRIMARY KEY (`id`),
  FOREIGN KEY (`item_type_id`) REFERENCES `tbl_item_type` (`item_type_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (`child_id`) REFERENCES `tbl_child` (`child_id`) ON DELETE CASCADE ON UPDATE CASCADE
);
