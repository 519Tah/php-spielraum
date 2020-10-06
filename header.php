<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play-ground-PHP</title>
    <link rel="stylesheet" href="CSS/main.css" type="text/css">
</head>
<body>
<header>
    <h1><?php echo "Welcome to my PHP Playground !";?></h1>
    <ul>
        <li><a href="index.php">Home Page</a></li>
        <li><a href="todos.php">My Todos</a></li>
    </ul>
</header>


<?php
include ('functions.php');
include ('task.php');
require ('database/Connection.php');
require ('database/QueryBuilder.php');

$pdo = Connection::make();
$query = new QueryBuilder($pdo);
$tasks = $query->selectALL('todos');
?>