<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>


  <?php
      
  ?>

    <section class="mx-auto mt-5 bg-light" style="width:300px">
      
    <h2>Login Form</h2>

                      <form action="index.php" method="post">
                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">First Name</label>
                          <input type="text" name="first_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" name="last_name" class="form-control" id="exampleInputPassword1">
                        </div>

                        <button type="submit" class="btn btn-primary">Log in</button>
                        <button type="submit" class="btn btn-primary">Create Account</button>


                          <!-- <div>
                            <label for="uname"><b>First_name</b></label>
                            <input type="text" placeholder="Enter Username" name="first_name" required>
                          </div>

                          <div>
                          <label for="psw"><b>Last Name</b></label>
                          <input type="password" placeholder="Enter Password" name="last_name" required>
                          </div>    
                          <button type="submit">Login</button> -->


                      </form>


    </section>

</body>
</html>
