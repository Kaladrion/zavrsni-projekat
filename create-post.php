<?php
include_once 'dbh.php';

/*    $sql = "SELECT * FROM posts;";
    $statement = $connection->prepare($sql);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $posts = $statement->fetchAll();*/

?>
<!DOCTYPE html>
<html>


<?php include('header.php'); ?>

<form action="makeNewPost.php" method="post">
  Title:<br>
  <input type="text" name="Title" required>
  <br>
  Comment:<br>
  <textarea name="Text"></textarea>
  <br><br>
  Author:<br>
    <input type="text" name="Author" required>
  <br><br>
  <input type="submit" value="Submit">
</form> 


<?php include('sidebar.php'); ?>

<?php include('footer.php'); ?>


<body>

</body>
</html>