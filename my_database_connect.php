<meta charset="utf-8">
<?php
require 'my_app_config.php';

mysql_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD)
  or die("<p>Не найдена база данных</p>" . mysql_error());

mysql_select_db(DATABASE_NAME)
  or die("<p>Не подключена база данных</p>" . mysql_error());

?>
