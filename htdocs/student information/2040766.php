<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student Information</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
 <div class="container">
        <h2>Student Registration Form</h2>
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="username">Student full name:</label>
                <input type="text" id="username" name="username" required>
            </div>
			
			<div class="form-group">
                <label for="Fathers_name">Fathers name:</label>
                <input type="text" id="Fathers_name" name="Fathers_name" required>
            </div>
			
			<div class="form-group">
                <label for="std-id">student id:</label>
                <input type="text" id="std-id" name="std-id" required>
            </div>
			
			
			
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
			
			
			<div class="form-group">
                <label for="phn">Phone Number:</label>
                <input type="phn" id="phn" name="phn" required>
            </div>
			
			<div class="form-group">
                <label for="phn">country:</label>
                <input type="phn" id="phn" name="phn" required>
            </div>
			
			
			<div class="form-group">
                <label for="d-birth">Date of birth:</label>
                <input type="birth" id="birth" name="birth" required>
            </div>
			
			
			
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
			
			<div class="form-group">
                <label for="M-add">Mailing Address:</label>
                <input type="M-add" id="M-add" name="M-add" required>
            </div>
			
			
            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
</body>
</htm>



