<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Forgot Password</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="stylesheet" href="asset/font/iconsmind-s/css/iconsminds.css" />
  <link rel="stylesheet" href="asset/font/simple-line-icons/css/simple-line-icons.css" />

  <link rel="stylesheet" href="asset/css/vendor/bootstrap.min.css" />
  <link rel="stylesheet" href="asset/css/vendor/bootstrap.rtl.only.min.css" />
  <link rel="stylesheet" href="asset/css/vendor/bootstrap-float-label.min.css" />
  <link rel="stylesheet" href="asset/css/dore.light.bluenavy.min.css" />

</head>

<body class="background no-footer">
  <div class="fixed-background"></div>
  <main>
    <div class="container">
      <div class="row h-100">
        <div class="col-12 col-md-10 mx-auto my-auto">
          <div class="card auth-card">
            <div class="position-relative image-side ">
              <p class=" text-white h2">RESET PASSWORD</p>
              <p class="white mb-0">
                Please add new password and repeat same password again and submit.
              </p>
            </div>
            <div class="form-side">
              <a href="">
                <span class="logo-single"></span>
              </a>
              <h6 class="mb-4">Create new password</h6>
              <form id="quickForm" method="post" action="">
                <h1>New Password</h1>
                <label class="form-group has-float-label mb-4">
                  <input id="password" type="password" name="password" class="form-control" onkeyup='check();' placeholder="New Password" required />
                  <span>New password</span>
                </label>
                <label class="form-group has-float-label mb-4">
                  <input id="confirm_password" type="password" name="password_again" class="form-control" onkeyup='check();' placeholder="Repeat Password" required />
                  <span>Repeat password</span>
                </label>
                <p id='message'></p>
                <label>
                  <button type="submit" class="btn btn-primary submit">Submit</button>
                </label>
                <div class="clearfix"></div>
                <div class="separator">
                  <!-- Alert condition -->
                
                    <div class="alert alert-danger" role="alert"> error</div>
                 

                    <div class="alert alert-success" role="alert"> success </div>
           
                  <!-- Alert condition End -->
                  <div class="clearfix"></div>
                  <br />
                  <div>


                  </div>
                </div>
              </form>

            </div>

          </div>

        </div>
      </div>
    </div>
  </main>
  <script src="asset/js/vendor/jquery-3.3.1.min.js"></script>
  <script>
 var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Password is matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Password is not matching';
  }
}
  </script>
  <script src="asset/js/vendor/bootstrap.bundle.min.js"></script>
  <script src="asset/js/dore.script.js"></script>
</body>

</html>