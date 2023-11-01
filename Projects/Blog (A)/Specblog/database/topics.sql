+----+-----------+------------------------+------------+
|     field      |     type               | specs      |
+----+-----------+------------------------+------------+
|  id            | INT(11)                |            |
|  name          | VARCHAR(255)           |            |
|  slug          | VARCHAR(255)           | UNIQUE     |
+----------------+--------------+---------+------------+

INSERT INTO `topics` (`id`, `name`, `slug`) VALUES
(1, 'Inspiration', 'inspiration'),
(2, 'Motivation', 'motivation'),
(3, 'Diary', 'diary')