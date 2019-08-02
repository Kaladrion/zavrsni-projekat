<?php
include('dbh.php');

    $sql = "SELECT * FROM posts;";
    $statement = $connection->prepare($sql);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $posts = $statement->fetchAll();

?>

<html>



<?php

foreach (array_reverse($posts) as $post) { ?>
    <div class="blog-post">
                <a href="single-post.php?title=<?php echo $post['Title'] ?>&body=<?php echo $post['Body']?>&postid=<?php echo $post['Id'] ?>"><h2 class="blog-post-title"><?php echo $post['Title'] ?></h2></a>
                <p><?php echo $post['Body']?></p>


                <div class="blog-post">
                    
                    <p class="blog-post-meta"><?php echo $post['Created_at'] ?> <a href="#"><?php echo $post['Author'] ?></a></p>

                    
                </div><!-- /.blog-post -->

               <!--  <div class="blog-post">
                    <h2 class="blog-post-title">New feature</h2>
                    <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>
                </div> -->
                    
    </div><!-- /.blog-post -->
<?php } ?>

</html>


