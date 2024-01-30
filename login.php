<?php

session_start();
include ('settings/db.php');

$query = $dbh->prepare("SHOW TABLES LIKE :users");
$query->execute([':users' => 'users']);

if (!$query->rowCount()) {
  header('Location: signup.php');
  exit;
}

$success_message = $error_message = $email = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = isset($_POST['email']) ? $_POST['email'] : null;
  $password = isset($_POST['password']) ? $_POST['password'] : null;
  $rememberme = isset($_POST['rememberme']) ? $_POST['rememberme'] : false;

  if (empty($email)) {
    $error_message = "Kindly enter your email.";
  }elseif(empty($password)) {
    $error_message = "Kindly enter your password.";
  } else {
    $query = $dbh->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
    $query->execute(['email' => $email]);
    $row = $query->fetch(PDO::FETCH_ASSOC);

    if(!$row) {
      $error_message = "Invalid login details";
    }else {
      if (!password_verify($password, $row['password'])) {
        $error_message = "Invalid login details";
      }else {

        if ($rememberme) {
          $expiry = time() + 60 * 60 * 24 * 30; // 30 days
          setcookie('remember_user', $email, $expiry);
        }

        $user = [
          'login' => true,
          'email' => $row['email']
        ];

        $_SESSION['user'] = $user;
        $success_message = "Login successfull";
        header('Location: index.php');
        exit;
      }
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
    <link rel="stylesheet" href="css/style.ui.css" />
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
                <img src="./img/login.svg" width="50%" alt="" />
              </div>
            </div>
            <div class="uk-width-expand@m uk-flex uk-flex-middle">
              <div class="uk-grid uk-flex-center">
                <div class="uk-width-3-5@m">
                  <div class="in-padding-horizontal@s">
                    <!-- module logo begin -->
                    <a class="uk-logo" href="index.php">
                      <h1 class="logo-text">fastcheckouts</h1>
                    </a>
                    <!-- module logo begin -->
                    <?php if(!empty($error_message)): ?>
                      <div class="uk-alert uk-alert-danger">
                        <div class='uk-text-danger'><?= $error_message; ?></div>
                      </div>
                    <?php endif; ?>
                    <?php if(!empty($_GET['signup'])): ?>
                      <div class="uk-alert uk-alert-success">
                        <div class='uk-text-success'>Signup successful. Kindly login.</div>
                      </div>
                    <?php endif; ?>
                    <p
                      class="uk-text-lead uk-margin-top uk-margin-bottom"
                    >
                      Log into your account. Don't have an account? <a href="<?= BASE_URL; ?>/signup.php">Register here</a>
                    </p>
                    <!-- login form begin -->
                    <form class="uk-grid uk-form" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                      <div class="uk-margin-small uk-width-1-1 uk-inline">
                        <span
                          class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"
                        ></span>
                        <input
                          class="uk-input uk-border-rounded"
                          id="email"
                          value="<?= $email; ?>"
                          type="email"
                          placeholder="Email"
                          name="email"
                        />
                      </div>
                      <div class="uk-margin-small uk-width-1-1 uk-inline">
                        <span
                          class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"
                        ></span>
                        <input
                          class="uk-input uk-border-rounded"
                          id="password"
                          value=""
                          type="password"
                          placeholder="Password"
                          name="password"
                        />
                      </div>
                      <div class="uk-margin-small uk-width-auto uk-text-small">
                        <label
                          ><input
                            class="uk-checkbox uk-border-rounded"
                            type="checkbox"
                            value="<?= $rememberme; ?>"
                            name="rememberme"
                          />
                          Remember me</label
                        >
                      </div>
                      <div
                        class="uk-margin-small uk-width-expand uk-text-small"
                      >
                        <label class="uk-align-right"
                          ><a class="uk-link-reset" href="#"
                            >Forgot password?</a
                          ></label
                        >
                      </div>
                      <div class="uk-margin-small uk-width-1-1">
                        <button
                          class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left"
                          type="submit"
                          name="submit"
                        >
                          Sign in
                        </button>
                      </div>
                    </form>
                    <!-- login form end -->
                    <!-- <p class="uk-heading-line uk-text-center">
                      <span>Or sign in with</span>
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
