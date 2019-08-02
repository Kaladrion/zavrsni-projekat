<?php
	include('dbh.php');

	$title = $_POST['Title'];
	$body = $_POST['Text'];
	$autor = $_POST['Author'];

	$sql = "INSERT INTO posts (title, body, author, created_at) values ('$title', '$body', '$autor', NOW());";
	$statement = $connection->prepare($sql);
    $statement->execute();

	header("Location: create-post.php");

?>