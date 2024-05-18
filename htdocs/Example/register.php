<?php  include_once("inc/database.php"); ?>

<?php
    $message ="";
    if(isset($_POST)){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $encryptedPass=md5($password);
        if($email='' || $password=''){
            $message="You have to enter email and password";
        }
        else{
            mysqli_query($mysql,"INSERT INTO user (email,password) VALUES('$email',$encryptedPass)");
            $message="Registration Successful!";
        }
    }

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   <?php  include_once("inc/header.php"); ?>
   <form action="" method="POST">
   
        <div class="row justify-content-center">
                <div class="col-4">
                    <p><?php echo $message;?></p>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Passowrd">
                    </div>
                    <button class="btn btn-success">Submit</button>
                </div>
        </div>
   </form>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>