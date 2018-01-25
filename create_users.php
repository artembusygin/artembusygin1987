
<?php
require 'my_database_connect.php';

$name = trim($_REQUEST['name']);
$email = trim($_REQUEST['email']);
$comment = trim($_REQUEST['comment']);
$quantity = $_REQUEST['quantity'];

$insert_sql = "INSERT INTO styleconference(name, email, comment, quantity) VALUES ('{$name}', '{$email}', '{$comment}', '{$quantity}')";
mysql_query($insert_sql)
  or die(mysql_error());
?>

<html>
  <head>
    <meta charset="utf-8">
    <link href="assets/stylesheets/main.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,300,100&subset=cyrillic,latin">
  </head>
  <body>
    <header class="primary-header group container">

          <h1 class="logo">
            <a href="index.html">Styles <br> Conference</a>
          </h1>

      <h3 class="tagline">24&ndash;26 февраля &mdash; Мариуполь, Донецкая область</h3>

      <nav class="nav primary-nav">
        <ul>
          <li><a href="index.html">Главная</a></li><!--
          --><li><a href="speakers.html">Спикеры</a></li><!--
          --><li><a href="schedule.html">Расписание</a></li><!--
          --><li><a href="venue.html">Место проведения</a></li><!--
          --><li><a href="register.html">Регистрация</a></li>
        </ul>
      </nav>

    </header>

    <section class="row-alt">
      <div class="container">
        <h1>Регистрация прошла успешно</h1>
      </dix>
    </section>


    <div class="row">
      <section class="grid">
        <p>Спасибо за регистрацию. До встречи на конференции.</p>
        <p>
          Имя:  <?php echo $name;?> <br />
          Адрес электронной почты:  <?php echo $email;?> <br />
          Вы стали счастливым обладателем <?php echo $quantity;?> билета(ов) <br />
          Мы приняли Ваш комментарий к сведению.
        </p>
    </section>
    </div>

    <footer class="primary-footer container group">

      <small>&copy; Styles Conference</small>

      <nav class="nav">
        <ul>
          <li><a href="index.html">Главная</a></li><!--
          --><li><a href="speakers.html">Спикеры</a></li><!--
          --><li><a href="schedule.html">Расписание</a></li><!--
          --><li><a href="venue.html">Место проведения</a></li><!--
          --><li><a href="register.html">Регистрация</a></li>
        </ul>
      </nav>

    </footer>
  </body>
</html>
