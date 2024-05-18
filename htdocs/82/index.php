<!DOCTYPE html>
<html lang="en">
<head>
	<title>GFG- Store Data</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<section class="mx-auto" style="width:350px">
	
<h1>Create an User Account</h1>
		<form action="insert.php" method="post">

		<div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">First Name</label>
            <input type="text" name="first_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
			
<!-- <p>
			<label for="firstName">First Name:</label>
			<input type="text" name="first_name" id="firstName">
			</p> -->

			<div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Last Name</label>
            <input type="text" name="last_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
<!-- <p>
			<label for="lastName">Last Name:</label>
			<input type="text" name="last_name" id="lastName">
			</p> -->

			

			<div class="mb-3">
            	<label for="exampleInputEmail1" class="form-label">gender</label>
            	<input type="text" name="gender" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        	</div>
			
<!-- 
<p>
			<label for="Gender">Gender:</label>
			<input type="text" name="gender" id="Gender">
			</p> -->


			<div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Password:</label>
            <input type="password" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
			
<!-- <p>


			<label for="Address">Address:</label>
			<input type="text" name="address" id="Address">
			</p> -->

			<div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Confirm pass</label>
            <input type="password" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>


<!-- <p>
			<label for="emailAddress">Email Address:</label>
			<input type="text" name="email" id="emailAddress">
			</p> -->


			<!-- <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">First Name</label>
            <input type="text" name="last_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div> -->


		<button type="submit" class="btn btn-primary">Log in</button>
			<!-- <input type="submit" value="Submit"> -->
		</form>
</section>
</body>
</html>
