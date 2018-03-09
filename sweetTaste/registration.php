<?php  include "includes/db.php"; ?>
<?php  include "includes/header.php"; ?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // trim: get rid of white space
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $adminPassword = trim($_POST['adminPassword']);
    $error = [
        'username' => '',
        'email' => '',
        'password' => '',
        'adminPassword' => ''
    ];
    
    if(strlen($username) < 4) {
        $error['username'] = 'Username needs to be longer';
    }
    if($username == '') {
        $error['username'] = 'Username cannot be empty';
    }
    if(username_exists($username)) {
        $error['username'] = 'Username already exists, pick another username';
    }
    if($email == '') {
        $error['email'] = 'Email cannot be empty';
    }
    if(email_exists($email)) {
        $error['email'] = 'Email already exists, <a href="index.php"> Please login</a>';
    }
    if($password == '') {
        $error['password'] = 'Password cannot be empty';
    }
    
    if($adminPassword != '123') {
        $error['adminPassword'] = 'Admin Password is wrong';
    }
    
    foreach($error as $key => $value) {
        if(empty($value)) {
            unset($error[$key]);
        }
    }
    
    if(empty($error)) {
        register_user($username, $email, $password);
        ?>
        <div class="alert alert-success">
            <strong>Success!</strong> Registered.
        </div>
        <?php
    } else {
        ?>
        <div class="alert alert-danger">
            <strong>Failed!</strong> Please Registered Again.
        </div>
        <?php
    }
}


?>

<?php  include "includes/navigation.php"; ?>

<header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1><i class="fa fa-user"></i> Blog Admin</h1>
        </div>
      </div>
    </div>
  </header>

  <!-- ACTIONS -->
  <section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">

      </div>
    </div>
  </section>
  

  <section id="registration">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card">
            <div class="card-header">
              <h4>Account Registration</h4>
            </div>
            <div class="card-body">
              <form action="registration.php" method="post" id="login-form" autocomplete="off">
               <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="username" id="username" class="form-control" placeholder="Enter Desired Username"
                            autocomplete="on"
                            value="<?php echo isset($username) ? $username : '' ?>">
                    <p><?php echo isset($error['username']) ? $error['username'] : '' ?></p>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com"
                            $autocomplete="on"
                            value="<?php echo isset($email) ? $email : '' ?>">
                            <p><?php echo isset($error['email']) ? $error['email'] : '' ?></p>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="key" class="form-control" placeholder="Password">
                            <p><?php echo isset($error['password']) ? $error['password'] : '' ?></p>
                </div>
                <div class="form-group">
                  <label for="password">Blog Admin Password (Please enter 123 for testing purpose)</label>
                  <input type="password" name="adminPassword" id="key" class="form-control" placeholder="Blog Admin Password">
                            <p><?php echo isset($error['password']) ? $error['password'] : '' ?></p>
                </div>
                <input type="submit" name="register" id="btn-login" class="btn btn-primary btn-block" value="Register">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php include "includes/footer.php";?>
