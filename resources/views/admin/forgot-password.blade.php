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
                            <p class=" text-white h2">Forgot Password</p>
                            <p class="white mb-0">
                                Please use your User ID & E-mail to reset your password.
                             
                            </p>
                        </div>
                        <div class="form-side">
                        <img class="mb-4 text-center" src="asset/logos/logo-with-title.svg" width="150" />
                            <h6 class="mb-4">Forgot Password</h6>
                            <form method="post" action=" ">
                                
                                <label class="form-group has-float-label mb-4">
                                    <input type="email" name="email" class="form-control" required="" />
                                    <span>E-mail</span>
                                </label>
                                <div class="d-flex justify-content-start align-items-center">
                                  <!--  <button class="btn btn-primary btn-lg btn-shadow" type="submit">RESET</button> -->
                                    <a class="btn btn-primary btn-lg btn-shadow" href="reset_password.php">RESET</a>
                                </div>
                            </form>
                            <div class="col-12 mt-4">
                        <!-- Alert condition -->
                        
                            <div class="alert alert-danger" role="alert"> error  </div>
                     
                       
                            <div class="alert alert-success" role="alert">success</div>
                      
                        <!-- Alert condition End -->
                    </div>
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
    </main>
    <script src="asset/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="asset/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="asset/js/dore.script.js"></script>
</body>

</html>