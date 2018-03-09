 
<div class="col-md-3">
<?php if(isLoggedIn()): ?>
    <div class="card text-center bg-secondary text-white mb-3 rounded-circle">
        <div class="card-body">
            <h1 class="display-4">
                <i class="fa fa-user"></i>
            </h1>
            <a href="/sweetTaste/admin/index.php" class="btn btn-outline-light btn-sm">Admin</a>
        </div>
    </div>

    <div class="card text-center bg-info text-white mb-3 rounded-circle">
        <div class="card-body">
            <h1 class="display-4">
                <i class="fa fa-user-times"></i>
            </h1>
            <a href="/sweetTaste/includes/logout.php" class="btn btn-outline-light btn-sm">Logout</a>
        </div>
    </div> 
<?php else: ?>         
    <div class="card text-center bg-secondary text-white mb-3 rounded-circle">
        <div class="card-body">
            <h1 class="display-4">
                <i class="fa fa-user"></i>
            </h1>
            <a href="/sweetTaste/login.php" class="btn btn-outline-light btn-sm">Admin Login</a>
        </div>
    </div>  
<?php endif; ?>
    <div class="card text-center bg-warning text-white mb-3 rounded-circle">
        <div class="card-body">
          <h1 class="display-4">
            <i class="fa fa-floppy-o"></i> 
          </h1>
          <a href="/sweetTaste/registration.php" class="btn btn-outline-light btn-sm">Admin Registration</a>
        </div>
    </div>

    <div class="card text-center bg-info text-white mb-3 rounded-circle">
        <div class="card-body">
          <h1 class="display-4">
            <i class="fa fa-users"></i>
          </h1>
          <a href="/sweetTaste/contact.php" class="btn btn-outline-light btn-sm">Contact</a>
        </div>
    </div>
</div>
        
