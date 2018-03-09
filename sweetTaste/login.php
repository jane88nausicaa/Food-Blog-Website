<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
<?php  include "includes/navigation.php"; ?>

<?php
checkIfUserIsLoggedInAndRedirect('/sweetTaste/admin');
if(ifItIsMethod('post')) {
    if(isset($_POST['username']) && isset($_POST['password'])) {
        login_user($_POST['username'], $_POST['password']);
    } else {
        redirect('/sweetTaste/login.php');
    }
}
?>
<header id="main-header" class="py-2 bg-success text-white">
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

<section id="login">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card">
            <div class="card-header">
              <h4>Account Login</h4>
            </div>
            <div class="card-body">
              <form id="login-form" role="form" autocomplete="off" class="form" method="post">
               <div class="form-group">
                  <label for="username">Username (rico for testing purpose)</label>
                  <input type="text" name="username" id="username" class="form-control" placeholder="Enter Your Username"
                            autocomplete="on"
                            value="<?php echo isset($username) ? $username : '' ?>">
                    <p><?php echo isset($error['username']) ? $error['username'] : '' ?></p>
                </div>
                <div class="form-group">
                  <label for="password">Password (123 for testing purpose)</label>
                  <input type="password" name="password" id="key" class="form-control" placeholder="Enter Your Password">
                            <p><?php echo isset($error['password']) ? $error['password'] : '' ?></p>
                </div>
                <input type="submit" name="login" id="btn-login" class="btn btn-success btn-block" value="Login">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br><br><br><br><br><br><br><br><br><br>


	<hr>

	<?php include "includes/footer.php";?>

 <!-- /.container -->