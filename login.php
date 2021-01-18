<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
    <?php session_start();?>

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6" style="background-image: url(White_Flower.jpg)"></div> 
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">User Login</h1>
                  </div>
                  <form class="user" name="myform" action="login_database.php" method="post">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="pass">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-radio small">
                        <input type="radio" class="custom-control-input" id="customCheck" name="radio" value="client">
                        <label class="custom-control-label" for="customCheck"><b>Client</b></label>
                      </div>
                      <div class="custom-control custom-radio small">
                        <input type="radio" class="custom-control-input" id="customCheck2" name="radio" value="admin">
                        <label class="custom-control-label" for="customCheck2"><b>Admin</b></label>
                      </div> 
                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Sign In" name="submit" onclick="formvalidate()">
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.php">Forgot Password?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
<script>
    var x,y,z;
    
    function formvalidate()
    {
        x=document.forms["myform"]["email"].value;
        y=document.forms["myform"]["pass"].value;
    
        var patt= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ ;
        if(!patt.test(x))            // Email Validation Condition
        {   
            alert("Enter Appropriate Email");
        }
        /*var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
        if(!passw.test(y))          // Password Condition character{6-20 and atleast One Uppercase & Lowercase & Numeric Digit}
        {
            alert("Your Password Contain atleast 6 Characters and Atleast One Uppercase & One Lowercase & One Numeric Digit");
        }*/ 
    }
</script> 

</body>

</html>
