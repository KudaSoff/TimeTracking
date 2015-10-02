---
--- Первоначальное создание базы для TimeTracking
---
CREATE DATABASE IF NOT EXISTS `time_tracking_db`
  DEFAULT CHARACTER SET utf8
  COLLATE utf8_unicode_ci;

---
--- Создание таблицы для хранения информации о проделанной работе
---
CREATE TABLE IF NOT EXISTS `time_tracking_db`.`work`
  (`work_id` int(9) NOT NULL AUTO_INCREMENT,
   `work_disc` TEXT DEFAULT '',
   `work_date` DATE DEFAULT 0,
   `work_time` TIME DEFAULT 0,
   `work_client` TEXT DEFAULT '',

   PRIMARY KEY(`work_id`),
   INDEX(`work_id`)
  ) ENGINE=MyISAM DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

