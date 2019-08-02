<?php
include('dbh.php');

 $sql = "SELECT * FROM comments;";
    $statement = $connection->prepare($sql);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $comments = $statement->fetchAll();



    if (isset($_GET['postDeleteId'])) {
               $id = $_GET['postDeleteId'];
               $sqlDelCommments = "DELETE FROM comments WHERE Post_Id = $id";
               $statementDelComm = $connection->prepare($sqlDelCommments);
               $statementDelComm->execute();
               $sqlDel = "DELETE FROM posts WHERE Id = $id;";
               $statementDelete = $connection->prepare($sqlDel);
               $statementDelete->execute();
               header("Location:index.php");
           }
?>

<html>
<script src="prompt.js"></script>

<?php include('header.php'); ?>
<button >Hide all comments</button>
<br><br>
<div class="komentari">
<h2><?php echo $_GET['title'] ?></h2>
<p><?php 
	if (isset($_GET['body'])) {
		echo $_GET['body'];
	}
	?>
</p>
<ul>
<a href="single-post.php?postDeleteId=<?php echo $_GET['postid'] ?>" ><button  onclick="location.href = 'index.php';" type="button" class="btn btn-primary" href="index.php">Delete this post</button></a>
	<?php foreach ($comments as $comment) { ?>
	<hr>

	<li><?php echo $comment['Author'] ?></li>
	<li><?php echo $comment['Text'] ?></li>
	</hr>
	<?php } ?>
</ul>

</div>


<?php include('sidebar.php'); ?>

<?php include('footer.php'); ?>
</html>
