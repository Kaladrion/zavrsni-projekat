<?php
	include('dbh.php');


	$title = $_POST['Title'];
	$body = $_POST['Text'];
	$autor = $_POST['Author'];


	$sql = "DELETE FROM posts WHERE Id=$_GET['postid']";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

/*$conn->close();

	$statement = $connection->prepare($sql);
    $statement->execute();

	header("Location: single-post.php");
*/

?>



