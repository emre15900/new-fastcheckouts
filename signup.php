<?php

ob_start();
include ('settings/db.php');

$query = $dbh->prepare("SHOW TABLES LIKE :users");
$query->execute([':users' => 'users']);

if (!($query->rowCount() > 0)) {
  $sql = "CREATE TABLE `users` (
    `id` int unsigned NOT NULL AUTO_INCREMENT,
    `email` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
    `username` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
    `password` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
    `status` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
    PRIMARY KEY (`id`)
  )";
  $dbh->exec($sql);
}

$username_error = $email_error = $password_error = $confirm_password_error = "";
$username = $email = '';
$success_message = $error_message = '';

// Function to sanitize user input
function sanitize_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the submitted username and password
  $username = isset($_POST['username']) ? $_POST['username'] : null;
  $password = isset($_POST['password']) ? $_POST['password'] : null;
  $email = isset($_POST['email']) ? $_POST['email'] : null;
  $confirm_password = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : null;

  // Validate the username and password
  $error = false;

  if (empty($username)) {
    $error = true;
    $username_error = "Username is required";
  } else {
    $username = sanitize_input($username);
    // Check if name contains only letters
    if (!preg_match("/^[a-zA-Z]*$/", $username)) {
      $error = true;
      $username_error = "Only letters allowed. No white space allowed";
    }

    $query = $dbh->prepare("SELECT * FROM users WHERE username = :username LIMIT 1");
    $query->execute(['username' => $username]);
    $row = $query->rowCount();
    if($row) {
      $error = true;
      $username_error = "Username already exists";
    }
  }

  // Validate email
  if (empty($email)) {
    $error = true;
    $email_error = "Email is required";
  } else {
    $email = sanitize_input($email);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error = true;
      $email_error = "Invalid email format";
    }
    $query = $dbh->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
    $query->execute(['email' => $email]);
    $row = $query->rowCount();
    if($row) {
      $error = true;
      $username_error = "Email already exists";
    }
  }

  if (empty($password)) {
    $error = true;
    $password_error = "Password is required";
  }

  if (empty($confirm_password) || $password !== $confirm_password) {
    $error = true;
    $confirm_password_error = "Password and password confirm must match.";
  }

  // If there are no validation errors
  if (empty($error)) {
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = $dbh->prepare("INSERT INTO users (email, username, password, status) VALUES (:email, :username, :password, :status)");
    $query->execute(['email' => $email, 'username' => $username, 'password' => $password, 'status' => 'active']);
    $count = $query->rowCount();

    if(!$count) {
      $error = true;
      $error_message = 'Signup failed. Try again later.';
    }else {
      $success_message = 'Signup successfull';
      header('Location: login.php?signup=1');
      exit;
    }
  }
}

?>

<!DOCTYPE html>
<html lang="zxx" dir="ltr">
  <head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta name="description" content="Premium HTML5 Template by Indonez" />
    <meta
      name="keywords"
      content="blockit, uikit3, indonez, handlebars, scss, vanilla javascript"
    />
    <meta name="author" content="Indonez" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#e9e8f0" />
    <!-- Site Properties -->
    <title>Sign in - Profit HTML5 Template</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png" />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/vendors/uikit.min.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!-- preloader begin -->
    <div class="in-loader">
      <div></div>
      <div></div>
      <div></div>
    </div>
    <!-- preloader end -->
    <main>
      <!-- section content begin -->
      <div class="uk-section uk-padding-remove-vertical">
        <div class="uk-container uk-container-expand">
          <div class="uk-grid" data-uk-height-viewport="expand: true">
            <div
              class="uk-width-3-5@m uk-background-cover uk-background-center-right uk-visible@m uk-box-shadow-xlarge"
            >
              <div
                style="
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  height: 100vh;
                "
              >
                <img src="img/register.svg" width="70%" alt="" />
              </div>
            </div>
            <div class="uk-width-expand@m uk-flex uk-flex-middle">
              <div class="uk-grid uk-flex-center">
                <div class="uk-width-3-5@m">
                  <div class="in-padding-horizontal@s">
                    <!-- module logo begin -->
                    <a class="uk-logo" href="<?= BASE_URL; ?>">
                      <h1 class="logo-text">fastcheckouts</h1>
                    </a>
                    <!-- module logo begin -->
                    <p
                      class="uk-text-lead uk-margin-top uk-margin-remove-bottom"
                    >
                    Create a new account

                    </p>
                    <?php if(!empty($success_message)): ?>
                      <div class="uk-alert uk-alert-success">
                        <div class='uk-text-success'><?= $success_message; ?></div>
                      </div>
                    <?php endif; ?>
                    <?php if(!empty($error_message)): ?>
                      <div class="uk-alert uk-alert-danger">
                        <div class='uk-text-danger'><?= $error_message; ?></div>
                      </div>
                    <?php endif; ?>
                    <p
                      class="uk-text-small uk-margin-remove-top uk-margin-medium-bottom"
                    >
                    Do you already have an account?
                    <a href="<?= BASE_URL; ?>/login.php">Login here</a>
                    </p>
                    <!-- login form begin -->
                    <form class="uk-grid uk-form" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                      <div class="uk-margin-small uk-width-1-1 uk-inline">
                        <!-- <span
                          class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"
                        ></span> -->
                        <input
                          class="uk-input uk-border-rounded <?= $username_error ? 'uk-form-danger ': ''; ?>"
                          id="username"
                          value="<?= $username; ?>"
                          type="text"
                          placeholder="Username",
                          name="username"
                        />
                        <?php if (!empty($username_error)): ?>
                          <div class="uk-alert uk-alert-danger" uk-alert>
                            <div class='uk-text-danger uk-text-small'><?= $username_error; ?></div>
                          </div>
                        <?php endif; ?>
                      </div>
                      <div class="uk-margin-small uk-width-1-1 uk-inline">
                        <!-- <span
                          class="uk-form-icon uk-form-icon-flip fas fa-envelope fa-sm"
                        ></span> -->
                        <input
                          class="uk-input uk-border-rounded <?= $email_error ? 'uk-form-danger ': ''; ?>"
                          id="email"
                          value="<?= $email; ?>"
                          type="text"
                          placeholder="Email"
                          name="email"
                        />
                        <?php if (!empty($email_error)): ?>
                          <div class="uk-alert uk-alert-danger" uk-alert>
                            <div class='uk-text-danger uk-text-small'><?= $email_error; ?></div>
                          </div>
                        <?php endif; ?>
                      </div>
                      <div class="uk-margin-small uk-width-1-1 uk-inline">
                        <!-- <span
                          class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"
                        ></span> -->
                        <input
                          class="uk-input uk-border-rounded <?= $password_error ? 'uk-form-danger' : ''; ?>"
                          id="password"
                          value=""
                          type="password"
                          placeholder="Password"
                          name="password"
                        />
                        <?php if (!empty($password_error)): ?>
                          <div class="uk-alert uk-alert-danger" uk-alert>
                            <div class='uk-text-danger uk-text-small'><?= $password_error; ?></div>
                          </div>
                        <?php endif; ?>
                      </div>
                      <div class="uk-margin-small uk-width-1-1 uk-inline">
                        <!-- <span
                          class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"
                        ></span> -->
                        <input
                          class="uk-input uk-border-rounded <?= $confirm_password_error ? 'uk-form-danger' : ''; ?>"
                          id="password"
                          value=""
                          type="password"
                          placeholder="Password Confirm"
                          name="confirm_password"
                        />
                        <?php if (!empty($confirm_password_error)): ?>
                          <div class="uk-alert uk-alert-danger" uk-alert>
                            <div class='uk-text-danger uk-text-small'><?= $confirm_password_error; ?></div>
                          </div>
                        <?php endif; ?>
                      </div>
                      <div class="uk-margin-small uk-width-1-1">
                        <button
                          class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left"
                          type="submit"
                          name="submit"
                        >
                          Sign up
                        </button>
                      </div>
                    </form>
                    <?php if (!empty($success_message)): ?>
                      <div class="uk-alert uk-alert-success" uk-alert>
                        <div class='uk-text-success'><?= $success_message; ?></div>
                      </div>
                    <?php endif; ?>
                    <!-- login form end -->
                    <!-- <p class="uk-heading-line uk-text-center">
                      <span>Or sign up with</span>
                    </p>
                    <div class="uk-margin-medium-bottom uk-text-center">
                      <a
                        class="uk-button uk-button-small uk-border-rounded in-brand-google"
                        href="#"
                        ><i class="fab fa-google uk-margin-small-right"></i
                        >Google</a
                      >
                      <a
                        class="uk-button uk-button-small uk-border-rounded in-brand-facebook"
                        href="#"
                        ><i class="fab fa-facebook-f uk-margin-small-right"></i
                        >Facebook</a
                      >
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- section content end -->
    </main>
    <!-- Javascript -->
    <script src="js/vendors/uikit.min.js"></script>
    <script src="js/vendors/indonez.min.js"></script>
  </body>
</html>
