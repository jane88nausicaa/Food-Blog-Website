<?php session_start() ?>

<nav class="navbar navbar-expand-md navbar-light fixed-top py-5">
    <div class="container">
      <a href="/sweetTaste/index.php" class="navbar-brand">
        <img src="/sweetTaste/images/food.png" width="50" height="50" alt="">
        <h3 class="d-inline align-middle">SweetTaste</h3>
      </a>

      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="navbar-nav ml-auto">
                   
                   <?php
                    $query = "SELECT * FROM categories";
                    $select_all_categories_query = mysqli_query($connection, $query);
                    while($row = mysqli_fetch_assoc($select_all_categories_query)){
                        $cat_title = $row['cat_title'];
                        $cat_id = $row['cat_id'];
                        
                        // create dynamic active navigation
                        $category_class = '';
                        $registration_class = '';
                        // we are on category.php, PHP_SELF is category.php
                        $pageName = basename($_SERVER['PHP_SELF']);
                        $registration = '/sweetTaste/registration.php';
                        
                        if(isset($_GET['category']) && $_GET['category'] == $cat_id) {
                            $category_class = 'active';
                        } else if($pageName == $registration) {
                            $registration_class = 'active';
                        }
                        
                        ?>
                       
                        <li class="nav-item $category_class">
                        <?php
                        echo "<a href='/sweetTaste/category/{$cat_id}' class='nav-link'>{$cat_title}</a>";
                        ?>
                        </li>
                        <?php
                    }
                    ?>
                    
                    
                  
                    <?php
                    
                    if(isset($_SESSION['user_role'])) {
                        if(isset($_GET['p_id'])) {
                            $the_post_id = $_GET['p_id'];
                    ?>
                    <li class="nav-item $category_class">
                        <?php
                        echo "<a href='/sweetTaste/admin/posts.php?source=edit_post&p_id={$the_post_id}' class='nav-link text-warning'>Edit Post</a>";
                        ?>
                        </li>  
                    <?php
                            
                        }
                    }
                    
                    ?>
                </ul>
        
      </div>
    </div>
  </nav>