<!-- Основные настройки -->
<?php
define("DB_HOST", 'localhost');
define("DB_LOGIN", 'root');
define("DB_PASSWORD", '');
define("DB_NAME", 'gbook');

$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME) or die(mysqli_connect_error());
?>
<!-- Основные настройки -->

<!-- Сохранение записи в БД -->
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = mysqli_real_escape_string($link, trim(strip_tags($_POST['name'])));
        $email = mysqli_real_escape_string($link, trim(strip_tags($_POST['email'])));
        $msg = mysqli_real_escape_string($link, trim(strip_tags($_POST['msg'])));

        $sql = "INSERT INTO msgs (name, email, msg) VALUES ('$name', '$email', '$msg')";
        mysqli_query($link, $sql);
        header('Location: '.$_SERVER['REQUEST_URI']);
        exit;
    }
?>
<!-- Сохранение записи в БД -->

<!-- Удаление записи из БД -->
<?php
if(isset($_GET['del'])) {
    $del = abs((int)$_GET['del']);
    if($del){
        $sql = 'DELETE FROM msgs WHERE id='.$del;
        mysqli_query($link, $sql);
    }
}
?>
<!-- Удаление записи из БД -->
<h3>Оставьте запись в нашей Гостевой книге</h3>

<form method="post" action="<?= $_SERVER['REQUEST_URI']?>">
Имя: <br /><input type="text" name="name" /><br />
Email: <br /><input type="text" name="email" /><br />
Сообщение: <br /><textarea name="msg"></textarea><br />

<br />

<input type="submit" value="Отправить!" />

</form>
<!-- Вывод записей из БД -->
<?php
$sql = 'SELECT id, name, email, msg, UNIX_TIMESTAMP(datetime) as dt FROM msgs ORDER BY id DESC';
$res = mysqli_query($link, $sql);
echo "<p>Всего записей в гостевой книге: ".mysqli_num_rows($res);
/*while($row = mysqli_fetch_assoc($res)) {
    $dt = date('d-m-Y в H:i:s', $row['dt']);
    echo "<p style='border: 1px solid #ccc!important;'><a href='mailto:{$row['email']}'>{$row['name']}</a> $dt написал <br /> {$row['msg']}</p>";
    echo "<p align='right'><a href='http://mysite.local/index.php?id=gbook&del={$row['id']}'>Удалить</a></p>";
}*/
$result = mysqli_fetch_all($res,MYSQLI_ASSOC);
foreach ($result as $row) {
    $dt = date('d-m-Y в H:i:s', $row['dt']);
    echo "<p style='border: 1px solid #ccc!important;'><a href='mailto:{$row['email']}'>{$row['name']}</a> $dt написал <br /> {$row['msg']}</p>";
    echo "<p align='right'><a href='http://mysite.local/index.php?id=gbook&del={$row['id']}'>Удалить</a></p>";
}

?>
<!-- Вывод записей из БД -->
