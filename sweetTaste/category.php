<?php include "includes/db.php" ?>
<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?> 

<!-- Search -->
<section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto">
         <form action="/sweetTaste/search.php" method="post">
            <div class="input-group">
                <input name="search" type="text" class="form-control" placeholder="Search">
                <span class="input-group-btn">
                    <button name="submit" class="btn btn-success">Search</button>
                </span>
            </div>
         </form>
        </div>
      </div>
    </div>
</section> 

<div class="container">
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-9">

            <?php

            if(isset($_GET['category'])){
                $post_category_id = $_GET['category'];

                if(isset($_SESSION['username'])) {
                    // security
                    $stmt1 = mysqli_prepare($connection, "SELECT post_id, post_title, post_user, post_date, post_image, post_content FROM posts WHERE post_category_id = ? ");
                    
                } else {
                    $stmt2 = mysqli_prepare($connection, "SELECT post_id, post_title, post_user, post_date, post_image, post_content FROM posts WHERE post_category_id = ? AND post_status = ? ");
                    $published = 'published';
                }

                if(isset($stmt1)) {
                    mysqli_stmt_bind_param($stmt1, "i", $post_category_id);
                    mysqli_stmt_execute($stmt1);
                    mysqli_stmt_bind_result($stmt1, $post_id, $post_title, $post_user, $post_date, $post_image, $post_content);
                    $stmt = $stmt1;
                } else { // first int, second string -> is
                    mysqli_stmt_bind_param($stmt2, "is", $post_category_id, $published);   
                    mysqli_stmt_execute($stmt2);
                    mysqli_stmt_bind_result($stmt2, $post_id, $post_title, $post_user, $post_date, $post_image, $post_content);
                    $stmt = $stmt2;
                }
                
                while(mysqli_stmt_fetch($stmt)) { 

                ?>

                    <!-- First Blog Post -->
                    <h2>
                        <a href="/sweetTaste/post/<?php echo $post_id; ?>"><?php echo $post_title; ?></a>
                    </h2>
                    <p class="lead">
                        by <a href="/sweetTaste/author_posts.php?author=<?php echo $post_user ?>&p_id=<?php echo $post_id; ?>"><?php echo $post_user ?></a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date; ?></p>
                    <hr>
                    <a href="/sweetTaste/post/<?php echo $post_id; ?>">
                        <img class="img-responsive img-fluid d-none d-lg-block" src="/sweetTaste/images/<?php echo $post_image; ?>" alt="">
                    </a>
                    <hr>
                    <p><?php echo $post_content; ?></p>
                    <a class="btn btn-primary" href="/sweetTaste/post/<?php echo $post_id; ?>">Make a comment <span class="glyphicon glyphicon-chevron-right"></span></a>

                    <hr>

          <?php } mysqli_stmt_close($stmt);
                
            } else {
                header("Location: index.php");
            }
          ?>


        </div>

        <!-- Blog Sidebar Widgets Column -->
        <?php include "includes/sidebar.php" ?>

    </div>
    <!-- /.row -->
  </div>
<?php include "includes/footer.php" ?>