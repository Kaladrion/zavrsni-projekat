<?php
include('dbh.php');

    $sql = "SELECT * FROM posts;";
    $statement = $connection->prepare($sql);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $posts = $statement->fetchAll();
?>

<link href="styles/blog.css" rel="stylesheet">
<div class="sidebar-module sidebar-module-inset">
                <h4>Latest Posts</h4>

                <?php 
                
                foreach (array_slice(array_reverse($posts), 0, 5) as $post) {

                ?>
                <a href="single-post.php?title=<?php echo $post['Title'] ?>"><h6><?php echo $post['Title'] ?></h6></a>
                <?php } ?>
            </div>
            <div class="sidebar-module">
               
                <ol class="list-unstyled">
                    <li><a href="#">March 2014</a></li>
                    <li><a href="#">February 2014</a></li>
                    <li><a href="#">January 2014</a></li>
                    <li><a href="#">December 2013</a></li>
                    <li><a href="#">November 2013</a></li>
                    <li><a href="#">October 2013</a></li>
                    <li><a href="#">September 2013</a></li>
                    <li><a href="#">August 2013</a></li>
                    <li><a href="#">July 2013</a></li>
                    <li><a href="#">June 2013</a></li>
                    <li><a href="#">May 2013</a></li>
                    <li><a href="#">April 2013</a></li>
                </ol>
            </div>
            <div class="sidebar-module">
                
                <ol class="list-unstyled">
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                </ol>
            </div>