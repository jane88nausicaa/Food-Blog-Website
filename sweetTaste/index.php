<?php include "includes/db.php" ?>
<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?> 
 
<!-- VIDEO PLAY SECTION -->
  <section id="video-play">
    <div class="dark-overlay">
      <div class="row">
        <div class="col">
          <div class="container p-5">
            <a
              href="#"
              class="video"
              data-video="https://www.youtube.com/embed/hElGAFco3Is"
              data-toggle="modal"
              data-target="#videoModal"
            >
              <i class="fa fa-play"></i>
            </a>
            <h1 class="text-info">See What We Do</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  
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
  
  
<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-9">

            <?php
            $per_page = 3;
            if(isset($_GET['page']))  {
                $page = $_GET['page'];
            } else {
                $page = "";
            }

            if($page == "" || $page == 1) {
                $page_1 = 0;
            } else {
                $page_1 = ($page * $per_page) - $per_page;
            }

            if(isset($_SESSION['user_role'])) {
                $post_query_count = "SELECT * FROM posts ";
            } else {
                $post_query_count = "SELECT * FROM posts WHERE post_status = 'published' ";
            }

            $find_count = mysqli_query($connection, $post_query_count);
            $count = mysqli_num_rows($find_count);

            if($count < 1) {
                echo "<h1 class='text-center'>No posts available</h1>";
            } else {
                $count = ceil($count/$per_page);

                /* 
                In limit clause, it works like this: LIMIT 10 5 , meaning, start from the tenth record,and extract next 5 items. Since we are extracting by 5 items
                */
                $query = "SELECT * FROM posts LIMIT $page_1, $per_page";
                $select_all_posts_query = mysqli_query($connection, $query);
                while($row = mysqli_fetch_assoc($select_all_posts_query)){
                    $post_id = $row['post_id'];
                    $post_title = $row['post_title'];
                    $post_user = $row['post_user'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = substr($row['post_content'], 0, 5000); 
                    $post_status = $row['post_status'];

                ?>
                    <!-- First Blog Post -->
                    <h2>
                        <a href="/sweetTaste/post/<?php echo $post_id; ?>"><?php echo $post_title ?></a>
                    </h2>
                    <p class="lead">
                        posted by <a href="/sweetTaste/author_posts.php?author=<?php echo $post_user ?>&p_id=<?php echo $post_id; ?>"><?php echo $post_user ?></a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
                    <hr>
                    <a href="/sweetTaste/post/<?php echo $post_id; ?>">
                        <img class="img-responsive img-fluid d-none d-lg-block" src="/sweetTaste/images/<?php echo $post_image; ?>" alt="">
                    </a>
                    <hr>
                    <p><?php echo $post_content; ?></p>
                    <a class="btn btn-primary" href="/sweetTaste/post/<?php echo $post_id; ?>">Make a comment <span class="glyphicon glyphicon-chevron-right"></span></a>

                    <hr>

            <?php }  } ?>

        </div>
        
        <?php include "includes/sidebar.php" ?>


    </div>
    <!-- /.row -->

    <hr>
    
    <nav class="ml-4">
        <ul class="pagination pagination-lg">
           <?php
            $number_list = array();
            for($i = 1; $i <= $count; $i++) {
                if($i == $page) {
                    echo "<li class='page-item active'><a href='index.php?page={$i}' class='page-link'>{$i}</a></li>";
                } else {
                    echo "<li class='page-item'><a href='index.php?page={$i}' class='page-link'>{$i}</a></li>";
                }
            }
            ?>
        </ul>
    </nav>
</div>

<!-- VIDEO MODAL-->
  <div class="modal fade" id="videoModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
          <iframe src="" height="350" width="100%" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

  
<?php include "includes/footer.php";?>