+----+-----------+--------------+------------+
|     field      |     type     | specs      |
+----+-----------+--------------+------------+
|  id            | INT(11)      |            |
|  title         | VARCHAR(255) |            |
|  slug          | VARCHAR(255) | UNIQUE     |
|  body          | TEXT         |            |
|  created_at    | TIMESTAMP    |            |
|  updated_at    | TIMESTAMP    |            |
+----------------+--------------+------------+