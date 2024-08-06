<?php
echo 'hello world';

$pdo = new PDO("pgsql:host=db; port=5432; dbname=db", 'dbuser', 'dbpwd');

$pdo->exec("CREATE TABLE users (id SERIAL PRIMARY KEY , name varchar(255) not null)");
