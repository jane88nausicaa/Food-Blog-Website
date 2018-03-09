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

    <!-- Page Content -->
    <div class="container">
        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-9">
                
                <?php
    
                if(isset($_POST['submit'])){
                    $search =  $_POST['search'];
                    $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' AND post_status = 'published' ";
                    $search_query = mysqli_query($connection, $query);
                    
                    if(!$search_query){
                        die("QUERY FALILED" . mysqli_error($connection));
                    }
                    
                    $count = mysqli_num_rows($search_query);
                    if($count == 0){
                        echo "<h1> No Result </h1>";
                    } else {
                        while($row = mysqli_fetch_assoc($search_query)){
                            $post_id = $row['post_id'];
                            $post_title = $row['post_title'];
                            $post_user = $row['post_user'];
                            $post_date = $row['post_date'];
                            $post_image = $row['post_image'];
                            $post_content = $row['post_content'];    
                        ?>
                        
                        <h2>
                            <a href="/sweetTaste/post/<?php echo $post_id; ?>"><?php echo $post_title ?></a>
                            
                        </h2>
                        <p class="lead">
                           by <a href="/sweetTaste/author_posts.php?author=<?php echo $post_user ?>&p_id=<?php echo $post_id; ?>"><?php echo $post_user ?></a>
                           
                        </p>
                        <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
                        <hr>
                        <img class="img-responsive" src="images/<?php echo $post_image; ?>" alt="">
                        <hr>
                        <p><?php echo $post_content ?></p>

                        <hr>
                        <?php } 
                    }
                } ?>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php" ?>

        </div>
        <!-- /.row -->

        <hr>
        </div>
<?php include "includes/footer.php" ?>