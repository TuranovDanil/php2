<?php
$host = 'danil_mariadb';
$database = 'db';
$user = 'danil';
$password = 'danil';

$mysqli = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()) {
    echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
}
$query = "SELECT * FROM orders";
$res = mysqli_query($mysqli, $query);
if (!$res) die (mysqli_error($mysqli));

while ($row = mysqli_fetch_assoc($res)) {
    ?>
    <p>
    <h2><?= $row['order_id']; ?></h2>
    Film: <?= $row['film_id']; ?><br>
    Cinema: <?= $row['cinema_id']; ?><br>
    </p>
    <?php
}

$query = "SELECT * FROM cinema";
$res = mysqli_query($mysqli, $query);
if (!$res) die (mysqli_error($mysqli));
while ($row = mysqli_fetch_assoc($res)) {
    ?>
    <p>
    <h2><?= $row['name']; ?></h2>
    Phone: <?= $row['phone']; ?><br>
    </p>
    <?php
}