<?php 
require __DIR__ . '/vendor/autoload.php';

$db = new \PDO('mysql:dbname=my-database;host=localhost;charset=utf8mb4', 'my-username', 'my-password');
// or
// $db = new \PDO('pgsql:dbname=my-database;host=localhost;port=5432', 'my-username', 'my-password');
// or
// $db = new \PDO('sqlite:../Databases/my-database.sqlite');

// or

// $db = \Delight\Db\PdoDatabase::fromDsn(new \Delight\Db\PdoDsn('mysql:dbname=my-database;host=localhost;charset=utf8mb4', 'my-username', 'my-password'));
// or
// $db = \Delight\Db\PdoDatabase::fromDsn(new \Delight\Db\PdoDsn('pgsql:dbname=my-database;host=localhost;port=5432', 'my-username', 'my-password'));
// or
// $db = \Delight\Db\PdoDatabase::fromDsn(new \Delight\Db\PdoDsn('sqlite:../Databases/my-database.sqlite'));

$auth = new \Delight\Auth\Auth($db);
?>