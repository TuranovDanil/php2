<?php
$host = 'danil_mariadb';
$database = 'db';
$user = 'danil';
$password = 'danil';

$mysqli = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()) {
    echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
}

if(!empty($_GET['del'])&&!empty((int)$_GET['id'])){
    $id = (int)$_GET['id'];
    $query = "DELETE FROM cinema WHERE id=$id";
    $res = mysqli_query($mysqli, $query);

    if($res) die(mysqli_error($mysqli));

    if(mysqli_affected_rows($mysqli == 1)){

    }
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
